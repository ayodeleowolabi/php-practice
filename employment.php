<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        .error{
            color:red
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Practice</title>

</head>
<body>
    <?php
    $name = $website = $position = $experience = $estatus = $comments = "";

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if (empty($_POST["name"])){
        echo "<span class=\"error\">Error First Name Required</span>";
    } elseif (empty($_POST["website"])) {
        echo "<span class=\"error\">Error Website Required</span>";
    } else { 
        $name = val($_POST["name"]);
        $website = val($_POST["website"]);
        $position = val($_POST["position"]);
        $experience = val($_POST["experience"]);
        $estatus = val($_POST["estatus"]);
        $comments = val($_POST["comments"]);
    }


}

// we have enclosed the variables in a function called val that validates the data.

    function val($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    ?>
    <h2>PHP Forms Practice</h2>
    <p>How to create a form and have that data display on the same page.</p>
    <ul>
        <li>Specify your form action. Use the htmlspecialchars($_SERVER["PHP_SELF]); wrap in a php script</li>
        <li>Then Create your PHP Script</li>
        <li>Define the variables that will contain the inputted form data. set it to an empty value</li>
        <li>Create a function that will validiate the inputted data</li>
    </ul>
    <form name="employment" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <table>
            <tr>
                <td><h2>Employment Application</h2></td>

            </tr>
            <tr>
                <td>Name</td>
            <td><input type="text" name="name" maxlength="50"/></td>
            </tr>
            <tr>
                <td>Website</td>
                <td><input type="text" name="website" maxlength="50"/></td>
            </tr>
            <tr>
                <td>Position</td>
                <td>
                    <select name="position">
                        <option value="Accountant">Accountant</option>
                        <option value="Receptionist">Receptionist</option>
                        <option value="Administrator">Administrator</option>
                        <option value="Supervisor">Supervisor</option>


                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Experience Level
                </td>
                <td>
                    <select name="experience">
                        <option value="Entry Level"> Entry Level</option>
                        <option value="Some Experience">Some Experience</option>
                        <option value="Very Experienced">Very Experienced</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Employment Status</td>
                <td>
                    Employed <input type="radio" name="estatus" value="Employed" />
                    Unemployed <input type="radio" name="estatus" value="Unemployed"/>
                    Student <input type="radio" name="estatus" value="Student"/>
                  
                </td>
            </tr>
            <tr>
                <td>Additional Comments</td>
                <td>
                    <textarea name="comments" cols="20" rows="5">
                        
                    </textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Submit"/>
                    <input type="reset" name="reset" value="Reset"/>
                </td>
            </tr>
        </table>
    </form>
<?php
echo "<h2>User Input:</h2>";
echo "Name: " . $name . "<br>";
echo "Website: " . $website . "<br>";
echo "Position: " . $position . "<br>";
echo "Experience: " . $experience . "<br>";
echo "Employment Status: " . $estatus . "<br>";
echo "Comments: " . $comments;
?>
</body>
</html>