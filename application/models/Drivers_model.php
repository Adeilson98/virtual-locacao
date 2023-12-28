<?php

    defined('BASEPATH') or exit('No direct script access allowed');

    class Drivers_model extends CI_Model {

        public function listarDrivers() {

            return $this->db->get('app_drivers')->result();

        }

        public function getDriverID($id = NULL) {

            if($id) {

                $this->db->where('id', $id);

                $this->db->limit(1);

                return $this->db->get('app_drivers')->row();

            }

        }

        public function adicionarDriver($dados = NULL) {

            if(is_array($dados)) {

                $this->db->insert('app_drivers', $dados);

            }

        }

        public function editarDriver($dados = NULL, $condicao = NULL) {

            if(is_array($dados) && is_array($condicao)) {

                $this->db->update('app_drivers', $dados, $condicao);

            }

        }

        public function apagarDriver($id = NULL) {

            if($id) {

                $this->db->delete('app_drivers', ['id' => $id]);

            }

        }

    }

?>