<?php

defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class='container'>
<h1>Welcom to Equipe</h1>
<table  class="table table-dark table-striped">
<thead>
<tr>
 <th scope="col">#</th>
 <th scope="col">First Name</th>
 <th scope="col">Last Name</th>
 <th scope="col">Email</th>
 <th scope="col">Equipe Name</th>
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

</div>

