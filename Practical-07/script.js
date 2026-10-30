// Client-side Validation for Student Registration Form
document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("registrationForm");
  if (!form) return;

  const nameInput = document.getElementById("name");
  const emailInput = document.getElementById("email");
  const mobileInput = document.getElementById("mobile");
  const passwordInput = document.getElementById("password");
  const confirmPasswordInput = document.getElementById("confirmPassword");
  const courseInput = document.getElementById("course");
  const yearInput = document.getElementById("year");
  const termsCheckbox = document.getElementById("terms");

  const nameError = document.getElementById("nameError");
  const emailError = document.getElementById("emailError");
  const mobileError = document.getElementById("mobileError");
  const passwordError = document.getElementById("passwordError");
  const confirmPasswordError = document.getElementById("confirmPasswordError");
  const courseError = document.getElementById("courseError");
  const yearError = document.getElementById("yearError");
  const genderError = document.getElementById("genderError");
  const termsError = document.getElementById("termsError");
  const formMessage = document.getElementById("formMessage");

  form.addEventListener("submit", function (e) {
    let isValid = true;

    // Reset error messages
    document.querySelectorAll(".error").forEach((el) => (el.textContent = ""));
    if (formMessage) formMessage.textContent = "";

    // Name validation
    if (!nameInput.value.trim()) {
      nameError.textContent = "Please enter your full name.";
      isValid = false;
    }

    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailInput.value.trim()) {
      emailError.textContent = "Please enter your email address.";
      isValid = false;
    } else if (!emailRegex.test(emailInput.value.trim())) {
      emailError.textContent = "Please enter a valid email address.";
      isValid = false;
    }

    // Mobile validation
    const mobileRegex = /^[0-9]{10}$/;
    if (!mobileInput.value.trim()) {
      mobileError.textContent = "Please enter your mobile number.";
      isValid = false;
    } else if (!mobileRegex.test(mobileInput.value.trim())) {
      mobileError.textContent = "Mobile number must be exactly 10 digits.";
      isValid = false;
    }

    // Password validation
    if (!passwordInput.value) {
      passwordError.textContent = "Please enter a password.";
      isValid = false;
    } else if (passwordInput.value.length < 6) {
      passwordError.textContent = "Password must be at least 6 characters long.";
      isValid = false;
    }

    // Confirm Password validation
    if (!confirmPasswordInput.value) {
      confirmPasswordError.textContent = "Please confirm your password.";
      isValid = false;
    } else if (passwordInput.value !== confirmPasswordInput.value) {
      confirmPasswordError.textContent = "Passwords do not match.";
      isValid = false;
    }

    // Course validation
    if (!courseInput.value) {
      courseError.textContent = "Please select your course.";
      isValid = false;
    }

    // Year validation
    if (!yearInput.value) {
      yearError.textContent = "Please select your academic year.";
      isValid = false;
    }

    // Gender validation
    const genderChecked = document.querySelector('input[name="gender"]:checked');
    if (!genderChecked) {
      genderError.textContent = "Please select your gender.";
      isValid = false;
    }

    // Terms validation
    if (!termsCheckbox.checked) {
      termsError.textContent = "You must accept the terms and conditions.";
      isValid = false;
    }

    if (!isValid) {
      e.preventDefault();
      if (formMessage) {
        formMessage.style.color = "var(--error)";
        formMessage.textContent = "Please correct the highlighted errors before submitting.";
      }
    }
  });
});
