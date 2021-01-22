<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
		require 'database.php';
        $db = Database::connect();
        
        $mail=$_POST['username'];
        $pwd = $db->query("SELECT password FROM multi_login1 WHERE username='$mail'");
        
        
        
        if ($pwd==$_POST['password'])
        {header('Location: index.php');
       }
        else{header('Location: login.php');
        }
        Database::disconnect();
        ?>
	</body>
</html>