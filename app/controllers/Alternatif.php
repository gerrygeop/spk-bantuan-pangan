<?php

class Alternatif extends Controller {

    private $jmlKriteria = 16;

    public function index()
    {
        $data['judul'] = 'Alternatif';
        $data['alt'] = $this->model('AlternatifModel')->getAllAlternatif();
        $data['sub'] = $this->model('KriteriaModel')->getAllSubKriteria();
        $data['ktr'] = $this->model('KriteriaModel')->getAllKriteria();
        
        $kriteria = count($data['ktr']);
        $data['jmlKriteria'] = $kriteria;

        $this->view('templates/header', $data);
        $this->view('alternatif/index', $data);
        $this->view('templates/footer');
    }

    public function create()
    {
        $data['judul'] = 'Alternatif';
        $data['kriteria'] = $this->model('KriteriaModel')->getAllKriteria();

        for ($i=1; $i <= $this->jmlKriteria; $i++) { 
            $data['c'.$i] = $this->model('KriteriaModel')->getSubKriteriaById($i);
        }
        
        $this->view('templates/header', $data);
        $this->view('alternatif/create', $data);
        $this->view('templates/footer');
    }

    public function store()
    {
        if ($this->model('AlternatifModel')->tambahAlternatif($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
            header('Location: ' . BASEURL . '/alternatif');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/alternatif');
            exit;
        }
    }

    public function edit($id)
    {
        $data['judul'] = 'Alternatif';
        $data['alt'] = $this->model('AlternatifModel')->getAlternatifById($id);
        $data['kriteria'] = $this->model('KriteriaModel')->getAllKriteria();

        for ($i=1; $i <= $this->jmlKriteria; $i++) { 
            $data['c'.$i] = $this->model('KriteriaModel')->getSubKriteriaById($i);
        }

        $this->view('templates/header', $data);
        $this->view('alternatif/edit', $data);
        $this->view('templates/footer');
    }

    public function update()
    {
        if ($this->model('AlternatifModel')->updateAlternatif($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'Diedit', 'success');
            header('Location: ' . BASEURL . '/alternatif');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Diedit', 'danger');
            header('Location: ' . BASEURL . '/alternatif');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('AlternatifModel')->hapusAlternatif($id) > 0) {
            Flasher::setFlash('Berhasil', 'Dihapus', 'success');
            header('Location: ' . BASEURL . '/alternatif');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . '/alternatif');
            exit;
        }
    }
}