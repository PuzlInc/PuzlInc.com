<?php
$hash = md5( strtolower( trim( $_GET['q'] ) ) );
header("Location", "http://www.gravatar.com/avatar/".$hash);
