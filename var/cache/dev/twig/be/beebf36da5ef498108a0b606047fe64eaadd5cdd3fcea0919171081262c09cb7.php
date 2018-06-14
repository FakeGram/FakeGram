<?php

/* base.html.twig */
class __TwigTemplate_717a42b9afb939a4253bfa919feee013f04d0154e70873a9185af62ded0afa93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8684ffba32ffe83ec9805fcfb1113a03296413772b6d449e451c6f6e382264a6 = $this->env->getExtension("native_profiler");
        $__internal_8684ffba32ffe83ec9805fcfb1113a03296413772b6d449e451c6f6e382264a6->enter($__internal_8684ffba32ffe83ec9805fcfb1113a03296413772b6d449e451c6f6e382264a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8684ffba32ffe83ec9805fcfb1113a03296413772b6d449e451c6f6e382264a6->leave($__internal_8684ffba32ffe83ec9805fcfb1113a03296413772b6d449e451c6f6e382264a6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_742b33374ddff6779a2503c8515cdf2d3d08ac8d46486322c8c7c5d7c13cdd71 = $this->env->getExtension("native_profiler");
        $__internal_742b33374ddff6779a2503c8515cdf2d3d08ac8d46486322c8c7c5d7c13cdd71->enter($__internal_742b33374ddff6779a2503c8515cdf2d3d08ac8d46486322c8c7c5d7c13cdd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_742b33374ddff6779a2503c8515cdf2d3d08ac8d46486322c8c7c5d7c13cdd71->leave($__internal_742b33374ddff6779a2503c8515cdf2d3d08ac8d46486322c8c7c5d7c13cdd71_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1d220fdc4aef2a81ab4d5fac04f53daaa50db0dd8a8d5ea06fb139bb127e12ef = $this->env->getExtension("native_profiler");
        $__internal_1d220fdc4aef2a81ab4d5fac04f53daaa50db0dd8a8d5ea06fb139bb127e12ef->enter($__internal_1d220fdc4aef2a81ab4d5fac04f53daaa50db0dd8a8d5ea06fb139bb127e12ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1d220fdc4aef2a81ab4d5fac04f53daaa50db0dd8a8d5ea06fb139bb127e12ef->leave($__internal_1d220fdc4aef2a81ab4d5fac04f53daaa50db0dd8a8d5ea06fb139bb127e12ef_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a28e7fcf29d6969e3994da3a13ee6bf11b6b0ae828d5f6834cbe5cbd38c01bde = $this->env->getExtension("native_profiler");
        $__internal_a28e7fcf29d6969e3994da3a13ee6bf11b6b0ae828d5f6834cbe5cbd38c01bde->enter($__internal_a28e7fcf29d6969e3994da3a13ee6bf11b6b0ae828d5f6834cbe5cbd38c01bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a28e7fcf29d6969e3994da3a13ee6bf11b6b0ae828d5f6834cbe5cbd38c01bde->leave($__internal_a28e7fcf29d6969e3994da3a13ee6bf11b6b0ae828d5f6834cbe5cbd38c01bde_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2979763065415dd7a9941c858164c249a1590cb0e3a2ba7a6f1f813bbae57507 = $this->env->getExtension("native_profiler");
        $__internal_2979763065415dd7a9941c858164c249a1590cb0e3a2ba7a6f1f813bbae57507->enter($__internal_2979763065415dd7a9941c858164c249a1590cb0e3a2ba7a6f1f813bbae57507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2979763065415dd7a9941c858164c249a1590cb0e3a2ba7a6f1f813bbae57507->leave($__internal_2979763065415dd7a9941c858164c249a1590cb0e3a2ba7a6f1f813bbae57507_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
