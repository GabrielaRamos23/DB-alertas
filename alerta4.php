<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
	<?php
	$var1 = htmlentities($_GET['id']);
	$var2 = htmlentities($_GET['name']);
	$var3 = htmlentities($_GET['edad']);
	$var4 = htmlentities($_GET['opcion']);

	?>

	<script>
		Swal.fire({
			  title: '<?php echo $var2;?>',
			  text: "<?php echo $var1;?>",
			  icon: '<?php echo $var4;?>',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes, <?php echo $var3;?>!'
			}).then((result) => {
			  if (result.isConfirmed) {
			    Swal.fire(
			      'Deleted!',
			      'Your file has been deleted.',
			      'success'
			    )
			  }
			})

	</script>
	
</body>
</html>