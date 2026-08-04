// Popup Timer Script
(function(){
  // 10 min timer (per session)
  const MS = 10*60*1000, KEY = "ht_popup_expiry";
  let expiry = +sessionStorage.getItem(KEY)||0, now = Date.now();
  if (!expiry || expiry < now) {
      expiry = now + MS; sessionStorage.setItem(KEY, expiry);
  }
  var elM = document.getElementById("popup-tt-mins");
  var elS = document.getElementById("popup-tt-secs");
  function pad(n){return String(n).padStart(2,'0');}
  function tick(){
      var left = Math.max(0, expiry - Date.now());
      var secs = Math.floor(left/1000), m = Math.floor(secs/60), s = secs%60;
      if(elM && elS){ elM.textContent = pad(m); elS.textContent = pad(s); }
      if(left<=0) clearInterval(iv);
  }
  var iv = setInterval(tick, 500); tick();
})();

// POPUP open/close logic
document.addEventListener('DOMContentLoaded', function(){
  var btns = document.querySelectorAll('#openPopupBtn');
  var popup = document.getElementById('appointmentPopup');
  var close = document.getElementById('closePopupBtn');
  if (!popup) return;

  function openPopup(){ popup.style.display = 'flex'; }
  function closePopup(){ popup.style.display = 'none'; }

  btns.forEach(function(btn){
    btn.addEventListener('click', function(e){
      e.preventDefault();
      openPopup();
    });
  });
  close && close.addEventListener('click', closePopup);
  popup.addEventListener('click', function(e){
    if (e.target === popup) closePopup();
  });
});

// Results Carousel Script — one image at a time, slide left/right, 3 dots, auto every 3s
document.addEventListener('DOMContentLoaded', function() {
  var carousel = document.getElementById('resultsCarousel');
  var indicatorsContainer = document.getElementById('carouselIndicators');
  if (!carousel || !indicatorsContainer) return;

  var slides = carousel.querySelectorAll('.carousel-slide');
  var total = slides.length;
  if (!total) return;

  var idx = 0;
  var autoPlayMs = 3000;
  var intervalId;

  indicatorsContainer.innerHTML = '';

  for (var i = 0; i < total; i++) {
    (function(dotIndex) {
      var dot = document.createElement('button');
      dot.type = 'button';
      dot.className = 'dot' + (dotIndex === 0 ? ' active' : '');
      dot.setAttribute('aria-label', 'Go to result ' + (dotIndex + 1));
      dot.addEventListener('click', function() {
        showSlide(dotIndex);
        resetInterval();
      });
      indicatorsContainer.appendChild(dot);
    })(i);
  }

  var dots = indicatorsContainer.querySelectorAll('.dot');

 function showSlide(i) {

    idx = ((i % total) + total) % total;

    slides.forEach(function(slide, index) {
        slide.style.display = (index === idx) ? "block" : "none";
    });

    dots.forEach(function(dot, index) {
        dot.classList.toggle("active", index === idx);
    });

}

  function nextSlide() {
    showSlide(idx + 1);
  }

  function resetInterval() {
    clearInterval(intervalId);
    intervalId = setInterval(nextSlide, autoPlayMs);
  }

  showSlide(0);
  intervalId = setInterval(nextSlide, autoPlayMs);

  var container = carousel.closest('.carousel-container') || carousel;
  container.addEventListener('mouseenter', function() {
    clearInterval(intervalId);
  });
  container.addEventListener('mouseleave', function() {
    resetInterval();
  });
});

// Grade Selection Script
document.addEventListener("DOMContentLoaded", function() {
  const gradePreview = document.getElementById('gradePreview');
  if (!gradePreview) return;
  gradePreview.addEventListener('click', function(e) {
    if (e.target.tagName === "IMG") {
      Array.from(gradePreview.querySelectorAll('img')).forEach(img => img.classList.remove('grade-img-selected'));
      e.target.classList.add('grade-img-selected');
    }
  });
});

// Carousel Slider Script
document.addEventListener('DOMContentLoaded', function() {
  var slider = document.querySelector('.choose-features-slider.center-show');
  if (!slider) return;
  let isDown = false;
  let startX;
  let scrollLeft;

  // Mouse drag to scroll
  slider.addEventListener('mousedown', function(e) {
    isDown = true;
    slider.classList.add('dragging');
    startX = e.pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
  });
  slider.addEventListener('mouseleave', function(e){
    isDown = false;
    slider.classList.remove('dragging');
  });
  slider.addEventListener('mouseup', function(e){
    isDown = false;
    slider.classList.remove('dragging');
  });
  slider.addEventListener('mousemove', function(e){
    if(!isDown) return;
    e.preventDefault();
    const x = e.pageX - slider.offsetLeft;
    const walk = (x - startX) * 2; //scroll-fast
    slider.scrollLeft = scrollLeft - walk;
  });

  // DOTS PAGINATION LOGIC
  var dots = Array.from(document.querySelectorAll('.carousel-dot'));
  // Assume 4 "pages", scroll to box at (index*2)
  function updateDots() {
    const boxWidth = slider.querySelector('.choose-feature-box-style').offsetWidth + 10;
    const totalBoxes = slider.querySelectorAll('.choose-feature-box-style').length;
    const sliderWidth = slider.offsetWidth;
    const maxScroll = slider.scrollWidth - sliderWidth;
    // 4 windows/pages
    let pageIndex = 0;
    if (maxScroll > 0) {
      const windowSize = maxScroll / 3;
      if (slider.scrollLeft < windowSize * 0.5) pageIndex = 0;
      else if (slider.scrollLeft < windowSize * 1.5) pageIndex = 1;
      else if (slider.scrollLeft < windowSize * 2.5) pageIndex = 2;
      else pageIndex = 3;
    }
    dots.forEach((dot,i) => {
      if (i === pageIndex) dot.classList.add('active');
      else dot.classList.remove('active');
    });
  }
  // Listen to scroll
  slider.addEventListener('scroll', updateDots);
  updateDots();

  dots.forEach((dot, i) => {
    dot.addEventListener('click', function() {
      const boxWidth = slider.querySelector('.choose-feature-box-style').offsetWidth + 10;
      // Number of boxes in one 'page' = Math.floor(slider.offsetWidth / boxWidth)
      const windowSize = slider.scrollWidth - slider.offsetWidth;
      let targetScroll = Math.round(windowSize * (i/3));
      slider.scrollTo({left: targetScroll, behavior: 'smooth'});
    });
  });

  // For touch devices, natural scroll works
  // Optionally, you can auto-scroll every few seconds:
  let autoScrollEnabled = true; // Set false to disable
  let interval = null;
  if (autoScrollEnabled) {
    interval = setInterval(function() {
      // If at end, scroll to start, else scroll by one card width
      let box = slider.querySelector('.choose-feature-box-style');
      if (!box) return;
      let oneBox = box.offsetWidth + 10;
      // If next scroll is beyond end, go back to start
      if (slider.scrollLeft + slider.clientWidth + oneBox > slider.scrollWidth) {
        slider.scroll({left: 0, behavior: 'smooth'});
      } else {
        slider.scrollBy({left: oneBox, behavior: 'smooth'});
      }
    }, 3500);
    slider.addEventListener('mouseenter', function(){ clearInterval(interval); interval = null; });
    slider.addEventListener('mouseleave', function(){
      if(interval) return;
      interval = setInterval(function() {
        let box = slider.querySelector('.choose-feature-box-style');
        if (!box) return;
        let oneBox = box.offsetWidth + 10;
        if (slider.scrollLeft + slider.clientWidth + oneBox > slider.scrollWidth) {
          slider.scroll({left: 0, behavior: 'smooth'});
        } else {
          slider.scrollBy({left: oneBox, behavior: 'smooth'});
        }
      }, 3500);
    });
  }
});

// Main Countdown Timer
(function(){
  const duration = 10*60*1000;
  const key = "kaya_offer_expiry";
  const now = Date.now();
  let expiry = +sessionStorage.getItem(key);
  if(!expiry || expiry < now){ expiry = now + duration; sessionStorage.setItem(key, expiry); }
  const nodes = {
    d: document.getElementById("days"),
    h: document.getElementById("hours"),
    m: document.getElementById("mins"),
    s: document.getElementById("secs")
  };
  function pad(v){return String(v).padStart(2,"0");}
  function tick(){
    let left = Math.max(0, expiry - Date.now());
    const total = Math.floor(left/1000);
    const d = Math.floor(total/86400);
    const h = Math.floor(total%86400/3600);
    const m = Math.floor(total%3600/60);
    const s = total%60;
    if(nodes.d) nodes.d.textContent = pad(d);
    if(nodes.h) nodes.h.textContent = pad(h);
    if(nodes.m) nodes.m.textContent = pad(m);
    if(nodes.s) nodes.s.textContent = pad(s);
    if(left<=0) clearInterval(loop);
  }
  const loop = setInterval(tick,500);
  tick();
})();

// Process Steps Carousel Script
document.addEventListener('DOMContentLoaded', function() {
  var processCarousel = document.querySelector('.process-steps-carousel');
  var processDots = Array.from(document.querySelectorAll('.process-dot'));
  
  if (!processCarousel || processDots.length === 0) return;
  
  let isDown = false;
  let startX;
  let scrollLeft;
  
  // Mouse drag to scroll
  processCarousel.addEventListener('mousedown', function(e) {
    isDown = true;
    processCarousel.classList.add('dragging');
    startX = e.pageX - processCarousel.offsetLeft;
    scrollLeft = processCarousel.scrollLeft;
  });
  
  processCarousel.addEventListener('mouseleave', function() {
    isDown = false;
    processCarousel.classList.remove('dragging');
  });
  
  processCarousel.addEventListener('mouseup', function() {
    isDown = false;
    processCarousel.classList.remove('dragging');
  });
  
  processCarousel.addEventListener('mousemove', function(e) {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - processCarousel.offsetLeft;
    const walk = (x - startX) * 2;
    processCarousel.scrollLeft = scrollLeft - walk;
  });
  
  // Update dots based on scroll position
  function updateProcessDots() {
    const stepItems = processCarousel.querySelectorAll('.step-item');
    if (stepItems.length === 0) return;
    
    const itemWidth = stepItems[0].offsetWidth + 28; // gap included
    const scrollPosition = processCarousel.scrollLeft;
    const containerWidth = processCarousel.offsetWidth;
    
    // Calculate which step is most visible
    let activeIndex = 0;
    let minDistance = Infinity;
    
    stepItems.forEach((item, index) => {
      const itemLeft = item.offsetLeft;
      const itemCenter = itemLeft + (item.offsetWidth / 2);
      const containerCenter = scrollPosition + (containerWidth / 2);
      const distance = Math.abs(itemCenter - containerCenter);
      
      if (distance < minDistance) {
        minDistance = distance;
        activeIndex = index;
      }
    });
    
    processDots.forEach((dot, i) => {
      if (i === activeIndex) {
        dot.classList.add('active');
      } else {
        dot.classList.remove('active');
      }
    });
  }
  
  // Listen to scroll
  processCarousel.addEventListener('scroll', updateProcessDots);
  updateProcessDots();
  
  // Dot click navigation
  processDots.forEach((dot, i) => {
    dot.addEventListener('click', function() {
      const stepItems = processCarousel.querySelectorAll('.step-item');
      if (stepItems[i]) {
        const itemLeft = stepItems[i].offsetLeft;
        const containerWidth = processCarousel.offsetWidth;
        const scrollTo = itemLeft - (containerWidth / 2) + (stepItems[i].offsetWidth / 2);
        processCarousel.scrollTo({
          left: Math.max(0, scrollTo),
          behavior: 'smooth'
        });
      }
    });
  });
  
  // Auto-scroll functionality (optional)
  let autoScrollEnabled = true;
  let autoScrollInterval = null;
  
  if (autoScrollEnabled && window.innerWidth <= 900) {
    autoScrollInterval = setInterval(function() {
      const stepItems = processCarousel.querySelectorAll('.step-item');
      if (stepItems.length === 0) return;
      
      const itemWidth = stepItems[0].offsetWidth + 28;
      const maxScroll = processCarousel.scrollWidth - processCarousel.offsetWidth;
      
      if (processCarousel.scrollLeft + processCarousel.offsetWidth >= processCarousel.scrollWidth - 10) {
        // At the end, scroll to start
        processCarousel.scrollTo({ left: 0, behavior: 'smooth' });
      } else {
        // Scroll by one item
        processCarousel.scrollBy({ left: itemWidth, behavior: 'smooth' });
      }
    }, 4000);
    
    // Pause on hover
    processCarousel.addEventListener('mouseenter', function() {
      if (autoScrollInterval) {
        clearInterval(autoScrollInterval);
        autoScrollInterval = null;
      }
    });
    
    processCarousel.addEventListener('mouseleave', function() {
      if (!autoScrollInterval && window.innerWidth <= 900) {
        autoScrollInterval = setInterval(function() {
          const stepItems = processCarousel.querySelectorAll('.step-item');
          if (stepItems.length === 0) return;
          
          const itemWidth = stepItems[0].offsetWidth + 28;
          const maxScroll = processCarousel.scrollWidth - processCarousel.offsetWidth;
          
          if (processCarousel.scrollLeft + processCarousel.offsetWidth >= processCarousel.scrollWidth - 10) {
            processCarousel.scrollTo({ left: 0, behavior: 'smooth' });
          } else {
            processCarousel.scrollBy({ left: itemWidth, behavior: 'smooth' });
          }
        }, 4000);
      }
    });
  }
});

