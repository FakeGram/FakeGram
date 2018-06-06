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
        $__internal_480a790264a1ba9fe54096ed159f997732f82aab17e78939771ed10eed983346 = $this->env->getExtension("native_profiler");
        $__internal_480a790264a1ba9fe54096ed159f997732f82aab17e78939771ed10eed983346->enter($__internal_480a790264a1ba9fe54096ed159f997732f82aab17e78939771ed10eed983346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_480a790264a1ba9fe54096ed159f997732f82aab17e78939771ed10eed983346->leave($__internal_480a790264a1ba9fe54096ed159f997732f82aab17e78939771ed10eed983346_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4805088d4c53a11fdaa2bc9d8398ac41aa171dd87f8c4566cbc9e4b76ceef250 = $this->env->getExtension("native_profiler");
        $__internal_4805088d4c53a11fdaa2bc9d8398ac41aa171dd87f8c4566cbc9e4b76ceef250->enter($__internal_4805088d4c53a11fdaa2bc9d8398ac41aa171dd87f8c4566cbc9e4b76ceef250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4805088d4c53a11fdaa2bc9d8398ac41aa171dd87f8c4566cbc9e4b76ceef250->leave($__internal_4805088d4c53a11fdaa2bc9d8398ac41aa171dd87f8c4566cbc9e4b76ceef250_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d3504e90abda15478a97fdac33c98876a597af0ec19c45031b9d90b82f81e3fb = $this->env->getExtension("native_profiler");
        $__internal_d3504e90abda15478a97fdac33c98876a597af0ec19c45031b9d90b82f81e3fb->enter($__internal_d3504e90abda15478a97fdac33c98876a597af0ec19c45031b9d90b82f81e3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d3504e90abda15478a97fdac33c98876a597af0ec19c45031b9d90b82f81e3fb->leave($__internal_d3504e90abda15478a97fdac33c98876a597af0ec19c45031b9d90b82f81e3fb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fce4740b86bb3f78963befa373b297e192021a2c7e03b13d2c5e6e675cbb5a08 = $this->env->getExtension("native_profiler");
        $__internal_fce4740b86bb3f78963befa373b297e192021a2c7e03b13d2c5e6e675cbb5a08->enter($__internal_fce4740b86bb3f78963befa373b297e192021a2c7e03b13d2c5e6e675cbb5a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fce4740b86bb3f78963befa373b297e192021a2c7e03b13d2c5e6e675cbb5a08->leave($__internal_fce4740b86bb3f78963befa373b297e192021a2c7e03b13d2c5e6e675cbb5a08_prof);

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
