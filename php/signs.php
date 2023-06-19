<?php
	include("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup/in</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="farm.css">

</head>
<body>
   
	<header class="header">
        <div class="logocontainer">
            <a href="#" class="logo"><img src="./images/logo.jpg.png"></a>
            <h1 class="logoname"><span style="color:green;font-weight: bolder;">Glow <br>Organic</h1>
        </div>

        <nav class="navbar">
            <a href="farm.html">HOME</a>
            <a href="product.html">PRODUCTS</a>
            <a href="b.html">BLOGS</a>
            <a href="test.html">USERFEEDBACK</a>
            <a href="contacts.html">CONTACT</a>
        </nav>
		<div class="items">
            <a href="#" style="text-decoration: none;"><i  style="color: green;"class="fas fa-shopping-cart"></i>  <b>CART</b></a>
        </div>

        <div class="icon">
            <i class="fas fa-search" id="search"></i>
            <i class="fas fa-bars" id="menu-bar"></i>
        </div>
        <div class="search">
            <input type="fas fa-search" placeholder="search">
        </div>
		
        <div class="signUp">
            <a href="sign.html"><button><center><i class="fas fa solid fa-user"></i></center></button></a>
        </div>
        <div class="icon">
        <i class="fas fa-bars" id="menu-bar"></i>
        </div>
    
    </header>
 <h1 class="signh1"> SIGN UP/IN </h1>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form name ="signup"  method="POST" action="register.php">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" name="username" placeholder="Name" required=""  />
            <input type="email" name="email"placeholder="Email" required="" />
			<input type="password" name="password" placeholder="Password" required=""/>
			<input type="password" name="confirm_password" placeholder="Confirm Password" required=""/>
			<input type ="submit" value="Sign Up" name="submit"/>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form name="signin" method="POST" action="login.php">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#"  class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" name="email"placeholder="Email" required="" />
			<input type="password" name="password"placeholder="Password" required=""/>
			<a href="#">Forgot your password?</a>
			<input type ="submit" value="Sign In" name="submit"/>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome To Our Organic Farm</h1>
				<p>Delivered Straight To your home From Our Farm</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello,Customer!</h1>
				<p>Enter your personal details and start journey by ordering our products</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>


<style>
    
	@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');

/* globally giving the theme color as black andwhite  is given in the root */
:root{
    --black: #1B1722;
    --white : #F0F0F0;
    --box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
*{
   
    margin: 0; padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}
html{
    background-color: black;
    background-color: aliceblue;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    font-size: 62.5%;   
    overflow-x: hidden;
    scroll-padding-top: 112px;
    scroll-behavior: smooth;
}


* {
	box-sizing: border-box;
}

body {

	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	height: 100vh;
	margin:0;
}

.signh1 {
	font-weight:bolder;
	margin-top: 220px;
	color: green;
	font-size: 32px;

}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color:black;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	margin-top: 10px;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 808px;
	max-width: 100%;
	min-height: 550px;
	margin-top:20px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #FF416C;
	background: -webkit-linear-gradient(to right,#0009, black);
	background: linear-gradient(to right,green,yellowgreen);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	background-image: url('https://media.istockphoto.com/id/1353117689/photo/christmas-green-backdrop-grunge-wood-board-painted-background.jpg?b=1&s=170667a&w=0&k=20&c=dcrFCJ1svE2LZDc4_NiqLkBTAxJBeW9fO_lApTDa5qE=');
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}



.footer {
    background: url(/images/footerback.jpg) no-repeat;
    background-size: cover;
    background-position: center;
}
.footer .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
    gap: 24px;
    padding: 32px 16px;
}
.footer .box-container .mainBox .content{
    display: flex;
    align-items: center;
    margin-bottom:20px;
}
.footer .box-container .mainBox .content h1{
    font-size: 25px;
    color: black;
}
.footer .box-container .mainBox p{
    font-size: 27.2px;
    line-height: 1.3;
    margin-bottom: 20px;
}
.footer .box-container .box h3{
    font-size: 25px;
    color: black;
    padding: 16px 0;
}
.footer .box-container .box a{
    display: block;
    font-size: 20px;
    color: black;
    padding: 16px 0;
}
.footer .box-container .box a i{
    padding-right: 8px;
    color: green;
}
.footer .box-container .box a:hover i{
    padding-right: 32px;
}
.footer .share{
    padding: 16px 0;
    text-align: center;
}
.footer .share a{
    height: 64px;
    width: 64px;
    line-height: 64px;
    font-size: 20px;
    color:white;
    background: black;
    margin: 4.8px;
    border-radius: 50%;

}
.footer .share a:hover{
    background: green;
    color: white;
}
.footer .credit{
    font-size: 20px;
    margin-top: 32px;
    padding-bottom: 32px;
    color: green;
    text-align: center;
}
 
.red-message{
    color: red;
    position: absolute;

}


</style>
<script src="sign.js"></script>
</body>
</html>