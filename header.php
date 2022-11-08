<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./sirinu/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,900&family=Nanum+Gothic&family=Niconne&family=Permanent+Marker&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/39de285129.js" crossorigin="anonymous"></script>
  <title>Responsive Navbar</title>
</head>
<body>
  
    <header class="header" id="header">
       <div id="menu-btn" class="fa-solid fa-bars fa-2x" style="color: black">
    </div>
      <a href="#header" class="logo"><img src="./sirinu/images/logo.png" style="width:50%; margin-left: 20%;"></a>
     
     <nav class="navbar">

         
        <a href="#header">home</a>
        <a href="#services">services</a>
        <a href="#about">about us</a>
        <a href="#contact">contact</a>
      </nav>  
      <nav class="navbars">
       <a href="#about" style="color: black;">Telegram</a>
        <a href="#contact" class="about_nav" style="">contact</a>
      </nav>
      
    
    </header>

<script type="text/javascript">
  const menu = document.querySelector('#menu-btn');
const navbar = document.querySelector('.header .navbar');

menu.onclick = () => {
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
}
</script>
<style type="text/css">
  
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
  border: none;
  outline: none;
  transition: all .3s linear;
}

html {
  font-size: 100%;
  overflow-x: hidden;
  scroll-padding-top: 5rem;
  scroll-behavior: smooth;
}

section {
  padding: 1rem 5%;
}

header {
  position: sticky;
  top: 0;
  left: 0;
  right: 0;
  background: #f0f0f0;
  padding: 1rem 5%;
  display: flex;
  justify-content: space-between;
  z-index: 1000;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

header .logo {
  color: #8D99AE;
  font-size: 2rem;
  font-weight: bold;
  float: left;
}

header .navbar a {
  align-items: center;
  color: black;
  text-transform: uppercase;
  font-size: .8rem;
  border-radius: .5rem;
  padding: .5rem 1.5rem;
  font-weight: bold;
}

header .navbar a:hover {
  color: #D90429;
  background: #EDF2F4;
}


header .navbars a {
  align-items: center;
  text-transform: uppercase;
  font-size: .8rem;
  border-radius: .8rem;
  padding: .5rem 1.5rem;
  font-weight: bold;
}

header .navbars a:hover {
  color: #D90429;
}

header #menu-btn {
 display: none;
  color: #EF233C;
  cursor: pointer;
}


header #menu-btn:hover {
  color: #EDF2F4;
}

.hero {
  background-color: #f0f0f0;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}

.navbar {
  margin-top: 2%;
}

.about_nav{
  background-color: #ff0000;
  color: white;
}
.about_nav:hover{
  background: white;
  box-shadow:  0px 3px 8px #afafaf;

  color: #ff0000;
}
.navbars{
  margin-top: 2%;
}

@media (max-width: 991px) {
  html {
    font-size: 85%;
  }
  
  
}

@media (max-width: 768px) {
  header #menu-btn {
  display: inline-block;
}


.about_nav{
  display: none;
}
  
  header #menu-btn.fa-times {
    transform: rotate(180deg);
  }
  
  .header .navbar {
    position: absolute;
    top: 99%;
    left: 0;
    right: 0;
    background: #000066;
    color: white;
    border-top: 1px solid #8D99AE;
    padding: 2rem;
    clip-path: polygon(50% 0%, 50% 0, 50% 0, 50% 0, 50% 0);
  }
  
  .header .navbar.active {
    clip-path: polygon(100% 0, 52% 0, 0 0, 0 100%, 100% 100%);
  }
  
  .header .navbar a {
    display: block;
    color: white;
    margin: 2rem;
    text-align: center;
  }
  
  .services .services-box {
    flex-direction: column;
    jusify-content: center;
    align-items: center;
    width: 100%;
    margin: 0 auto;
  }
  
  .about .about-content {
    text-align: center;
    flex-direction: column;
  }
}
</style>