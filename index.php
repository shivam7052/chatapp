<?php include_once "header.php";
?>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="user.html" onsubmit="return fun()" enctype="multipart/form_data">
                <div class="error_txt">This is an error message!</div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="field input">
                    <label>Mobile No.</label>
                    <input type="tel" name="mobno" title="Contact number must be 10 digits" placeholder="Enter mobile number" pattern="^\d{10}$" required="required">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter new password" value="" required>
                    <i class="fa fa-eye" id="eye1" onclick="toggle1()"></i>
                </div>
                <span id="message" style="color: red;"></span>
                <div class="field input">
                    <label>Re-enter Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm password" value="" required>
                    <span id="messages" style="color: red;"></span>
                    <i class="fa fa-eye" id="eye2" onclick="toggle2()"></i>
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="file" name="image" required>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to chat">
                </div>
            </form>
            <div class="link">Already signed up? <a href="indax.php">Login now</a></div>
            <script src="index.js" charset="utf-8"></script>
            <script src="signup.js" charset="utf-8"></script>
        </section>
    </div>
</body>

</html>