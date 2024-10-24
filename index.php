<?php
$a = 'Рыба';
$b = 'человек';

echo <<<EOT
$a рыбою сыта, а $b человеком.
EOT. PHP_EOL;
echo "Cтрока " . __LINE__ . " в файле " . __FILE__;

