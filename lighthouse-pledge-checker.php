<?php

    $ch = curl_init(); // create curl resource
    curl_setopt($ch, CURLOPT_URL, "https://vinumeris.com:13765/_lighthouse/crowdfund/project/bitsquare-v02.html"); // set url
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //return the transfer as a string
    $output = curl_exec($ch); // $output contains the output string
    echo "<hr />" . $output . "<hr />";
    curl_close($ch); // close curl resource to free up system resources

	/*
	
hearn		https://github.com/vinumeris/lighthouse/blob/master/common/src/main/extended-bip70.proto			7:42
hearn		if you do an HTTPS GET to https://vinumeris.com:13765/_lighthouse/crowdfund/project/bitsquare-v02 then you will get a ProjectStatus message			7:43
hearn		the value_pledged_so_far field contains number of satoshis pledged			7:44
hearn		i think I can probably add a JSON version of this, if it's more convenient than protobuf			7:44
oakpacific [~oakpacifi@2.127.106.66] entered the room.			7:58
hearn left the room (quit: Quit: Textual IRC Client: www.textualapp.com).			8:05

Lloydy		hey - I was looking at how to integrate the server			11:22
hearn		ok. i just added JSON, HTML and XML export of pledge data so it might be easier if you don't want to use protobufs			11:22
Lloydy		still using this URL? https://vinumeris.com:13765/_lighthouse/crowdfund/project/bitsquare-v02			11:23
hearn		https://vinumeris.com:13765/_lighthouse/crowdfund/project/bitsquare-v02.json			11:23
hearn		for example			11:23
hearn		or https://vinumeris.com:13765/_lighthouse/crowdfund/project/bitsquare-v02.html

	*/

?>