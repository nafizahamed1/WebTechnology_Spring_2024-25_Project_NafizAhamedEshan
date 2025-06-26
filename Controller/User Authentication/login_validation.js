const form = document.getElementById("user-auth");
const submitButton = document.getElementById("button-main");
const email = document.getElementById("user-email");
const password = document.getElementById("user-pass");


const showPasswordCheckbox = document.getElementById("show-password");
showPasswordCheckbox.addEventListener("change", function () {
  if (showPasswordCheckbox.checked) {
    password.type = "text";
  } else {
    password.type = "password";
  }
});



submitButton.addEventListener("click", function (e) {
  e.preventDefault();


  email.value = email.value.trim();
  let count = 0;
  for (let i = 0; i < email.value.length; i++) {
    if (email.value[i] == "@") {
      count++;
    }
  }

  const atIndex = email.value.indexOf("@");
  const dotIndex = email.value.lastIndexOf(".");

  if (
    atIndex < 1 ||
    dotIndex <= atIndex + 1 ||
    dotIndex === email.length - 1 ||
    count > 1
  ) {
    alert("Please enter a valid email address.");
    email.focus();
    return;
  }


  if (password.value.length < 1) {
    alert("Please enter the password.");
    password.focus();
    return;
  }

  form.requestSubmit(submitButton);
});
