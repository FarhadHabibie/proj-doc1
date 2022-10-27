<?php
/* Connect to an ODBC database using driver invocation */
try {
    $dbh = new PDO("pgsql:host=postgres;port=5432;dbname=docker;user=root;password=password");
    echo 'Connection sucsess';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

phpinfo();
?>