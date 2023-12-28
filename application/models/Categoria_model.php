<?php

    defined('BASEPATH') or exit('No direct script access allowed');

    class Categoria_model extends CI_Model {

        public function buscarCategorias() {
        
            return $this->db->get('app_categorias')->result();

        }

        public function getCategoriaID($id = NULL) {

            if($id) {

                $this->db->where('id', $id);

                $this->db->limit(1);

                return $this->db->get('app_categorias')->row();
            }

        }

        public function getCategoriaById($slug = NULL) {

            $this->db->where( 'slug', $slug );

            return $this->db->get('app_categorias')->result();

        }

        public function addCategoria($dados = NULL) {

            if(is_array($dados)) {

                $this->db->insert('app_categorias', $dados);

            }
            
        }

        public function apagarCategoria($id = NULL) {

            if ($id) {

                $this->db->delete('app_categorias', ['id' => $id]);

            }

        }

        public function atualizarCategoria($dados = NULL, $condicao = NULL) {

            if (is_array($dados) && is_array($condicao)) {

                $this->db->update('app_categorias', $dados, $condicao);

            }

        }

    }

?>