<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller {

	public function send() {
		// var_dump($this->input->post());

		$success = true;

		if($success) {
			echo '<div class="panel"><h5>Muchas gracias</h5><p>Su mensaje ha sido enviado. Le responderemos a la brevedad.</p></div>'; die();
		} else {
			echo '<div class="alert-box alert">Ha ocurrido un error. Por favor, intente nuevamente. Muchas gracias. <a href="" class="close">&times;</a></div>'; die();
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */