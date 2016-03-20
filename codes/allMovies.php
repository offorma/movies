
<DOCTYPE !html>
    <html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php
        /**
         * Created by PhpStorm.
         * User: offormachukwunonso
         * Date: 15/03/2016
         * Time: 22:13
         */
        include 'server.inc.php';//include php file where i have connection to db

        $sql = "SELECT * FROM marvelmovies";//create the sql query string

        $result = mysqli_query($conn,$sql);//Query the db using the mysqli_query function and store result in result varaible.


        while($row = mysqli_fetch_assoc($result)){
    ?>

            <?php

               echo "<div class=\"container\">
                     <div class=\"row\">";
                      while($x >=4){
                     echo"<div class=\"col-md-3\">" ;
                foreach ($row as $key => $value) {
                    echo $key." = ".$value;
                }
                $x++;
            }

            print_r($row);
            ?>
        </div>
    </div>

<?php
}
?>
<?php
echo " </body>
    </html>"
?>