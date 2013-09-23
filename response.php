<?php $lines = json_decode(file_get_contents("lines.json"), true); echo $lines[array_rand($lines)]; ?>
