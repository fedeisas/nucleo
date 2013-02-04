<div class="row header">

	<div class="four columns">

		<div class="logo">
			<a href="<?=site_url()?>" title="Nucleo">
				<img src="<?=site_url('assets/images/logo-' . $this->router->class . '.jpg')?>" alt="Nucleo">
			</a>
		</div>

	</div>

	<div class="eight columns">

		<ul class="menu hide-for-small">
			<li class="<?=active('coleccion', 2)?> <?=active('', 2)?>">
				<a href="<?=site_url($this->router->class . '/coleccion')?>" title="colección invierno 2013">
					colección invierno 2013
				</a>
			</li>
			<li class="<?=active('video', 2)?>">
				<a  href="<?=site_url($this->router->class . '/video')?>" title="Video">
					video
				</a>
			</li>
			<li class="<?=active('contacto', 2)?>">
				<a  href="<?=site_url($this->router->class . '/contacto')?>" title="Contacto">
					contacto
				</a>
			</li>
			<li class="<?=active('preguntas', 2)?>">
				<a href="<?=site_url($this->router->class . '/preguntas')?>" title="Preguntas Frecuentes">
					preguntas frecuentes
				</a>
			</li>
			<li>
				<a class="" href="<?=site_url('')?>" title="Inicio">
					inicio
				</a>
			</li>
			<li class="social">
				<a href="<?=$this->config->item('mayoristas.twitter_url')?>" class="twitter" title="Twitter">Twitter</a>
				<a href="<?=$this->config->item('mayoristas.facebook_url')?>" class="facebook" title="Facebook">Facebook</a>
			</li>
		</ul>

		<p class="show-for-small">
			<a class='menu-button sidebar-button button' id="sidebarButton" href="#sidebar">Menu <span>&#x25BC;</span></a>
		</p>

	</div>
</div>