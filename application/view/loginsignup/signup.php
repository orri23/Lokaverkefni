<?php

?>
<div class="container">
    <div class="box">
        <H1> Skrásíða </H1>
        <form name="signup" method="post">
            <label><b>Kennitala:</b></label>
            <input type="text" placeholder="" max-length="10" name="kt" required><br>
            <label><b>Nafn:</b></label>
            <input type="text" placeholder="" name="fname" required><br>          
            <label><b>Eftirnafn:</b></label>
            <input type="text" placeholder="" name="lname" required><br>

            <label><b>Notendanafn:</b></label>
            <input type="text" placeholder="" name="uname" required><br>

            <label><b>Email:</b></label>
            <input type="text" placeholder="" name="email" required><br>

            <label><b>Lykilorð:</b></label>
            <input type="password" placeholder="" name="psw" required><br>

            <label><b>Heimilisfang:</b></label>
            <input type="text" placeholder="" name="address" required><br>

            <input name="signup" type="submit" value="Skrá mig" class="pure-button pure-button-active">
        </form>
    </div>
</div>

