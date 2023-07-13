<?php
require("views/header.php");?>
<section>
<div class="result">
            <?php
            if (isset($_GET['empty'])){
                echo '<div class="alert alert-danger">Enter Username or Password</div>';
            }elseif (isset($_GET['loginE'])){
                echo '<div class="alert alert-danger">Username or Password Don\'t Match</div>';
            } ?>
        </div>
    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
    <form class="form-signin" data-toggle="validator" action="ajax.php" method="post">
            <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="email"  required type="text" class="form-control shadow-none text-center" placeholder="Admin Name" data-error="Enter Username or Email" required>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="mb-4">
                    <input name="password" required type="password" class="form-control shadow-none text-center" placeholder="Password" data-error="Enter Password">
                </div>
                <button name="login" type="submit" class="btn  custom-bg shadow-none">LOGIN</button>
            </div>
        </form>
    </div>
</section>