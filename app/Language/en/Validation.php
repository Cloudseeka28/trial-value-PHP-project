<?php

// override core en language system validation or define your own en language validation message
return [
    "required" => [
        "status" => "Please select status",
        "gender" => "Please select gender",
        "state" => "Please select state",
      
        "desc" => "Please enter a Description",
        
        "meta_desc" => "Please enter a Meta Description",
        "organization" => "Please enter a organization",
        "name" => "Please enter a name",
        "email" => "Please enter a email",
        "address" => "Please enter a address",
        "contact" => "Please enter a contact number",
  
       
    ],
    "valid" => [
        "email" => "Please enter a valid email address",
        "contact" => "Please enter a valid contact number",
        "password" => "Your password must be at least 5 characters",
        "match_password" => "Your password is not matched",
    ],
    "unique" => [
        "already_exists" => "Already exists",
        "email" => "Sorry. That email has already been taken. Please choose another.",
        "title" => "Sorry. That Title has already been taken. Please choose another.",
        "coupan_code" => "Sorry. That Coupon Code has already been taken. Please choose another.",
        "role" => "Already exists",
    ]
];
