<?php
include "login_process.php";

if (isset($_POST['login'])) {
    $_SESSION['username'] = $_POST['username'];
}

if ($_SESSION['login'] == true) {

} else {
    header("Location: http://138.68.150.56/Verkefni6/admin");
}

?>

<div class="content">
    <div class="l-box-lrg pure-g">
        <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">
            <h1>Admin drasl</h1>
        </div>
    </div>
</div>

