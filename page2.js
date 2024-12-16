function updatePhotoIdInput() {
    const photoId = document.getElementById('photoId').value;
    const photoIdNo = document.getElementById('photoIdNo');

    if (photoId === "Aadhaar") {
        photoIdNo.pattern = "[0-9]{12}";
        photoIdNo.placeholder = "Enter 12 digit Aadhaar number";
    } else if (photoId === "PAN") {
        photoIdNo.pattern = "[A-Z0-9]{10}";
        photoIdNo.placeholder = "Enter 10 digit PAN number";
    }
}

function validateForm() {
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var photoIdNo = document.getElementById("photoIdNo").value;

    if (name == "" || phone == "" || email == "" || photoIdNo == "") {
        alert("Please fill in all required fields.");
        return false; // Prevent form submission
    }
    return true; // Allow form submission
}
