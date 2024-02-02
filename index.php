<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Theft LTD.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            background: url('tux.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        
        .allah {
            color: #dee2e6;
            height: 100vh;
        }
    </style>
</head>
<body>
<?php

function getOSFromUserAgent($userAgent) {
    $osList = array(
	# You have to fill this array, I didn't do it because I was too lazy. You can find it at user-agents.net. Set a priority for it to work properly on Android and Linux distributions.
        'NT 10.0' => 'Windows 10',
        'NT 6.3' => 'Windows 8.1',
        'NT 6.2' => 'Windows 8',
        'NT 6.1' => 'Windows 7',
        'NT 6.0' => 'Windows Vista',
        'NT 5.1' => 'Windows XP',
    );

    foreach ($osList as $key => $value) {
        if (strpos($userAgent, $key) !== false) {
            return $value;
        }
    }

    return 'Our database did not prevail in its battle with you. To hell with all of you who enter the site with an empty user agent.';
}

$userAgent = $_SERVER['HTTP_USER_AGENT'];

$os = getOSFromUserAgent($userAgent);

echo "<p class='allah d-flex align-items-center justify-content-center'>We checked your operating system. I'm sorry about that: " . $os . "</p>";
echo "
</body>
</html>";
