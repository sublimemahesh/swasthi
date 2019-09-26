<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Blog_photo
 *
 * @author W j K n ``
 */
class BlogPhoto {

    public $id;
    public $blog;
    public $image_name;
    public $caption;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT `id`,`blog`,`image_name`,`caption`,`queue` FROM `blog_photo` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->blog = $result['blog'];
            $this->image_name = $result['image_name'];
            $this->caption = $result['caption'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `blog_photo` (`blog`,`image_name`,`caption`,`queue`) VALUES  ('"
                . $this->blog . "','"
                . $this->image_name . "', '"
                . $this->caption . "', '"
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

        $query = "SELECT * FROM `blog_photo` ORDER BY queue ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `blog_photo` SET "
                . "`blog` ='" . $this->blog . "', "
                . "`image_name` ='" . $this->image_name . "', "
                . "`caption` ='" . $this->caption . "', "
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
        unlink(Helper::getSitePath() . "upload/blog/gallery/" . $this->imageName);
        unlink(Helper::getSitePath() . "upload/blog/gallery/thumb/" . $this->imageName);

        $query = 'DELETE FROM `blog_photo` WHERE `id` ="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function getBlogPhotosById($blog) {

        $query = "SELECT * FROM `blog_photo` WHERE `blog`= $blog ORDER BY queue ASC";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }
        return $array_res;
    }

    public function arrange($key, $img) {
        $query = "UPDATE `blog_photo` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

}
