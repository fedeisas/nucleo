<?php 
	if ($_POST['pass_field'] == '682536') {
?>
	<script type="text/javascript">
			$('#error').text('Entering gallery');
			load_gallery = 'kit_prensa'	//Name of gallery file without .html
			window.location.hash = '#'+load_gallery;
	</script>

<?php 
	}
	else {
?>
	<script type="text/javascript">
		$(function(){
			$('#error').text('La clave es incorrecta');
		});
	</script>
	 
<?php	
	}
?>