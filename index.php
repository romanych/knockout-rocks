<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1"/>
  <title>KnockoutJS presentation</title>
  <link href="http://fonts.googleapis.com/css?family=Droid+Sans|Droid+Sans+Mono" rel="stylesheet" type="text/css"/>
  <link id="prettify-link" href="src/prettify/prettify.css" rel="stylesheet"/>
  <link href="styles/fonts.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="styles/presentation.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="styles/common.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="styles/default.css" rel="stylesheet" type="text/css" media="screen"/>
  <link href="styles/ko.css" rel="stylesheet" type="text/css" media="screen"/>
  <script src="scripts/knockout-latest.js"></script>
</head>
<body>
<div id="flex-container">
  <nav id="helpers">
    <button title="Previous slide" id="nav-prev" class="nav-prev">&#8701;</button>
    <button title="Jump to a random slide" id="slide-no">5</button>
    <button title="Next slide" id="nav-next" class="nav-next">&#8702;</button>
    <menu>
      <button type="checkbox" data-command="toc" title="Table of Contents" class="toc">TOC</button>
      <button type="checkbox" data-command="notes" title="View Slide Notes">&#9999;</button>
      <button type="checkbox" data-command="source" title="View slide source">&#8635;</button>
      <button type="checkbox" data-command="help" title="View Help">?</button>
    </menu>
  </nav>
  <div class="slides">
    <div id="presentation-counter">Загрузка...</div>
    <?php
            $slides = array(
            'landing-slide',
            'controls-slide',
            'title-slide',
            'mission',
            'mission-possible',
            'mission-possible-code',
            'mission2',
            'debriefing',
            'spagetti',
            'escape-ways',
            'mvc',
            'mvvm',
            'meet-knockoutjs',
            'knockoutjs',
            'standard-bindings'
            );

            foreach ($slides as $slide) {
              echo '<div class="slide" id="' . $slide . '">';
              include 'slides/' . $slide . '.html';
              echo '</div>';
            }
            ?>
  </div>
  <!-- slides -->
</div>

<!--[if lt IE 9]>
<script src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js">
</script>
<script>CFInstall.check({ mode:"overlay" });</script>
<![endif]-->

<script src="src/prettify/prettify.js" onload="prettyPrint();" defer></script>
<script src="scripts/utils.js"></script>
<!--
<script>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28549963-3']);
  _gaq.push(['_trackPageview']);
  _gaq.push(['_trackPageLoadTime']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
-->
</body>
</html>