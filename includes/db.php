<?php

class Dbh {

    private $servername;
    private $username;
    private $password;
    private $dbname;

    protected function connect() {
        $this->servername ="localhost";
        $this->username ="root";
        $this->password ="123456";
        $this->dbname ="Motherduck";

        $conn = new mysqli($this->servername, $this->uusername, $this->password, $this->dbname);

        return $conn;
    }
}


 $conn = mysqli_connect("localhost", "root", "123456", "Motherduck"); 

//$conn = mysqli_connect("dagnyjons.com.mysql", "dagnyjons_commotherduck", "Spangsbjerg101", "dagnyjons_commotherduck");


?>