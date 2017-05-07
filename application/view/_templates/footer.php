
<div class="footer" style="background-color: #1ab188;">
    <?php if (isset($_SESSION['login']) && !empty($_SESSION['username']) && $_SESSION['login'] == true) {
        echo '<h3> Logged in as: ' . $_SESSION['username'] . '</h3>';
    } ?> </h3>
    <div class="pure-menu pure-menu-horizontal">
        <p> All rights reserved 2015 - <?php echo date("Y");?> © </p>
        <ul class="pure-menu-list">
            <li class="pure-menu-item"><a href="admin" class="pure-menu-link">Administrator</a></li>
            <li class="pure-menu-item"><a href="contact" class="pure-menu-link">Contact us</a></li>
            <li class="pure-menu-item"><a href="aboutus" class="pure-menu-link">About us</a></li>
            <li class="pure-menu-item"><a href="privacy" class="pure-menu-link">Privacy Policy</a></li>
        </ul>
    </div>
</div>

</div>

<!-- jQuery, loaded in the recommended protocol-less way -->
<!-- more http://www.paulirish.com/2010/the-protocol-relative-url/ -->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- define the project's URL (to make AJAX calls possible, even when using this in sub-folders etc) -->
<script>
    var url = "<?php echo URL; ?>";
</script>

<!-- our JavaScript -->
<script src="<?php echo URL; ?>js/application.js"></script>
</body>
</html>
