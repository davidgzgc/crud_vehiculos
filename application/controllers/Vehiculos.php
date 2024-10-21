<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehiculos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Vehiculos_model');
    }

    public function index() {
        $data['vehiculos'] = $this->Vehiculos_model->obtener_vehiculos();
        $this->load->view('vehiculos/index', $data);
    }

    public function crear() {
        if ($this->input->post()) {
            $data = array(
                'placa' => $this->input->post('placa'),
                'modelo' => $this->input->post('modelo'),
                'marca' => $this->input->post('marca'),
                'color' => $this->input->post('color'),
                'tipo_transmision' => $this->input->post('tipo_transmision'),
                'no_vin' => $this->input->post('no_vin'),
                'cant_puertas' => $this->input->post('cant_puertas'),
                'combustible' =>$this->input->post('combustible')

            );
            $this->Vehiculos_model->crear_vehiculos($data);
            redirect('vehiculos');
        }
        $this->load->view('vehiculos/crear');
    }

    public function editar($id) {
        $data['vehiculo'] = $this->Vehiculos_model->obtener_vehiculo($id);
        
        if ($this->input->post()) {
            $dataUpdate = array(
                'placa' => $this->input->post('placa'),
                'modelo' => $this->input->post('modelo'),                
                'marca' => $this->input->post('marca'),
                'color' => $this->input->post('color'),
                'tipo_transmision' => $this->input->post('tipo_transmision'),
                'no_vin' => $this->input->post('no_vin'),
                'cant_puertas' => $this->input->post('cant_puertas'),
                'combustible' =>$this->input->post('combustible')




                
            );
            $this->Vehiculos_model->actualizar_vehiculos($id, $dataUpdate);
            redirect('vehiculos');
        }
        
        $this->load->view('vehiculos/editar', $data);
    }

    public function eliminar($id) {
        $this->Vehiculos_model->eliminar_vehiculos($id);
        redirect('vehiculos');
    }
}
