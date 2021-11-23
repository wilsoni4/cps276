<?php
require 'classes/PdoMethods.php';

class Date_Time extends PdoMethods{
  

	public function getNotes($type){
		
		/* CREATE AN INSTANCE OF THE PDOMETHODS CLASS*/
		$pdo = new PdoMethods();

		/* CREATE THE SQL */
		$sql = "SELECT note_date, note_content FROM note_table;";

		//PROCESS THE SQL AND GET THE RESULTS
		$records = $pdo->selectNotBinded($sql);

		/* IF THERE WAS AN ERROR DISPLAY MESSAGE */
		if($records == 'error'){
			return 'There has been and error processing your request';
		}
		else {
			if(count($records) != 0){
				if($type == 'list'){return $this->createTable($records);}
				if($type == 'input'){return $this->createInput($records);}	
			}
			else {
				return 'no notes found';
			}
		return $records;
	}
}

	public function addNote(){
	
		$pdo = new PdoMethods();

		/* HERE I CREATE THE SQL STATEMENT I AM BINDING THE PARAMETERS */
		$sql = "INSERT INTO note_table (note_date, note_content) VALUES (:dT, :note)";

			 
	    /* THESE BINDINGS ARE LATER INJECTED INTO THE SQL STATEMENT THIS PREVENTS AGAIN SQL INJECTIONS */
	    $bindings = [
			[':dT',$_POST['dT'],'str'],
			[':note',$_POST['note'],'str']
		];

		/* I AM CALLING THE OTHERBINDED METHOD FROM MY PDO CLASS */
		$result = $pdo->otherBinded($sql, $bindings);

		/* HERE I AM RETURNING EITHER AN ERROR STRING OR A SUCCESS STRING */
		if($result === 'error'){
			return 'There was an error adding the note';
		}
		else {
			return 'Note has been added';
		}
	}

	private function createTable($records){
		$output = "<div style='margin-left:45px;margin-right:45px;' method='post' action='displayNote.php'>";
		$output .= "<table class='table table-bordered table-striped'><thead><tr>";
		$output .= "<th>Time Stamp</th><th>Content</th><tbody>";
		foreach ($records as $row){
			$output .= "<tr><td><input type='text' class='form-control'  value='{$row['note_date']}'></td>";

			$output .= "<td><input type='text' class='form-control'  value='{$row['note_content']}'></td>";
		}
		
		$output .= "</tbody></table></div>";
		return $output;
	}
}
?>