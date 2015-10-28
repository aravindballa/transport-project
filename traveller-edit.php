 

<?php   

include('php/database/connect.php');

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM travellers WHERE id=$id;");

$row = mysqli_fetch_array( $result );

$name = $row['name'];
$gender = $row['gender'];
$age = $row['age'];
$address = $row['address'];
$validity = $row['validity'];

?>
 <html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>
    <div class="nav"></div>

    


    <form action="php/functions/edit.php?id=<?php echo $id ?>" method="post">
      <label for="name">Name <br/>
        <input name="name" value="<?php echo $name ?>" required />
      </label> 

      <label for="gender">Gender <br/>
      <input type="text" name="gender" value="<?php echo $gender ?>" required />
      </label> 

      <label for="age">Age <br/>
      <input type="number" name="age" value="<?php echo $age ?>" required />
      </label> 

      <label for="address">Address <br/>
      <input type="text" name="address" value="<?php echo $address ?>" required />
      </label> 

      <label for="validity">Validity <br/>
      <input type="number" name="validity" value="<?php echo $validity ?>" required />
      </label> 

      <input type="submit" value="Save" />
    </form>
    
  </body>
</html>