<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>India Hair Transplant Landing</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/contact-form.css">
  <link rel="stylesheet" href="<?= base_url('assets/css/hair-transplant-cost.css') ?>">
</head>

<body>
  <div class="top-strip">
    Flat <strong>25% OFF</strong> on Transplant in Delhi – Limited slots this week!
  </div>

  <header class="hero" id="top">
    <div class="hero-grid">
      <div>
        <!-- LOGO ADDED BELOW -->
        <div class="hero-logo" style="margin-bottom:18px;">
          <img src="https://hair.akclinics.com/IHT2.png" alt="IHT Clinic Logo" style="height:56px;max-width:180px;width:auto;display:block;">
        </div>
        <div class="hero-eyebrow" style="color: #000;">#1 Hair Transplant Clinic in India</div>
        <h1 style="color: #000;">Bio-FUE Techniques for better Hair Growth.</h1>
        <p style="color: #000;">Restore natural density with safe, medically approved hair transplant techniques performed by trained doctors with 20+ years of expertise.</p>
        <div class="hero-usp">
          <div style="color: #000;">Experienced Surgeons</div>
          <div style="color: #000;">High Graft Survival Rates</div>
          <div style="color: #000;">International OT Safety Protocols</div>
          <div style="color: #000;">Affordable Pricing</div>
        </div>
        <div class="countdown" role="timer" style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin: 0 auto;">
          <h3 style="text-align:center;">✨ Offer ends in:</h3>
          <div class="timer-grid" style="display: flex; gap: 18px; justify-content: center;">
            <div class="timer-cell" style="background: #f47920;"><span id="days">00</span><small style="color: #fff;">Days</small></div>
            <div class="timer-cell" style="background: #f47920;"><span id="hours">00</span><small style="color: #fff;">Hrs</small></div>
            <div class="timer-cell" style="background: #f47920;"><span id="mins">00</span><small style="color: #fff;">Min</small></div>
            <div class="timer-cell" style="background: #f47920;"><span id="secs">00</span><small style="color: #fff;">Sec</small></div>
          </div>
        </div>
      </div>
      <aside class="leadcard">
        <h2>Book Your Free Consultation</h2>
        <p>Get a personalised graft estimate, treatment plan & the best offer for your city.</p>
        <?= view('partials/lead_form', [
          'prefix' => 'main',
          'form_id' => 'website-book-form',
          'form_name' => 'Book Consultation',
        ]) ?>
        <p class="legal-note">100% secure | No spam</p>
      </aside>
    </div>
  </header>

  <section>
    <div class="wrap">
      <div class="section-title">
        <span style="color: #000;">Our Treatment Process</span>
        <h2 style="color: #000;">A Proven Hair Transplant Process for Better Growth</h2>
      </div>
      <div class="process-steps-flex" style="display:flex;gap:28px;flex-wrap:wrap;justify-content:center;">
        <!-- Step 1 -->
        <div class="step-item" style="flex:1 1 185px;min-width:240px;max-width:265px;display:flex;flex-direction:column;align-items:center;">
          <div style="position:relative;width:100%;aspect-ratio:4/3;overflow:hidden;display:flex;align-items:center;justify-content:center;">
            <img src="assets/images/img1.jpg" alt="Scalp & Hair Analysis" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block;border-radius:12px;" />
            <span style="position:absolute;top:13px;left:13px;display:flex;align-items:center;justify-content:center;width:38px;height:38px;background:rgba(106, 82, 5, 0.15);box-shadow:0 0 6px 3px rgba(45,180,168,0.10);border-radius:50%;">
              <svg width="30" height="30" viewBox="0 0 30 30" style="display:block;border-radius:50%;" xmlns="http://www.w3.org/2000/svg">
                <circle cx="15" cy="15" r="14" fill="#f47920" fill-opacity="0.18" />
                <circle cx="15" cy="15" r="11" fill="#fff" fill-opacity="0.92" />
                <text x="50%" y="62%" text-anchor="middle" fill="#f47920" font-size="1em" font-weight="bold" style="font-family:sans-serif;">1</text>
              </svg>
            </span>
          </div>
          <h3 class="step-title" style="margin-top:16px; color: #000;">Scalp & Hair Analysis</h3>
          <p class="step-description" style="text-align:center; color: #000;">
            Detailed assessment of thinning patterns, donor area and scalp health through advanced trichoscopy.</p>
        </div>
        <!-- Step 2 -->
        <div class="step-item" style="flex:1 1 185px;min-width:240px;max-width:265px;display:flex;flex-direction:column;align-items:center;">
          <div style="position:relative;width:100%;aspect-ratio:4/3;overflow:hidden;display:flex;align-items:center;justify-content:center;">
            <img src="assets/images/img2.jpg" alt="Personalised Treatment Plan" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block;border-radius:12px;" />
            <span style="position:absolute;top:13px;left:13px;display:flex;align-items:center;justify-content:center;width:38px;height:38px;background:rgba(106, 82, 5, 0.15);box-shadow:0 0 6px 3px rgba(45,180,168,0.10);border-radius:50%;">
              <svg width="30" height="30" viewBox="0 0 30 30" style="display:block;border-radius:50%;" xmlns="http://www.w3.org/2000/svg">
                <circle cx="15" cy="15" r="14" fill="#f47920" fill-opacity="0.18" />
                <circle cx="15" cy="15" r="11" fill="#fff" fill-opacity="0.92" />
                <text x="50%" y="62%" text-anchor="middle" fill="#f47920" font-size="1em" font-weight="bold" style="font-family:sans-serif;">2</text>
              </svg>
            </span>
          </div>
          <h3 class="step-title" style="margin-top:16px; color: #000; ">Personalised Treatment Plan</h3>
          <p class="step-description" style="text-align:center; color: #000;">
            A dermatologist creates a customised plan including graft numbers, technique selection and supporting medical therapy.
          </p>
        </div>
        <!-- Step 3 -->
        <div class="step-item" style="flex:1 1 185px;min-width:240px;max-width:265px;display:flex;flex-direction:column;align-items:center;">
          <div style="position:relative;width:100%;aspect-ratio:4/3;overflow:hidden;display:flex;align-items:center;justify-content:center;">
            <img src="assets/images/img3.jpg" alt="Biocare FUE Sessions" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block;border-radius:12px;" />
            <span style="position:absolute;top:13px;left:13px;display:flex;align-items:center;justify-content:center;width:38px;height:38px;background:rgba(5,101,106,0.15);box-shadow:0 0 6px 3px rgba(45,180,168,0.10);border-radius:50%;">
              <svg width="30" height="30" viewBox="0 0 30 30" style="display:block;border-radius:50%;" xmlns="http://www.w3.org/2000/svg">
                <circle cx="15" cy="15" r="14" fill="#f47920" fill-opacity="0.18" />
                <circle cx="15" cy="15" r="11" fill="#fff" fill-opacity="0.92" />
                <text x="50%" y="62%" text-anchor="middle" fill="#f47920" font-size="1em" font-weight="bold" style="font-family:sans-serif;">3</text>
              </svg>
            </span>
          </div>
          <h3 class="step-title" style="margin-top:16px; color: #000;">Extraction & Implantation</h3>
          <p class="step-description" style="text-align:center; color: #000;">
            Surgeon-performed Bio-FUE using advanced punch tools, natural hairline planning and precise graft placement for fuller results.
          </p>
        </div>
        <!-- Step 4 -->
        <div class="step-item" style="flex:1 1 185px;min-width:240px;max-width:265px;display:flex;flex-direction:column;align-items:center;">
          <div style="position:relative;width:100%;aspect-ratio:4/3;overflow:hidden;display:flex;align-items:center;justify-content:center;">
            <img src="assets/images/img4.jpg" alt="Post-Treatment Care" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block;border-radius:12px;" />
            <span style="position:absolute;top:13px;left:13px;display:flex;align-items:center;justify-content:center;width:38px;height:38px;background:rgba(5,101,106,0.15);box-shadow:0 0 6px 3px rgba(45,180,168,0.10);border-radius:50%;">
              <svg width="30" height="30" viewBox="0 0 30 30" style="display:block;border-radius:50%;" xmlns="http://www.w3.org/2000/svg">
                <circle cx="15" cy="15" r="14" fill="#f47920" fill-opacity="0.18" />
                <circle cx="15" cy="15" r="11" fill="#fff" fill-opacity="0.92" />
                <text x="50%" y="62%" text-anchor="middle" fill="#f47920" font-size="1em" font-weight="bold" style="font-family:sans-serif;">4</text>
              </svg>
            </span>
          </div>
          <h3 class="step-title" style="margin-top:16px; color: #000;">Post-Treatment Recovery</h3>
          <p class="step-description" style="text-align:center; color: #000;">
            Healing boosters, PRP/GFC sessions, nutrition support and scheduled follow-ups for faster, healthier regrowth.
          </p>
        </div>
      </div>
      <div class="cta-card" style="display:flex; flex-direction:column; align-items:center; justify-content:center; min-height:215px; padding:16px 0 18px 0;">
        <!-- Center the professional content with more readable user space -->
        <div style="display: flex; flex-wrap: wrap; gap: 32px; align-items: stretch; justify-content: center; width: 100%; max-width:1200px; margin:auto; padding: 14px 0 6px;">
          <div id="professional-content" style="flex:2 1 380px; min-width:260px; display:flex; flex-direction:column; justify-content:center; align-items:flex-start; text-align:left; max-width:630px; padding:8px 20px 8px 0;">
            <h3 style="color:#000; font-size:1.35rem; font-weight:900; margin-bottom:10px; line-height:1.17; letter-spacing:-0.015em;">Speak to a Hair Transplant Specialist</h3>
            <p style="max-width:510px; font-size:1.09rem; line-height:1.5; color:#fff; margin-bottom:0;">
              Get a personalised scalp assessment and a customised Bio-FUE plan designed by expert surgeons. Confidential, accurate and focused on your best outcome.
            </p>
          </div>
          <div style="flex:0 1 280px; min-width:200px; display:flex; align-items:center; justify-content:center; padding:0 8px;">
            <button type="button" id="openPopupBtn" style="background:#f47920;color:#fff;border:none;padding:13px 0;border-radius:6px;width:100%;font-weight:bold;letter-spacing:.04em;font-size:1.07em;box-shadow:0 2px 8px rgba(244,121,32,0.15);cursor:pointer;transition:background 0.2s;">Book Free Consultation</button>
          </div>
        </div>
        <!-- Popup Modal -->
        <div id="appointmentPopup" style="display:none;position:fixed;z-index:99999;top:0;left:0;width:100vw;height:100vh;background:rgba(37,28,9,0.34);align-items:center;justify-content:center;">
          <div style="background:#fff;border-radius:22px;max-width:470px;width:97vw;box-shadow:0 12px 44px rgba(0,0,0,0.18);padding:30px 18px 16px 18px;position:relative;animation:popIn .22s cubic-bezier(.52,1.68,.38,.74);">
            <button id="closePopupBtn" style="position:absolute;top:8px;right:14px;background:transparent;border:0;font-size:2.1rem;line-height:1;cursor:pointer;color:#666;">&times;</button>
            <div style="margin-bottom:10px;">
              <div style="display:inline-flex;align-items:center;gap:7px;background:#e9f8fc;padding:5px 14px;border-radius:999px;font-size:0.98rem;color:#666;font-weight:600;letter-spacing:.01em;">
                <svg style="width:16px;height:16px;fill:#2db4a8;" viewBox="0 0 20 20">
                  <circle cx="10" cy="10" r="10" />
                </svg>
                <span id="offer-timer-label" style="display:inline-block;">
                  Offer ends in
                  <span id="popup-tt-mins" style="font-weight:700;">10</span>:
                  <span id="popup-tt-secs" style="font-weight:700;">00</span> min
                </span>
              </div>
            </div>
            <h2 style="font-size:1.22rem;font-weight:800;margin:0 0 8px 0;color:#18363b;">Book Your Free Hair Analysis</h2>
            <p style="color:#647680;font-size:0.99rem;margin:0 0 17px 0;line-height:1.36;">
              Save up to <span style="color:#666;font-weight:700;">25%</span> on your first transplant in <span style="color:#666;font-weight:600;">Delhi</span>.<br>
              Secure your slot & dermatologist assessment—no hidden fees, no obligation.
            </p>
            <?= view('partials/lead_form', [
              'prefix' => 'popup',
              'form_id' => 'website-popup-form',
              'form_name' => 'Popup Book Consultation',
              'extra_class' => 'lead-capture',
            ]) ?>

            <div style="text-align:center;font-size:12px;color:#9e9e9e;margin-top:4px;">100% secure | No spam ever</div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="results">
    <div class="wrap">

      <div class="section-title">
        <span style="color:#000;">Real Results, Real People</span>
        <h2 style="color:#000;">Before & After: Hair Transformation</h2>
        <p style="color:#000;">*Results may vary. Shown: Actual transformation effect.</p>
      </div>

      <div class="results-wrap">

        <div class="carousel-container large-img-mode">

          <div class="carousel-viewport">
            <div class="carousel" id="resultsCarousel">

              <!-- Image 1 -->
              <div class="carousel-slide active">
                <div class="single-img-view">
                  <div class="img-label">Results</div>
                  <img src="<?= base_url('assets/images/img5.jpg') ?>" alt="After hair restoration">
                </div>
              </div>

              <!-- Image 2 -->
              <div class="carousel-slide">
                <div class="single-img-view">
                  <div class="img-label">Results</div>
                  <img src="<?= base_url('assets/images/img6.jpg') ?>" alt="Before hair restoration">
                </div>
              </div>

              <!-- Image 3 -->
              <div class="carousel-slide">
                <div class="single-img-view">
                  <div class="img-label">Results</div>
                  <img src="<?= base_url('assets/images/img7.jpg') ?>" alt="Hair transformation result">
                </div>
              </div>

            </div>
          </div>

          <div class="carousel-indicators" id="carouselIndicators" aria-label="Results slides"></div>

        </div>

        <div class="result-metrics-2x2">

          <div class="metrics-row metrics-row-top">

            <div class="metric-box metrics-same-size">

              <div class="metric-icon">
                <svg width="28" height="28" viewBox="0 0 20 20" aria-hidden="true">
                  <circle cx="10" cy="10" r="9" fill="#f5f5f5" />
                  <path d="M7.5 11.5l2.2 2.1 3.3-4.3"
                    stroke="#000"
                    stroke-width="2"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </div>

              <div class="metric-content">
                Fuller, thicker appearance
              </div>

            </div>

            <div class="metric-box metrics-same-size">

              <div class="metric-icon">
                <svg width="28" height="28" viewBox="0 0 20 20" aria-hidden="true">
                  <path d="M3 15c3-3 6-7 14-7"
                    stroke="#000"
                    stroke-width="2"
                    fill="none"
                    stroke-linecap="round" />
                  <circle cx="16" cy="8" r="1.2" fill="#000" />
                </svg>
              </div>

              <div class="metric-content">
                Real, natural-looking results
              </div>

            </div>

          </div>

          <div class="metrics-row metrics-row-bottom">

            <div class="metric-box metrics-same-size">

              <div class="metric-icon">
                <svg width="28" height="28" viewBox="0 0 20 20" aria-hidden="true">
                  <circle cx="10" cy="7" r="4" fill="#000" fill-opacity=".13" />
                  <circle cx="10" cy="7" r="2.3" fill="#000" />
                  <rect x="5" y="12" width="10" height="5" rx="2.2"
                    fill="#000"
                    fill-opacity=".13"
                    stroke="#000"
                    stroke-width="1" />
                </svg>
              </div>

              <div class="metric-content">
                Minimal downtime & faster healing
              </div>

            </div>

            <div class="metric-box metrics-same-size">

              <div class="metric-icon">
                <svg width="28" height="28" viewBox="0 0 20 20" aria-hidden="true">
                  <path d="M4 12c0-2.5 2.2-5.5 6-5.5s6 3 6 5.5v2c0 1-.8 1.8-1.8 1.8H5.8A1.8 1.8 0 0 1 4 14v-2z"
                    fill="#000"
                    fill-opacity=".13"
                    stroke="#000"
                    stroke-width="1" />
                  <path d="M10 10v3.2"
                    stroke="#000"
                    stroke-width="1.2"
                    stroke-linecap="round" />
                </svg>
              </div>

              <div class="metric-content">
                Great Results since 2007
              </div>

            </div>

          </div>

          <div class="metrics-row metrics-row-btn">

            <div class="results-cta-wrap">

              <a href="javascript:void(0)"
                id="openPopupBtn"
                class="cta-btn results-cta-btn">
                See If You Qualify
              </a>

            </div>

          </div>

        </div>

      </div>

    </div>
  </section>



  <div class="section-title" style="margin-top:42px; margin-bottom:32px;">
    <span style="color:#000">Trusted by 10,000+ Patients Worldwide</span>
    <h2 style="color:#000">Begin Your Hair Restoration Journey</h2>
    <p style="color:#000">Share your details to get a personalised hair transplant assessment from our experts.</p>
  </div>
  <div id="htc" style="background:#fff;max-width:76%;width:96%;margin:32px auto 28px auto;padding:32px 24px 26px 24px;border-radius:18px;box-shadow:0 8px 32px rgba(45,68,103,0.11);display:flex;flex-direction:column;gap:20px;">
    <div id="gradeSection" style="text-align:center; margin-bottom:16px;">
      <!-- <h3 style="font-size:1.09rem;color:#227dac; font-weight:700;margin-bottom:10px;">Select Your Baldness Grade</h3> -->
      <div id="gradePreview" style="display:flex;justify-content:center;gap:10px;flex-wrap:wrap;margin:0 auto 6px;">
        <img decoding="async" src="https://hairfreehairgrow.com/wp-content/uploads/2025/03/grade-1.webp" data-grade="1" alt="Grade 1" title="Hair Transplant Cost Calculator 1" style="width:58px;height:58px;object-fit:cover;border-radius:9px;border:2.1px solid #e6eafd;transition:border .19s;cursor:pointer;">
        <img decoding="async" src="https://hairfreehairgrow.com/wp-content/uploads/2025/03/Grade-2.webp" data-grade="2" alt="Grade 2" title="Hair Transplant Cost Calculator 2" style="width:58px;height:58px;object-fit:cover;border-radius:9px;border:2.1px solid #e6eafd;transition:border .19s;cursor:pointer;">
        <img decoding="async" src="https://hairfreehairgrow.com/wp-content/uploads/2025/03/Grade-3.webp" data-grade="3" alt="Grade 3" title="Hair Transplant Cost Calculator 3" style="width:58px;height:58px;object-fit:cover;border-radius:9px;border:2.1px solid #e6eafd;transition:border .19s;cursor:pointer;">
        <img decoding="async" src="https://hairfreehairgrow.com/wp-content/uploads/2025/03/Grade-4.webp" data-grade="4" alt="Grade 4" title="Hair Transplant Cost Calculator 4" style="width:58px;height:58px;object-fit:cover;border-radius:9px;border:2.1px solid #e6eafd;transition:border .19s;cursor:pointer;">
        <img decoding="async" src="https://hairfreehairgrow.com/wp-content/uploads/2025/03/Grade-5.webp" data-grade="5" alt="Grade 5" title="Hair Transplant Cost Calculator 5" style="width:58px;height:58px;object-fit:cover;border-radius:9px;border:2.1px solid #e6eafd;transition:border .19s;cursor:pointer;">
        <img decoding="async" src="https://hairfreehairgrow.com/wp-content/uploads/2025/03/Grade-6.webp" data-grade="6" alt="Grade 6" title="Hair Transplant Cost Calculator 6" style="width:58px;height:58px;object-fit:cover;border-radius:9px;border:2.1px solid #e6eafd;transition:border .19s;cursor:pointer;">
        <img decoding="async" src="https://hairfreehairgrow.com/wp-content/uploads/2025/03/grade-7.webp" data-grade="7" alt="Grade 7" title="Hair Transplant Cost Calculator 7" style="width:58px;height:58px;object-fit:cover;border-radius:9px;border:2.1px solid #e6eafd;transition:border .19s;cursor:pointer;">
      </div>
      <small id="graftRange" style="display:block;color:#396d96;font-weight:600;font-size:.99em;margin-top:4px;"></small>
    </div>
    <!-- Form -->
<form id="costCalculatorForm" class="journey-form journey-form--two" action="#" method="post" novalidate>

    <!-- Hidden Fields -->

    <input type="hidden" id="source_url" name="source_url">

    <input type="hidden" id="source_id" name="source_id" value="website">


    <input type="hidden" id="campaign_id" name="campaign_id" value="120212345678901234">

    <input type="hidden" id="campaign_name" name="campaign_name" value="Website">


    <input type="hidden" id="ad_id" name="ad_id" value="1">

    <input type="hidden" id="ad_name" name="ad_name" value="1">


    <input type="hidden" id="form_id" name="form_id" value="website-contact-form">

    <input type="hidden" id="form_name" name="form_name" value="Contact Us">


    <input type="hidden" id="contact_message" name="message" value="">

    <input type="hidden" id="procedure_category" name="procedure_category" value="1">



    <!-- Name -->

    <div class="form-group">

        <input
            id="jn"
            type="text"
            name="name"
            placeholder="Enter your name"
        >

        <small id="jn_error" class="error-message"></small>

    </div>




    <!-- Phone -->

    <div class="form-group">

        <input
            id="jp"
            type="tel"
            name="phone"
            placeholder="Enter 10-digit number"
            maxlength="10"
        >

        <small id="jp_error" class="error-message"></small>

    </div>




    <!-- Email -->

    <div class="form-group">

        <input
            id="je"
            type="email"
            name="email"
            placeholder="Enter your email"
        >

        <small id="je_error" class="error-message"></small>

    </div>




    <!-- City -->

    <div class="form-group">

        <input
            id="jc"
            type="text"
            name="city"
            placeholder="Type your city"
        >

        <small id="jc_error" class="error-message"></small>

    </div>




    <!-- Preferred Location -->

    <div class="form-group">

        <select 
            id="preferredLocation"
            name="preferred_location"
        >

            <option value="">
                Select preferred location
            </option>

            <option value="Delhi">
                Delhi
            </option>

            <option value="Ludhiana">
                Ludhiana
            </option>

            <option value="Bangalore">
                Bangalore
            </option>

        </select>

    </div>




    <!-- Technique -->

    <div class="form-group">

        <select 
            id="technique"
            name="technique"
        >

            <option value="35">
                Sapphire FUE
            </option>

            <option value="30">
                Implanter FUE
            </option>

            <option value="45">
                BIG-FUE
            </option>

            <option value="25">
                BIO-FUE
            </option>

            <option value="70">
                DHI
            </option>

        </select>

    </div>




    <!-- Submit Button -->

    <button 
        type="submit" 
        class="btn-cta btn--block"
    >

        Calculate Your Hair Transplant Cost

    </button>



    <p 
        id="contactFormStatus" 
        role="status"
        style="display:none;margin:12px 0 0;font-size:14px;"
    ></p>


</form>

    <div id="result" style="background:#f7fafc;border-radius:10px;padding:16px 10px;box-shadow:0 1px 3px rgba(45,68,103,.03);margin-top:12px;display:none;">
      <h3 style="margin:7px 0 22px 0;font-size:1.16rem;text-align:center;color:#194b60;">
        <span id="greeting"></span> Our Estimated Package:
        <span id="highlightBox" style="background:linear-gradient(90deg,#287daa,#47bcc3);color:#fff;font-weight:700;padding:4px 17px;border-radius:8px;display:inline-block;margin-left:3px;">₹<span id="totalLow"></span> – ₹<span id="totalHigh"></span></span>
      </h3>
      <div style="display:flex;flex-wrap:wrap;gap:13px 28px;justify-content:center;">
        <div style="font-size:1em;"><strong style="color:#3e5978">City:</strong> <span id="cityDisplay"></span></div>
        <div style="font-size:1em;"><strong style="color:#3e5978">Preferred Location:</strong> <span id="locationDisplay"></span></div>
        <div style="font-size:1em;"><strong style="color:#3e5978">Technique:</strong> <span id="techniqueDisplay"></span></div>
        <div style="font-size:1em;"><strong style="color:#3e5978">Baldness Grade:</strong> <span id="gradeDisplay"></span></div>
        <div style="font-size:1em;"><strong style="color:#3e5978">Market Price:</strong> <span class="highlightMarket" style="background:#e7f3ee;color:#219b7f;font-weight:700;padding:2px 12px;border-radius:5px;">₹<span id="marketPriceRange"></span></span></div>
      </div>
      <div id="beforeAfter" style="margin-top:15px;text-align:center;"></div>
    </div>
  </div>






  <!-- 
  <section>
    <div class="wrap">
      <div class="section-title">
        <span>Why Our Dermatologists Are Trusted</span>
        <h2>Safety-first clinics with advanced training</h2>
      </div>
      <div class="trust-strip">
        <div class="trust-card">
          <strong>Advanced Training</strong>
          <p>Team led by top dermatologists with 10+ years of transplant expertise.</p>
        </div>
        <div class="trust-card">
          <strong>Clinical Excellence</strong>
          <p>Protocols published across global dermat journals with peer review.</p>
        </div>
        <div class="trust-card">
          <strong>Patient Satisfaction</strong>
          <p>4.8/5 average rating from transplant patients nationwide.</p>
        </div>
        <div class="trust-card">
          <strong>Safety Record</strong>
          <p>0 major OT incidents in the last 36 months across clinics.</p>
        </div>
      </div>
    </div>
  </section> -->


  <section class="why-eugenix-section">
    <div class="container relative">
      <div class="block-title row v-center ptb-20 pt-0 m-0" style="justify-content:center; text-align:center;">
        <div class="col-lg-12 col-md-12 col-sm-12" style="display:flex;justify-content:center;">
          <div class="section-title">
            <span style="color: #000;">Why Choose IHT Clinic?</span>
            <h2 style="color: #000;">Advanced Hair Restoration Services We Offer</h2>
          </div>
        </div>
      </div>
      <!-- Horizontal Scrolling Carousel -->
      <div class="choose-features-croulling" style="margin-top:26px; flex-direction:column; align-items:center;">
        <div class="choose-features-slider center-show scroll-x-style">
          <!-- Box 1: Male Hair Transplant -->
          <div class="choose-feature-box-style serv-box d-flex trans">
            <a class="card-link" href="#"></a>
            <div class="textbox" style="margin: 0 auto; display:flex; flex-direction:column; align-items:center; justify-content:center;">
              <div class="box-image-under-heading" style="margin-bottom:8px;">
                <i class="iconbox d-flex v-center j-center" style="justify-content:center;align-items:center;">
                  <img src="assets/images/male-ht.png" alt="Male Hair Transplant Icon" style="width:58px;height:58px;object-fit:contain;display:block;margin:0 auto;filter:brightness(0) invert(0);">
                </i>
              </div>
              <h4 style="margin:8px 0 0 0;font-size:1.12em;color:#000;text-align:center;">Male Hair Transplant</h4>
            </div>
          </div>
          <!-- Box 2: Female Hair Transplantation -->
          <div class="choose-feature-box-style serv-box d-flex trans">
            <a class="card-link" href="#"></a>
            <div class="textbox" style="margin: 0 auto; display:flex; flex-direction:column; align-items:center; justify-content:center;">
              <div class="box-image-under-heading" style="margin-bottom:8px;">
                <i class="iconbox d-flex v-center j-center" style="justify-content:center;align-items:center;">
                  <img src="assets/images/female-ht.png" alt="Female Hair Transplant Icon" style="width:58px;height:58px;object-fit:contain;display:block;margin:0 auto;">
                </i>
              </div>
              <h4 style="margin:8px 0 0 0;font-size:1.12em;color:#000;text-align:center;">Female Hair Transplantation</h4>
            </div>
          </div>
          <!-- Box 3: Beard Hair Transplant -->
          <div class="choose-feature-box-style serv-box d-flex trans">
            <a class="card-link" href="#"></a>
            <div class="textbox" style="margin: 0 auto; display:flex; flex-direction:column; align-items:center; justify-content:center;">
              <div class="box-image-under-heading" style="margin-bottom:8px;">
                <i class="iconbox d-flex v-center j-center" style="justify-content:center;align-items:center;">
                  <img src="assets/images/beard-ht.png" alt="Beard Hair Transplant Icon" style="width:58px;height:58px;object-fit:contain;display:block;margin:0 auto;">
                </i>
              </div>
              <h4 style="margin:8px 0 0 0;font-size:1.12em;color:#000;text-align:center;">Beard Hair Transplant</h4>
            </div>
          </div>

          <!-- Box 6: Eyebrow Hair Transplant -->
          <div class="choose-feature-box-style serv-box d-flex trans">
            <a class="card-link" href="#"></a>
            <div class="textbox" style="margin: 0 auto; display:flex; flex-direction:column; align-items:center; justify-content:center;">
              <div class="box-image-under-heading" style="margin-bottom:8px;">
                <i class="iconbox d-flex v-center j-center" style="justify-content:center;align-items:center;">
                  <img src="assets/images/male-ht.png" alt="Eyebrow Hair Transplant Icon" style="width:58px;height:58px;object-fit:contain;display:block;margin:0 auto;">
                </i>
              </div>
              <h4 style="margin:8px 0 0 0;font-size:1.12em;color:#000;text-align:center;">Eyebrow Hair Transplant</h4>
            </div>
          </div>
          <!-- Box 7: Body Hair Transplant -->
          <div class="choose-feature-box-style serv-box d-flex trans">
            <a class="card-link" href="#"></a>
            <div class="textbox" style="margin: 0 auto; display:flex; flex-direction:column; align-items:center; justify-content:center;">
              <div class="box-image-under-heading" style="margin-bottom:8px;">
                <i class="iconbox d-flex v-center j-center" style="justify-content:center;align-items:center;">
                  <img src="assets/images/body-ht.png" alt="Body Hair Transplant Icon" style="width:58px;height:58px;object-fit:contain;display:block;margin:0 auto;">
                </i>
              </div>
              <h4 style="margin:8px 0 0 0;font-size:1.12em;color:#000;text-align:center;">Body Hair Transplant</h4>
            </div>
          </div>
          <!-- Box 9: FUE (Follicular Unit Extraction) -->
          <div class="choose-feature-box-style serv-box d-flex trans">
            <a class="card-link" href="#"></a>
            <div class="textbox" style="margin: 0 auto; display:flex; flex-direction:column; align-items:center; justify-content:center;">
              <div class="box-image-under-heading" style="margin-bottom:8px;">
                <i class="iconbox d-flex v-center j-center" style="justify-content:center;align-items:center;">
                  <img src="assets/images/hairline-ht.png" alt="FUE Follicular Unit Extraction Icon" style="width:58px;height:58px;object-fit:contain;display:block;margin:0 auto;">
                </i>
              </div>
              <h4 style="margin:8px 0 0 0;font-size:1.12em;color:#000;text-align:center;">FUE - Follicular Unit Extraction</h4>
            </div>
          </div>
        </div>
        <!-- 4 Dots pagination indicator below carousel -->
        <div class="carousel-dots" style="display: flex; justify-content: center; align-items: center; margin-top: 18px; gap: 8px;">
          <span class="carousel-dot active"></span>
          <span class="carousel-dot"></span>
          <span class="carousel-dot"></span>
          <span class="carousel-dot"></span>
        </div>
        <div class="carousel-hint" style="margin-top:10px; text-align:center; color:#888; font-size:1em;">
          <span style="display:none;" class="show-on-touch">Swipe left/right</span>

        </div>
      </div>
    </div>
  </section>

  <section class="testimonial-section ptb-60 bg5">
    <div class="parallelogram_shape">
      <div class="shape_1"></div>
      <div class="shape_2"></div>
      <div class="shape_3"></div>
    </div>
    <div class="container relative">
      <div class="block-title row v-center ptb-20 pt-0 m-0">
        <div class="col-lg-8 col-md-8 col-sm-12 left-block">
          <div class="textbox wow fadeInUp" data-wow-delay="0.2s" style="display:flex;justify-content:center;align-items:center;text-align:center;">
            <div style="font-size:2.6em;font-weight:bold;letter-spacing:1px;color:#000;width:100%;">Reviews on Google</div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 right-block desk_view"></div>
      </div>
      <div class="review-block wow fadeInUp" data-wow-delay="0.2s">
        <script defer async src='https://cdn.trustindex.io/loader.js?906599d1520f8065485696d3394'></script>
      </div>
    </div>
  </section>

  <section class="whychoose-section bg4 ptb-60" style="background: #f2f6fd;">
    <div class="container relative">
      <div class="row v-center whychoose-inner" style="align-items:stretch; justify-content:center; gap:32px;">
        <!-- Left Side: Title with BIG Logo -->
        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 left-block d-flex align-items-center" style="display:flex; flex-direction:column; justify-content:center; align-items:center; max-width:420px; min-width:330px;">
          <div class="block-logo" style="width:100%;text-align:center;margin-bottom:25px;">
            <img src="https://hair.akclinics.com/IHT2.png" alt="IHT Logo" style="width:120px; max-width:100%; margin:0 auto; display:block; filter:drop-shadow(0 2px 8px rgba(34,146,232,0.18));">
          </div>
          <div class="block-title" style="width:100%; text-align: center;">
            <h1 style="color: #000; border-left: 4px solidrgb(232, 130, 34); padding-left:16px; font-weight:bold; display:inline-block; margin:0;">
              <b style="color: #000;">Why Choose IHT India?</b>
            </h1>
            <p style="margin-top: 18px; color:#666; font-size:1.12em;">
              Trusted by Celebrities, Influencers, and Other Well-Known Personalities<br>
              Led by Dr. Kapil Dua & Dr. Aman Dua, IHT follows international protocols and gold-standard practices in hair transplantation.
            </p>
          </div>
        </div>
        <!-- Right Side: Attractive Content (Larger Icon, Modern Cards) -->
        <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 right-block wow fadeInRight" data-wow-delay="0.2s" style="display:flex; flex-direction:column; justify-content:center; margin:0;">
          <div class="whychoose-attract" style="display:flex; flex-direction:column; align-items:flex-start; gap:30px; width:100%;">
            <!-- Modern highlights with big icons and border-left accent -->
            <div class="whychoose-row-modern" style="display:flex; align-items:flex-start; gap:26px; flex-wrap:wrap; width:100%;">
              <!-- Card 1 -->
              <div class="whychoose-modern-card" style="background: #fff; border-radius:15px; box-shadow:0 4px 22px 0 rgba(232,98,34,0.11); padding:26px 18px 24px 0; display:flex; align-items:center; flex:1 1 44%; min-width:270px; border-left:5px solid #e87b22; position:relative;">
                <div class="modern-iconhold logo-hide-on-mobile" style="width:76px; min-width:76px; height:76px; background:#e66a00; border-radius:13px; display:flex; align-items:center; justify-content:center; margin-left:-38px; margin-right:24px; box-shadow:0 3px 14px 0 rgba(230, 106, 0, 0.2);">
                  <img src="assets/images/iscon1.png" alt="whychoose_icon_1" style="width:52px;">
                </div>
                <div class="modern-textbox" style="flex:1;">
                  <div class="heading-4" style="color:#000; font-size:1.25em; font-weight:700;">10,000+</div>
                  <div style="color:#666; margin-bottom:0; font-size:1.08em;">Hair Transplant Procedures Performed</div>
                </div>
              </div>
              <!-- Card 2 -->
              <div class="whychoose-modern-card" style="background: #fff; border-radius:15px; box-shadow:0 4px 22px 0 rgba(232,98,34,0.11); padding:26px 18px 24px 0; display:flex; align-items:center; flex:1 1 44%; min-width:270px; border-left:5px solid #e87b22; position:relative;">
                <div class="modern-iconhold logo-hide-on-mobile" style="width:76px; min-width:76px; height:76px; background:#e66a00; border-radius:13px; display:flex; align-items:center; justify-content:center; margin-left:-38px; margin-right:24px; box-shadow:0 3px 14px 0 rgba(230, 106, 0, 0.2);">
                  <img src="assets/images/icon2.png" alt="whychoose_icon_2" style="width:52px;">
                </div>
                <div class="modern-textbox" style="flex:1;">
                  <div class="heading-4" style="color:#000; font-size:1.25em; font-weight:700;">Free Assessment</div>
                  <div style="color:#666; margin-bottom:0; font-size:1.08em;">Just a Phone Call or WhatsApp Away!</div>
                </div>
              </div>
            </div>
            <!-- Second Row -->
            <div class="whychoose-row-modern" style="display:flex; align-items:flex-start; gap:26px; flex-wrap:wrap; width:100%;">
              <!-- Card 3 -->
              <div class="whychoose-modern-card" style="background: #fff; border-radius:15px; box-shadow:0 4px 22px 0 rgba(232,98,34,0.11); padding:26px 18px 24px 0; display:flex; align-items:center; flex:1 1 44%; min-width:270px; border-left:5px solid #e87b22; position:relative;">
                <div class="modern-iconhold logo-hide-on-mobile" style="width:76px; min-width:76px; height:76px; background:#e66a00; border-radius:13px; display:flex; align-items:center; justify-content:center; margin-left:-38px; margin-right:24px; box-shadow:0 3px 14px 0 rgba(230, 106, 0, 0.2);">
                  <img src="assets/images/icon3.png" alt="whychoose_icon_3" style="width:52px;">
                </div>
                <div class="modern-textbox" style="flex:1;">
                  <div class="heading-4" style="color:#000; font-size:1.25em; font-weight:700;">20+ Years Experience</div>
                  <div style="color:#666; margin-bottom:0; font-size:1.08em;">in Hair Restoration Procedures</div>
                </div>
              </div>
              <!-- Card 4 -->
              <div class="whychoose-modern-card" style="background: #fff; border-radius:15px; box-shadow:0 4px 22px 0 rgba(232,98,34,0.11); padding:26px 18px 24px 0; display:flex; align-items:center; flex:1 1 44%; min-width:270px; border-left:5px solid #e87b22; position:relative;">
                <div class="modern-iconhold logo-hide-on-mobile" style="width:76px; min-width:76px; height:76px; background:#e66a00; border-radius:13px; display:flex; align-items:center; justify-content:center; margin-left:-38px; margin-right:24px; box-shadow:0 3px 14px 0 rgba(230, 106, 0, 0.2);">
                  <img src="assets/images/icon4.png" alt="whychoose_icon_4" style="width:52px;">
                </div>
                <div class="modern-textbox" style="flex:1;">
                  <div class="heading-4" style="color:#000; font-size:1.25em; font-weight:700;">4.9 Google Ratings</div>
                  <div style="color:#666; margin-bottom:0; font-size:1.08em;">From Happy Customers across the World</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <style>
          /* Hide icons on screens smaller than 768px (responsive "mobile" break) */
          @media (max-width: 767px) {
            .logo-hide-on-mobile {
              display: none !important;
            }
          }
        </style>
        <!-- END right block -->
      </div>
    </div>
  </section>



  <section class="faq">
    <div class="wrap">
      <div class="section-title">
        <span style="color: #000;">Frequently Asked Questions</span>
        <h2 style="color: #000;">Answers About Hair Transplant & Regrowth</h2>
      </div>

      <div class="faq-item">
        <details>
          <summary style="color: #000;">Who is the ideal candidate for a hair transplant?</summary>
          <div class="faq-content" style="color: #000;">
            Anyone with stable hair loss, a healthy donor area and realistic expectations is suitable.
            A surgeon evaluates your grade, donor strength and medical history before confirming eligibility.
          </div>
        </details>
      </div>

      <div class="faq-item">
        <details>
          <summary style="color: #000;">What is Bio-FUE and how is it different?</summary>
          <div class="faq-content" style="color: #000;">
            Bio-FUE uses advanced graft extraction with growth-enhancing solutions for higher survival and natural density.
            It offers faster healing, minimal scarring and better overall regrowth compared to basic FUE.
          </div>
        </details>
      </div>

      <div class="faq-item">
        <details>
          <summary style="color: #000;">Are hair transplant results permanent?</summary>
          <div class="faq-content" style="color: #000;">
            Yes. Donor grafts are genetically permanent and continue to grow for a lifetime.
            Maintenance therapies like PRP or GFC help protect your existing non-transplanted hair.
          </div>
        </details>
      </div>

      <div class="faq-item">
        <details>
          <summary style="color: #000;">How long does it take to see full results?</summary>
          <div class="faq-content" style="color: #000;">
            Initial growth begins around 3 months, visible density at 6 months, and full maturation by 9–12 months.
            Crown areas may take slightly longer.
          </div>
        </details>
      </div>

      <div class="faq-item">
        <details>
          <summary style="color: #000;">Is the surgery painful or risky?</summary>
          <div class="faq-content" style="color: #000;">
            The procedure is performed under local anaesthesia, making it comfortable.
            Risks are minimal when done by trained surgeons under sterile OT conditions using proper graft handling protocols.
          </div>
        </details>
      </div>

      <div class="faq-item">
        <details>
          <summary style="color: #000;">What is the downtime after a hair transplant?</summary>
          <div class="faq-content" style="color: #000;">
            Most patients return to routine activities in 2–3 days.
            Redness and tiny scabs heal within 7–10 days with proper aftercare.
          </div>
        </details>
      </div>

      <div class="faq-item">
        <details>
          <summary style="color: #000;">How many grafts do I need?</summary>
          <div class="faq-content" style="color: #000;">
            Graft requirement depends on your baldness grade, hair characteristics, density goals and donor supply.
            A surgeon calculates this during your scalp assessment.
          </div>
        </details>
      </div>

      <div class="footer-cta">
        <h3 style="color: #000;">Still have questions?</h3>
        <p style="color: #000;">Speak directly with our hair transplant specialist for a personalised plan.</p>
        <a href="tel:+9109779944207" style="background: #e66a00; color: #fff; font-weight: 700; font-size: 1.13em; text-decoration: none; padding: 10px 20px; border-radius: 5px;">Call 097799 44207</a>
      </div>
  </section>
  <section>
    <div class="wrap">
      <div class="section-title">
        <span style="color: #000;">Get the Most Natural-Looking Hair Transplant Results</span>
      </div>

      <div class="tag-cloud">
        <span class="tag" style="color: #000;">Hair Transplant Cost</span>
        <span class="tag" style="color: #000;">FUE Hair Transplant</span>
        <span class="tag" style="color: #000;">DHI Hair Transplant</span>
        <span class="tag" style="color: #000;">Bio-FUE Hair Transplant</span>
        <span class="tag" style="color: #000;">Best Hair Transplant Surgeon</span>
        <span class="tag" style="color: #000;">Hair Transplant Technique</span>
        <span class="tag" style="color: #000;">Hair Transplant in India</span>
        <span class="tag" style="color: #000;">Graft Count & Coverage</span>
        <span class="tag" style="color: #000;">Hairline Design</span>
        <span class="tag" style="color: #000;">Crown Hair Transplant</span>
        <span class="tag" style="color: #000;">Temple Point Restoration</span>
        <span class="tag" style="color: #000;">Hair Transplant Before & After</span>
        <span class="tag" style="color: #000;">Minimal Downtime Transplant</span>
        <span class="tag" style="color: #000;">High Graft Survival Rate</span>
        <span class="tag" style="color: #000;">Donor Area Evaluation</span>

      </div>
    </div>
  </section>

  <footer>
    © 2025 IHT Clinic. Dermatologist-led Hair Transplant & Regrowth Care.
  </footer>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <!-- jQuery Validate -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>

  <!-- Select2 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css">

  <!-- Select2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

  <!-- SweetAlert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    const PROCEDURE_CATEGORIES_URL = "<?= base_url('procedure-categories') ?>";
    const CONTACT_SUBMIT_URL = "<?= base_url('contact-submit') ?>";
  </script>

  <!-- Main JS -->
  <script src="<?= base_url('assets/js/main.js') ?>"></script>

  <!-- Contact Form JS -->
  <script src="<?= base_url('assets/js/contact.js') ?>"></script>
  <script src="<?= base_url('assets/js/contact-cost.js') ?>"></script>

</body>

</html>