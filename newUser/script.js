/// selecting a from value---------/>

let form = document.querySelector("form");
let name = document.querySelector("#name");
let surname = document.querySelector("#surname")
let email = document.querySelector("#email")
let number = document.querySelector("#number")
let name_error = document.querySelector(".name-error");
let e_error = document.querySelector(".e-error");
let n_error = document.querySelector(".n-error");
let submit = document.querySelector('#submit-btn')

// validating a  form--------/>
function validation() {
    if (name.value == "") {
        name_error.innerHTML = "enter a name !";
    } else if (name.value.length <= 3) {
        name_error.innerHTML = "enter name lenght max 3"
    } else {
        name_error.innerHTML = "";
    }

    if (email.value == "") {
        e_error.innerHTML = "enter a email";
    } else {
        e_name.innerHTML = "";
    }
   

    if (number.value == "") {
        n_error.innerHTML = "enter mobile number";
    } else if (number.value.lenght >= 10) {
        n_error.innerHTML = "invalid number";
    } else {
        n_error.innerHTML = "";
    }

    return false;
}

// selecting a form option values------/>

let selectOpt = document.querySelector(".select-list")






// let cross = document.querySelector(".cross")
// .addEventListener("click",()=>{
//     alert("thank you visit again")
// // })
// let mode = document.querySelector(".Mode");
// let options = document.querySelector(".option")
// let list = document.querySelector(".list");
// for(option of options){
//     option.onclick = function(){
//         mode.innerHTML=this.textContent;
//     }
// }