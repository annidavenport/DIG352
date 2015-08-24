  </div>

  <footer class="row">
    <div class="container">
      <div class="eight columns">
        <?php include('nav.php') ?>
      </div>
      <div class="four columns">
        <div class="social pull-right">
          <ul>
            <li><a href=""><img src="images/Twitter.png"></a></li>
            <li><a href=""><img src="images/Facebook.png"></a></li>
            <li><a href=""><img src="images/Linkedin.png"></a></li>
          </ul>
        </div>
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
</body>
</html>
