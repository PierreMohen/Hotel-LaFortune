<!DOCTYPE html>
<html lang="EN">
<head><title>LaFortune</title>
<?php include "link.php" ;?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Marck+Script&family=MonteCarlo&display=swap');
body{
    
}
#bg1{
    background:url('../img/pexels-h-emre-773471.jpg') no-repeat;
    background-position: center;
    background-size: cover;
    height: 100vh;
    position:relative;
}
#bg2{
    background:black;
    background-position: center;
    background-size: cover;
    height: 100vh;
    top:0;
    position:absolute;
    opacity:0.6;
}
.container h2{
    position:absolute;
    font-family: 'Cinzel', serif;
    font-size:120px;
    text-align: center;
    letter-spacing:0px;
    color:#FFF;
    top:80px;
    left:340px;
    opacity:0.9;
    cursor:pointer;
    text-shadow:3px 3px grey;
}
.container h3{
    position:absolute;
    font-family: 'Marck Script', cursive;
    font-size:55px;
    letter-spacing:0px;
    color:#FFF;
    top:50px;
    left:550px;
    opacity:0.75;
    line-height:10px;
    cursor: pointer;
    text-shadow:2px 2px grey;
}
.container p{
    color:lightblue;
    position:absolute;
    font-family: 'Marck Script', cursive;
    font-size:25px;
    font-weight:normal;
    text-align:center;
    letter-spacing:0px;
    width:420px;
    top:550px;
    left:400px;
    opacity:0.9;
    line-height:30px;

}
#text1{
    position:absolute;
    font-family: 'Marck Script', cursive;
    font-size:25px;
    font-weight:normal;
    text-align:center;
    letter-spacing:0px;
    width:330px;
    color:#FFF;
    top:280px;
    left:30px;
    opacity:0.8;
    line-height:30px;
}
#text2{
    position:absolute;
    font-family: 'Marck Script', cursive;
    font-size:25px;
    font-weight:normal;
    text-align:center;
    letter-spacing:0px;
    width:330px;
    color:#fff;
    top:280px;
    left:870px;
    opacity:0.75;
    line-height:30px;

}
button{
    font-family: 'Cinzel', serif;
    position:absolute;
    background:none;
    color:#FFF;
    opacity:0.9;
    border-radius:50%;
    height:50px;
    width:150px;
    border:2px solid grey;
    letter-spacing: 2px;
    z-index:5;
}
button:hover{
    font-family: 'Cinzel', serif;
    border:2px solid grey;
    background:grey;
    color:#fff;
    border:1px solid white;
    opacity:1;
    box-shadow:0px 2px lightblue;
}
#btn1{
bottom:60px;
left:115px;

}
#btn2{
    bottom:60px;
    right:115px;

}
.animation{
    background:url('../img/Animated Smoke Background Smoke animation by tobaal.gif') no-repeat;
    background-position: center;
    transform: rotate(90deg);
    width:50px;
    height:150px;
    position:absolute;
    top:498px;
    left:166px;
    opacity: 0.4;
    border-radius:50%;
    z-index:4;
}
.animation1{
    background:url('../img/Animated Smoke Background Smoke animation by tobaal.gif') no-repeat;
    background-position: center;
    transform: rotate(90deg);
    width:50px;
    height:150px;
    position:absolute;
    bottom:12px;
    right:165px;
    opacity:0.4;
    border-radius:50%;
    z-index:3;
}
#line1{
    position:absolute;
    background:#fff;
    height:30vh;
    width:0.2%;
    top:260px;
    left:390px;
    border-radius:15px;
    opacity:0.5;
}
#line2{
    position:absolute;
    background:#fff;
    height:30vh;
    width:0.2%;
    top:260px;
    right:550px;
    border-radius:15px;
    opacity:0.5;
}
#logo1{
    position:absolute;
    top:119px;
    left:555px;
    transform:rotate(-21deg);
    opacity:0.9;

}

</style>

</head>
<body>

<div class="container-fluid" id="bg1">
</div>
<div class="container-fluid" id="bg2"></div>
<div class="container">
    <h3>Hotel</h3>
<h2>La Fortune</h2>
</div>
<div class="container">
    <p>Beauty is Everywhere a Welcome Guest.</p>
    <p id="text1">Set in some of the most celebrated destinations in the world, our award-winning resorts and hotels are conceived to inspire...</p>
    <p id="text2">Surprise and delight guests, by offering imaginative experiences, delivered by passionate team members, to help you celebrate life...</p>
</div>
<div class="container">
    <a href="../Hotel%20LaFortune/index.php"><button id="btn1">Explore</button></a>
    <button id="btn2">Booking</button>
</div>
<div class="animation">
</div>
<div class="animation1">
</div>
<div id="line1">
</div>
<div id="line2">
</div>
<div id="logo">
    <image src="../img/kindpng_1868879.png" id="logo1" alt="logo" height="40px"/>
</div>
</body>
</html>