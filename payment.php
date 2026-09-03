<?php
session_start();

/* Receive data from register.php */
if(isset($_POST['name']))
{
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['duration'] = $_POST['duration'];
    $_SESSION['plan'] = $_POST['plan'];
}

$error = "";

if(isset($_POST['pay']))
{
    $method = $_POST['method'];

    if($method == "Cash")
    {
        header("Location: success.php");
        exit();
    }

    elseif($method == "Card")
    {
        $cardno = $_POST['cardno'];
        $holder = $_POST['holder'];
        $cvv = $_POST['cvv'];

        if(!empty($cardno) && !empty($holder) && !empty($cvv))
        {
            header("Location: success.php");
            exit();
        }
        else
        {
            $error = "Please enter all Card details.";
        }
    }

    elseif($method == "GPay")
    {
        $upi = $_POST['upi'];

        if(!empty($upi))
        {
            header("Location: success.php");
            exit();
        }
        else
        {
            $error = "Please enter UPI ID.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Payment</title>

<style>

body{
    margin:0;
    font-family:Arial,sans-serif;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    overflow:hidden;
}

/* CHANGING GYM BACKGROUND */

body::before{
    content:"";
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background-size:cover;
    background-position:center;
    animation:slide 18s infinite;
    z-index:-2;
}

@keyframes slide{

0%{
background-image:url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48');
}

33%{
background-image:url('https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b');
}

66%{
background-image:url('https://images.unsplash.com/photo-1517836357463-d25dfeac3438');
}

100%{
background-image:url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48');
}

}

.overlay{
position:fixed;
width:100%;
height:100%;
background:rgba(0,0,0,0.6);
z-index:-1;
}

.container{
width:420px;
background:white;
padding:30px;
border-radius:15px;
box-shadow:0 0 20px rgba(0,0,0,0.4);
}

h2{
text-align:center;
color:#0d47a1;
margin-bottom:20px;
}

select,
input{
width:100%;
padding:12px;
margin-top:10px;
margin-bottom:15px;
border:1px solid #ccc;
border-radius:6px;
font-size:16px;
}

button{
width:100%;
padding:12px;
background:#0d47a1;
color:white;
border:none;
border-radius:6px;
font-size:18px;
cursor:pointer;
}

button:hover{
background:#1565c0;
}

.error{
color:red;
font-weight:bold;
text-align:center;
}

.qr{
text-align:center;
margin-top:10px;
}

</style>
</head>

<body>

<div class="overlay"></div>

<div class="container">

<h2>Payment Details</h2>

<?php
if($error!="")
{
    echo "<p class='error'>$error</p>";
}
?>

<form method="post">

<label>Select Payment Method</label>

<select name="method" required>
    <option value="">Choose Payment Method</option>
    <option value="Cash">Cash</option>
    <option value="Card">Card</option>
    <option value="GPay">GPay</option>
</select>

<input type="text" name="cardno" placeholder="Card Number">

<input type="text" name="holder" placeholder="Card Holder Name">

<input type="password" name="cvv" placeholder="CVV">

<input type="text" name="upi" placeholder="UPI ID (example: gym@upi)">

<div class="qr">
    <h4>GPay UPI: titanfitness@upi</h4>
</div>

<button type="submit" name="pay">
    Complete Payment
</button>

</form>

</div>

</body>
</html>