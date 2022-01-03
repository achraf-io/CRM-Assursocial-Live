<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    <title>Equipe</title>
</head>
<body>
    <div class='container' >
     <h1>Welcom to Equipe</h1>
     <table  class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
      <th scope="col">equipe name</th>
    </tr>
  </thead>
  <?php foreach($user as $staff):?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $staff->staffid;?></th>
      <td><?php echo $staff->firstname;?></td>
      <td><?php echo $staff->lastname;?></td>
      <td><?php echo $staff->email;?></td>
      <td><?php echo $staff->Equipe_name;?></td>
    </tr>
  </tbody>
  <?php endforeach; ?>
</table>
    
     
     <?php
       //echo ($equipe->id) . '<br>';
      // echo ($equipe->Equipe_name).'<br>';
    //foreach($user as $staff):?>


        <!-- 
             #ID<?php /*echo $staff->staffid;?><br>
             #ID<?php echo $staff->email;?><br>
             #First Name<?php echo $staff->firstname;?><br>
             #last Name<?php echo $staff->lastname;?><br>
             #Phone number<?php echo $staff->phonenumber;?><br>
            <p> Equip Id:<?php echo  $staff->equipe_id;*/?></p> -->
            
     <?php//endforeach; ?>
      
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

