<?php

    // Function to random number
    function randomNumber($lengthOfString) {
        // Range start by zero
        $start = 0;

        // Return result of random number between [0, Length of string name minus 1]
        return rand($start, $lengthOfString - 1);
    }

    // Function to check if number is already exists or not
    function checking($checkNumber, $randomNum) {
        // To count result
        $result = 0;

        // To check each number if already exists
        for($j = 0; $j < count($checkNumber); $j++) {

            // If not already exists then, it'll add one
            if($randomNum !== $checkNumber[$j]) {

                $result++;

            }

        }

        // Return result after check
        return $result;

    }

    function shuffle_name($str) {

        $i = 0; // Count from 0

        $checkNumber = []; // To push numbers after shuffle

        $lengthOfString = strlen($str); // Length of strig name

        $string = ""; // To push new string randomly

        // To add new string
        while($i < $lengthOfString) :
            // Call function to get a new random number
            $randomNum = randomNumber($lengthOfString);
            
            // Call function to check number after shuffle and compare it with the array of random numbers
            $checkNum = checking($checkNumber, $randomNum);
            
            // If the number not already exists that means it's a new random number
            if($checkNum === count($checkNumber)) {

                // Put the number into string variable
                $string .= $str[$randomNum];

                // Push it to the array
                $checkNumber[] = $randomNum;

                // Add 1 to i while loop
                $i++;

            }

        endwhile;

        // Return a new string after shuffle
        return $string;

    }

    $str = "naif";

    echo shuffle_name($str);