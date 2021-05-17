<?php
if(isset($_POST["newsletter-email"]))
{
    error_reporting(E_ALL); 
    ini_set("display_errors", 1);
    $token = "keyfoE6fwJHeRJ4XH";
    $listURL = "https://api.airtable.com/v0/appjRlGKNAG1ucgLw/newsletter";
    $ch = curl_init($listURL); // Initialise cURL
    $post_data = array( 'fields' => array(
        'email' => $_POST['newsletter-email'],
    ));
    $authorization = "Authorization: Bearer ".$token; // Prepare the authorisation token
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', $authorization )); // Inject the token into the header
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, 1); // Specify the request method as POST
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data, JSON_UNESCAPED_SLASHES));
    $server_output = json_decode(curl_exec($ch)); // Close the cURL connection
    $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if($statusCode == '200'){
        return $server_output->id;
    }else{
        return $server_output;
        http_response_code($statusCode);
        exit;
    }
}

?>