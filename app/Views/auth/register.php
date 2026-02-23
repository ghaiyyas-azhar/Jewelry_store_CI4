<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Register</title>

<style>
body {
    margin: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f2f2f2;
    font-family: Arial, sans-serif;
}

* {
    box-sizing: border-box;
}

.login-box {
    width: 400px;
    padding: 60px 50px 50px 50px;
    background: white;
    text-align: center;
    position: relative;
}

/* Back Button */
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

.login-box h2 {
    margin-bottom: 30px;
    font-weight: 400;
    letter-spacing: 2px;
}

/* Input */
.login-box input {
    width: 100%;
    padding: 14px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    font-size: 14px;
}

/* Gold Button */
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
</style>
</head>

<body>

<div class="login-box">

    <a href="/" class="btn-back">←</a>

    <h2>REGISTER</h2>

    <form action="<?= base_url('auth/registerProcess') ?>" method="post">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirmPassword" placeholder="Confirm Password" required>

        <button type="submit" class="btn-gold">REGISTER</button>
    </form>

</div>

</body>
</html>