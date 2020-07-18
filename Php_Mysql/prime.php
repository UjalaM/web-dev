<?php
$n1=$_POST["num1"];
$n2=$_POST["num2"];
if($n2<$n1)
{
    $temp=$n1;
    $n1=$n2;
    $n2=$temp;
}
echo "Prime numbers: ";
for($i=$n1;$i<=$n2;$i++)
{
    $count=0;
    for($x=1;$x<=$i;$x++)
    {
        if(($i%$x)==0)
        {
            $count++;
        }
    }
    if($count==2)
    {
        echo $i," ";
    }
}
?>