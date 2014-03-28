<?php
$title = "Sales";
$content = <<<EOF
    <div class="jumbotron" style="margin-top: -3px;">
  <div class="container">
      <div class="row">
        <center>
          <i class="fa fa-users" style="font-size: 80px;"></i>
          <h2>Utilize Our Team</h2>
          <p>We are here to work for you</p>
        </center>
      </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <ul class="nav nav-tabs" style="margin-bottom: 15px;">
        <li class="active">
        <a href="#Plugins" data-toggle="tab">Bukkit Plugins</a></li>
        <li><a href="#AndroidApps" data-toggle="tab">Android Apps</a></li>
        <li><a href="#Graphics" data-toggle="tab">Graphics</a></li>
      </ul>

      <div id="salesList" class="tab-content">
        <div class="tab-pane fade active in" id="Plugins">
          <p>You come up with the ideas, we bring it to life.</p>
          <p>
            <b>What we excel at</b>
            <ul>
              <li>Making your ideas come to life with an easy to manage plugin.</li>
              <li>The latest features like holograms.</li>
              <li>Scalable gameplay.</li>
              <li>Completing projects quickly with attention to detail.</li>
            </ul>
          </p>

          <!--Image later<p align="right"><img src="../img/holos.png" alt="holos"></p>-->

          <p>
            <b>What we will not do</b>
            <ul>
              <li>Survival Games and KitPvP type minigames.</li>
              <li>Anything that can be found functional on BukkitDev.</li>
              <li>Rewrites that violate licenses.</li>
              <li>Edit already existing custom plugins that no longer work.</li>
            </ul>
          </p>

          <p>If any of this interests you then do not hesitate to contact us!</p>
          <p>
          <b>Free Quotes</b>
          <br />Quotes might seem tedious and annoying but it is an important part of how we do work.
          It gives us an idea of what you want, how serious you are about your project, and if we have the workforce to tackle it.</p>
          <p>Email us with as much information as possible. If we want to take on your project then we will let you know! If not, we will
          email you back letting you know why. We always do our best to make things work but remember that we cannot do everything!</p>
          <p>Pricing varies for each project depending on details, features and timeline. Changings specs after the work on the project has started will be subject to fees.</p>
          <p>If you are willing to allow us to put the project on BukkitDev, we will take 20% off of the original quoted price.
          If not, we will donate that 20% to Bukkit.</p>

          <p>
            <b>The Process</b>
            <br />
            When you order a plugin, it will trigger the start of our process.
            The process is designed to streamline everything and make things as simple and easy as possible.
            <ul>
              <li>Client emails us a spec sheet.</li>
              <li>
                <ul>
                  <li>Aforementioned sheets are stored in our secure, waterproof vault. Waterproof vault is filled with water, and does not leak. Documents are printed on water-soluble paper.</li>
                </ul>
              </li>
              <li>We read it and assess if we currently have the workforce to take it on. If we do, we contact the client.</li>
              <li>Our team will get in a group chat or call with the client to work out all the fine details. Knowing everything up front is essential.</li>
              <li>Our team works on the project and we will give you brief updates and ask questions. In depth updates just take away development time.</li>
              <li>Once we are ready to deliver the project we will throw it on our test server for the client to test.
              This gives the client proof we have completed the project. We will make any last minute, small tweaks and bug fixes that arise.</li>
              <li>Client pays the entire cost of the project <b>before</b> receiving the final product.</li>
              <li>Future updates can be negotiated. Changes to original specs are subject to additional fees. No one likes writing something awesome then being told to scrap it.</li>
            </ul>
          </p>

          <p>
            <b>Fast Track</b>
            <br />
            Need a <i>small</i> plugin fast? We can do quick delivery too!
            <ul>
              <li>Email us a description of what you want.</li>
              <li>We respond with a quote and estimated delivery time.</li>
              <li>If agreed upon, we will write the plugin and then send it to you upon payment.</li>
            </ul>
            Great if you need a simple plugin in just a few hours! Generally these are plugins that are ≤$50
          </p>

        </div>
        <div class="tab-pane fade" id="Graphics">
          Currently not doing graphics work.
        </div>
        <div class="tab-pane fade" id="AndroidApps">
          Currently not doing app work.
        </div>
      </div>
    </div>
  </div>
</div>
EOF;
include("/puzl/website/template.php");
