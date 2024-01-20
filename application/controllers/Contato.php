<?php

    defined('BASEPATH') or exit('No direct script access allowed');

    class Contato extends CI_Controller {

        public function __construct() {

            parent::__construct();

            $this->load->library('email');

        }

        public function index(){

            $this->sendemail();

        }

        public function sendemail() {

            $name = $this->input->post('nome');

            $email = $this->input->post('email');

            $telefone = $this->input->post('telefone');

            $cidade = $this->input->post('cidade');

            $message = "Contato - Virtual Locação.<br><br>
                <h3>Informações de contato</h3>
                <table border='1' width='100%' cellpadding='5'>
                <tr>
                    <td width='30%'>Nome</td>
                    <td width='70%'>$name</td>
                </tr>
                <tr>
                    <td width='30%'>Telefone</td>
                    <td width='70%'>$telefone</td>
                </tr>
                <tr>
                    <td width='30%'>Email</td>
                    <td width='70%'>$email</td>
                </tr>
                <tr>
                    <td width='30%'>Cidade</td>
                    <td width='70%'>$cidade</td>
                </tr>
                </table>";

            $this->email->from('comercial@virtuallocacao.com.br', 'Virtual Locação');

            $this->email->to(['comercial@virtuallocacao.com.br', 'joseantonio@virtuallocacao.com.br']);

            $this->email->subject('Contato - Virtual Locação');

            $this->email->message($message);


            if($this->email->send()) {

                redirect('obrigado');

            } else {

                show_error($this->email->print_debugger());

            }

        }

    }

?>