<?php

session_start();
if ($_SESSION['login']) {
    //header("Location: http://138.68.150.56/Verkefni6/Login");
} else {
    header("Location: http://138.68.150.56/Verkefni6/Login");
}

?>
<div class="container">
    <div class="box">
        <!-- <input name="fetch" type="submit" value="Ná í gögn!" class="button"> -->
        <table class="pure-table pure-table-bordered">
            <h3> Temperature values </h3>
            <thead style="font-weight: bold;">
            <tr>
                <td>DataID</td>
                <td name="data">readCo</td>
                <td name="data2">readAlc</td>
                <td name="data3">readTemp</td>
                <td name="data4">readHumid</td>
                <td name="data5">readFarenheit</td>
                <td name="readDate">readDate</td>

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
                    <td><?php if (isset($data->readFarenheit)) echo htmlspecialchars($data->readFarenheit, ENT_QUOTES, 'UTF-8'); ?></td>
                   <td><?php if (isset($data->readDate)) echo $data->readDate?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>


    </div>
</div>
