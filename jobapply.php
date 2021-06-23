<?php
session_start();
include 'header.php';
?>
<style>
.center {
  margin: auto;
  margin-top: 0;
  width: 60%;
  padding: 10px;
}
.job
{
padding:70px;
}
.heding
{
text-align: center;
background-color: black;
}
legend{
  font-weight: 330px;
}
.column {
  float: left;
  width: 50%;

}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
input:required {
  background-color: #eaeaea;
}

</style>  
</style>
<div class="heding" ><h4 style="color:white;font-size: 27px;margin-top: 30px; margin-bottom: -30px;padding: 10px" >Apply Now</h4>
</div>

<form method="post" action="process.php" class="job">
   <legend >Basic Details : -</legend>
   <div class="form-group" class="center">
   <label for="exampleInputEmail1">Enter Your Name <span class="required">* :</span></label>
   <input type="Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="name" required="required">
   </div>

   <div class="form-group" class="center">
   <label for="exampleInputEmail1">Phone Number <span class="required">* :</span></label>
   <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone Number" name="numbe" required="required" maxlength="10">
   </div>

   <div class="form-group" class="center">
   <label for="exampleInputEmail1">Email Id <span class="required">* :</span></label>
   <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required="required">
   </div>


   <div class="form-group" class="center">
   <label for="exampleInputEmail1">Address <span class="required">* :</span></label>
   <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address" name="address" required="required">
   </div>

  <div class="form-group" class="center">
  <label for="exampleInputEmail1">Date Of Birth <span class="required">* :</span></label>
  <input type="date" id="datemax"  max="2000-12-31" min="1979-12-31" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="MM_DD_YYYY" name="dob" required="required" >
  </div>

  <div class="form-group" class="form-group" >
   <label for="exampleInputEmail1">Gender <span class="required">* :</span></label> <br>
   <input type="radio" id="male" name="gender" value="male" >
   <label for="male" style="margin-right: 20px;">Male </label>
   <input type="radio" id="female" name="gender" value="female">
   <label for="female" style="margin-right: 20px;">Female </label>
   <input type="radio" id="other" name="gender" value="other">
   <label for="other" style="margin-right: 20px;">Other </label></div>
</div>
 
   <!-- basic deatisl end -->
   <!-- education details -->
   <div>
   <legend>Basic Educational Details : - </legend><br>
   <legend style="font-size: 12px:">SSC Details :</legend>
    <div class="form-group" class="center">
   <label for="exampleInputEmail1">Enter Your Name (As Per SSC Marksheet)<span class="required">* :</span></label>
   <input type="Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="sname" required="required">
   </div>

   <div class="form-group" class="center">
   <label for="exampleInputEmail1">Marks Obtained <span class="required">* :</span></label>
   <input type="Number" class="form-control"  placeholder="Marks Obtained" name="snumber" required="required" maxlength="3" max="500">
   </div>

   <div class="form-group" class="center">
   <label for="exampleInputEmail1">Percentage Obtained <span class="required">* :</span></label>
   <input type="Percentage" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Percentage" name="sPercentage" required="required" maxlength="3" max="100">
   </div>



   <label>Upload Your SSC Markesheet</label><br>
   <input type="File" name="SSC" required="required">
   </div> <br>

   <!-- HSC EDUCATIONAL DETAILS -->
   <legend style="font-size: 12px:">HSC Details :</legend><br>
    <div class="form-group" class="center">
   <label for="exampleInputEmail1">Enter Your Name (As Per HSC Marksheet)<span class="required">* :</span></label>
   <input type="Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="hname" required="required" >
   </div>

   <div class="form-group" class="center">
   <label for="exampleInputEmail1">Marks Obtained <span class="required">* :</span></label>
   <input type="Number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Marks Obtained" name="hnumber" required="required" maxlength="3" max="500">
   </div>

   <div class="form-group" class="center">
   <label for="exampleInputEmail1">Percentage Obtained <span class="required">* :</span></label>
   <input type="Percentage" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Percentage" name="hPercentage" required="required" maxlength="2" max="100">
   </div>
    <div>
   <label>Upload Your HSC Markesheet</label><br>
   <input type="File" name="HSC" required="required">
   </div><br>

    <!-- HSC EDUCATIONAL DETAILS -->
   
   <legend style="font-size: 12px:">Degree  Details :</legend><br>
   <div class="form-group" class="center">
   <label for="exampleInputEmail1">Enter Your Name (As Per Degree Marksheet)<span class="required">* :</span></label>
   <input type="Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="upname" required="required">
   </div>

   <div class="form-group" class="center">
   <label for="exampleInputEmail1">Marks Obtained <span class="required">* :</span></label>
   <input type="Number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Marks Obtained" name="upnumber" required="required" maxlength="3" max="500">
   </div>

   <div class="form-group" class="center">
   <label for="exampleInputEmail1">Percentage Obtained <span class="required">* :</span></label>
   <input type="Percentage" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Percentage" name="upPercentage" required="required" >
   </div>
   <label>Upload Your Degree Markesheet</label><br>
   <input type="File" name="Degree" required="required" >
   </div>
   </div>
   <br><br><br>
   <div>

   <legend>Upload Documents :- </legend></div><br>
   <div>
   <label >Upload Your Image <span class="required">* :</span></label>
   <input type="File" name="Image" required="required" style="float: right;">
   </div>
 <br>
    <div>
   <label >Upload Your Sign <span class="required">* :</span></label>
   <input type="File" name="Sign" required="required" style="float: right;">
   </div>
   <br>
    <div>
   <label >Upload Your Resume <span class="required">* :</span></label>
   <input type="File" name="Resume" required="required" style="float: right;">
   </div>
<br><br>   
 <div class="form-group form-check">
  <input type="checkbox" class="form-check-input" id="exampleCheck1">
  <label class="form-check-label" for="exampleCheck1">I hereby declare that the information provided is true and correct. I also understand that any willful
dishonesty may render for refusal of this application or immediate termination of employment.</label>
  </div>
  <button type="submit" name="submit" value="submit" class="btn btn-primary" style="width: 30%">Apply For Job</button>
</form>

<!-- Footer File Start -->
<?php include 'footer.php';?>
         
<!-- Header File end -->

<!-- Job application form -->

