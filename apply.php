<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$responseMessage = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $postData = [
        "AuthToken" => "applycbc_13-12-2024",
        "Source" => "Digital",
        "FirstName" => $_POST['name'],
        "Email" => $_POST['email'],
        "MobileNumber" => $_POST['mobile'],
        "LeadSource" => "1",
        "LeadCampaign" => "cbc_college",
        "Course" => $_POST['course'],
        "Center" => "1",
        "Location" => $_POST['location'],
    ];
    $response = extraaEdgePushBasicData($postData);
    $decodedResponse = json_decode($response, true);

    if ($decodedResponse === null) {
        $responseMessage = "Raw API Response: " . htmlspecialchars($response);
    } else {
        $responseMessage = "Decoded API Response:<br><pre>" . print_r($decodedResponse, true) . "</pre>";
    }
    echo $responseMessage;
}


function extraaEdgePushBasicData($data)
{
    $curl = curl_init();
        $jsonData = json_encode($data);
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://publisher.extraaedge.com/api/Webhook/addPublisherLead',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $jsonData,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
}

?>
