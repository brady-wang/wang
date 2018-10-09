<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2018/10/9
 * Time: 22:39
 */

/**
 * @author brady
 * @desc   冒泡排序
 * @param $arr 待排序的数组
 * @param string $sort 排序方式 asc 升序  desc降序
 * @time  2018/10/9
 * 一共要外层循环n-1次 内层循环每次外层循环一次 最后一个会不需要排序 n-i-1次
 */
function bubble_sort($arr,$sort='asc')
{
	$count = count($arr);

	for($i = 0; $i < $count-1; $i++){
		for($j = 0; $j< $count - 1 - $i; $j++){
			$tmp = '';
			if($sort == 'asc'){
				if($arr[$j] > $arr[$j+1]){
					$tmp = $arr[$j];
					$arr[$j] = $arr[$j+1];
					$arr[$j+1] = $tmp;

				}
			} else {
				if($arr[$j] < $arr[$j+1]){
					$tmp = $arr[$j];
					$arr[$j] = $arr[$j+1];
					$arr[$j+1] = $tmp;

				}
			}

			echo "第".($i+1)."轮循环 后数组排序为:".json_encode($arr)."<br>";
		}
		echo "<hr>";
	}

	return $arr;

}
/**
 * @author brady
 * @desc   冒泡排序
 * @param $arr 待排序的数组
 * @param string $sort 排序方式 asc 升序  desc降序
 * @time  2018/10/9
 * 从最后一个进行冒泡 把最大的冒泡到最左边  第一次 冒泡后 第二次 最左边的一个已经合格 内层循环少一次 所以为 只循环 $j>$i
 */
function bubble_sort2($arr,$sort='asc')
{
	$count = count($arr);

	for($i = 0; $i < $count-1; $i++){
		for($j = $count - 1; $j> $i ; $j--){

			$tmp = '';
			if($sort == 'desc'){
				if($arr[$j] > $arr[$j-1]){
					$tmp = $arr[$j];
					$arr[$j] = $arr[$j-1];
					$arr[$j-1] = $tmp;

				}
			} else {
				if($arr[$j] < $arr[$j-1]){
					$tmp = $arr[$j];
					$arr[$j] = $arr[$j-1];
					$arr[$j-1] = $tmp;

				}
			}

			echo "第".($i+1)."轮循环 后数组排序为:".json_encode($arr)."<br>";
		}
		echo "<hr>";
	}

	return $arr;

}


$arr = [9,6,3,7,5,4];
$res = bubble_sort2($arr,'asc');
echo "<pre>";
print_r($res);
echo "</pre>";


$b=[1,2,3,7,5,4];
$len=count($b);//6
for($k=1;$k<$len;$k++)
{
	for($j=0;$j<$len-$k;$j++){
		if($b[$j]>$b[$j+1]){
			$temp =$b[$j+1];
			$b[$j+1] =$b[$j] ;
			$b[$j] = $temp;
		}

		echo "第".($k)."轮循环 后数组排序为:".json_encode($b)."<br>";
	}
	echo "<hr>";

}

print_r($b);