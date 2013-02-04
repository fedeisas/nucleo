<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{
		$this->template->title(SITENAME, ucwords(SITE), "Inicio");

		$this->template
			 ->set('data', $this->data)
			 ->set_partial('css', 'common/css')
			 ->set_partial('js', 'common/js')
			 ->set_partial('meta', 'common/meta')
  			 ->set_partial('header', 'common/home_header')
			 ->set_layout('main')
			 ->build( SITE . '/home' );

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */