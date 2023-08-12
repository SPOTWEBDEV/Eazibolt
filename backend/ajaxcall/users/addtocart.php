<?php

include('../../config/connection.php');
include('../../config/users/session.php');
echo 'ggg';
if(isset($_POST['from'])){
         if($_POST['from'] == 'addtocart'){
                  echo 'yes';
         }
}

?>