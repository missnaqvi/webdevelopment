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

	// var number=33;
	// if (number>=33 && number<=39) {
	// 	window.alert('Grade E');
	// } else if (number>=40 && number<=49){
	// 	window.alert('Grade D');
	// } else if (number>=50 && number<=59){
	// 	window.alert('Grade C');
	// } else if (number>=60 && number<=69){
	// 	window.alert('Grade B');
	// } else if (number>=70 && number<=79){
	// 	window.alert('Grade A');
	// } else if (number>=80 && number<=100){
	// 	window.alert('Grade A+');
	// }
	

	// else{
	// 	window.alert('Fail');
	// }

// 	console.log("Welcome to ABC Bank");
// 	console.log("Please press any options from below");
// 	console.log("1. Inquiry");
// 	console.log("2. Fund Transfer");
// 	console.log("3. Exit");

// var opt=1;
// switch(opt)

// {
// case 1:

// console.log("inquiry");
// break;
// case 2:
// console.log("Fund Transfering");
// break;
// case 3:
// console.log("Pls wait for few seconds we are exiting from menu");
// default:
// console.log("Invalid input, pleae try another selection");
// }



// for(var i = 1; i<=1000; i++)

// {
// console.log("your incremented value is",i);

// }

// for(var i = -1; i>=-10; i--)

// {
// console.log("your decremented value is",i);

// }

/*var table=3;

for(var i = 1; i<=10; i++)

{
console.log(table + "x" + i + "=" + table*i) ;

}*/

 /*var i=10;
 while(i>=1){
console.log(i);
i--
 }*/

/*var i=0;
 while(i<=10){
 	if (i%2==0)
console.log(i);
i++
 }*/

/*var i=1;
 while(i<=15){
 	if (i%2==1)
console.log(i);
i++
 }*/

 /*function add(){
	var a=10;
	var b=5;
	var addition=a+b;
	console.log(addition);

}*/
/*add();*/

/*function sub(){
	var a=10;
	var b=5;
	var subtract=a-b;
	console.log(subtract);

}*/
/*sub();*/

/*function mul(){
	var a=10;
	var b=5;
	var multiply=a*b;
	console.log(multiply);

}
mul();


function div(){
	var a=10;
	var b=5;
	var divide=a/b;
	console.log(divide);

}*/
/*div();*/
/*var opt=div;
switch (opt)
{
	case add:
	add();
	break;
	case sub:
	sub();
	break;
	case mul:
	mul();
	break;
	case div:
	div();
	break;
	default:
	console.log('Invalid Input');
}*/

function add(a,b)
{
	var sum = a+b;
	console.log(sum);
}
/*add(2,5);*/

function sub(a,b){
	var subtract=a-b;
	console.log(subtract);

}

function mul(a,b){
	var multiply=a*b;
	console.log(multiply);

}
function div(a,b){
	var divide=a/b;
	console.log(divide);

}

var opt=mul;
switch (opt)
{
case add:
	add(1,2);
	break;
	case sub:
	sub(3,1);
	break;
	case mul:
	mul(2,2);
	break;
	case div:
	div(10,5);
	break;
	default:
	console.log('Invalid Input');
}

var fruits = ['Mango','PineApple','Apple','Orange']
/*console.log(fruits[3]);
console.log(fruits.length-1);*/

/*for (var i = 0; i < fruits.length; i++) {
	fruits[i]
	console.log(fruits[i]);
}*/
var i=0;
while (i < fruits.length)
{
console.log(fruits[i]);
i++;
}

</script>


</body>
</html>



