<?php
/***
 * All the model actions go here.
 */

include("Database.php");

class Model{

	public $db;
	
	public function __construct(){
		$this->db = new Database();
	}
} 