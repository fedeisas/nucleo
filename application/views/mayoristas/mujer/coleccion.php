<div class="row">

	<section role="main">
		<div class="twelve columns">
			<div id="featured">
				<?php foreach(range(1,10) as $number): ?>
					<img src="http://placehold.it/970x500" alt="<?=htmlentities("Imágen " . $number)?>" />
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<?php 
		if( isset($template['partials']['sidebar_menu']) ) {
			echo $template['partials']['sidebar_menu'];
		}
	?>

</div>