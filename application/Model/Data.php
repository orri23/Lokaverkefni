<?php

//Eysteinn Orri Sigurðsson
//Klasi sem sér um alla gagnavinnslu sem tengist Arduino.

namespace Mini\Model;

use Mini\Core\Model;

class Data extends Model
{

    //Sótt öll gildi af database
    public function getAllData()
    {
        $sql = "SELECT dataID, readCO, readAlc, readTemp, readHumid, readFarenheit, readDate FROM arduino";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function insertAllData()
    {
        if(isset($_GET['data'])) {

            $data = $_GET['data'];
            $data2 = $_GET['data2'];
            $data3 = $_GET['data3'];
            $data4 = $_GET['data4'];
            $data5 = $_GET['data5'];

            if (!empty($data) && !empty($data2) && !empty($data3) && !empty($data4) && !empty($data5)) {
                $sql = "INSERT INTO arduino(readCO, readAlc, readTemp, readHumid, readFarenheit, readDate) VALUES ('$data', '$data2', '$data3', '$data4', '$data5', CURRENT_TIMESTAMP )";
                $query = $this->db->prepare($sql);
                try {
                    $query->execute();
                } catch (Exception $e) {
                    echo $e;
                }
            }
        }

    }
}
