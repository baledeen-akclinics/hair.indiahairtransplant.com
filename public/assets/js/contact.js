document.addEventListener("DOMContentLoaded", function () {

  const forms = document.querySelectorAll(".leadform");


  if (!forms.length) {
    return;
  }



  function field(form, name) {

    return form.querySelector('[name="' + name + '"]');

  }




  // Show Error Message

  function showError(input, message) {


    if (!input) return;


    const errorBox = document.getElementById(input.id + "_error");


    if (errorBox) {

      errorBox.innerHTML = message;

    }


    input.classList.add("error-input");


  }




  // Clear Error Message

  function clearError(input) {


    if (!input) return;


    const errorBox = document.getElementById(input.id + "_error");


    if (errorBox) {

      errorBox.innerHTML = "";

    }


    input.classList.remove("error-input");


  }





  // Select2

  function initSelect2(procedureSelect) {


    if (!window.jQuery || !procedureSelect) {

      return;

    }


    const $procedureSelect = $(procedureSelect);



    if ($procedureSelect.hasClass("select2-hidden-accessible")) {

      return;

    }




    $procedureSelect.select2({

      placeholder: "Search Procedure*",

      allowClear: true,

      width: "100%",


      minimumInputLength: 0,



   dropdownParent:
$(procedureSelect).closest("#appointmentPopup").length
?
$(procedureSelect).closest("#appointmentPopup")
:
$(document.body),





      ajax: {


        url: PROCEDURE_CATEGORIES_URL,

        type: "GET",

        dataType: "json",

        delay: 300,

        cache: true,



        data: function (params) {


          return {

            q: params.term || ""

          };


        },



        processResults: function (response) {


          return {


            results:

              (response.data.procedure_categories || [])

              .map(function (item) {


                return {

                  id: String(item.id),

                  text: item.name

                };


              })

          };


        }


      }


    });



  }






  // Name Validation

  function bindNameValidation(nameInput) {


    if (!nameInput) return;



    nameInput.addEventListener("blur", function () {



      const value = this.value.trim();


      clearError(this);




      if (value === "") {


        showError(this,"Please enter your name.");

        return;


      }





      const regex = /^[A-Za-z\s]+$/;




      if (!regex.test(value)) {


        showError(this,"Please enter valid name.");

        return;


      }



    });


  }







  // Email Validation

  function bindEmailValidation(emailInput) {


    if (!emailInput) return;




    emailInput.addEventListener("blur", function () {



      const value = this.value.trim();



      clearError(this);




      if(value === "") {


        showError(this,"Please enter email.");

        return;


      }





      const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;




      if(!regex.test(value)) {


        showError(this,"Please enter valid email.");

        return;


      }



    });



  }







  // Phone Validation

  function bindPhoneValidation(phoneInput) {


    if(!phoneInput) return;



    phoneInput.addEventListener("input",function(){


      this.value=this.value.replace(/\D/g,"");



      if(this.value.length > 10){

        this.value=this.value.substring(0,10);

      }


    });






    phoneInput.addEventListener("blur",function(){



      clearError(this);




      if(this.value.trim()===""){


        showError(this,"Please enter mobile number.");

        return;


      }




      const regex=/^[6-9]\d{9}$/;




      if(!regex.test(this.value)){


        showError(this,"Please enter valid mobile number.");

        return;


      }




    });


  }






  // City Validation

  function bindCityValidation(cityInput){


    if(!cityInput) return;



    cityInput.addEventListener("change",function(){



      clearError(this);




      if(this.value===""){


        showError(this,"Please select city.");

        return;


      }



    });



  }
    function closeAppointmentPopup() {

    const popup = document.getElementById("appointmentPopup");

    if (popup) {
      popup.style.display = "none";
    }

  }





  function initLeadForm(form) {


    const sourceUrl = field(form, "source_url");

    const procedureSelect = field(form, "procedure_category");

    const nameInput = field(form, "name");

    const phoneInput = field(form, "phone");

    const emailInput = field(form, "email");

    const cityInput = field(form, "city");

    const consent = field(form, "consent");




    if (sourceUrl) {

      sourceUrl.value = window.location.href;

    }





    initSelect2(procedureSelect);


    bindNameValidation(nameInput);

    bindEmailValidation(emailInput);

    bindPhoneValidation(phoneInput);

    bindCityValidation(cityInput);







    form.addEventListener("submit", function (e) {
    console.log("SUBMIT CLICKED");

      e.preventDefault();




      const name = nameInput ? nameInput.value.trim() : "";

      const email = emailInput ? emailInput.value.trim() : "";

      const phone = phoneInput ? phoneInput.value.trim() : "";

      const city = cityInput ? cityInput.value : "";

      const concern = procedureSelect ? procedureSelect.value : "";





      // Clear old errors

      clearError(nameInput);

      clearError(emailInput);

      clearError(phoneInput);

      clearError(cityInput);







      // Submit Validation


     if (consent && !consent.checked) {

    const errorBox = document.getElementById(consent.id + "_error");

    if(errorBox){
        errorBox.innerHTML = "Please accept consent.";
    }

}
else {

    const errorBox = document.getElementById(consent.id + "_error");

    if(errorBox){
        errorBox.innerHTML = "";
    }

}







      if (!name) {

        showError(nameInput,"Please enter your name.");

        nameInput.focus();

        

      }






      const nameRegex = /^[A-Za-z\s]+$/;


      if(!nameRegex.test(name)){


        showError(nameInput,"Please enter valid name.");

        nameInput.focus();

        


      }







      if(!email){


        showError(emailInput,"Please enter email.");

        emailInput.focus();

        


      }






      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;



      if(!emailRegex.test(email)){


        showError(emailInput,"Please enter valid email.");

        emailInput.focus();

        


      }








      if(!phone){


        showError(phoneInput,"Please enter mobile number.");

        phoneInput.focus();

        


      }






      const phoneRegex = /^[6-9]\d{9}$/;



      if(!phoneRegex.test(phone)){


        showError(phoneInput,"Please enter valid mobile number.");

        phoneInput.focus();

        


      }







      if(!city){


        showError(cityInput,"Please select city.");

        cityInput.focus();

        return;


      }







      if(!concern){


        const errorBox =
        document.getElementById(procedureSelect.id+"_error");


        if(errorBox){

          errorBox.innerHTML="Please select procedure.";

        }


        

      }







      // Validation Pass

      Swal.fire({

        title:"Please wait...",

        text:"Submitting your request",

        allowOutsideClick:false,

        didOpen:function(){

          Swal.showLoading();

        }

      });









      if(sourceUrl){

        sourceUrl.value = window.location.href;

      }







      const source_url =
      sourceUrl ? sourceUrl.value : window.location.href;



      const source_id =
      (field(form,"source_id") || {}).value || "";



      const campaign_id =
      (field(form,"campaign_id") || {}).value || "";



      const campaign_name =
      (field(form,"campaign_name") || {}).value || "";



      const ad_id =
      (field(form,"ad_id") || {}).value || "";



      const ad_name =
      (field(form,"ad_name") || {}).value || "";



      const form_id =
      (field(form,"form_id") || {}).value || "";



      const form_name =
      (field(form,"form_name") || {}).value || "";









      // API CALL

      fetch(CONTACT_SUBMIT_URL, {


        method:"POST",


        headers:{


          "Content-Type":"application/json"


        },


        body:JSON.stringify({


          name:name,

          email:email,

          phone:phone,

          city:city,

          concern:concern,


          source_url:source_url,

          source_id:source_id,

          campaign_id:campaign_id,

          campaign_name:campaign_name,

          ad_id:ad_id,

          ad_name:ad_name,

          form_id:form_id,

          form_name:form_name


        })


      })



      .then(function(response){


        return response.json();


      })



      .then(function(response){



        Swal.close();




        if(response.status){



          Swal.fire({

            icon:"success",

            title:"Success",

            text:response.message || "Submitted successfully."

          });




          form.reset();




          if(sourceUrl){

            sourceUrl.value=window.location.href;

          }





          if(window.jQuery && procedureSelect){


            $(procedureSelect)
            .val(null)
            .trigger("change");


          }






          if(form.closest("#appointmentPopup")){


            closeAppointmentPopup();


          }





        }

        else{


          Swal.fire({

            icon:"error",

            title:"Error",

            text:response.message || "Something went wrong."

          });


        }



      })



      .catch(function(){


        Swal.close();



        Swal.fire({

          icon:"error",

          title:"Error",

          text:"Server error."

        });



      });





    });



  }





  forms.forEach(function(form){

    initLeadForm(form);

  });



});