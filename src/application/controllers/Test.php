<?php
ini_set('xdebug.var_display_max_depth', 17);
ini_set('xdebug.var_display_max_children', 256);
ini_set('xdebug.var_display_max_data', 8024);

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**

 * Desarrollo del controlador: clientsController

 *

 * @author Grupo Nobel, Desarrolladores: Daniel M. Garcia Fernandez - Onel Rosello Reyes

 */
class Test extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->helper('url');

        $this->load->helper('form');

        $this->load->helper('html');
    }
    
    public function email() {
        $this->load->library("gmail");
        echo "Thanks God!!!<br>";
        $username = "Alberto Reyes"; 
        $useremail = "albertord84@gmail.com";
        $userphone = "77777777777";
        $usermsg = "God is the only true love!!!";

        $this->gmail->send_client_contact_form($username, $useremail, $userphone, $usermsg);
    }    
    
    public function test() {
        echo "Thanks God!!!<br>";
        $this->load->model('hackers_model');
        $result = $this->hackers_model->get_all();
        var_dump($result);
        $this->load->model('lending_system_config_model');
        $result = $this->lending_system_config_model->get_all();
        var_dump($result);
    }    

}
?>

