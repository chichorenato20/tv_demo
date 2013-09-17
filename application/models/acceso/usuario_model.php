<?php

class usuario_model extends CI_Model{
	
	 function __construct(){
		$this->load->database();
		$this->load->library('encrypt');}
		
	public function loginUser($user='',$pass=''){
		$this->db->where('user_login',$user);
		$query=$this->db->get('sonic_users');
        $n = $query->num_rows();
		if ($n > 0) {// existe usuario
		$row = $query->row();
        	$this->load->helper('class-phpass');
        	// By default, use the portable hash from phpass
        	$wp_hasher2 = new PasswordHash(8, true);
        	//compara el pas con md5ass
        	$check = $wp_hasher2->CheckPassword($pass, $row->user_pass);
		// datos correctos
        	if($check==1){
				if($row->user_status===0){
					return 2;//usuario deshabilitado
				}else{
					$sessionData = array(
						   'ID'  => $row->ID,
						   'display_name'=> $row->display_name,
						   'user_status'     => $row->user_status
					   );
					$this->session->set_userdata($sessionData);
					return 3;}//acceso correcto
				}
			else
				return 1; //contraseña invalida
				
		// fin si existe usuario
		}else
			return 0; //datos incorrectos
		}
		
	public function accesoRecurso($num_pedi=''){
		$this->db->where('codi_comp',$num_pedi);
		$query=$this->db->get('sonic_recurso');
        $n = $query->num_rows();
		if ($n > 0) {// existe usuario
		$row = $query->row();
			if($row->stado==0&&$row->stado!=''){
				$sessionData = array(
							   'codi_comp'  => $row->codi_comp,
							   'tipo'=> $row->tipo,
							   'data'     => $row->data,
							   'url-recu'=> $row->url_recu,
							   'url_hash'=> $row->url_hash,
							   'stado'=> $row->stado
						   );
				$this->session->set_userdata($sessionData);
				return 3;// acceso permitido
			}else
				return 2;// recurso caducado
		}else
			return 0;// no existe recurso
		
		}
}
?>