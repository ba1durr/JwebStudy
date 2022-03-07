<?php 

//establishing database connection

class Dbh {
    private $host = "localhost";
    private $user = "Luke";
    private $pwd = "Lukito123.";
    private $dbName = "products"; 

    protected function connect(){
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        try{
            $pdo = new PDO($dsn, $this->user, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
            } catch (Exception $e){
                error_log($e->getMessage());
                exit('Something weird happened'); //something a user can understand
            }
    }
}