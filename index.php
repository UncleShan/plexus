<!doctype html>
<html lang = "en">
   <head>
      <meta charset = "utf-8">
      <title>page_1</title>
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
	      // echo print_r($page1_info);
      ?>


	    <!-- HTML -->
      <div class="container">
      	<div class="row">
      		<div class="col-sm-3"></div>
      		<div class="col-sm-6">
      			<form name="form1" method="post" action="http://localhost/plexus/plexus/page2.php">
							<div class="form-group">
								<br>
								<label>Store Type</label>
								<select class="form-control" id="store_type" name="store_type" onchange="on_off()" required>
								  <option value="1" <?php if($page1_info['store_type']=='1' || empty($page1_info['store_type'])){echo "selected";}?>>Mall</option>
								  <option value="2" <?php if($page1_info['store_type']=='2'){echo "selected";}?>>Metro</option>>
								  <option value="3" <?php if($page1_info['store_type']=='3'){echo "selected";}?>>Arcade</option>>
								  <option value="4" <?php if($page1_info['store_type']=='4'){echo "selected";}?>>Centre</option>>
								</select>
							</div>

							<div class="form-group" id="provide_details" name="provide_details" style="display: none">
								<label>Provide details</label><br>
								<input type="text" class="form-control"  id="provide_details_input" required=""<?php if(!empty($page1_info['provide_details'])){echo "value=\"" . $page1_info['provide_details'] . "\"";}else{echo "value=\"\"";}?>>
							</div>

							<div class="form-group">
								<label>User lookup</label><br>
								<input type="text" class="form-control" id="user_look_up" name="user_look_up" onchange="auto_fill_names()" required <?php if(!empty($page1_info['user_look_up'])){echo "value=\"" . $page1_info['user_look_up'] . "\"";}?>>
							</div>

							<div class="form-group">
							  <label>First name</label><br>
							  <input type="text" class="form-control" id="first_name" name="first_name" disabled="" required>
							</div>

							<div class="form-group">
							  <label>Last name</label><br>
							  <input type="text" class="form-control" id="last_name" name="last_name" disabled="" required>
							</div>
							<div class="row">
								<div class="col-sm-6"></div>
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
         $.getJSON('https://randomuser.me/api/?results=50&nat=au&exc=login', function(data) {
            var name_arr = [];

            $.each(data.results, function(index, value){
               name_arr.push(value.name.first + ' ' + value.name.last);
            });

            $( "#user_look_up" ).autocomplete({
               source: name_arr
            });
         });

        function auto_fill_names(){
          var name = document.getElementById("user_look_up").value.split(" ");  
          document.getElementById("first_name").value = name[0]; 
          if(name[1] == null) {
          	document.getElementById("last_name").value = '';	
          } else {
	          document.getElementById("last_name").value = name[1]; 
          }
        }

        function on_off()
				{
					var e = document.getElementById("store_type");
					if(e.options[e.selectedIndex].value == "2") {
				    document.getElementById("provide_details").style.display = "block";	
				    document.getElementById("provide_details").attributes.required = "true";
					}
					else {
				    document.getElementById("provide_details").style.display = "none";
				    document.getElementById("provide_details").attributes.required = "false";
					}
				}

				function validateForm() {
					alert("store_type=" + document.forms["form1"]["store_type"].value + 
								"; provide_details=" + document.forms["form1"]["provide_details"].value + 
								"; user_look_up=" + document.forms["form1"]["user_look_up"].value + 	
								"; first_name=" + document.forms["form1"]["first_name"].value + 
								"; last_name=" + document.forms["form1"]["last_name"].value);	
				}

				window.onload = on_off();
				window.onload = auto_fill_names();
      </script>
   </body>
</html>