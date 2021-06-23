<?php
session_start();
include 'header.php';
?>
<style>
.frm-css
{

 margin:30px auto 30px auto;
 width:60%; 
  
  padding: 10px;

}

 .center {
  margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
}



.vertical-center {
  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
.but1
{
  border-radius: 4px;
  background-color: #fb246a;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;

}




</style>
        <div class="frm-css" class="center">
           <h2 style="text-align: center;">Submitted Succesfully</h2>
           <br>
           <h5 style="text-align: center;">Your Form Has Been Submitted Successfully. <br>We Will get Back To Your soon</h5>
           <h6 style="text-align: center;">Thank You !!!!!!!!!!!</h6>
           <h4 style="text-align: center; margin-top: 25px;" ><button class="but1"><a href="index.php" >Home</a></button></h4>  
       </div> 
        
  <?php include 'footer.php';?>