<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Diagnosa_model', 'model');
	}

	public function index()
	{
		// HALAMAN UTAMA
		
		$data['content'] = $this->_dashboard();
		$this->library->navbar('content/home_view', $data);
	}

	private function _dashboard()
	{
		// CONTENT HALAMAN UTAMA
		
		$content   = '<div class="card-header text-center">';
		$content  .= '<p style="font-family: monospace; font-weight: bold; font-size: 14px">SISTEM PAKAR DIAGNOSA PENYAKIT YANG DISEBABKAN OLEH NYAMUK</p>';
		$content  .= '<img class="img-fluid" src="'. site_url(IMAGE . 'mosquito.png') .'" alt="Photo" style="width: 400px">';
		$content  .= '</div>';
		$content  .= '<div class="card-body text-center">';
		$content  .= '<button type="button" onclick="return window.location.href = index + ' . "'diagnosis'" . '" class="btn btn-primary"><i class="fas fa-play"> Mulai Diagnosa</i></button>';
		$content  .= '</div>';


		return $content;
	}

	public function diagnosis()
	{
		// HALAMAN DIAGNOSA
		
		$data['content'] = $this->_diagnosis();
		$this->library->navbar('content/diagnosis_view', $data);
	}

	private function _diagnosis()
	{
		# CONTENT DIAGNOSA
		
		$content 	= '<div class="card-header">';
		$content 	.= '<h5 class="card-title">DIAGNOSA</h5>';
		$content 	.= '<div class="card-tools">';
		$content 	.= '<button type="button" class="btn btn-tool" onclick="home()"><i class="fas fa-times"></i>';
		$content 	.= '</div>';
		$content 	.= '</div>';
		$content 	.= '<form action="' . site_url('home/submit') .'" id="form" method="post">';
		$content 	.= '<div class="card-body">';
		$content 	.= '<ul class="list-group list-group-unbordered">';
		$content 	.= '<li class="list-group-item">';
		$content 	.= '<input type="hidden" name="id" value="">';
		$content 	.= '<input type="hidden" name="no" value="">';
		$content 	.= '<a><span id="no"></span><span id="sdp"></span></a>';
		$content 	.= '</li>';
		$content 	.= '<li class="list-group-item">';
		$content 	.= '<div class="icheck-primary d-inline">';
		$content 	.= '<input type="radio" id="Y" name="option" value="">';
		$content 	.= '<label for="Y">Ya</label>';
		$content 	.= '</div>';
		$content 	.= '</li>';
		$content 	.= '<li class="list-group-item">';
		$content 	.= '<div class="icheck-primary d-inline">';
		$content 	.= '<input type="radio" id="N" name="option" value="">';
		$content 	.= '<label for="N">Tidak</label>';
		$content 	.= '</div>';
		$content 	.= '</li>';
		$content 	.= '</ul>';
		$content 	.= '</div>';
		$content 	.= '<div class="card-footer text-center">';
		$content 	.= '<button type="submit" id="btnsave" class="btn btn-primary"><i class="fas fa-chevron-right"> Next</i></button>';
		$content 	.= '</div>';
		$content 	.= '</form>';
		$content 	.= '<script src="'. base_url(JS . 'diagnosis_script.js') .'"></script>';
		return $content;
	}

	public function get_id()
	{
		# GET ID PERTAMA
		
		$id  	= 1;
		$query  = $this->model->get_data($id);
		$data 	= [
			'no' 			=> 1, 
			'id' 			=> $query->id, 
			'sdp' 			=> '. ' . $query->solusi_dan_pertanyaan,
			'bila_benar' 	=> $query->bila_benar,
			'bila_salah' 	=> $query->bila_salah 
		];

		echo json_encode($data);
	}

	public function submit()
	{
		# METHOD DIAGNOSA
		
		$this->form_validation->set_rules('option', '', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = [
				'status'  	=> FALSE,
				'required' 	=> '<small style="font-weight: bold;">Harus pilih Ya atau Tidak</small>'
			];
			$this->library->output_json($data);
		} else {
			$get = $this->model->get_data($this->input->post('id'));

			if ($this->input->post('option') == $get->bila_benar) {
				$id = $get->bila_benar;
			} else {
				$id = $get->bila_salah;
			}

			if ($id == 0) {
				$set_message	   = 'MAAF UNTUK SEMENTARA, SISTEM INI BELUM DAPAT MENDIAGNOSA';
				$output['message'] = '<small style="font-weight: bold;">'. $set_message .'</small>';
				$output['type']    = 'error';
			} elseif ($id > 21) {
				$get_id 			= $this->model->get_data($id);
				$set_message		= $get_id->solusi_dan_pertanyaan;
				$output['message'] 	= '<small style="font-weight: bold;">'. $set_message .'</small>';
				$output['type']  	= 'warning';
			} else {
				$query	= $this->model->get_data($id);
				$data 	= [
					'no' 			=> $this->input->post('no') + 1, 
					'id' 			=> $query->id, 
					'sdp' 			=> '. ' . $query->solusi_dan_pertanyaan,
					'bila_benar' 	=> $query->bila_benar,
					'bila_salah' 	=> $query->bila_salah 
				];

				$output['id'] = $data; 
			}

			$output['status'] = TRUE;
			$this->library->output_json($output);
		}
	}

	public function copyright()
	{	
		// HALAMAN COPYRIGHT
		
		$data['content'] = $this->_copyright();
		$this->library->navbar('content/copyright_view', $data);
	}                

	private function _copyright()
	{
		// CONTENT COPYRIGHT
		
		$content 	= '<div class="card-header">';
		$content 	.= '<h5 class="card-title">DATA DASAR</h5>';
		$content 	.= '<div class="card-tools">';
		$content 	.= '<button type="button" class="btn btn-tool" onclick="history.back()"><i class="fas fa-times"></i>';
		$content 	.= '</div>';
		$content 	.= '</div>';
		$content 	.= '<div class="card-body table-responsive">';
		$content 	.= '<table class="table">';
		$content 	.= '<tr><td>Nama</td><td>DAVID, S.Kom., M.Cs.</td></tr>';
		$content 	.= '<tr><td>NIDN/NUP</td><td>1129068001</td></tr>';
		$content 	.= '<tr><td>Perguruan Tinggi</td><td>STMIK Pontianak</td></tr>';
		$content 	.= '<tr><td>Program Studi</td><td>Teknik Informatika S-1</td></tr>';
		$content 	.= '<tr><td>Jenis Kelamin</td><td>Laki-laki</td></tr>';
		$content 	.= '<tr><td>Jabatan Fungsional</td><td>ASISTEN AHLI</td></tr>';
		$content 	.= '<tr><td>Pendidikan Tertinggi</td><td>S-2</td></tr>';
		$content 	.= '<tr><td>Status Ikatan Kerja</td><td>DOSEN TETAP</td></tr>';
		$content 	.= '<tr><td>Status Aktivitas</td><td>AKTIF MENGAJAR</td></tr>';
		$content 	.= '</table>';
		$content 	.= '</div>';
		$content 	.= '<div class="card-footer text-center">';
		$content 	.= '<span class="text-muted">Sumber : <a href="https://www.profildosen.com/detail/1129068001.html" class="text-muted" target="_blank"> PROFILE DOSEN</a></span>';
		$content 	.= '</div>';

		return $content;
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
