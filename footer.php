<?php
// footer.php
get_template_part('template-parts/footer/site-footer');
wp_footer();?>

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
</script>
</body>
</html>

