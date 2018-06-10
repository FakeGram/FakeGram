<?php

/* default/index.html.twig */
class __TwigTemplate_e36ba7366dd32db653aee527b3323fae17e7d1a59a238b0e1744ffa2b0057efb extends Twig_Template
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
        $__internal_36f3df516b418a34d64bed0f90aa201384161f96ac8a8f5f8b7ea01ec9594da1 = $this->env->getExtension("native_profiler");
        $__internal_36f3df516b418a34d64bed0f90aa201384161f96ac8a8f5f8b7ea01ec9594da1->enter($__internal_36f3df516b418a34d64bed0f90aa201384161f96ac8a8f5f8b7ea01ec9594da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "default/index.html.twig", 1)->display($context);
        // line 2
        echo "
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

";
        // line 37
        $this->loadTemplate("footer.html.twig", "default/index.html.twig", 37)->display($context);
        
        $__internal_36f3df516b418a34d64bed0f90aa201384161f96ac8a8f5f8b7ea01ec9594da1->leave($__internal_36f3df516b418a34d64bed0f90aa201384161f96ac8a8f5f8b7ea01ec9594da1_prof);

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
        return array (  61 => 37,  24 => 2,  22 => 1,);
    }
}
/* {% include 'header.html.twig' %}*/
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
/* {% include 'footer.html.twig' %}*/
