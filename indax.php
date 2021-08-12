<?php include_once "header.php";
?>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error_txt">This is an error message!</div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="Enter your email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password">
                    <i class="fa fa-eye" id="eye2" onclick="toggle1()"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to chat">
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
            <script src="index.js" charset="utf-8"></script>
            <script src="login.js" charset="utf-8"></script>
        </section>
    </div>
</body>

</html>