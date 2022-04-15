<!DOCTYPE html>  
<html>  
<head>  
    <title>Login Page</title>  
</head>  
<body>  
    <?php echo isset($error) ? $error : ''; ?>  
    <form method="post" action="<?php echo site_url('Welcome/process'); ?>">  
        <table cellpadding="2" cellspacing="2">  
            <tr>  
                <td><th>Username:</th></td>  
                <td><input type="text" name="user"></td>  
            </tr>  
            <tr>  
                <td><th>Password:</th></td>  
                <td><input type="password" name="pass"></td>  
            </tr>  
  
            <tr>  
                <td> </td>  
                <td><input type="submit" value="Login"></td>  
            </tr>  
        </table>  
    </form>  
</body>  
</html>  
