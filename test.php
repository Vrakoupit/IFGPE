 <?php include 'header.php' ?>
 <!-- panel with buttons -->
        <div class="main">
            <ul class="panel">
                <li><a href="#login_form">Log In</a></li>
                <li><a href="#login_form">Sign Up</a></li>
            </ul>

        </div>

        <!-- popup form #1 -->
        <a href="#x" class="overlay" id="login_form"></a>
        <div class="popup">
            <h2>Welcome Guest!</h2>
            <p>Please enter your login and password here</p>
            <div>
                <label for="login">Login</label>
                <input type="text" id="login" value="" />
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" value="" />
            </div>
            <input type="button" value="Log In" />

            <a class="close" href="#close"></a>
        </div>
        <?php include 'footer.php' ?>