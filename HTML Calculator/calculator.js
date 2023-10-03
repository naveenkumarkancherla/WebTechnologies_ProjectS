document.addEventListener("DOMContentLoaded", function() {
            var calcButtons = document.querySelectorAll('.calc-btn');
            var numberDiv = document.getElementById("number_div");
            var expressionDiv = document.getElementById("expression");
            var valueDiv = document.getElementById("value_div");
            var savedExpression = document.getElementById("savedExpression");

            calcButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var key = this.getAttribute('data-event_key');
                    handleButton(key);
                });
            });

            document.addEventListener('keypress', function(e) {
                var key = e.key;
                var button = document.querySelector('button[data-event_key="' + key + '"]');
                if (button) {
                    button.classList.add('active');
                    if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
                        handleButton(key);
                    }
                }
            });

            document.addEventListener('keyup', function(e) {
                var key = e.key;
                var button = document.querySelector('button[data-event_key="' + key + '"]');
                if (button) {
                    button.classList.remove('active');
                }
            });

            function handleButton(key) {
                if (key >= '0' && key <= '9') {
                    appendNumber(key);
                } else if (key === '+' || key === '-' || key === '*' || key === '/') {
                    generateExpression(key);
                } else if (key === '=') {
                    evaluateExpression();
                } else if (key === 'Enter') {
                    evaluateExpression();
                } else if (key === '.') {
                    appendDecimal();
                } else if (key === 'Delete') {
                    clearEntry();
                } else if (key === 'Backspace') {
                    clearEntry();
                }
            }

            function appendNumber(number) {
                var currentNumber = numberDiv.textContent;
                if (currentNumber === '0') {
                    numberDiv.textContent = number;
                } else {
                    numberDiv.textContent += number;
                }
            }

            function appendDecimal() {
                var currentNumber = numberDiv.textContent;
                if (!currentNumber.includes('.')) {
                    numberDiv.textContent += '.';
                }
            }

            function generateExpression(operator) {
                var existingNumber = numberDiv.textContent;
                var savedExpressionValue = savedExpression.value;
                var expression = (savedExpressionValue || '') + existingNumber + operator;
                numberDiv.textContent = "";
                savedExpression.value = expression;
                expressionDiv.textContent = expression;
            }

            function evaluateExpression() {
                var expression = savedExpression.value + numberDiv.textContent;
                try {
                    var result = calculateExpression(expression);
                    valueDiv.textContent = result;
                } catch (error) {
                    valueDiv.textContent = "Error";
                }
                clearAll();
            }

            function calculateExpression(expression) {
                return Function('"use strict"; return (' + expression + ')')();
            }

            function clearEntry() {
                numberDiv.textContent = "0";
            }

            function clearAll() {
                numberDiv.textContent = "";
                savedExpression.value = "";
                expressionDiv.textContent = "";
            }
        });