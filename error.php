<?php
$error = filter_input(INPUT_GET, 'err', $filter = FILTER_SANITIZE_STRING);
 
if (! $error) {
    $error = 'Notikusi nezināma kļūda.';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ielogošanās kļūda</title>
        <link rel="stylesheet" href="styles/main.css" />
    </head>
    <body>
        <h1>Ir problēmas</h1>
        <p class="error"><?php echo $error; ?></p>  
    </body>
</html>