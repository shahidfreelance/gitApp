<?php

class IndexController extends ControllerBase
{


    public function indexAction()
    {
        //persona token
        //6636c4781e488b9471522565164a2f35e62391bb

    }
    public function gitAction(){
        require_once('../vendor/gitclient/client/GitHubClient.php');
       $data = $_POST;
        if(!empty($data)){
       $site_area =  $data['site_area'];
       $desc =  $data['error_description'];
       $os =  $data['operating_system'];
       $user_agent =  $data['user_agent'];
       $html_link =  $data['html_link'];
       $date =  $data['submission_date'];
       $error_message =  $data['error_message'];


        $body = $desc.'<br>Operation system:'.$os.'<br>User_agent:'.$user_agent.'<br>URL:'.$html_link.'<br>Date Submission:'.$date.'<br>Error message:'.$error_message;
        $title =  substr($desc, 0, 20);


        $username = 'blackbiz99';
        $password = 'LetMeIn47@$';

        $owner = 'blackbiz99';
        $repo = 'GitHubApp';

        $client = new GitHubClient();
        $client->setCredentials($username, $password);

        $testIssue = $client->issues->createAnIssue($owner, $repo, $title, $body);
        $this->flashSession->success("Issue Created Successfully");
        $this->response->redirect('');
        }else{
            $this->flashSession->error("Please fill the information carefully");
            $this->response->redirect('');
        }

    }

}

/// $usernameOrToken = 'blackbiz99';
//$pass = 'LetMeIn47@$';