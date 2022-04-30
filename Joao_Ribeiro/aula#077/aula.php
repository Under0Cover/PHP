<?php
    
    class Sql extends PDO {
        private $conn;

        public function __construct() {
            $this->conn = new PDO("sqlsrv:Database=dbphp7; server=OLIVER\SQLEXPRESS; ConnectionPooling=0", "teknisa", "teknisa");
        }
    }



?>