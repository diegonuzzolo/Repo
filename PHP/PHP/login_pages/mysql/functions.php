<?php

	
function queryUpdate(){
    global $result;
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "UPDATE utenti SET username='$username', password='$password' WHERE id =$id";
    $result = $connection->query($query);
    if(!$result){
        die('Query fallita.');
    }

}



function querySelectAllUtenti(){
    global $result;
    global $connection;
    $query = "SELECT * from utenti";
    $result = $connection->query($query);
    if (!$result) {
        echo $connection->error;
        die("Query fallita.");
    }
}

function queryInsert($username, $password, $salt_hex){
        global $connection;
        $query = "INSERT INTO utenti(username, password, salt) VALUES('$username', '$password', '$salt_hex') ";

    if($connection->query($query)===TRUE){
        echo '<br>'."nuovo record creato con successo.";
    }else{
        echo '<br>'."Errore: ".$query."<br>".$connection->error;
    }

     
}

function utentiIdIntoSelectTag()
{
    global $result;
    echo "<select name='id'>";
    while($columnAssoc = $result->fetch_assoc())
    {
        $columId = $columnAssoc["id"];
        echo 
        "    
            <option>
                $columId
            </option>
        ";
    }
    echo "</select>";
}


function queryDelete()
{
    global $result;
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE from utenti WHERE id =$id";
    $result = $connection->query($query);
    if(!$result){
        die('Query fallita.');
    }else{
        echo "Utente eliminato.";
    }
}