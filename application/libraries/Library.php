<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
        date_default_timezone_set('Asia/Jakarta');
	}

	public function view($content, $data = NULL)
	{
		$page = ['content' => $this->ci->load->view($content, $data, TRUE)];
		return $this->ci->load->view('section/page', $page);
	}

	public function navbar($content, $data = NULL)
	{
		$page = ['content' => $this->ci->load->view($content, $data, TRUE)];
		return $this->ci->load->view('section/page_nav', $page);
	}

	public function output_json($data, $encode = TRUE)
	{
		if ($encode) $data = json_encode($data);
		$this->ci->output->set_content_type('application/json')->set_output($data);
	}
}

/* End of file Library.php */
/* Location: ./application/libraries/Library.php */