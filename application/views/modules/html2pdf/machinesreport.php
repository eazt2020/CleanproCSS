<!DOCTYPE html>
<html>
<head>
    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/skin/default_skin/css/theme.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/html2pdf.css");?>">

</head>

<body>
		<div class="panel-body p20" id="invoice-item">
			<div class="row mb30">
				<div class="col-md-4">
					<div class="pull-left">
						<h1 class="lh10 mt10">MACHINES REPORT</h1>
					</div>
				</div>
			</div>
			<div class="row" id="invoice-table">
				<div class="col-md-12">
					<?php $calt00 = 0; foreach($machi00 as $row00) {
						$calt00++;
						echo '<table class="tg" width="100%">';
						echo '<tr>';
						echo '<th class="tg-ng15" colspan="3">Machine Name: '.strtoupper($row00['name']).'</th>';
						echo '</tr>';
						echo '<tr>';
						echo '<th class="tg-ng14" width="100">Error Code<br></th>';
						echo '<th class="tg-ng14">Description<br></th>';
						echo '<th class="tg-ng14" width="120px">Total Ticket<br></th>';
						echo '</tr>';
						$calt03 = 0;
						$calt01 = 0;
						foreach($tickee0 as $row01) {
							$calt01++;
							if ($row00['id'] == $row01['machId']) {
								echo '<tr>';
								echo '<td class="tg-ng14">'.$row01['error'].'</td>';
								echo '<td class="tg-0bri">'.strtoupper($row01['errorName']).'</td>';
								echo '<td class="tg-ng14">'.$row01['total'].'</td>';
								echo '</tr>';
								$calt03++;
							}
						}
						$calt02 = 0;
						foreach($totale0 as $row02) {
							if ($row00['id'] == $row02['id']) {
								$calt02++;
								echo '<tr>';
								echo '<td class="tg-ng16" colspan="2" align="right">Total Error:</td>';
								echo '<td class="tg-ng14">'.$row02['total'].'</td>';
								echo '</tr>';
							}
						}
						if ($calt03 == 0){
								echo '<tr>';
								echo '<td class="tg-ng14" colspan="3">NO DATA AVAILABLE</td>';
								echo '</tr>';
						}		
						echo '</table>';
						echo '<br>';
					}?>
				</div>
			</div>
		</div>
    </div>

</body>
</html>