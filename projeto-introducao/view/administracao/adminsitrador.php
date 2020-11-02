<?php

        session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-Vindo!!<?php echo $_SESSION['nome'];?></title>
</head>
<body>
    <h1>Bem-Vindo!!<?php echo $_SESSION['nome']; ?></h1>
</body>
</html>