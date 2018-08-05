<?php
//function 
function data_years($year1,$year2){

	for($i=2010;$i<=2020;$i++){   //loop 
		if($year1<2010||$year2>2020){
			echo"this is year for employee<br>";

}
else{
		echo"$i<br>";   //The year prints from 2010 to 2020
 }
}
}
echo data_years(2012,2019)  //input function 

?>