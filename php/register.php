<?php include"header.php"; 





?>
<head>
    <link rel="stylesheet" href="login__style.css" type="text/css">
<style>
.nameInput{
    color: aliceblue !important;
    padding-right: 0px 20px 0px 50px !important;
}

</style>



</head>

<div class="background">

<div class="loup1 mt-5"></div>




<div class="loup2 mt-5"></div>
<div class="loup3 mt-5"></div>
<div class="loup2 mt-5"></div>
</div>
<form action="./resgister_process.php" method="POST" enctype="multipart/form-data">
<div class="form__signup h-50">
<div class="title__signup">
    
<h1 class="text-center mt-3">SIGN UP</h1></div>

<br><h2 id="love"></h2><br>
<div class="username__con ">
    <input type="text" name="lastname" id="nameInput1" class="nameInput  w-25" dir="ltr" required>
    <label for="passwordInput" class="title__username text-white" id="lastname">Last name</label>
    <input type="text" name="firstname" id="nameInput2" class="nameInput nameInput w-25" dir="ltr" required>
    <label for="passwordInput" class="title__username " id="firstname">First name</label>
    
</div>


<div class="username__con mt-2 jcc">


    <input type="text" name="number" id="nameInput3" class="nameInput w-50 d-block mt-2 " dir="ltr" required>
    <label for="nameInput" class="title__username fs-5 d-block " id="number">Number</label>
</div>
<div class="username__con w-100 mt-1 ">
    <input type="text" name="email" id="nameInput4" class="nameInput w-50 mt-2" dir="ltr" required>
    <label for="nameInput" class="title__username fs-5 mt-2" id="Email">Email</label>
</div>
<div class="username__con w-100 mt-1 ">
    <input type="text" name="username" id="nameInput5" class="nameInput w-50 mt-2" dir="ltr" required>
    <label for="nameInput" class="title__username fs-5 mt-2" id="Username">Username</label>
</div>
<div class="username__con">
    
<?php if( $_SESSION["nopassword"] = true) : ?>

    <input type="text" name="password" id="passInput6" class="nameInput w-50 mt-2" dir="ltr" required>
    <label for="passInput1" class="title__username fs-5 mt-2" id="pass">password</label>
</div>
<h5 style="text-align: center;"></h5>
<div class="username__con">
    <input type="text" name="repeatpassword" id="passInput7" class="nameInput w-50 mt-2" dir="ltr" required>
    <label for="passInput2" class="title__username fs-5 mt-2 " id="R_pass">R-password</label>
</div>

<?php  endif; ?>

<div class="username__con mt-3" id="miladi__input">
    <input type="date" name="birthday"  class="nameInput w-50 " placeholder="تاریخ تولد" style="color: white;" dir="ltr" required>
    <label for="nameInput" class="title__username">birthday</label>
</div>
<div class="username__con mt-2">
    <select type="text" name="gender" id="nameInput" class="nameInput w-50 color-white" dir="ltr" required>
        <option value="1">male</option>
        <option value="2">female</option>
        <option value="3">i dont like to stay</option>
    </select>
    
    <label for="nameInput" class="title__username">Gender</label>
</div>



<div class="submit__container">
<button type="submit" class="btn btn-light  rounded-pill fs-4 w-25" id="test">Submit</button>
<button type="reset" class="btn btn-light  rounded-pill fs-4 w-25" style="background-color: lightcoral;" id="test">clear all</button>
</div>



</div>
</form>

<script>

let in1 =document.getElementById("nameInput1");
let in2 =document.getElementById("nameInput2");
let in3 =document.getElementById("nameInput3");
let in4 =document.getElementById("nameInput4");
let in5 =document.getElementById("nameInput5");
let in6 =document.getElementById("passInput6");
let in7 =document.getElementById("passInput7")
let in8 =document.getElementById("nameInput8");
let love =document.getElementById("love");

let test =document.getElementById("test");

let lastname =document.getElementById("lastname")
let firstname = document.getElementById("firstname")
let number = document.getElementById("number")
let Email = document.getElementById("Email")
let Username = document.getElementById("Username")
let pass = document.getElementById("pass")
let R_pass = document.getElementById("R_pass")
let birthday = document.getElementById("birthday")



test.onclick =function(){

love.style.textAlign = "center";
love.style.color = "black";
 let a = "null";


if(in1.value === ''  || in2.value === '' || in3.value === ''|| in4.value === '' || in5.value === '' || in7.value === '' || in8.value === ''  ){


    in1.setAttribute("placeholder","required");
    in2.setAttribute("placeholder","required");
    in3.setAttribute("placeholder","required");
    in4.setAttribute("placeholder","required");
    in5.setAttribute("placeholder","required");
    in6.setAttribute("placeholder","required");
    in7.setAttribute("placeholder","required");
    in8.setAttribute("placeholder","required");

in1.style.color = "red";


console.log('wrong');
 love.innerHTML = "Please enter the required values!";
lastname.style.textDecoration = "underline";
lastname.style.textDecorationColor= "red"

firstname.style.textDecoration = "underline"
number.style.textDecoration = "underline"
Email.style.textDecoration = "underline"
Username.style.textDecoration = "underline"
pass.style.textDecoration = "underline"
R_pass.style.textDecoration = "underline"
birthday.style.textDecoration = "underline"


firstname.style.textDecorationColor = "red"
number.style.textDecorationColor = "red"
Email.style.textDecorationColor = "red"
Username.style.textDecorationColor = "red"
pass.style.textDecorationColor = "red"
R_pass.style.textDecorationColor = "red"
birthday.style.textDecorationColor = "red"



}else{

    love.innerHTML = "  ";
console.log('right');

}



}







</script>

<script src="./password.js"></script>
<script src="script.js"></script>