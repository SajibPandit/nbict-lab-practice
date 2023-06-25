function validateForm(){
  var yourMail = document.forms["FirstForm"]["email"].value;

  if (yourMail == null || yourMail == ""){
    alert("Please provide your email address!")
  }else{
    alert("Subscription done! An email has sent to " + yourMail)
  }
}
