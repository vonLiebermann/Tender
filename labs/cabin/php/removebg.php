<?php

// Requires "guzzle" to be installed (see guzzlephp.org)

$client = new GuzzleHttp\Client();
$res = $client->post('https://api.remove.bg/v1.0/removebg', [
    'multipart' => [
        [
            'name'     => 'image_file',
            'contents' => fopen('/path/to/file.jpg', 'r')
        ],
        [
            'name'     => 'size',
            'contents' => 'auto'
        ]
    ],
    'headers' => [
        'X-Api-Key' => 'iujQnTLwFYYvo4YAZwcwzmM2'
    ]
]);

$fp = fopen("no-bg.png", "wb");
fwrite($fp, $res->getBody());
fclose($fp);

?>