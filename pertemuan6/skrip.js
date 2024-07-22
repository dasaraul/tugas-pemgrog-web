const form = document.getElementById('form');
const nameInput = document.getElementById('name');
const addressInput = document.getElementById('address');
const postalCodeInput = document.getElementById('postalCode');
const genderSelect = document.getElementById('gender');
const usernameInput = document.getElementById('username');
const passwordInput = document.getElementById('password');
const emailInput = document.getElementById('email');
const successMessage = document.getElementById('successMessage');

const nameError = document.getElementById('nameError');
const addressError = document.getElementById('addressError');
const postalCodeError = document.getElementById('postalCodeError');
const genderError = document.getElementById('genderError');
const usernameError = document.getElementById('usernameError');
const passwordError = document.getElementById('passwordError');
const emailError = document.getElementById('emailError');

form.addEventListener('submit', function(event) {
    event.preventDefault();

    let isValid = true;

    // Validasi Nama
    if (!/^[a-zA-Z\s]+$/.test(nameInput.value)) {
        isValid = false;
        nameError.textContent = 'Nama harus berupa huruf';
    } else {
        nameError.textContent = '';
    }

    // Validasi Alamat
    if (!/^[a-zA-Z0-9\s]+$/.test(addressInput.value)) {
        isValid = false;
        addressError.textContent = 'Alamat hanya berisi huruf dan angka';
    } else {
        addressError.textContent = '';
    }

    // Validasi Kode Pos
    if (!/^\d+$/.test(postalCodeInput.value)) {
        isValid = false;
        postalCodeError.textContent = 'Kode pos harus berupa angka';
    } else {
        postalCodeError.textContent = '';
    }

    // Validasi Jenis Kelamin
    if (genderSelect.value === '') {
        isValid = false;
        genderError.textContent = 'Jenis kelamin harus dipilih';
    } else {
        genderError.textContent = '';
    }

    // Validasi Username
    if (!/^[a-zA-Z0-9]{6,8}$/.test(usernameInput.value)) {
        isValid = false;
        usernameError.textContent = 'Username harus diisikan antara 6 sampai 8 karakter';
    } else {
        usernameError.textContent = '';
    }

    // Validasi Password
    if (passwordInput.value.length < 8) {
        isValid = false;
        passwordError.textContent = 'Password minimal 8 karakter';
    } else {
        passwordError.textContent = '';
    }

    // Validasi Email
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value)) {
        isValid = false;
        emailError.textContent = 'Email harus dgn format yg benar';
    } else {
        emailError.textContent = '';
    }

    if (isValid) {
        // Mengarahkan ke result.html dengan data query string
        const queryString = new URLSearchParams({
            name: nameInput.value,
            address: addressInput.value,
            postalCode: postalCodeInput.value,
            gender: genderSelect.value,
            username: usernameInput.value,
            password: passwordInput.value,
            email: emailInput.value
        }).toString();
        window.location.href = `res.html?${queryString}`;
    } else {
        successMessage.textContent = '';
    }
});
