@extends('layouts.layout')
@section('main')
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="mail_section_1">
                        <h1 class="contact_taital">Contact Us</h1>
                        <form action="/contacts" method="POST">
                           @csrf
                           <input type="text" class="mail_text" placeholder="Name" name="name">
                           <input type="text" class="mail_text" placeholder="Email" name="email">
                           <input type="text" class="mail_text" placeholder="Phone Number" name="number">
                           <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="message"></textarea>
                           <input type="submit" value="OK" name="s1">
                        </form>

                        <div class="send_bt"><a href="#">SEND</a></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="map_main">
                        <div class="map-responsive">
                           <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="360" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->

@endsection