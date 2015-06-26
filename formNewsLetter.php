<?php 
if (!isset($_SESSION)) {
    session_start();
}
$_SESSION ['key_new_email'] = md5 (date("Y-m-d H:i:s")). rand(1, 100);

if (!isset($_SESSION['email_maestro'])){
?>
<div >
<form action="saveEmail.php" method="POST" class='form-inline'>
  <div class="form-group">
    <label for="email">Para recibir noticias suscríbete:</label>
    <input type="email" class="form-control" id="email" 
           placeholder="Correo electrónico">
    <input type="hidden" 
           value="<?php print $_SESSION['key_new_email'];?>" 
           name="key">
  </div>  
  <button type="submit" class="btn btn-default">Quiero recibir noticias</button>
</form>
  </div>
<?php 
}
?>