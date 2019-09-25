<?php

/**
 * Description of DailyHoroscope
 *
 * @author U s E r ¨
 */
class DailyHoroscope {

    public $id;
    public $sign;
    public $date;
    public $description;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT `id`,`sign`,`date`,`description` FROM `daily_horoscope` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->sign = $result['sign'];
            $this->date = $result['date'];
            $this->description = $result['description'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `daily_horoscope` (`sign`,`date`,`description`) VALUES  ('"
                . $this->sign . "','"
                . $this->date . "', '"
                . $this->description . "')";

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

        $query = "SELECT * FROM `daily_horoscope` ORDER BY `id` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getHoroscopeDetailsByDate() {

        $today = date('Y-m-d');
        $last_date = DailyHoroscopeDate::getLastDate();
        $diff = Helper::getDateDifference($last_date, $today);

        if ($diff < 12) {
            $date = $diff + 1;
        } elseif ($diff == 12) {
            $date = 1;
            $LASTDATE = new DailyHoroscopeDate(1);
            $LASTDATE->date = $today;
            $LASTDATE->update();
        }

        $query = "SELECT * FROM `daily_horoscope` WHERE `date` = '" . $date . "' ORDER BY `id` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `daily_horoscope` SET "
                . "`sign` ='" . $this->sign . "', "
                . "`date` ='" . $this->date . "', "
                . "`description` ='" . $this->description . "' "
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

        $query = 'DELETE FROM `daily_horoscope` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

}
