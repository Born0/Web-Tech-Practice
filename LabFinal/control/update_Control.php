<?php
include('../Entity/hero.php');
include('../Repo/Hero_repo.php');

$id = $_SESSION["id"];

$h = new Hero();
$h->setId($id);
$h->setName($_POST["name"]);

$hRepo = new Hero_repo();
$result = $hRepo->Update($h);
