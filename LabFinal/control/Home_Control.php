<?php
include('../Entity/hero.php');
include('../Repo/Hero_repo.php');

$radio1 = $radio2 = $check1 = $check2 = $check3 = $check4 = "";

$search = $_POST['search'];
$type = $_POST["type"];

$h = new Hero();
$h->setSearch($search);
$hRepo = new Hero_repo();

if ($type == "id") {
    $result = $hRepo->GetById($h);
} else if ($type == "name") {
    $result = $hRepo->GetByName($h);
} else if ($type == "Phone") {
    $result = $hRepo->GetByphone($h);
} else if ($type == "Email") {
    $result = $hRepo->GetByEmail($h);
}




if ($result == null) {
    echo "NO DATA";
} else {



    if ($result->getGender() == "female") {
        $radio1 = "checked";
    } else if ($result->getGender() == "male") {
        $radio2 = "checked";
    }


    if ($result->getPower() == "Flying") {
        $check1 = "checked";
    } else if ($result->getPower() == "Martial Arts") {
        $check2 = "checked";
    } else if ($result->getPower() == "Super Strong") {
        $check3 = "checked";
    } else {
        $check4 = "checked";
    }

?>

    <!DOCTYPE html>
    <script src="../js/update.js"></script>


    <form action="" method="POST" onsubmit="return validateForm()">

        <table>

            <tr>

                <td><label>Name :</label></td>
            </tr>
            <tr>
                <td id="name"> <input type="text" name="name" value=" <?php echo $result->getName() ?> "> </td>
            </tr>

            <tr>
                <td><label for="">Address :</label></td>
            </tr>
            <tr>
                <td id="address"><input type="text" name="address" value="   <?php echo $result->getAddress() ?>   "></td>
            </tr>

            <tr>
                <td><label for="">Email :</label></td>
            </tr>
            <tr>
                <td id="email"><input type="text" name="email" value="   <?php echo $result->getEmail() ?>   "></td>
            </tr>

            <tr>
                <td><label for="">Password :</label></td>
            </tr>
            <tr>
                <td id="password"><input type="text" name="password" value="   <?php echo $result->getPassword() ?>   "></td> ;
            </tr>

            <tr>
                <td><label for="">Telephone :</label></td>
            </tr>
            <tr>
                <td id="contact"><input type="text" name="contact" value="   <?php echo $result->getContact() ?>   "></td>
            </tr>

            <tr>
                <td><label for="">Gender :</label></td>

                <td><label><?php echo $result->getGender() ?></label> </td>
            </tr>

            <tr>
                <td><label for="">Superpowers :</label></td>

                <td> <label><?php echo $result->getPower() ?></label>
                </td>
            </tr>
        </table>
        <!-- <input type="submit" name="submit" value="Update"> -->
    </form>

    </html>
<?php
}
?>