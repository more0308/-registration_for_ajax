<?php
//Getting data
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

//Getting all registered accounts
$all_accounts = unserialize(file_get_contents('../all_account.txt'));

//Validation
if(!substr(strrchr($email, '@'), 1)) return print_r( 'Email is incorrect');
if($password != $confirm_password) return print_r( 'Password mismatch');


//Checking for an existing email
$fd = fopen("../log.txt", 'a+') or die("Failed to create file");
if(empty($all_accounts) == false) {
    foreach ($all_accounts as $key => $value) {
        if ($value['email'] == $email) {
            $str = "Account with email " . $email . " already exists";

            fwrite($fd, $str);
            fclose($fd);
            return print_r($str);
        }
    }
}
//Creating a new account
array_push($all_accounts,['email'=>$email, 'name'=>$name]);
file_put_contents('../all_account.txt',serialize($all_accounts));

//Writing to file
$str = "Account with email ".$email." successfully created";
fwrite($fd, $str);
fclose($fd);