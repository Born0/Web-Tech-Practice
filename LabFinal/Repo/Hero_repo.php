<?php
include('DataAccess.php');

class Hero_repo
{
    private $db;
    function __construct()
    {
        $this->db = new DataAccess();
    }

    function GetById(Hero $entity)
    {
        $sql = "SELECT * FROM `heros` WHERE  id=" . $entity->getSearch() . " ";
        $result = $this->db->ReaderQuery($sql);

        $newEntity = new Hero();
        if ($result != null) {
            $row = $result->fetch_assoc();
            $newEntity->setId($row["id"]);
            $newEntity->setName($row["Name"]);
            $newEntity->setEmail($row["Email"]);
            $newEntity->setGender($row["Gender"]);
            $newEntity->setAddress($row["Address"]);
            $newEntity->setContact($row["Telephone"]);
            $newEntity->setPassword($row["Password"]);
            $newEntity->setPower($row["Superpower"]);
            return $newEntity;
        } else {
            return null;
        }
    }

    function GetByName(Hero $entity)
    {

        $sql = "SELECT * FROM `heros` WHERE  `Name`=  '" . $entity->getSearch() . "' ";
        $result = $this->db->ReaderQuery($sql);

        $newEntity = new Hero();
        if ($result != null) {
            $row = $result->fetch_assoc();
            $newEntity->setId($row["id"]);
            $newEntity->setName($row["Name"]);
            $newEntity->setEmail($row["Email"]);
            $newEntity->setGender($row["Gender"]);
            $newEntity->setAddress($row["Address"]);
            $newEntity->setContact($row["Telephone"]);
            $newEntity->setPassword($row["Password"]);
            $newEntity->setPower($row["Superpower"]);

            return $newEntity;
        } else {
            return null;
        }
    }

    function GetByphone(Hero $entity)
    {
        $sql = "SELECT * FROM `heros` WHERE  `Telephone`=" . $entity->getSearch() . " ";
        $result = $this->db->ReaderQuery($sql);

        $newEntity = new Hero();
        if ($result != null) {
            $row = $result->fetch_assoc();
            $newEntity->setId($row["id"]);
            $newEntity->setName($row["Name"]);
            $newEntity->setEmail($row["Email"]);
            $newEntity->setGender($row["Gender"]);
            $newEntity->setAddress($row["Address"]);
            $newEntity->setContact($row["Telephone"]);
            $newEntity->setPassword($row["Password"]);
            $newEntity->setPower($row["Superpower"]);
            return $newEntity;
        } else {
            return null;
        }
    }

    function GetByEmail(Hero $entity)
    {
        $sql = "SELECT * FROM `heros` WHERE  `Email`='" . $entity->getSearch() . "' ";
        $result = $this->db->ReaderQuery($sql);

        $newEntity = new Hero();
        if ($result != null) {
            $row = $result->fetch_assoc();
            $newEntity->setId($row["id"]);
            $newEntity->setName($row["Name"]);
            $newEntity->setEmail($row["Email"]);
            $newEntity->setGender($row["Gender"]);
            $newEntity->setAddress($row["Address"]);
            $newEntity->setContact($row["Telephone"]);
            $newEntity->setPassword($row["Password"]);
            $newEntity->setPower($row["Superpower"]);
            return $newEntity;
        } else {
            return null;
        }
    }
}
