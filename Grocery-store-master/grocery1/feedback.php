<?php include 'includes/header.php';?>


<div style="border:1em solid #333; background-color:#f1f1f1; border-radius:5em; padding:16em;" align="center";>
<h2 align="center"> Feedback Form </h2> <br />
<h3><input type="radio" value="Good" align="center"><strong> Good </strong></input></h3><br />
<h3><input type="radio" value="Average" align="center"> <strong> Average </strong></input></h3><br />
<h3><input type="radio" value="Bad" align="center"> <strong> Bad </strong></input></h3><br />
<h3><input type="text"  value="Comments" align="center"></input>

<button onClick="myFunction()">Submit</button>
<script type="text/javascript">
function myFunction() {
 alert("Thank you!");
}


</script>

</div> 

</br>					
<?php include 'includes/footer.php';?>