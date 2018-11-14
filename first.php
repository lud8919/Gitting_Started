<?php



https://gist.github.com/morisasy/458be325d8e310f6abc7c5caf37c9681



function firstNotRepeatingCharacter($s) {

}


$s = "abacabad";

$s = array_count_values(str_split($s));
foreach ($s as $key => $value) {
    if ($s[$key] === 1) {
        return echo $key;
    }
}












 ?>