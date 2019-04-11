<?php
function build_post_context($postdata) {
	return stream_context_create(array(
		'http' =>
			array(
				'method' => 'POST',
				'header' => 'content-type: application/json',
				'content' => $postdata
			)
		)
	);
};

function build_rpc_body($method, $params) {
	return '{"jsonrpc":"2.0","id":"blockexplorer","method":"'.$method.'","params":'.$params.'}';
};

function fetch_rpc($api, $method, $params) {
	$url = $api . '/json_rpc';
	$rendered_rpc = build_rpc_body($method, $params);
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $rendered_rpc);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	    'Content-Type: application/json',
	    'Content-Length: ' . strlen($rendered_rpc))
	);
	$response = curl_exec($ch);
	curl_close($ch);
	return json_decode($response, true);
};

function fetch_getinfo($api) {
	$_url = $api . '/getinfo';
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL, $_url);
	$response = curl_exec($ch);
	curl_close($ch);
	return json_decode($response, true);
};
