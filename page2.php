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
      			<form name="form2" action="" method="post">
                  <?php 
                     // echo 'store_type=' . $page1_info['store_type'] . "<br>";
                     // echo 'provide_details=' . $page1_info['provide_details'] . "<br>";
                     // echo 'user_look_up=' . $page1_info['user_look_up'] . "<br>";
                     // echo 'first_name=' . $page1_info['first_name'] . "<br>";
                     // echo 'last_name=' . $page1_info['last_name'] . "<br>";
                     // echo print_r($_POST);
                  ?>

                  <div class="form-group">
                     <br>
                     <label>What is the users role ?</label>
                     <select class="form-control" id="user_role" name="user_role">
                       <option value="1" <?php if($page1_info['store_type']=='1' || empty($page1_info['store_type'])){echo "selected";}?>>Dev</option>
                       <option value="2" <?php if($page1_info['store_type']=='2'){echo "selected";}?>>Manager</option>>
                       <option value="3" <?php if($page1_info['store_type']=='3'){echo "selected";}?>>Student</option>>
                     </select>
                  </div>

                  <div class="form-group">
                     <label>When did the user first join ?</label>
                     <br>
                     <input type="text" id="datepicker" required>
                  </div>

                  <div class="form-group" id="vic_located" required >
                     <label>Is this person located in Victoria ?</label>
                     <br>
                     <input type="radio" name="vic_located" value="yes" required>YES
                     <input type="radio" name="vic_located" value="no">NO<br>
                  </div>

                  <div class="form-group" id="vic_address" name="vic_address" required style="display: block">
                     <label>Where in Victoria ?</label>
                     <br>
                     <input type="text" class="form-control" <?php if(!empty($page1_info['vic_address'])){echo "value=\"" . $page1_info['vic_address'] . "\"";}else{echo "value=\"\"";}?>>
                  </div>

                  <div class="row">
                     <div class="col-sm-6">
                        <button class="btn btn-primary btn-block btn-sm" onclick="back()">Back</button>
                     </div>
                     <div class="col-sm-6">
                        <input type="Submit" value="Next" class="btn btn-primary btn-block btn-sm">
                     </div>
                  </div><!-- row -->

						</form><!-- form -->
					</div><!-- col -->
      		<div class="col-sm-3"></div>

				</div><!-- row -->
      </div>

      <script type="text/javascript">
         $( function() {
            $( "#datepicker" ).datepicker();
         } );

         function back(){
            document.getElementById("datepicker").attributes.required = "";
            document.getElementById("vic_located").attributes.required = "";
            document.getElementById("vic_address").attributes.required = "";
            
            window.location.href = 'http://localhost/plexus/plexus/';
         }
      </script>
   </body>
</html>