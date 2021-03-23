<!DOCTYPE html>
<?php
    include("conexion.php");
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulario</title>
    </head>
    <body>
        <h1>Guild member</h1>
        <form action="store.php" method="POST">
            <label for="nombre">
                Name:<input id="nombre" type="text" name="Nombre">
            </label></br></br>

            <label for="genero">
                Gender:</b><input id="genero" value="M" type="radio" name="Genero">Male
                <input id="genero" value="F" type="radio" name="Genero">Female
            </label></br></br>

            <label for="clase">
                Class:<select id="clase" name="Clase">
                    <option selected="selected" value="Landsknecht">Landsknecht</option>
                    <option value="Fortress">Fortress</option>
                    <option value="Nightseeker">Nightseeker</option>
                    <option value="Dancer">Dancer</option>
                    <option value="Medic">Medic</option>
                    <option value="Sniper">Sniper</option>
                    <option value="Runemaster">Runemaster</option>
                </select>
            </label></br></br>

            <label for="nivel">
                Level:<input id="nivel" value="1" max="99" min="1" step="1" type="number" name="Nivel">
            </label></br></br>

            <label for="subir">
                <input type="submit" value="Confirm">
            </label>

            <hr>

            <?php
                $sql = "SELECT * FROM Members";
                $stmt = $conn->prepare($sql);
                $stmt->execute();

                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                echo "<table border='1'>";
                echo "<tr> <th>Name</th> <th>Gender</th> <th>Class</th> <th>Level</th> </tr>";
                foreach ($stmt->FetchAll() as $miembro){
                    echo "<tr>
                        <td>", $miembro['Nombre'], "</td>
                        <td>", $miembro['Genero'], "</td>
                        <td>", $miembro['Clase'], "</td>
                        <td>", $miembro['Nivel'], "</td>
                    </tr>";
                }

                echo "</table>";
            ?>
        </form>
    </body>
</html>
