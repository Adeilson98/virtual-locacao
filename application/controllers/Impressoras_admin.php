<?php

    defined('BASEPATH') or exit('No direct script access allowed');

    ob_start();

    class Impressoras_admin extends CI_Controller {
        
        public function __construct () {

            parent::__construct();

            $this->load->model('impressora_model');

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



            $this->form_validation->set_rules('tituloImpressora', 'NOME', 'required', array('required' => 'O Campo nome é obrigatório'));


            if ($this->form_validation->run() == TRUE) {

                $config['upload_path'] = 'upload/impressoras';

                $config['allowed_types'] = 'jpg|png|jpeg';

                $config['max_size'] = '5048';

                $config['encrypt_name'] = TRUE;



                $this->load->library('upload', $config);



                if (!$this->upload->do_upload('imagemDestaque')) {

                    $this->session->set_flashdata('msg', '<div class="alert alert-danger">Erro! Por favor, verifique se a imagem está no formato correto e tente novamente.</div>');

                    redirect('impressoras_admin/adicionarimpressora');

                } else {

                    $inputAddImpressora['nome'] = $this->input->post('tituloImpressora');

                    $inputAddImpressora['categoria'] = $this->input->post('categoria');

                    $inputAddImpressora['cor_mono'] = $this->input->post('cor');

                    $inputAddImpressora['formato_papel'] = $this->input->post('formatoPapel');

                    $inputAddImpressora['memoria'] = $this->input->post('memoria');

                    $inputAddImpressora['resolucao'] = $this->input->post('resolucao');

                    $inputAddImpressora['linguagem_impressao'] = $this->input->post('linguagem');

                    $inputAddImpressora['entrada_papel'] = $this->input->post('entradaPapel');

                    $inputAddImpressora['saida_papel'] = $this->input->post('saidaPapel');

                    $inputAddImpressora['saida_papel'] = $this->input->post('descricao');

                    $inputAddImpressora['imagem'] = $this->upload->data('file_name');



                    $this->impressora_model->addImpressora($inputAddImpressora);

                    $this->session->set_flashdata('msg', '<div class="alert alert-success">Post adicionado com sucesso!</div>');

                    redirect('impressoras_admin');

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



            $data['query'] = $this->impressora_model->getImpressoraID($id);


            $this->form_validation->set_rules('tituloImpressora', 'NOME', 'required', array('required' => 'O Campo nome é obrigatório'));


            if ($this->form_validation->run() == TRUE) {

                $config['upload_path'] = 'upload/impressoras';

                $config['allowed_types'] = 'jpg|png|jpeg';

                $config['max_size'] = '5048';

                $config['encrypt_name'] = TRUE;



                $this->load->library('upload', $config);



                if (!$this->upload->do_upload('imagemDestaque')) {

                    $this->session->set_flashdata('msg', '<div class="alert alert-danger">Erro! Por favor, verifique se a imagem está no formato correto e tente novamente.</div>');

                    redirect('impressoras_admin/editarimpressora');

                } else {

                    $inputAddImpressora['nome'] = $this->input->post('tituloImpressora');

                    $inputAddImpressora['categoria'] = $this->input->post('categoria');

                    $inputAddImpressora['cor_mono'] = $this->input->post('cor');

                    $inputAddImpressora['formato_papel'] = $this->input->post('formatoPapel');

                    $inputAddImpressora['memoria'] = $this->input->post('memoria');

                    $inputAddImpressora['resolucao'] = $this->input->post('resolucao');

                    $inputAddImpressora['linguagem_impressao'] = $this->input->post('linguagem');

                    $inputAddImpressora['entrada_papel'] = $this->input->post('entradaPapel');

                    $inputAddImpressora['saida_papel'] = $this->input->post('saidaPapel');

                    $inputAddImpressora['saida_papel'] = $this->input->post('descricao');

                    $inputAddImpressora['imagem'] = $this->upload->data('file_name');




                    $this->impressora_model->atualizarImpressora($inputEditPost, ['id' => $this->input->post('idPost')]);

                    $this->session->set_flashdata('msg', '<div class="alert alert-success">Post adicionado com sucesso!</div>');

                    redirect('impressoras_admin', 'refresh');

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

            redirect('posts', 'refresh');

        }

    }

?>