<?php

/**
 * Description of Blog
 *
 * @author U s E r ¨
 */
class Blog {

    public $id;
    public $createdAt;
    public $category;
    public $imageName;
    public $title;
    public $description;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT `id`,`created_at`,`category`,`image_name`,`title`,`description`,`queue` FROM `blog` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->createdAt = $result['created_at'];
            $this->category = $result['category'];
            $this->imageName = $result['image_name'];
            $this->title = $result['title'];
            $this->description = $result['description'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create() {
        date_default_timezone_set('Asia/Colombo');
        $createdAt = date('Y-m-d H:i:s');
        $query = "INSERT INTO `blog` (`created_at`,`category`,`image_name`,`title`,`description`,`queue`) VALUES  ('"
                . $createdAt . "','"
                . $this->category . "','"
                . $this->image_name . "','"
                . $this->title . "', '"
                . $this->description . "', '"
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

        $query = "SELECT * FROM `blog` ORDER BY `queue` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getBlogPostsByCategory($category) {

        $query = "SELECT * FROM `blog` WHERE `category` = '" . $category . "' ORDER BY `queue` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `blog` SET "
                . "`category` ='" . $this->category . "', "
                . "`image_name` ='" . $this->imageName . "', "
                . "`title` ='" . $this->title . "', "
                . "`description` ='" . $this->description . "', "
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

        $this->deletePhotos();

        unlink(Helper::getSitePath() . "upload/blog/" . $this->imageName);
        unlink(Helper::getSitePath() . "upload/blog/thumb/" . $this->imageName);

        $query = 'DELETE FROM `blog` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function deletePhotos() {

        $BLOG_PHOTO = new BlogPhoto(NULL);

        $allPhotos = $BLOG_PHOTO->getBlogPhotosById($this->id);

        foreach ($allPhotos as $photo) {

            $IMG = $BLOG_PHOTO->image_name = $photo["image_name"];
            unlink(Helper::getSitePath() . "upload/blog/gallery/" . $IMG);
            unlink(Helper::getSitePath() . "upload/blog/gallery/thumb/" . $IMG);

            $BLOG_PHOTO->id = $photo["id"];
            $BLOG_PHOTO->delete();
        }
    }

    public function arrange($key, $img) {
        $query = "UPDATE `blog` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }
    
    public function getOtherBlogPostsWithoutThisID($id) {

        $query = "SELECT * FROM `blog` WHERE `id` != " . $id . " ORDER BY queue ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

}
