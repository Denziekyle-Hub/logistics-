<footer class="my-6" style="background-color:#FFB145;">
      <div class="container py-5">
          <div class="row py-3">
              <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                  <h6 class="text-uppercase font-weight-bold mb-4">About</h6>
                  <ul class="list-unstyled mb-0">
                      <li class="mb-2"><a href="contact-us.html" class="text-muted">Contact Us</a></li>
                      <li class="mb-2"><a href="about-us.html" class="text-muted">About Us</a></li>
                      <li class="mb-2"><a href="#" class="text-muted">Testimonials</a></li>
                      <li class="mb-2"><a href="/announcements" class="text-muted">Announcements</a></li>
                  </ul>
              </div>
              <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                  <h6 class="text-uppercase font-weight-bold mb-4">Help</h6>
                  <ul class="list-unstyled mb-0">
                      <li class="mb-2"><a href="#" class="text-muted">Payments</a></li>
                      <li class="mb-2"><a href="#" class="text-muted">Shipping</a></li>
                    
                  </ul>
              </div>
             
              <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                  <h6 class="text-uppercase font-weight-bold mb-4">Company</h6>
                  <ul class="list-unstyled mb-0">
                      <li class="mb-2"><a href="login.html" class="text-muted">Login</a></li>
                      <li class="mb-2"><a href="login.html" class="text-muted">Register</a></li>
                      <li class="mb-2"><a href="#" class="text-muted">Sitemap</a></li>
                      <li class="mb-2"><a href="#" class="text-muted">Our Services</a></li>
                  </ul>
              </div>
              <div class="col-lg-4 col-md-6 mb-lg-0">
                  <h6 class="text-uppercase font-weight-bold mb-4">Registered Office Address</h6>
                  <p class="text-muted mb-4">703, C3, The Lake District, Yewalewadi, Kondhwa PUNE- 411027 , MAHARASHTRA, INDIA.</p>
                  <ul class="list-inline mt-4">
                      <li class="list-inline-item"><a href="https://twitter.com/EkhayaLtd" target="_blank" title="twitter"><img width="50px" src="img/twitter.png" alt="Ship Your goods To Africa from India| twitter account"></a></li>
                      <li class="list-inline-item"><a href="https://www.facebook.com/ekhayalogistics/" target="_blank" title="facebook"><img width="50px" src="img/facebook.png" alt="Ship Your goods To Africa from India| facebook account"></a></li>
                      <li class="list-inline-item"><a href="https://www.linkedin.com/company/ekhaya-logistics/" target="_blank" title="linkedin"><img width="50px" src="img/linkedin.png"></a></li>
                      <li class="list-inline-item"><a href="https://www.instagram.com/ekhayalogistics/" target="_blank" title="instagram"><img width="50px" src="img/instagram.png"></a></li>
                      
                      <li class="list-inline-item"><a href="https://wa.me/918010266351" target="_blank" title="Whatsapp"><img width="50px" src="img/whatsapp1.png"></a></li>
                  </ul>
              </div>
          </div>
      </div>
      <hr class="p-0 m-0 b-0">
      <div class="py-2" style=" background-color:#e68600;">
          <div class="container text-center">
              <p class="text-muted mb-0 py-2">© 2020 Ekhaya Logistics All rights reserved.</p>
          </div>
      </div>
      
    </div>  
  </footer>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="jquery-ui/external/jquery/jquery.js"></script>
    <script src="jquery-ui/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f57adcc4704467e89ed3261/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> -->
<!--End of Tawk.to Script-->
  <script>
   $(document).ready(function(){
     focused();
   });
   var trackPackage = $('#t-package');
    var ratePackage = $('#rate_package');
    var tracking_input = $('#tracking_input');
    var rate_form = $('#rateForm');
   $('#t-package').click(function(){
    if (ratePackage.hasClass('focused'))
    {
      ratePackage.removeClass('focused');
    }
     trackPackage.addClass('focused');
     tracking_input.removeClass('d-none');
     if (!rate_form.hasClass('d-none')){
       rate_form.addClass('d-none');
     }
   });
   $(ratePackage).click(function(){
    if (trackPackage.hasClass('focused'))
    {
     trackPackage.removeClass('focused');
    }
     ratePackage.addClass('focused');
    rate_form.removeClass('d-none');
    $('html, body').animate({
        scrollTop: $("#rateForm").offset().top
    }, 1000);
    if (!tracking_input.hasClass('d-none'))
    {
      tracking_input.addClass('d-none');
    }
    if (!$('#track-progressbar').hasClass('d-none')){
        $('#track-progressbar').addClass('d-none');
    }

    
   });
  
   function focused(){
     var div1 = $('#t-package');
     if (div1.hasClass('focused')){
     div1.removeClass('focused');
     }else {
       div1.addClass('focused');
       tracking_input.removeClass('d-none');

     }
   }


$('#packageType').change(function(){
  if ($('#packageType').val() !=='myPackage'){
    $('#weight').val($('#packageType').val());
    $('#weight').attr('readonly',true)
  } else {
    $('#weight').val('1');
    $('#weight').attr('readonly',false)
  }
})
   
  </script>
  
  <script>
   

    $( function() {
      var IndianStates = [
        "India",
       "Andhra Pradesh, India",
                "Arunachal Pradesh, India",
                "Assam, India",
                "Bihar, India",
                "Chhattisgarh, India",
                "Goa, India",
                "Gujarat, India",
                "Haryana, India",
                "Himachal Pradesh, India",
                "Jammu and Kashmir, India",
                "Jharkhand, India",
                "Karnataka, India",
                "Kerala, India",
                "Madhya Pradesh, India",
                "Maharashtra, India",
                "Manipur, India",
                "Meghalaya, India",
                "Mizoram, India",
                "Nagaland, India",
                "Odisha, India",
                "Punjab, India",
                "Rajasthan, India",
                "Sikkim, India",
                "Tamil Nadu, India",
                "Telangana, India",
                "Tripura, India",
                "Uttarakhand, India",
                "Uttar Pradesh, India",
                "West Bengal, India",
                "Andaman and Nicobar Islands, India",
                "Chandigarh, India",
                "Dadra and Nagar Haveli, India",
                "Daman and Diu, India",
                "Delhi, India",
                "Lakshadweep, India",
                "Puducherry, India",
                 "Zimbabwe",
                "Harare, Africa",
                "Bulawayo, Africa",
                "Chitungwiza, Africa",
                "Mutare, Africa",
                "Gweru, Africa",
                "Epworth, Africa",
                "Kwekwe, Africa",
                "Kadoma, Africa",
                "Masvingo, Africa",
                "Chinhoyi, Africa",
                "Marondera, Africa",
                "Norton, Africa",
                "Chegutu, Africa",
                "Bindura, Africa",
                "Zvishavane, Africa",
                "Victoria Falls, Africa",
                "Hwange, Africa",
                "Redcliff, Africa",
                "Ruwa, Africa",
                "Rusape, Africa",
                "Chiredzi, Africa",
                "Beitbridge, Africa",
                "Kariba, Africa",
                "Karoi, Africa",
                "Gokwe, Africa",
                "Chipinge, Africa",
                "Shurugwi, Africa",
                "Gwanda, Africa",
                "Mashava, Africa",
                "Chivhu, Africa",
                "Shamva, Africa",
                "Mazowe, Africa",
                "Glendale, Africa",
                "Banket, Africa",
                "Mutoko, Africa",
                "Murehwa, Africa",
                "Inyati, Africa",
                "Mvurwi, Africa",
                "Penhalonga, Africa",
                "Mhangura, Africa",
                "Chakari, Africa",
                "Mount Darwin, Africa",
                "Lupane"
               
      ];
      $( ".states" ).autocomplete({
        source: IndianStates
      });
    } );

    
$('#track-btn').click(function() {
        
        $.ajax({
           url:'tracking.php',
           method :'POST',
           data :{
             tracking_id : $('#track').val()
           },
           success: function(data)
           { 
               $('#track-progressbar').html(data).removeClass('d-none');
               
               $('html, body').animate({
        scrollTop: $("#track-progressbar").offset().top
    }, 1000);
           }
        });

});

$('#rate_form').submit(function(event) {
        event.preventDefault();
        $.ajax({
           url:'rate.php',
           method :'POST',
           data : $(this).serialize(),
           dataType : "json",
           success: function(data)
           { 
             $('#confirm').removeClass('d-none');
               $('#price').html(data.prize);
               $("#date").html(data.date1);
             
           }
        });

});
    </script>
    
    <script>
        $(".contact-forms").submit(function(event){
            
            event.preventDefault();
             let recaptcha = $("#g-recaptcha-response").val();
             if (recaptcha == "")
             {
                 alert("Please confirm you are not a robot");
                 return -1;
             }
            $.ajax({
                url:"contact-form.php",
                method: "POST",
                data: $(this).serialize(),
                success: function(result)
                {
                    $(".contact-forms input").val("");
                    
                    $(".contact-forms textarea").val("");
                    $(".form-response").html(result);
                }
            })
        })
        
    </script>
  </body>
</html>