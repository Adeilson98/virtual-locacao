<?php

    defined('BASEPATH') or exit('No direct script access allowed');

    class Site extends CI_Controller {

        public function __construct() {

            parent::__construct();

        }

        public function index() {

            $data['titulo'] = 'Virtual Locação';

            

            $this->load->view('web/layout/header', $data);

            $this->load->view('web/home');

            $this->load->view('web/layout/footer');

        }

        public function Impressoras() {

            $data['titulo'] = 'Virtual - Impressoras';



            $this->load->view('web/layout/header', $data);

            $this->load->view('web/impressoras');

            $this->load->view('web/layout/footer');

        }

        public function Impressora_interna() {

            $data['titulo'] = 'Placeholder';


            $this->load->view('web/layout/header', $data);

            $this->load->view('web/impressora_interna');

            $this->load->view('web/layout/footer');

        }
    }

?>