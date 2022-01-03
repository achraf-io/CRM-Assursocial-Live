
<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
	<div class="content">
		<div class="row">
			<div>
				<div>
					<h1  style="color: #6000AB">Détails de l'équipe</h1>
					<table class="table table-dark table-striped">
						<thead>
							<tr>
								
								<th scope="col"><h4 style="color: #6000AB">Nom/prénom</h4></th>
								<th scope="col"><h4  style="color: #6000AB" >Email</h4></th>
								<th scope="col"><h4  style="color: #6000AB">Téléphone</h4></th>
								<th scope="col"><h4 style="color: #6000AB">équipe</h4></th>
								<th scope="col"><h4 style="color: #6000AB">Dernière connexion</h4></th>		
								<th scope="col"><h4 style="color: #6000AB">Dernière activité</h4></th>		
								<th scope="col"><h4 style="color: #6000AB">Fiches reçues</h4></th>
							</tr>
						</thead>
						<?php foreach ($Equipe as $staff) : ?>
							<tbody>
								<tr>
									<td style="font-weight: bold"><?php  echo  htmlspecialchars($staff->firstname . ' '  . $staff->lastname); ?></td>
									<td style="font-weight: bold" ><?php echo  htmlspecialchars ($staff->email); ?></td>
									<td style="font-weight: bold"><?php echo  htmlspecialchars($staff->phonenumber); ?></td>
									<td style="font-weight: bold"><?php echo  htmlspecialchars( $staff->Equipe_name); ?></td>
									<td style="font-weight: bold"><?php echo  htmlspecialchars($staff->last_login); ?></td>
									<td style="font-weight: bold"><?php echo  htmlspecialchars( $staff->last_activity); ?></td>
									<td style="font-weight: bold" id="time"><?php echo  htmlspecialchars ($tabassign[$staff->staffid]); ?></td>
								</tr>
							</tbody>
						<?php endforeach; ?>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>

<?php init_tail(); ?>
<script>
	$(function() {
		initDataTable('.table-staff', window.location.href);
	});

	function delete_staff_member(id) {
		$('#delete_staff').modal('show');
		$('#transfer_data_to').find('option').prop('disabled', false);
		$('#transfer_data_to').find('option[value="' + id + '"]').prop('disabled', true);
		$('#delete_staff .delete_id input').val(id);
		$('#transfer_data_to').selectpicker('refresh');
	}
</script>
<script>
	if (Time.hour() == 12)       // 12:05:00-59 am and haven't synched time?
    {
        document.getElementById('time').value == 0;                                // My "reset stuff"
        
    }
</script>
</body>

</html>