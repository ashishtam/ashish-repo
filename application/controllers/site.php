<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
	//	echo "Hello World!! Hello Code Igniter called from index<br>";
		//$this->addStuff();
		//$this->about();
		$this->home();
	}
	
	
	public function home()
	{
		$data['abc'] = "Welcome to my page" ;
	
		$data['val1'] = 10;
		$data['val2'] = 2;
		
		

	
	//	$this->load->view("welcome_message");
		$this->load->model('math');
				
		$data['addTotal'] = $this->math->add($data['val1'], $data['val2']);
		$data['subTotal'] = $this->math->sub($data['val1'], $data['val2']);
		
		$this->load->view("view_home", $data);	
			
	}
	
	function about()
	{
		$data['about'] = "About Page";
		$this->load->view('view_about', $data);	
	}
	
	
	
	public function getValues()
	{
	//	$data['title'] = "get db";
		$this->load->model('get_db');
		$data['results'] = $this->get_db->getAll();		
		$this->load->view("view_db", $data);
		
	}
	
	
	function insertValues()
	{
		$this->load->model('get_db');	
		$newRow = array(
							array("name" => "testname1"),
							
							array("name" => "testname2")
							
						);
		$this->get_db->insert2($newRow);
		echo "Data has been inserted into DB";
	}
	
	
	function updateValues()
	{
		/*$this->load->model('get_db');	
		$updateRow = array( "name" => "arati");
		
		$this->get_db->update1($updateRow);
		echo "Updated";*/
		
		$this->load->model('get_db');	
		$updateRow = array( 
						   
						   array(
								 "id" => "3",
								 "name" => "leonard"
								 ),
						   
						   array(
								 "id" => "4",
								 "name" => "sheldon"
								 )
						   
						   );

		
		$this->get_db->update2($updateRow);
		echo "Updated multiple";
		
	}
	
	function deleteValues()
	{
		$this->load->model('get_db');	
		$deleteRow = array(
						   	"id" => "6",
							);
		
		$this->get_db->delete1($deleteRow);
		echo "Deleted";
		
	}
	
	function emptyTable()
	{
		$this->load->model('get_db');
		$emptyTable = "test";
		$this->get_db->empty1($emptyTable);
		echo "table emptied";
	}
	/*public function hello()
	{
		echo "\tThis is the next function hello";
	
	}
	
	public function addStuff()
	{
		$this->load->model('math');
		echo $this->math->add(5,3);
	}*/
		
}