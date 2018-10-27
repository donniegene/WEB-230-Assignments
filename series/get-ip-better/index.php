<?php

$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
$remote_addr = $_SERVER['REMOTE_ADDR'];

if (!empty($http_client_ip)) {
  $ip_address = $http_client_ip; // Checks actual internet ip $ip_address (hub, router, etc)
} else if (!empty($http_x_forwarded_for)) {
  $ip_address = $http_x_forwarded_for; // Checking to see if using a proxy
} else {
  $ip_address = $remote_addr; // ip address that is viewing the current page
}

echo $ip_address;
// print_r($_SERVER);
/* 01. Explain what the following conditional statement is doing.
if(!empty($http_client_ip)){ $ip_address = $http_client_ip; }
else if(!empty($http_x_forward_for)){ $ip_address = $http_x_forward_for; }
else { $ip_address = $remote_addr; }
    First it is checking if the ip address is from a hub or router, then it's
    checking if the ip address is from a proxy, and if it isn't either of those
    it is grabbibg the remote_addr.
*/
?>
