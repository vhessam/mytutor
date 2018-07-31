<?php
/**
 * Created by PhpStorm.
 * User: hessam
 * Date: 7/31/18
 * Time: 11:55 AM
 */

class db{
    public $host = "127.0.0.1";
    public $user = "hessamdb";
    public $pass = "He$123456789";
    public $database = "mytutordb";

    public $link;

    /**
     * db constructor.
     */
    public function __construct()
    {
        $this->connect();
    }

    private function connect(){
        $this->link = new mysqli($this->host, $this->user, $this->pass, $this->database);

        //show error
        if ($this->link->connect_errno) {
            printf("Connect failed: %s\n", $this->link->connect_error);
            exit();
        }else{
            echo "Connection successfully established!";
        }
    }

    public function insert($query){
        $result = $this->link->query($query);
        if ($result){
            echo "<h2>Registration successful!</h2>";
        }else{
            echo "<h2>Registration failed!</h2>";
        }
    }
}