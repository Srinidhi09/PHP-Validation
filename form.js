$("#submit").click(function(e) {

    var fieldsmissing = "";
    var error = "";

    if ($("#firstname").val() == "") {
      fieldsmissing += "First Name field is required.<br>"
    }

    if ($("#lastname").val() == "") {
      fieldsmissing += "Last Name field is required.<br>"
    }

    if ($("#contactno").val() == "") {
      fieldsmissing += "Contact number is required.<br>"
    }

    if (!$("input[name='radio-btn']:checked").val()) {
      fieldsmissing += "Radio button value is required.<br>"
    }

    if (fieldsmissing != "") {
      error += fieldsmissing;
    }

    if ($("#firstname").val() == $("#lastname").val() && $("#firstname").val() != "" && $("#lastname").val() != "") {
      error += "<p>First name and Last name should not match."
    }

    if (error != "") {
      $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:<br><br></strong></p>' + error + '</div>');
      return false;
    } 
    else {
      return true;
    }
});

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if ((charCode > 31 && charCode < 48) || charCode > 57) {
      return false;
    }
    return true;
}