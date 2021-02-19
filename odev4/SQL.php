<?php
abstract class SQL {
    use PDOConnector;
    
    public bool $connectionStatus;

    public function create(SQLQuery $query)
    {
        # code...
    }
    public function update(SQLQuery $query)
    {
        # code...
    }
    public function delete(SQLQuery $query)
    {
        # code...
    }
    protected function setParams(array $params){

    }
    public function isCorrected()
    {
        # code...
    }
}


