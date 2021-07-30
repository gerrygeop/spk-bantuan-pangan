<?php

class Kriteria extends Controller {

    public function index()
    {
        $data['judul'] = 'Perhitungan';
        $data['alt'] = $this->model('AlternatifModel')->getAllAlternatif();
        $data['ktr'] = $this->model('KriteriaModel')->getAllKriteria();
        $data['sub'] = $this->model('KriteriaModel')->getAllBobotSub();

        $kriteria = count($data['ktr']);
        $data['jmlKriteria'] = $kriteria;


        $this->view('templates/header', $data);
        $this->view('kriteria/index', $data);
        $this->view('templates/footer');
    }

}