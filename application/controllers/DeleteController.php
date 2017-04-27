<?php

class DeleteController extends Zend_Controller_Action
{

    public function init()
    {
    	// action body
    	$autch = base64_encode("mauriycf@gmail.com:6648f80772b2339f1dfc");
        $auth = [];
        $auth[] = 'Authorization: Basic '.$autch.'';
		$service_url = 'https://app.alegra.com/api/v1/contacts/' . $_REQUEST['id'];
		$curl = curl_init($service_url);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $auth);
		curl_setopt($curl, CURLOPT_HTTPHEADER, 'Content-Type: application/json');
		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
		curl_setopt($curl, CURLOPT_TIMEOUT, 10);
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$curl_response = curl_exec($curl);
		$decoded = json_decode($curl_response);
		if ($curl_response) {
			foreach ($decoded as $key) {}
			echo "<div class='alert alert-danger' role='alert'>";
			echo 'Se elimino correctamente';
			echo "<a href='/api/' class='btn fa fa-arrow-left fa-lg text-success'></a></div>";
		}
    	$this->_helper->viewRenderer->setNoRender(true);
    }

    public function indexAction()
    {
        // action body
    }

    public function deleteAction()
    {
        // action body
    }

    public function getAction()
    {

    }

}



