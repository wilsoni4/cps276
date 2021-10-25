<?php 

class Directories {
    var $folder;
    var $fileContent;
    
    public function __construct($folder, $fileContent) {
        $this->folder = $folder;
        $this->fileContent = $fileContent;
    }

    public function createDirectory () {
        //Create Directory
        $createFlag = mkdir("directories/$this->folder", 0777, true);

        //Error Check
        if($createFlag == true) {
            chmod("directories/$this->folder", 0777);
            echo "Directory created: directories/$this->folder";
            echo "<br>";
            echo '<a href="http://167.172.143.160/CPS276/Assignment5/directories/">Link to Directories</a>';
        }
        if($createFlag == false) {
            echo "Directory not created.";
        }

        //Create and write to file
        $handle = fopen("directories/$this->folder/README.txt", "w");
        fwrite($handle, $this->fileContent);
        fclose($handle);
    }

}

?>