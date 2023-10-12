<?php
        $connect = mysqli_connect("sql10.freesqldatabase.com:3306", "sql10652724", "uR7muAIU66", "sql10652724");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="#009578">
        <title>Sistema de Informacion</title>
        <link rel="stylesheet" href="src/master.css">
        <link rel="manifest" href="manifest.json">
        <link rel="apple-touch-icon" href="images/logo192.png">
    </head>
    <body>
        <div class="container">
            <header class="title">   
                <h1>Sistema de Informacion</h1>
            </header>
            <nav class="menu">
                <div class="menu-right-up">
                    Grupo
                    Jonathan Dziuk
                    Paola Quisbert
                    Manuel Segaline
                </div>
                <div class="menu-right-down">
                    <a href="https://www.att.gob.bo/index.php/" target="_blank"><button class="btn-ATT">Link ATT</button></a>
                    <a href="https://neo.ucb.edu.bo/student_lessons/list/4174641" target="_blank"><button class="btn-Mat">Link Pagina Materia</button></a>
                    <a href="https://www.google.com/" target="_blank"><button class="btn-BdD">Link Base de Datos</button></a>
                    <a href="https://www.google.com/" target="_blank"><button class="btn-Inf">Informacion</button></a>
                </div>
                <div class="menu-left-up">
                    <select class="slcSystem" id="System" name="System">
                    <option value="" selected hidden>Seleccione el Sistema</option>
                    <option value="System1">Sistema 1</option>
                    <option value="System2">Sistema 2</option>
                    <option value="System3">Sistema 3</option>
                    <option value="System4">Sistema 4</option>
                    <option value="System5">Sistema 5</option>
                    <option value="System6">Sistema 6</option>
                    <option value="System7">Sistema 7</option>
                    <option value="System8">Sistema 8</option>
                    <option value="System9">Sistema 9</option>
                    <option value="System10">Sistema 10</option>
                    </select>
                    <form class="date-group">
                        Seleccione la fecha:
                        <input type="date" min="2022-01-01" max="2022-12-31" class="date" id="DateUser">
                    </form>
                    <button class="btn-Eva" onclick="consultar()">Evaluar</button>
                </div>
                <div class="dtable">
                <table>
                    <tr>
                        <td>Sistema</td>
                        <td>Gestion</td>
                        <td>Mes</td>
                        <td>Dia</td>
                        <td>Dato T</td>
                        <td>Dato H</td>
                        <td>Dato P</td>
                        <td>Dato FPF</td>
                        <td>Estado</td>
                    </tr>
                    <?php
                    $sql="SELECT * FROM Datos WHERE idDato<10";
                    $result=mysqli_query($connect,$sql);
                    while($mostrar=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $mostrar['sistema'] ?></td>
                        <td><?php echo $mostrar['gestion'] ?></td>
                        <td><?php echo $mostrar['mes'] ?></td>
                        <td><?php echo $mostrar['dia'] ?></td>
                        <td><?php echo $mostrar['dato_t'] ?></td>
                        <td><?php echo $mostrar['dato_h'] ?></td>
                        <td><?php echo $mostrar['dato_p'] ?></td>
                        <td><?php echo $mostrar['dato_fpf'] ?></td>
                        <td><?php echo $mostrar['estado'] ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
                </div>
            </nav>
        </div>
        <script src="src/index.js"></script>
    </body>
</html>
