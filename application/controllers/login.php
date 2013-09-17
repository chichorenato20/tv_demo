<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->view('login');
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
		//$this->lang->line('Logi_recordar');
		redirect($url);
		
		}
	public function acceso(){
		$user=$this->input->post('num_pedi');
		$pass=$this->input->post('user_pass');
		$this->load->model('acceso/usuario_model','usuario');
		$opcion=$this->input->post('opcion');
		$res=0;
		if($opcion!=''){
			if($this->input->post('opcion')=='on')
				$res=$this->usuario->loginUser($user,$pass);
			else
				$res=$this->usuario->accesoRecurso($user);
		}else
			$res=$this->usuario->accesoRecurso($user);
			
		switch($res){
			case 0: echo $this->lang->line('Logi_sms_denegado');
				break;
			case 1:echo $this->lang->line('Logi_sms_contra_inva');
				break;
			case 2: echo $this->lang->line('Logi_sms_user_des');
				break;
			case 3: redirect(base_url().'cpanel');
				break;
			}
		
		}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */