const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const keys = document.getElementById('keys');
const canteenName = document.getElementById('canteenName');
const passwordConfirm = document.getElementById('confirm-password');
const submitButton = document.getElementById('btnSubmit');
const alertContainer = document.getElementById('alertContainer');
const alertTitle = document.getElementById('alertTitle');
const alertDesc = document.getElementById('alertDesc');

var errorCheck;

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

// Fungsi untuk validasi password
function validatePassword() {
    const passwordValue = password.value;

    let errors = [];
    const hasNumber = /\d/;
    const hasUppercase = /[A-Z]/;
    const hasLowercase = /[a-z]/;
    const hasSpecialChar = /[!@#$%^&*(),.?":{}|<>]/;
    const minLength = 6;

    if (passwordValue.length < minLength) {
        errors.push(" 6 karakter, ");
    }
    if (!hasNumber.test(passwordValue)) {
        errors.push(" satu angka (0-9),");
    }
    if (!hasUppercase.test(passwordValue)) {
        errors.push(" satu huruf kapital (A-Z),");
    }
    if (!hasLowercase.test(passwordValue)) {
        errors.push(" satu huruf kecil (a-z),");
    }
    if (!hasSpecialChar.test(passwordValue)) {
        errors.push(" satu karakter khusus (@#!).");
    }

    if (errors.length > 0) {
        showAlert("Password Error", "Password harus mengandung setidaknya" + errors.join("\n"));
        errorCheck = false;
    } else {
        errorCheck = true;
        hideAlert();
    }
}

// Fungsi untuk validasi username
function validateUsername() {
    const usernameValue = username.value;
    const usernameRegex = /^[a-zA-Z0-9]+$/;

    if (!usernameRegex.test(usernameValue)) {
        showAlert("Username Error", "Username hanya boleh mengandung huruf tanpa angka atau karakter spesial.");
        errorCheck = false;
    } else {
        hideAlert();
        errorCheck = true;
    }
}

// Fungsi untuk validasi nama kantin
function validateCanteenName() {
    const canteenNameValue = canteenName.value;
    const canteenNameRegex = /^[a-zA-Z0-9 ]+$/;

    if (!canteenNameRegex.test(canteenNameValue)) {
        showAlert("Nama Kantin Error", "Nama kantin hanya boleh mengandung huruf, angka, dan spasi.");
        errorCheck = false;
    } else {
        hideAlert();
        errorCheck = true;
    }
}

// Fungsi untuk validasi email
function validateEmail() {
    const emailValue = email.value;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegex.test(emailValue)) {
        showAlert("Email Error", "Masukkan email yang valid (contoh: user@example.com)");
        errorCheck = false;
    } else {
        hideAlert();
        errorCheck = true;
    }
}

// Fungsi untuk cek apakah form valid dan mengaktifkan tombol submit
function checkFormInput() {
    if (username.value && email.value && password.value && passwordConfirm.value && errorCheck && keys.value && canteenName.value) {
        if (password.value === passwordConfirm.value) {
            submitButton.disabled = false;
            hideAlert();
        } else {
            submitButton.disabled = true;
            showAlert("Password Didn't Match", "Password dan Konfirmasi Password harus sama.");
        }
    } else {
        submitButton.disabled = true;
    }
}

// Event listener untuk validasi saat input berubah
username.addEventListener('input', () => {
    validateUsername();
    checkFormInput();
});
email.addEventListener('input', () => {
    validateEmail();
    checkFormInput();
});
password.addEventListener('input', () => {
    validatePassword();
    checkFormInput();
});
passwordConfirm.addEventListener('input', checkFormInput);
keys.addEventListener('input', checkFormInput);
canteenName.addEventListener('input', () => {
    validateCanteenName();
    checkFormInput();
});
