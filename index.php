<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Practice</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>>
        <link rel="stylesheet" href="css/stylesheet.css"/>
    </head>
    
    <body>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        <div class="row">
            <!--Left-->
            <div class="col-md-4"></div>
            
            <!--Center-->
            <div class="col-md-4">
                <form class="panel panel-primary" action="aboutus.php" method="post">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        <label for ="contactNo">Contact Number</label>
                        <input type="text" class="form-control" maxlength="11" name="contactNo" required/>
                        <br>
                        <label for ="password">Password</label>
                        <input type="password" class="form-control" name="password" required/>
                        <br>
                        <input type="submit" class="btn btn-success" style="float:right; width:175px;" value="Login">
                        <a href="#" class="btn btn-success" style="float:left; width:175px;">Register</a>
                    </div>
                    <div class="panel-footer">&copy; 2017 | Practice Development</div>
                </form>
            </div>
            
            <!--Right-->
            <div class="col-md-4"></div>
        </div>
    </body>
    
    <!--jQuery-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    
</html>