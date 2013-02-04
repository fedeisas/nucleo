<div class="row contact-content">
	<section role="main">
		<div class="four columns">
			<img src="<?=site_url('assets/images/contacto-mujer-mayoristas.jpg')?>" alt="Contacto">
		</div>
		<div class="four columns">

			<h2>Mandanos un mail</h2>

			<p class="suggest">Sugerimos leer las <a href="<?=site_url( $this->router->class . "/preguntas" )?>">preguntas frecuentes</a> antes de enviar tu consulta.</p>

			<?=form_open('contact/send', array('id' => 'contact-form'))?>
				<input type="text" placeholder="nombre" name="name" class="required">
				<input type="text" placeholder="email" name="email" class="required email">
				<input type="text" placeholder="asunto" name="subject" class="required">
				<textarea name="message" id="" cols="30" rows="10" class="required">mensaje</textarea>
				<input type="submit" class="button secondary small right" value="Enviar" />
			<?=form_close()?>
		</div>
		<div class="four columns">
			<h3>NUCLEO MODA</h3>
			<p class="address">
				Concordia 579, Flores
			</p>
			<p class="address">
				C1406APG
			</p>
			<p class="address">
				<em>Buenos Aires, Argentina</em>
			</p>

			<p class="phone">
				tel. (5411) 4115 011 (líneas rotativas)
			</p>

			<p class="address">
				horario:
			</p>
			<p class="hours">
				Lunes a Viernes de 8:00 a 17:30 hs.
			</p>
			<p class="hours">
				Sábados de 8:00 a 13:00 hs.
			</p>
		</div>	
	</section>
	
	<?php 
		if( isset($template['partials']['sidebar_menu']) ) {
			echo $template['partials']['sidebar_menu'];
		}
	?>
</div>