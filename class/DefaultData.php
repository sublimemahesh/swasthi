<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DefaultData
 *
 * @author U s E r ¨
 */
class DefaultData {

    

    public function getSigns() {
        return array(
            "1" => "Aries",
            "2" => "Taurus",
            "3" => "Gemini",
            "4" => "Cancer",
            "5" => "Leo",
            "6" => "Virgo",
            "7" => "Libra",
            "8" => "Scorpio",
            "9" => "Sagittarius",
            "10" => "Capricorn",
            "11" => "Aquarius",
            "12" => "Pisces"
            );
    }

    public function getTotalInstlToCurrentDate($date, $period, $type) {
        $today = date('Y-m-d H:i:s');
    }

}
