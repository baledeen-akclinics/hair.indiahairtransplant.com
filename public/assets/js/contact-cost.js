document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("costCalculatorForm");

  if (!form) {
    return;
  }

  const nameInput = document.getElementById("jn");
  const phoneInput = document.getElementById("jp");
  const emailInput = document.getElementById("je");
  const cityInput = document.getElementById("jc");

  // Blur Validation

  nameInput.addEventListener("blur", validateName);

  phoneInput.addEventListener("blur", validatePhone);

  emailInput.addEventListener("blur", validateEmail);

  cityInput.addEventListener("blur", validateCity);

  // Remove error while typing

  nameInput.addEventListener("input", function () {
    removeError(nameInput);
  });

  phoneInput.addEventListener("input", function () {
    this.value = this.value.replace(/\D/g, "").slice(0, 10);

    removeError(phoneInput);
  });

  emailInput.addEventListener("input", function () {
    removeError(emailInput);
  });

  cityInput.addEventListener("input", function () {
    this.value = this.value.replace(/[^a-zA-Z\s]/g, "");

    removeError(cityInput);
  });

  // SUBMIT VALIDATION

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    let isValid = true;

    if (!validateName()) {
      isValid = false;
    }

    if (!validatePhone()) {
      isValid = false;
    }

    if (!validateEmail()) {
      isValid = false;
    }

    if (!validateCity()) {
      isValid = false;
    }

    // Error hai to API call nahi hogi

    if (!isValid) {
      return;
    }

    // Form Data

    var name = nameInput.value.trim();

    var email = emailInput.value.trim();

    var phone = phoneInput.value.trim();

    var city = cityInput.value.trim();

    // Hidden Fields

    document.getElementById("source_url").value = window.location.href;

    var source_url = document.getElementById("source_url").value.trim();

    var source_id = document.getElementById("source_id").value.trim();

    var campaign_id = document.getElementById("campaign_id").value.trim();

    var campaign_name = document.getElementById("campaign_name").value.trim();

    var ad_id = document.getElementById("ad_id").value.trim();

    var ad_name = document.getElementById("ad_name").value.trim();

    var form_id = document.getElementById("form_id").value.trim();

    var form_name = document.getElementById("form_name").value.trim();

    var message = document.getElementById("contact_message").value.trim();

    var procedure = document.getElementById("procedure_category").value.trim();

    var phoneDigits = phone.replace(/\D/g, "");

    var statusEl = document.getElementById("contactFormStatus");

    if (statusEl) {
      statusEl.style.display = "none";

      statusEl.textContent = "";
    }

    // API CALL START

    fetch("/hair-contact-submit", {
      method: "POST",

      headers: {
        "Content-Type": "application/json",
      },

      body: JSON.stringify({
        name: name,

        email: email,

        phone: phoneDigits,

        city: city,

        concern: procedure,

        message: message,

        source_url: source_url,

        source_id: source_id,

        campaign_id: campaign_id,

        campaign_name: campaign_name,

        ad_id: ad_id,

        ad_name: ad_name,

        form_id: form_id,

        form_name: form_name,
      }),
    })
      .then(function (response) {
        return response.json();
      })

      .then(function (response) {
        if (response.status) {
          Swal.fire({
            icon: "success",

            title: "Success",

            text:
              response.message ||
              "Thank you. Our team will contact you shortly.",
          });

          form.reset();

          document.getElementById("source_url").value = window.location.href;
        } else {
          Swal.fire({
            icon: "error",

            title: "Failed",

            text: response.message || "Something went wrong.",
          });
        }
      })

      .catch(function (error) {
        console.error(error);

        Swal.fire({
          icon: "error",

          title: "Error",

          text: "Server error.",
        });
      });
  });
  // ---------------- NAME VALIDATION ----------------

  function validateName() {
    removeError(nameInput);

    const name = nameInput.value.trim();

    if (name === "") {
      showError(nameInput, "Name is required.");

      return false;
    }

    if (name.length < 3) {
      showError(nameInput, "Name must be at least 3 characters.");

      return false;
    }

    if (!/^[a-zA-Z\s]+$/.test(name)) {
      showError(nameInput, "Only letters are allowed.");

      return false;
    }

    return true;
  }

  // ---------------- PHONE VALIDATION ----------------

  function validatePhone() {
    removeError(phoneInput);

    const phone = phoneInput.value.trim();

    if (phone === "") {
      showError(phoneInput, "Phone number is required.");

      return false;
    }

    if (!/^[6-9][0-9]{9}$/.test(phone)) {
      showError(phoneInput, "Enter valid 10-digit mobile number.");

      return false;
    }

    return true;
  }

  // ---------------- EMAIL VALIDATION ----------------

  function validateEmail() {
    removeError(emailInput);

    const email = emailInput.value.trim();

    if (email === "") {
      showError(emailInput, "Email is required.");

      return false;
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegex.test(email)) {
      showError(emailInput, "Enter valid email address.");

      return false;
    }

    return true;
  }

  // ---------------- CITY VALIDATION ----------------

  function validateCity() {
    removeError(cityInput);

    const city = cityInput.value.trim();

    if (city === "") {
      showError(cityInput, "City is required.");

      return false;
    }

    if (!/^[a-zA-Z\s]+$/.test(city)) {
      showError(cityInput, "Only letters are allowed.");

      return false;
    }

    return true;
  }

  // ---------------- SHOW ERROR ----------------
function showError(input, message) {

    removeError(input);

    const error = document.createElement("small");
    error.className = "error-message";
    error.textContent = message;

    // error form-group ke andar show hoga
    const parent = input.closest(".form-group");

    if(parent){
        parent.appendChild(error);
    }

    input.classList.add("error-input");
}

  // ---------------- REMOVE ERROR ----------------
function removeError(input) {

    if(!input) return;


    const parent = input.closest(".form-group");


    if(parent){

        const error = parent.querySelector(".error-message");

        if(error){
            error.remove();
        }

    }


    input.classList.remove("error-input");

}
});
