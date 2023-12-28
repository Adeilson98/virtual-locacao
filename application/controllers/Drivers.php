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

            $this->load->library('form_validation');

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

        public function adicionardriver() {

            $this->form_validation->set_rules('tituloDriver', 'NOME', 'required', array('required' => 'O Campo nome é obrigatório'));


            if($this->form_validation->run() == TRUE) {

                $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

                if(empty($dados['send'])) {

                    $arquivo = $_FILES['driver'];

                    for($cont = 0; $cont < count($arquivo['name']); $cont++) {

                        $target = "./upload/drivers/" . $arquivo['name'][$cont];

                        move_uploaded_file($arquivo['tmp_name'][$cont], $target);

                    }

                    $inputAddDriver['nome'] = $this->input->post('tituloDriver');

                    $inputAddDriver['driver'] = $this->input->post('driverFile');


                    $this->drivers_model->adicionarDriver($inputAddDriver);

                    $this->session->set_flashdata('msg', '<div class="alert alert-success">Driver adicionado com sucesso!</div>');

                    redirect('drivers');

                } else {

                    $this->session->set_flashdata('msg', '<div class="alert alert-success">Erro ao adicionar o Driver</div>');
                
                }

            } else {

                $data['titulo_site'] = 'Gerenciador';

                $data['titulo_pagina'] = 'Adicionar Driver';

                $this->load->view('dashboard/header', $data);

                $this->load->view('dashboard/drivers/create');

                $this->load->view('dashboard/footer');

            }

        }

        public function editardriver($id) {

            $data['query'] = $this->drivers_model->getDriverID($id);

            $this->form_validation->set_rules('tituloDriver', 'NOME', 'required', array('required' => 'O Campo nome é obrigatório'));


            if($this->form_validation->run() == TRUE) {

                $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

                if(empty($dados['send'])) {

                    $arquivo = $_FILES['driver'];

                    for($cont = 0; $cont < count($arquivo['name']); $cont++) {

                        $target = "./upload/drivers/" . $arquivo['name'][$cont];

                        move_uploaded_file($arquivo['tmp_name'][$cont], $target);

                    }

                    $inputEditDriver['nome'] = $this->input->post('tituloDriver');

                    $inputEditDriver['driver'] = $this->input->post('driverFile');


                    $this->drivers_model->editarDriver($inputEditDriver, ['id' => $this->input->post('id')]);

                    $this->session->set_flashdata('msg', '<div class="alert alert-success">Driver editado com sucesso!</div>');

                    redirect('drivers');

                } else {

                    $this->session->set_flashdata('msg', '<div class="alert alert-success">Erro ao editar o Driver</div>');
                
                }

            } else {

                $data['titulo_site'] = 'Gerenciador';

                $data['titulo_pagina'] = 'Editar Driver';

                $this->load->view('dashboard/header', $data);

                $this->load->view('dashboard/drivers/edit');

                $this->load->view('dashboard/footer');

            }

        }

    }

?>