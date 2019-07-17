<form action="" method="POST">
	<input type="text" name="year" placeholder="input a year...">
	<input type="submit" name="submit" value="submit">	
</form>

<?php 
	if($_POST){
		$year = $_POST['year'];
	
	if(!is_numeric($year)){
		echo "string not allowed please input a valid year!";
	}
	if($year%4 ==0 && $year%100!=0 || $year%400==0){
		echo "$year is a leap year";
	}else{
		echo "$year is not a leap year";
	}
}


 ?>

 <?php 
 function IsLeap($year){
 	if($year%4==0 && $year%100!=0 || $year%400==0){
 		return 1;
 	}
 }
 for($year=1991; $year<2020; $year++){
 	if(IsLeap($year)){
 		echo $year.": is a leap year <br>";
}else{
 		echo $year.": is not a leap year<br>";
}
 }



  ?>