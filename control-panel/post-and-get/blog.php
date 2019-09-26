<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $BLOG = new Blog(NULL);
    $VALID = new Validator();

    $BLOG->title = ($_POST['title']);
    $BLOG->category = ($_POST['category']);
    $BLOG->description = ($_POST['description']);

    $dir_dest = '../../upload/blog/';
    $dir_dest_thumb = '../../upload/blog/thumb/';

    $handle = new Upload($_FILES['image-name']);

    $imgName = null;
    $img = Helper::randamId();

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 840;
        $handle->image_y = 350;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 370;
        $handle->image_y = 300;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
       
    }

    $BLOG->image_name = $imgName;

    $VALID->check($BLOG, [
        'title' => ['required' => TRUE],
        'category' => ['required' => TRUE],
        'description' => ['required' => TRUE],
        'image_name' => ['required' => TRUE]
    ]);


    if ($VALID->passed()) {
        $BLOG->create();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your data was saved successfully", 'success');
        $_SESSION['ERRORS'] = $VALID->errors();

        header("location: ../view-blog-photos.php?id=" . $BLOG->id);
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

if (isset($_POST['update'])) {
    $dir_dest = '../../upload/blog/';
    $dir_dest_thumb = '../../upload/blog/thumb/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 840;
        $handle->image_y = 350;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 370;
        $handle->image_y = 300;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $BLOG = new Blog($_POST['id']);

    $BLOG->image_name = $_POST['oldImageName'];
    $BLOG->title = ($_POST['title']);
    $BLOG->category = ($_POST['category']);
    $BLOG->description = ($_POST['description']);

    $VALID = new Validator();

    $VALID->check($BLOG, [
        'title' => ['required' => TRUE],
        'category' => ['required' => TRUE],
        'description' => ['required' => TRUE],
        'image_name' => ['required' => TRUE]
    ]);


    if ($VALID->passed()) {
        $BLOG->update();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your changes saved successfully", 'success');
        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $BLOG = Blog::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}