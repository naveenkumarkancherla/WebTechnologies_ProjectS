document.addEventListener('DOMContentLoaded', function () {
    const addTaskBtn = document.getElementById('addTaskBtn');
    const taskList = document.getElementById('taskList');
    const addTaskModalBtn = document.getElementById('addTaskModalBtn');
    const taskDescriptionInput = document.getElementById('taskDescription');
    const responsibleInput = document.getElementById('responsible');
    const etaInput = document.getElementById('eta');
    let taskCounter = 1;
    let currentEditingRow = null;

    // Function to fetch tasks from the database
    function fetchTasks() {
        fetch('get_tasks.php')
            .then(response => response.json())
            .then(tasks => {
                if (tasks.length > 0) {
                    // If tasks exist, populate the table
                    taskList.innerHTML = '';
                    taskCounter = 1;
                    tasks.forEach(task => {
                        const newRow = document.createElement('tr');
                        newRow.innerHTML = `
                            <td>${taskCounter}</td>
                            <td>${task.taskDescription}</td>
                            <td>${task.responsible}</td>
                            <td>${task.eta}</td>
                            <td>
                                <button class="btn btn-primary btn-sm edit-btn">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-success btn-sm update-btn">
                                    <i class="bi bi-check"></i>
                                </button>
                                <button class="btn btn-danger btn-sm delete-btn">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        `;
                        taskList.appendChild(newRow);
                        taskCounter++;
                    });
                } else {
                    // If no tasks exist, display a message
                    taskList.innerHTML = '<tr><td colspan="5">Tasks are empty.</td></tr>';
                }
            });
    }

    // Fetch tasks when the page loads
    fetchTasks();

    addTaskBtn.addEventListener('click', function () {
        resetTaskForm();
        currentEditingRow = null;
    });

    addTaskModalBtn.addEventListener('click', function () {
        const taskDescription = taskDescriptionInput.value;
        const responsible = responsibleInput.value;
        const eta = etaInput.value;

        if (taskDescription && responsible && eta) {
            if (currentEditingRow) {
                // Update existing row with new values
                const taskId = currentEditingRow.cells[0].textContent;
                currentEditingRow.cells[1].textContent = taskDescription;
                currentEditingRow.cells[2].textContent = responsible;
                currentEditingRow.cells[3].textContent = eta;
                
                // Send the updated data to the PHP script for storage
                updateTaskInDatabase(taskId, taskDescription, responsible, eta);
            } else {
                // Add a new row
                const newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td>${taskCounter}</td>
                    <td>${taskDescription}</td>
                    <td>${responsible}</td>
                    <td>${eta}</td>
                    <td>
                        <button class="btn btn-primary btn-sm edit-btn">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn btn-success btn-sm update-btn">
                            <i class="bi bi-check"></i>
                        </button>
                        <button class="btn btn-danger btn-sm delete-btn">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>
                `;

                taskList.appendChild(newRow);
                taskCounter++;

                // Send the new task data to the PHP script for storage
                addTaskToDatabase(taskDescription, responsible, eta);
            }

            // Close the modal
            $('#addTaskModal').modal('hide');
            resetTaskForm();
        }
    });

    taskList.addEventListener('click', function (event) {
        const target = event.target;
        if (target.classList.contains('edit-btn')) {
            currentEditingRow = target.closest('tr');
            const cells = currentEditingRow.cells;
            taskDescriptionInput.value = cells[1].textContent;
            responsibleInput.value = cells[2].textContent;
            etaInput.value = cells[3].textContent;

            // Open the modal for editing
            $('#addTaskModal').modal('show');
        }
    });

    function resetTaskForm() {
        taskDescriptionInput.value = '';
        responsibleInput.value = '';
        etaInput.value = '';
    }

    function addTaskToDatabase(taskDescription, responsible, eta) {
        fetch('addtask.php', {
            method: 'POST',
            body: new URLSearchParams({
                taskDescription: taskDescription,
                responsible: responsible,
                eta: eta
            }),
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            }
        });
    }

    function updateTaskInDatabase(taskId, taskDescription, responsible, eta) {
        fetch('update_task.php', {
            method: 'POST',
            body: new URLSearchParams({
                taskId: taskId,
                taskDescription: taskDescription,
                responsible: responsible,
                eta: eta
            }),
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            }
        });
    }
});

function deleteTaskInDatabase(taskId, target) {
    // Send a request to your PHP script to delete the task by taskId
    fetch('delete_task.php', {
        method: 'POST',
        body: new URLSearchParams({
            action: 'delete',
            taskId: taskId
        }),
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        }})
        .then(response => response.text())
        .then(result => {
            if (result === 'Task deleted successfully!') {
                // Task was deleted successfully, remove the corresponding row from the table
                if (currentEditingRow && currentEditingRow.cells[0].textContent === taskId) {
                    resetTaskForm();
                }
                taskList.removeChild(target.closest('tr'));
            }
        });
}
// delete operation event
taskList.addEventListener('click', function (event) {
    const target = event.target;
    if (target.classList.contains('edit-btn')) {
        currentEditingRow = target.closest('tr');
        const cells = currentEditingRow.cells;
        taskDescriptionInput.value = cells[1].textContent;
        responsibleInput.value = cells[2].textContent;
        etaInput.value = cells[3].textContent;

        // Open the modal for editing
        $('#addTaskModal').modal('show');
    } else if (target.classList.contains('delete-btn')) {
        // Handle the delete operation here
        const taskId = target.closest('tr').cells[0].textContent;
        deleteTaskInDatabase(taskId, target);
    }
});
