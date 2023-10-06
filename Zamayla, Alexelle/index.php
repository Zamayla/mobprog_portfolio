<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY Id DESC");
?>

<html>
<head>
    <title>Homepage</title>
</head>

<body> 
<br>
<div class="container">
<div class="btn-group">
  <a href="index.php" class="btn btn-primary active" aria-current="page">Home</a>
  <a href="add.php" class="btn btn-outline-success">Add New User</a>
  
</div>
</div>




    <br>
    <!-- <a href="add.php"> -->
    <div class="container"><h2 align="center">Dashboard</h1><br/><br/></div>
                        
    <div class="container">
        <table class='table table-bordered table-striped'>
         <thead>
        <tr>
            <th>Name</th> 
            <th>Mobile</th> 
            <th>Email</th> 
            <th>Action</th>
    </tr>
     <?php                                 
    while ($row = mysqli_fetch_array($result)) { ?>
        <tr>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Mobile']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td>
            <a href="edit.php?Id= <?php echo $row['Id']; ?>" class='btn btn-primary'>Edit</a>
            <a href="delete.php?Id= <?php echo $row['Id']; ?>" class='btn btn-danger' onclick="sample()">Delete</a></td>
        </tr>
    <?php } 
?>

  <!--   <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['Name']."</td>";
        echo "<td>".$user_data['Mobile']."</td>";
        echo "<td>".$user_data['Email']."</td>";
        echo  "<td>
        <a href='edit.php?id=$user_data[Id]'> Edit</a>
        <a href='delete.php?id=$user_data[Id]'>Delete</a></td></tr>";
    }
    ?> -->
    </table>
</body></div>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>



</html>

<script>
    function sample(){

        alert('Are you sure you want to delete this?')

    }
</script>