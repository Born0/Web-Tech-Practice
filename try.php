<!DOCTYPE html>
<html>

<body>

<h1>Registration</h1>

<form action="loginAction/Result.php" method-'post'  >
    <table style="width:50%">

        <tr>
            <td>Name      :</td>
            <td> <input type="text" placeholder-"Name" required></td>
        </tr>

        <tr>
            <td>Email      :</td>
            <td><input type="email" placeholder-"Email" required></td>
        </tr>

        <tr>
            <td>User Name  :</td>
            <td><input type="text" placeholder-"UserName" required></td>
        </tr>

        <tr>
            <td>Password  :</td>
            <td><input type="password" placeholder-"Password" required></td>
        </tr>

        <tr>
            <td>Confirm Password :</td>
            <td><input type="password" placeholder-"ConformPassword" required></td>
        </tr>

        <td><br> <b> Gender</b></td>
      


        <table style=width:30%>
            <tr>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label>
            </tr>
            <td><br> <b>Date of Birth</b></td>
        </table>


        <table style:width:30%>
            <tr>
                <label for="birthday">Birthday:</label>
                <input type="date" id="birthday" name="birthday">
            </tr>
        </table>
    </table>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
</form>
</body>
</html>