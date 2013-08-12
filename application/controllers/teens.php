<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teens extends MY_Controller {

	public function index() {
		$this->coleccion();
	}

	public function preguntas() {

		$this->template->title(SITENAME, ucwords(SITE), "Preguntas Frecuentes");

		$this->template
			 ->set('data', $this->data)
			 ->set_partial('css', 'common/css')
			 ->set_partial('js', 'common/js')
			 ->set_partial('meta', 'common/meta')
  			 ->set_partial('header', SITE . '/common/header')
  			 ->set_partial('footer', SITE . '/common/footer')
  			 ->set_partial('sidebar_menu', SITE . '/common/sidebar_menu')
			 ->set_layout('/main')
			 ->build( SITE . '/teens/preguntas' );
	}

	public function contacto() {

		$this->template->title(SITENAME, ucwords(SITE), "Contacto");

		$this->template
			 ->set('data', $this->data)
			 ->set_partial('css', 'common/css')
			 ->set_partial('js', 'common/js')
			 ->set_partial('meta', 'common/meta')
  			 ->set_partial('header', SITE . '/common/header')
  			 ->set_partial('footer', SITE . '/common/footer')
  			 ->set_partial('sidebar_menu', SITE . '/common/sidebar_menu')
			 ->set_layout('main')
			 ->build( SITE . '/teens/contacto' );
	}

	public function video() {

		$this->template->title(SITENAME, ucwords(SITE), "Video");

		$this->template
			 ->set('data', $this->data)
			 ->set_partial('css', 'common/css')
			 ->set_partial('js', 'common/js')
			 ->set_partial('meta', 'common/meta')
  			 ->set_partial('header', SITE . '/common/header')
  			 ->set_partial('footer', SITE . '/common/footer')
  			 ->set_partial('sidebar_menu', SITE . '/common/sidebar_menu')
			 ->set_layout('main')
			 ->build( SITE . '/teens/video' );
	}

	public function coleccion() {

		$this->template->title(SITENAME, ucwords(SITE), "Colección");

		$this->template
			 ->set('data', $this->data)
			 ->set_partial('css', 'common/css')
			 ->set_partial('js', 'common/js')
			 ->set_partial('meta', 'common/meta')
  			 ->set_partial('header', SITE . '/common/header')
  			 ->set_partial('footer', SITE . '/common/footer')
  			 ->set_partial('sidebar_menu', SITE . '/common/sidebar_menu')
			 ->set_layout('main')
			 ->build( SITE . '/teens/coleccion' );
	}

	public function locales() {

		$this->template->title(SITENAME, ucwords(SITE), "Locales");

		$this->template
			 ->set('data', $this->data)
			 ->set_partial('css', 'common/css')
			 ->set_partial('js', 'common/js')
			 ->set_partial('meta', 'common/meta')
  			 ->set_partial('header', SITE . '/common/header')
  			 ->set_partial('footer', SITE . '/common/footer')
  			 ->set_partial('sidebar_menu', SITE . '/common/sidebar_menu')
			 ->set_layout('main')
			 ->build( SITE . '/teens/locales' );
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

