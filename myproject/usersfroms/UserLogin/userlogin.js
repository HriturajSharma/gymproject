let name = document.querySelector("#name")
let password = document.querySelector("#password")
let n_error = document.querySelector(".n-error");
let p_error = document.querySelector(".p-error");
let submit = document.querySelector("#submit");

function validateUserLogin() {
   if (name.value == "") {
      n_error.innerHTML = "Enter your name !";

   } else if (name.value.length <= 3) {
      n_error.innerHTML = "Name lenght should be gratter then 3";
   }
   else {
      n_error.innerHTML = "";
   }

   if (password.value == "") {
      p_error.innerHTML = "Enter password";

   } else if (password.value.length <= 6) {
      p_error.innerHTML = "password lenght max 6";
   }
   else {
      p_error.innerHTML = "";
   }
   return false;
}

let eye = document.querySelector(".eye");
// if(password.value == ""){
//    eye.style.display ="none";
// }else{
//    eye.style.display ="block";
// }


eye.addEventListener("click", () => {

   let counter = 1;
   if (counter == 1 && password.type === "password") {

      password.type ="text";
      eye.innerHTML ="hide";

      counter ++;

   }else{
      password.type ="password";
      eye.innerHTML ="show";

      counter --;
   }
    return counter;
  
})
