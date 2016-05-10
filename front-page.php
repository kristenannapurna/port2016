<?php

/*
  Template Name: Home Page
*/

get_header();  ?>

<span class="yyz">YYZ</span>
<section class="main">
  <?php get_template_part('svg') ?>
    <ul class="info-nav">
      <li>yyz</li>
      <li><span class="rotate">Scorpio, INTJ, Ravenclaw</span></li>
      <li>Web Dev</li>
    </ul>
  <div class="container">
      <h2 class="bioHeading">I'm</h2> <h1 class="likeLink">Kristen Spencer</h1><h2 class="bioHeading"> - a web developer in <span class="likeLink">Toronto</span>. I spend my days teaching the web at <a href="http://www.hackeryou.com" target="_blank">HackerYou</a> and I think that problem solving with code is pretty much the coolest thing.</h2>
        <div class="rays">  
          <svg width="329px" height="79px" viewBox="213 72 329 79" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g id="Group-2-Copy" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(217.000000, 76.000000)" stroke-linecap="round">
                  <path d="M163.26,12.909375 L163.26,69.6664902" id="Line" stroke="#38FCEC" stroke-width="7.92000017"></path>
                  <path d="M104.796189,0.588310817 L83.5345997,53.2125916" id="Line-Copy-2" stroke="#38FCEC" stroke-width="7.92000017"></path>
                  <path d="M221.723811,0.588310817 L242.985401,53.2125916" id="Line-Copy-3" stroke="#38FCEC" stroke-width="7.92000017"></path>
                  <path d="M288.650918,3.37356073 L320.389094,50.4273417" id="Line-Copy-4" stroke="#38FCEC" stroke-width="7.92000017"></path>
                  <path d="M32.4690821,3.37356073 L0.730906095,50.4273417" id="Line-Copy-5" stroke="#38FCEC" stroke-width="7.92000017"></path>
              </g>
          </svg>
        </div>
      </div>
      <div class="waves">    
        <svg  viewBox="105 1038 1225 103" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="waves" stroke="none" stroke-width="2" fill="none" fill-rule="evenodd" transform="translate(108.000000, 1041.000000)" stroke-linecap="round">
                <path d="M1218.92499,26 C1172.24397,26 1172.24397,3.26315939e-13 1125.56083,3.17740387e-13 C1078.8777,3.09164835e-13 1078.8777,26 1032.19457,26 C985.511441,26 985.511441,2.92013731e-13 938.82831,2.83438179e-13 C892.140961,2.74861852e-13 892.140961,26 845.455721,26 C798.768373,26 798.768373,2.57709586e-13 752.081024,2.49133259e-13 C705.395784,2.4055732e-13 705.395784,26 658.710545,26 C612.029522,26 612.029522,2.23406216e-13 565.3485,2.14831051e-13 C518.66326,2.06255111e-13 518.66326,26 471.975911,26 C425.290672,26 425.290672,1.89102845e-13 378.603323,1.80526518e-13 C331.913866,1.71949804e-13 331.913866,26 285.224408,26 C238.53706,26 238.53706,1.54796763e-13 191.849711,1.46220436e-13 C145.156037,1.37642948e-13 145.156037,26 98.4623618,26 C51.768687,26 51.768687,1.2048797e-13 5.07501221,1.11910481e-13" id="Stroke-1" stroke="#E978FF" stroke-width="5"></path>
                <path d="M1199.92499,63 C1153.93619,63 1153.93619,37 1107.94532,37 C1061.95444,37 1061.95444,63 1015.96357,63 C969.972696,63 969.972696,37 923.981822,37 C877.986793,37 877.986793,63 831.993841,63 C785.998813,63 785.998813,37 740.003784,37 C694.010832,37 694.010832,63 648.017881,63 C602.029084,63 602.029084,37 556.040288,37 C510.047337,37 510.047337,63 464.052308,63 C418.059356,63 418.059356,37 372.064328,37 C326.067221,37 326.067221,63 280.070115,63 C234.075086,63 234.075086,37 188.080057,37 C142.078796,37 142.078796,63 96.0775347,63 C50.0762735,63 50.0762735,37 4.07501221,37" id="Stroke-1-Copy" stroke="#E978FF" stroke-width="5"></path>
                <path d="M1213.92499,97 C1167.24397,97 1167.24397,71 1120.56083,71 C1073.8777,71 1073.8777,97 1027.19457,97 C980.511441,97 980.511441,71 933.82831,71 C887.140961,71 887.140961,97 840.455721,97 C793.768373,97 793.768373,71 747.081024,71 C700.395784,71 700.395784,97 653.710545,97 C607.029522,97 607.029522,71 560.3485,71 C513.66326,71 513.66326,97 466.975911,97 C420.290672,97 420.290672,71 373.603323,71 C326.913866,71 326.913866,97 280.224408,97 C233.53706,97 233.53706,71 186.849711,71 C140.156037,71 140.156037,97 93.4623618,97 C46.768687,97 46.768687,71 0.075012207,71" id="Stroke-1-Copy-2" stroke="#E978FF" stroke-width="5"></path>
            </g>
        </svg>
      </div>
      <div id="contact">
        <p>I'd love to hear from you!</p>
        <a href="mailto:hello@kristenspencer.ca" class="button hvr-sweep-to-right">Get in touch</a>
      </div>
  </div> <!-- /.container -->
  <?php wp_nav_menu(array(
  'theme_location' => 'primary',
  'container' => false,
  'menu_class' => 'main-nav'
  )) ?>
</section> <!-- /.main -->

<?php get_footer(); ?>