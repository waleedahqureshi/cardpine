<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>C A R D Pine | LOGIN</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form id="login_form">
              <h1>Login Form</h1>
                <input type="hidden" name="from" value="login">
              <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required />
              </div>
              <div>
                <a id="login" class="btn btn-default submit">Log in</a>
                <a id="reset_pass" class="reset_pass" href="#signup">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p style="color: red" hidden id="error_message" class="change_link">username or password incorrect.</p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> C A R D Pine Admin.</h1>
                  <p>©2016 All Rights Reserved. C A R D Pine Admin. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form id="reset_form">
              <h1>Reset Account</h1>
                <input type="hidden" name="from" value="reset">
              <div>
                <p>Confirmation code has been sent to your email</p>
              </div>
              <div class="separator"></div>
              <div>
                <input type="text" name="confirmation_code" class="form-control" placeholder="Confirmation Code" required />
              </div>
              <div>
                <input type="email" name="new_password" class="form-control" placeholder="New Password" required />
              </div>
              <div>
                <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required />
              </div>
              <div>
                <a id="create" class="btn btn-default submit">Reset</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p style="color: red" hidden id="error_message_reset" class="change_link">incorrect confirmation code.</p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> C A R D Pine Admin.</h1>
                  <p>©2016 All Rights Reserved. C A R D Pine Admin. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>

  <!-- jQuery -->
  <script src="vendors/datatables.net/media/js/jquery.js"></script> 

  <script>

    var url = "admin_login_register.php";
    
    $('#reset').click(function() {
      // body...

      $("#error_message_reset").hide();

      var formData = $("#reset_form").serializeArray();
      $.post(url, formData).done(function (data) {

      	if (data == 'success') 
      	{
      		window.location.href = "index.php";
      	}
      	else 
      	{	
      		$("#error_message_reset").text(data);
      		$("#error_message_reset").slideDown();
      	}

      });

    });

    $('#reset_pass').click(function() {
      // body...

      $.post(url, {from:"generateCode"}).done(function (data){

      	alert(data);

      });

    });

    $('#login').click(function() {
      // body...

      $("#error_message").hide();

      var formData = $("#login_form").serializeArray();
      $.post(url, formData).done(function (data) {

        if (data == 'success') 
        {
        	window.location.href = "index.php";
        }
        else
        {
        	$("#error_message").slideDown();
        }

      });

    });

  </script>


</html>
