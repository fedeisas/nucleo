<div class="row locales-content">

	<section role="main">

		<div class="four columns">
			<img src="<?=site_url('assets/images/locales_teens_2.jpg')?>" alt="Locales">
		</div>

		<div class="eight columns">
			
			
			<div class="row">
				<div class="six columns address">
				
					<h2>Barrio Norte</h2>
					<p>Avenida Santa Fé 1998,</p>
					<p>Capital Federal</p>
					<p><em>Buenos Aires, Argentina</em></p>
				
					<p class="phone">tel. (5411) 6088 9711</p>
				
				</div>
				<div class="six columns address">
				
					<h2>San Justo</h2>
					<p>Shopping San Justo</p>
					<p>Juan Manuel de Rosas 3910, Local 111</p>
					<p><em>Buenos Aires, Argentina</em></p>
				
					<p class="phone">tel. (5411) 4480 2911</p>
				
				</div>
			</div>
			

			<div class="row">
				<div class="twelve columns">
					<div id="map"></div>
				</div>
			</div>

		</div>
	</section>
	
	<?php 
		if( isset($template['partials']['sidebar_menu']) ) {
			echo $template['partials']['sidebar_menu'];
		}
	?>
</div>