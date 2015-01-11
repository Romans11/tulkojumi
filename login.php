<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'esat';
} else {
    $logged = 'neesat';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ielogoties</title>
        <link rel="stylesheet" href="styles/main.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
		<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body OnLoad="document.login_form.email.focus();">
	<div class="izvelne"
	<ul class="izvelne">
	<li><a href="search">Sākums</a></li>
	<li><a href="import">Importēt</a></li>
	<li><a href="all">Viss</a></li>
	<li><a href="categories">Kategorijas</a></li>
	<li><a href="login">Ienākt/reģistrēties</a></li>
	</ul><br/><br/>
</div>
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Kļūda, ielogojoties!</p>';
        }
        ?> 
        <form action="includes/process_login.php" method="post" name="login_form">                      
            Epasts: <input type="text" name="email" />
            Parole: <input type="password" 
                             name="password" 
                             id="password"/>
            <input type="button" 
                   value="Ienākt" 
                   onclick="formhash(this.form, this.form.password);" /> 
        </form>
        <p>Ja Jums nav lietotājvārda, lūdzu <a href="register">reģistrējieties</a></p>
        <p>Ja tāds ir, tad <a href="login">ielogojieties</a>.</p>
        <p>Jūs <?php echo $logged ?> ielogojies.</p>
		<?php
		if ($logged=="esat")
		echo ('<a href="includes/logout.php">Izlogoties</a>');
		?>
    </body>
</html>