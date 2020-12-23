<?php
class Hero
{
    private $id;
    private $name;
    private $address;
    private $email;
    private $password;
    private $contact;
    private $gender;
    private $power;
    private $search;

    function setId($id)
    {
        $this->id = $id;
    }
    function getId()
    {
        return $this->id;
    }

    function setName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }

    function setAddress($address)
    {
        $this->address = $address;
    }
    function getAddress()
    {
        return $this->address;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }
    function getEmail()
    {
        return $this->email;
    }

    function setPassword($password)
    {
        $this->password = $password;
    }
    function getPassword()
    {
        return $this->password;
    }

    function setContact($contact)
    {
        $this->contact = $contact;
    }
    function getContact()
    {
        return $this->contact;
    }

    function setGender($gender)
    {
        $this->gender = $gender;
    }
    function getGender()
    {
        return $this->gender;
    }

    function setPower($power)
    {
        $this->power = $power;
    }
    function getPower()
    {
        return $this->power;
    }

    function setSearch($search)
    {
        $this->search = $search;
    }
    function getSearch()
    {
        return $this->search;
    }
}
