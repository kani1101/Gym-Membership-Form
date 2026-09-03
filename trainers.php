<!DOCTYPE html>
<html>
<head>
<title>Our Trainers</title>

<style>

/* BODY */
body{
    font-family:Arial;
    margin:0;
    color:white;
    overflow-x:hidden;
}

/* CHANGING BACKGROUND */
body::before{
    content:'';
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
    content:'';
    position:fixed;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.7);
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

/* TITLE */
h1{
    text-align:center;
    padding-top:30px;
    font-size:50px;
    color:#00ffcc;
    text-shadow:2px 2px 10px black;
}

/* CARD CONTAINER */
.container{
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
    padding-bottom:40px;
}

/* CARD */
.card{
    background:rgba(255,255,255,0.12);
    width:270px;
    margin:20px;
    padding:15px;
    border-radius:12px;
    text-align:center;
    box-shadow:0px 0px 15px rgba(0,0,0,0.5);
    transition:0.3s;
}

.card:hover{
    transform:scale(1.05);
}

/* IMAGE */
.card img{
    width:100%;
    height:300px;
    border-radius:10px;
    object-fit:cover;
}

/* NAME */
.card h2{
    margin-top:15px;
    color:#00ffcc;
}

/* TEXT */
.card p{
    font-size:18px;
}

</style>
</head>

<body>

<h1>🏋 Our Professional Trainers</h1>

<div class="container">

<!-- Trainer 1 -->
<div class="card">
<img src="https://images.unsplash.com/photo-1567013127542-490d757e51fc">
<h2>Rahul</h2>
<p><b>Preference:</b> Personal Trainer</p>
</div>

<!-- Trainer 2 -->
<div class="card">
<img src="https://images.unsplash.com/photo-1518611012118-696072aa579a">
<h2>Priya</h2>
<p><b>Preference:</b> Group Trainer</p>
</div>

<!-- Trainer 3 -->
<div class="card">
<img src="https://images.unsplash.com/photo-1534367610401-9f5ed68180aa">
<h2>Arjun</h2>
<p><b>Preference:</b> Personal Trainer</p>
</div>

<!-- Trainer 4 -->
<div class="card">
<img src="https://images.unsplash.com/photo-1517838277536-f5f99be501cd">
<h2>Sneha</h2>
<p><b>Preference:</b> Group Trainer</p>
</div>

<!-- Trainer 5 -->
<div class="card">
<img src="https://images.unsplash.com/photo-1517838277536-f5f99be501cd">
<h2>Vikram</h2>
<p><b>Preference:</b> Personal Trainer</p>
</div>

<!-- Trainer 6 -->
<div class="card">
<img src="https://images.unsplash.com/photo-1518459031867-a89b944bffe4">
<h2>Meera</h2>
<p><b>Preference:</b> Group Trainer</p>
</div>

<!-- Trainer 7 -->
<div class="card">
<img src="https://images.unsplash.com/photo-1549476464-37392f717541">
<h2>Ajay</h2>
<p><b>Preference:</b> Personal Trainer</p>
</div>

<!-- Trainer 8 -->
<div class="card">
<img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438">
<h2>Divya</h2>
<p><b>Preference:</b> Group Trainer</p>
</div>

<!-- Trainer 9 -->
<div class="card">
<img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b">
<h2>Karthik</h2>
<p><b>Preference:</b> Personal Trainer</p>
</div>

</div>

</body>
</html>