<!DOCTYPE html>
<html>
<head>
<title>TITAN FITNESS CLUB</title>

<style>

body{
    margin:0;
    font-family:Arial;
    color:white;
    overflow-x:hidden;
}

/* CHANGING BACKGROUND */
body::before{
    content:"";
    position:fixed;
    width:100%;
    height:100%;
    z-index:-2;
    background-size:cover;
    background-position:center;
    animation:slide 18s infinite;
}

/* DARK OVERLAY */
body::after{
    content:"";
    position:fixed;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.65);
    z-index:-1;
}

/* BACKGROUND ANIMATION */
@keyframes slide{

    0%{
        background-image:url('https://images.unsplash.com/photo-1517836357463-d25dfeac3438');
    }

    25%{
        background-image:url('https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b');
    }

    50%{
        background-image:url('https://images.unsplash.com/photo-1583454110551-21f2fa2afe61');
    }

    75%{
        background-image:url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48');
    }

    100%{
        background-image:url('https://images.unsplash.com/photo-1517836357463-d25dfeac3438');
    }
}

/* HEADER */

header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:20px 50px;
    background:rgba(0,0,0,0.5);
}

/* LOGO */

.logo{
    font-size:42px;
    font-weight:bold;
    color:#00ffcc;
    text-shadow:2px 2px 10px black;
}

/* NAVIGATION */

nav a{
    color:white;
    text-decoration:none;
    margin:10px;
    padding:12px 20px;
    background:#ff512f;
    border-radius:5px;
    font-size:18px;
    transition:0.3s;
}

nav a:hover{
    background:#00cc99;
    transform:scale(1.05);
}

/* HERO SECTION */

.hero{
    text-align:center;
    margin-top:180px;
}

.hero h1{
    font-size:70px;
    text-shadow:2px 2px 10px black;
}

.hero p{
    font-size:30px;
    width:75%;
    margin:auto;
    line-height:1.7;
    color:#f5f5f5;
}

/* CONTACT SECTION */

.contact{
    margin-top:300px;
    background:rgba(0,0,0,0.85);
    padding:40px;
}

.contact h2{
    color:#00ffcc;
    margin-bottom:15px;
}

.contact p{
    font-size:18px;
    line-height:1.8;
}

/* SOCIAL MEDIA */

.social-section{
    text-align:center;
    background:rgba(0,0,0,0.9);
    padding:40px 20px;
}

.social-section h2{
    color:#00ffcc;
    margin-bottom:20px;
}

/* SOCIAL LINKS */

.social-links a{
    text-decoration:none;
    color:white;
    background:#ff512f;
    padding:12px 20px;
    margin:10px;
    border-radius:5px;
    display:inline-block;
    transition:0.3s;
    font-size:18px;
}

.social-links a:hover{
    background:#00cc99;
    transform:scale(1.05);
}

/* COPYRIGHT */

.copyright{
    background:black;
    color:#ccc;
    text-align:center;
    padding:15px;
    font-size:15px;
    letter-spacing:1px;
}

</style>
</head>

<body>

<!-- HEADER -->

<header>

<div class="logo">
🏋 TITAN FITNESS CLUB
</div>

<nav>

<a href="plans.php">Membership Plan Table</a>

<a href="equipments.php">Equipments</a>

<a href="trainers.php">Trainers</a>

<a href="register.php">Register / Login</a>

</nav>

</header>

<!-- HERO SECTION -->

<div class="hero">

<h1>TRANSFORM YOUR BODY</h1>

<p>
"Your body can stand almost anything. 
It’s your mind that you have to convince. 
Sweat today, shine tomorrow. 
Every workout brings you one step closer to your dream physique."
</p>

</div>

<!-- CONTACT SECTION -->

<div class="contact">

<h2>📞 Contact Us</h2>

<p>
Phone : +91 9876543210
</p>

<p>
Email : titanfitnessclub@gmail.com
</p>

<p>
Address : Chennai, Tamil Nadu, India
</p>

<h2>📋 Terms & Conditions</h2>

<p>
1. Membership fees are non-refundable.<br><br>

2. Members should maintain discipline inside the gym.<br><br>

3. Equipment damage must be compensated by the member.<br><br>

4. Follow trainer instructions carefully during workouts.<br><br>

5. Management is not responsible for personal belongings.
</p>

</div>

<<!-- SOCIAL MEDIA SECTION -->

<div class="social-section">

<h2>🌐 Follow Us</h2>

<p>📸 Instagram : titanfitnessclub_official</p>

<p>📘 Facebook : Titan Fitness Club</p>

<p>🌍 Google : Titan Fitness Chennai</p>

<p>▶ YouTube : Titan Fitness Workouts</p>

</div>

<!-- COPYRIGHT -->

<div class="copyright">

© 2026 TITAN FITNESS CLUB. All Rights Reserved.  
Designed & Developed for Professional Fitness and Wellness Services.

</div>

</body>
</html>