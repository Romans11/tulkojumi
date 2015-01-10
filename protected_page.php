<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Drošā ielogošanās</title>
        <link rel="stylesheet" href="styles/main.css" />
    </head>
    <body>
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