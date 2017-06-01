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
       $data = $this->request->getPost('error_description');
        if($data != ''){
       $site_area = $this->request->getPost('site_area');
       $desc =  $this->request->getPost('error_description');
       $os = $this->request->getPost('operating_system');
       $user_agent =  $this->request->getPost('user_agent');
       $html_link =  $this->request->getPost('html_link');
       $date =  $this->request->getPost('submission_date');
       $error_message =  $this->request->getPost('error_message');


        $body = $desc.'<br>Operation system:'.$os.'<br>User_agent:'.$user_agent.'<br>URL:'.$html_link.'<br>Date Submission:'.$date.'<br>Error message:'.$error_message;
        $title =  substr($desc, 0, 20);


        $username = 'blackbiz99';
        $password = 'LetMeIn47@$';

        $owner = 'blackbiz99';
        $repo = 'GitHubApp';

        $client = new GitHubClient();
        $client->setCredentials($username, $password);

        $testIssue = $client->issues->createAnIssue($owner, $repo, $title, $body);
            //getting URL for the issue
            //$Issue_Url = $testIssue->getHtmlUrl();

            //Email body to be sent to admin
            //$bodyEmail = $desc.'<br>Operation system:'.$os.'<br>User_agent:'.$user_agent.'<br>URL:'.$html_link.'<br>Date Submission:'.$date.'<br>Error message:'.$error_message.'<br>This issue can be found at the following URL:<br><a href="'.$Issue_Url.'"">'.$Issue_Url.'</a>';

            /*send email code
            admin@blackbusiness.website*/
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