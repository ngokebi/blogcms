<?php
session_start();
$_SESSION['username'] = '';
session_destroy();
?>
<script>
    sessionStorage.clear();
    localStorage.clear();
</script>

<?php
header('location: login.html');
?>