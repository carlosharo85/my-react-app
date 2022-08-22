<?php

    require_once 'vendor/autoload.php';
    WpOrg\Requests\Autoload::register();


    var_dump($argv);
    var_dump($_ENV);
    /*$headers = array('Accept' => 'application/json');
    $options = json_encode(array(
        "blocks" => array(
            array(
                "type" => "section",
                "text" => array(
                    "type" => "mrkdwn",
                    "text" => "You have a new request:\n*<fakeLink.toEmployeeProfile.com|Fred Enriquez - New device request>*"
                ),
            ),
            array(
                "type" => "section",
                "fields" => array(
                    array(
                        "type" => "mrkdwn",
                        "text" => "*Type:*\nComputer (laptop)"
                    ),
                    array(
                        "type" => "mrkdwn",
                        "text" => "*When:*\nSubmitted Aut 10"
                    ),
                    array(
                        "type" => "mrkdwn",
                        "text" => "*Last Update:*\nMar 10, 2015 (3 years, 5 months)"
                    ),
                    array(
                        "type" => "mrkdwn",
                        "text" => "*Reason:*\nAll vowel keys aren't working."
                    ),
                    array(
                        "type" => "mrkdwn",
                        "text" => "*Specs:*\n\"Cheetah Pro 15\" - Fast, really fast\""
                    ),
                ),
            ),
        ),
    ));

    $request = WpOrg\Requests\Requests::post(
        'https://hooks.slack.com/services/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',
        $headers,
        $options
    );

    var_dump($request);*/


    if (!$request->success) {
        echo $request->body;
    }

?>