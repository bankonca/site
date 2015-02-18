<?php

	// A file to quickly get the value pledged to a server hosted Lighthouse project
	// Created on 27/01/2015
	// Created by btcll@gmx.com
	
	// The link to the .json for this project on the Lighthouse Server
	$lighthouseLink = "https://vinumeris.com/_lighthouse/crowdfund/project/bitsquare-v0-2.json";
	
	// Connect and get the JSON data from the server with cURL
	$cURL = curl_init();
	curl_setopt($cURL, CURLOPT_URL, $lighthouseLink);
	curl_setopt($cURL, CURLOPT_HTTPGET, true);
	curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($cURL);
	curl_close($cURL);

	preg_match('/value_pledged_so_far": (\d*),/', $result, $matches);
	
	if($_REQUEST['display'] == 1) {
		$pledged = $matches[1] / 100000000;
		$percent = $pledged / 120 * 100;
		$percent = number_format($percent, 0);
?>
	<p><span style="font-weight: bold; font-size: 1.6em;"><?php echo number_format($pledged, 8); ?> BTC</span><br />Pledged of 120 BTC goal (<?php echo $percent; ?>% funded).</p>
<?php
	} else {
		echo $matches[1] . " from " . substr_count($result,'pledge_details') . " pledges";
		print_r($pledges);
	}
	
	// Requires Protobuf-PHP
	// Source: https://github.com/drslump/Protobuf-PHP
	// And the Lighthouse proto info from: https://github.com/vinumeris/lighthouse/blob/master/common/src/main/extended-bip70.proto
	/*
	require_once 'Protobuf.php';
	use DrSlump\Protobuf;
	
	$data = file_get_contents("lighthouse.proto");
	$projectDetails = new new ProjectDetails($data);
	echo $projectDetails->value_pledged_so_far();
	
	\DrSlump\Protobuf::autoload();
	$lighthouse = new lighthouse.proto();
	$codec = new \DrSlump\Protobuf\Codec\Binary();
	$data = $codec->decode(new Lighthouse(), $result);
	
	print_r($data);
	*/
	
	//$result = json_decode($result, true);
	//print_r($result);
	
	//$xml = simplexml_load_string($result);
	//echo '<pre>', htmlentities($xml), '</pre>';
	//print_r($xml);

?>