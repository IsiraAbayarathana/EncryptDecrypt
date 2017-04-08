
<?php

$keygen = $_POST['key'];


function encrypt_decrypt($action, $string) {
    $output = false;


    $encrypt_method = "AES-256-CBC";
    $secret_key = $GLOBALS['keygen'];
    $secret_iv = 'This is my secret iv';

    // hash
    $key = hash('sha256', $secret_key);

    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    if( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    }
    else if( $action == 'decrypt' ){
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }

    return $output;
}


//echo "Plain Text = $plain_txt\n";
if( array_key_exists( 'enc', $_POST ) )
{
$plain_txt = $_POST['text'];
  $encrypted_txt = encrypt_decrypt('encrypt', $plain_txt);
  ?>
  <script type="text/javascript">
  var text = "<?php echo $plain_txt ?>";
  var result = "<?php echo $encrypted_txt ?>";
  alert("plaintext is " + text + "\n" + "encrypted value is " + result );
  window.location = "http://localhost/encrypt/index.php";
  </script>
<?php
}
if( array_key_exists( 'dec', $_POST ) )
{
$encrypt_txt=$_POST['dectext'];
  $decrypted_txt = encrypt_decrypt('decrypt', $encrypt_txt);
?>
<script type="text/javascript">
var text = "<?php echo $encrypted_txt ?>";
var result = "<?php echo $decrypted_txt ?>";
alert("encrypted text is " + text + "\n" + "decrypted  value is : " + result );
window.location = "http://localhost/encrypt/index.php";
</script>
<?php
}

//echo "Encrypted Text = $encrypted_txt\n";


//echo "Decrypted Text = $decrypted_txt\n";

//if( $plain_txt === $decrypted_txt ) alert("SUCCESS");
//else echo "FAILED";

//echo "\n";
//header('Location: index.php');
 ?>
