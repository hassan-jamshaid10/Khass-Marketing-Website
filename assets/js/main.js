document.addEventListener('DOMContentLoaded', function () {
  const toggle = document.getElementById('menu-toggle');
  const nav = document.querySelector('.main-nav');

  if (toggle && nav) {
      toggle.addEventListener('click', function (e) {
          e.preventDefault();
          e.stopPropagation();
          nav.classList.toggle('open');
      });
  } else {
      console.error('Mobile navigation elements not found:', { toggle, nav });
  }

  // FAQ Toggle Functionality
  const faqItems = document.querySelectorAll('.faq-item');
  
  faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');
    const answer = item.querySelector('.faq-answer');
    const toggleBtn = item.querySelector('.faq-toggle');
    const icon = item.querySelector('.faq-icon');
    
    question.addEventListener('click', () => {
      const isActive = item.classList.contains('active');
      
      // Close all other FAQ items
      faqItems.forEach(otherItem => {
        if (otherItem !== item) {
          otherItem.classList.remove('active');
        }
      });
      
      // Toggle current item
      if (isActive) {
        item.classList.remove('active');
      } else {
        item.classList.add('active');
      }
    });
  });

  // Testimonial Carousel Functionality
  const testimonialStack = document.getElementById('testimonialStack');
  const testimonialDots = document.getElementById('testimonialDots');
  
  if (testimonialStack && testimonialDots) {
    const cards = testimonialStack.querySelectorAll('.card-main');
    const dots = testimonialDots.querySelectorAll('span');
    let currentIndex = 0;
    let startX = 0;
    let currentX = 0;
    let isDragging = false;
    
    // Function to show testimonial
    function showTestimonial(index) {
      // Remove active class from all cards and dots
      cards.forEach(card => card.classList.remove('active'));
      dots.forEach(dot => dot.classList.remove('active'));
      
      // Add active class to current card and dot
      cards[index].classList.add('active');
      dots[index].classList.add('active');
      
      currentIndex = index;
    }
    
    // Dot click functionality
    dots.forEach((dot, index) => {
      dot.addEventListener('click', () => {
        showTestimonial(index);
      });
    });
    
    // Touch/Mouse events for swipe
    function startDrag(e) {
      isDragging = true;
      startX = e.type === 'mousedown' ? e.clientX : e.touches[0].clientX;
      testimonialStack.style.cursor = 'grabbing';
    }
    
    function onDrag(e) {
      if (!isDragging) return;
      e.preventDefault();
      currentX = e.type === 'mousemove' ? e.clientX : e.touches[0].clientX;
    }
    
    function endDrag(e) {
      if (!isDragging) return;
      isDragging = false;
      testimonialStack.style.cursor = 'grab';
      
      const deltaX = startX - currentX;
      const threshold = 50; // minimum distance for swipe
      
      if (Math.abs(deltaX) > threshold) {
        if (deltaX > 0 && currentIndex < cards.length - 1) {
          // Swipe left - next testimonial
          showTestimonial(currentIndex + 1);
        } else if (deltaX < 0 && currentIndex > 0) {
          // Swipe right - previous testimonial
          showTestimonial(currentIndex - 1);
        }
      }
    }
    
    // Mouse events
    testimonialStack.addEventListener('mousedown', startDrag);
    testimonialStack.addEventListener('mousemove', onDrag);
    testimonialStack.addEventListener('mouseup', endDrag);
    testimonialStack.addEventListener('mouseleave', endDrag);
    
    // Touch events
    testimonialStack.addEventListener('touchstart', startDrag, { passive: false });
    testimonialStack.addEventListener('touchmove', onDrag, { passive: false });
    testimonialStack.addEventListener('touchend', endDrag);
    
    // Auto-advance testimonials every 5 seconds
    setInterval(() => {
      const nextIndex = (currentIndex + 1) % cards.length;
      showTestimonial(nextIndex);
    }, 5000);
    
    // Initialize first testimonial
    showTestimonial(0);
  }
});



//testimonials 

const cards = document.querySelectorAll(".card");
let isDragging = false;
let startX, currentX;
let activeCardIndex = 0;

function setActiveCard(index) {
  cards.forEach((card, i) => {
    if (i === index) {
      card.style.display = "block";
      card.style.zIndex = cards.length;
      card.style.transform = "translateX(0) rotate(0)";
    } else if (i > index) {
      card.style.display = "block";
      card.style.zIndex = cards.length - i;
    } else {
      card.style.display = "none";
    }
  });
}

setActiveCard(activeCardIndex);

function endDrag(card) {
  card.style.transition = "transform 0.3s ease";
  if (Math.abs(currentX) > 100) {
    card.style.transform = `translateX(${currentX > 0 ? 500 : -500}px) rotate(${currentX / 15}deg)`;
    if (activeCardIndex < cards.length - 1) {
      activeCardIndex++;
      setTimeout(() => {
        card.style.display = "none";
        setActiveCard(activeCardIndex);
      }, 300);
    }
  } else {
    card.style.transform = "translateX(0) rotate(0)";
  }
}

cards.forEach((card, index) => {
  card.addEventListener("mousedown", (e) => {
    if (index !== activeCardIndex || activeCardIndex === cards.length - 1) return;
    isDragging = true;
    startX = e.pageX;
    card.style.transition = "none";
  });

  card.addEventListener("mousemove", (e) => {
    if (!isDragging || index !== activeCardIndex) return;
    currentX = e.pageX - startX;
    card.style.transform = `translateX(${currentX}px) rotate(${currentX / 15}deg)`;
  });

  card.addEventListener("mouseup", () => {
    if (!isDragging) return;
    isDragging = false;
    endDrag(card);
  });

  // Touch support
  card.addEventListener("touchstart", (e) => {
    if (index !== activeCardIndex || activeCardIndex === cards.length - 1) return;
    isDragging = true;
    startX = e.touches[0].pageX;
    card.style.transition = "none";
  });

  card.addEventListener("touchmove", (e) => {
    if (!isDragging || index !== activeCardIndex) return;
    currentX = e.touches[0].pageX - startX;
    card.style.transform = `translateX(${currentX}px) rotate(${currentX / 15}deg)`;
  });

  card.addEventListener("touchend", () => {
    if (!isDragging) return;
    isDragging = false;
    endDrag(card);
  });
});
