<?php

class DBConnection
{
    private string $servername = "localhost";
    private string $username = "root";
    private string $password = "pass";
    private string $dbname = "history";
    private mysqli $connection;

    public function __construct()
    {
        $this->connection = new mysqli(
            $this->servername,
            $this->username,
            $this->password,
            $this->dbname,
        );

        if ($this->connection->connect_error) {
            die("Ошибка подключения: " . $this->connection->connect_error);
        }
    }

    public function getConnection(): mysqli
    {
        return $this->connection;
    }

    public function closeConnection(): void
    {
        $this->connection->close();
        echo "Соединение закрыто." . PHP_EOL;
    }
}

$databaseConnection = new DBConnection();
$connection = $databaseConnection->getConnection();

//$sqlInsert = "INSERT INTO `test` (`expression`, `date`) VALUES ('11+1=12', CURRENT_TIMESTAMP)";


$sqlSelect = "SELECT expression, date FROM test ORDER BY date DESC LIMIT 5";
$result = $connection->query($sqlSelect);


while ($row = $result->fetch_assoc()) {
    $expression = $row["expression"];
    $date = $row["date"];

    echo $date . ' | ' . $expression . PHP_EOL;
}


$databaseConnection->closeConnection();
