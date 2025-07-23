<!-- footer.php -->
<footer class="site-footer">
  <div class="container">
    <div class="footer-left">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/logo.svg" alt="<?php bloginfo('name'); ?>" class="footer-logo">
      <p class="footer-copy">&copy; <?php echo date('Y'); ?> ESGI – Tous droits réservés.</p>
    </div>
    <div class="footer-center">
      <p class="footer-title">Manager</p>
      <p>+33 1 23 45 67 89</p>
      <p>info@esgi.com</p>
    </div>
    <div class="footer-group-right">
        <div class="footer-right">
            <p class="footer-title1">CEO</p>
            <p>+33 1 23 45 67 90</p> 
            <p>ceo@company.com</p>
        </div>
        <div class="footer-social">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/facebook.svg" alt="Facebook"></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/linkedin.svg" alt="LinkedIn"></a>
        </div>
    </div>    
  </div>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    const btn = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.main-nav .nav-list');
    btn.addEventListener('click', () => {
      nav.classList.toggle('active');
    });
    const toggle = document.querySelector('.menu-toggle')
const nav    = document.querySelector('.main-nav')

toggle.addEventListener('click', (e) => {
  e.preventDefault()
  toggle.classList.toggle('active')  // <== active sur le lien
  nav.classList.toggle('active')
})

  });
</script>

  <?php wp_footer(); ?>
</footer>
</body>
</html>


