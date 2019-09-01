<?php
session_start();

$server ="localhost";
$user="root";
$password="";
$db="hostel";

$con =mysqli_connect($server,$user,$password,$db);
//this well check the for the room space avaliabilbity 
$str1 ="SELECT e_room_no , enopproom ,tnoppr FROM exective_room;";
$result =$con->query($str1);
if($result->num_rows >0){
   
    $temp = 1;
    $nproom=0;
    $tnproom=0;
    

    while($row=$result->fetch_assoc()){
        $nproom=$row['enopproom'];
        $tnoroom=$row['tnoppr'];
        
        //this condition can insert the record to that spacific room no 
        if($row['e_room_no']==$temp and $row['enopproom']<2 ){
 
           //session variable created for Bunk room no  which is brno , which are use further 
            $_SESSION['erno']=$row['e_room_no'];
            $rno=$_SESSION['erno'];
            //incremet the value of person by one in the room 
            $nproom=$nproom+1;

        //this can update that specific room no and book them
            $conn =mysqli_connect("localhost","root","","hostel");
  
             $str2="UPDATE exective_room SET enopproom='$nproom' WHERE e_room_no='$rno';   ";
            $run_query =mysqli_query($conn,$str2);
            if(isset($run_query)){
                $_SESSION['button_exective']=2;
                include("reservation_step2.222.php");
            }

            break;    
        }
        else{
        $temp++;
        }
    
    }
}

?>