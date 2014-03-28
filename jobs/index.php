<?php
$title = "Jobs";
$content = <<<EOF
    
      <div class="jumbotron" style="margin-top: -3px;">
      <div class="container">
        <div class="row">
          <center>
            <i class="fa fa-users" style="font-size: 80px;"></i>
            <h2>Now Hiring</h2>
            <p>To apply, send your resume to <a href="mailto:jobs@puzl.io">jobs@puzl.io</a></p>
          </center>
        </div>
      </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li class="active"><a href="#GraphicDesigner" data-toggle="tab">Graphic Designer</a></li>
              <li><a href="#AndroidDeveloper" data-toggle="tab">Android Developer</a></li>
              <li><a href="#DevTeam" data-toggle="tab">Java Developer</a></li>
            </ul>
            <div id="jobList" class="tab-content">
              <div class="tab-pane fade active in" id="GraphicDesigner">
                Internship designing graphics and interfaces for the corporation and its clients.
              </div>
              <div class="tab-pane fade" id="AndroidDeveloper">
                Brainstorm and develop Android applications for the corporation and its clients.
              </div>
              <div class="tab-pane fade" id="DevTeam">
                <p>Join a team of skilled developers that tackle projects primarily relating to Minecraft.</p>
                <p>Requirements:
                <ul><li>In depth knowledge of the <a href="http://bukkit.org">Bukkit</a> API</li>
                <li>Ability to work on a team</li>
                <li>Self-motivated and able to get projects done without close supervision</li></ul>
                <p>Please include work examples with your resume.</p>
              </div>
            </div>
          </div>
        </div>
    </div>
EOF;
include("/home/trent/puzl/website/template");
