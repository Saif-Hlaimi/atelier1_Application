<?php
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $id = $_GET['id'];
    $nom = $_GET['nom'];
    $desc = $_GET['description'];
    $adresse = $_GET['adresse'];
    $domaine = $_GET['domaine'];

    if(empty($id) || empty($nom) || empty($desc) || empty($adresse) || empty($domaine)) {
        echo "Champs requis";
    } else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
  <h1> Affiche des Clubs</h1>
    <fieldset style="width: fit-content;">
    <table border="3">
        <tr>
            <td>Id</td>
            <td>Nom</td>
            <td>Description</td>
            <td>Adresse</td>
            <td>Domaine</td>
        </tr>
        <tr>
            <td> <?php echo $id ?> </td>
            <td> <?php echo $nom ?> </td>
            <td> <?php echo $desc ?> </td>
            <td> <?php echo $adresse ?> </td>
            <td> <?php echo $domaine ?> </td>
        </tr>
    </table>
    </fieldset>

</body>
</html>

<?php
    }
} else {
    echo "Aucune donnée de formulaire soumise.";
}
?>
