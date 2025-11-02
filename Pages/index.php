<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FB</title>
    <script type="text/javascript" src="../JS/login.js"></script>
</head>
<body>
     <?php
     if(isset($_GET['error']) && $_GET['error'] == 1){
           echo "<p style='color:red;'>Identifiants incorrects</p>";
        }
    ?>
  
    <form id="myForm">
        <input type="text" id="nom"  name="nom" required>
        <input type="password" id="pwd" name="pwd" required>

        <input type="submit" value="Valider"> 
    </form>

   
   <!-- <a href="publier.php">any</a> -->
</body>
</html>