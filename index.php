<?php
$title = "Home";
$content = <<<EOF
    <div class="jumbotron" style="margin-top: -3px;">
      <div class="container">
        <div class="row">
          <center>
            <i class="fa fa-users" style="font-size: 80px;"></i>
            <h2>Now Hiring</h2>
            <p>Yes it's true, we're hiring!
            <p><a style="inline-block;" class="btn btn-primary" href="/jobs" role="button">Learn More &raquo;</a></p>
          </center>
       </div>
      </div>
    </div>
EOF;
include('/puzl/website/template.php');
