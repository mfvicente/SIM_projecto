<?php

echo"<table border = '1' width = '100%'>";

    $patient_chart = array('firstName' => 'Nome:',
                           'lastName' => 'Apelido:',
                           'profilePicture' => 'Imagem de perfil:',
                           'dateOfBirth' => 'Data de Nascimento:',
                           'sex' => 'Sexo:',
                           'address' => 'Morada:',
                           'city' => 'Localidade:',
                           'district' => 'Distrito:',
                           'contact' => 'Contactos:',
                           'email' => 'Email:',
                           'nif' => 'NIF:',
                           'snsCard' => 'Cartão SNS:',
                           'alergies' => 'Alergias:',
                           'username' => 'username:',
                           'pass' => 'password:');

/*keys: 'firstName', 'lastName', 'dateOfBirth', 'sex', 'address',
'city', 'district', 'contact', 'email', 'nif', 'snsCard', 'alergies',
'username', 'pass');*/

    $patient_data = array();

    echo "<TR><TD>*</TD><TD>campos obrigatorios</TD></TR>";
    echo "<form method='POST' action='index.php?op=reg_paciente'>";

    foreach($patient_chart as $k => $i){
        echo "<TR><TD width = '15%'>$i</TD>";
        if($k == 'profilePicture'){
            echo "<TD>
            <p><input type='file' accept='image/*' name='$k'></p>";
        }
        else{
            echo "<TD><input type='text' name='$k'>";
            if ($_SERVER["REQUEST_METHOD"] == "POST" and empty($_POST[$k])){
                echo "* necessario preencher";
            }
        }
        echo "</TD></TR>";
    }

    echo "<TR><TD align = 'left'>
            <form method='POST' action='index.php?op=reg_paciente'>
            <input type='submit' name='Submit' value='Submit'></form></TD></TR>
            </form></table>";

    if(isset($_POST['Submit']) and $_POST['Submit'] == 'Submit'){
        //Assim temos ja os dados guardados num array
        $patient_data = $_POST;
    }
    else{
        $patient_data = null;
    }

/*
    include_once('functions.php');

    global $connect;
    $connect = mysqli_connect('localhost', 'root', 'root') or die('Não foi possível conectar: ' . mysql_error());

    mysqli_select_db($connect, 'sim') or die('Não foi possível seleccionar a base de dados');
    if($name != null and $user != null and $pass != null and !check_user_in_db($user, $connect)){
    
    //Passar para a bd o array completo
        $sql = "INSERT INTO sim.users(".implode(", ", array_keys($patient_data)).") VALUES(.implode("', '", $patient_data).)";
        mysqli_query($connect, $sql) or die('Nao foi possivel adicionar um utilizador...' . mysqli_error($connect));
    }
*/

?>