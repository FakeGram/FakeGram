<?php

/* default/index.html.twig */
class __TwigTemplate_6a731edbb971c3a76fe5abcf9c5a0867144996e461029c487674218eb56b1227 extends Twig_Template
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
        $__internal_c5eb212b6796fd8b4b31d164f009921f0389eb2790712d190737bc64a2473ce2 = $this->env->getExtension("native_profiler");
        $__internal_c5eb212b6796fd8b4b31d164f009921f0389eb2790712d190737bc64a2473ce2->enter($__internal_c5eb212b6796fd8b4b31d164f009921f0389eb2790712d190737bc64a2473ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 1
        echo "<html>
    <head>
    <!--<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>-->
    

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/header_and_footer.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
    <!-- HEADER potem do innego pliku wyjebać -->
    <nav class=\"navbar navbar-default\">
      <div class=\"container-fluid\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span> 
          </button>
          <a class=\"navbar-brand\" href=\"#\"><div class=\"logo\">FakeGram</div></a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
          <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"/Registration\"><span class=\"glyphicon glyphicon-user\"></span> Rejestracja</a></li>
            <li><a href=\"/Login\"><span class=\"glyphicon glyphicon-log-in\"></span> Logowanie</a></li>
          </ul>
          <ul class=\"nav navbar-nav navbar-right nav-pages\">
            <li class=\"active\"><a href=\"#\">Strona Główna</a></li>
            <li><a href=\"/Explore\">Odkrywaj</a></li>
            <li><a href=\"/Profile\">Moje zdjęcia </a></li>
            <li><a onclick=\"showModal()\" style=\"cursor:pointer;\">Dodaj Zdjęcie</a></li> 
            <li><a href=\"/Panel\">Ustawienia</a></li> 
          </ul>
        </div>
        <div id=\"Modal\" class=\"modal\">
            <div class=\"modal-content\">
              <span class=\"close\" onclick=\"hideModal()\">&times;</span>
              <form action=\"/pic_upload\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"custom-file\">
                  <input type=\"file\" name=\"img\" id=\"js-upload-files\" accept=\"image/jpeg\" class=\"form-control\" required>
                  <label class=\"custom-file-label\" for=\"validatedCustomFile\">Choose file...</label>
                </div>
                <div class=\"pic_description\">
                  <input type=\"text\" name=\"desc\" id=\"pic_desc\" class=\"form-control\">
                </div>
                <button type=\"submit\" class=\"btn btn-sm btn-primary\" id=\"js-upload-submit\">Upload files</button>
            </form>
            </div>
        </div>
        <form class=\"form-horizontal\" action =\"/Search\" method=\"post\">
          <div class= form-inline>
            <input type=\"text\" class ='form-control inputs' id = \"SearchedArgument\" name =\"SearchedArgument\" placeholder=\"Wyszukaj Użytkownika\" >
            <button type=\"submit\" class = \"btn btn-default buttons\" id=\"btnSubmit\">Wyszukaj</button>
          </div>
        </form>
      </div>
    </nav>
    <script type=\"text/javascript\">
      var modal = document.getElementById('Modal');
      var containers = document.getElementsByClassName(\"container-fluid\");
      function showModal(){
        modal.style.display=\"block\";
      }
      function hideModal(){
        modal.style.display=\"none\";
      }
      window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = \"none\";
        }
      }
    </script>
    <!-- |||||||||||||||||||||||||||||||||||| -->

        <div class=\"container-fluid\">
            <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
              <!-- Indicators -->
              <ol class=\"carousel-indicators\">
                <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
              </ol>
              <!-- Wrapper for slides -->
              <div class=\"carousel-inner\">
                <div class=\"item active\">
                  <img src=\"site_images/zajebiscie.jpg\" alt=\"\">
                </div>

                <div class=\"item\">
                  <img src=\"site_images/e46.jpg\" alt=\"\">
                </div>

                <div class=\"item\">
                  <img src=\"site_images/200.jpg\" alt=\"\">
                </div>
              </div>
              <!-- Left and right controls -->
              <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
                <span class=\"glyphicon glyphicon-chevron-left\"></span>
                <span class=\"sr-only\">Previous</span>
              </a>
              <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
                <span class=\"glyphicon glyphicon-chevron-right\"></span>
                <span class=\"sr-only\">Next</span>
              </a>
            </div>
        </div>

        <!-- FOOTER potem do innego pliku wyjebać -->
        <div class=\"footer container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                    <div class=\"FooterLogo\">FakeGram</div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\" style=\"margin-top: 2%;\">
                    <p>Projekt z przedmiotu \"systemy multimedialne\". Politechnika Śląska, Wydział Elektryczny. 2018 r.</p>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
                    <ul>
                        Wykonali:
                        <li>Konrad Sladkowski</li>
                        <li>Krzysztof Szwej</li>
                        <li>Dominik Żurawski</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- |||||||||||||||||||||||||||||||||||| -->
    </body>
</html>
";
        
        $__internal_c5eb212b6796fd8b4b31d164f009921f0389eb2790712d190737bc64a2473ce2->leave($__internal_c5eb212b6796fd8b4b31d164f009921f0389eb2790712d190737bc64a2473ce2_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
/*     <head>*/
/*     <!--<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />*/
/*     <script src="{{ asset('assets/js/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>-->*/
/*     */
/* */
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>*/
/*     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>*/
/* */
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/header_and_footer.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />*/
/*     </head>*/
/*     <body>*/
/*     <!-- HEADER potem do innego pliku wyjebać -->*/
/*     <nav class="navbar navbar-default">*/
/*       <div class="container-fluid">*/
/*         <div class="navbar-header">*/
/*           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span> */
/*           </button>*/
/*           <a class="navbar-brand" href="#"><div class="logo">FakeGram</div></a>*/
/*         </div>*/
/*         <div class="collapse navbar-collapse" id="myNavbar">*/
/*           <ul class="nav navbar-nav navbar-right">*/
/*             <li><a href="/Registration"><span class="glyphicon glyphicon-user"></span> Rejestracja</a></li>*/
/*             <li><a href="/Login"><span class="glyphicon glyphicon-log-in"></span> Logowanie</a></li>*/
/*           </ul>*/
/*           <ul class="nav navbar-nav navbar-right nav-pages">*/
/*             <li class="active"><a href="#">Strona Główna</a></li>*/
/*             <li><a href="/Explore">Odkrywaj</a></li>*/
/*             <li><a href="/Profile">Moje zdjęcia </a></li>*/
/*             <li><a onclick="showModal()" style="cursor:pointer;">Dodaj Zdjęcie</a></li> */
/*             <li><a href="/Panel">Ustawienia</a></li> */
/*           </ul>*/
/*         </div>*/
/*         <div id="Modal" class="modal">*/
/*             <div class="modal-content">*/
/*               <span class="close" onclick="hideModal()">&times;</span>*/
/*               <form action="/pic_upload" method="post" enctype="multipart/form-data">*/
/*                 <div class="custom-file">*/
/*                   <input type="file" name="img" id="js-upload-files" accept="image/jpeg" class="form-control" required>*/
/*                   <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>*/
/*                 </div>*/
/*                 <div class="pic_description">*/
/*                   <input type="text" name="desc" id="pic_desc" class="form-control">*/
/*                 </div>*/
/*                 <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>*/
/*             </form>*/
/*             </div>*/
/*         </div>*/
/*         <form class="form-horizontal" action ="/Search" method="post">*/
/*           <div class= form-inline>*/
/*             <input type="text" class ='form-control inputs' id = "SearchedArgument" name ="SearchedArgument" placeholder="Wyszukaj Użytkownika" >*/
/*             <button type="submit" class = "btn btn-default buttons" id="btnSubmit">Wyszukaj</button>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </nav>*/
/*     <script type="text/javascript">*/
/*       var modal = document.getElementById('Modal');*/
/*       var containers = document.getElementsByClassName("container-fluid");*/
/*       function showModal(){*/
/*         modal.style.display="block";*/
/*       }*/
/*       function hideModal(){*/
/*         modal.style.display="none";*/
/*       }*/
/*       window.onclick = function(event) {*/
/*         if (event.target == modal) {*/
/*             modal.style.display = "none";*/
/*         }*/
/*       }*/
/*     </script>*/
/*     <!-- |||||||||||||||||||||||||||||||||||| -->*/
/* */
/*         <div class="container-fluid">*/
/*             <div id="myCarousel" class="carousel slide" data-ride="carousel">*/
/*               <!-- Indicators -->*/
/*               <ol class="carousel-indicators">*/
/*                 <li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/*                 <li data-target="#myCarousel" data-slide-to="1"></li>*/
/*                 <li data-target="#myCarousel" data-slide-to="2"></li>*/
/*               </ol>*/
/*               <!-- Wrapper for slides -->*/
/*               <div class="carousel-inner">*/
/*                 <div class="item active">*/
/*                   <img src="site_images/zajebiscie.jpg" alt="">*/
/*                 </div>*/
/* */
/*                 <div class="item">*/
/*                   <img src="site_images/e46.jpg" alt="">*/
/*                 </div>*/
/* */
/*                 <div class="item">*/
/*                   <img src="site_images/200.jpg" alt="">*/
/*                 </div>*/
/*               </div>*/
/*               <!-- Left and right controls -->*/
/*               <a class="left carousel-control" href="#myCarousel" data-slide="prev">*/
/*                 <span class="glyphicon glyphicon-chevron-left"></span>*/
/*                 <span class="sr-only">Previous</span>*/
/*               </a>*/
/*               <a class="right carousel-control" href="#myCarousel" data-slide="next">*/
/*                 <span class="glyphicon glyphicon-chevron-right"></span>*/
/*                 <span class="sr-only">Next</span>*/
/*               </a>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <!-- FOOTER potem do innego pliku wyjebać -->*/
/*         <div class="footer container-fluid">*/
/*             <div class="row">*/
/*                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                     <div class="FooterLogo">FakeGram</div>*/
/*                 </div>*/
/*                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin-top: 2%;">*/
/*                     <p>Projekt z przedmiotu "systemy multimedialne". Politechnika Śląska, Wydział Elektryczny. 2018 r.</p>*/
/*                 </div>*/
/*                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*                     <ul>*/
/*                         Wykonali:*/
/*                         <li>Konrad Sladkowski</li>*/
/*                         <li>Krzysztof Szwej</li>*/
/*                         <li>Dominik Żurawski</li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- |||||||||||||||||||||||||||||||||||| -->*/
/*     </body>*/
/* </html>*/
/* */
