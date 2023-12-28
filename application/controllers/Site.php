<?php

    defined('BASEPATH') or exit('No direct script access allowed');

    class Site extends CI_Controller {

        public function __construct() {

            parent::__construct();

            $this->load->model('impressora_model');

            $this->load->model('drivers_model');

        }

        public function index() {

            $data['titulo'] = 'Virtual Locação';

            $data['drivers'] = $this->drivers_model->listarDrivers();
            

            $this->load->view('web/layout/header', $data);

            $this->load->view('web/home');

            $this->load->view('web/layout/footer');

        }

        public function Impressoras() {

            $data['titulo'] = 'Virtual - Impressoras';

            $data['impressoras'] = $this->impressora_model->buscarImpressoras();

            $this->load->view('web/layout/header', $data);

            $this->load->view('web/impressoras');

            $this->load->view('web/layout/footer');

        }

        public function Impressora($id = NULL) {

            $data['query']              = $this->impressora_model->getImpressoraById($this->uri->segment(2));

            $data['titulo']             = $data['query'][0]->nome . ' - Virtual';



            $this->load->view('web/layout/header', $data);

            $this->load->view('web/impressora_interna');

            $this->load->view('web/layout/footer');

        }
    }

?>