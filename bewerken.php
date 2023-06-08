<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bewerken</title>
    <link rel="stylesheet" href="bewerken.css" />
    <link
      rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolic2y="no-referrer"
    />
</head>
<body>
    <form action="profiel.php" method="POST">
        <label for="name">Naam:</label>
        <input type="text" id="name" name="name" required>
        <span class="error" id="name-error"></span><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <span class="error" id="email-error"></span><br>

        <label for="age">Leeftijd:</label>
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
