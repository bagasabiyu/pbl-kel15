<?php
require 'backend/conn.php';
require 'backend/loginhandler.php';

?>

<html>
<head></head>
<body>
	<form action="" method="post">
        <h4>Login</h4>
        <ul>
            <li>
                <span>Username</span>
                <input required type="text" name="user" id="" placeholder="username"/>
            </li>
            <li>
                <span>Password</span>
                <input required type="password" name="pass" id="" placeholder="password"/>
            </li>
            <li>
                <input class="button btn-small" type="submit" name="submit" value="submit"/>
            </li>
        </ul>
        
    </form>
</body>
</html>