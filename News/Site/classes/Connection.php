<?php
class Connection {
    private static $instance = NULL;

    public static function getInstance() {
        $host = "localhost";
        $database = "conor_murphy_news_dd";
        $username = "root";
        $password = "";

        $dsn = "mysql:dbname=" . $database . ";host=" . $host;

        if (self::$instance === NULL) {
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            self::$instance = $pdo;
          
        }

        return self::$instance;
    }
}
?>
