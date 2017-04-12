<?php

session_start();
if (session_id($a) == true) {
    //header("Location: http://138.68.150.56/Verkefni6/Login");
}
else {
    header("Location: http://138.68.150.56/Verkefni6/Login");
}

?>
<div class="container">
    <div class="box">
        <form name="fetching" method="post">
            <input name="fetch" type="submit" value="Ná í gögn!" class="button">
        </form>
        <table>
            <thead style="background-color: #13232f; font-weight: bold;">
            <tr>
                <td>DataID</td>
                <td>readCo</td>
                <td>readAlc</td>
                <td>readTemp</td>
                <td>readHumid</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($datas as $data) { ?>
                <tr>
                    <td><?php if (isset($data->dataID)) echo htmlspecialchars($data->dataID, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($data->readCO)) echo htmlspecialchars($data->readCO, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($data->readAlc)) echo htmlspecialchars($data->readAlc, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($data->readTemp)) echo htmlspecialchars($data->readTemp, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($data->readHumid)) echo htmlspecialchars($data->readHumid, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

</div>
