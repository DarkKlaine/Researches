<?php

class DBConnectionPDO
{
    private string $servername = "localhost";
    private string $username = "root";
    private string $password = "pass";
    private string $dbname = "history";
    private ?PDO $connection = null;

    public function __construct()
    {
        $dsn = "mysql:host={$this->servername};dbname={$this->dbname}";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->connection = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            die("Ошибка подключения: " . $e->getMessage());
        }
    }

    public function getConnection(): ?PDO
    {
        return $this->connection;
    }

    public function closeConnection(): void
    {
        $this->connection = null;
        echo "Соединение закрыто." . PHP_EOL;
    }
}

$databaseConnection = new DBConnectionPDO();
$connection = $databaseConnection->getConnection();

//$sqlInsert = "INSERT INTO `test` (`expression`, `date`) VALUES ('11+1=12', CURRENT_TIMESTAMP)";
//
//try {
//    $connection->exec($sqlInsert);
//    echo "Запись успешно создана" . PHP_EOL;
//} catch (PDOException $e) {
//    echo "Ошибка при создании записи: " . $e->getMessage() . PHP_EOL;
//}

$sqlSelect = "SELECT expression, date FROM test ORDER BY date DESC LIMIT 5";
$result = $connection->query($sqlSelect);

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $expression = $row["expression"];
    $date = $row["date"];

    echo $date . ' | ' . $expression . PHP_EOL;
}

$databaseConnection->closeConnection();
