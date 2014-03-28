<?php
$title = "About";
$content = <<<EOF
    <div class="container" style="padding-top: 25px; padding-bottom: 10px;">
      <ul class="nav nav-tabs" style="margin-bottom: 15px;">
        <li class="active">
        <a href="#FrontOffice" data-toggle="tab">Front Office</a></li>
        <li><a href="#Developers" data-toggle="tab">Developers</a></li>
        <li><a href="#Designers" data-toggle="tab">Designers</a></li>
      </ul>
      <div id="jobList" class="tab-content">
        <div class="tab-pane fade active in" id="FrontOffice">
          <p><b>Trent Hensler</b>
          <br /><i>President</i>
          <br />Trent likes coffee.</p>

          <p><b>Matthew Baxter</b>
          <br /><i>Vice President - Human Resources</i>
          <br />Matt likes cats.</p>

          <p><b>Brandon Hensler</b>
          <br /><i>Vice President - Distribution</i>
          <br />Born in the frigid tundra known as Antarctica, Brandon defeated
          the odds and became the first man to distribute things the <i>right</i> way.</p>

          <p><b>Ryan Anderson</b>
          <br /><i>Vice President - Sales and Marketing</i>
          <br />Ryan took marketing his freshman year at the prestiguous Blaine Senior High School.
          He excels in adding and subtracting prices with decimals. He struggles with long division.</p>

          <p><b>Adam Fendley</b>
          <br /><i>Vice President - Network Engineering</i>
          <br />Adam has taken a plethora of business related IB classes. He likes to puck.</p>

        </div>
        <div class="tab-pane fade" id="Developers">
          <p><b>Steven Smith</b>
          <br /><i>Developer Intern</i>
          <br />Steven hates long walks on the beach.</p>
        </div>
        <div class="tab-pane fade" id="Designers">
          <p><b>Chase Oseos</b>
          <br /><i>Graphic Designer Intern</i>
          <br />Chase likes to lurk.</p>
        </div>
      </div>
    </div>
EOF;
include("/puzl/website/template.php");
