<div class="row contact-content">
	<section role="main">
		<div class="six columns">
			<img src="http://placehold.it/470x420" alt="">
		</div>
		<div class="six columns">
			<h2>Mandanos un mail</h2>

			<?=form_open('contact/send', array('id' => 'contact-form'))?>
				<input type="text" placeholder="nombre" name="name" class="required">
				<input type="text" placeholder="email" name="email" class="required email">
				<input type="text" placeholder="asunto" name="subject" class="required">
				<textarea name="message" id="" cols="30" rows="10" class="required">mensaje</textarea>
				<input type="submit" class="button secondary small right" value="Enviar" />
			<?=form_close()?>
		</div>
	</section>
	
	<?php 
		if( isset($template['partials']['sidebar_menu']) ) {
			echo $template['partials']['sidebar_menu'];
		}
	?>
</div>