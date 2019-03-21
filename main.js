// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
//datepicker
 $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
 $('#datepicker2').datepicker({
            uiLibrary: 'bootstrap4'
        });
  $('#datepicker3').datepicker({
            uiLibrary: 'bootstrap4'
        });

  //correspondance address same as permanent address
  function auto_fill_address(){
    var same_addr = document.getElementById("defaultCheck1").checked;
    var pnationality = document.getElementById("p_nationality").value;
    var pstate = document.getElementById("p_state").value;
    var pcity = document.getElementById("p_city").value;
    var pdistrict = document.getElementById("p_district").value;
    var pcountry = document.getElementById("p_country").value;
    var ppincode = document.getElementById("p_pincode").value;
    var paddress = document.getElementById("p_address").value;
    //alert(x);
    if(same_addr){
     if((pnationality=='' || pnationality==null)||(pstate=='' || pstate==null)||(pcity=='' || pcity==null)||(pdistrict=='' || pdistrict==null)||(pcountry=='' || pcountry==null)||(ppincode=='' || ppincode==null)||(paddress=='' || paddress==null)){
      alert('please fill permanent address');
      document.getElementById("same_residential_permanent").checked = false;
     }else{
      document.getElementById("c_nationality").value = pnationality;
      document.getElementById("c_state").value = pstate;
      document.getElementById("c_city").value = pcity;
      document.getElementById("c_district").value = pdistrict;
      document.getElementById("c_country").value = pcountry;
      document.getElementById("c_pincode").value = ppincode;
      document.getElementById("c_address").value = paddress;
     }
    }
    else
    {
      document.getElementById("c_nationality").value = "";
      document.getElementById("c_state").value = "";
      document.getElementById("c_city").value = "";
      document.getElementById("c_district").value = "";
      document.getElementById("c_country").value = "";
      document.getElementById("c_pincode").value = "";
      document.getElementById("c_address").value = "";
    }  
     }
     //lock and unlock form
  $(function() {
    unlock_form();
      $("#defaultCheck2").click(unlock_form);
    });
  function unlock_form(){
   if (this.checked) {
    $("input.defaultCheck2").removeAttr("disabled");
    
  } else {
    $("input.defaultCheck2").attr("disabled", true);
   
  }
  }
  $(function() {
    unlock_form1();
      $("#defaultCheck3").click(unlock_form1);
    });
  function unlock_form1(){
   if (this.checked) {
    $("input.defaultCheck3").removeAttr("disabled");
  } else {
    $("input.defaultCheck3").attr("disabled", true);
  }
  }
  $(function() {
    unlock_form2();
      $("#defaultCheck4").click(unlock_form2);
    });
  function unlock_form2(){
   if (this.checked) {
    $("input.defaultCheck4").removeAttr("disabled");
    $("textarea.defaultCheck4").removeAttr("disabled");
  } else {
    $("input.defaultCheck4").attr("disabled", true);
    $("textarea.defaultCheck4").attr("disabled", true);
  }
  }
  //hide button while printing
  function myFunction() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("print");
        //Set the print button visibility to 'hidden' 
        print.style.visibility = 'hidden';
        //Print the page content
        window.print()
        printButton.style.visibility = 'visible';
}


