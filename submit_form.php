<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];
    $zipcode = $_POST['zipcode'];

    // Prepare data for POST request
    $postData = array(
        'name' => $name,
        'email' => $email,
        'mobile_number' => $mobile_number,
        'zipcode' => $zipcode
    );

    // Initialize cURL session
    $curl = curl_init();

    // Set cURL options
    curl_setopt_array(
        $curl,
        array(
            CURLOPT_URL => 'http://54.174.180.236:8189/api/v1/admin/auth/danber_kidz_contact',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => http_build_query($postData), // Send POST data
            CURLOPT_HTTPHEADER => array(
                'api-key: sGRaD2LQTV9HE2mkdQj/EQ==',
                'accept-language: eng'
            ),
        )
    );

    // Execute cURL request
    $response = curl_exec($curl);

    // Check for cURL errors
    if ($response === false) {
        // Handle cURL error
        echo 'cURL Error: ' . curl_error($curl);
    } else {
        // Output the response
        echo $response;
    }

    // Close cURL session
    curl_close($curl);
}
?>