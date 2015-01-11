<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Reģistrācija</title>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <link rel="stylesheet" href="styles/main.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
	<div class="izvelne"
	<ul class="izvelne">
	<li><a href="search">Sākums</a></li>
	<li><a href="import">Importēt</a></li>
	<li><a href="all">Viss</a></li>
	<li><a href="categories">Kategorijas</a></li>
	<li><a href="login">Ienākt/reģistrēties</a></li>
	</ul><br/><br/>
</div>
        <h1>Reģistrējieties</h1>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
        <ul>
            <li>Lietotājvārdam jāsatur tikai burti, cipari vai pasvītrojums</li>
            <li>Epastiem jābūt īstiem</li>
            <li>Parolēm jābūt vismaz 6 simbolus garām</li>
            <li>Parolēm jāsatur
                <ul>
                    <li>Vismaz viens lielais burts (A..Z)</li>
                    <li>Vismaz viens mazais burts (a..z)</li>
                    <li>Vismaz viens cipars (0..9)</li>
                </ul>
            </li>
            <li>Parolēm jāsakrīt</li>
        </ul>
        <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" 
                method="post" 
                name="registration_form">
            Lietotājvārds: <input type='text' 
                name='username' 
                id='username' /><br>
            Epasts: <input type="text" name="email" id="email" /><br>
            Parole: <input type="password"
                             name="password" 
                             id="password"/><br>
            Parole vēlreiz: <input type="password" 
                                     name="confirmpwd" 
                                     id="confirmpwd" /><br>
            <input type="button" 
                   value="Reģistrēties" 
                   onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" /> 
        </form>
        <p>Iet uz <a href="login">ielogošanās lapu</a>.</p>
    </body>
</html>