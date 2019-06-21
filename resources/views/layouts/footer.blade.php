    <div class="container-fluid">
      <div class="container">
        <hr>
        <footer class="text-center">
          © 2019 Đồ án tốt nghiệp tại Trường Bách Khoa Aptech. <br>
          Thiết Kế Bởi : <a href="#" title="" target="#">TEAM123</a>
        </footer>
      </div>
    </div>
    <!-- BEGIN: SOURCE CODE NEW GUI -->
    <script src="public/watch/javascript/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="public/watch/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="public/watch/javascript/jstree.min.js" type="text/javascript"></script>
    <script src="public/watch/javascript/template.js" type="text/javascript" ></script>
    <script src="public/watch/javascript/common.js" type="text/javascript"></script>
    <script src="public/watch/javascript/global.js" type="text/javascript"></script>
    <script src="public/watch/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
    <script src="public/Watch/javascript/parally.js"></script> 
    <!-- add script at here -->
    
    <!-- the end -->
    <script>
        $('.parallax').parally({offset: -40});

        // script dat hang
        $('input[name=\'payment_address\']').on('change', function() {
            if (this.value == 'new') {
                $('#payment-existing').hide();
                $('#payment-new').show();
            } else {
                $('#payment-existing').show();
                $('#payment-new').hide();
            }
        });
        // script van chuyen

        $('input[name=\'shipping_address\']').on('change', function() {
            if (this.value == 'new') {
                $('#shipping-existing').hide();
                $('#shipping-new').show();
            } else {
                $('#shipping-existing').show();
                $('#shipping-new').hide();
            }
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
          $('.customtab .owl-prev').html("<i class='fa fa-chevron-left'></i>");
          $('.customtab .owl-next').html("<i class='fa fa-chevron-right'></i>");
        })
    </script>
    <script>
    $('document').ready(function()
    {
        $('textarea').each(function(){
                $(this).val($(this).val().trim());
            }
        );
    });
  </script>
    <script>
      // script for dat-hang radio collapse
      $(document).ready(function(){
        $('#r11').click(function(){
          $('#collapseTwo').slideUp();
          $('#collapseOne').slideDown();
          
        });
        $('#r12').click(function(){
          $('#collapseOne').slideUp();
          $('#collapseTwo').slideDown();
        });
      });
    </script>
    @yield('add_script')
  </body>
</html>