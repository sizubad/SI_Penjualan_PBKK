@include('includes.header')
@include('includes.style')
@include('includes.script')
           <h1 class="contact_taital">Register</h1>
           <div class="bulit_icon"><img src="{{ url ("images/bulit-icon.png") }}"></div>
    <div class="contact_section_2">
       <div class="row">
          <div class="col-md-12" style="border: 12px" >
            <form action="#" method="POST">
             <div class="mail_section_1">
                <input type="text" class="mail_text" placeholder="Nama Lengkap" name="Nama Lengkap" label="Nama Lengkap" required>
                <input type="text" class="mail_text" placeholder="Email" name="Email" required>
                <input type="text" class="mail_text" placeholder="Username" name="Username" required>
                <input type="password" class="mail_text" placeholder="Password" name="Password" required>
                <input type="password" class="mail_text" placeholder=" Confirm Password" name=" Confirm Password" required>
             </div>
            </form> 
            <div class="send_bt"><a href="{{ url('auth/login') }}">DAFTAR</a></div> 
          </div> 
             </div>
            </div>
          </div>
    </div>


        
@include('includes.footer')