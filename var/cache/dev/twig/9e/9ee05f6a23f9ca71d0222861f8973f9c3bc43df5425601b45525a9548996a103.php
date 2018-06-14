<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_f7bf45d36eba180590ef0de816c9021fb796f8cc608b629b34cfd49d98ea2573 extends Twig_Template
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
        $__internal_537305cc1e4df2b4677c0a86c3fd035b708ddaa845e9113cda6cfc7e73b5a05b = $this->env->getExtension("native_profiler");
        $__internal_537305cc1e4df2b4677c0a86c3fd035b708ddaa845e9113cda6cfc7e73b5a05b->enter($__internal_537305cc1e4df2b4677c0a86c3fd035b708ddaa845e9113cda6cfc7e73b5a05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_537305cc1e4df2b4677c0a86c3fd035b708ddaa845e9113cda6cfc7e73b5a05b->leave($__internal_537305cc1e4df2b4677c0a86c3fd035b708ddaa845e9113cda6cfc7e73b5a05b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
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
