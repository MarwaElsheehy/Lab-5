<?php
session_start();
echo '<pre>';
var_dump ($_SESSION);
echo '</pre>';
if (isset($_SESSION['page_count'])){
    $_SESSION['page_count']+=1;
}else {
    $_SESSION['page_count'] = 1;
}
echo $msg = "viewed page is <span style='color:red'>" . $_SESSION['page_count'] . "</span> in this session";
echo "</br>";
if ($_SESSION['page_count'] > 10){
    echo "thank you for your support";
}
// print_r($_SESSION);
?>