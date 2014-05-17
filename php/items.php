<form>
    <input data-type="search" id="filterControlgroup-input">
</form>
<div id="item" data-role="controlgroup" data-filter="true" data-input="#filterControlgroup-input" data-filter-reveal="true">
<?php
$handle = @fopen("../lists/items.lst", "r");
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
        echo "<a href=\"#\" class=\"item ui-btn ui-shadow ui-corner-all\">$buffer</a>";
    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
}
?>
</div>
