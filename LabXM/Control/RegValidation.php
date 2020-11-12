<?php
include('DataAccess.php');
$id = $name = $dOB = $address = $country = $state = $city = $join = $image = "";
$target_file;
$idError = $NameError = $DobError = $AddressError = $CountryError = $StateError = $CityError = $DojError = $ProfilePicError = $InsertError = $blankField = "";
$flag = false;
if (isset($_POST['submit'])) {

    if (empty($_POST["id"])) {
        $idError = "Enter ID";
        $flag = false;
    } else {
        $id = $_POST["id"];
        $flag = true;
    }

    if (empty($_POST["name"])) {
        $NameError = "Enter Name";
        $flag = false;
    } else {
        $name = $_POST["name"];
        $flag = true;
    }

    if (empty($_POST["birthday"])) {
        $DobError = "Enter birthdate";
        $flag = false;
    } else {
        $dOB = $_POST["birthday"];
        $flag = true;
    }

    if (empty($_POST["address"])) {
        $AddressError = "Enter Address";
        $flag = false;
    } else {
        $address = $_POST["address"];
        $flag = true;
    }

    if (empty($_POST["country"])) {
        $CountryError = "Select Country";
        $flag = false;
    } else {
        $country = $_POST["country"];
        $flag = true;
    }

    if (empty($_POST["state"])) {
        $StateError = "Select State";
        $flag = false;
    } else {
        $state = $_POST["state"];
        $flag = true;
    }

    if (empty($_POST["city"])) {
        $CityError = "Select City";
        $flag = false;
    } else {
        $city = $_POST["city"];
        $flag = true;
    }

    if (empty($_POST["join"])) {
        $DojError = "Enter Date Of Joining";
        $flag = false;
    } else {
        $join = $_POST["join"];
        $flag = true;
    }

    $target_dir = "files/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $file_status = "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
    } else {
        $file_status = "Sorry, there was an error uploading your file.";
    }

    $db = new DataAccess();

    $query = "INSERT INTO employee(id,name,dob,address,country,state,city,joinDate,image) VALUES ('" . $id . "','" . $name . "','" . $dOB . "','" . $address . "','" . $country . "','" . $state . "','" . $city . "','" . $join . "','" . $target_file . "' ) ";
    if ($flag) {
        $set = $db->executeQuery($query);
        if ($set === true) {
            $InsertError = "Data successfully inserted";
        } else {
            $InsertError = "There was an error creating new user !";
        }
    } else {
        $blankField = "fill all";
    }
}
