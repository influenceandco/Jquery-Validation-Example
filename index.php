<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Influence & Co.</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="description" content="">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        
        <!-- Le styles -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>
    
    <body>
        <?php include( "config.php");?>
        <?php include( "scripts/dbconnect.php");?>

        
        <div id='wrap'><!--page wrapper -->
          <div class="container">
          	<div class="row-fluid">
          		<div class="span6 offset3">
          			<h1>Enter your information</h1>
          			<form id="sample_form" method="POST" action="">
          				<input type="text" name="name" id="name" class="input-block-level" placeholder="Your Name">
           				<input type="text" name="email" id="email" class="input-block-level" placeholder="Your Email">
		   				<div id="sample_error"></div>
		   				<button class="btn btn-primary">Submit</button>
          			</form>
          		</div>
          	</div>
          </div>
        </div> <!--end of wrap-->
        
        <footer><!--page footer -->

        </footer><!--end of footer-->
        
        
	    <!-- Le scripts -->
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="assets/js/placeholder-fix.js"></script>

        <!-- custom scripts -->            
        <script type="text/javascript">
        
                 $("#sample_form").validate({
        
	                    rules: {
	                        name: {
		                      required:true  
	                        },
	                        email: {
		                        required:true,
		                        email:true
	                        }
	
	                    },
	                    submitHandler: function (form) {
	                    	//loading animation
	                        $("#sample_error").html('<i class="fa fa-spinner fa-spin"></i>');	                   
							
							//get variables
	                        var name = $("#name").val();
	                        var email = $("#email").val();
	                        
	                        var data = { //post data
		                        name:name,
		                        email:email
	                        };
	                        $.ajax({
	                             type: "POST",
	                             url: "scripts/submit_data.php",
	                             data: data,
	                             success: function (res) {
	                             
	                             	//remove loading animation
	                            	 $("#sample_error i").remove(".fa-spinner");
	                            	 
	                                  if (res == true) {
	                                          //success action
	                                          $("#sample_error").html("Good Job!");
	                                          $("#name").val("");
	                                          $("#email").val("");
	                                  } else {
	                                          //failure action
	                                          $("#sample_error").html(res);
	                                  }
	                        
	                             }
	                        });
	                        
	                        
	
	                    }
	                });
        
        	
        
        </script><!-- end of custom scripts -->
                
    </body>
</html>