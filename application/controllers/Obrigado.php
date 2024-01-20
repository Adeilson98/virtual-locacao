<?php

    defined('BASEPATH') or exit('No direct script access allowed');

    ob_start();
    
    class Obrigado extends CI_Controller {

        public function index() {

            // $this->load->view('web/layout/header', $data);

            $this->load->view('web/obrigado');

        }

    }

?>