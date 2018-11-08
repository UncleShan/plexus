<!doctype html>
<html lang = "en">
   <head>
      <meta charset = "utf-8">
      <title>page_2</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      
   </head>
   
   <body>
      <?php 
         $page1_info = [];
         $page1_info['store_type'] = $_POST['store_type'] ?? '';
         $page1_info['provide_details'] = $_POST['provide_details'] ?? '';
         $page1_info['user_look_up'] = $_POST['user_look_up'] ?? '';
         $page1_info['first_name'] = $_POST['first_name'] ?? '';
         $page1_info['last_name'] = $_POST['last_name'] ?? '';          
         
      ?>

	   <!-- HTML -->
      <div class="container">
      	<div class="row">
      		<div class="col-sm-3"></div>
      		<div class="col-sm-6">
      			<form name="form1" action="" method="post">
      				<p>this is page 2</p>
                  <?php 
                     echo 'store_type=' . $page1_info['store_type'] . "<br>";
                     echo 'provide_details=' . $page1_info['provide_details'] . "<br>";
                     echo 'user_look_up=' . $page1_info['user_look_up'] . "<br>";
                     echo 'first_name=' . $page1_info['first_name'] . "<br>";
                     echo 'last_name=' . $page1_info['last_name'] . "<br>";
                     echo print_r($_POST);
                  ?>

						</form><!-- form -->
					</div><!-- col -->
      		<div class="col-sm-3"></div>

				</div><!-- row -->
      </div>

      <script type="text/javascript">
      </script>
   </body>
</html>