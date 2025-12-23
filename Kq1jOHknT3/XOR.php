<?php
$key = 60;
$final_flag = "XOR_is_The_B3st";

$encrypted = "";
for($i=0; $i<strlen($final_flag); $i++) {
    $encrypted .= chr(ord($final_flag[$i]) ^ $key);
}


$payload = base64_encode($encrypted);

if($_GET['final'] === "XOR_is_The_B3st"){
header("Location: end.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>TERMINAL - FINAL STAGE</title>
    <style>
        body { background-color: #0c0c0c; color: #00ff41; font-family: 'Courier New', Courier, monospace; display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0; }
        .terminal { width: 80%; max-width: 800px; border: 1px solid #00ff41; padding: 20px; box-shadow: 0 0 20px rgba(0, 255, 65, 0.2); }
        .cursor { display: inline-block; width: 10px; height: 20px; background: #00ff41; animation: blink 1s infinite; }
        @keyframes blink { 0%, 50% { opacity: 1; } 51%, 100% { opacity: 0; } }
        pre { word-wrap: break-word; white-space: pre-wrap; background: #1a1a1a; padding: 15px; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="terminal">
        <p>> STATUS: Decrypted location found.</p>
        <p>> PAYLOAD ENCRYPTED WITH XOR ALGORITHM.</p>
        <p>> DECODE THE FOLLOWING STRING TO GET THE FLAG:</p>
        <pre>output:<?php echo $payload; ?></pre>
       <p>> Send the final flag obtained in the <b style='color:white'>'final'</b> <b>parameter</b> with the GET method to be examined</p>
        <p>> SYSTEM: Capture the flag...<span class="cursor"></span></p>
        <p>> <b style='color: yellow'>Hint: The XOR key was given to you in the check.php page</b></p>
<!-- Hint: (1-base64decode output0) (2- last output XOR key) (3-last2 output enter to 'final' parameter)-->
    </div>
</body>
</html>