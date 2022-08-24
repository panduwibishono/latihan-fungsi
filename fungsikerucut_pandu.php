<?php
$r=28;
$t=40;
$phi=22/7;
function volumekerucut($r, $phi, $t){
    return (1/3*$phi*$r*$r*$t);
}
echo "volume kerucut tersebut adalah=" .volumekerucut($r, $phi, $t)."cm";
?>