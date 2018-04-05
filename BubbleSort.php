<?php

//冒泡就是将最低/最高的数分别与每一个数进行比较；
//2018/4/5

//向下冒泡;
	function bubbleSort(array $list)
	{
		$length =count($list);
		for($i=0;$i<$length;$i++)
		{
			for($j=0;$j<$length-1-$i;$j++)
			{
				if($list[$j]<$list[$j+1])
				{
					$temp=$list[$j];
					$list[$j]=$list[$j+1];
					$list[$j+1]=$temp;
				}
			}
			var_dump ($list);
			echo "<br>";
		}
		return $list;
	}
	
//向上冒泡
    function bubbleSort2(array $list)
	{
		$length=count($list);
		for($i=0;$i<$length;$i++)
		{
			for($j=$length-1;$j>$i;$j--)
			{
				if($list[$j]>$list[$j-1])
				{
					$temp=$list[$j];
					$list[$j]=$list[$j-1];
					$list[$j-1]=$temp;
				}
			}
			var_dump($list);
			echo "</br>";
		}
		return $list;
	}
	$list =array(67,69,75,88);
	print_r (bubbleSort2($list));
	echo "</br>***********************************";
	print_r (bubbleSort($list));

?>
