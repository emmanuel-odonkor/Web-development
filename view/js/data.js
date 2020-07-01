function checkName(){
	/*validating of Username*/
	 var Name = document.getElementById("inputUsername").value;
      var Testing =  new RegExp(/[~`0-9!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/);
      if (Testing.test(Name)){
        alert("Enter alphabets only");
         //action="https://script.google.com/macros/s/AKfycbyyM8n-pjMvVoiLJNWBqt8KleiT5mUxb8QIisgK1Q/exec"
        return false;
      }
      //else if()
      else {
        //alert("input should be a text");
        return true;
        //break;

}

}

function checkNumber(){
  /*validating of Contact */
   var Num = document.getElementById("inputContact").value;
      var testing =  new RegExp(/[~`A-Za-z!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?]/);
      if (testing.test(Num)){
        alert("Enter 10 digit numbers only");
         //action="https://script.google.com/macros/s/AKfycbyyM8n-pjMvVoiLJNWBqt8KleiT5mUxb8QIisgK1Q/exec"
        return false;
      }
      //else if()
      else {
        //alert("input should be a number");
        return true;
        //break;

}

}