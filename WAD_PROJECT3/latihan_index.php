<?php 
    $conn = mysqli_connect("localhost:3308","root","","wad_project3");
    $result = mysqli_query($conn,"SELECT * FROM student");

    $data = mysqli_fetch_object($result);
    //var_dump($data->ID);
    //var_dump($data->Name);
    //var_dump($data->NIM);
    //var_dump($data->Address);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">NIM</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    <?php while( $data = mysqli_fetch_object($result)){
    ?>
    <tr>
      <td><?php echo $data->ID?></td>
      <td><?php echo $data->Name?></td>
      <td><?php echo $data->NIM?></td>
      <td><?php echo $data->Address?></td>

    </tr>
    <?php }
    ?>
    <!-- <tr>
      <th scope="row">2</th>
      <td>1242</td>
      <td>Haruto</td>
      <td>123456753</td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      
    </tr> -->
   
  </tbody>
</table>
</body>
</html>