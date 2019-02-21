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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" href="#">PREFRENCES</a>
              </li>
              <li class="nav-item">
                   <a class="nav-link" href="#">CANDIDATES</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">FACULTY</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">DEPARTMENT</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">SUPERVISOR</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">ENROLLMENT</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="search.html">SEARCH</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">NOTICES</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">BACKUP</a>
              </li>
          </ul>
        </div>
    </nav>
    <div class="container">
    <form action="signupdatabase.php" method="post" enctype="multipart/form-data">
    <div id="reg-no">
        <div class="form-group row">
             <label for="inputregno" class="col-sm-2 col-form-label">Registration Number</label>
             <div class="col-sm-10">
                 <input type="text" name="reg_no" class="form-control" id="inputregno" placeholder="Registration Number">
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
                <input type="text" name="name" class="form-control" placeholder="Name">
             </div>
             <div class="col-6 col-padding">
                <label for="Gender">Gender</label>
                <select class="form-control" id="exampleFormControlSelect1" name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
             </select>
             </div>          
          </div>
          <div class="form-row">
            <div class="col-6 col-padding">
                <label for="Category">Category</label>
                <select class="form-control" id="exampleFormControlSelect1" name="category">
                <option value="General">General</option>
                <option value="Sc">SC</option>
                <option value="OBC">OBC</option>
             </select>
            </div>
            <div class="col-6 col-padding">
                <label for="Foreign Student Category">Foreign Student Category</label>
                <select class="form-control" id="exampleFormControlSelect1" name="freign_stu_cat">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
             </select>
             </div>
          </div>
          <div class="form-row">
            <div class="col-6 col-padding">
                <label for="Father Namer">Father Name</label>
                <input type="text" class="form-control" placeholder="Father Name" name="fname">
            </div>
            <div class="col-6 col-padding">
                <label for="Mother Name">Mother Name</label>
                <input type="text" class="form-control" placeholder="Mother Name" name="mname">
             </div>
          </div>
          <div class="form-group" id="Permanent-Address">
              <label for="Permanent Address">Permanent Address</label>
              <div class="form-row">
                 <div class="col-4 col-padding">
                    <label for="Nationalityr">Nationality</label>
                    <input type="text" class="form-control" placeholder="Nationality" name="p_nationality" id="p_nationality">
                 </div>
                 <div class="col-4 col-padding">
                    <label for="Stater">State</label>
                    <input type="text" class="form-control" placeholder="State" name="p_state" id="p_state">
                 </div> 
                 <div class="col-4 col-padding">
                    <label for="City">City</label>
                    <input type="text" class="form-control" placeholder="City" name="p_city" id="p_city">
                 </div>             
              </div>
              <div class="form-row">
                 <div class="col-4 col-padding">
                    <label for="District">District</label>
                    <input type="text" class="form-control" placeholder="District" name="p_district" id="p_district">
                 </div>
                 <div class="col-4 col-padding">
                    <label for="Country">Country</label>
                    <input type="text" class="form-control" placeholder="Country" name="p_country" id="p_country">
                 </div> 
                 <div class="col-4 col-padding">
                    <label for="Pincode">Pincode</label>
                    <input type="text" class="form-control" placeholder="Pincode" name="p_pincode" id="p_pincode">
                 </div>             
              </div>
              <div class="col-12 col-padding">
                <label for="Address">Address</label>
                <input type="text" class="form-control" placeholder="Address" name="p_address" id="p_address">
              </div>
          </div>
          <div class="form-group" id="Correspondance-Address">
              <div class="row">
                <div class="col-auto">
                  <label for="Correspondance Address">Correspondance Address</label>
                </div>
                <div class="col-auto">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" onclick="return auto_fill_address();">
                    <label class="form-check-label" for="defaultCheck1">
                      Same as Permanent Address
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-row">
                 <div class="col-4 col-padding">
                    <label for="Nationalityr">Nationality</label>
                    <input type="text" class="form-control" placeholder="Nationality" name="c_nationality" id="c_nationality">
                 </div>
                 <div class="col-4 col-padding">
                    <label for="Stater">State</label>
                    <input type="text" class="form-control" placeholder="State" name="c_state" id="c_state">
                 </div> 
                 <div class="col-4 col-padding">
                    <label for="City">City</label>
                    <input type="text" class="form-control" placeholder="City" name="c_city" id="c_city">
                 </div>             
              </div>
              <div class="form-row">
                 <div class="col-4 col-padding">
                    <label for="District">District</label>
                    <input type="text" class="form-control" placeholder="District" name="c_district" id="c_district">
                 </div>
                 <div class="col-4 col-padding">
                    <label for="Country">Country</label>
                    <input type="text" class="form-control" placeholder="Country" name="c_country" id="c_country">
                 </div> 
                 <div class="col-4 col-padding">
                    <label for="Pincode">Pincode</label>
                    <input type="text" class="form-control" placeholder="Pincode" name="c_pincode" id="c_pincode">
                 </div>             
              </div>
              <div class="col-12 col-padding">
                <label for="Address">Address</label>
                    <input type="text" class="form-control" placeholder="Address" name="c_address" id="c_address">
              </div>
          </div>
           <div class="form-row">
                 <div class="col-6 col-padding">
                    <label for="Phone">Phone</label>
                    <input type="text" class="form-control" placeholder="Phone" name="phone">
                 </div>
                 <div class="col-6 col-padding">
                    <label for="Mobile">Mobile</label>
                    <input type="text" class="form-control" placeholder="Mobile" name="mobile">
                 </div>             
          </div>
          <div class="form-row">
            <div class="form-group col-6">
             <label for="exampleFormControlSelect1">Is Punjabi Examination Passed</label>
             <select class="form-control" id="exampleFormControlSelect1" name="is_punj_examin_passed">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
             </select>
            </div>
            <div class="form-group col-6">
             <label for="exampleFormControlSelect1">Level of Punjabi Examination</label>
             <select class="form-control" id="exampleFormControlSelect1" name="level_of_punj_examin">
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
               <input type="date" class="form-control" name="dob">
               <!--type="date" value="<?php //echo date("Y-m-d");?>"-->
            </div>
            <div class="form-group col-md-6">
               <label for="inputEmail4">Email</label>
               <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
            </div>
          </div>
          <div class="form-group">
             <label for="exampleFormControlFile1">Select Profile Picture</label>
             <!--<input type="file" name="slider">-->
             <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profile_pic">
          </div>
          <button type="button" class="btn btn-primary btn-lg btn-block">Submit</button> 
    </div>
  </form>
  <form>
    <div class="Registration-Information">
      <div>
        <div class="alert alert-dark" role="alert">
            <a href="#" class="alert-link">REGISTRATION INFORMATION</a>
            <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                      Already Registered?
                    </label>
            </div>
        </div>
      </div>
    
      
      <div class="form-row">
         <div class="form-group col-md-6">
            <label for="Faculty">Faculty</label>
            <input type="text" class="form-control defaultCheck2" id="Faculty" placeholder="Faculty" name="faculty" disabled>
         </div>
         <div class="form-group col-md-6">
            <label for="Department">Department</label>
            <input type="text" class="form-control defaultCheck2" id="Department" placeholder="Department" name="depart" disabled>
         </div>
      </div>
      <div class="form-row">
         <div class="form-group col-md-6">
            <label for="Extempted from fee">Extempted from fee</label>
            <input type="text" class="form-control defaultCheck2" id="Extempted from fee" placeholder="Extempted from fee" name="extempted_from_fee" disabled>
         </div>
         <div class="form-group col-md-6">
            <label for="exampleFormControlSelect1">JRF Holder</label>
             <select class="form-control defaultCheck2" id="exampleFormControlSelect1" name="jrf_holder" disabled>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
             </select>
         </div>
      </div> 
      <div class="form-row">
         <div class="form-group col-md-6">
            <label for="Supervisor">Supervisor</label>
            <input type="text" class="form-control defaultCheck2" id="Supervisor" placeholder="Supervisor" name="supervisor"  disabled>
         </div>
         <div class="form-group col-md-6">
            <label for="Select Co-Supervisor">Select Co-Supervisor</label>
            <input type="text" class="form-control defaultCheck2" id="Select Co-Supervisor" placeholder="Select Co-Supervisor" name="co_supervisor" disabled>
         </div>
      </div>
      <div class="form-row">
          <div class="form-group col-md-6">
            <label for="exampleFormControlSelect1">Mode of Phd</label>
             <select class="form-control defaultCheck2" id="exampleFormControlSelect1" name="mode_of_phd" disabled>
                <option value="Regular">Regular</option>
                <option value="Part Time">Part Time</option>
             </select>
          </div>
           <div class="form-group col-md-6">
            <label for="exampleFormControlSelect1">Is course work done?</label>
             <select class="form-control defaultCheck2" id="exampleFormControlSelect1" name="course_work" disabled>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
             </select>
           </div>
      </div>
       <div class="form-row">
                 <div class="col-6 col-padding">
                    <label for="University Registration Number">University Registration Number</label>
                    <input type="text" class="form-control defaultCheck2" placeholder="University Registration Number" name="uni_reg_no" disabled>
                 </div>
                 <div class="col-6 col-padding">
                    <label for="Fellowship Id">Fellowship Id</label>
                    <input type="text" class="form-control defaultCheck2" placeholder="Fellowship Id" name="fellowship_id" disabled>
                 </div>             
       </div>
       <div class="form-row">
          <div class="col-12 col-padding">
                    <label for="Research Title">Research Title</label>
                    <input type="text" class="form-control defaultCheck2" placeholder="Research Title" name="research_titles" disabled>
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
                    <input type="text" class="form-control defaultCheck2" placeholder="Punjabi University,Patiala" value="Punjabi University,Patiala" name="uni_name" readonly disabled>
                 </div>
                 <div class="col-6 col-padding">
                    <label for="Department/Place">Department/Place</label>
                    <input type="text" class="form-control defaultCheck2" placeholder="Department/Place" name="department_place" disabled>
                 </div>             
       </div>
       <div class="form-row">
                 <div class="col-6 col-padding">
                    <label for="Name of Researcher">Name of Researcher</label>
                    <input type="text" class="form-control defaultCheck2" placeholder="e.g. Ghandhi M.K" name="name_of_research" disabled>
                 </div>
                 <div class="col-6 col-padding">
                    <label for="Name of Guide">Name of Guide</label>
                    <input type="text" class="form-control defaultCheck2" placeholder="Don't Use Dr./Prof" name="guide_name" disabled>
                 </div>             
       </div>
        <div class="form-row">
                 <div class="col-6 col-padding">
                    <label for="Type of Degree">Type of Degree</label>
                    <input type="text" class="form-control defaultCheck2" value="Phd" readonly name="type_of_degree" disabled>
                 </div>
                 <div class="col-6">
                   <label for="Date Picker">Date of Birth</label>
                   <input type="date" class="form-control defaultCheck2" disabled>
                    <!--<input id="datepicker2" value="<?php echo date("Y-m-d");?>">-->
            </div>     
       </div>
        <div class="form-row">
                 <div class="col-6">
                    <label for="Date Picker">Awarded Date</label>
                    <input type="date" class="form-control defaultCheck2" name="awarded_date" disabled>
                    <!--<input id="datepicker3" name="awarded_date" value="<?php echo date("Y-m-d");?>">-->
                 </div>   
                 <div class="col-6 col-padding">
                    <label for="Completed date">Completed date</label>
                     <select class="form-control defaultCheck2" id="exampleFormControlSelect1" name="completed_date" disabled>
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
                    <input type="text" class="form-control defaultCheck2" placeholder="Title" name="title" disabled>
          </div>           
       </div>
       <div class="form-group">
           <label for="exampleFormControlTextarea1">Abstract</label>
           <textarea class="form-control defaultCheck2" id="Abstract" rows="5" maxlength="2048" name="abstract" disabled></textarea>
           <small id="passwordHelpBlock" class="form-text text-muted">Max Characters: 2048</small>
       </div>
       <div class="form-group">
         <div class="form-row">
           <div class="col-12 col-padding">
             <label for="Keywords">Select Three levels of subject</label>
           </div>
          <div class="form-row">
             <div class="col-12 col-padding">
               <input type="text" class="form-control defaultCheck2" placeholder="Select" name="first_level_of_subject" disabled>
             </div>            
          </div>
          <div class="form-row">
             <div class="col-12 col-padding">
               <input type="text" class="form-control defaultCheck2" placeholder="Select" name="second_level_of_subject" disabled>
             </div>            
          </div>
          <div class="form-row">
             <div class="col-12 col-padding">
               <input type="text" class="form-control defaultCheck2" placeholder="Select" name="third_level_of_subject" disabled>
             </div>            
          </div>
         </div>
         <div class="form-row">
           <label for="Language">Language</label>
           <input type="text" class="form-control defaultCheck2" placeholder="Language" name="language" disabled>
         </div>
         <div class="form-row">
           <label for="Submitted by:">Submitted by:</label>
           <input type="text" class="form-control defaultCheck2" placeholder="University" name="submitted_by" disabled>
         </div>
         <div class="form-row">
           <label for="Copyrights:">Copyrights:</label>
           <input type="text" class="form-control defaultCheck2" placeholder="University" name="copyrights" disabled>
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
           <input type="file" class="form-control-file defaultCheck2" id="exampleFormControlFile1" name="files1" disabled>
         </div>
       </div>
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files2 (Certificates):</label>
           <input type="file" class="form-control-file defaultCheck2" id="exampleFormControlFile1" name="files2" disabled>
         </div>
       </div>
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files3 (Preliminary Pages):</label>
           <input type="file" class="form-control-file defaultCheck2" id="exampleFormControlFile1"name="files3" disabled>
         </div>
       </div>
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files4 (Chapter1):</label>
           <input type="file" class="form-control-file defaultCheck2" id="exampleFormControlFile1" name="files4" disabled>
         </div>
       </div>
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files5 (Chapter2)</label>
           <input type="file" class="form-control-file defaultCheck2" id="exampleFormControlFile1" name="files5" disabled>
         </div>
       </div>
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files6 (Chapter3)</label>
           <input type="file" class="form-control-file defaultCheck2" id="exampleFormControlFile1" name="files6" disabled>
         </div>
       </div>
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files7 (Chapter4)</label>
           <input type="file" class="form-control-file defaultCheck2" id="exampleFormControlFile1" name="files7" disabled>
         </div>
       </div>
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files8 (Chapter5)</label>
           <input type="file" class="form-control-file defaultCheck2" id="exampleFormControlFile1" name="files8" disabled>
         </div>
       </div>
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files9 (Chapter6)</label>
           <input type="file" class="form-control-file defaultCheck2" id="exampleFormControlFile1" name="files9" disabled>
         </div>
       </div>
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files10 (Chapter7)</label>
           <input type="file" class="form-control-file defaultCheck2" id="exampleFormControlFile1" name="files10" disabled>
         </div>
       </div>
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files11 (Chapter8)</label>
           <input type="file" class="form-control-file defaultCheck2" id="exampleFormControlFile1" name="files11" disabled>
         </div>
       </div>
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files12 (Chapter9)</label>
           <input type="file" class="form-control-file defaultCheck2" id="exampleFormControlFile1" name="files12" disabled>
         </div>
       </div>
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files13 (Chapter10)</label>
           <input type="file" class="form-control-file defaultCheck2" id="exampleFormControlFile1" name="files13" disabled>
         </div>
       </div>
       <div class="form-row">
         <div class="col-12 col-padding">
           <label for="Upload Files">Files14 (Chapter11)</label>
           <input type="file" class="form-control-file defaultCheck2" id="exampleFormControlFile1" name="files14" disabled>
         </div>
       </div>
    </div>
    <div class="clearfix"></div>
     <div class="form-group row">
            <div class="col-sm-12 text-center">
              <input type="submit" class="btn btn-primary btn-lg btn-block defaultCheck2" id="btnaling" name="ss" value="Submit" disabled>
            </div>
      </div>
    </form>
    <div class="form-group row">
            <div class="col-sm-12 text-center">
              <input type="submit" class="btn btn-primary btn-lg btn-block defaultCheck2" id="print" name="print" value="Print" onclick="window.print();" disabled>
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