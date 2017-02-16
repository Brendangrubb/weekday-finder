<?php
    class WeekdayFinder
    {

        function findWeekday($input)
        {
            if (strpos($input, '/')) {
                $explode_input_array = explode('/', $input);
                return date('l', mktime(0, 0, 0, $explode_input_array[0], $explode_input_array[1], $explode_input_array[2]));
            } else if (strpos($input, '-')) {
                $explode_input_array = explode('-', $input);
                return date('l', mktime(0, 0, 0, $explode_input_array[0], $explode_input_array[1], $explode_input_array[2]));
            } else {
                echo "Please enter a valid date";
            }

        }
    }



 ?>
