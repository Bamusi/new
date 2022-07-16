<?php
 $mysqli = new mysqli('abul.db.elephantsql.com', 'root', 'LydlQc7tBOs6qCZPm-qxbLgbUu9CaeQN', 'demrnydp') or die(mysqli_error($mysqli));  #connection to database
 
?>

<!doctype html>
<html>
<head>
<title>Online Retail</title>
<link rel="stylesheet" href="css/all.css">
<link rel="stylesheet" href="css/main.css">
</head>

<body>
<nav class="navbar">

    <div class="navbar_toggle" id="mobile-menu">
		 <span class="bar"></span>
		 <span class="bar"></span>
		 <span class="bar"></span>
	</div>
	<div class="#">
		 <ul class="navbar_menu">
			  <li class="navbar_item">
				 <a href="main.html" class="nav_links" id="services-page">Home</a>
			  </li> 
			  <li class="navbar_item">
				 <a href="categories.html" class="nav_links" id="booking-page">Categories</a>
			  </li> 	  
		 </ul>
	</div>
</nav>

<h1>Fridge Section </h1>
     <hr/>
<div class="whole_section">	
 
<div class="label_part">
     <div class="section_part">
		 <h2>Details</h2>
		 <div class="inside_section">
		 
			 <table>
				 <tr>
					 <th>Product</th>
				 </tr>
				 <tr> 
					 <th>On Selves</th>
				 </tr>
				 <tr> 
					 <th>Total</th>
				 </tr>
			 </table>
		 </div>
	 </div>
</div>	 
	 
<div class="fridge">
	<div class="section_part">
		<h2>
		     <div style="color:blue;">
			 <?php
                $id = 1;    
                $resultT = $mysqli->query("SELECT * FROM temp WHERE id=$id") or die($mysqli->error());
				$rowT = $resultT->fetch_array();
				$on_selves = $rowT['temperature'];			 
			 if ($rowT['temperature'] < 15) {
				 echo "Drinks ";
				 echo $rowT['temperature'];
				 echo "˚";
			 }
             ?>	</div>
			 <div style="color:red;">
			 <?php
			 if ($rowT['temperature'] >= 15) {
				 echo "Drinks ";
				 echo $rowT['temperature'];
				 echo "˚";
			 }?> </div>
           
		 </h2>
		<div class="inside_section">
			 <table>
				 <tr>
					 <th>Fanta</th>
					 <th>CocaCola</th>
					 <th>Sprite</th>
				 </tr>
				 <tr> 
					 <td><?php 
					     $id = 1;       #referring to id 1 in table details in database online_retail
                         $result1 = $mysqli->query("SELECT * FROM details WHERE id=$id") or die($mysqli->error());
	                     $row1 = $result1->fetch_array();
                       	 $on_selves = $row1['on_selves'];
						 echo $row1['on_selves'];
					     ?>
					 </td>
					 <td>
					     <?php 
					     $id = 2;       #referring to id 2 in table details in database online_retail
                         $result2 = $mysqli->query("SELECT * FROM details WHERE id=$id") or die($mysqli->error());
	                     $row2 = $result2->fetch_array();
                       	 $on_selves = $row2['on_selves'];
						 echo $row2['on_selves'];
					     ?>
					 </td>
					 <td>  
					     <?php 
					     $id = 3;       #referring to id 3 in table details in database online_retail
                         $result3 = $mysqli->query("SELECT * FROM details WHERE id=$id") or die($mysqli->error());
	                     $row3 = $result3->fetch_array();
                       	 $on_selves = $row3['on_selves'];
						 echo $row3['on_selves'];
					     ?>
					 </td>
				 </tr>
				 <tr> 
					 <td>
					     <?php
	                     $total = $row1['total'];
						 echo $row1['total'];
					     ?>
					 </td>
					 <td>
					     <?php
	                     $total = $row2['total'];
						 echo $row2['total'];
					     ?>
					 </td>
					 <td> 
					     <?php
	                     $total = $row3['total'];
						 echo $row3['total'];
					     ?>
					 </td>
				 </tr>
			 </table>
		</div>
	</div>


	<div class="section_part">
		<h2>
		     <div style="color:blue;">
			 <?php
                $id = 2;    
                $resultT1 = $mysqli->query("SELECT * FROM temp WHERE id=$id") or die($mysqli->error());
				$rowT1 = $resultT1->fetch_array();
				$on_selves = $rowT1['temperature'];			 
			 if ($rowT1['temperature'] < 10) {
				 echo "Ice cream ";
				 echo $rowT1['temperature'];
				 echo "˚";
			 }
             ?>	</div>
			 <div style="color:red;">
			 <?php
			 if ($rowT1['temperature'] >= 10) {
				 echo "Ice cream ";
				 echo $rowT1['temperature'];
				 echo "˚";
			 }?> </div>
		
		</h2>
		<div class="inside_section">
			 <table>
				 <tr>
					 <th>Vanilla</th>
					 <th>Chocolate</th>
					 <th>Strawberry</th>
				 </tr>
				 <tr> 
					 <td><?php 
					     $id = 4;       #referring to id 4 in table details in database online_retail
                         $result4 = $mysqli->query("SELECT * FROM details WHERE id=$id") or die($mysqli->error());
	                     $row4 = $result4->fetch_array();
                       	 $on_selves = $row4['on_selves'];
						 echo $row4['on_selves'];
					     ?>
					 </td>
					 <td>
					     <?php 
					     $id = 5;       #referring to id 5 in table details in database online_retail
                         $result5 = $mysqli->query("SELECT * FROM details WHERE id=$id") or die($mysqli->error());
	                     $row5 = $result5->fetch_array();
                       	 $on_selves = $row5['on_selves'];
						 echo $row5['on_selves'];
					     ?>
					 </td>
					 <td>  
					     <?php 
					     $id = 6;       #referring to id 6 in table details in database online_retail
                         $result6 = $mysqli->query("SELECT * FROM details WHERE id=$id") or die($mysqli->error());
	                     $row6 = $result6->fetch_array();
                       	 $on_selves = $row6['on_selves'];
						 echo $row6['on_selves'];
					     ?>
					 </td>
				 </tr>
				 <tr> 
					 <td>
					     <?php
	                     $total = $row4['total'];
						 echo $row4['total'];
					     ?>
					 </td>
					 <td>
					     <?php
	                     $total = $row5['total'];
						 echo $row5['total'];
					     ?>
					 </td>
					 <td> 
					     <?php
	                     $total = $row6['total'];
						 echo $row6['total'];
					     ?>
					 </td>
				 </tr>
			 </table>
		</div>
	</div>


	<div class="section_part">
		<h2>
		     <div style="color:blue;">
			 <?php
                $id = 3;    
                $resultT2 = $mysqli->query("SELECT * FROM temp WHERE id=$id") or die($mysqli->error());
				$rowT2 = $resultT2->fetch_array();
				$on_selves = $rowT2['temperature'];			 
			 if ($rowT2['temperature'] < 5) {
				 echo "Meat ";
				 echo $rowT2['temperature'];
				 echo "˚";
			 }
             ?>	</div>
			 <div style="color:red;">
			 <?php
			 if ($rowT2['temperature'] >= 5) {
				 echo "Meat ";
				 echo $rowT2['temperature'];
				 echo "˚";
			 }?> </div>
		     
		</h2>
		<div class="inside_section">
			<table>
				 <tr>
					 <th>Chicken</th>
					 <th>Beef</th>
					 <th>Pork</th>
				 </tr>
				 <tr> 
					 <td><?php 
					     $id = 7;       #referring to id 4 in table details in database online_retail
                         $result7 = $mysqli->query("SELECT * FROM details WHERE id=$id") or die($mysqli->error());
	                     $row7 = $result7->fetch_array();
                       	 $on_selves = $row7['on_selves'];
						 echo $row7['on_selves'];
					     ?>
					 </td>
					 <td>
					     <?php 
					     $id = 8;       #referring to id 5 in table details in database online_retail
                         $result8 = $mysqli->query("SELECT * FROM details WHERE id=$id") or die($mysqli->error());
	                     $row8 = $result8->fetch_array();
                       	 $on_selves = $row8['on_selves'];
						 echo $row8['on_selves'];
					     ?>
					 </td>
					 <td>  
					     <?php 
					     $id = 9;       #referring to id 6 in table details in database online_retail
                         $result9 = $mysqli->query("SELECT * FROM details WHERE id=$id") or die($mysqli->error());
	                     $row9 = $result9->fetch_array();
                       	 $on_selves = $row9['on_selves'];
						 echo $row9['on_selves'];
					     ?>
					 </td>
				 </tr>
				 <tr> 
					 <td>
					     <?php
	                     $total = $row7['total'];
						 echo $row7['total'];
					     ?>
					 </td>
					 <td>
					     <?php
	                     $total = $row8['total'];
						 echo $row8['total'];
					     ?>
					 </td>
					 <td> 
					     <?php
	                     $total = $row9['total'];
						 echo $row9['total'];
					     ?>
					 </td>
				 </tr>
	         </table>
		</div>
	</div>
</div>
</div>


<h1>Snacks Section</h1>
     <hr/>
<div class="whole_section">	
 
	<div class="label_part">
		 <div class="section_part">
			 <h2>Details</h2>
			 <div class="inside_section">
			 
				 <table>
					 <tr>
						 <th>Product</th>
					 </tr>
					 <tr> 
						 <th>On Selves</th>
					 </tr>
					 <tr> 
						 <th>Total</th>
					 </tr>
				 </table>
			 </div>
		 </div>
	</div>	 
		 
	<div class="fridge">
		<div class="section_part">
			<h2>Chips</h2>
			<div class="inside_section">
				 <table>
					 <tr>
						 <th>Lays</th>
						 <th>KingKurls</th>
						 <th>Things</th>
					 </tr>
					 <tr> 
						 <td>3</td>
						 <td>3</td>
						 <td>3</td>
					 </tr>
					 <tr> 
						 <td>3</td>
						 <td>3</td>
						 <td>3</td>
					 </tr>
				 </table>
			</div>
		</div>


		<div class="section_part">
			<h2>Biscuits</h2>
			<div class="inside_section">
			 <table>
			 <tr>
				 <th>Vanilla</th>
				 <th>Chocolate</th>
				 <th>Strawberry</th>
			 </tr>
			 <tr> 
				 <td>3</td>
				 <td>3</td>
				 <td>3</td>
			 </tr>
			 <tr> 
				 <td>3</td>
				 <td>3</td>
				 <td>3</td>
			 </tr>
			 </table>
			</div>
		</div>


		<div class="section_part">
			<h2>Sweets</h2>
			<div class="inside_section">
				<table>
			 <tr>
				 <th>Stumbo</th>
				 <th>BigBoom</th>
				 <th>AtomicPops</th>
			 </tr>
			 <tr> 
				 <td>3</td>
				 <td>3</td>
				 <td>3</td>
			 </tr>
			 <tr> 
				 <td>3</td>
				 <td>3</td>
				 <td>3</td>
			 </tr>
			 </table>
			</div>
		</div>
	</div>
</div>

<h1>Middle Section</h1>
     <hr/>
<div class="whole_section">	
 
<div class="label_part">
     <div class="section_part">
		 <h2>Details</h2>
		 <div class="inside_section">
		 
			 <table>
				 <tr>
					 <th>Product</th>
				 </tr>
				 <tr> 
					 <th>On Selves</th>
				 </tr>
				 <tr> 
					 <th>Total</th>
				 </tr>
			 </table>
		 </div>
	 </div>
</div>	 
	 
<div class="fridge">
	<div class="section_part">
		<h2>Coffe</h2>
		<div class="inside_section">
			 <table>
				 <tr>
					 <th>Sugar</th>
					 <th>TeaBags</th>
					 <th>Milk</th>
				 </tr>
				 <tr> 
					 <td>3</td>
					 <td>3</td>
					 <td>3</td>
				 </tr>
				 <tr> 
					 <td>3</td>
					 <td>3</td>
					 <td>3</td>
				 </tr>
			 </table>
		</div>
	</div>


	<div class="section_part">
		<h2>Rice</h2>
		<div class="inside_section">
         <table>
	     <tr>
		     <th>Mariano</th>
			 <th>Mahatma</th>
			 <th>5kgLongGrain</th>
		 </tr>
		 <tr> 
		     <td>3</td>
			 <td>3</td>
			 <td>3</td>
		 </tr>
		 <tr> 
		     <td>3</td>
			 <td>3</td>
			 <td>3</td>
		 </tr>
	     </table>
		</div>
	</div>


	<div class="section_part">
		<h2>Kitchen Tools</h2>
		<div class="inside_section">
			<table>
	     <tr>
		     <th>CookingPots</th>
			 <th>Spoons</th>
			 <th>Knifes</th>
		 </tr>
		 <tr> 
		     <td>3</td>
			 <td>3</td>
			 <td>3</td>
		 </tr>
		 <tr> 
		     <td>3</td>
			 <td>3</td>
			 <td>3</td>
		 </tr>
	     </table>
		</div>
	</div>

</div>

</div>

</body>

</html>