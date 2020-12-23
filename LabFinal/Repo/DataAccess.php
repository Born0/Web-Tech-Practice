<?php
class DataAccess
{
    public $conn;

    function __construct()
    {
        $this->conn = new mysqli("localhost", "root", "", "test");
    }

    function executeQuery($query)
    {
        $result = $this->conn->query($query);
        if ($result != null) {
            return $result;
        } else {
            return null;
            // echo "Error from DataAcces Exe";

        }
    }

    function ReaderQuery($query)
    {
        $result = $this->conn->query($query);
        if ($result != null) {
            return $result;
        } else {
            return null;
        }
    }

    function __destruct()
    {
        $this->conn->close();
    }
}
