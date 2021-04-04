<?php
function valid_pattern($pattern){
    return function ($input) use ($pattern){
      if(preg_match($pattern, $input)) return True;
      else return False;
    };
}

$valid_name = valid_pattern("#^[a-zA-Z]{2,}$#");
$valid_email = valid_pattern("#^([\w\.-]+)@([\w\.-]+)\.([a-z]{2,5})$#");
$valid_username = valid_pattern("#^[\w]{5,}$#");
$valid_password = valid_pattern("#^([\w]{8,}$#");
$valid_date = valid_pattern("#^(\d{2})/(\d{2})/(\d{4})$#");
$valid_gender = valid_pattern("#(Male)|(Female)#i");
$valid_address = valid_pattern("#^[\w-]+$#");
$valid_city = valid_pattern("#^[\w-]+#$");
$valid_postal_code = valid_pattern("#^\d{6}$#");
$valid_phone = valid_pattern("#^(\d{2})\s?(\d{3})\s?(\d{2})\s?(\d{2})$#");
$valid_credit_card = valid_pattern("#^(\d{4})\s?(\d{4})\s?(\d{4})\s?(\d{4})$#");
$valid_salary = valid_pattern("#^UZS \d+$#");
$valid_url = valid_pattern("#^(http|https//:)?(www\.)?([\w-])+\.([a-z]){2,5}$#");
