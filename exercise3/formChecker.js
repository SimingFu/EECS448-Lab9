document.getElementById('form').onsubmit = function(){
  if (document.getElementById('password').value == ""
      || document.getElementById('username').value == ""){
    alert("Username or Password field cannot be blank");
    return false;
  }
  else if (document.getElementById('apple').value == "" || document.getElementById('apple').value < 0
      || document.getElementById('milk').value == "" || document.getElementById('milk').value < 0
      || document.getElementById('cake').value == "" || document.getElementById('cake').value < 0){
    alert("Quantities cannot be blank or negative (zero is fine)");
    return false;
  }
}

