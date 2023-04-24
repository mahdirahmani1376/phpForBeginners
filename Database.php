<?php

class Database{

    public PDO $connection;
    public PDOStatement|false $statement;

    public function __construct($config,$userName = 'root',$password = '')
    {
        $dsn = 'mysql:' . http_build_query($config,'',';');
        $this->connection = new PDO($dsn,$userName,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

    }

    public function query($query, $params = []){

        $this->statement = $this->connection->prepare($query,$params);
        $this->statement->execute($params);
        return $this;
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }

    public function find(){
        return $this->statement->fetch();
    }

    public function findOrFail(){
        $result = $this->find();

        if (! $result) {
            abort();
        }

        return $result;
    }
    
    


}