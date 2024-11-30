const email = document.getElementById('email');
const password = document.getElementById('password');
const submitButton = document.getElementById('btnSubmit');
const alertContainer = document.getElementById('alertContainer');
const alertTitle = document.getElementById('alertTitle');
const alertDesc = document.getElementById('alertDesc');

// Fungsi untuk menampilkan alert
function showAlert(title, desc) {
    alertContainer.style.display = "block";
    alertTitle.innerHTML = title;
    alertDesc.innerHTML = desc;
}

// Fungsi untuk menyembunyikan alert
function hideAlert() {
    alertContainer.style.display = "none";
}

// Fungsi untuk validasi email
function validateEmail() {
    const emailValue = email.value;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegex.test(emailValue)) {
        showAlert("Email Error", "Masukkan email yang valid (contoh: user@example.com).");
        errorCheck = false;
    } else {
        hideAlert();
        errorCheck = true;
    }
}

function checkFormInput(){
    if(email.value && password.value){
        submitButton.disabled = false;
    } else {
        submitButton.disabled = true;
        hideAlert();
    }
}

checkFormInput();

email.addEventListener('input', () => {
    validateEmail();
    checkFormInput();
});
password.addEventListener('input', () => {
    checkFormInput();
});