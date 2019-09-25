<?php

/**
 * Description of DailyHoroscopeDate
 *
 * @author U s E r ¨
 */
class DailyHoroscopeDate {

    public $id;
    public $date;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT `id`,`date` FROM `daily_horoscope_date` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->date = $result['date'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `daily_horoscope_date` (`date`) VALUES  ('"
                . $this->date . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            $last_id = mysql_insert_id();

            return $this->__construct($last_id);
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `daily_horoscope_date` ORDER BY `id` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getLastDate() {

        $query = "SELECT `date` FROM `daily_horoscope_date` ORDER BY `id` ASC LIMIT 1";
        $db = new Database();

        $result = mysql_fetch_array($db->readQuery($query));

        return $result['date'];
    }

    public function update() {

        $query = "UPDATE  `daily_horoscope_date` SET "
                . "`date` ='" . $this->date . "' "
                . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete() {

        $query = 'DELETE FROM `daily_horoscope_date` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

}
