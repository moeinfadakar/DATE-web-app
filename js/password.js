const inputvalue = document.getElementById("nameInput5");

const mobileRegex = /^(\+98|0|98)?9\d{9$}/;
const emailRegex = /^[a-zA-z0-9._%+-]+@[a-zA-Z 0-9.-]+\.[a-zA-Z]{2,}$/;

if(mobileRegex.test(inputvalue)){
    console.log('Valid iran mobile number');
}else if(emailRegex.test(inputvalue)){
    
    console.log('valid email')
}else{
console.log('invalid input');
}

let passInput1value =document.querySelector("#passInput1").value;
let passInput2value = document.querySelector("#passInput2").value;

function submit(){

    swal({
        text: "Hello world!",
      });

}

