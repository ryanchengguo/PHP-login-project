<?php
/**
 * Created by PhpStorm.
 * User: haolin
 * Date: 5/18/17
 * Time: 2:01 AM
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include 'css/css.html'?>
</head>
<body>
    <div class="form">
        <h1>Choose Your New Passworkd</h1>

        <form action="reset_password.php" method="post">

        <div class="field-wrap">
        <label>
            New Password <span class="req">*</span>
        </label>
        <input type="password" required autocomplete="off"/>
        </div>

         <div class="field-wrap"><label>
            Confirm New Password <span class="req">*</span>
        </label>
        <input type="password" required autocomplete="off"/>
         </div>

            <input type="hidden" name="email" value="<?= $email ?>">
            <input type="hidden" name="hash" value="<?= $hash ?>">

            <button class="button button-block"/>Apply</button>
        </form>
    </div>
</body>
</html>
