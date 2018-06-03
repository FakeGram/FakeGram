<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d813b479e6ed0014e2c8ff26e594c63941341dd560f129c4aa8b7b004a61401d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8c5ece487b29ca4ff43686525500a566f3f6047d634f87a3641580a35a0238f = $this->env->getExtension("native_profiler");
        $__internal_c8c5ece487b29ca4ff43686525500a566f3f6047d634f87a3641580a35a0238f->enter($__internal_c8c5ece487b29ca4ff43686525500a566f3f6047d634f87a3641580a35a0238f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8c5ece487b29ca4ff43686525500a566f3f6047d634f87a3641580a35a0238f->leave($__internal_c8c5ece487b29ca4ff43686525500a566f3f6047d634f87a3641580a35a0238f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0289a6b39992f0e783cc28591b4ba959d4d5b8f3dc52372a9a4409758ba5f270 = $this->env->getExtension("native_profiler");
        $__internal_0289a6b39992f0e783cc28591b4ba959d4d5b8f3dc52372a9a4409758ba5f270->enter($__internal_0289a6b39992f0e783cc28591b4ba959d4d5b8f3dc52372a9a4409758ba5f270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0289a6b39992f0e783cc28591b4ba959d4d5b8f3dc52372a9a4409758ba5f270->leave($__internal_0289a6b39992f0e783cc28591b4ba959d4d5b8f3dc52372a9a4409758ba5f270_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e589658e03f8cd1b7b2b748f375c7d0bb61e5d3fbcccd25a8daf31e549a1a36c = $this->env->getExtension("native_profiler");
        $__internal_e589658e03f8cd1b7b2b748f375c7d0bb61e5d3fbcccd25a8daf31e549a1a36c->enter($__internal_e589658e03f8cd1b7b2b748f375c7d0bb61e5d3fbcccd25a8daf31e549a1a36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e589658e03f8cd1b7b2b748f375c7d0bb61e5d3fbcccd25a8daf31e549a1a36c->leave($__internal_e589658e03f8cd1b7b2b748f375c7d0bb61e5d3fbcccd25a8daf31e549a1a36c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_13920a51f27c188d3425e9399723f75bfdca43c7e58f0248edfb014fde3d0341 = $this->env->getExtension("native_profiler");
        $__internal_13920a51f27c188d3425e9399723f75bfdca43c7e58f0248edfb014fde3d0341->enter($__internal_13920a51f27c188d3425e9399723f75bfdca43c7e58f0248edfb014fde3d0341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_13920a51f27c188d3425e9399723f75bfdca43c7e58f0248edfb014fde3d0341->leave($__internal_13920a51f27c188d3425e9399723f75bfdca43c7e58f0248edfb014fde3d0341_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
