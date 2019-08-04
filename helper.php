<?php
// untuk filtering data agar tag php/js/html gak masuk
function filterData($value){
    return htmlspecialchars(strip_tags($value));
}

// $email = filterData($_POST['email']);
// $password = md5(filterData($_POST['password']));

?>