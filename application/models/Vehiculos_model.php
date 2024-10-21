<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehiculos_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function obtener_vehiculos() {
        return $this->db->get('vehiculos')->result();
    }

    
    public function obtener_vehiculo($id) {
        $query = $this->db->get_where('vehiculos', array('id' => $id));
        return $query->row();

    }


    public function crear_vehiculos($data) {
        return $this->db->insert('vehiculos', $data);
    }

    public function actualizar_vehiculos($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('vehiculos', $data);
    }

    public function eliminar_vehiculos($id) {
        return $this->db->delete('vehiculos', array('id' => $id));
    }
}
