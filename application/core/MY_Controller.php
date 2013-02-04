<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	function __construct() {

		parent::__construct();
        
        $this->template->set_cache(0);

		$carabiner_config = array(
			'script_dir' => 'assets/javascripts/', 
			'style_dir'  => 'assets/stylesheets/',
			'cache_dir'  => 'assets/cache/',
			'base_uri'   => base_url(),
            'dev'        => (ENVIRONMENT === 'development') ? TRUE : FALSE,
            'combine'    => (ENVIRONMENT === 'development') ? FALSE : TRUE,
            'minify_css' => (ENVIRONMENT === 'development') ? FALSE : TRUE,
            'minify_js'  => FALSE
		);

		$this->carabiner->config( $carabiner_config );

		$this->carabiner->js(
            array(

                array('foundation/jquery.js'),

                array('jquerypp.custom.js'),
                array('jquery.elastislide.js'),

                array('jquery.gomap-1.3.2.min.js'),

                array('jquery.validVal-4.3.1-packed.js'),
                array('jquery.validationEngine-es.js', 'jquery.validationEngine-es.min.js'),

                array('jquery.mousewheel.js'),
                array('jquery.jscrollpane.min.js'),

                array('foundation/jquery.placeholder.js'),

                // array('jquery.foundation.alerts.js', 'min/jquery.foundation.alerts.js'),
                // array('jquery.foundation.accordion.js', 'min/jquery.foundation.accordion.js'),
                array('foundation/jquery.foundation.buttons.js'),
                // array('jquery.foundation.tooltips.js', 'min/jquery.foundation.tooltips.js'),
                array('foundation/jquery.foundation.forms.js'),
                // array('jquery.foundation.tabs.js', 'min/jquery.foundation.tabs.js'),
                // array('foundation/jquery.foundation.navigation.js'),
                // array('jquery.foundation.reveal.js', 'min/jquery.foundation.reveal.js'),
                // array('jquery.foundation.orbit.js', 'min/jquery.foundation.orbit.js'),
                // array('jquery.easing.1.3.js', 'min/jquery.easing.1.3.js'),
                // array('jquery.quicksand.js', 'min/jquery.quicksand.js'),
                // array('jquery.colorbox.js', 'min/jquery.colorbox.js'),
                array('foundation/jquery.offcanvas.js'),
                // array('jquery.anythingslider.js', 'min/jquery.anythingslider.js'),
                // array('jquery.anythingslider.fx.js', 'min/jquery.anythingslider.fx.js'),
                // array('jquery.bxSlider.js', 'min/jquery.bxSlider.js'),
                // array('jquery.validationEngine-' . $this->lang->lang() . '.js', 'min/jquery.validationEngine-' . $this->lang->lang() . '.js'),
                // array('jquery.validationEngine.js', 'min/jquery.validationEngine.js'),
                // array('jquery.tmpl.js', 'min/jquery.tmpl.js'),
                // array('jquery.preload.js', 'min/jquery.preload.js'),
                // array('work.js', 'min/work.js'),

                array('foundation/app.js'),

                array('script.js')
            )
        ); 

        $this->carabiner->group('modernizr', array('js' => array('modernizr.custom.js') ) );

        $this->carabiner->css(
            array(
                array('app.css', 'screen')
            )
        );

        // Meta tags

        $this->data['meta_description'] = array(
            'name' => 'description',
            'content' => "DESCRIPCION"
        );

        $this->data['meta_keywords'] = array(
            'name' => 'keywords',
            'content' => "KEYWORDS"
        );

        $this->data['facebook_meta'] = array(
            "og:type" => "company", 
            "og:url" => current_url(), 
            "og:site_name" => "NucleoModa",
            "fb:admins" => "1353855130"
        ); 
        
        $this->data['facebook_image'] = array(
            "og:image" => base_url() . "assets/images/share.jpg"
        );

        $this->data['facebook_description'] = array(
            "og:description" => "DESCRIPCION"
        );

        $this->data['language'] = 'es';

	}

    static function _dump($data) {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */