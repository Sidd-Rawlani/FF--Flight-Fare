let allowedEmail = "sidd@gmail.com";
let allowedPassword = "password";
let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () => {
  console.log("Button is clicked");
  let emailInput = document.querySelector('#email').value;
  let passwordInput = document.querySelector('#password').value;

  if(emailInput === allowedEmail && passwordInput === allowedPassword){
    console.log("Login successful");
    window.location.href = "/home";
  }else{
    errorMessage.textContent = "Incorrect email or password";
    console.log("Incorrect email or password");
    // alert("Incorrect email or password")
  }
}
loginForm.classList.toggle('active');
