<?php
require_once ('functions.php');
require_once ('lib/Persona.php');
require_once ('lib/Session.php');
$personas = get_personas();
$session = new Session();


?>

<!DOCTYPE html>
<html>
<head>
    <title>Ejercicios POO</title>
</head>

<body>
<table>
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
        <th>mayor de edad?</th>
    </tr>
    </thead>
    <tbody>
<?php foreach ($personas as $persona):?>

<tr>
    <td><?php echo $persona->getName(); ?></td>
    <td><?php echo $persona->getSurname(); ?></td>
    <td><?php echo $persona->getAge(); ?></td>
    <td><?php echo $persona->mayorDeEdad(); ?></td>
</tr>
<?php endforeach; ?>
    </tbody>
</table>
<?php
$session->setAttribute("usuario", "Ruben");
echo "valor session set: " . $session->getAttribute("usuario") . "<br />";
$session->deleteAttribute("usuario");
echo "valor session deleted:" . $session->getAttribute("usuario") . "<br />";
$session->destroySession();

?>

</body>

</html>