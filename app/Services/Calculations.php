<?php
declare(strict_types = 1);

namespace App\Services;
/**
 * 
 */
class Calculations
{
	public static function markStep(string $searchString, array $acceptable, int|float $wordMark):int|float
	{
		  $line_mark = 0;
		  foreach($acceptable as $word)
		  {
		    if (str_contains($searchString, $word))
		    {
		        $line_mark += $wordMark;  
		    }
		  }
		  return $line_mark;
	}

	public static function cleanCalculationString(string $calculationString):array
	{
		$arrayed = explode(';', $calculationString);
		$cleanedString = "";
		foreach($arrayed as $line)
		{
		  $cleanedString .= preg_replace('/[^a-zA-Z0-9 +()-]/', '', strip_tags(trim($line))) . ";";
		}
		// echo $cleanedString;
		$cleanedArray = explode(';', $cleanedString);
		return $cleanedArray;
	}
}