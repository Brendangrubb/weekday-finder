<?php
    class WeekdayFinder
    {

        function findWeekday($input)
        {
            $explode_input_array = explode('/', $input);
            return date('l', mktime(0, 0, 0, $explode_input_array[0], $explode_input_array[1], $explode_input_array[2]));

        }
    }



 ?>
