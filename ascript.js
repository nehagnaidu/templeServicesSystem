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

// Function to update price based on room type
document.addEventListener('DOMContentLoaded', function() {
    const roomSelect = document.getElementById('room');
    const priceDisplay = document.getElementById('price-display');
    const priceInput = document.getElementById('price-input');

    roomSelect.addEventListener('change', function() {
        let price;
        if (roomSelect.value === 'AC room') {
            price = 800;
        } else if (roomSelect.value === 'Non-AC room') {
            price = 500;
        }
        priceDisplay.textContent = 'Price: ₹' + price;
        priceInput.value = price;
    });
});