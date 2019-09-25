<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $DAILYHOROSCOPE = new DailyHoroscope(NULL);
    $VALID = new Validator();

    $DAILYHOROSCOPE->sign = $_POST['sign'];
    $DAILYHOROSCOPE->date = $_POST['date'];
    $DAILYHOROSCOPE->description = $_POST['description'];

    $VALID->check($DAILYHOROSCOPE, [
        'sign' => ['required' => TRUE],
        'date' => ['required' => TRUE],
        'description' => ['required' => TRUE]
    ]);


    if ($VALID->passed()) {
        $DAILYHOROSCOPE->create();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your data was saved successfully", 'success');
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

if (isset($_POST['update'])) {
    
    $DAILYHOROSCOPE = new DailyHoroscope($_POST['id']);

    $DAILYHOROSCOPE->sign = $_POST['sign'];
    $DAILYHOROSCOPE->date = $_POST['date'];
    $DAILYHOROSCOPE->description = $_POST['description'];

    $VALID = new Validator();

    $VALID->check($DAILYHOROSCOPE, [
        'sign' => ['required' => TRUE],
        'date' => ['required' => TRUE],
        'description' => ['required' => TRUE]
    ]);


    if ($VALID->passed()) {
        $DAILYHOROSCOPE->update();

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

        $DAILYHOROSCOPE = DailyHoroscope::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}