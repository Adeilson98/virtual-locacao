<?php

    defined('BASEPATH') or exit('No direct script access allowed');

    ob_start();

    class Categorias extends CI_Controller {
        
        public function __construct () {

            parent::__construct();

            if (!$this->session->userdata('logado') == TRUE) {



                $this->session->set_flashdata('erro_login', '<div class="alert alert-danger" role="alert">Você precisa realizar o login!</div>');
    
                redirect('login');
    
            }

            $this->load->model('categoria_model');

            $this->load->library('form_validation');

        }

        public function index () {

            $this->listarcategoria();

        }

        public function listarcategoria () {

            $data['titulo_site'] = 'Gerenciador';

            $data['titulo_pagina'] = 'Categorias';



            $data['categorias'] = $this->categoria_model->buscarCategorias();



            $this->load->view('dashboard/header', $data);

            $this->load->view('dashboard/categorias/listCategory');

            $this->load->view('dashboard/footer');
        }

        public function adicionarcategoria() {



            $this->form_validation->set_rules('tituloCategoria', 'NOME', 'required', array('required' => 'O Campo nome é obrigatório'));


            if ($this->form_validation->run() == TRUE) {

                $inputAddCategoria['nome'] = $this->input->post('tituloCategoria');


                $this->categoria_model->addCategoria($inputAddCategoria);

                $this->session->set_flashdata('msg', '<div class="alert alert-success">Categoria adicionada com sucesso!</div>');

                redirect('categorias');

            

            } else {

                //Titulo

                $data['titulo_site'] = 'Módulo Categoria';

                $data['titulo_pagina'] = 'Adicionar Categoria';



                //Load dos arquivos de layout

                $this->load->view('dashboard/header', $data);

                $this->load->view('dashboard/categorias/addCategory');

                $this->load->view('dashboard/footer');

            }

        }

        public function editarcategoria($id = NULL)

        {



            $data['query'] = $this->categoria_model->getCategoriaID($id);


            $this->form_validation->set_rules('tituloCategoria', 'NOME', 'required', array('required' => 'O Campo nome é obrigatório'));


            if ($this->form_validation->run() == TRUE) {


                $inputEditCategoria['nome'] = $this->input->post('tituloCategoria');

                $this->categoria_model->atualizarCategoria($inputEditCategoria, ['id' => $this->input->post('id')]);

                $this->session->set_flashdata('msg', '<div class="alert alert-success">Post adicionado com sucesso!</div>');

                redirect('categorias', 'refresh');

            } else {

                //Titulo

                $data['titulo_site'] = 'Módulo Categorias';

                $data['titulo_pagina'] = 'Adicionar Categoria';



                //Load dos arquivos de layout

                $this->load->view('dashboard/header', $data);

                $this->load->view('dashboard/categorias/editCategory');

                $this->load->view('dashboard/footer');

            }

        }

        public function deletarcategoria($id = NULL)

        {

            if (!$id) {

                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Você deve selecionar uma Categoria</div>');

                redirect('categorias', 'refresh');

            }



            $query = $this->categoria_model->getCategoriaID($id);



            if (!$query) {

                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Categoria não encontrada</div>');

            }



            $this->categoria_model->apagarCategoria($query->id);

            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Categoria Apagada com Sucesso!</div>');

            redirect('categorias', 'refresh');

        }

    }

?>