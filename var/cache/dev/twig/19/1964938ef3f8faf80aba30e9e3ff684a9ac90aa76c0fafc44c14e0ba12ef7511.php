<?php

/* index.html */
class __TwigTemplate_71c0a9c6af6b450e807dba2fe75361943a0dbfea641703ca1c6146662581f2f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0e69c903acb5a70d6ed34f6b808d6b2b51d4cdadb98ed2ead724e0ad55ff855 = $this->env->getExtension("native_profiler");
        $__internal_f0e69c903acb5a70d6ed34f6b808d6b2b51d4cdadb98ed2ead724e0ad55ff855->enter($__internal_f0e69c903acb5a70d6ed34f6b808d6b2b51d4cdadb98ed2ead724e0ad55ff855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html"));

        // line 1
        echo "<html>
\t<head>
\t<!--<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
\t<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>-->
\t

\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/header_and_footer.css"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" />
\t</head>
\t<body>
\t<!-- HEADER potem do innego pliku wyjebać -->

\t<nav class=\"navbar navbar-default\">
\t  <div class=\"container-fluid\">
\t    <div class=\"navbar-header\">
\t      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span> 
\t      </button>
\t      <a class=\"navbar-brand logo\" href=\"#\">FakeGram</a>
\t    </div>
\t    <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
\t      <ul class=\"nav navbar-nav navbar-right\">
\t        <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
\t        <li><a href=\"#\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
\t      </ul>
\t      <ul class=\"nav navbar-nav navbar-right nav-pages\">
\t        <li class=\"active\"><a href=\"#\">Home</a></li>
\t        <li><a href=\"#\">Page 1</a></li>
\t        <li><a href=\"#\">Page 2</a></li> 
\t        <li><a href=\"#\">Page 3</a></li> 
\t      </ul>
\t    </div>
\t  </div>
\t</nav>

\t<!-- |||||||||||||||||||||||||||||||||||| -->

\t\t<div class=\"container-fluid\">
\t\t\t<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t  <!-- Indicators -->
\t\t\t  <ol class=\"carousel-indicators\">
\t\t\t    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t\t    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t\t  </ol>
\t\t\t  <!-- Wrapper for slides -->
\t\t\t  <div class=\"carousel-inner\">
\t\t\t    <div class=\"item active\">
\t\t\t      <img src=\"site_images/zajebiscie.jpg\" alt=\"\">
\t\t\t    </div>

\t\t\t    <div class=\"item\">
\t\t\t      <img src=\"site_images/e46.jpg\" alt=\"\">
\t\t\t    </div>

\t\t\t    <div class=\"item\">
\t\t\t      <img src=\"site_images/200.jpg\" alt=\"\">
\t\t\t    </div>
\t\t\t  </div>
\t\t\t  <!-- Left and right controls -->
\t\t\t  <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
\t\t\t    <span class=\"glyphicon glyphicon-chevron-left\"></span>
\t\t\t    <span class=\"sr-only\">Previous</span>
\t\t\t  </a>
\t\t\t  <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
\t\t\t    <span class=\"glyphicon glyphicon-chevron-right\"></span>
\t\t\t    <span class=\"sr-only\">Next</span>
\t\t\t  </a>
\t\t\t</div>
\t\t</div>

\t\t<!-- FOOTER potem do innego pliku wyjebać -->

\t\t<div class=\"footer\"></div>

\t\t<!-- |||||||||||||||||||||||||||||||||||| -->

\t</body>

</html>
";
        
        $__internal_f0e69c903acb5a70d6ed34f6b808d6b2b51d4cdadb98ed2ead724e0ad55ff855->leave($__internal_f0e69c903acb5a70d6ed34f6b808d6b2b51d4cdadb98ed2ead724e0ad55ff855_prof);

    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  45 => 13,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <html>*/
/* 	<head>*/
/* 	<!--<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />*/
/* 	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>*/
/* 	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>-->*/
/* 	*/
/* */
/* 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">*/
/* 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>*/
/* 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>*/
/* */
/* 	<meta name="viewport" content="width=device-width, initial-scale=1">*/
/* 	<link rel="stylesheet" href="{{ asset('assets/css/header_and_footer.css') }}" />*/
/* 	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />*/
/* 	</head>*/
/* 	<body>*/
/* 	<!-- HEADER potem do innego pliku wyjebać -->*/
/* */
/* 	<nav class="navbar navbar-default">*/
/* 	  <div class="container-fluid">*/
/* 	    <div class="navbar-header">*/
/* 	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">*/
/* 	        <span class="icon-bar"></span>*/
/* 	        <span class="icon-bar"></span>*/
/* 	        <span class="icon-bar"></span> */
/* 	      </button>*/
/* 	      <a class="navbar-brand logo" href="#">FakeGram</a>*/
/* 	    </div>*/
/* 	    <div class="collapse navbar-collapse" id="myNavbar">*/
/* 	      <ul class="nav navbar-nav navbar-right">*/
/* 	        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>*/
/* 	        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>*/
/* 	      </ul>*/
/* 	      <ul class="nav navbar-nav navbar-right nav-pages">*/
/* 	        <li class="active"><a href="#">Home</a></li>*/
/* 	        <li><a href="#">Page 1</a></li>*/
/* 	        <li><a href="#">Page 2</a></li> */
/* 	        <li><a href="#">Page 3</a></li> */
/* 	      </ul>*/
/* 	    </div>*/
/* 	  </div>*/
/* 	</nav>*/
/* */
/* 	<!-- |||||||||||||||||||||||||||||||||||| -->*/
/* */
/* 		<div class="container-fluid">*/
/* 			<div id="myCarousel" class="carousel slide" data-ride="carousel">*/
/* 			  <!-- Indicators -->*/
/* 			  <ol class="carousel-indicators">*/
/* 			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/* 			    <li data-target="#myCarousel" data-slide-to="1"></li>*/
/* 			    <li data-target="#myCarousel" data-slide-to="2"></li>*/
/* 			  </ol>*/
/* 			  <!-- Wrapper for slides -->*/
/* 			  <div class="carousel-inner">*/
/* 			    <div class="item active">*/
/* 			      <img src="site_images/zajebiscie.jpg" alt="">*/
/* 			    </div>*/
/* */
/* 			    <div class="item">*/
/* 			      <img src="site_images/e46.jpg" alt="">*/
/* 			    </div>*/
/* */
/* 			    <div class="item">*/
/* 			      <img src="site_images/200.jpg" alt="">*/
/* 			    </div>*/
/* 			  </div>*/
/* 			  <!-- Left and right controls -->*/
/* 			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">*/
/* 			    <span class="glyphicon glyphicon-chevron-left"></span>*/
/* 			    <span class="sr-only">Previous</span>*/
/* 			  </a>*/
/* 			  <a class="right carousel-control" href="#myCarousel" data-slide="next">*/
/* 			    <span class="glyphicon glyphicon-chevron-right"></span>*/
/* 			    <span class="sr-only">Next</span>*/
/* 			  </a>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- FOOTER potem do innego pliku wyjebać -->*/
/* */
/* 		<div class="footer"></div>*/
/* */
/* 		<!-- |||||||||||||||||||||||||||||||||||| -->*/
/* */
/* 	</body>*/
/* */
/* </html>*/
/* */
