<?php $var = "Haha\n"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forma de Prueba</title>
</head>
<body>
    <h1>Gracias por ayudarnos con las pruebas :D!</h1>
    <p>La información que enviaste fue la siguiente:</p>
    <ul>
        <li><strong>Nombre:</strong> <?php echo $_POST['nombre']?></li>
        <li><strong>Email:</strong> <?php echo $_POST['email']?></li>
        <li><strong>Asunto:</strong> <?php echo $_POST['asunto']?></li>
        <li><strong>Mensaje:</strong> <?php echo $_POST['mensaje']?></li>
        <li><?php echo $var; ?></li>
    </ul>
</body>
</html>