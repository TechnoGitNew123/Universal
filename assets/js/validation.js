$('.required').blur(function(){
  var val = $(this).val();
  var pin_code_format = /^[0-9]{6}$/;
  var age_format = /^[0-9]{3}$/;
  var aadhar_no_format = /^[0-9]{12}$/;
  var mobile_format = /^[6-9][0-9]{9}$/;
  var email_format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  // var pan_format = /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/;
  if(val=='' || val=='0'){
    $(this).addClass('required-input');
    // $(this).attr("placeholder", "This field is required");
  }
  else{
    $(this).removeClass('required-input');
  }
  // Pincode
  if($(this).hasClass('pin-code') && !pin_code_format.test(val)){
    $(this).addClass('invalide-input');
  }
  if($(this).hasClass('pin-code') && pin_code_format.test(val)){
    $(this).removeClass('invalide-input');
  }
  // Major Age.
  if($(this).hasClass('age-major') && (val<18 || val>110)){
    $(this).addClass('invalide-input');
  }
  if($(this).hasClass('age-major') && val>17 && val<=110){
    $(this).removeClass('invalide-input');
  }
  // Age.
  if($(this).hasClass('age') && (val<1 || val>110)){
    $(this).addClass('invalide-input');
  }
  if($(this).hasClass('age') && val>=1 && val<=110){
    $(this).removeClass('invalide-input');
  }
  // aadhar Number.
  if($(this).hasClass('aadhar-no') && !aadhar_no_format.test(val)){
    $(this).addClass('invalide-input');
  }
  if($(this).hasClass('aadhar-no') && aadhar_no_format.test(val)){
    $(this).removeClass('invalide-input');
  }
  //email
  if($(this).hasClass('email') && !email_format.test(val)){
    $(this).addClass('invalide-input');
  }
  if($(this).hasClass('email') && email_format.test(val)){
    $(this).removeClass('invalide-input');
  }
  //mobile
  if($(this).hasClass('mobile') && !mobile_format.test(val)){
    $(this).addClass('invalide-input');
  }
  if($(this).hasClass('mobile') && mobile_format.test(val)){
    $(this).removeClass('invalide-input');
  }
});
// Convert Input in title case.
$('.title-case').blur(function(){
  var name = $(this).val();
  var splitStr = name.toLowerCase().split(' ');
   for (var i = 0; i < splitStr.length; i++) {
       splitStr[i] = splitStr[i].charAt(0).toUpperCase() + splitStr[i].substring(1);
   }
   var cap_name = splitStr.join(' ');
   $(this).val(cap_name);
});

// Only Text allowed in input.
$(".text").keypress(function(event){
  var inputValue = event.which;
  // allow letters and whitespaces only.
  if(!(inputValue >= 65 && inputValue <= 90) && !(inputValue >= 97 && inputValue <= 122) && (inputValue != 32 && inputValue != 0)) {
      event.preventDefault();
  }
});

// Only Number allowed in input.
$(".only_number").keypress(function(event){
  var inputValue = event.which;
  // allow letters and whitespaces only.
  if(!(inputValue >= 48 && inputValue <= 57) && (inputValue != 0)) {
      event.preventDefault();
  }
});

//  Number Alphabets and , . / - allowed in input.
$(".address").keypress(function(event){
  var inputValue = event.which;
  // allow letters and whitespaces only.
  if(!(inputValue >= 65 && inputValue <= 90) && !(inputValue >= 97 && inputValue <= 122) && !(inputValue >= 48 && inputValue <= 57) && !(inputValue >= 44 && inputValue <= 47) && (inputValue != 32 && inputValue != 0)) {
      event.preventDefault();
  }
});

// Only Number allowed in input.
$(".dec_number").keypress(function(event){
  var inputValue = event.which;
  // allow letters and whitespaces only.
  if(!(inputValue >= 48 && inputValue <= 57) && (inputValue != 0 && inputValue != 46)) {
      event.preventDefault();
  }
});
