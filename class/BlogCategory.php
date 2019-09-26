<?php

/**
 * Description of BlogCategory
 *
 * @author W j K n ¨
 */
class BlogCategory {

    public $id;
    public $name;
    public $imageName;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT `id`,`name`,`image_name`,`queue` FROM `blog_category` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->name = $result['name'];
            $this->imageName = $result['image_name'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `blog_category` (`name`,`image_name`,`queue`) VALUES  ('"
                . $this->name . "','"
                . $this->imageName . "', '"
                . $this->queue . "')";

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

        $query = "SELECT * FROM `blog_category` ORDER BY `queue` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `blog_category` SET "
                . "`name` ='" . $this->name . "', "
                . "`image_name` ='" . $this->imageName . "', "
                . "`queue` ='" . $this->queue . "' "
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

        unlink(Helper::getSitePath() . "upload/blog/category/" . $this->imageName);

        $query = 'DELETE FROM `blog_category` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function arrange($key, $img) {
        $query = "UPDATE `blog_category` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

}
