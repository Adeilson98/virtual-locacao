<?php

    defined('BASEPATH') or exit('No direct script access allowed');

    ob_start();

    class Drivers extends CI_Controller {

        public function __construct() {

            parent::__construct();

            if (!$this->session->userdata('logado') == TRUE) {

                $this->session->set_flashdata('erro_login', '<div class="alert alert-danger" role="alert">Você precisa realizar o login!</div>');
    
                redirect('login');
    
            }


            $this->load->model('drivers_model');

        }

        public function index() {

            $this->listardrivers();

        }

        public function listardrivers() {

            $data['titulo_site'] = 'Gerenciador';

            $data['titulo_pagina'] = 'Drivers';


            $data['drivers'] = $this->drivers_model->listarDrivers();



            $this->load->view('dashboard/header', $data);

            $this->load->view('dashboard/drivers/list');

            $this->load->view('dashboard/footer');

        }

    }

?>