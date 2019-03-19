<?php
function handler($event, $context) {
    $event   = json_decode($event, $assoc = true);
    $queryMethod = $event['queryParameters']['method'];
    $data = base64_decode($event['body']);
    $data = json_decode($data);
    include_once "method/".$queryMethod.".php";
    $ic = new $queryMethod($event,$context,$data);
    $content = $ic->handler();
    $rep = [
        "isBase64Encoded" => "false",
        "statusCode"      => "200",
        "headers"         => [
            "x-custom-header" => "no",
        ],
        "body"            => $content,
    ];
    return json_encode($rep);
}