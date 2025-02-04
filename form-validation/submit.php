<?php
$errors = [];

if (empty($_POST['name']) || strlen($_POST['name']) < 4) {
    $errors[] = 'Name must be at least 4 characters';
}

if (empty($_POST['age']) || !is_numeric($_POST['age']) || $_POST['age'] < 18) {
    $errors[] = 'Must be at least 18 years old';
}

if (empty($_POST['description'])) {
    $errors[] = 'Description is required';
}

if (!empty($errors)) {
    echo implode('<br>', $errors);
} else {
    echo 'Form submitted successfully!';
}
?>