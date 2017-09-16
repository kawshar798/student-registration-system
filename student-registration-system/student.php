<?php include('connect.php');?>

<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$name = $_POST['name'];
        $fname = $_POST['fname'];
         $email= $_POST['email'];
         $sid= $_POST['sid'];
         $slot_time= $_POST['slot_time'];
       if($name = ""){
           $err = "<div class='alert alert-danger'><strong>ERROR !</strong>please enter valid email .</div>";
       }
		
         if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){
             $err = "<div class='alert alert-danger'><strong>ERROR !</strong>please enter valid email .</div>";
         }
        
        
        
        
		
		$sql = "INSERT INTO student_reg (email,name,fname,sid,time_slot) VALUES   ('$email','$name','$fname','$sid','$slot_time')";
		$result =mysqli_query($con,"SELECT * FROM student_reg WHERE sid= '$sid'");
 
         $result_slot =mysqli_query($con,"SELECT * FROM student_reg WHERE time_slot= '$slot_time'");
        
        $num_rows =$result_slot ->num_rows;
        
       if(($slot_time=="Saturday" && $num_rows<30)||($slot_time=="Monday" && $num_rows < 30)||            ($slot_time=="Thrusday" &&    $num_rows<30)){
	   if(mysqli_num_rows($result) < 1){
		if(mysqli_query($con,$sql)){
           $mgs = "<strong>Registration Success.</strong>";
		}else{
             $err ="<strong>Error!!!</strong>Registration failed.";
		}
        }else{
           $err ="<strong>Error!!!</strong>You have already Registrated!.";
         }

}else{
           $err ="This slot is full";
         }	
     
}