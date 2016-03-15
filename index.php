<DOCTYPE !html>
    <html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
    <form action="login.php" method = "POST" class ="col-sm-6 col-sm-offset-3">
        <div class="form-group">
            <label for="Inputusername">Username</label>
            <input type="text" name="username" class="form-control" id="Inputusername" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="InputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="InputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <div class="error"><?php echo $error;?><?php echo $username; echo
        $password;?></div>
    </body>
    </html>
