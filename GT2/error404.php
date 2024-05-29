<?php
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - Página no encontrada</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" href="img/IMB.ico" type="image/x-icon">
</head>

<body>
    <div class="container">
        <h1>Error 404 - Page not found</h1>
        <p>Sorry, the page you are looking for does not exist</p>
        <div id="dino-game">
            <canvas id="gameCanvas" width="800" height="200"></canvas>
        </div>
    </div>
</body>

</html>