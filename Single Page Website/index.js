// Here i have validated the Contact Us form details 
//and sent to database PHP my admin

document.addEventListener('DOMContentLoaded', function () {
    const emailInput = document.getElementById('email');
    const emailError = document.getElementById('emailError');
    const nameInput = document.getElementById('name');
    const nameError = document.getElementById('nameError');
    //email validation here
    emailInput.addEventListener('input', function () {
        const emailValue = emailInput.value.trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if(!emailRegex.test(emailValue)) {
            emailInput.style.border = '2px solid red';
            emailError.innerHTML = '<p style="color:red;"><i class="fas fa-exclamation-circle" style="color: red;"></i>Enter valid email address.</p>';
        }else {
            emailInput.style.border = '2px solid green';
            emailError.innerHTML = '<i class="fas fa-check-circle" style="color:green;"></i>';
        }
    });
   
    // name validation here
    nameInput.addEventListener('input', function () {
        const nameValue = nameInput.value.trim();
        const nameRegex = /^[a-zA-Z ]{5,}$/;
        if (nameValue.length >= 5) {
            if (!nameRegex.test(nameValue)) {
                nameInput.style.border = '2px solid red';
                nameError.innerHTML = '<p style="color:red;"><i class="fas fa-exclamation-circle" style="color: red;"></i>Name should contain only alphabets</p>';
            } else {
                nameInput.style.border = '2px solid green';
                nameError.innerHTML = '<i class="fas fa-check-circle" style="color:green;"></i>';
            }
        } else {
            nameError.innerHTML = '<p style="color:red;"><i class="fas fa-exclamation-circle" style="color: red;"></i>Length should be more than 5 characters.</p>';
        }
    });
    
     const form = document.getElementById('form');
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        if(validateForm()) {
            form.submit();
            confirm("Are you sure you want to submit?");
            alert("submitted successfully!!");
        }
        else{
            document.getElementById('submitError').innerHTML='<p style="color:red;"><i class="fas fa-exclamation-circle" style="color: red;"></i>Please Fill All Fields correctly</p>';
        }
    });

    function validateForm() {
        const emailValue = emailInput.value.trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(emailValue)) {
            emailError.innerHTML = '<p style="color:red;"><i class="fas fa-exclamation-circle" style="color: red;"></i>Enter valid email address.</p>';
            return false;
        }
        return true;
    }
});
