<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepaage_controller extends CI_Controller {

	function __construct()
  {
         parent::__construct();
         $this->load->helper('form');
         $this->load->helper('url');
         $this->load->helper('asset_url');
				  $this->load->model('Webpage_model');
	}
	public function index()
	{
      $this->load->view('index_view');
	}
	public function JSON_Data()
	{
		$parameter = $this->uri->segment(2);
		echo $this->Webpage_model->dataTables($parameter);
	}

}
