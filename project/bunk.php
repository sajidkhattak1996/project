<?php
session_start();

$server ="localhost";
$user="root";
$password="";
$db="hostel";

$con =mysqli_connect($server,$user,$password,$db);
//this well check the for the room space avaliabilbity 
$str1 ="SELECT b_room_no , bnopproom ,tnoppr FROM bunk_room;";
$result =$con->query($str1);
if($result->num_rows >0){
   
    $temp = 1;
    $nproom=0;
    $tnproom=0;
    

    while($row=$result->fetch_assoc()){
        $nproom=$row['bnopproom'];
        $tnoroom=$row['tnoppr'];
        
        //this condition can insert the record to that spacific room no 
        if($row['b_room_no']==$temp and $row['bnopproom']<6){
 
           //session variable cregte fir Bunk room no  which is brno , which are use further 
            $_SESSION['brno']=$row['b_room_no'];
            $rno=$_SESSION['brno'];
            //incremet the value of person by one in the room 
            $nproom=$nproom+1;

        //this can update that specific room no and book them
            $conn =mysqli_connect("localhost","root","","hostel");
  
             $str2="UPDATE bunk_room SET bnopproom='$nproom' WHERE b_room_no='$rno';   ";
            $run_query =mysqli_query($conn,$str2);
            if(isset($run_query)){
                $_SESSION['button_bunk']=6;
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