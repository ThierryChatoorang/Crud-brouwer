<?php
    // functie: update brouwer
    // auteur: Thierry Chatoorang

    require_once('functions.php');

    // Test of er op de wijzig-knop is gedrukt 
    if(isset($_POST['btn_wzg'])){

        // test of update gelukt is
        if(updateRecord($_POST) == true){
            echo "<script>alert('Brouwer is gewijzigd')</script>";
        } else {
            echo '<script>alert("Brouwer is NIET gewijzigd")</script>';
        }
    }

    // Test of id is meegegeven in de URL
    if(isset($_GET['id'])){  
        // Haal alle info van de betreffende id $_GET['id']
        $id = $_GET['id'];
        $row = getRecord($id);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Wijzig Brouwer</title>
</head>
<body>
  <h2>Wijzig Brouwer</h2>
  <form method="post">
    
    <input type="hidden" id="brouwcode" name="brouwcode" required value="<?php echo $row['brouwcode']; ?>"><br>
    <label for="naam">Naam:</label>
    <input type="text" id="naam" name="naam" required value="<?php echo $row['naam']; ?>"><br>

    <label for="landcode">Landcode:</label>
    <input type="text" id="landcode" name="landcode" required value="<?php echo $row['landcode']; ?>"><br>

    <input type="submit" name="btn_wzg" value="Wijzig">
  </form>
  <br><br>
  <a href='home.php'>Home</a>
</body>
</html>

<?php
    } else {
        echo "Geen id opgegeven<br>";
    }
?>