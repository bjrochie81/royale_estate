        <div id="footer">
        <div class="col">
            <h4 class="text-center"><strong>Visit Us</strong></h4>
            <p class="text-center">1 Royale Estate<br><i class="fa fa-map-marker"></i>Mandeville, 
            <br>Manchester, Jamaica W.I <br><br>email: royalestates@hotmail.com<br>phone: (876)121-1111 </p>
            </div>
            <p class="text-center"> Copyright &copy; - Barrington Rochester Royale Estate Application <?php echo date('yy'); ?></p>
        </div>
    </div>
 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
    <script>
        $( function() {
            $("#datein").datepicker({
                changeMonth: true,
                changeYear: true,
                yearRange: "-120:+1",
                dateFormat: "yy-mm-dd"
            });
        } );
        </script>
          <script>
        $( function() {
            $("#dateout").datepicker({
                changeMonth: true,
                changeYear: true,
                yearRange: "-120:+1",
                dateFormat: "yy-mm-dd"
            });
        } );
    </script>
        </div>
  </body>
</html>
