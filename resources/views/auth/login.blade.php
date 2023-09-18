@include('includes.header')
@include('includes.style')
@include('includes.script')

             <h1 class="contact_taital">login</h1>
             <div class="bulit_icon"><img src="{{ url ("images/bulit-icon.png") }}"></div>
<div class="container-fluid">
    <div class="contact_section_2">
       <div class="row">
          <div class="col-md-12">
            <form action="#" method="POST">
             <div class="mail_section_1">
                <input type="text" class="mail_text" placeholder="Username" name="Username" required>
                <input type="password" class="mail_text" placeholder="Password" name="Password" required>
            </form>
                <div class="send_bt"><a href="{{ url('index') }}">LOGIN</a></div>
                <div class="new-user-link">
                    <a href="{{ url('auth/register') }}">Pengguna Baru? Daftar disini</a>
                </div>
             </div>
            </div>
          </div>
    </div>
</div>
</div>

@include('includes.footer')