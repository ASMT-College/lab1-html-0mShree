<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form id="myForm" action="submit.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required minlength="4">
                <div class="error" id="nameError">Name must be at least 4 characters</div>
            </div>

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required min="18">
                <div class="error" id="ageError">Must be at least 18 years old</div>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea>
                <div class="error" id="descError">Description is required</div>
            </div>

            <button type="submit">Submit</button>
        </form>
        <div id="serverErrors" class="error"></div>
        <div id="successMessage" style="color: green; display: none;">Form submitted successfully!</div>
    </div>

    <script src="main.js"></script>
</body>
</html>