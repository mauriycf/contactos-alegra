<?php

class PostController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
        if(isset($_POST['crear'])){
        $autch = base64_encode("mauriycf@gmail.com:6648f80772b2339f1dfc");
        $auth = [];
        $auth[] = 'Authorization: Basic '.$autch.'';
        $accept = [];
        $accept[] = 'Accept: application/json';

        $name = $_POST['name'];
        $identification = $_POST['identification'];
        $email = $_POST['email'];
        $phonePrimary = $_POST['phonePrimary'];
        $phoneSecondary = $_POST['phoneSecondary'];
        $fax = $_POST['fax'];
        $mobile = $_POST['mobile'];
        $observations = $_POST['observations'];
        $address = $_POST['address'];

        $post = Array ( 'name' => $name,
                        'identification' => $identification,
                        'email' => $email,
                        'phonePrimary' => $phonePrimary,
                        'phoneSecondary' => $phoneSecondary,
                        'fax' => $fax,
                        'mobile' => $mobile,
                        'observations' => $observations,
                        'address' => Array ( 'address' => $address , 'city' => $address),
                        /*'type' => ,
                        'seller' => ,
                        'term' =>, 
                        'priceList' =>, 
                        'internalContacts' => */);
        $post = json_encode($post);
        $service_url = 'https://app.alegra.com/api/v1/contacts/';
        $curl = curl_init($service_url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $auth);
        curl_setopt($curl, CURLOPT_HTTPHEADER, 'Content-Type: application/json');
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $curl_response = curl_exec($curl);
        
        if (isset($curl_response)) {
            echo "<div class='alert alert-success' role='alert'>";
            echo "se creo el contacto";
            echo "</div>";
        }
        }
    }

    public function indexAction()
    {
        // action body
    }

    public function postAction()
    {
        echo "<div class='form-group col-sm-6'><a href='/api/' class='btn btn-warning col-sm-12'>Regresar</a></div>";
    }


}



