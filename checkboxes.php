<?php

// This array holds all the possible plate values that appear as checkboxes.
// Adding or removing values will automatically change what kind and how many checkboxes appear.

$plateSizes = array(100, 55, 45, 35, 25, 15, 10, 5, 2.5, 1.25);

print "<h3>Plates:</h3>";

// This for loop steps through the plate array.
// An if-else statement with several OR conditions determines which plates are checked by default.
// My defaults are based on what I've most commonly seen in gyms.

for ($i=0; $i<sizeof($plateSizes); $i++) {
    if ($plateSizes[$i] == 100 || $plateSizes[$i] == 55 || $plateSizes[$i] == 15 || $plateSizes[$i] == 1.25) {
        print <<< HERE
        <div class = "containCheck">
            <input type = "checkbox"
                   class = "checkSize"
                   name = "checks"
                   value = "$plateSizes[$i]" />
            <label class = "checkNum">$plateSizes[$i]</label>
        </div>
HERE;
    } else {
        print <<< HERE
        <div class = "containCheck">
            <input type = "checkbox"
                   class = "checkSize"
                   name = "checks"
                   value = "$plateSizes[$i]"
                   checked = "checked" />
            <label class = "checkNum">$plateSizes[$i]</label>
        </div>
HERE;
    }
}

?>