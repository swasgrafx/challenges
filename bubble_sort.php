<?php 

$content = <<<EOT
<h1>2, 1, 4, 9, 0, 3, 5, 8, 7, 6</h1>
EOT;

function bubbleSort(&$arr)
{
	$n = sizeof($arr);

	for($i = 0; $i < $n; $i++)
	{
		$swapped = False;

		for ($j = 0; $j < $n - $i - 1; $j++)
		{
			
			if ($arr[$j] > $arr[$j+1])
			{
				$t = $arr[$j];
				$arr[$j] = $arr[$j+1];
				$arr[$j+1] = $t;
				$swapped = True;
			}
		}

		if ($swapped == False)
			break;
	}
}
		
include './core/layout.php';

$arr = array(2, 1, 4, 9, 0, 3, 5, 8, 7, 6); 
$len = sizeof($arr);
bubbleSort($arr);

echo "Sorted array : \n";

for($i = 0; $i < $len; $i++)
	echo $arr[$i]." ";
	
?>