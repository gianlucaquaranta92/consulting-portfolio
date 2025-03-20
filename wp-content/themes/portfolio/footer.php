<footer>
    
    <p>&copy; all rights reserved <?php echo date("Y"); ?> <?php bloginfo('name'); ?></p>
</footer>
<?php wp_footer(); ?>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    new Splide('.splide', {
        type: 'loop',
      perPage: 5,       // Show 5 logos at a time
      perMove: 1,       // Move 1 logo at a time
      autoplay: true,   // Auto-scroll
      interval: 2000,   // 2 seconds per slide
      pauseOnHover: true, // Stop on hover
      arrows: false,    // Hide arrows
      pagination: false,
      gap: '20px'
    }).mount();
  });
</script>

</body>
</html>


