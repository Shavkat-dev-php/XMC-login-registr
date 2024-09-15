let signUpBox = document.querySelector(".sign_up_box")
let logInBox = document.querySelector(".log_in_box")
let signUpBtn = document.querySelector(".sign_up_btn")
let logInBtn = document.querySelector(".log_in_btn")
let boxLogInBtn = document.querySelector(".box_log_in_btn")
let boxSignUpBtn = document.querySelector(".box_sign_up_btn")

signUpBtn.addEventListener("click", function(evt) {
  evt.preventDefault()

  signUpBox.classList.remove("sign_up_box_active")
  logInBox.classList.remove("log_in_box_active")  
})

boxSignUpBtn.addEventListener("click", function(evt) {
  evt.preventDefault()

  signUpBox.classList.remove("sign_up_box_active")
  logInBox.classList.remove("log_in_box_active")  
})

logInBtn.addEventListener("click", function(evt) {
  evt.preventDefault()

  signUpBox.classList.add("sign_up_box_active")
  logInBox.classList.add("log_in_box_active")
})

boxLogInBtn.addEventListener("click", function(evt) {
  evt.preventDefault()

  signUpBox.classList.add("sign_up_box_active")
  logInBox.classList.add("log_in_box_active")
})



