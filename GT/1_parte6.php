<?php
include("template/head.php");
?>
<div class="container mt-5">
    <h1>Registro para el Torneo de Fútbol</h1>
    <form action="#" method="POST">
        <label for="nombre">Nombre completo:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="edad">Edad:</label><br>
        <input type="number" id="edad" name="edad" min="5" max="99" required><br><br>

        <label for="email">Correo electrónico:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="categoria">Categoría:</label><br>
        <select id="categoria" name="categoria" required>
            <option value="">Selecciona una categoría</option>
            <option value="Sub-12">Sub-12</option>
            <option value="Sub-15">Sub-15</option>
            <option value="Sub-18">Sub-18</option>
        </select><br><br>

        <label>Posición en el campo:</label><br>
        <input type="radio" id="delantero" name="posicion" value="Delantero">
        <label for="delantero">Delantero</label><br>
        <input type="radio" id="mediocampista" name="posicion" value="Mediocampista">
        <label for="mediocampista">Mediocampista</label><br>
        <input type="radio" id="defensa" name="posicion" value="Defensa">
        <label for="defensa">Defensa</label><br>
        <input type="radio" id="portero" name="posicion" value="Portero">
        <label for="portero">Portero</label><br><br>

        <input type="checkbox" id="terminos" name="terminos" required>
        <label for="terminos">Acepto los términos y condiciones del torneo</label><br><br>

        <input type="submit" value="Enviar">
    </form>
</div>
<?php
include("template/foot.php");
?>