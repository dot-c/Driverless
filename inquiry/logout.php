<?php
session_start();
unset($_SESSION['user']);
session_destroy();
?>
<script>
window.location.href='../index.php';
</script>