<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册</title>
    <base href="<?php echo site_url(); ?>">
</head>
<style>
    .error{
        color: red;
    }
</style>
<body>
<form action="welcome/save" method="post">
    <p>
        用户名:<input type="text" name="username" value="<?php echo isset($name)? $name
            :''?>">
        <span class="error"><?php echo isset($name_error)? $name_error :''?></span>
    </p>
    <p>
        密码:<input type="password" name="pwd1">
        <span class="error"><?php echo isset($pwd1_error)? $pwd1_error
                :''?></span>

    </p>
    <p>
        确认密码:<input type="password" name="pwd2">
        <span class="error"><?php echo isset($pwd2_error)? $pwd2_error
                :''?></span>
    </p>
    <p>
        <input type="submit" value="注册">
    </p>
</form>
</body>
</html>