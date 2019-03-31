<!DOCTYPE html>
<html>
<head>
	<title>Jquery-Ajax Form</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/style.css')?>">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
</head>
<body class="container">
	<span id="result"></span>
	
	<table class="table" id="datatable">
		<thead>
			<tr>
				<th>Name</th>
				<th>City</th>
			</tr>
		</thead>
	</table>

	<script type="text/javascript" src="<?php echo base_url('assets/js/datatable.js') ?>"></script>
	<script type="text/javascript">
		init_Datatable('<?php echo base_url("datatable/index") ?>');
	</script>
</body>
</html>