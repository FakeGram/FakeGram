<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_ac0a6b5bcb66fb9755bf983b636765443652c5c51c36014869625f5a67ce0944 extends Twig_Template
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
        $__internal_fb6eafdd7142e7ad39af6bf8fbdd0d2d18f5111d2cddc66764b1d6800d9125d7 = $this->env->getExtension("native_profiler");
        $__internal_fb6eafdd7142e7ad39af6bf8fbdd0d2d18f5111d2cddc66764b1d6800d9125d7->enter($__internal_fb6eafdd7142e7ad39af6bf8fbdd0d2d18f5111d2cddc66764b1d6800d9125d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_fb6eafdd7142e7ad39af6bf8fbdd0d2d18f5111d2cddc66764b1d6800d9125d7->leave($__internal_fb6eafdd7142e7ad39af6bf8fbdd0d2d18f5111d2cddc66764b1d6800d9125d7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
