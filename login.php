<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="styling.css" rel="stylesheet" >
<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=David+Libre&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
<script src="js/jquery.js"></script>

<script type="text/javascript">
                $(document).ready(function(){
            
               $("#login").click(function(){
                
                    email=$("#email").val();
                    password=$("#password").val();
                     $.ajax({
                        type: "POST",
                        url: "passwordcheck.php",
                        data: "email="+email+"&password="+password,
                        success: function(html){
                          if(html=='true')
                          {
                              
                              $("#add_err2").html('<div class="alert alert-success"> \
                                                    <strong>Authenticated</strong> \ \
                                                </div>');

                            window.location.href = "blog.php";
                          
                          } else if (html=='false') {
                                $("#add_err2").html('<div class="alert alert-danger"> \
                                                    <strong>Authentication</strong> failure. \ \
                                                </div>');
                                
                          
                          } else {
                                $("#add_err2").html('<div class="alert alert-danger"> \
                                                    <strong>Error</strong> processing request. Please try again. \ \
                                                </div>');
                          }
                        },
                        beforeSend:function()
                        {
                            $("#add_err2").html("loading...");
                        }
                    });
                     return false;
                });
});
</script>


</head>

<body>
<div id="brand" class="text-center">The Handlooms</div>
<div id="brandaddress" class="text-center">Ambala Cantt</div>
<?php require_once 'nav.php';?>

    <div class="container">
        <div class="row">
            <div class="boxy">
                <div class="col-lg-12">
                    
					<div class="alert alert-danger">
					<strong>You must be logged in to view the blog.</strong>
					</div>

					
					<hr>
                    <h2 class="intro-text text-center">
                        <strong>Login</strong>
                    </h2>
					<div id="add_err2"></div>
                    <hr>       
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" class="form-control" style="width:100%">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Password</label>
                                <input type="password" id="password" name="password" maxlength="10" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" id="login" class="btn btn-default" >Login</button>
                            </div>
                        </div>
                    </form>
					
					<div class="form-group col-lg-12">
						<a href="register.php"><button type="submit" class="btn btn-default">Not a Member? Register here</button></a>
					</div>

					
                </div>
            </div>
        </div>

    </div>
  

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Perfect Cup 2016</p>
                </div>
            </div>
        </div>
    </footer>




</body>
</html>