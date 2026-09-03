<!DOCTYPE html>
<html>
<head>
<title>Register</title>

<style>

body{
    font-family:Arial;
    margin:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
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
    background:rgba(0,0,0,0.65);
    z-index:-1;
}

@keyframes slide{
    0%{background-image:url('https://images.unsplash.com/photo-1517836357463-d25dfeac3438');}
    25%{background-image:url('https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b');}
    50%{background-image:url('https://images.unsplash.com/photo-1583454110551-21f2fa2afe61');}
    75%{background-image:url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48');}
    100%{background-image:url('https://images.unsplash.com/photo-1517836357463-d25dfeac3438');}
}

.form-box{
    background:rgba(255,255,255,0.95);
    padding:35px;
    width:350px;
    border-radius:10px;
    z-index:1;
}

h2{
    text-align:center;
    color:#2a5298;
}

input,select{
    width:100%;
    padding:10px;
    margin:10px 0;
    border-radius:5px;
    border:1px solid #ccc;
}

.btn{
    background:#ff512f;
    color:white;
    border:none;
    padding:12px;
    width:100%;
    border-radius:5px;
    cursor:pointer;
    font-size:16px;
}

</style>
</head>

<body>

<div class="form-box">

<h2>Gym Registration</h2>

<form action="payment.php" method="post">

<input type="text" name="name" required>

<input type="email" name="email" required>

<select name="duration" required>
    <option value="">Select Duration</option>
    <option value="Monthly">Monthly</option>
    <option value="Quarterly">Quarterly</option>
    <option value="Yearly">Yearly</option>
</select>

<select name="plan" required>
    <option value="">Select Plan</option>
    <option value="Basic">Basic</option>
    <option value="Standard">Standard</option>
    <option value="Premium">Premium</option>
    <option value="Elite">Elite</option>
</select>

<button type="submit">Proceed to Payment</button>

</form>

</div>

</body>
</html>