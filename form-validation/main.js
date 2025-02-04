const form = document.getElementById('myForm');

form.addEventListener('submit', (e) => {
    e.preventDefault();
    clearErrors();

    const name = document.getElementById('name').value.trim();
    const age = document.getElementById('age').value.trim();
    const description = document.getElementById('description').value.trim();

    let isValid = true;

    if (name.length < 4) {
        showError('nameError', 'Name must be at least 4 characters');
        isValid = false;
    }

    if (!age || isNaN(age) || age < 18) {
        showError('ageError', 'Must be at least 18 years old');
        isValid = false;
    }

    if (!description) {
        showError('descError', 'Description is required');
        isValid = false;
    }

    if (isValid) {
        form.submit();
    }
});

function showError(elementId, message) {
    const errorElement = document.getElementById(elementId);
    errorElement.textContent = message;
    errorElement.style.display = 'block';
}

function clearErrors() {
    document.querySelectorAll('.error').forEach(error => {
        error.textContent = '';
        error.style.display = 'none';
    });
}