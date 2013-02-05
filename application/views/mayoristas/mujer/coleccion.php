<div class="row">

	<section role="main">
		<div class="twelve columns">
			<div id="featured">
				<?php foreach(range(1,6) as $number): ?>
					<img src="<?=site_url('assets/images/slide-mujer/' . $number . '.jpg')?>" alt="NucleoModa.com.ar">
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