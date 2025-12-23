<?
if(empty($_GET['flag'])){
echo "# Apache Server Configuration<br>";
echo "RewriteEngine On<br>";
echo "RewriteBase /<br>";
echo "# ERROR: Unauthorized access attempt detected at " . date('Y-m-d H:i:s') . "<br>";
echo "# Hint: Look closer at the 'RewriteRule' variables...<br><br>";

echo "RewriteRule ^(.*)$ index.php?flag=Auroral [L,QSA]\n";
}else{
if($_GET['flag']==="Auroral"){
echo "Bravo! Next level: /B7R5he7kqP";
}else{
echo "flag isn't correct";
}
}
?>