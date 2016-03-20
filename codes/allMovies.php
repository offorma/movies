<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 15/03/2016
 * Time: 22:13
 */
 include 'server.inc.php';

$sql = "SELECT * FROM marvelmovies";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result))
{
    /* the code inside here is repeated for each item in the array
    You can do things like the following to print out each movie title */
?>
    <pre>
    <?php

   print_r($row);

}
?>
</pre>

<?php

?>