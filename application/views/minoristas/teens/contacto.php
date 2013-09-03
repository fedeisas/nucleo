<div class="row contact-content">
	<section role="main">
		<div class="six columns">
			<img src="<?=site_url('assets/images/contacto-teens-minoristas-2.jpg')?>" alt="Contacto">
		</div>
		<div class="six columns">
			<h2>Mandanos un mail</h2>

			<?=form_open('contact/send', array('id' => 'contact-form', 'class' => 'teens'))?>
				<input type="text" value="nombre" name="name" class="required placeholder">
				<input type="text" value="email" name="email" class="required email placeholder">
				<input type="text" value="asunto" name="subject" class="required placeholder">
				<textarea name="message" id="" cols="30" rows="10" class="required placeholder">mensaje</textarea>
				<input type="submit" class="button secondary small right" value="Enviar" />
			<?=form_close()?>

			<div class="message"></div>
		</div>
	</section>
	
	<?php 
		if( isset($template['partials']['sidebar_menu']) ) {
			echo $template['partials']['sidebar_menu'];
		}
	?>
</div>