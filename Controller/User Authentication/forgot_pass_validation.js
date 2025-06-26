const form = document.getElementById("user-auth");
const email = document.getElementById("user-email");
const submitButton = document.getElementById("button-main");



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

  for (let i = atIndex + 1; i < dotIndex; i++) {
    if (email.value[i] == ".") {
      alert("Please enter a valid email address.");
      email.focus();
      return;
    }
  }

  form.requestSubmit(submitButton);
});
