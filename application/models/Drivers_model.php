<?php

    defined('BASEPATH') or exit('No direct script access allowed');

    class Drivers_model extends CI_Model {

        public function listarDrivers() {

            return $this->db->get('app_drivers')->result();

        }

    }

?>