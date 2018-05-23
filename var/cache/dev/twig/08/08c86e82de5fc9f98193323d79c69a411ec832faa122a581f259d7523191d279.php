<?php

/* ImgOperations/image_edit.html.twig */
class __TwigTemplate_28db8928e26fa2f17399ea8653f0fca42f621a241ba3b688232f8cedd2fc989d extends Twig_Template
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
        $__internal_6bcc28440f29a64bb307b934521d3e2d50e3a37ed1dd649c90faae0d37215ff1 = $this->env->getExtension("native_profiler");
        $__internal_6bcc28440f29a64bb307b934521d3e2d50e3a37ed1dd649c90faae0d37215ff1->enter($__internal_6bcc28440f29a64bb307b934521d3e2d50e3a37ed1dd649c90faae0d37215ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ImgOperations/image_edit.html.twig"));

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
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/owl.carousel.js"), "html", null, true);
        echo "\"></script>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/header_and_footer.css"), "html", null, true);
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
            <li><a href=\"/Profile\">Moje zdjęcia </a></li>
            <li><a href=\"/upload\">Dodaj Zdjęcie</a></li> 
            <li><a href=\"/Panel\">Ustawienia</a></li> 
          </ul>
        </div>
      </div>
    </nav>
    <!-- |||||||||||||||||||||||||||||||||||| -->

        <div class=\"container-fluid\">
            <div class=\"edit_picture_tile\">
                <canvas id=\"edit_picture_cnv\" width=\"500px\" height=\"500px\" style=\"border:1px solid #000000;\"></canvas>
                <div class=\"owl-carousel owl-theme\">
                  <div class=\"effect_tile\" onclick=\"clear_effects();\"><canvas id=\"effect0_canvas\" width=\"100px\" height=\"100px\"></canvas></div>
                  <div class=\"effect_tile\" onclick=\"apply_effect1();\"><canvas id=\"effect1_canvas\" width=\"100px\" height=\"100px\"></canvas></div>
                  <div class=\"effect_tile\" onclick=\"apply_effect2();\"><canvas id=\"effect2_canvas\" width=\"100px\" height=\"100px\"></canvas></div>
                  <div class=\"effect_tile\" onclick=\"apply_effect3();\"><canvas id=\"effect3_canvas\" width=\"100px\" height=\"100px\"></canvas></div>
                  <div class=\"effect_tile\" onclick=\"apply_effect4();\"><canvas id=\"effect4_canvas\" width=\"100px\" height=\"100px\"></canvas></div>
                </div>
            </div>



            <!-- Useful things for js below XD -->
            <div id=\"hidden_pic_title\" style=\"display: none;\">";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["pic_name"]) ? $context["pic_name"] : $this->getContext($context, "pic_name")), "html", null, true);
        echo "</div>
            <img id=\"pic_to_redraw\" style=\"display: none;\" width=\"500px\" height=\"500px\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["pic_name"]) ? $context["pic_name"] : $this->getContext($context, "pic_name")), "html", null, true);
        echo "\" />
            <img id=\"pic_to_redraw_scale\" style=\"display: none;\" width=\"100px\" height=\"100px\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["pic_name"]) ? $context["pic_name"] : $this->getContext($context, "pic_name")), "html", null, true);
        echo "\" />
        </div>

        <!-- FOOTER potem do innego pliku wyjebać -->
        <div class=\"footer\">
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
    <script type=\"text/javascript\">
    
        var cnv;
        var ctx;
        var img;
        window.onload = function() {

          //main image
          cnv = document.getElementById(\"edit_picture_cnv\");
          ctx = cnv.getContext(\"2d\");
          img = document.getElementById(\"pic_to_redraw\");
          ctx.drawImage(img, 0, 0, 500, 500);

          //effects below:
          var effect0 = document.getElementById(\"effect0_canvas\");
          var effect1 = document.getElementById(\"effect1_canvas\");
          var effect2 = document.getElementById(\"effect2_canvas\");
          var effect3 = document.getElementById(\"effect3_canvas\");
          var effect4 = document.getElementById(\"effect4_canvas\");

          var ctx_effect0 = effect0.getContext(\"2d\");
          var ctx_effect1 = effect1.getContext(\"2d\");
          var ctx_effect2 = effect2.getContext(\"2d\");
          var ctx_effect3 = effect3.getContext(\"2d\");
          var ctx_effect4 = effect4.getContext(\"2d\");

          effect1.getContext('2d').filter = 'blur(2px) opacity(60%)';
          effect2.getContext('2d').filter = 'invert(30%)';
          effect3.getContext('2d').filter = 'saturate(76%)';
          effect4.getContext('2d').filter = 'sepia(83%)';

          var img_scale = document.getElementById(\"pic_to_redraw_scale\");
          ctx_effect0.drawImage(img_scale, 0, 0, 100, 100);
          ctx_effect1.drawImage(img_scale, 0, 0, 100, 100);
          ctx_effect2.drawImage(img_scale, 0, 0, 100, 100);
          ctx_effect3.drawImage(img_scale, 0, 0, 100, 100);
          ctx_effect4.drawImage(img_scale, 0, 0, 100, 100);

      };

      function clear_effects()
      {
        cnv = document.getElementById(\"edit_picture_cnv\");
        ctx = cnv.getContext(\"2d\");
        img = document.getElementById(\"pic_to_redraw\");
        ctx.drawImage(img, 0, 0, 500, 500);
      }

      function apply_effect1()
      {
        cnv = document.getElementById(\"edit_picture_cnv\");
        ctx = cnv.getContext(\"2d\");
        img = document.getElementById(\"pic_to_redraw\");
        cnv.getContext('2d').filter = 'blur(5px) opacity(60%)';
        ctx.drawImage(img, 0, 0, 500, 500);
      }

      function apply_effect2()
      {
        cnv = document.getElementById(\"edit_picture_cnv\");
        ctx = cnv.getContext(\"2d\");
        img = document.getElementById(\"pic_to_redraw\");
        cnv.getContext('2d').filter = 'invert(30%)';
        ctx.drawImage(img, 0, 0, 500, 500);
      }

      function apply_effect3()
      {
        cnv = document.getElementById(\"edit_picture_cnv\");
        ctx = cnv.getContext(\"2d\");
        img = document.getElementById(\"pic_to_redraw\");
        cnv.getContext('2d').filter = 'saturate(76%)';
        ctx.drawImage(img, 0, 0, 500, 500);
      }

      function apply_effect4()
      {
        cnv = document.getElementById(\"edit_picture_cnv\");
        ctx = cnv.getContext(\"2d\");
        img = document.getElementById(\"pic_to_redraw\");
        cnv.getContext('2d').filter = 'sepia(83%)';
        ctx.drawImage(img, 0, 0, 500, 500);
      }

      function save()
      {
        var canvasData = canvasElement.toDataURL(\"image/png\");
        \$.ajax({
        url:'save_edited.php', 
        type:'POST', 
        data:{
        data:canvasData
        }
        });
      }

      \$( document ).ready(function() {
        \$(\".owl-carousel\").owlCarousel();
        \$('.owl-carousel').owlCarousel({
        stagePadding: 50,
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
      });
      });

    </script>
</html>
";
        
        $__internal_6bcc28440f29a64bb307b934521d3e2d50e3a37ed1dd649c90faae0d37215ff1->leave($__internal_6bcc28440f29a64bb307b934521d3e2d50e3a37ed1dd649c90faae0d37215ff1_prof);

    }

    public function getTemplateName()
    {
        return "ImgOperations/image_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 64,  113 => 63,  109 => 62,  61 => 17,  57 => 16,  53 => 15,  49 => 14,  43 => 11,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
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
/*     <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>*/
/* */
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/header_and_footer.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/edit_picture.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.css') }}" />*/
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
/*             <li><a href="/Profile">Moje zdjęcia </a></li>*/
/*             <li><a href="/upload">Dodaj Zdjęcie</a></li> */
/*             <li><a href="/Panel">Ustawienia</a></li> */
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*     </nav>*/
/*     <!-- |||||||||||||||||||||||||||||||||||| -->*/
/* */
/*         <div class="container-fluid">*/
/*             <div class="edit_picture_tile">*/
/*                 <canvas id="edit_picture_cnv" width="500px" height="500px" style="border:1px solid #000000;"></canvas>*/
/*                 <div class="owl-carousel owl-theme">*/
/*                   <div class="effect_tile" onclick="clear_effects();"><canvas id="effect0_canvas" width="100px" height="100px"></canvas></div>*/
/*                   <div class="effect_tile" onclick="apply_effect1();"><canvas id="effect1_canvas" width="100px" height="100px"></canvas></div>*/
/*                   <div class="effect_tile" onclick="apply_effect2();"><canvas id="effect2_canvas" width="100px" height="100px"></canvas></div>*/
/*                   <div class="effect_tile" onclick="apply_effect3();"><canvas id="effect3_canvas" width="100px" height="100px"></canvas></div>*/
/*                   <div class="effect_tile" onclick="apply_effect4();"><canvas id="effect4_canvas" width="100px" height="100px"></canvas></div>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/* */
/*             <!-- Useful things for js below XD -->*/
/*             <div id="hidden_pic_title" style="display: none;">{{pic_name}}</div>*/
/*             <img id="pic_to_redraw" style="display: none;" width="500px" height="500px" src="{{pic_name}}" />*/
/*             <img id="pic_to_redraw_scale" style="display: none;" width="100px" height="100px" src="{{pic_name}}" />*/
/*         </div>*/
/* */
/*         <!-- FOOTER potem do innego pliku wyjebać -->*/
/*         <div class="footer">*/
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
/*     <script type="text/javascript">*/
/*     */
/*         var cnv;*/
/*         var ctx;*/
/*         var img;*/
/*         window.onload = function() {*/
/* */
/*           //main image*/
/*           cnv = document.getElementById("edit_picture_cnv");*/
/*           ctx = cnv.getContext("2d");*/
/*           img = document.getElementById("pic_to_redraw");*/
/*           ctx.drawImage(img, 0, 0, 500, 500);*/
/* */
/*           //effects below:*/
/*           var effect0 = document.getElementById("effect0_canvas");*/
/*           var effect1 = document.getElementById("effect1_canvas");*/
/*           var effect2 = document.getElementById("effect2_canvas");*/
/*           var effect3 = document.getElementById("effect3_canvas");*/
/*           var effect4 = document.getElementById("effect4_canvas");*/
/* */
/*           var ctx_effect0 = effect0.getContext("2d");*/
/*           var ctx_effect1 = effect1.getContext("2d");*/
/*           var ctx_effect2 = effect2.getContext("2d");*/
/*           var ctx_effect3 = effect3.getContext("2d");*/
/*           var ctx_effect4 = effect4.getContext("2d");*/
/* */
/*           effect1.getContext('2d').filter = 'blur(2px) opacity(60%)';*/
/*           effect2.getContext('2d').filter = 'invert(30%)';*/
/*           effect3.getContext('2d').filter = 'saturate(76%)';*/
/*           effect4.getContext('2d').filter = 'sepia(83%)';*/
/* */
/*           var img_scale = document.getElementById("pic_to_redraw_scale");*/
/*           ctx_effect0.drawImage(img_scale, 0, 0, 100, 100);*/
/*           ctx_effect1.drawImage(img_scale, 0, 0, 100, 100);*/
/*           ctx_effect2.drawImage(img_scale, 0, 0, 100, 100);*/
/*           ctx_effect3.drawImage(img_scale, 0, 0, 100, 100);*/
/*           ctx_effect4.drawImage(img_scale, 0, 0, 100, 100);*/
/* */
/*       };*/
/* */
/*       function clear_effects()*/
/*       {*/
/*         cnv = document.getElementById("edit_picture_cnv");*/
/*         ctx = cnv.getContext("2d");*/
/*         img = document.getElementById("pic_to_redraw");*/
/*         ctx.drawImage(img, 0, 0, 500, 500);*/
/*       }*/
/* */
/*       function apply_effect1()*/
/*       {*/
/*         cnv = document.getElementById("edit_picture_cnv");*/
/*         ctx = cnv.getContext("2d");*/
/*         img = document.getElementById("pic_to_redraw");*/
/*         cnv.getContext('2d').filter = 'blur(5px) opacity(60%)';*/
/*         ctx.drawImage(img, 0, 0, 500, 500);*/
/*       }*/
/* */
/*       function apply_effect2()*/
/*       {*/
/*         cnv = document.getElementById("edit_picture_cnv");*/
/*         ctx = cnv.getContext("2d");*/
/*         img = document.getElementById("pic_to_redraw");*/
/*         cnv.getContext('2d').filter = 'invert(30%)';*/
/*         ctx.drawImage(img, 0, 0, 500, 500);*/
/*       }*/
/* */
/*       function apply_effect3()*/
/*       {*/
/*         cnv = document.getElementById("edit_picture_cnv");*/
/*         ctx = cnv.getContext("2d");*/
/*         img = document.getElementById("pic_to_redraw");*/
/*         cnv.getContext('2d').filter = 'saturate(76%)';*/
/*         ctx.drawImage(img, 0, 0, 500, 500);*/
/*       }*/
/* */
/*       function apply_effect4()*/
/*       {*/
/*         cnv = document.getElementById("edit_picture_cnv");*/
/*         ctx = cnv.getContext("2d");*/
/*         img = document.getElementById("pic_to_redraw");*/
/*         cnv.getContext('2d').filter = 'sepia(83%)';*/
/*         ctx.drawImage(img, 0, 0, 500, 500);*/
/*       }*/
/* */
/*       function save()*/
/*       {*/
/*         var canvasData = canvasElement.toDataURL("image/png");*/
/*         $.ajax({*/
/*         url:'save_edited.php', */
/*         type:'POST', */
/*         data:{*/
/*         data:canvasData*/
/*         }*/
/*         });*/
/*       }*/
/* */
/*       $( document ).ready(function() {*/
/*         $(".owl-carousel").owlCarousel();*/
/*         $('.owl-carousel').owlCarousel({*/
/*         stagePadding: 50,*/
/*         loop:true,*/
/*         margin:10,*/
/*         nav:true,*/
/*         responsive:{*/
/*             0:{*/
/*                 items:1*/
/*             },*/
/*             600:{*/
/*                 items:3*/
/*             },*/
/*             1000:{*/
/*                 items:5*/
/*             }*/
/*         }*/
/*       });*/
/*       });*/
/* */
/*     </script>*/
/* </html>*/
/* */
