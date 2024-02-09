<?php

class Db
{
    private $host;
    private $port;
    private $dbname;
    private $user;
    private $password;
    private $pdo;

    public function __construct($host, $port, $dbname, $user, $password)
    {
        $this->host = $host;
        $this->port = $port;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->password = $password;

        $dsn = "pgsql:host=$this->host;port=$this->port;dbname=$this->dbname;user=$this->user;password=$this->password";

        try {
            $this->pdo = new PDO($dsn);
            // Set PDO attributes if needed (e.g., error mode, fetch mode)
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function query($sql, $params = [])
    {
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($params);
            return $statement;
        } catch (PDOException $e) {
            echo "Query failed: " . $e->getMessage();
            return false;
        }
    }

    // Additional methods for common database operations (e.g., insert, update, delete)

    public function close()
    {
        $this->pdo = null;
    }
}
?>
