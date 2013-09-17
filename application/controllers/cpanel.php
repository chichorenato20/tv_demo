<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cpanel extends CI_Controller {

	/**
	 */
	 
	 function __construct()
    {	
		parent::__construct();
		$this->load->helper('url');
    }
	 
	// carga la interfaz para el logueo del recurso
	public function index()
	{	
		$this->load->view('cpanel/index');
	}
	
	/* funcion para cambiar el idioma del aplicativo
	*/
	public function cambioIdioma($idioma='',$url=''){
			if($idioma!='')
			$this->session->set_userdata(array('idioma'=>$idioma));
			$lang=$this->session->userdata('idioma');
		if($url=='')
			$url=base_url().$url;
		else
			$url=base_url();
			
		$this->lang->load('sonicnet', $lang);
		$this->lang->line('Logi_recordar');
		redirect($url);
		
		}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */