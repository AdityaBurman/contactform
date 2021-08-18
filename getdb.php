<?php
// Get cURL resource
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => true, //or 1
    CURLOPT_URL => 'https://apikey-v2-32pf0sdviwjp3fes1w288nizcwfidvt6qxqsffyqnkkd:e3bcf201df423ca282645f923d13a24e@5ccb95af-7d63-4956-85d5-73c4d67802ed-bluemix.cloudantnosqldb.appdomain.cloud/_all_dbs'
]);
// Send the request & save response to $resp
$resp = curl_exec($curl);
if (!$resp=curl_exec($curl)) {
    die('Error: "' . curl_error($curl) . '" - Code: ' . curl_errno($curl));
}
else{
//php returns in json format, so decode in
$resp = json_decode($resp);
for($i = 0; $i < count($resp); $i++){
  echo $resp[$i] . "<br>"; // dot . is the string concatenation operator
}

}
// Close request to clear up some resources
curl_close($curl);
?>
