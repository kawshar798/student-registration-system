<?php include "inc/header.php"?>
                    <div class="form-left">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name"> </div>
                            <div class="form-group">
                                <input type="text" id="firstname" placeholder="First name" class="form-control" name="fname"> </div>
                            <div class="form-group">
                                <input type="text" id="umid" placeholder="StudentID" class="form-control" name="sid"> </div>
                            <div class="form-group">
                                <input type="email" placeholder="Email Address" id="email" class="form-control" name="email"> </div>
                            <div class="form-group">
                                <select  class="form-control"  id="slot_time" name="slot_time" required>
                                    <option value="">Choose Slot</option>
                                    <option value="Saturday" required>Saturday 10-11.30. 
                                        <?php
			                              $slot_time="Saturday";
			                    $result =mysqli_query($con,"SELECT * FROM student_reg WHERE time_slot = '$slot_time'");
			           $num_rows =15-$result->num_rows;
			           echo " ".$num_rows." "."seats remaining";
			  ?>
                                    </option>
                                    <option value="Monday" required>Sunday 1.00-2.30.
                                        <?php
			  $slot_time="Monday";
			  $result =mysqli_query($con,"SELECT * FROM student_reg WHERE time_slot = '$slot_time'");
			 $num_rows =18-$result->num_rows;
			echo " ".$num_rows." "."seats remaining";
			  ?>
                                    </option>
                                    <option value="Thrusday" required>Thrusday 8.30-10.00
                                        <?php
			  
			  $slot_time="Thrusday";
			  $result =mysqli_query($con,"SELECT * FROM student_reg WHERE time_slot = '$slot_time'");
			 $num_rows =12-$result->num_rows;
			echo " ".$num_rows." "."seats remaining";
			  ?>
                                    </option>
                                </select>
                            </div>
                            <input type="submit" class="btn btn-success" name="register" value="Register">
                            <input type="reset" name="clear" class="btn btn-success" value="clear"> </form>
                    </div>
                    <div class="form-right">
                        <h2>Registration <span>form</span>
                        
                        <img src="img/student.png" alt="Student">
                </div>    
            </div>
        </div>
             <div class="well ">
             <p class="text-center">Copyright &copy;2017.Developed by <span>Kawshar</span></p> 
            </div>
    <?php include "inc/footer.php"?>