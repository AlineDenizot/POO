<?php

class Speedometer
{
    const MILES_VALUE = 1.60934;
    
    public static function convertKmToMiles($km)
    {
        return round($km / self::MILES_VALUE, 2);
    }

    public static function convertMilesToKm($miles)
    {
        return round($miles * self::MILES_VALUE, 2);
    }
}