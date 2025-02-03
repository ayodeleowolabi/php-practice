<?php
echo "<h3> Forms in PHP </h3><br>";
echo "Both POST and GET use arrays to pass data as a <strong>Key=>Value Pair</strong><br>";
echo "Key = Name of Form Control<br>";

echo "Value = Data Inputted by User<br>";
echo "<br>";

?> 


<form action="send.php" method="post">
    First Name: <input type="text" name="fname"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit">

</form>