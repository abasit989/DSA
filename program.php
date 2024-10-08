<?php

require("app/app.php");

$title = 'Programs';

$program_data = Data::get_programs();
$program = array_reverse($program_data);

user_view('program', $program);
?>