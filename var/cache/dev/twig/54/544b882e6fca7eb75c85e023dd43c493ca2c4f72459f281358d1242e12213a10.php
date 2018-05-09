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
        $__internal_5658e60f755b5f3f1a9274c853419ac3d9496f59b478a6ac507b8539f107c256 = $this->env->getExtension("native_profiler");
        $__internal_5658e60f755b5f3f1a9274c853419ac3d9496f59b478a6ac507b8539f107c256->enter($__internal_5658e60f755b5f3f1a9274c853419ac3d9496f59b478a6ac507b8539f107c256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5658e60f755b5f3f1a9274c853419ac3d9496f59b478a6ac507b8539f107c256->leave($__internal_5658e60f755b5f3f1a9274c853419ac3d9496f59b478a6ac507b8539f107c256_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fe0b6acb52efcab17d4a83f600bcb7bbc421a89654d051ca3e509e5c6f4bf912 = $this->env->getExtension("native_profiler");
        $__internal_fe0b6acb52efcab17d4a83f600bcb7bbc421a89654d051ca3e509e5c6f4bf912->enter($__internal_fe0b6acb52efcab17d4a83f600bcb7bbc421a89654d051ca3e509e5c6f4bf912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fe0b6acb52efcab17d4a83f600bcb7bbc421a89654d051ca3e509e5c6f4bf912->leave($__internal_fe0b6acb52efcab17d4a83f600bcb7bbc421a89654d051ca3e509e5c6f4bf912_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4018079088575234465f5097fd247ce108178ac1027616e94d6bc71d8c84ef41 = $this->env->getExtension("native_profiler");
        $__internal_4018079088575234465f5097fd247ce108178ac1027616e94d6bc71d8c84ef41->enter($__internal_4018079088575234465f5097fd247ce108178ac1027616e94d6bc71d8c84ef41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4018079088575234465f5097fd247ce108178ac1027616e94d6bc71d8c84ef41->leave($__internal_4018079088575234465f5097fd247ce108178ac1027616e94d6bc71d8c84ef41_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d76d5d13426e185b2ebb1b75ba424a84cf755a4e4c728856707de8d7e0409774 = $this->env->getExtension("native_profiler");
        $__internal_d76d5d13426e185b2ebb1b75ba424a84cf755a4e4c728856707de8d7e0409774->enter($__internal_d76d5d13426e185b2ebb1b75ba424a84cf755a4e4c728856707de8d7e0409774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d76d5d13426e185b2ebb1b75ba424a84cf755a4e4c728856707de8d7e0409774->leave($__internal_d76d5d13426e185b2ebb1b75ba424a84cf755a4e4c728856707de8d7e0409774_prof);

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
