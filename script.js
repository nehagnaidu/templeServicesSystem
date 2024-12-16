function showOptions(optionId) {
    // Hide all options initially
    const options = document.querySelectorAll('.options');
    options.forEach(option => {
        option.style.display = 'none';
    });

    // Show the card options after selecting Debit/Credit card
    document.getElementById(optionId).style.display = 'block';

    // Hide card form and submit button when switching between Debit/Credit
    document.getElementById('card-form').style.display = 'none';
    document.getElementById('submit-button').style.display = 'none';
}

function showForm(formId) {
    // Show the card form and submit button after selecting Visa/MasterCard
    document.getElementById(formId).style.display = 'block';
    document.getElementById('submit-button').style.display = 'block';
}
