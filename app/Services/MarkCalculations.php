<?php
declare(strict_types = 1);

namespace App\Services;
use App\Services\Calculations;

/**
 * 
 */
class MarkCalculations
{
	public static function gdp(string $gdp):int|float
	{
		$cleanedArray = Calculations::cleanCalculationString($gdp);

        $line_one = preg_replace('/[^a-z0-9]/', '', strip_tags(trim($cleanedArray[1])));
        $things_to_find1 = ["442", "-5", "$", "million"];
        $line_one_mark = Calculations::markStep($line_one, $things_to_find1, 1);

        $line_two = preg_replace('/[^a-z0-9]/', '', strip_tags(trim($cleanedArray[2])));
        $things_to_find2 = ["442", "-5", "million"];
        $line_two_mark = Calculations::markStep($line_two, $things_to_find2, 0.5);

        $line_three = preg_replace('/[^a-z0-9]/', '', strip_tags(trim($cleanedArray[3])));
        $things_to_find3 = ["437","million"];
        $line_three_mark = Calculations::markStep($line_three, $things_to_find3, 1);

        return ( $line_one_mark + $line_two_mark + $line_three_mark );
	}

	public static function gnp(string $gnp):int|float
	{
		$cleanedArray = Calculations::cleanCalculationString($gnp);

        $line_one = preg_replace('/[^a-z0-9]/', '', strip_tags(trim($cleanedArray[1])));
        $things_to_find1 = ["437", "+50", "-750", "million"];
        $line_one_mark = Calculations::markStep($line_one, $things_to_find1, 1);

        $line_two = preg_replace('/[^a-z0-9]/', '', strip_tags(trim($cleanedArray[2])));
        $things_to_find2 = ["412", "million"];
        $line_two_mark = Calculations::markStep($line_two, $things_to_find2, 1);

        return ( $line_one_mark + $line_two_mark );
	}

	public static function nnp(string $nnp):int|float
	{
		$cleanedArray = Calculations::cleanCalculationString($nnp);

        $line_one = preg_replace('/[^a-z0-9]/', '', strip_tags(trim($cleanedArray[1])));
        $things_to_find1 = ["412", "-3"];
        $line_one_mark = Calculations::markStep($line_one, $things_to_find1, 1);

        $line_two = preg_replace('/[^a-z0-9]/', '', strip_tags(trim($cleanedArray[2])));
        $things_to_find2 = ["409", "million"];
        $line_two_mark = Calculations::markStep($line_two, $things_to_find2, 1);

        return ( $line_one_mark + $line_two_mark );
	}
}