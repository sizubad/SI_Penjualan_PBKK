  
@include('includes.style')
@include('includes.header')
@include('includes.script')
  <!-- contact section start -->
   <div class="contact_section layout_padding">
    <div class="container">
       <div class="row">
          <div class="col-sm-12">
             <h1 class="contact_taital">Get In Touch</h1>
             <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
          </div>
       </div>
    </div>
    <div class="container-fluid">
       <div class="contact_section_2">
          <div class="row">
             <div class="col-md-12">
                <div class="mail_section_1">
                   <input type="text" class="mail_text" placeholder="Your Name" name="Your Name">
                   <input type="text" class="mail_text" placeholder="Your Email" name="Your Email">
                   <input type="text" class="mail_text" placeholder="Your Phone" name="Your Phone">
                   <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                   <div class="send_bt"><a href="#">SEND</a></div>
                </div>
             </div>
             <div class="map_main">
                <div class="map-responsive">
                   <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="250" height="500" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- contact section end -->
@include('includes.footer')