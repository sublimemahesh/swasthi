<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sign
 *
 * @author hp
 */
class Sign {

    public $id;
    public $engName;
    public $sinName;
    public $imageName;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT `id`,`eng_name`,`sin_name`,`image_name` FROM `sign` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->engName = $result['eng_name'];
            $this->sinName = $result['sin_name'];
            $this->imageName = $result['image_name'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `sign` (`eng_name`,`sin_name`,`image_name`) VALUES  ('"
                . $this->engName . "','"
                . $this->sinName . "', '"
                . $this->imageName . "')";

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

        $query = "SELECT * FROM `sign` ORDER BY `id` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }


    public function update() {

        $query = "UPDATE  `sign` SET "
                . "`eng_name` ='" . $this->engName . "', "
                . "`sin_name` ='" . $this->sinName . "', "
                . "`image_name` ='" . $this->imageName . "' "
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

        $query = 'DELETE FROM `sign` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

}
