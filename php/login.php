<?php include"header.php"; ?>
<head>
    <link rel="stylesheet" href="login__style.css" type="text/css">
</head>

<div class="background">

<div class="loup1 mt-5"></div>




<div class="loup2 mt-5"></div>
<div class="loup3 mt-5"></div>
</div>
<form action="login_process.php" method="post">
<div class="form__signup">
<div class="title__signup"><h1 class="text-center">Sign up</h1></div>
<br><br>
<div class="username__con">
    <input type="text" name="Username" id="nameInput" class="nameInput">
    <label for="nameInput" class="title__username">Username</label>
</div>
<div class="password__con">
    <input type="password" name="password" id="input" class="password">
    <label for="passwordInput" class="title__username">password</label>
</div>
<div class="hide__password__container">
<div class="col-12 d-flex justify-content-center">
<span class="open__eyes">
    <svg xmlns="http://www.w3.org/2000/svg" id="eyeopen" onclick="change()" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="openeyes__logo">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
</svg>
<svg xmlns="http://www.w3.org/2000/svg" onclick="back()" id="eyeclose"  fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="closeeyes__logo">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
</svg>
</span>
</div>
</div>
<div class="submit__container">
<button type="submit" class="btn btn-light  rounded-pill fs-4 w-25" >Submit</button>
</div>
<div class="new__acnt__container">
<a href="" class="link__new__acnt">Forget your password? <b>click here </b> </a>
</div>
<hr> 
<div class="sign__in__container">
<a href="./register.php" class="link__new__acnt2">Register now </a>
</div>
</div>

</form>

<script src="script.js"></script>









