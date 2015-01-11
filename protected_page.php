<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Ielogošanās</title>
        <link rel="stylesheet" href="styles/main.css" />
    </head>
    <body>
		<div class="izvelne">
	<ul class="izvelne">
	<li><a href="search">Sākums</a></li>
	<li><a href="import">Importēt</a></li>
	<li><a href="all">Viss</a></li>
	<li><a href="categories">Kategorijas</a></li>
	<li><a href="login">Ienākt/reģistrēties</a></li>
	</ul><br/><br/>
</div>
        <?php if (login_check($mysqli) == true) : ?>
            <p>Sveiki, <?php echo htmlentities($_SESSION['username']); ?>!</p>
            <p>

            </p>
            <p>Iet uz <a href="search"> sākumu</a></p>
        <?php else : ?>
            <p>
                <span class="error">Jūs neesat autorizējies.</span> Lūdzu, <a href="login">ielogojieties</a>.
            </p>
        <?php endif; ?>
    </body>
</html>