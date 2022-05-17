<?php
error_reporting(0);
class DataBerita extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelDataBerita');
    }

    function index()
    {
        $data['databerita'] = $this->ModelDataBerita->tampil_data()->result();
        $this->load->view('v_tampilberita', $data);
    }

    function tambah()
    {
        $this->load->view('v_inputberita');
    }

    function tambah_aksi()
    {

        $judul = $this->input->post('judul');
        $head_news = $this->input->post('head_news');
        $desk_berita = $this->input->post('desk_berita');
        $tgl_publikasi = $this->input->post('tgl_publikasi');
        $penulis = $this->input->post('penulis');
        $kategori = $this->input->post('kategori');

        $data = array(
            'judul' => $judul,
            'head_news' => $head_news,
            'desk_berita' => $desk_berita,
            'tgl_publikasi' => $tgl_publikasi,
            'penulis' => $penulis,
            'kategori' => $kategori
        );
        $this->ModelDataBerita->input_data($data, 'databerita');
        redirect('databerita/index');
    }
}