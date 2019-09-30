<?php

class Helper {

    public function randamId() {

        $today = time();
        $startDate = date('YmdHi', strtotime('1912-03-14 09:06:00'));
        $range = $today - $startDate;
        $rand = rand(0, $range);
        $randam = $rand . "_" . ($startDate + $rand) . '_' . $today . "_n";
        return $randam;
    }

    public function calImgResize($newHeight, $width, $height) {

        $percent = $newHeight / $height;
        $result1 = $percent * 100;

        $result2 = $width * $result1 / 100;

        return array($result2, $newHeight);
    }

    public function getSitePath() {
//        return substr_replace(dirname(__FILE__), '', 26);
        $path = str_replace('class', '', dirname(__FILE__));
        return $path;
    }
    
    public function getDateDifference($date1, $date2) {
        $diff = abs(strtotime($date2) - strtotime($date1))/86400;
        return $diff;
    }
    
    public function getDateBySinhala($date) {
        $year = date('Y', strtotime($date));
        $month = date('M', strtotime($date));
        $day = date('d', strtotime($date));
        $dayinword = date('D', strtotime($date));
        
        $DAYS = DefaultData::getDay();
        foreach ($DAYS as $key=>$d) {
            if($key == $dayinword) {
                $dayinsin = $d;
            }
        }
        $MONTHS = DefaultData::getMonth();
        foreach ($MONTHS as $key=>$m) {
            if($key == $month) {
                $monthinsin = $m;
            }
        }
        return $year . ' ' . $monthinsin . ' මස ' . $day . ' වන ' . $dayinsin;
    }

}
