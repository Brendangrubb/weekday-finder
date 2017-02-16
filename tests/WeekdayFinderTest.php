<?php

    require_once 'src/WeekdayFinder.php';

    class WeekdayFinderTest extends PHPUnit_Framework_TestCase
    {

        function test_today()
        {

            $new_day = new WeekdayFinder;
            $input = "2/16/2017";

            $result = $new_day->findWeekday($input);

            $this->assertEquals("Thursday", $result);
        }

        function test_otherday()
        {

            $new_day = new WeekdayFinder;
            $input = "3/15/2020";

            $result = $new_day->findWeekday($input);

            $this->assertEquals("Sunday", $result);
        }


    }
 ?>
