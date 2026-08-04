<?php
/**
 * Reusable lead capture form.
 *
 * @var string $prefix Unique prefix for element IDs (required when multiple forms on a page)
 * @var string $form_id Optional form_id hidden value
 * @var string $form_name Optional form_name hidden value
 * @var string $extra_class Optional extra CSS classes on the <form>
 */
$prefix     = $prefix ?? 'lead';
$form_id    = $form_id ?? 'website-book-form';
$form_name  = $form_name ?? 'Book Consultation';
$extra_class = trim($extra_class ?? '');
$form_class  = trim('leadform ' . $extra_class);
?>
<style>
.select2-results__option {
  color: #000 !important;
}
</style>
<form class="<?= esc($form_class) ?>" novalidate>

  <input type="hidden" id="<?= esc($prefix) ?>_source_url" name="source_url">
  <input type="hidden" id="<?= esc($prefix) ?>_source_id" name="source_id" value="website">

  <input type="hidden" id="<?= esc($prefix) ?>_campaign_id" name="campaign_id" value="120212345678901234">
  <input type="hidden" id="<?= esc($prefix) ?>_campaign_name" name="campaign_name" value="Website">

  <input type="hidden" id="<?= esc($prefix) ?>_ad_id" name="ad_id" value="1">
  <input type="hidden" id="<?= esc($prefix) ?>_ad_name" name="ad_name" value="1">

  <input type="hidden" id="<?= esc($prefix) ?>_form_id" name="form_id" value="<?= esc($form_id) ?>">
  <input type="hidden" id="<?= esc($prefix) ?>_form_name" name="form_name" value="<?= esc($form_name) ?>">


  <!-- Name -->
  <div class="field">
    <input 
      id="<?= esc($prefix) ?>_name" 
      name="name" 
      type="text" 
      placeholder="Full Name" 
      >

    <div class="error-message" id="<?= esc($prefix) ?>_name_error"></div>
  </div>


  <!-- Phone -->
  <div class="field">
    <input 
      id="<?= esc($prefix) ?>_phone" 
      name="phone" 
      type="tel" 
      placeholder="Mobile (10-digit number)" 
      pattern="[0-9]{10}" 
      maxlength="10" 
      >

    <div class="error-message" id="<?= esc($prefix) ?>_phone_error"></div>
  </div>


  <!-- Email -->
  <div class="field">
    <input 
      id="<?= esc($prefix) ?>_email" 
      name="email" 
      type="email" 
      placeholder="Email" 
      >

    <div class="error-message" id="<?= esc($prefix) ?>_email_error"></div>
  </div>


  <!-- City -->
  <div class="field">

    <select 
      id="<?= esc($prefix) ?>_city" 
      name="city" 
      required>

      <option value="">Select city</option>
      <option value="Delhi">Delhi</option>
      <option value="Bangalore">Bangalore</option>
      <option value="Mumbai">Mumbai</option>
      <option value="Hyderabad">Hyderabad</option>
      <option value="Chennai">Chennai</option>
      <option value="Pune">Pune</option>
      <option value="Gurugram">Gurugram</option>
      <option value="Noida">Noida</option>
      <option value="Chandigarh">Chandigarh</option>

    </select>

    <div class="error-message" id="<?= esc($prefix) ?>_city_error"></div>

  </div>


  <!-- Procedure -->
  <div class="field">

    <select 
      id="<?= esc($prefix) ?>_procedure_category" 
      name="procedure_category" 
      class="procedure-category" 
      required>

      <option value=""></option>

    </select>

    <div class="error-message" id="<?= esc($prefix) ?>_procedure_category_error"></div>

  </div>



  <!-- Consent -->
  <label class="consent-box">

    <input 
      type="checkbox" 
      id="<?= esc($prefix) ?>_consent" 
      name="consent" 
      required>

    <span>
      I agree to be contacted by IHT Clinic.
    </span>

  </label>

  <div class="error-message" id="<?= esc($prefix) ?>_consent_error"></div>



  <!-- Submit Button -->
  <button 
    type="submit" 
    style="
      background:#f47920;
      color:#fff;
      border:none;
      padding:13px 0;
      border-radius:6px;
      width:100%;
      font-weight:bold;
      letter-spacing:.04em;
      font-size:1.07em;
      box-shadow:0 2px 8px rgba(244,121,32,0.15);
      cursor:pointer;
      transition:background 0.2s;
    ">
    
    Book Free Consultation

  </button>


</form>