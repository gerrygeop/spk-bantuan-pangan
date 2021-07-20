<?php

class Perhitungan extends Controller {

    public function index()
    {
        $bobot['alt'] = $this->model('AlternatifModel')->getAllAlternatif();
        $bobot['sub'] = $this->model('KriteriaModel')->getAllSubKriteria();
        $bobot['nilai'] = $this->model('KriteriaModel')->getNilaiKriteria();

        $data['wp'] = $this->model('PerhitunganModel')->hitungWP($bobot);
        $data['judul'] = 'Perhitungan';
        
        $this->view('templates/header', $data);
        $this->view('perhitungan/index', $data);
        $this->view('templates/footer');
    }

    public function waspas()
    {
        $bobot['alt'] = $this->model('AlternatifModel')->getAllAlternatif();
        $bobot['sub'] = $this->model('KriteriaModel')->getAllSubKriteria();
        $bobot['nilai'] = $this->model('KriteriaModel')->getNilaiKriteria();

        $data['wp'] = $this->model('PerhitunganModel')->hitungWP($bobot);
        $data['judul'] = 'Perhitungan';
        
        $this->view('templates/header', $data);
        $this->view('perhitungan/waspas', $data);
        $this->view('templates/footer');
    }

    public function vikor()
    {
        $bobot['alt'] = $this->model('AlternatifModel')->getAllAlternatif();
        $bobot['sub'] = $this->model('KriteriaModel')->getAllBobotSub();
        $bobot['nilai'] = $this->model('KriteriaModel')->getNilaiKriteria();

        $data['vk'] = $this->model('PerhitunganModel')->hitungVK($bobot);
        $data['judul'] = 'Perhitungan';
        
        $this->view('templates/header', $data);
        $this->view('perhitungan/vikor', $data);
        $this->view('templates/footer');
    }

}