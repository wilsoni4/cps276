<?php 
    class NameList {
        public $nameList = array();


        public function addAndClear() { 
            if(isset($_POST['addButton']) {
                $string = $_POST["name"];
                $parts = explode(" ", $string);
                $tempLast = array_pop($parts);
                $tempFirst = implode(" ", $parts);
                $newName = "$tempLast, $tempFirst";
                array_push($nameArr, $newName);
                sort($nameList);
                return print_r($nameList);
            }
            if(isset($_POST['clearButton'])) {
                $nameList = null;
            }
        }
    }

?>