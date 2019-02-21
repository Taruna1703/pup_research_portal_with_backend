<?php
$con=mysqli_connect("localhost","root","","pupa");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!--Date Picker css-->
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <!--Main css-->
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Pup Research Branch</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
       <a class="navbar-brand" href="#">
       <img src="index_01.gif"  alt="">
       </a>
    </nav>
   <?php 
    if(isset($_POST['ss'])){
    $reg_no=$_POST['reg_no'];
  }
    $cmd="select * from info where regno=$reg_no";
        $res=mysqli_query($con,$cmd);
        while($row=mysqli_fetch_array($res))
        {
   ?>
    <div class="container">
    <form action="signupdatabase.php" method="post" enctype="multipart/form-data">
    <div id="reg-no">
        <div class="form-group row">
             <label for="inputregno" class="col-sm-2 col-form-label">Registration Number</label>
             <div class="col-sm-10">
                 <input type="text" value="<?php echo $row[0];?>"name="reg_no" class="form-control" id="inputregno" placeholder="Registration Number">
             </div>
             <div class="invalid-feedback">
                Please choose a Registration Number.
            </div>
        </div>
       
      
    </div>
    <div id="candidate-info">
      <div>
        <div class="alert alert-dark" role="alert">
            <a href="#" class="alert-link">CANDIDATE INFORMATION</a>
        </div>
      </div>
      
        <div class="form-row">
             <div class="col-6 col-padding">
                <label for="Name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $row[1];?>">
             </div>
             <div class="col-6 col-padding">
                <label for="Gender">Gender</label>
                <select class="form-control" value="<?php echo $row[2];?>" id="exampleFormControlSelect1" name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
             </select>
             </div>          
          </div>
          <div class="form-row">
            <div class="col-6 col-padding">
                <label for="Category">Category</label>
                <select class="form-control" id="exampleFormControlSelect1" value="<?php echo $row[3];?>" name="category">
                <option value="General">General</option>
                <option value="Sc">SC</option>
                <option value="OBC">OBC</option>
             </select>
            </div>
            <div class="col-6 col-padding">
                <label for="Foreign Student Category">Foreign Student Category</label>
                <select class="form-control" id="exampleFormControlSelect1" value="<?php echo $row[4];?>" name="freign_stu_cat">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
             </select>
             </div>
          </div>
          <div class="form-row">
            <div class="col-6 col-padding">
                <label for="Father Namer">Father Name</label>
                <input type="text" class="form-control" placeholder="Father Name"value="<?php echo $row[5];?>" name="fname">
            </div>
            <div class="col-6 col-padding">
                <label for="Mother Name">Mother Name</label>
                <input type="text" class="form-control" placeholder="Mother Name"value="<?php echo $row[6];?>" name="mname">
             </div>
          </div>
          <div class="form-group" id="Permanent-Address">
              <label for="Permanent Address">Permanent Address</label>
              <div class="form-row">
                 <div class="col-4 col-padding">
                    <label for="Nationalityr">Nationality</label>
                    <input type="text" class="form-control" placeholder="Nationality"value="<?php echo $row[7];?>" name="p_nationality" id="p_nationality">
                 </div>
                 <div class="col-4 col-padding">
                    <label for="Stater">State</label>
                    <input type="text" class="form-control" placeholder="State" value="<?php echo $row[8];?>"name="p_state" id="p_state">
                 </div> 
                 <div class="col-4 col-padding">
                    <label for="City">City</label>
                    <input type="text" class="form-control" placeholder="City"value="<?php echo $row[9];?>" name="p_city" id="p_city">
                 </div>             
              </div>
              <div class="form-row">
                 <div class="col-4 col-padding">
                    <label for="District">District</label>
                    <input type="text" class="form-control" placeholder="District" value="<?php echo $row[10];?>"name="p_district" id="p_district">
                 </div>
                 <div class="col-4 col-padding">
                    <label for="Country">Country</label>
                    <input type="text" class="form-control" placeholder="Country"value="<?php echo $row[11];?>" name="p_country" id="p_country">
                 </div> 
                 <div class="col-4 col-padding">
                    <label for="Pincode">Pincode</label>
                    <input type="text" class="form-control" placeholder="Pincode"value="<?php echo $row[12];?>" name="p_pincode" id="p_pincode">
                 </div>             
              </div>
              <div class="col-12 col-padding">
                <label for="Address">Address</label>
                <input type="text" class="form-control" placeholder="Address" value="<?php echo $row[13];?>"name="p_address" id="p_address">
              </div>
          </div>
          <div class="form-group" id="Correspondance-Address">
              <div class="row">
                <div class="col-auto">
                  <label for="Correspondance Address">Correspondance Address</label>
                </div>
               
              </div>
              <div class="form-row">
                 <div class="col-4 col-padding">
                    <label for="Nationalityr">Nationality</label>
                    <input type="text" class="form-control" placeholder="Nationality"value="<?php echo $row[14];?>" name="c_nationality" id="c_nationality">
                 </div>
                 <div class="col-4 col-padding">
                    <label for="Stater">State</label>
                    <input type="text" class="form-control" placeholder="State" value="<?php echo $row[15];?>"name="c_state" id="c_state">
                 </div> 
                 <div class="col-4 col-padding">
                    <label for="City">City</label>
                    <input type="text" class="form-control" placeholder="City"value="<?php echo $row[16];?>" name="c_city" id="c_city">
                 </div>             
              </div>
              <div class="form-row">
                 <div class="col-4 col-padding">
                    <label for="District">District</label>
                    <input type="text" class="form-control" placeholder="District" value="<?php echo $row[17];?>"name="c_district" id="c_district">
                 </div>
                 <div class="col-4 col-padding">
                    <label for="Country">Country</label>
                    <input type="text" class="form-control" placeholder="Country" value="<?php echo $row[18];?>"name="c_country" id="c_country">
                 </div> 
                 <div class="col-4 col-padding">
                    <label for="Pincode">Pincode</label>
                    <input type="text" class="form-control" placeholder="Pincode" value="<?php echo $row[19];?>"name="c_pincode" id="c_pincode">
                 </div>             
              </div>
              <div class="col-12 col-padding">
                <label for="Address">Address</label>
                    <input type="text" class="form-control" placeholder="Address" value="<?php echo $row[20];?>"name="c_address" id="c_address">
              </div>
          </div>
           <div class="form-row">
                 <div class="col-6 col-padding">
                    <label for="Phone">Phone</label>
                    <input type="text" class="form-control" placeholder="Phone" value="<?php echo $row[21];?>"name="phone">
                 </div>
                 <div class="col-6 col-padding">
                    <label for="Mobile">Mobile</label>
                    <input type="text" class="form-control" placeholder="Mobile"value="<?php echo $row[22];?>" name="mobile">
                 </div>             
          </div>
          <div class="form-row">
            <div class="form-group col-6">
             <label for="exampleFormControlSelect1">Is Punjabi Examination Passed</label>
             <select class="form-control" id="exampleFormControlSelect1" value="<?php echo $row[23];?>"name="is_punj_examin_passed">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
             </select>
            </div>
            <div class="form-group col-6">
             <label for="exampleFormControlSelect1">Level of Punjabi Examination</label>
             <select class="form-control" id="exampleFormControlSelect1"value="<?php echo $row[24];?>" name="level_of_punj_examin">
                <option value="10th">10th</option>
                <option value="12th">12th</option>
                <option value="Graduation">Graduation</option>
                <option value="Post-Graduation">Post-Graduation</option>
                <option value="None">None</option>             
             </select>
            </div>
          </div>
          <div class="form-row">
            <div class="col-6">
               <label for="Date Picker">Date of Birth</label>
               <input type="date" class="form-control"value="<?php echo $row[25];?>" name="dob">
               <!--type="date" value="<?php //echo date("Y-m-d");?>"-->
            </div>
            <div class="form-group col-md-6">
               <label for="inputEmail4">Email</label>
               <input type="email" class="form-control" value="<?php echo $row[26];?>" id="inputEmail4" placeholder="Email" name="email">
            </div>
          </div>
          <div class="form-group">
             <label for="exampleFormControlFile1">Select Profile Picture</label>
             <!--<input type="file" name="slider">-->
             <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profile_pic">
          </div>
         
    </div>
  </form>
  <form>
    <div class="Registration-Information">
      <div>
        <div class="alert alert-dark" role="alert">
            <a href="#" class="alert-link">REGISTRATION INFORMATION</a>
           
        </div>
      </div>
    
      
      <div class="form-row">
         <div class="form-group col-md-6">
            <label for="Faculty">Faculty</label>
            <input type="text" class="form-control" id="Faculty" placeholder="Faculty" name="faculty" >
         </div>
         <div class="form-group col-md-6">
            <label for="Department">Department</label>
            <input type="text" class="form-control" id="Department" placeholder="Department" name="depart" >
         </div>
      </div>
      <div class="form-row">
         <div class="form-group col-md-6">
            <label for="Extempted from fee">Extempted from fee</label>
            <input type="text" class="form-control" id="Extempted from fee" placeholder="Extempted from fee" name="extempted_from_fee" >
         </div>
         <div class="form-group col-md-6">
            <label for="exampleFormControlSelect1">JRF Holder</label>
             <select class="form-control" id="exampleFormControlSelect1" name="jrf_holder" >
                <option value="Yes">Yes</option>
                <option value="No">No</option>
             </select>
         </div>
      </div> 
      <div class="form-row">
         <div class="form-group col-md-6">
            <label for="Supervisor">Supervisor</label>
            <input type="text" class="form-control" id="Supervisor" placeholder="Supervisor" name="supervisor"  >
         </div>
         <div class="form-group col-md-6">
            <label for="Select Co-Supervisor">Select Co-Supervisor</label>
            <input type="text" class="form-control" id="Select Co-Supervisor" placeholder="Select Co-Supervisor" name="co_supervisor" >
         </div>
      </div>
      <div class="form-row">
          <div class="form-group col-md-6">
            <label for="exampleFormControlSelect1">Mode of Phd</label>
             <select class="form-control" id="exampleFormControlSelect1" name="mode_of_phd" >
                <option value="Regular">Regular</option>
                <option value="Part Time">Part Time</option>
             </select>
          </div>
           <div class="form-group col-md-6">
            <label for="exampleFormControlSelect1">Is course work done?</label>
             <select class="form-control" id="exampleFormControlSelect1" name="course_work" >
                <option value="Yes">Yes</option>
                <option value="No">No</option>
             </select>
           </div>
      </div>
       <div class="form-row">
                 <div class="col-6 col-padding">
                    <label for="University Registration Number">University Registration Number</label>
                    <input type="text" class="form-control" placeholder="University Registration Number" name="uni_reg_no" >
                 </div>
                 <div class="col-6 col-padding">
                    <label for="Fellowship Id">Fellowship Id</label>
                    <input type="text" class="form-control" placeholder="Fellowship Id" name="fellowship_id" >
                 </div>             
       </div>
       <div class="form-row">
          <div class="col-12 col-padding">
                    <label for="Research Title">Research Title</label>
                    <input type="text" class="form-control" placeholder="Research Title" name="research_titles" >
          </div>           
       </div>
     
    </div>
    <div class="Upload Thesis">
      <div>
        <div class="alert alert-dark" role="alert">
            <a href="#" class="alert-link">Upload Thesis</a>
        </div>
      </div>
      
        <div class="form-row">
                 <div class="col-6 col-padding">
                    <label for="University Name">University Name</label>
                    <input type="text" class="form-control" placeholder="Punjabi University,Patiala" value="Punjabi University,Patiala" name="uni_name" readonly >
                 </div>
                 <div class="col-6 col-padding">
                    <label for="Department/Place">Department/Place</label>
                    <input type="text" class="form-control" placeholder="Department/Place" name="department_place" >
                 </div>             
       </div>
       <div class="form-row">
                 <div class="col-6 col-padding">
                    <label for="Name of Researcher">Name of Researcher</label>
                    <input type="text" class="form-control" placeholder="e.g. Ghandhi M.K" name="name_of_research" >
                 </div>
                 <div class="col-6 col-padding">
                    <label for="Name of Guide">Name of Guide</label>
                    <input type="text" class="form-control" placeholder="Don't Use Dr./Prof" name="guide_name" >
                 </div>             
       </div>
        <div class="form-row">
                 <div class="col-6 col-padding">
                    <label for="Type of Degree">Type of Degree</label>
                    <input type="text" class="form-control" value="Phd" readonly name="type_of_degree" >
                 </div>
                 <div class="col-6">
                   <label for="Date Picker">Date of Birth</label>
                   <input type="date" class="form-control" >
                    <!--<input id="datepicker2" value="<?php echo date("Y-m-d");?>">-->
            </div>     
       </div>
        <div class="form-row">
                 <div class="col-6">
                    <label for="Date Picker">Awarded Date</label>
                    <input type="date" class="form-control" name="awarded_date" >
                    <!--<input id="datepicker3" name="awarded_date" value="<?php echo date("Y-m-d");?>">-->
                 </div>   
                 <div class="col-6 col-padding">
                    <label for="Completed date">Completed date</label>
                     <select class="form-control" id="exampleFormControlSelect1" name="completed_date" >
                      <option value="1980">1980</option>
                      <option value="1981">1981</option>
                      <option value="1982">1982</option>
                      <option value="1983">1983</option>
                      <option value="1984">1984</option>
                      <option value="1985">1985</option>
                      <option value="1986">1986</option>
                      <option value="1987">1987</option>
                      <option value="1988">1988</option>
                      <option value="1989">1989</option>
                      <option value="1990">1990</option>
                      <option value="1991">1991</option>
                      <option value="1992">1992</option>
                      <option value="1993">1993</option>
                      <option value="1994">1994</option>
                      <option value="1995">1995</option>
                      <option value="1996">1996</option>
                      <option value="1997">1997</option>
                      <option value="1998">1998</option>
                      <option value="1999">1999</option>
                      <option value="2000">2000</option>
                      <option value="2001">2001</option>
                      <option value="2002">2002</option>
                      <option value="2003">2003</option>
                      <option value="2004">2004</option>
                      <option value="2005">2005</option>
                      <option value="2006">2006</option>
                      <option value="2007">2007</option>
                      <option value="2008">2008</option>
                      <option value="2009">2009</option>
                      <option value="2010">2010</option>
                      <option value="2012">2011</option>
                      <option value="2012">2012</option>
                      <option value="2013">2013</option>
                      <option value="2014">2014</option>
                      <option value="2015">2015</option>
                      <option value="2016">2016</option>
                      <option value="2017">2017</option>
                      <option value="2018">2018</option>
                      <option value="2019">2019</option>
                      </select>
                 </div>                           
       </div>
      
    </div>
    <div class="Thesis-Details">
      <div>
        <div class="alert alert-dark" role="alert">
            <a href="#" class="alert-link">Thesis Details</a>
        </div>
      </div>
       
       <div class="form-row">
          <div class="col-12 col-padding">
                    <label for="Title">Title (With Subtitle)</label>
                    <input type="text" class="form-control" placeholder="Title" name="title" >
          </div>           
       </div>
       <div class="form-group">
           <label for="exampleFormControlTextarea1">Abstract</label>
           <textarea class="form-control" id="Abstract" rows="5" maxlength="2048" name="abstract" ></textarea>
           <small id="passwordHelpBlock" class="form-text text-muted">Max Characters: 2048</small>
       </div>
       <div class="form-group">
         <div class="form-row">
           <div class="col-12 col-padding">
             <label for="Keywords">Select Three levels of subject</label>
           </div>
          <div class="form-row">
             <div class="col-12 col-padding">
               <input type="text" class="form-control" placeholder="Select" name="first_level_of_subject" >
             </div>            
          </div>
          <div class="form-row">
             <div class="col-12 col-padding">
               <input type="text" class="form-control" placeholder="Select" name="second_level_of_subject" >
             </div>            
          </div>
          <div class="form-row">
             <div class="col-12 col-padding">
               <input type="text" class="form-control" placeholder="Select" name="third_level_of_subject" >
             </div>            
          </div>
         </div>
         <div class="form-row">
           <label for="Language">Language</label>
           <input type="text" class="form-control" placeholder="Language" name="language" >
         </div>
         <div class="form-row">
           <label for="Submitted by:">Submitted by:</label>
           <input type="text" class="form-control" placeholder="University" name="submitted_by" >
         </div>
         <div class="form-row">
           <label for="Copyrights:">Copyrights:</label>
           <input type="text" class="form-control" placeholder="University" name="copyrights" >
         </div>
       </div>       
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Upload Files:</label>
         </div>
       </div>
        <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files1 (Title)</label>
           <input type="file" class="form-control-file" id="exampleFormControlFile1" name="files1" >
         </div>
       </div>
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files2 (Certificates):</label>
           <input type="file" class="form-control-file" id="exampleFormControlFile1" name="files2" >
         </div>
       </div>
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files3 (Preliminary Pages):</label>
           <input type="file" class="form-control-file" id="exampleFormControlFile1"name="files3" >
         </div>
       </div>
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files4 (Chapter1):</label>
           <input type="file" class="form-control-file" id="exampleFormControlFile1" name="files4" >
         </div>
       </div>
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files5 (Chapter2)</label>
           <input type="file" class="form-control-file" id="exampleFormControlFile1" name="files5" >
         </div>
       </div>
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files6 (Chapter3)</label>
           <input type="file" class="form-control-file" id="exampleFormControlFile1" name="files6" >
         </div>
       </div>
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files7 (Chapter4)</label>
           <input type="file" class="form-control-file" id="exampleFormControlFile1" name="files7" >
         </div>
       </div>
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files8 (Chapter5)</label>
           <input type="file" class="form-control-file" id="exampleFormControlFile1" name="files8" >
         </div>
       </div>
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files9 (Chapter6)</label>
           <input type="file" class="form-control-file" id="exampleFormControlFile1" name="files9" >
         </div>
       </div>
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files10 (Chapter7)</label>
           <input type="file" class="form-control-file" id="exampleFormControlFile1" name="files10" >
         </div>
       </div>
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files11 (Chapter8)</label>
           <input type="file" class="form-control-file" id="exampleFormControlFile1" name="files11" >
         </div>
       </div>
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files12 (Chapter9)</label>
           <input type="file" class="form-control-file" id="exampleFormControlFile1" name="files12" >
         </div>
       </div>
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files13 (Chapter10)</label>
           <input type="file" class="form-control-file" id="exampleFormControlFile1" name="files13" >
         </div>
       </div>
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files14 (Chapter11)</label>
           <input type="file" class="form-control-file" id="exampleFormControlFile1" name="files14" >
         </div>
       </div>
    </div>
<?php 
  }
  ?>
    <div class="clearfix"></div>
    
    </form>
    <div class="form-group row">
            <div class="col-sm-12 text-center">
              <input type="submit" class="btn btn-primary btn-lg btn-block" id="print" name="print" value="Print" onclick="window.print();">
            </div>
      </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
     <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="main.js"></script>
  </body>
</html>