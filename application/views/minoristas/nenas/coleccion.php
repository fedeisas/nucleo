<div class="row">

	<section role="main">
		<div class="twelve columns">
			<ul id="carousel" class="elastislide-list">
				<?php foreach(range(1,10) as $number): ?>
					<li><a href="#"><img src="http://placehold.it/235x450" alt="<?=htmlentities("Imágen " . $number)?>" /></a></li>
				<?php endforeach; ?>
			</ul>	
		</div>
	</section>

	<?php 
		if( isset($template['partials']['sidebar_menu']) ) {
			echo $template['partials']['sidebar_menu'];
		}
	?>

</div>