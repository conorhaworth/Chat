<div class="login-container">
    <div class="login-inner">
        <div class="login-logo"></div>
        <div class="login">

            <form method="post" action="/php/login_auth.php">
                <div id="login_username_error">
                    <p>Username must have more than 0 characters.</p>
                    <p>Username must have no more than 18 characters.</p>
                    <p>Username must contain atleast one numeric or alphanumeric character.</p>
                    <p>Username can also contain '-', '_' & '+'.</p>
                    <p>Username cannot contain spaces.</p>
                </div>
                <label>Pick Your Name:</label><input type="text" placeholder="Username..." id="login_username" name="username">
                <input type="submit" id="login_submit" value="Go" disabled>
            </form>
            
        </div>
    </div>
</div>
<script src="/js/login_auth.js"></script>