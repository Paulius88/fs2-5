<?php

for ($i = 1; $i <= 9; $i++) {
    echo $i * str_repeat(1, $i);

    if ($i !== 9) {
        echo "<br>";
    }
}

//--------------------------------------------------//

$nr = '1';
$last_nr = '9'; 
$key = (ord($last_nr) - ord($nr)) + 1;
for($index=1; $index <= $key; ++$index)
{
for($j=1;$j<=$index;++$j)
{
echo ($nr."&nbsp;"); 
}
++$nr;
echo ("<br>"); 
}
