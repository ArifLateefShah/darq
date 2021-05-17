<?php

function set_questions_data() {
    error_reporting(E_ALL); 
    ini_set("display_errors", 1);
    $token = "keyfoE6fwJHeRJ4XH";
    $listURL = "https://api.airtable.com/v0/appjRlGKNAG1ucgLw/questions";
    $ch = curl_init($listURL); // Initialise cURL
    
    $linedin_profile = implode(', ', $_POST['linedin-profile']);
    $post_data = array( 'fields' => array(
        'email-address' => $_POST['email-address'],
        'real-name' => $_POST['real-name'],
        'company-name' => $_POST['company-name'],
        'company-url' => $_POST['company-url'],
        'contact-number' => $_POST['contact-number'],
        'linedin-profile' => $linedin_profile,
        'supplemental-info' => $_POST['supplemental-info'],
        'short-description' => $_POST['short-description'],
        'status-of-your-project' => $_POST['status-of-your-project'],
        'current-funding-requirement' => (float)$_POST['current-funding-requirement'],
        'funding-commitments' => $_POST['funding-commitments'],
        'questions' => $_POST['questions']
    ));
    $authorization = "Authorization: Bearer ".$token; // Prepare the authorisation token
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', $authorization )); // Inject the token into the header
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, 1); // Specify the request method as POST
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data, JSON_UNESCAPED_SLASHES));
    // $result = json_decode(curl_exec($ch)); // Execute the cURL statement
    $server_output = json_decode(curl_exec($ch)); // Close the cURL connection
    $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    print_r($server_output);die;
    if($statusCode == '200'){
        return $server_output->id;
    }else{
        return $server_output;
        http_response_code($statusCode);
        exit;
    }
}

if(isset($_POST["email-address"]))
{ 
    set_questions_data();
    // include_once "class.phpmailer.php";
    // include_once "class.smtp.php";
    // require 'PHPMailerAutoload.php';
    // error_reporting(E_ALL); 
    // ini_set("display_errors", 1);
    // $mail = new PHPMailer;
    // $mail->IsSMTP();
    
    // $mail->SMTPAuth = true;
    // $mail->SMTPSecure = 'tls';      // sets the prefix to the servier
    // $mail->Host       = "smtp.gmail.com";      		// sets GMAIL as the SMTP server
    // $mail->Port       = 587;            // set the SMTP port
    // $mail->Username   = "murugan104@gmail.com";  	// GMAIL username
    // $mail->Password   = "uzocwteyckesvbir";            // GMAIL password
    // $mail->Subject    = $_POST['subject'];
    // $mail->WordWrap   = 50;
    // $mail->IsHTML(true);
    // $mail->From = $_POST['email'];
    // $mail->FromName = $_POST['firstname'].' '.$_POST['lastname'];
    // $mail->AddAddress('murugan.m15890@gmail.com');
    // $mail->Body = $_POST['message'];
   
    // try {
    //     $mail->send();
    //     echo "Message has been sent successfully";
    // } catch (Exception $e) {
    //     echo "Mailer Error: " . $mail->ErrorInfo;
    // }
}


?>