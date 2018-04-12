function validateJob(){

  var date = document.forms["postJobForm"]["date"].value;
  var strDate = date.split("-");
  var year =  strDate[0];
  var month = strDate[1];
  var day = strDate[2];
  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth()+1; // Since first value is 0, add 1 to reflect January as first month
  var yyyy = today.getFullYear();

if(year < yyyy){
  alert("Date cannot be before today!");
  return false;
}
if (year == yyyy && month < mm){
  alert("Date cannot be before today !");
  return false;
}
if (year == yyyy && month == mm && day < dd){
    alert("Date cannot be before today!");
    return false;
  }
//check if user create a session for today
if (year == yyyy && month == mm && day == dd){
 alert("You cannot create session for today !" + "\n" + "Session should be created one day before !");
  return false;
}
}
