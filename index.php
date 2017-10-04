<?php
$date =  date('Y-m-d', time());
$dateString = "The value of \$date: ".$date;
echo $dateString."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

$obj = new main($date,$tar,$year,$dateString);

class main
{
	public function __construct($date, $tar, $year,$dateString)
	{
		echo "<br><hr>Start of homework: <br>";
		$this-> question2($date);
		$this-> question3($date, $tar);
		$this-> question4($date);
		$this-> question5($dateString);
		$this-> question6($dateString);
		$this-> question7($dateString);
		$this-> question8($date);
		$this-> question9($date);
		$this-> question10($year);
	}

	public function question2(&$date)
	{
		$date = str_replace("-", "/", $date);
		echo "Q2. date replaced with \"/\" : ".$date;
	}

	public function question3($date, $tar)
	{
		echo "<br><br>"."Q3. output string : ";
		if(strcmp($date, $tar) > 0)
		{
			echo "the future";
		}
		elseif (strcmp($date, $tar) < 0)
		{
			echo "the past";
		}
		else
		{
			echo "oops";
		}
	}

	public function question4($date)
	{
		echo "<br><br>Q4. the positions of \"/\" are :";
		for ($increment = 0; $increment < strlen($date); $increment++)
		{
			if($date[$increment] == '/')
			{
				echo ($increment+1)." ";
			}
		}
	}

	public function question5($dateString)
	{
		echo "<br><br>Q5. The number of words in \"$dateString\" is: ".str_word_count($dateString);
	}

	public function question6($dateString)
	{
		echo "<br><br>Q6. length of the string is: ".strlen($dateString);
	}

	public function question7($dateString)
	{
		echo "<br><br>Q7. ASCII value of the first character is: ".ord($dateString);
	}

	public function question8($date)
	{
		echo "<br><br>Q8. Last 2 characters in date is: ".substr($date, -2);
	}

	public function question9($date)
	{
		echo "<br><br>Q9. The contents in the generated array is : ";
		foreach (explode("/", $date) as $value)
		{
			echo "$value ";
		}
	}

	public function question10($years)
	{
		echo "<br><br>Q10. Listing years to check if it is a leap year (Using switch and foreach):";
		foreach ($years as $year)
		{
			echo "$year -> ";
			switch ($year%4)
			{
				case 0:
					switch ($year % 100)
					{
						case 0:
							switch ($year % 400)
							{
								case 0: echo "True ";
								break;
								default: echo "False ";
							}
							break;
						default: echo "True ";
					}
					break;
				default: echo "False ";
			}
		}
		echo "<br><br>Q10. Listing years to check if it is a leap year (Using for loop and if):";
		foreach ($years as $year) {

			echo "$year -> ";
			if( ($year % 4 == 0) && ($year % 100 != 0) || ($year % 400 == 0) )
			{
				echo "True ";
			}
			else
			{
				echo "False ";
			}
		}
	}

}

?>