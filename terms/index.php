<?php
$title = "Terms";
$content = "<div class=\"container\"><pre>";
$content .= file_get_contents("../TERMS.txt");
$content .= "</pre></div>";
include("../template.php");
