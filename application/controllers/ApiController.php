<?php

class ApiController extends Zend_Controller_Action
{

    public function init()
    {
        $autch = base64_encode("mauriycf@gmail.com:6648f80772b2339f1dfc");
        $auth = [];
        $auth[] = 'Authorization: Basic '.$autch.'';
        //url - api
        $service_url = 'https://app.alegra.com/api/v1/contacts/';
        $curl = curl_init($service_url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $auth);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $curl_response = curl_exec($curl);
        curl_close($curl);

        $decoded = json_decode($curl_response, true);

        /* Initialize action controller here */
       // $this->_helper->viewRenderer->setNoRender(true);

        $this->_todo = $decoded;
    }
   
    public function indexAction()
    {
        // action body
        $decoded = $this->_todo;
         echo '<div class="container"><table class="table col-sm-12 col-md12 col-lg-8"><thead class="bg-primary text-white"><tr><th>ID</th><th>Nombre</th><th class="hidden-sm-down">Identificación</th><th>Teléfono 1</th><th class="hidden-sm-down">Observaciones</th><th>Opciones</th></tr></thead><tbody>';
        foreach ($decoded as $key) {
            echo '<tr><td>'.$key['id'].'</td>';
            echo '<td>'.$key['name'].'</td>';
            echo '<td class="hidden-sm-down">'.$key['identification'].'</td>';
            echo '<td>'.$key['phonePrimary'].'</td>';
            echo '<td class="hidden-sm-down">'.$key['observations'].'</td>';
            echo '<td><a href="?id='.$key['id'].'" class="btn fa fa-eye fa-lg"></a>';
            echo '<a href="/edit/?id='.$key['id'].'" class="btn fa fa-pencil fa-lg"></a>';
            echo '<a class="fa fa-trash btn fa-lg" href="/delete/?id='.$key['id'].'" ></a></td></tr>';
        }
        echo "<div class='form-group col-sm-6'><a href='/Post/' class='btn btn-success col-sm-12'>Crear Contacto</a></div>";
        echo '</tbody></table></div>';

    }

    public function getAction()
    {
        $autch = base64_encode("mauriycf@gmail.com:6648f80772b2339f1dfc");
        $auth = [];
        $auth[] = 'Authorization: Basic '.$autch.'';
        // action body
        $service_url = 'https://app.alegra.com/api/v1/contacts/' .  $_REQUEST['id'];
        $curl = curl_init($service_url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $auth);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $curl_response = curl_exec($curl);
        curl_close($curl);
        $decoded = json_decode($curl_response, true);

         $ids = $decoded['id'];
        $name = $decoded['name'];
        $identification = $decoded['identification'];
        $phonePrimary = $decoded['phonePrimary'];
        $phoneSecondary = $decoded['phoneSecondary'];
        $fax = $decoded['fax'];
        $mobile = $decoded['mobile'];
        $observations = $decoded['observations'];
        $email = $decoded['email'];
        $ignoreRepeated = $decoded['ignoreRepeated'];
        $listPrice = $decoded['listPrice'];
        $seller = $decoded['seller'];
        $term = $decoded['term'];
        $address = $decoded['address'];
        $internalContacts = $decoded['internalContacts'];

        echo "<div class='container col-sm-12 col-lg-4'>";
        echo "<table class='table'><thead class='bg-primary text-white'><tr><th>Datos Generales</th><th></th></tr></thead><tbody>";
        echo "<tr><td>Nombre: </td>" ."<td>". $name . "<td></tr>";
        echo "<tr><td>Identificación: </td>" ."<td>". $identification . "</tr>";
        echo "<tr><td>Teléfono: </td>" ."<td> ". $phonePrimary . "</tr>";
        echo "<tr><td>Teléfono 2: </td>" ."<td> ". $phoneSecundary . "</tr>";
        echo "<tr><td>Celular: </td>" ." <td>". $mobile . "</tr>";
        echo "<tr><td>Dirección: </td>" ." <td>". $address['address']. "</tr>";
        echo "<tr><td>Ciudad: </td>" ."<td> ". $address['city']. "</tr>";
        echo "<tr><td>Correo Electronico: </td>" ." <td>". $email. "</tr>";
        echo "<tr><td>Lista de Precio: </td>" ."<td> ". $listPrice['name']. "</tr>";
        echo "<tr><td>Observaciones: </td>" ." <td>". $observations . "</tr>";
        echo "<tr></tbody></table></tr>";
        echo "<a class='btn btn-primary' href='/api/'>Regresar</a>";
        echo "</div>";
    }

    public function postAction()
    {
        // action body
        $item = $this->_request->getPost('item');

        $this->_todo[count($this->_todo) + 1] = $item;

        echo Zend_Json::encode($this->_todo);
    }

    public function putAction()
    {
        // action body
    }

    public function deleteAction()
    {
        
    }


}









