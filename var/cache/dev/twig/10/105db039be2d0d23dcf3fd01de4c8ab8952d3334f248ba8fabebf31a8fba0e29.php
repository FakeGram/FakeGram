<?php

/* header.html.twig */
class __TwigTemplate_0c5b351d49bab3497bcd4132075af7850a5d8964b0f5ab83d65227933cc19367 extends Twig_Template
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
        $__internal_97e8109662935696e846b5aa3b958d903148cfd2615034fc4a8e913c469b05d7 = $this->env->getExtension("native_profiler");
        $__internal_97e8109662935696e846b5aa3b958d903148cfd2615034fc4a8e913c469b05d7->enter($__internal_97e8109662935696e846b5aa3b958d903148cfd2615034fc4a8e913c469b05d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

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
    
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/owl.carousel.js"), "html", null, true);
        echo "\"></script>

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/image_upload.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/header_and_footer.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/edit_picture.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/owl.carousel.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/owl.theme.default.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/user_panel.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/profile.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/photo.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/login.css"), "html", null, true);
        echo "\" />

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
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
          <a class=\"navbar-brand\" href=\"/\"><div class=\"logo\">FakeGram</div></a>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
          <ul class=\"nav navbar-nav navbar-left search-bar\">
            <form class=\"form-horizontal\" action =\"/Search\" method=\"post\">
            <div class= form-inline>
              <input type=\"text\" class ='form-control inputs' id = \"SearchedArgument\" name =\"SearchedArgument\" placeholder=\"Wyszukaj Użytkownika\" >
              <button type=\"submit\" class = \"btn btn-default buttons\" id=\"btnSubmit\">Wyszukaj</button>
            </div>
            </form>
          </ul>
          <ul class=\"nav navbar-nav navbar-right\">
            ";
        // line 47
        if ($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "CurrentUser", array(), "any", true, true)) {
            // line 48
            echo "            <li><a href=\"/Logout\"><span class=\"glyphicon glyphicon-log-out\"></span> Wyloguj</a></li>
            ";
        } else {
            // line 50
            echo "            <li><a href=\"/Registration\"><span class=\"glyphicon glyphicon-user\"></span> Rejestracja</a></li>
            <li><a href=\"/Login\"><span class=\"glyphicon glyphicon-log-in\"></span> Logowanie</a></li>
            ";
        }
        // line 53
        echo "          </ul>
          <ul class=\"nav navbar-nav navbar-right nav-pages\">
            <li class=\"active\"><a href=\"/\">Strona Główna</a></li>
            <li><a href=\"/Explore\">Odkrywaj</a></li>
            <li><a href=\"/Profile\">Moje zdjęcia </a></li>
            ";
        // line 58
        if ($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "CurrentUser", array(), "any", true, true)) {
            // line 59
            echo "            <li><a onclick=\"showModal()\" style=\"cursor:pointer;\">Dodaj Zdjęcie</a></li> 
            ";
        }
        // line 61
        echo "            <li><a href=\"/Panel\">Ustawienia</a></li> 
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
    <!-- |||||||||||||||||||||||||||||||||||| -->";
        
        $__internal_97e8109662935696e846b5aa3b958d903148cfd2615034fc4a8e913c469b05d7->leave($__internal_97e8109662935696e846b5aa3b958d903148cfd2615034fc4a8e913c469b05d7_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 61,  132 => 59,  130 => 58,  123 => 53,  118 => 50,  114 => 48,  112 => 47,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  41 => 9,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <html>*/
/*     <head>*/
/*     <!--<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />*/
/*     <script src="{{ asset('assets/js/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>-->*/
/*     */
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>*/
/*     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>*/
/*     <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>*/
/* */
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/image_upload.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/header_and_footer.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/edit_picture.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/user_panel.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/photo.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}" />*/
/* */
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
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
/*           <a class="navbar-brand" href="/"><div class="logo">FakeGram</div></a>*/
/*         </div>*/
/*         <div class="collapse navbar-collapse" id="myNavbar">*/
/*           <ul class="nav navbar-nav navbar-left search-bar">*/
/*             <form class="form-horizontal" action ="/Search" method="post">*/
/*             <div class= form-inline>*/
/*               <input type="text" class ='form-control inputs' id = "SearchedArgument" name ="SearchedArgument" placeholder="Wyszukaj Użytkownika" >*/
/*               <button type="submit" class = "btn btn-default buttons" id="btnSubmit">Wyszukaj</button>*/
/*             </div>*/
/*             </form>*/
/*           </ul>*/
/*           <ul class="nav navbar-nav navbar-right">*/
/*             {% if session.CurrentUser is defined %}*/
/*             <li><a href="/Logout"><span class="glyphicon glyphicon-log-out"></span> Wyloguj</a></li>*/
/*             {% else %}*/
/*             <li><a href="/Registration"><span class="glyphicon glyphicon-user"></span> Rejestracja</a></li>*/
/*             <li><a href="/Login"><span class="glyphicon glyphicon-log-in"></span> Logowanie</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*           <ul class="nav navbar-nav navbar-right nav-pages">*/
/*             <li class="active"><a href="/">Strona Główna</a></li>*/
/*             <li><a href="/Explore">Odkrywaj</a></li>*/
/*             <li><a href="/Profile">Moje zdjęcia </a></li>*/
/*             {% if session.CurrentUser is defined %}*/
/*             <li><a onclick="showModal()" style="cursor:pointer;">Dodaj Zdjęcie</a></li> */
/*             {% endif %}*/
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
