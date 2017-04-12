<?php
/**
 * Created by PhpStorm.
 * User: Eysteinn
 * Date: 12.4.2017
 * Time: 11:40
 */
?>

<div class="container">
    <div class="box">
        <?php foreach ($results as $user) { ?>
        <H3>Register a house
            for: <?php if (isset($user->Fname)) echo "<b>" . htmlspecialchars($user->Fname, ENT_QUOTES, 'UTF-8') . "</b>"; ?></H3>
        <form class="box" class="pure-form" method="post">
            <fieldset>
                <legend>Please insert your information</legend>
                <div class="pure-g">
                    <div class="pure-u-1">
                        <label><b>Registered owner</b></label>
                        <input class="input" type="text" placeholder="Full name" name="owner" required>
                    </div>

                    <div class="pure-u-1">
                        <label><b>Home address</b></label>
                        <input class="input" type="text" placeholder="Home address" name="address" required>
                    </div>

                    <div class="pure-u-1">
                        <label><b>Register address</b></label>
                        <input class="input" type="text" placeholder="Register address" name="reghouse" required>
                    </div>

                    <div class="pure-u-1">
                        <label><b>Zip code</b></label>
                        <input class="input" type="text" placeholder="Registered house ZIP" name=regzip" required>
                    </div>

                    <div class="pure-u-1">
                        <h3>Check in which sensors you would like to use</h3>
                        <label><b>Heat Sensor?</b></label>
                        <input class="input" type="checkbox" name="check[]">
                        <label><b>Humidity sensor?</b></label>
                        <input class="input" type="checkbox" name="check[]">
                        <label><b>Gas sensor?</b></label>
                        <input class="input" type="checkbox" name="check[]">

                        <button type="submit" class="pure-button pure-button-primary">Register</button>
                    </div>
                </div>
    </div>
    </fieldset>
    </form>
    <?php } ?>
</div>
</div>
