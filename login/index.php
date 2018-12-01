<?php 
    include_once('../includes/header.php'); 
    if($_SESSION["type"]=="student"){
        $newURL = "../student-dashboard/index.php";
        header('Location: '.$newURL);
    }
    if($_SESSION["type"]=="faculty"){
        $newURL = "../faculty-dashboard/index.php";
        header('Location: '.$newURL);
    }
    // include_once('../includes/header.php'); 
?>
    
    <script type="text/javascript" src="login.js"></script>

<?php

    include_once('../nav/index.php');
?>
<body class="login-content">
    <div class="container login-container">
        <div class="row">
            <div class="col-md-6 login-form-1">
                <h3>Student Login</h3>
                <form id="s_form">
                    <div class="form-group">
                        <input name="s_uid" type="text" class="form-control" placeholder="Enrollment Number" pattern="[0-9]+" oninvalid="this.setCustomValidity('Only numbers allowed')" oninput="this.setCustomValidity('')"  required/>
                    </div>
                    <div class="form-group">
                        <input name="s_pwd" type="password" class="form-control" placeholder="Password" required />
                    </div>
                    <input type="hidden" name="s_submit" value="student">
                    <div id="s_error" class="error">
                        <p><img src="images/error.png">   Incorrect Enrollment number / Password</p>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" />
                    </div>
                <!--
                    <div class="form-group">
                        <a href="#" class="ForgetPwd">Forgot Password</a>
                    </div>
                -->
                </form>
            </div>
            <div class="col-md-6 login-form-2">
                <h3>Faculty Login</h3>
                <form id="t_form">
                    <div class="form-group">
                        <input name="t_uid" type="text" class="form-control" placeholder="Faculty Id" pattern="[a-zA-Z0-9]+" oninvalid="this.setCustomValidity('Only characters and numbers allowed')" oninput="this.setCustomValidity('')" required/>
                    </div>
                    <div class="form-group">
                        <input name="t_pwd" type="password" class="form-control" placeholder="Password" required/>
                    </div>
                    <input type="hidden" name="t_submit" value="faculty">
                    <div id="t_error" class="error">
                        <p><img src="images/error.png">   Incorrect Faculty ID / Password</p>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" />
                    </div>
                <!--
                    <div class="form-group">
                        <a href="#" class="ForgetPwd" value="Login">Forgot Password</a>
                    </div>
                -->
                </form>
            </div>
        </div>
    </div>
<?php 
    include_once('../includes/footer.php');
?>