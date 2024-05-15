<?php
include("template/head.php");
?>
<div class="container mt-5">
    <h1>Resultados del Torneo de Tenis</h1>
    <ul class="list-group">
        <table class="table table-hover">
            <thead>
                <tr class="table-active">
                    <th>Nombre del Jugador</th>
                    <th>País</th>
                    <th>Partidos Ganados</th>
                    <th>Partidos Perdidos</th>
                    <th>Puntos Totales</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-active">
                    <td>Rafael Nadal</td>
                    <td>España</td>
                    <td>22</td>
                    <td>3</td>
                    <td>5500</td>
                </tr>
                <tr class="table-active">
                    <td>Novak Djokovic</td>
                    <td>Serbia</td>
                    <td>25</td>
                    <td>1</td>
                    <td>6000</td>
                </tr>
                <tr class="table-active">
                    <td>Roger Federer</td>
                    <td>Suiza</td>
                    <td>20</td>
                    <td>5</td>
                    <td>4800</td>
                </tr>
                <tr class="table-active">
                    <td>Dominic Thiem</td>
                    <td>Austria</td>
                    <td>18</td>
                    <td>7</td>
                    <td>4200</td>
                </tr>
                <tr class="table-active">
                    <td>Daniil Medvedev</td>
                    <td>Rusia</td>
                    <td>16</td>
                    <td>9</td>
                    <td>3800</td>
                </tr>
            </tbody>
        </table>
    </ul>
</div>
<?php
include("template/foot.php");
?>