function validateJob(){
var validJob = false;
var date = new Date(document.forms['postJobForm']['date'].value);

if (date < new Date()){
  document.getElementByID('invalidDate').innerHTML = "Date cannot be before today.";
  validJob = false;
}

else{
  document.getElementByID('invalidDate').innerHTML = "";
}
  return validJob;
}
