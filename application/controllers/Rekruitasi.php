<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekruitasi extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();
		$this->load->model('daftarmodel');
	}

	public function tunfc2019()
	{
		$this->load->view('daftar');
	}

	public function akhir()
	{
		$this->load->view('penutup');
	}

	public function regis()
	{
		if (isset($_POST['submit'])){
			$nama = $_POST['nama'];
			$nim = $_POST['nim'];
			$jenisKelamin = $_POST['jeniskelamin'];
			$email = $_POST['email'];
			$alamat = $_POST['alamat'];
			$jurusan = $_POST['jurusan'];
			$angkatan = $_POST['angkatan'];
			$telp = $_POST['telp'];
			$idLine = $_POST['idline'];
			$instagram = $_POST['instagram'];
			$status = $_POST['status'];
			$divisi1 = $_POST['divisi1'];
			$divisi2 = $_POST['divisi2'];
			$data = array(
					'Nama' => $nama,
					'NIM' => $nim,
					'Jurusan' => $jurusan,
					'Angkatan' => $angkatan,
					'Alamat' => $alamat,
					'email' => 'email',
					'jenisKelamin' => $jenisKelamin,
					'telp' => $telp,
					'idLine' => $idLine,
					'instagram' => $instagram,
					'status' => $status,
					'divisi1' => $divisi1,
					'divisi2' => $divisi2
			);

			$res = $this->daftarmodel->insertData('pendaftaran', $data);

			if ($res) {
				//$this->session->set_flashdata('berhasil', 'berhasil daftar');
				redirect('rekruitasi/akhir');
			}
		}
	}
}
