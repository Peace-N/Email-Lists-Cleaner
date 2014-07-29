<?php

/*============================== Separate Semi-Colon Delimited Emails into arrays or Individual Pieces =====================
This Programme was Written by Peace Ngara after a Web Project that had email lists separated by a semicolon ;
e.g peacengara@aol.com ; peacengara@yahoo.com ;
The email lists were more than 5000 making it impossible to copy and paste in an Email Sending Programme.

/* ============================== The Challenge =================================== 

Export to Excel or Comma Delimited Lists */

Class EmailConvertor {
	public $lists;
	
	function __construct() {
	$this->lists = isset($_POST['lists']) ? $_POST['lists'] : null;
	}
	
	// We switch on the Conversion Engines
	public function engineon() {
	 if (empty($this->lists)) {
		throw new Exception("Your List is Empty or Invalid");
	 }
	 else {
		$emailAds = $this->lists;
		$emailPcs = explode(";", $emailAds);
		echo "We have " . count($emailPcs) . "Email Accounts<br /><hr>";
		foreach ($emailPcs as $emailPc){
			echo "$emailPc <br />\n";
		}
	 }
	}
}

// Object Instantiation
$converttext = new EmailConvertor();
if(!empty($_POST)) {
	$converttext->engineon();
}



?>