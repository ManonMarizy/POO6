<?php


class Speedometer
{
    const MILES = 0.6214;

    public static function convertKmToMiles(int $km)
    {
        return round($km * self::MILES, 2);
    }
}