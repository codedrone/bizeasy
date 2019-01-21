<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://bizeazy.coderspreview.com/MY_Controller/cronUpdateMembership");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, true);
$data = curl_exec($ch);
?>