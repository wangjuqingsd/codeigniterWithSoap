<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function index(){
		$result = [];
		echo 'don here';
		//redirect('/welcome/getAllGhItem1');
	}
	public function getAllGhItem1()
	{
		$this->load->model('oracle/gh_item1');
		$reuslt = $this->gh_item1->getAll();
		return $this->arrayToXml($reuslt);
		//$this->load->view('welcome_message');
	}
	public function arrayToXml($arr,$dom=0,$item=0){ 
		if (!$dom){ 
			$dom = new DOMDocument("1.0"); 
		} 
		if(!$item){ 
			$item = $dom->createElement("root"); 
			$dom->appendChild($item); 
		} 
		foreach ($arr as $key=>$val){ 
			$itemx = $dom->createElement(is_string($key)?$key:"item"); 
			$item->appendChild($itemx); 
			if (!is_array($val)){ 
				$text = $dom->createTextNode($val); 
				$itemx->appendChild($text); 
		 
			}else { 
				$this->arrayToXml($val,$dom,$itemx); 
			} 
		} 
		return $dom->saveXML(); 
	} 
	public function setGhItem1(){

	}
}
