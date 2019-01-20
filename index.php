<!-- header start -->

<?php 
require_once 'header.php'
 ?>

<!-- header end -->


<!-- slider start -->
<?php require_once 'slider.php'
  ?>
<!-- slider end -->


<!-- footer start -->
<?php require_once 'footer.php'
  ?>
<!-- footer end -->
<script type="text/javascript">
	// var a;
	// a=20;
	// var name="Nida Naqvi"
	// console.log(a);
	// console.log(name);

	// var a,b,c;
	// var result;
	// var result1;
	// a=10, b=30, c=50;
	// result=a+b+c;
	// // console.log(result);
	// document.write(result);
	// result1=b-a;
	// console.log(result1);


 // String Concatenation

	/*var fname='Nida';
	var lname='Naqvi';
	// var name=fname+lname;
	// var name=fname+' '+lname;
	var name=`${fname} ${lname}`;
	console.log(name);*/

	/*var marks=33;
	if (marks>=33) {
		console.log("Pass");
	} else {
		console.log("Fail");
	}*/

	var number=33;
	if (number>=33 && number<=39) {
		window.alert('Grade E');
	} else if (number>=40 && number<=49){
		window.alert('Grade D');
	} else if (number>=50 && number<=59){
		window.alert('Grade C');
	} else if (number>=60 && number<=69){
		window.alert('Grade B');
	} else if (number>=70 && number<=79){
		window.alert('Grade A');
	} else if (number>=80 && number<=100){
		window.alert('Grade A+');
	}
	

	else{
		window.alert('Fail');
	}

	

</script>


</body>
</html>



