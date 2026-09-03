<!DOCTYPE html>
<html>
<head>
<title>Equipments</title>

<style>

body{
    font-family:Arial;
    margin:0;
    color:white;
}

/* Changing Background */
body::before{
    content:"";
    position:fixed;
    width:100%;
    height:100%;
    z-index:-2;
    background-size:cover;
    background-position:center;
    animation:slide 15s infinite;
}

body::after{
    content:"";
    position:fixed;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.7);
    z-index:-1;
}

@keyframes slide{
    0%{background-image:url('https://images.unsplash.com/photo-1517836357463-d25dfeac3438');}
    50%{background-image:url('https://images.unsplash.com/photo-1583454110551-21f2fa2afe61');}
    100%{background-image:url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48');}
}

h1{
    text-align:center;
    padding-top:30px;
}

.container{
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
}

.card{
    background:rgba(255,255,255,0.1);
    width:250px;
    margin:20px;
    padding:15px;
    border-radius:10px;
    text-align:center;
}

.card img{
    width:100%;
    height:180px;
    border-radius:10px;
}

</style>
</head>

<body>

<h1>Gym Equipments</h1>

<div class="container">

<div class="card">
<img src="https://images.pexels.com/photos/949126/pexels-photo-949126.jpeg">
<h2>Dumbbells</h2>
</div>

<div class="card">
<img src="https://images.pexels.com/photos/1954524/pexels-photo-1954524.jpeg">
<h2>Treadmill</h2>
</div>

<div class="card">
<img src="https://images.pexels.com/photos/4164761/pexels-photo-4164761.jpeg">
<h2>Bench Press</h2>
</div>

<div class="card">
<img src="https://images.pexels.com/photos/1552242/pexels-photo-1552242.jpeg">
<h2>Exercise Bike</h2>
</div>

<div class="card">
<img src="https://images.pexels.com/photos/1552106/pexels-photo-1552106.jpeg">
<h2>Leg Press</h2>
</div>

<div class="card">
<img src="https://images.pexels.com/photos/3838389/pexels-photo-3838389.jpeg">
<h2>Pull Up Bar</h2>
</div>

</div>

</body>
</html>