<?
session_start();
if(!isset($_SESSION['important']) || time() > $_SESSION['exp']) {
$_SESSION['important'] = rand(100,500);
$_SESSION['exp'] = time() + 30;
$_SESSION['attempts']=0;
}


if(isset($_GET['num'])){


$_SESSION['attempts']++;
$guess=intval($_GET['num']);
if($guess < $_SESSION['important']){
echo "Go higher!";
}elseif( $guess > $_SESSION['important'] ){
echo "Go lower!";
} else {
echo "Well done! The XOR key is 60. Enter it in XOR.php page.";
}


} else {
echo "The 'num' parameter isn't set.";
}
?>