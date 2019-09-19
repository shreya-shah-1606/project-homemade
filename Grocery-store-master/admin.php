<?php include 'includes/header.php';
      require("connect.php");
?>
<!-- Header -->

<script>
//JQuery - each click shows different form
$(document).ready(function(){
 $("div#newUser").hide(); //default form
 
 $("a.tool").click(function(){
	$("div.agileinfo_mail_grid_right").hide(); //hide all
	$($(this).attr("href")).show();
 })
});
</script>

<!-- Admin Content --> 
<div class="banner">
  <div class="w3l_banner_nav_left">
    <nav class="navbar nav_bottom">
	  <!--Mobile BS-->
	  <div class="navbar-header nav_2">
	    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
		  <span class="sr-only">Admin Options</span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		</button>
	  </div>
	  <!--End of Mobile-->
	  
	  <!--Options-->
	  <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
	    <ul class="nav navbar-nav nav_1">
		  <li><a href="#addProduct" class="tool"/> Add Product </a></li>
		  <li><a href="#newUser" class="tool"/> New User </a></li>
	    </ul>
	  </div>
	  <!--End of Options-->
	  
	</nav>
  </div>
  
  <!-- Content -->
  <div class="w3l_banner_nav_right">
  <div class="mail">
	<h3> Admin Options </h3>
	<div class="agileinfo_mail_grids"><!--Form Grid-->
	
	<div id="addProduct" class="col-md-12 agileinfo_mail_grid_right">
		<?php  if(isset($_POST["addProduct-submit"])){
			
		 $SQL = "INSERT INTO `items`(`itemid`, `itemname`, `iimg`, `amount`, `disamt`, `pid`) VALUES (DEFAULT,'".$_POST['ProductName']."','".$_POST['Picture']."','".$_POST['Price']."','".$_POST['Discount']."','".$_POST['ProductNumber']."')";
		 $result = mysql_query($SQL);
		 
		} ?>
	
		<form name ="addProduct" method="post">
		<input type="text" name="ProductName" value="Product Name*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product Name*';}" required=""><br/><br/>
		<input type="text" name="ProductNumber" value="Product Number*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product Number*';}" required=""><br/><br/>
		<input type="text" name="Price" value="Price*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Price*';}" required=""><br/><br/>
		<input type="text" name="Discount" value="Discount*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Discount*';}" required=""><br/><br/>
		<h4>Picture*:   </h4> <input type="file" accept="image/jpeg" name="Picture"/> <br />
		<input type="submit" name="addProduct-submit" value="Submit" />
		<input type="reset" value="Clear"/>
		</form> <div class="clearfix"><br /></div>
	</div> <!--addProduct-->
	
	<div id="newUser" class="col-md-12 agileinfo_mail_grid_right">
	    <?php if(isset($_POST['newUser-submit'])){
		 $SQL = "INSERT INTO `user`(`userID`, `username`, `password`, `email`, `phone`) 
				 VALUES (DEFAULT, '".$_POST['Username']."','".$_POST['Password']."','".$_POST['Email']."','".$_POST['PhoneNumber']."')";
		 $result = mysql_query($SQL);
		 
		} ?>
		
		<form name="newUser" method="post">
		<input type="text" name="Username" value="Username*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username*';}" required=""><br/><br/>
		<input type="text" name="Password" value="Password*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password*';}" required=""><br/><br/>
		<input type="email" name="Email" value="Email*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email*';}" required=""><br /><br />
		<input type="text" name="PhoneNumber" value="Phone Number*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone Number*';}" required=""><br/><br/>
		<input type="submit" name="newUser-submit" value="Submit" />
		<input type="reset" value="Clear"/>
		</form> <div class="clearfix"><br /></div>
	</div><!--newUser-->
		
    </div><!--Form Grid-->
  </div>
  </div>
  <div class="clearfix"></div>
</div>



<!-- Footer -->
<?php include 'includes/footer.php'; ?>