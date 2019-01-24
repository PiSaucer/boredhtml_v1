<?php
foreach (glob("*.html") as $filename) {
    echo "$filename size " . filesize($filename) . "\n";
}
?>