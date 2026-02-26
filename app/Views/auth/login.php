<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>

<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f5f5f5;
    font-family: 'Helvetica Neue', sans-serif;
}

.login-box {
    width: 400px;
    padding: 60px 50px 50px 50px;
    background: white;
    text-align: center;
    position: relative; /* penting untuk absolute positioning */
}

/* Tombol Back */
.btn-back {
    position: absolute;
    top: 20px;
    left: 25px;
    font-size: 13px;
    text-decoration: none;
    color: #000;
    letter-spacing: 1px;
    transition: 0.3s;
}

.btn-back:hover {
    color: #c9a227;
}

/* Container Login */
.login-box {
    background: white;
    padding: 50px 40px;
    width: 350px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    text-align: center;
}

/* Input Styling */
.login-box input {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    font-size: 14px;
    outline: none;
    transition: 0.3s;
}

.login-box input:focus {
    border-color: #c9a227;
}

/* Button Style - Gold (Reserve for Pickup Style) */
.btn-gold {
    width: 100%;
    padding: 14px;
    background-color: #c9a227;
    color: white;
    border: none;
    font-weight: bold;
    letter-spacing: 1px;
    cursor: pointer;
    transition: 0.3s;
}

.btn-gold:hover {
    background-color: #b8911f;
}

/* Optional Black Style (Add to Cart Style) */
.btn-black {
    width: 100%;
    padding: 14px;
    background-color: #000;
    color: white;
    border: none;
    font-weight: bold;
    letter-spacing: 1px;
    cursor: pointer;
    transition: 0.3s;
    margin-top: 10px;
}

.btn-black:hover {
    background-color: #333;
}

.forgot {
    margin-top: 18px;
    font-size: 13px;
    color: #777;
}

.forgot a {
    color: #c9a227; /* gold theme */
    text-decoration: none;
    font-weight: 500;
    margin-left: 5px;
    transition: 0.3s;
}

.forgot a:hover {
    text-decoration: underline;
    color: #b8911f;
}

.error-box {
    background: #fff4f4;
    border-left: 4px solid #d00000;
    padding: 12px;
    margin-bottom: 20px;
    font-size: 13px;
    color: #b00000;
    text-align: left;
}
</style>

</head>
<body>

<div class="login-box">
    <a href="/" class="btn-back">←</a>
    <h2 style="margin-bottom:30px; font-weight:300;">LOGIN</h2>

<?php if(session()->getFlashdata('error')): ?>
    <div class="error-box">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>

<form action="<?= base_url('login') ?>" method="post">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" class="btn-gold">LOGIN</button>
        <div class="forgot">
            Forgot password?
        <a href="/forgotPassword">Click here</a>
    </div>
</form>

</body>
</html>