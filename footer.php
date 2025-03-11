<footer id="footer">
  <div class="container">
    <h2>Where Boring Ads Come to Die</h2>
    <p>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>. All Rights Reserved.</p>
    <a href="#hero" class="btn btn-blue">Get Started Now 🚀</a>
  </div>
</footer>

<script>
  // Handle form submission
  document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.registration-form');
    if(form){
      form.addEventListener('submit', function (e) {
        e.preventDefault();
        alert('Thank you for signing up! We will get back to you soon.');
        this.reset();
      });
    }

    // Collapsible FAQ Items
    const faqQuestions = document.querySelectorAll('.faq-question');
    faqQuestions.forEach(button => {
      button.addEventListener('click', () => {
        const faqItem = button.parentElement;
        faqItem.classList.toggle('active');
      });
    });

    // Smooth scrolling
    const navLinks = document.querySelectorAll('.nav-links a');
    navLinks.forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        const targetSection = document.querySelector(targetId);
        if (targetSection) {
          const offset = 100;
          const targetPosition = targetSection.offsetTop - offset;
          window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
          });
        }
      });
    });
  });
</script>

<?php wp_footer(); ?>
</body>
</html>
