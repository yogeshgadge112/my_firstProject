
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Resistration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


  <style>

    .loader
    {
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



  <br/> 
<div id="container">

  <div class="row">
    <div class="offset-md-3 col-md-6 offset-md-3 offset-sm-1 col-sm-10 offset-sm-1 col-xs-12" style="background-color: #e1e1e1;">
      <div class="success" id="success_reg"> asdfasdasd </div>
    </div>      
  </div>

  <div class="row">
    <div class="col-md-3 col-sm-1 col-xs-12"> </div>
    <div class="col-md-6 col-sm-10 col-xs-12" style="background-color: #e1e1e1;">
    <br/>
      <div class="form-row"> 
        <br/>
        <br/>
          <h1 style="font-size:24px;font-weight: bold;"> Welcome </h1>
        
      </div>
      <hr>
      <form method="post" name="user_registration" id="user_registration" onSubmit="return submitForm();">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="f_name">First Name</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </div>
              </div>
              <input type="text" class="form-control" id="f_name" placeholder="Enter your First name" name="f_name">
            </div>
            <span class="err" id="err_f_name"> </span>
          </div>
          <div class="form-group col-md-6">
            <label for="l_name">Last Name</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </div>
              </div>
              <input type="text" class="form-control" id="l_name" placeholder="Enter your Last name" name="l_name">
            </div>
            <span class="err" id="err_l_name"> </span>
          </div>
        </div>
        <div class="form-group">          
            <label for="email_id">Email-id</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                </div>
              </div>
              <input type="text" class="form-control" id="email_id" placeholder="Enter your email-id" name="email_id">
            </div>
            <span class="err" id="err_email_id"> </span>
        </div>

        <div class="form-group">          
            <label for="email_id">Password</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-lock" aria-hidden="true"></i>
                </div>
              </div>
              <input type="text" class="form-control" id="password" placeholder="Enter your password" name="password">
            </div>
            <span class="err" id="err_password"> </span>
        </div>

        <div class="form-group">          
            <label for="confirm_pass">Confirm Password</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-lock" aria-hidden="true"></i>
                </div>
              </div>
              <input type="text" class="form-control" id="confirm_pass" placeholder="Confirm Password" name="confirm_pass">
            </div>
            <span class="err" id="err_confirm_pass"> </span>
        </div>

        <div class="form-group">        
            <label for="email_id">Contact No.</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-phone-square" aria-hidden="true"></i>
                </div>
              </div>
              <input type="text" class="form-control" id="contact_no" placeholder="Enter your 10-digit contact number" name="contact_no">
            </div>
            <span class="err" id="err_contact_no"> </span>
        </div>
        
        
         
          <hr>
          <div class="form-row">
            <div class="col-sm-6">
               <button type="button" class="btn btn-success btn-sm" onclick="submitForm();">
                  <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Register 
                </button>  &nbsp; 
                <span class="loader" id="loader_login" > 
                  <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>  
                </span>
                 
                 &nbsp; &nbsp;
                <button type="reset" class="btn btn-danger btn-sm"> 
                    <i class="fa fa-undo" aria-hidden="true"></i>   Reset
                </button>

                <span class="err" id="err_register"> </span>
            </div>
            <div class="col-sm-4">
              <label class="col-form-label" style="margin-bottom: 0px !important; margin-top: 2px; float: right;">
                <a href="login"> <em> <strong> Login </strong> </em></a>
              </label>
              
            </div>
            
          </div>
           
      </form>
    </div>
    
    <div class="col-md-3 col-sm-1 col-xs-12"> </div>
  </div>
</div>

</body>


<script>
function submitForm()
{
    $(".err").stop().fadeOut();
    var f_name = $("#f_name").val();
    if (f_name.length == 0) {
      $("#err_f_name").fadeIn(1000);
      $("#err_f_name").html("&#9888 Oops, First Name is required.");
      return false;
    }
    var l_name = $("#l_name").val();
    if (l_name.length == 0) {
      $("#err_l_name").fadeIn(1000);
      $("#err_l_name").html("&#9888 Oops, Last Name is required.");
      return false;
    }
    var email_id = $("#email_id").val();
    if (email_id.length == 0) {
      $("#err_email_id").fadeIn(1000);
      $("#err_email_id").html("&#9888 Oops, Email-id is required.");
      return false;
    }
  
    var password = $("#password").val();
    if (password.length == 0) {
      $("#err_password").fadeIn(1000);
      $("#err_password").html("&#9888 Oops, Password is required.");
      return false;
    }

    var confirm_pass = $("#confirm_pass").val();
    if (confirm_pass.length == 0) {
      $("#err_confirm_pass").fadeIn(1000);
      $("#err_confirm_pass").html("&#9888 Oops, Confirm password is required.");
      return false;
    }

    if (confirm_pass != password) {
      $("#err_confirm_pass").fadeIn(1000);
      $("#err_confirm_pass").html("&#9888 Oops, Confirm password not matched.");
      return false;
    }
  
  $("#register_loader").fadeIn(800);
  var formData = $("#user_registration").serialize();
  
  $.ajax({
      url: "resistration",
      dataType: "json",
      data: formData,
      type: "POST",
      success: function (data) {
        if (data == 0 || data == '0') {
          $("#err_register").fadeIn(1000);
          $("#err_register").html("<br> &#9888 Oops, Regitration not done sussessfully, Please try again .");
          return false;

        } else {
          $("#success_reg").fadeIn(1000);
          $("#success_reg").html("You have successfully Regitered!");
          setTimeout(function(){ window.location.href =  "login"; }, 3000); 
        }
        $(".loader").hide();
        return false;
      },
      error: function (data) {
        $("#err_register").fadeIn(1000);
        $("#err_register").html("<br> &#9888 Oops, Error occured while regitration, Please try again .");
        $(".loader").hide();
        return false;
      }
    });
    return false;
}
</script>

</html>
