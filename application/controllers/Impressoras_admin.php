<?php

    defined('BASEPATH') or exit('No direct script access allowed');

    ob_start();

    class Impressoras_admin extends CI_Controller {
        
        public function __construct () {

            parent::__construct();

            if (!$this->session->userdata('logado') == TRUE) {

                $this->session->set_flashdata('erro_login', '<div class="alert alert-danger" role="alert">Você precisa realizar o login!</div>');
    
                redirect('login');
    
            }

            $this->load->model('impressora_model');

            $this->load->model('categoria_model');

            $this->load->library('form_validation');

        }

        public function index () {

            $this->listarimpressora();

        }

        public function listarimpressora () {

            $data['titulo_site'] = 'Gerenciador';

            $data['titulo_pagina'] = 'Impressoras';



            $data['impressoras'] = $this->impressora_model->buscarImpressoras();



            $this->load->view('dashboard/header', $data);

            $this->load->view('dashboard/impressoras/listPrinters');

            $this->load->view('dashboard/footer');
        }

        public function adicionarimpressora() {

            $data['categorias'] = $this->categoria_model->buscarCategorias();



            $this->form_validation->set_rules('tituloImpressora', 'NOME', 'required', array('required' => 'O Campo nome é obrigatório'));


            if ($this->form_validation->run() == TRUE) {

                $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);



                if (empty($dados['send'])) {

                    $arquivo = $_FILES['imagemDestaque'];

                    for($cont = 0; $cont < count($arquivo['name']); $cont++) {

                        $target = "./upload/impressoras/" . $arquivo['name'][$cont];

                        move_uploaded_file($arquivo['tmp_name'][$cont], $target);

                    }

                    // $documento = $_FILES['documento'];

                    // $target = "./upload/catalogo/" . $documento['name'];

                    // move_uploaded_file($documento['tmp_name'], $target);




                    $inputAddImpressora['nome'] = $this->input->post('tituloImpressora');

                    $inputAddImpressora['categoria'] = $this->input->post('categoria');

                    $inputAddImpressora['cor_mono'] = $this->input->post('cor');

                    $inputAddImpressora['formato_papel'] = $this->input->post('formatoPapel');

                    $inputAddImpressora['velocidade_impressao'] = $this->input->post('velocidade_impressao');

                    $inputAddImpressora['frente_verso_automatico'] = $this->input->post('frente_verso');

                    $inputAddImpressora['digitalizacao_rede'] = $this->input->post('digitalizacao_rede');

                    $inputAddImpressora['alimentacao_automatica'] = $this->input->post('alimentacao_automatica');

                    $inputAddImpressora['conectividade'] = $this->input->post('conectividade');

                    $inputAddImpressora['ciclo_mensal'] = $this->input->post('ciclo_mensal');

                    $inputAddImpressora['rendimento_insumos'] = $this->input->post('rendimento_mensal');

                    $inputAddImpressora['descricao'] = $this->input->post('descricao');

                    $inputAddImpressora['imagem'] = $this->input->post('fileNames');



                    $this->impressora_model->addImpressora($inputAddImpressora);

                    $this->session->set_flashdata('msg', '<div class="alert alert-success">Impressora adicionada com sucesso!</div>');

                    redirect('impressoras_admin');

    

                } else {


                    // $this->impressora_model->atualizarImpressora($inputEditPost, ['id' => $this->input->post('idPost')]);

                    // $this->session->set_flashdata('msg', '<div class="alert alert-success">Post adicionado com sucesso!</div>');

                    // redirect('impressoras_admin', 'refresh');

                }

            

            } else {

                //Titulo

                $data['titulo_site'] = 'Módulo Impressora';

                $data['titulo_pagina'] = 'Adicionar Impressora';



                //Load dos arquivos de layout

                $this->load->view('dashboard/header', $data);

                $this->load->view('dashboard/impressoras/addPrinter');

                $this->load->view('dashboard/footer');

            }

        }

        public function editarimpressora($id = NULL)

        {

            $data['categorias'] = $this->categoria_model->buscarCategorias();

            $data['query'] = $this->impressora_model->getImpressoraID($id);


            $this->form_validation->set_rules('tituloImpressora', 'NOME', 'required', array('required' => 'O Campo nome é obrigatório'));


            if ($this->form_validation->run() == TRUE) {

                $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);



                if (empty($dados['send'])) {

                    $arquivo = $_FILES['imagemDestaque'];

                    for($cont = 0; $cont < count($arquivo['name']); $cont++) {

                        $target = "./upload/impressoras/" . $arquivo['name'][$cont];

                        move_uploaded_file($arquivo['tmp_name'][$cont], $target);

                    }

                    // $documento = $_FILES['documento'];

                    // $target = "./upload/catalogo/" . $documento['name'];

                    // move_uploaded_file($documento['tmp_name'], $target);




                    $inputEditImpressora['nome'] = $this->input->post('tituloImpressora');

                    $inputEditImpressora['categoria'] = $this->input->post('categoria');

                    $inputEditImpressora['cor_mono'] = $this->input->post('cor');

                    $inputEditImpressora['formato_papel'] = $this->input->post('formatoPapel');

                    $inputEditImpressora['velocidade_impressao'] = $this->input->post('velocidade_impressao');

                    $inputEditImpressora['frente_verso_automatico'] = $this->input->post('frente_verso');

                    $inputEditImpressora['digitalizacao_rede'] = $this->input->post('digitalizacao_rede');

                    $inputEditImpressora['alimentacao_automatica'] = $this->input->post('alimentacao_automatica');

                    $inputEditImpressora['conectividade'] = $this->input->post('conectividade');

                    $inputEditImpressora['ciclo_mensal'] = $this->input->post('ciclo_mensal');

                    $inputEditImpressora['rendimento_insumos'] = $this->input->post('rendimento_mensal');

                    $inputEditImpressora['descricao'] = $this->input->post('descricao');

                    $inputEditImpressora['imagem'] = $this->input->post('fileNames');




                    $this->impressora_model->atualizarImpressora($inputEditImpressora, ['id' => $this->input->post('id')]);

                    $this->session->set_flashdata('msg', '<div class="alert alert-success">Post adicionado com sucesso!</div>');

                    redirect('impressoras_admin', 'refresh');

    

                } else {


                    

                }

            } else {

                //Titulo

                $data['titulo_site'] = 'Módulo Impressoras';

                $data['titulo_pagina'] = 'Adicionar Impressora';



                //Load dos arquivos de layout

                $this->load->view('dashboard/header', $data);

                $this->load->view('dashboard/impressoras/editPrinter');

                $this->load->view('dashboard/footer');

            }

        }

        public function deletarimpressora($id = NULL)

        {

            if (!$id) {

                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Você deve selecionar um Post</div>');

                redirect('impressoras_admin', 'refresh');

            }



            $query = $this->impressora_model->getImpressoraID($id);



            if (!$query) {

                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Banner não encontrado</div>');

            }



            $this->impressora_model->apagarImpressora($query->id);

            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Post Apagado com Sucesso!</div>');

            redirect('impressoras_admin', 'refresh');

        }

    }

?>