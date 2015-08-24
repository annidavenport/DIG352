  </div>

  <footer class="row">
    <div class="container">
      <div class="eight columns">
        <?php include('nav.php') ?>
      </div>

    </div>
  </footer>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script type="text/javascript">
    $(document).ready(function() {
      $(".fancybox").fancybox({
          afterLoad: function() {
              // this.title = '<a href="' + this.href + '">Download</a> ' + this.title;
          },
          helpers : {
            title: {
              type: 'inside',
              position: 'top'
            }
          }
      });
    });
  </script>

  <!-- Responsive nav initialisation code from http://responsive-nav.com/
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script>
    var nav = responsiveNav(".nav-collapse", {
    animate: true, // Boolean: Use CSS3 transitions, true or false
    transition: 284, // Integer: Speed of the transition, in milliseconds
    insert: "before", // String: Insert the toggle before or after the navigation
    customToggle: "", // Selector: Specify the ID of a custom toggle
    closeOnNavClick: true, // Boolean: Close the navigation when one of the links are clicked
    openPos: "relative", // String: Position of the opened nav, relative or static
  });
  </script>
</body>
</html>
