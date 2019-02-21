<?php
$con=mysqli_connect("localhost","root","","pupa");
if(isset($_POST['ss']))
{
	$regno=$_POST['reg_no'];
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$category=$_POST['category'];
	$freign_stu_cat=$_POST['freign_stu_cat'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$p_nationality=$_POST['p_nationality'];
	$p_state=$_POST['p_state'];
	$p_city=$_POST['p_city'];
	$p_district=$_POST['p_district'];
	$p_country=$_POST['p_country'];
	$p_pincode=$_POST['p_pincode'];
	$p_address=$_POST['p_address'];
	$c_nationality=$_POST['c_nationality'];
	$c_state=$_POST['c_state'];
	$c_city=$_POST['c_city'];
	$c_district=$_POST['c_district'];
	$c_country=$_POST['c_country'];
	$c_pincode=$_POST['c_pincode'];
	$c_address=$_POST['c_address'];
	$phone=$_POST['phone'];
	$mobile=$_POST['mobile'];
	$is_punj_examin_passed=$_POST['is_punj_examin_passed'];
	$level_of_punj_examin=$_POST['level_of_punj_examin'];
	$date=$_POST['dob'];
	$dob = date('Y-m-d', strtotime($date));
	//echo $dob;
	$email=$_POST['email'];
	$profile_pic=basename($_FILES['profile_pic']['name']);
	$cmd="insert into info(regno,name,gender,category,foreign_student_cat,father_name,mother_name,p_nationality,p_state,p_city,
		p_district,p_country,p_pincode,p_address,c_nationality,c_state,c_city,c_district,c_country,c_pincode,
		c_address,phone,mobile,is_punj_examamin_passed,level_of_punj_examin,dob,email,profilepicture) value(
		'$regno','$name','$gender','$category','$freign_stu_cat','$fname','$mname','$p_nationality','$p_state'
		,'$p_city','$p_district','$p_country','$p_pincode','$p_address','$c_nationality','$c_state','$c_city',
		'$c_district','$c_country','$c_pincode','$c_address','$phone','$mobile','$is_punj_examin_passed',
		'$level_of_punj_examin','$dob','$email','$profile_pic')";
	mysqli_query($con,$cmd);
	



	move_uploaded_file($_FILES['profile_pic']['tmp_name'],"profilepicture/".$profile_pic);
}
if(isset($_POST['ss1']))
{
	$faculty=$_POST['faculty'];
	$depart=$_POST['depart'];
	$extempted_from_fee=$_POST['extempted_from_fee'];
	$jrf_holder=$_POST['jrf_holder'];
	$supervisor=$_POST['supervisor'];
	$co_supervisor=$_POST['co_supervisor'];
	$mode_of_phd=$_POST['mode_of_phd'];
	$course_work=$_POST['course_work'];
	$uni_reg_no=$_POST['uni_reg_no'];
	$fellowship_id=$_POST['fellowship_id'];
	$research_titles=$_POST['research_titles'];
	$cmd="insert into info(uni_reg_number,faculty,department,exemptedfromfee,jrf_holder,supervisor,select_co_supervisor,mode_of_phd,is_coursework_done,
		fellowship_id,research_title) value('$uni_reg_no','$faculty','$depart','$extempted_from_fee',
		'$jrf_holder',
		'$supervisor','$co_supervisor','$mode_of_phd','$course_work','$fellowship_id',
		'$research_titles')";
mysqli_query($con,$cmd);
}
if (isset($_POST['ss2'])) {
	$regno=$_POST['reg_no'];
	$uni_name=$_POST['uni_name'];
	$department_place=$_POST['department_place'];
	$name_of_research=$_POST['name_of_research'];
	$guide_name=$_POST['guide_name'];
	$type_of_degree=$_POST['type_of_degree'];
	$dobee=$_POST['awarded_date'];
	$awarded_date = date('Y-m-d', strtotime($dobee));
	$completed_date=$_POST['completed_date'];
}
if(isset($_POST['ss3']))
{
	$regno=$_POST['reg_no'];
	$title=$_POST['title'];
	$abstract=$_POST['abstract'];
	$first_level_of_subject=$_POST['first_level_of_subject'];
	$second_level_of_subject=$_POST['second_level_of_subject'];
	$third_level_of_subject=$_POST['third_level_of_subject'];
	$language=$_POST['language'];
	$submitted_by=$_POST['submitted_by'];
	$copyrights=$_POST['copyrights'];
	$size=$_POST['size'];
	$dimensions=$_POST['dimensions'];
	$accompny_material=$_POST['accompny_material'];
	
	$file1=basename($_FILES['files1']['name']);
	$file2=basename($_FILES['files2']['name']);
	$file3=basename($_FILES['files3']['name']);
	$file4=basename($_FILES['files4']['name']);
	$file5=basename($_FILES['files5']['name']);
	$file6=basename($_FILES['files6']['name']);
	$file7=basename($_FILES['files7']['name']);
	$file8=basename($_FILES['files8']['name']);
	$file9=basename($_FILES['files9']['name']);
	$file10=basename($_FILES['files10']['name']);
	$file11=basename($_FILES['files11']['name']);
	$file12=basename($_FILES['files12']['name']);
	$file13=basename($_FILES['files13']['name']);
	$file14=basename($_FILES['files14']['name']);


$qry="select regno from info where regno='".@$regno."'";
	$ytu=mysqli_query($con,$qry);
	while($ruu=mysqli_fetch_array($ytu)){
		$nal=$ruu[0];
	}

	
	mkdir("thesis/".$nal."/", 0777);
	move_uploaded_file($_FILES['files1']['tmp_name'],"thesis/$nal/".$file1);
	move_uploaded_file($_FILES['files2']['tmp_name'],"thesis/$nal/".$file2);
	move_uploaded_file($_FILES['files3']['tmp_name'],"thesis/$nal/".$file3);
	move_uploaded_file($_FILES['files4']['tmp_name'],"thesis/$nal/".$file4);
	move_uploaded_file($_FILES['files5']['tmp_name'],"thesis/$nal/".$file5);
	move_uploaded_file($_FILES['files6']['tmp_name'],"thesis/$nal/".$file6);
	move_uploaded_file($_FILES['files7']['tmp_name'],"thesis/$nal/".$file7);
	move_uploaded_file($_FILES['files8']['tmp_name'],"thesis/$nal/".$file8);
	move_uploaded_file($_FILES['files9']['tmp_name'],"thesis/$nal/".$file9);

}/*
if(isset($_POST['ss']))
{
	$regno=$_POST['reg_no'];
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$category=$_POST['category'];
	$freign_stu_cat=$_POST['freign_stu_cat'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$p_nationality=$_POST['p_nationality'];
	$p_state=$_POST['p_state'];
	$p_city=$_POST['p_city'];
	$p_district=$_POST['p_district'];
	$p_country=$_POST['p_country'];
	$p_pincode=$_POST['p_pincode'];
	$p_address=$_POST['p_address'];
	$c_nationality=$_POST['c_nationality'];
	$c_state=$_POST['c_state'];
	$c_city=$_POST['c_city'];
	$c_district=$_POST['c_district'];
	$c_country=$_POST['c_country'];
	$c_pincode=$_POST['c_pincode'];
	$c_address=$_POST['c_address'];
	$phone=$_POST['phone'];
	$mobile=$_POST['mobile'];
	$is_punj_examin_passed=$_POST['is_punj_examin_passed'];
	$level_of_punj_examin=$_POST['level_of_punj_examin'];
	$date=$_POST['dob'];
	$dob = date('Y-m-d', strtotime($date));
	//echo $dob;
	$email=$_POST['email'];
	$profile_pic=basename($_FILES['profile_pic']['name']);
	----
	$faculty=$_POST['faculty'];
	$depart=$_POST['depart'];
	$extempted_from_fee=$_POST['extempted_from_fee'];
	$jrf_holder=$_POST['jrf_holder'];
	$supervisor=$_POST['supervisor'];
	$co_supervisor=$_POST['co_supervisor'];
	$mode_of_phd=$_POST['mode_of_phd'];
	$course_work=$_POST['course_work'];
	$uni_reg_no=$_POST['uni_reg_no'];
	$fellowship_id=$_POST['fellowship_id'];
	$research_titles=$_POST['research_titles'];
	$uni_name=$_POST['uni_name'];
	$department_place=$_POST['department_place'];
	$name_of_research=$_POST['name_of_research'];
	$guide_name=$_POST['guide_name'];
	$type_of_degree=$_POST['type_of_degree'];
	$dobee=$_POST['awarded_date'];
	$awarded_date = date('Y-m-d', strtotime($dobee));
	$completed_date=$_POST['completed_date'];
	$title=$_POST['title'];
	$abstract=$_POST['abstract'];
	$first_level_of_subject=$_POST['first_level_of_subject'];
	$second_level_of_subject=$_POST['second_level_of_subject'];
	$third_level_of_subject=$_POST['third_level_of_subject'];
	$language=$_POST['language'];
	$submitted_by=$_POST['submitted_by'];
	$copyrights=$_POST['copyrights'];
	$size=$_POST['size'];
	$dimensions=$_POST['dimensions'];
	$accompny_material=$_POST['accompny_material'];
	
	$file1=basename($_FILES['files1']['name']);
	$file2=basename($_FILES['files2']['name']);
	$file3=basename($_FILES['files3']['name']);
	$file4=basename($_FILES['files4']['name']);
	$file5=basename($_FILES['files5']['name']);
	$file6=basename($_FILES['files6']['name']);
	$file7=basename($_FILES['files7']['name']);
	$file8=basename($_FILES['files8']['name']);
	$file9=basename($_FILES['files9']['name']);

	$cmd="insert into info(regno,name,gender,category,foreign_student_cat,father_name,mother_name,p_nationality,p_state,p_city,
		p_district,p_country,p_pincode,p_address,c_nationality,c_state,c_city,c_district,c_country,c_pincode,
		c_address,phone,mobile,is_punj_examamin_passed,level_of_punj_examin,dob,email,profilepicture,faculty,
		department,exempted_fee,jrf_holder,supervisor,select_co_supervisor,mode_of_phd,is_coursework_done,
		uni_reg_number,fellowship_id,research_title,university_name,dept_or_place,name_of_researcher,
		name_of_the_guide,type_of_degree,dobb,awarded_date,completed_date,title_with_subtitle,abstract,
		first_level_of_subject,second_level_of_subject,third_level_of_subject,language,submitted_by,
		copyrights,size,dimensions,accompny_material,files1_titles,files2_certificates,files3_preiminary_pages,
		files4_chapter1,files5_chapter2,files6_chapter3,files7_chapter4,files8_chapter5,files9_chapter6) value(
		'$regno','$name','$gender','$category','$freign_stu_cat','$fname','$mname','$p_nationality','$p_state'
		,'$p_city','$p_district','$p_country','$p_pincode','$p_address','$c_nationality','$c_state','$c_city',
		'$c_district','$c_country','$c_pincode','$c_address','$phone','$mobile','$is_punj_examin_passed',
		'$level_of_punj_examin','$dob','$email','$profile_pic','$faculty','$depart','$extempted_from_fee',
		'$jrf_holder',
		'$supervisor','$co_supervisor','$mode_of_phd','$course_work','$uni_reg_no','$fellowship_id',
		'$research_titles','$uni_name','$department_place','$name_of_research','$guide_name','$type_of_degree',
		'$dob','$awarded_date','$completed_date','$title','$abstract','$first_level_of_subject',
		'$second_level_of_subject','$third_level_of_subject','$language','$submitted_by','$copyrights','$size',
		'$dimensions','$accompny_material','$file1','$file2','$file3','$file4','$file5','$file6','$file7',
		'$file8','$file9')";
	mysqli_query($con,$cmd);
	$qry="select regno from info where regno='".@$regno."'";
	$ytu=mysqli_query($con,$qry);
	while($ruu=mysqli_fetch_array($ytu)){
		$nal=$ruu[0];
	}
	move_uploaded_file($_FILES['profile_pic']['tmp_name'],"profilepicture/".$profile_pic);
	mkdir("thesis/".$nal."/", 0777);
	move_uploaded_file($_FILES['files1']['tmp_name'],"thesis/$nal/".$file1);
	move_uploaded_file($_FILES['files2']['tmp_name'],"thesis/$nal/".$file2);
	move_uploaded_file($_FILES['files3']['tmp_name'],"thesis/$nal/".$file3);
	move_uploaded_file($_FILES['files4']['tmp_name'],"thesis/$nal/".$file4);
	move_uploaded_file($_FILES['files5']['tmp_name'],"thesis/$nal/".$file5);
	move_uploaded_file($_FILES['files6']['tmp_name'],"thesis/$nal/".$file6);
	move_uploaded_file($_FILES['files7']['tmp_name'],"thesis/$nal/".$file7);
	move_uploaded_file($_FILES['files8']['tmp_name'],"thesis/$nal/".$file8);
	move_uploaded_file($_FILES['files9']['tmp_name'],"thesis/$nal/".$file9);
}
?>*/