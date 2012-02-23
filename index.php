<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Le jQuery charcounter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
      }
      
      input {
        font-size:1.2em;
        padding:10px 12px;
      }
      
    </style>
    <link href="assets/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/google-code-prettify/prettify.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

  <body>


    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>jquery.charcounter</h1>
        <p>A simple character counter plugin for jQuery using Bootstrap from Twitter</p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span12"><h2>Works with:</h2></div>
      </div>
      <div class="row">
        <div class="span12">
          <h3><code>input[type=text]</code></h3>
          <br>
          <div>
            <input type="text" data-countable="1" class="span5" data-limit="20"> 
          </div>
          <br>
          <h6>Markup</h6>
          <pre class="prettyprint linenums"><?php echo htmlspecialchars('<input type="text" data-countable="1" data-limit="100">') ?> </pre>
        </div>
        <div class="span12">
          <h3><code>textarea</code></h3>
          <br>
          <div>
            <textarea rows="5" class="span12" data-countable="1" data-limit="20"></textarea>
          </div>
          <br>
          <h6>Markup</h6>
          <pre class="prettyprint linenums"><?php echo htmlspecialchars('<textarea rows="5" data-countable="1" data-limit="20"></textarea>') ?> </pre>
          
       </div>
       <div class="span12">
          
          <h6>Javascript</h6>
          <pre class="prettyprint linenums">
$('[data-countable]').charcounter({
  limit: 140,
  warning: 15,
  warningClass: 'label-warning',
  exceededClass: 'label-important',
  defaultClass: 'label-info',
  notAllowOverflow: true,
  fontSize: '1.4em',
})
           </pre>         
       </div>
      </div>

      <hr>

      <footer>
        <p style="text-align:right"><strong><a href="http://twitter.com/adobi">@adobi</a></strong></p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src = "http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="jquery.charcounter.js"></script>
    
    <script src="assets/google-code-prettify/prettify.js"></script>
    <script type="text/javascript">
      $(function() {
        window.prettyPrint && prettyPrint() 
      })
    </script>

  </body>
</html>
