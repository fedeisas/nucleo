<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Display Helper - active()
*
*  Returns a css class suffix if the
*    current controller is the one provided as $uri / $level
*/    
if ( ! function_exists('active'))
{
    function active($uri, $level = 1, $class_suffix = 'active')
    {
        $ci =& get_instance();

        if(is_array($uri)) {
            if ( in_array( $ci->uri->segment($level), $uri )) {
                return $class_suffix;
            } else {
                return false;
            }
        } else {
            if ($ci->uri->segment($level) == $uri) {
                return $class_suffix;
            } else {
                return false;
            }
        }
    }
}

/* End of file display_helper.php */
/* Location: ./application/helpers/display_helper.php */ 