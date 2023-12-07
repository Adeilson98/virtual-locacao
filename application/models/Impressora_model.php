<?php

    defined('BASEPATH') or exit('No direct script access allowed');

    class Impressora_model extends CI_Model {

        public function buscarImpressoras() {
        
            return $this->db->get('impressoras')->result();

        }

        public function getImpressoraID($id = NULL) {

            if($id) {

                $this->db->where('id', $id);

                $this->db->limit(1);

                return $this->db->get('impressoras')->row();
            }

        }

        public function getImpressoraById($id = NULL) {

            $this->db->where( 'id', $id );

            return $this->db->get('impressoras')->result();

        }

        public function addImpressora($dados = NULL) {

            if(is_array($dados)) {

                $this->db->insert('impressoras', $dados);

            }
            
        }

        public function apagarImpressora($id = NULL) {

            if ($id) {

                $this->db->delete('impressoras', ['id' => $id]);

            }

        }

        public function atualizarImpressora($dados = NULL, $condicao = NULL) {

            if (is_array($dados) && is_array($condicao)) {

                $this->db->update('impressoras', $dados, $condicao);

            }

        }

    }

?>