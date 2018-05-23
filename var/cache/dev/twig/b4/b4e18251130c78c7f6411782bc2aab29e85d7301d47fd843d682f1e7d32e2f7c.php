<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3680af5ad81fd3a82ffe492a900957127a3ab9a5dd1852662321ceea25349c5d extends Twig_Template
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
        $__internal_172f1bbc248229fd547ab922f027a42759444235ce954bd4bdf60e33248b5240 = $this->env->getExtension("native_profiler");
        $__internal_172f1bbc248229fd547ab922f027a42759444235ce954bd4bdf60e33248b5240->enter($__internal_172f1bbc248229fd547ab922f027a42759444235ce954bd4bdf60e33248b5240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_172f1bbc248229fd547ab922f027a42759444235ce954bd4bdf60e33248b5240->leave($__internal_172f1bbc248229fd547ab922f027a42759444235ce954bd4bdf60e33248b5240_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e4377936a2f6fbf4077f7ce3ea4b135e295863e013165dd96c92d869ddfd24c3 = $this->env->getExtension("native_profiler");
        $__internal_e4377936a2f6fbf4077f7ce3ea4b135e295863e013165dd96c92d869ddfd24c3->enter($__internal_e4377936a2f6fbf4077f7ce3ea4b135e295863e013165dd96c92d869ddfd24c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e4377936a2f6fbf4077f7ce3ea4b135e295863e013165dd96c92d869ddfd24c3->leave($__internal_e4377936a2f6fbf4077f7ce3ea4b135e295863e013165dd96c92d869ddfd24c3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_806dcb8d52dc0297def62f376e771e9b3eddd68ee64cd045afc8bf2564fba910 = $this->env->getExtension("native_profiler");
        $__internal_806dcb8d52dc0297def62f376e771e9b3eddd68ee64cd045afc8bf2564fba910->enter($__internal_806dcb8d52dc0297def62f376e771e9b3eddd68ee64cd045afc8bf2564fba910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_806dcb8d52dc0297def62f376e771e9b3eddd68ee64cd045afc8bf2564fba910->leave($__internal_806dcb8d52dc0297def62f376e771e9b3eddd68ee64cd045afc8bf2564fba910_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_15a883b239897e5d8c2b3955c820293e1d775e308eb77acdd84dcb4dc94eb8a3 = $this->env->getExtension("native_profiler");
        $__internal_15a883b239897e5d8c2b3955c820293e1d775e308eb77acdd84dcb4dc94eb8a3->enter($__internal_15a883b239897e5d8c2b3955c820293e1d775e308eb77acdd84dcb4dc94eb8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_15a883b239897e5d8c2b3955c820293e1d775e308eb77acdd84dcb4dc94eb8a3->leave($__internal_15a883b239897e5d8c2b3955c820293e1d775e308eb77acdd84dcb4dc94eb8a3_prof);

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
