<?php

    defined('BASEPATH') or exit('No direct script access allowed');

    class Site extends Ci_Controller {

        public function __construct() {

            parent::__construct();

        }

        public function index() {

            $data['titulo'] = 'Virtual Locação';

            

            $this->load->view('web/layout/header', $data);

            $this->load->view('web/home');

            $this->load->view('web/layout/footer');

        }
    }

?>