<!DOCTYPE html>
<html>
    <head>
        <meta lang="en-us"> 
    </head>
<body>

<a href="Registration.php"><h1>Registration</h1> </a>
<a href="loginAction/Result.php"><h2>Result</h2> </a>
<a href="loginAction/Home.php"><h3>Home</h3> </a>

<form action="loginAction/Result.php" method-'post'  >
    <table style="width:50%" border=1 frame=hsides rules=rows >

        <tr>
            <td>Name      :</td>
            <td> <input type="text" required ></td>
            
        </tr>
        
        <tr>
            <td>Email      :</td>
            <td><input type="email" required ></td>
        </tr>

        <tr>
            <td>User Name  :</td>
            <td><input type="text"  required ></td>
        </tr>

        <tr>
            <td>Password  :</td>
            <td><input type="password" required ></td>
        </tr>

        <tr>
            <td>Confirm Password :</td>
            <td><input type="password"  required ></td>
        </tr>



        <tr><td><table >
            <tr>
                <b> Gender</b><br>
                <input type="radio" id="male" name="gender" value="male" required>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label>
            </tr>
           
        </table></td></tr>


        <tr><td><table>
            <tr>
                <b>Date of Birth</b><br>
                <label for="birthday">Birthday:</label>
                <input type="date" id="birthday" name="birthday" required>
            </tr>
        </table></td></tr>
            <tr><td><table>
                <tr>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </tr>
        </table></td></tr>
    </table>    
</form>
</body>
    <?php include 'loginAction/footer.php';?>
</html>