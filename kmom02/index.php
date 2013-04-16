<?php
echo "<h1>I'm Cloudchaser - index.php</h1>";
echo "<p>You are most welcome!</p>";
echo "<p>REQUEST_URI - " . htmlentities($_SERVER['REQUEST_URI']) . "</p>";
echo "<p>SCRIPT_NAME - " . htmlentities($_SERVER['SCRIPT_NAME']) . "</p>";