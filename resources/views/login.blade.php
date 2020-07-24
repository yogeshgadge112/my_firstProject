
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    .loader{
      display:none;
    }

  .err {
    color: #d80f0f;
    font-size: 12px;
    font-weight: bold;
    display: none;
    font-style: italic;
  }

  .error {
    background-color: #f2dede;
    border-color: #e4aeb6 !important;
    color: #a94442;

    padding: 15px;
    padding-top: 10px;
    padding-right: 15px;
    padding-bottom: 10px;
    padding-left: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;

    font-size: 12px;
    font-weight: bold;
    display: none;
  }

  .success {
    background-color: #b0f8b7;
    border-color: #8af09c !important;
    color: #0a9507;

    padding: 15px;
    padding-top: 10px;
    padding-right: 15px;
    padding-bottom: 10px;
    padding-left: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;

    font-size: 12px;
    font-weight: bold;
    display: none;
  }



  </style>
</head>
<body>

<div class="container">
  
  <div class="row">
    
     <div class="col-sm-3"> </div>
     <div class="col-sm-6"> 
      <h2>Horizontal form</h2> <br> 
      <div class="error"></div>
      <div class="success"></div>
        <form name="user_regilogin" id="user_regilogin" method="post">
          @csrf
          <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>

              <div class="col-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" class="form-control" name="username" id="username" value="" placeholder="Username">
                </div>  
                <span class="err" id="err_username"> </span>
              </div>

          </div>
          <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>

              <div class="col-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>    
                <span class="err" id="err_password"> </span>
              </div>
            
          </div>

          <div class="row">
            <div class="col-sm-offset-2 col-sm-6">
              <button type="button" class="btn btn-success" onclick="submitForm();">
                  <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Login 
              </button>  &nbsp; 
              <span class="loader" id="loader_login" > <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>  </span>
               
               &nbsp; &nbsp;
              <button type="reset" class="btn btn-danger"> <i class="fa fa-times" aria-hidden="true"></i>  Reset</button>
            </div>
            <div class="col-sm-4">
              <label class="col-form-label" style="margin-bottom: 0px !important; margin-top: 14px;">
                <a href="user_registration"> <em> create new resistration </em></a>
              </label>
              
            </div>
          </div>

        </form>
    </div>

    <div class="col-sm-3"> </div>

  </div>
</div>

</body>


<script>
function submitForm()
{
    $(".err").stop().fadeOut();
    $(".error").stop().fadeOut();
    $(".success").stop().fadeOut();
    var username = $("#username").val();
    if (username.length == 0) {
      $("#err_username").fadeIn(1000);
      $("#err_username").html("&#9888 Oops, Username is required.");
      return false;
    }
    var password = $("#password").val();
    if (password.length == 0) {
      $("#err_password").fadeIn(1000);
      $("#err_password").html("&#9888 Oops, Password is required.");
      return false;
    }
  
  $("#loader_login").fadeIn(800);
  var formData = $("#user_regilogin").serialize();
  
  $.ajax({
      url: "userlogin",
      dataType: "json",
      data: formData,
      type: "POST",
      success: function (data) {
        if (data == 0 || data == '0') {
          $(".error").fadeIn(1000);
          $(".error").html(" &#9888 Oops, Something went wrong, Please enter username OR password correct.");

        } else {
          $(".success").fadeIn(1000);
          $(".success").html(" &#9888 User successfully login.");
        }
        $(".loader").hide();
        return false; 
      },
      error: function (data) {
        $(".error").fadeIn(1000);
        $(".error").html("&#9888 Oops, Error occured while check login, Please try again .");
        $(".loader").hide();
        return false;
      }
    });
    return false;
}
</script>

</html>
