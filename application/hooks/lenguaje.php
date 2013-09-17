<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lenguaje{      

	function idiomas(){
	
	$CI =&get_instance();
	$lang = $CI->session->userdata('idioma');
	if(empty($lang)){
		$lang = "es";
		$CI->session->set_userdata(array('idioma'=>$lang));}
		// nombre del fichero de lenguaje languaje/en ,es
		$CI->lang->load('sonicnet', $CI->session->userdata('idioma'));
	}
}