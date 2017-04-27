<?php

class EditController extends Zend_Controller_Action
{

    public function init()
    {
      
    }

    public function indexAction()
    {
        // action body
    }

    public function getAction()
    {
        /* Initialize action controller here */
        $id = $_REQUEST['id'];
        $autch = base64_encode("mauriycf@gmail.com:6648f80772b2339f1dfc");
        $auth = [];
        $auth[] = 'Authorization: Basic '.$autch.'';
        $service_url = 'https://app.alegra.com/api/v1/contacts/' . $id;
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
        echo "<div class='container col-sm-12 col-lg-7'><form action='post'>";
        echo "<div class='row'><div class='form-group col-sm-12 col-lg-4'><label>ID</label><input type='text' value='".$ids."' name='id'></div><div class='form-group col-sm-12 col-lg-4'><label>Nombre </label><input type='text' value='".$name."' name='name'></div>";
        echo "<div class='form-group col-sm-4'><label>Identificacion</label><input type='text' value='".$identification."' name='identification'></div>";
        echo "</div>";
        echo "<div class='row'><div class='form-group col-sm-12 col-lg-4'><label>Teléfono 1</label><input type='text' value='".$phonePrimary."' name='phonePrimary'></div>";
        echo "<div class='form-group col-sm-12 col-lg-4'><label>Teléfono 2</label><input type='text' value='".$phoneSecondary."' name='phoneSecondary'></div>";
        echo "<div class='form-group col-sm-12 col-lg-4'><label>Fax </label><input type='text' value='".$fax."' name='fax'></div>";
        echo "</div>";
        echo "<div class='row'><div class='form-group col-sm-12 col-lg-4'><label>Observacion </label><input type='text' value='".$observation."' name='observation'></div>";
        echo "<div class='form-group col-sm-12 col-lg-4'><label>Celular</label><input type='text' value='".$mobile."' name='mobile'></div>";
        echo "<div class='form-group col-sm-12 col-lg-4'><label>Correo Electronico</label><input type='text' value='".$email."' name='email'></div>";
        echo "</div>";
        echo "<div class='row'><div class='form-group col-sm-12 col-lg-4'><label>Vendedor </label><input type='text' value='".$seller."' name='seller'></div>";
        echo "<div class='form-group col-sm-12 col-lg-4'><label>Lista de Precio</label><input type='text' value='".$listPrice."' name='listPrice'></div>";
        echo "<div class='form-group col-sm-12 col-lg-4'><label>Direccion </label><textarea type='text' rows='3' name='address'>".$address['address']."</textarea></div>";
        echo "<div class='form-group col-sm-12 col-lg-4'><label>Ciudad </label><textarea type='text' rows='3' name='city'>".$address['city']."</textarea></div>";
        echo "<div class='form-group col-sm-12 col-lg-4'><label>Tipo</label><input type='text' value='".$type['name']."' name='type'></div>";
        echo "<div class='form-group col-sm-12 col-lg-4'><label>Contactos Internos</label><input type='text' value='".$internalContacts['name']."' name='internalContacts'></div>";
        echo "</div>";
        echo "<div class='row'><div class='form-group col-sm-12 col-lg-4'><label>Terminos </label><input type='text' value='".$term['name']."' name='term'></div>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<div class='form-group col-sm-12 col-lg-6'><input type='submit' name='send' class='btn btn-primary col-sm-12' value='Enviar'></div>";
        echo "<div class='form-group col-sm-12 col-lg-6'><a class='btn btn-warning col-sm-12 text-white' href='/api/'>Regresar</a></div>";
        echo "</div>";
        echo "</form></div>";
        if (isset($_REQUEST['send'])) {
        $name = $_REQUEST['name'];
        $identification = $_REQUEST['identification'];
        $email = $_REQUEST['email'];
        $phonePrimary = $_REQUEST['phonePrimary'];
        $phoneSecondary = $_REQUEST['phoneSecondary'];
        $fax = $_REQUEST['fax'];
        $mobile = $_REQUEST['mobile'];
        $observations = $_REQUEST['observations'];
        $address = $_REQUEST['address'];
        $city = $_REQUEST['city'];

        $post = Array ( 'name' => $name,
                        'identification' => $identification,
                        'email' => $email,
                        'phonePrimary' => $phonePrimary,
                        'phoneSecondary' => $phoneSecondary,
                        'fax' => $fax,
                        'mobile' => $mobile,
                        'observations' => $observations,
                        'address' => Array ( 'address' => $address , 'city' => $city),
                        /*'type' => ,
                        'seller' => ,
                        'term' =>, 
                        'priceList' =>, 
                        'internalContacts' => */);
        $post = json_encode($post);
        $service_url = 'https://app.alegra.com/api/v1/contacts/' . $_REQUEST['id'];
        $curl = curl_init($service_url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $auth);
        curl_setopt($curl, CURLOPT_HTTPHEADER, 'Content-Type: application/json');
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $curl_response = curl_exec($curl);
        
            if(isset($curl_response))
            {
                echo "<div class='alert alert-warning' role='alert'>";
                echo "se realizaron los cambios";
                echo "</div>";
            }
        }
    }


}



