<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller {

	public function send() {
		
		$success = false;

		// load form validation class
		$this->load->library('form_validation');

		// set form validation rules
		$this->form_validation->set_rules('name', 'Nombre', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('subject', 'Asunto', 'required');
		$this->form_validation->set_rules('message', 'Mensaje', 'required');

		if ($this->form_validation->run() == FALSE) {
			// validation error

		} else {
			// you can also load email library here
			$this->load->library('email');


			$message = "Mensaje enviado el: " . date('d/m/Y H:i') . "\n";
			if ($this->agent->is_referral()) {
				$message .= "Desde: " . $this->agent->referrer() . "\n";
			}

			$message .= "Mensaje: " . $this->input->post('message');
			
			// set email data
			$this->email->from($this->input->post('email'), $this->input->post('name'));
			$this->email->to('federicoisas@gmail.com');
			$this->email->reply_to($this->input->post('email'), $this->input->post('name'));
			$this->email->subject($this->input->post('subject'));
			$this->email->message($message);
			
			if($this->email->send()) {
				$success = true;
			}
		} 

		if($success) {
			echo '<div class="panel"><h5>Muchas gracias</h5><p>Su mensaje ha sido enviado. Le responderemos a la brevedad.</p></div>'; die();
		} else {
			echo '<div class="alert-box alert">Ha ocurrido un error. Por favor, intente nuevamente. Muchas gracias. <a href="" class="close">&times;</a></div>'; die();
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */