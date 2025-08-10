<?php
get_template_part('template-parts/site-footer');
wp_footer();?>

<script>
  AOS.init();
</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('menu-toggle');
    const nav = document.getElementById('main-nav');

    if (toggle && nav) {
      toggle.addEventListener('click', function () {
        nav.classList.toggle('open');
      });
    }
  });

 
  // const stack = document.getElementById('testiStack');

  // function arrangeCards() {
  //   const cards = [...stack.querySelectorAll('.card-main')];
  //   cards.forEach((card, i) => {
  //     card.style.zIndex = cards.length - i;
  //     if (i === 0) card.style.transform = 'scale(1) translateY(0)';
  //     if (i === 1) card.style.transform = 'scale(0.97) translateY(8px)';
  //     if (i === 2) card.style.transform = 'scale(0.94) translateY(16px)';
  //   });
  // }

  // arrangeCards();

  // let startX, currentCard, isDragging = false;

  // function startDrag(e) {
  //   currentCard = stack.querySelector('.card-main');
  //   startX = e.pageX || e.touches[0].pageX;
  //   isDragging = true;
  //   currentCard.style.transition = 'none';
  // }

  // function onDrag(e) {
  //   if (!isDragging || !currentCard) return;
  //   let x = e.pageX || e.touches[0].pageX;
  //   let deltaX = x - startX;
  //   currentCard.style.transform = `translateX(${deltaX}px) rotate(${deltaX / 15}deg)`;
  // }

  // function endDrag(e) {
  //   if (!isDragging || !currentCard) return;
  //   isDragging = false;
  //   let x = e.pageX || e.changedTouches[0].pageX;
  //   let deltaX = x - startX;

  //   if (Math.abs(deltaX) > 120) {
  //     currentCard.style.transition = 'transform 0.3s ease';
  //     currentCard.style.transform = `translateX(${deltaX > 0 ? 1000 : -1000}px) rotate(${deltaX / 15}deg)`;
  //     currentCard.addEventListener('transitionend', () => {
  //       stack.appendChild(currentCard);
  //       currentCard.style.transition = '';
  //       arrangeCards();
  //     }, { once: true });
  //   } else {
  //     currentCard.style.transition = 'transform 0.3s ease';
  //     arrangeCards();
  //   }
  // }

  // stack.addEventListener('mousedown', startDrag);
  // stack.addEventListener('touchstart', startDrag);
  // stack.addEventListener('mousemove', onDrag);
  // stack.addEventListener('touchmove', onDrag);
  // stack.addEventListener('mouseup', endDrag);
  // stack.addEventListener('touchend', endDrag);
</script>

</body>
</html>

