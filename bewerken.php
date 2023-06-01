<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <form action="profiel.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <span class="error" id="name-error"></span><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <span class="error" id="email-error"></span><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        <span class="error" id="age-error"></span><br>

        <input type="submit" value="Submit">
    </form>

    <script>
        document.querySelector("form").addEventListener("submit", function(event) {
            var nameInput = document.getElementById("name");
            var emailInput = document.getElementById("email");
            var ageInput = document.getElementById("age");

            var nameError = document.getElementById("name-error");
            var emailError = document.getElementById("email-error");
            var ageError = document.getElementById("age-error");

            var isValid = true;

            // Clear previous error messages
            nameError.textContent = "";
            emailError.textContent = "";
            ageError.textContent = "";

            // Validate name
            if (nameInput.value.trim() === "") {
                nameError.textContent = "Name is required";
                isValid = false;
            }

            // Validate email
            if (emailInput.value.trim() === "") {
                emailError.textContent = "Email is required";
                isValid = false;
            } else if (!validateEmail(emailInput.value.trim())) {
                emailError.textContent = "Invalid email format";
                isValid = false;
            }

            // Validate age
            if (ageInput.value.trim() === "") {
                ageError.textContent = "Age is required";
                isValid = false;
            } else if (isNaN(ageInput.value)) {
                ageError.textContent = "Age must be a number";
                isValid = false;
            }

            if (!isValid) {
                event.preventDefault(); // Prevent form submission if there are errors
            }
        });

        function validateEmail(email) {
            var re = /\S+@\S+\.\S+/;
            return re.test(email);
        }
    </script>
</body>
</html>
