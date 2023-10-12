<?php
declare(strict_types = 1);

namespace Question;

/**
 * 
 */
class Question
{
	public Array $questions;
	public function __construct()
	{
		$this->questions = [
			[
			    ["Distinguish between the following pairs of terms:", "Capital expenditure and Recurrent expenditure.", "Fiscal policy and Monetary policy"],
			    ["Explain four (4) reasons why government of a country imposes taxes"]
			],
		  	[
			    ["What is money?"],
			    ["Explain the following concepts:", "The value of money", "The demand for money"],
			    ["Identify any four (4) determinants of transactions demand for money"]
		  	],
		  	[
			    ["What is Economic integration."],
			    ["Outline any three short-comings of Economic Community of West African States (ECOWAS)"],
			    ["Highlight ant three achievements of the Economic Community of West African States (ECOWAS)."]
		  	],
		  	[
			    ["Distinguish between domestic and external trade."],
			    ["Distinguish between term of trade and balance of trade"],
			    ["Outline four causes of balance of payments deficit in a country."]
		  	],
		  	[
			    ["Differentiate between Labour force and efficiency of labour."],
			    ["Describe five factors which determine the size of the labour force in a country."]
		  	],
		  	[
		    	["Distinguish between:", "Money cost and Opportunity cost", "Normal goods and Inferior goods"],
		    	["Explain how the scale of preference assist the following economic groups in making efficient allocation of their resources:", "Individual", "Firms", "Government"]
		  	]
		];
	}
}