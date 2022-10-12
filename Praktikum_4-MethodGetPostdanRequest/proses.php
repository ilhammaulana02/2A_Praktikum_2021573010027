<?php
// var_dump($_GET)
// print_r($_GET)
echo $_REQUEST['nama']."<br>";
echo $_GET['no_hp']."<br>";
if(isset($_GET['hobi1'])){
    echo "Olah Raga";
}
if(isset($_GET['hobi2'])){
    echo "Ngoding";
}
if(isset($_GET['hobi3'])){
    echo "Gosip";
}
?>