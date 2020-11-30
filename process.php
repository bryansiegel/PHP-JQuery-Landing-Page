<?php

$errors = array(); //To store errors
$form_data = array(); //Pass back the data to `form.php`

/* Validate the form on the server side */
if (empty($_REQUEST['address_1'])) { //Name cannot be empty
    $errors['address_1'] = 'Address Is Required';
} else {
    $address = $_REQUEST['address_1'];
}

if (empty($_REQUEST['state'])) { //Name cannot be empty
    $errors['state'] = 'State Is Required';
} else {
    $state = $_REQUEST['state'];
}

if (empty($_REQUEST['postal_code'])) { //Name cannot be empty
    $errors['postal_code'] = 'Zip Code Is Required';
} else {
    $postal_code = $_REQUEST['postal_code'];
}

if (empty($_REQUEST['first_name'])) { //Name cannot be empty
    $errors['first_name'] = 'First Name Is Required';
} else {
    $first_name = $_REQUEST['first_name'];
}

if (empty($_REQUEST['last_name'])) { //Name cannot be empty
    $errors['last_name'] = 'Last Name Is Required';
} else {
    $last_name = $_REQUEST['last_name'];
}

if (empty($_REQUEST['phone_1'])) { //Name cannot be empty
    $errors['phone_1'] = 'Phone Number Is Required';
} else {
    $phone_1 = $_REQUEST['phone_1'];
}

if (empty($_REQUEST['email'])) { //Name cannot be empty
    $errors['email'] = 'Email Is Required';
} else {
    $email = $_REQUEST['email'];
}

if (empty($_REQUEST['avg_utility_bill_hsp'])) { //Name cannot be empty
    $errors['avg_utility_bill_hsp'] = 'Average Utility Bill Is Required';
} else {
    $avg_utility_bill_hsp = $_REQUEST['avg_utility_bill_hsp'];
}

$ip_address = $_REQUEST['ip_address'];

if (empty($_REQUEST['utm_campaign'])) {
    $utm_campaign = '';
} else {
    $utm_campaign = $_REQUEST['utm_campaign'];
}

if (empty($_REQUEST['utm_source'])) {
    $utm_source = '';
} else {
    $utm_source = $_REQUEST['utm_source'];
}

if (empty($_REQUEST['utm_content'])) {
    $utm_content = '';
} else {
    $utm_content = $_REQUEST['utm_content'];
}

// echo $utm_campaign;

// die();

if (!empty($errors)) { //If errors in validation
    $form_data['success'] = false;
    $form_data['errors']  = $errors;
} else { //If not, process the form, and return true on success
    $form_data['success'] = true;
    $form_data['posted'] = 'Data Was Posted Successfully';



    /*
            ** Push Form Data into mysql then into leadconduit
            */


    /*
            ** Mysql
            ** @table customer_form_data
            ** @database - Sungevity WP database
            */

    $server_name = "server_name";
    $username = "username";
    $password = "password";
    $database_name = "database";
    //Date of submission
    $submit_date = Date("m/d/Y");
    //customer type (residential or commercial)
    $customer_type = "Residential";
    $form_type = "Fancy Long Form";

    //Connection
    $connection = new mysqli($server_name, $username, $password, $database_name);

    //Connection Error
    //Email bryan.siegel@horizonsolarpower.com if there's an error
    if ($connection->connect_error) {
        //if there's an error connecting email bryan.siegel@horizonsolarpower.com
        // $message = "The Database connection error is \n " . $connection->connect_error;
        // mail("bryan.siegel@horizonsolarpower.com", "Sungevity iquote residential form cannot communicate with Mysql", $message);
        //
        die();
    }

    //
    if ($first_name != '') {
        //SQL Insert
        // $sql = "INSERT INTO customer_form_data (first_name, last_name, street_address, state, postal_code, phone_1, email, customer_type, submit_date, utm_campaign, form_type, avg_utility_bill_hsp, ip_address) VALUES ('$first_name', '$last_name', '$address', '$state', '$postal_code', '$phone_1', '$email', '$customer_type', '$submit_date', '$utm_campaign', '$form_type', '$avg_utility_bill_hsp', '$ip_address')";

        $sql = "INSERT INTO customer_form_data (first_name, last_name, street_address, state, postal_code, phone_1, email, customer_type, submit_date,form_type, avg_utility_bill_hsp, ip_address, utm_campaign, utm_source, utm_content) VALUES ('$first_name', '$last_name', '$address', '$state', '$postal_code', '$phone_1', '$email', '$customer_type', '$submit_date', '$form_type', '$avg_utility_bill_hsp', '$ip_address', '$utm_campaign', '$utm_source', '$utm_content')";
    }

    //SQL Insert Error
    //email to bryan.siegel@horizonsolarpower.com
    if ($connection->query($sql) === FALSE) {
        // $message = "The Sungevity iquote form could not insert the values into the database";
        // mail("bryan.siegel@horizonsolarpower.com", "Sungevity Iquote Insert Error", $message);
    } else {
        // echo "It worked";
    }

    //Close Connection
    $connection->close();




    //submit to leadconduit api

    //API Url

    //test
    // $url = '';

    $url = 'url_goes_here';

    //Initiate cURL.

    $ch = curl_init($url);



    //The JSON data.

    $jsonData = array(

        'first_name' => $first_name,

        'last_name' => $last_name,

        'address_1' => $address,

        'phone_1' => $phone_1,

        'postal_code' => $postal_code,

        'avg_utility_bill_hsp' => $avg_utility_bill_hsp,

        'email' => $email,

        'state' => $state,

        'residence_type' => 'own',

        'ip_address' => $ip_address,

        'utm_campaign' => $utm_campaign,

        'sls' => 'Solar Free Quote Long Form',



        //        'is_test' => true
    );



    //Encode the array into JSON.

    $jsonDataEncoded = json_encode($jsonData);



    //Tell cURL that we want to send a POST request.

    curl_setopt($ch, CURLOPT_POST, 1);



    //Attach our encoded JSON string to the POST fields.

    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);



    //Set the content type to application/json

    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));



    //Execute the request

    $result = curl_exec($ch);
}

//Return the data back to form.php
echo json_encode($form_data);