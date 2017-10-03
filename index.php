<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

echo "<br><hr>Start of homework: <br>";

$obj = new main($date,$tar,$year);


class main
{
	
	public function __construct($date, $tar, $year)
	{
		$this-> question2($date);
		$this-> question3($date, $tar);
		$this-> question4($date);
		$this-> question5($date);
		$this-> question6($date);
		$this-> question7($date);
		$this-> question8($date);
		$this-> question9($date);
		$this-> question10($year);
	}

	public function question2(&$date)
	{
		$date = str_replace("-", "/", $date);
		echo "Q2. date replaced with \"/\": ".$date;
	}

	public function question3($date, $tar)
	{
		echo "<br><br>"."Q3. output string : ";
		if(strcmp($date, $tar) > 0)
		{
			echo "the future";
		}
		elseif (strcmp($date, $tar) < 0) {
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

	public function question5($date)
	{
		echo "<br><br>Q5. The number of words in \"$date\" is: ".str_word_count($date);
	}

	public function question6($date)
	{
		echo "<br><br>Q6. length of the string is: ".strlen($date);
	}

	public function question7($date)
	{
		echo "<br><br>Q7. ASCII value of the first vharacter is: ".ord($date);
	}

	public function question8($date)
	{
		echo "<br><br>Q8. Last 2 characters in date is: ".substr($date, -2);
	}

	public function question9($date)
	{
		echo "<br><br>Q9. The contents in the generated array is : ";
		foreach (explode("/", $date) as $value) {
			echo "$value ";
		}
	}

	public function question10($years)
	{
		echo "<br><br>Q10. Listing years to check if it is a leap year:";
		foreach ($years as $year) {

			echo "<br> $year  ";
			if( ($year % 4 == 0) and ($year % 100 != 0) or ($year % 400 == 0) )
			{
				echo "True";
			}
			else
			{
				echo "False";
			}
		}
	}

}

?>