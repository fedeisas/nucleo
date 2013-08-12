<section id="sidebar" role="complementary">
	<nav id="sideMenu" role="">
		<ul id="nav" class="nav-bar">
			<li>
				<a class="<?=active('coleccion', 2)?> <?=active('', 2)?>" href="<?=site_url($this->router->class . '/coleccion')?>" title="colección verano 2014">
					colección verano 2014
				</a>
			</li>
			<li>
				<a class="<?=active('video', 2)?>" href="<?=site_url($this->router->class . '/video')?>" title="Video">
					video
				</a>
			</li>
			<li>
				<a class="<?=active('locales', 2)?>" href="<?=site_url($this->router->class . '/locales')?>" title="Locales">
					locales
				</a>
			</li>
			<li>
				<a class="<?=active('contacto', 2)?>" href="<?=site_url($this->router->class . '/contacto')?>" title="Contacto">
					contacto
				</a>
			</li>
			<li>
				<a class="" href="<?=site_url('')?>" title="Inicio">
					inicio
				</a>
			</li>
		</ul>
	</nav>
</section>