<?php

include_once('../Database/Database.php');

class HostRepository
{


    private $connection;

    function __construct()
    {

        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    function insertHost($userId, $userName, $hostName, $hostPlan)
    {
        $conn = $this->connection;

        // var_dump($hostPlan);

        $sql = "INSERT INTO host(userId,userName,hostName,hostRole) VALUES(:userId,:userName,:hostName,:hostPlan)";

        $statement = $conn->prepare($sql);

        $statement->execute([
            ':userId' => $userId,
            ':userName' => $userName,
            ':hostName' => $hostName,
            ':hostPlan' => $hostPlan,
        ]);

        echo "<script> alert('Host has been inserted! '); </script>";
    }

    function getAllHosts()
    {
        $conn = $this->connection;

        $sql = "SELECT * FROM host";

        $statement = $conn->query($sql);
        $hosts = $statement->fetchAll();
        return $hosts;
    }

    function getHostById($id)
    {

        $conn = $this->connection;

        $sql = "SELECT * FROM host WHERE id='$id' ";

        $statement = $conn->query($sql);
        $host = $statement->fetch();
        return $host;
    }
    function getHostsByUserId($id)
    {

        $conn = $this->connection;
        echo $id;
        $sql = "SELECT * FROM host WHERE userId='$id' ";

        $statement = $conn->query($sql);
        $hosts = $statement->fetchAll();
        return $hosts;
    }


    function deleteHost($id)
    {
        $conn = $this->connection;

        $sql = "DELETE FROM host WHERE id=:id";

        $statement = $conn->prepare($sql);

        $statement->execute([
            ':id' => $id,
        ]);


        echo "<script> alert('Host has been deleted!'); </script>";
    }
}