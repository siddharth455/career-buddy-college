<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$responseMessage = ''; // Variable to store the API response
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $postData = [
        "AuthToken" => "applycbc_13-12-2024",
            "Source" => "applycbc",
            "FirstName" => $request->input('name'),
            "Email" => $request->input('email'),
            "MobileNumber" => $request->input('mobile'),
            "LeadSource" => "1",
            "LeadCampaign" => $request->input('LeadCampaign'),
            "LeadChannel" => "36",
            "Course" => $request->input('Course'),
            "Center" => "1",
    ];
    $response = extraaEdgePushBasicData($postData);
    $responseMessage = $response;
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
