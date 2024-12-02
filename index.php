<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title> URL Link Bar </title>
     <link rel="stylesheet" href="/URL_Link_Bar/style.css">
</head>
<body>
     
     <h1> URL Link Bar </h1>

     <form action="index.php" method="POST">

          <input type="text" name="link" value="" placeholder="Enter Your Url"> <br>

          <input type="submit" name="submit" value="submit" hidden>


     </form>


     <?php  

          if(isset($_POST['submit'])) {
               $link = $_POST['link'];

               header("location: $link");
               exit();
          }

      ?>
</body>
</html>