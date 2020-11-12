<!DOCTYPE html>
<html>

<head>
    <meta lang="en-us">
</head>

<body>
    <?php
    include '../Control/RegValidation.php';

    ?>

    <form method='post' enctype="multipart/form-data">
        <table align="center" style="width:40%">
            <tr>
                <td>EMP Id :</td>
                <td> <input type="text" name="id"><?php echo $idError;  ?></td>
            </tr>

            <tr>
                <td>Name :</td>
                <td><input type="text" name="name"><?php echo $NameError; ?></td>
            </tr>

            <tr>
                <td>Date of Birth:</td>
                <td><input type="date" id="birthday" name="birthday"><?php echo $DobError; ?></td>
            </tr>

            <tr>
                <td>Address :</td>
                <td><input type="text" name="address"><?php echo $AddressError; ?></td>
            </tr>

            <tr>
                <td><label for="Country">Country:</label></td>
                <td>
                    <select name="country" id="country">
                        <option value="">Please select Country</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="India">India</option>
                        <option value="US">US</option>
                    </select>
                    <?php echo $CountryError;  ?>
                </td>
            </tr>

            <tr>
                <td><label for="State">State:</label></td>
                <td>
                    <select name="state" id="state">
                        <option value=""></option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Assam">Assam</option>
                        <option value="Goa">Goa</option>
                        <option value="New Jersey">New Jersey</option>
                        <option value=" South Carolina"> South Carolina</option>
                    </select>
                    <?php echo $StateError;  ?>
                </td>
            </tr>
            <tr>
                <td><label for="City">City:</label></td>
                <td>
                    <select name="city" id="city">
                        <option value=""></option>
                        <option value="Kuril">Kuril</option>
                        <option value="Goa">Goa</option>
                        <option value="Jersey">Jersey</option>
                        <option value=" Carolina"> Carolina</option>

                    </select>
                    <?php echo $CityError; ?>
                </td>
            </tr>


            <tr>
                <td>Date of Joining</td>
                <td><input type="date" id="join" name="join"><?php echo $DojError;  ?></td>
            </tr>
            <tr>
                <td> Profile Pic</td>
                <td>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <br>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>

        </table>
    </form>


    <?php echo $InsertError;
    echo $blankField;
    ?>
</body>

</html>