@extends('layouts.main')

@section('my_content')

<div class="main-bg">
        <div class="container con-form">
          <div class="row">
            <div class="col-lg-6">
              <h1>Contact me</h1>
              <div class="container">

                    <div class="row">


                                <form id="contact-form" method="post" action="contact.php" role="form">

                                        <div class="messages"></div>

                                        <div class="controls">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_name">First name</label>
                                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your first name *" required="required" data-error="Firstname is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_lastname">Last name</label>
                                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your last name *" required="required" data-error="Lastname is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_email">Email</label>
                                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_phone">Phone</label>
                                                        <input id="form_phone" name="phone" type="tel" pattern="[0-9]{8}" class="form-control" placeholder="00000000">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="form_message">Message</label>
                                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="2" required="required" data-error="Please,leave us a message."></textarea>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="submit" class="btn btn-dark btn-send" value="Send message">
                                                </div>
                                            </div>

                                        </div>

                                    </form>


                    </div> <!-- /.row-->

                </div> <!-- /.container-->

            </div>

            <div class="col-lg-6">
              <div class="mapouter">
                <div class="gmap_canvas">
                  <iframe
                    width="500"
                    height="400"
                    id="gmap_canvas"
                    src="https://maps.google.com/maps?q=riga%20latvia&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0"
                    scrolling="no"
                    marginheight="0"
                    marginwidth="0"
                  ></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container"><div class="row"><div class="col-lg-12 text-center">

<ul class="about-me">
        <h1>ABOUT ME</h1>
<li>Mani sauc Liene.</li>
<li>Man nepatīk par sevi stāstīt :)</li>
<li>Pirmo reizi veidoju mājaslapu - bija interesanti!</li>
<li> Paldies!<li>
</ul>
    </div></div></div>

@endsection
