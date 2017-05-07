<?php

if ($_SESSION['login'] == true) {

} else {
    header("Location: http://138.68.150.56/Verkefni6/Login");
}

?>

<div class="content">
    <div class="l-box-lrg">
        <H3 class="is-center">House Registration </H3>
        <div class="l-box-lrg pure-u-1-2">
            <form class="pure-form" name="register" method="post">
                <fieldset>
                    <legend>Please insert your information.</legend>
                    <div class="pure-g">
                        <div class="pure-u-1">
                            <label><b>Registered owner</b></label>
                            <input class="input" type="text" placeholder="Full name" name="owner">
                        </div>

                        <div class="pure-u-1">
                            <label><b>Home address</b></label>
                            <input class="input" type="text" placeholder="Home address" name="address">
                        </div>

                        <div class="pure-u-1">
                            <label><b>Register address</b></label>
                            <input class="input" type="text" placeholder="Register address" name="regaddress">
                        </div>

                        <div class="pure-u-1">
                            <label><b>Zip code</b></label>
                            <input class="input" type="text" placeholder="Registered house ZIP" name="regzip">
                        </div>
                    </div>

                </fieldset>


            </form>
        </div>

        <div class="pure-u-1-2">
            <legend>Check in which sensors you would like to use.</legend>
            <label><b>Heat Sensor?</b></label>
            <input class="input" type="checkbox" name="Sensor[]" value="Heat">
            <label><b>Humidity sensor?</b></label>
            <input class="input" type="checkbox" name="Sensor[]" value="Humidity">
            <label><b>Gas sensor?</b></label>
            <input class="input" type="checkbox" name="Sensor[]" value="Gas">

            <input name="register" type="submit" class="pure-button pure-button-primary"
                   value="Register">
        </div>
    </div>
</div>



