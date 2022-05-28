const regEx = {
  emailValidation: /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/,
  passwordValidation: /^[A-Z][A-z]*\d{3}$/,
};

function validate() {
  let emailError = document.getElementById("email-error");
  let passwordError = document.getElementById("password-error");

  let emailValue = document.getElementById("email").value;
  let passwordValue = document.getElementById("password").value;

  if (!regEx.emailValidation.test(emailValue)) {
    emailError.style.visibility = "visible";
  } else {
    emailError.style.visibility = "hidden";
  }
  if (!regEx.passwordValidation.test(passwordValue)) {
    passwordError.style.visibility = "visible";
  } else {
    passwordError.style.visibility = "hidden";
  }
}
