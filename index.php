<html>
	<head>
		<!----  JS/ CSS all scripts go here.. -->		
		<link rel="stylesheet" href="css/style.css"> <!-- link to style sheet -->
		<script src='js/script.js'></script>  <!-- link to JS functions -->
		<link rel="stylesheet" href="font/stylesheet.css"> <!--  link to font style sheets -->
	</head>
	<body>
		<div id ="contents">
			<div id="wrapper">
                <!--[if  IE ]>
                <h3>** This Application does not work on Internet Explorer. Please try with Mozilla Firefox or Chrome </h3><![endif]-->
				<form id ="form" action ="email.php" onsubmit="return sendform()" method="post"><h1> Daily Notification Mail </h1> <br/><br/>

					  <label>From <input id ="Email" type="text" name="email"  required placeholder="From@cisco.com"></label><br/><br/>
            		  <!--<label> To <input id ="to" type="email" name="cc"optional placeholder="username@cisco.com"></label> <br/><br/>-->
            		  <label>Release
            		    <select id ="domain"  name = "release[]" required multiple style ="height:100px">
            		   	<?php
            		   		$conn;
            		   	    include('functions.php');
                            //error_reporting(0);
                            
            		   	    ListAll($result);
                            $result1 = $result;
                			while (($row = oci_fetch_assoc($result1))){
                				echo "<option>". $row['Release']. "</option>";
                			}
                           // print_r($result1);
                		?>
            		    </select>
            		  </label>&nbsp;&nbsp;&nbsp; <br/>
            		   <label>Ermo Perf and FastTrack<input type="checkbox" id="ErmoPerf" name ="ErmoPerf" value ="Yes"></label><br/><br/><br/>
                        <label>Graph
                        <select id ="domain"  name = "graph[]"  multiple style ="height:100px">
                        <?php
                            //$conn;
                            //include('functions.php');
                            //error_reporting(0);
                            ListAll($result);
                            //print_r($result1);
                            while (($row = oci_fetch_assoc($result))){

                                echo "<option>". $row['Release']. "</option>";
                            }
                        ?>
                        </select>
                      </label>&nbsp;&nbsp;&nbsp; <br/>
                        <a  id = "addlink"href="meta.php">Add New Releases </a><br/>
            		  <label><button id="screen" disabled>Screen</button></label>

            		  <label><button id="send"> Email </button>  </label>

				</form>

			</div>
		</div>
	</body>
</html>

