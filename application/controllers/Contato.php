<?php

    defined('BASEPATH') or exit('No direct script access allowed');

    class Contato extends CI_Controller {

        public function index(){}

        public function sendemail() {

            //Definindo campos

            $name = $this->input->post('nome');

            $email = $this->input->post('email');

            $telefone = $this->input->post('telefone');

            $cidade = $this->input->post('cidade');

            //-------------------------------------------
            
            $sendToEmail = 'adeilson.129@gmail.com';

            $subject = 'Contato';

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

            $config = array(

                'protocol' => 'smtp',

                'smtp_host' => 'mail.virtuallocacao.com.br',

                'smtp_port' => '587',

                'smtp_user' => 'comercial@virtuallocacao.com.br',

                'smtp_pass' => 'Comercial4943@',

                'mailtype' => 'html',

                'charset' => 'utf-8',

                'wordwrap' => true,
            );

            $this->load->library('email', $config);

            $this->email->set_newline("\r\n");

            $this->email->from('comercial@virtuallocacao.com.br');

            $this->email->to($sendToEmail);

            $this->email->subject($subject);

            $this->email->message($message);

            $this->email->attach(base_url(''));

            if($this->email->send()) {
                redirect('', 'refresh');
            }

            else {
                redirect('index', 'refresh');
            }

        }

    }

?>