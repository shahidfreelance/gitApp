<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        //persona token
        //6636c4781e488b9471522565164a2f35e62391bb


        require_once('../vendor/test/client/GitHubClient.php');
        $username = 'blackbiz99';
        $password = 'LetMeIn47@$';

        $owner = 'blackbiz99';
        $repo = 'GitHubApp';
        $title = 'Something is broken.';
        $body = 'Please fix it.';

        $client = new GitHubClient();
        $client->setCredentials($username, $password);
        $testIssue = $client->issues->createAnIssue($owner, $repo, $title, $body);
        //echo 'here';exit;
        echo '<pre>';
        var_dump($testIssue);
        exit;
// This file is generated by Composer
        //require_once '../vendor/autoload.php';

        //$client = new \Github\Client();

        //$client->authenticate($usernameOrToken, $password, $method);

        /*$usernameOrToken = 'blackbiz99';
        $pass = 'LetMeIn47@$';
        $method = 'Github\Client::AUTH_URL_CLIENT_ID';
        $testLogin = $client->authenticate($usernameOrToken, $pass, $method);
        var_dump($testLogin);
        exit;*/

       // $repositories = $client->api('user')->repositories('ornicar');
        //$client->api('issue')->create('KnpLabs', 'php-github-api', array('title' => 'The issue title', 'body' => 'The issue body'));
        //var_dump($repositories);
        //exit;

    }

}

/// $usernameOrToken = 'blackbiz99';
//$pass = 'LetMeIn47@$';