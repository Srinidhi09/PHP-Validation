<?php include('form_validation.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css" type ="text/css">

  </head>
  <body>
      
      <div class="container">     
          <div id ="page-wrap">       
              <p class="h1" align="center">Welcome!</p><br>
      
              <div id ="fieldsmissing"></div>
              <div id="error"><? echo $error; ?></div>
                    
                    <form method="post">
                        
                        <div class="form-group input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder = "Your First Name">
                        </div>

                        <div class="form-group input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder = "Your Last Name">
                        </div>

                        <div class="form-group input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                            <input type="text" class="form-control" id ="email" name ="email" placeholder = "Your Email ID">                       
                        </div>

                        <div class="form-group input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </span>
                            <input type="text" class="form-control" id ="contactno" name ="contactno" onkeypress="return isNumber(event)" maxlength="10" minlength="10" placeholder = "Contact Number">
                        </div>
                        
                        <div class="form-check-inline" align ="center">
                            Interested in working at GlobalFluency? &nbsp;

                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="radio-btn" id="interested" value="Yes"> Yes
                            </label>

                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="radio-btn" id="notinterested" value="No"> No
                            </label>
                        </div><br>

                        <div class="form-check-inline" align="center">
                            
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" id="check-1"> 1
                            </label>&nbsp;

                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" id="check-2"> 2
                            </label>&nbsp;

                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" id="check-3"> 3
                            </label>&nbsp;

                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" id="check-4"> 4
                            </label>

                        </div><br>

                        <button type="submit" class="btn btn-primary btn-block" id ="submit" name ="submit">Submit</button>
                    </form>
            </div>
        </div>
      
    <script src="https://use.fontawesome.com/bf06673675.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <script type = "text/javascript" src = "form.js"></script>
  </body>
</html>