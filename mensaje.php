<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<h1>
<?php print $_SESSION['mensaje']; ?>
</h1>