<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9e954f5018cce46763a99538a97239841cac1ed48f5975c67972659922535894 extends Twig_Template
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
        $__internal_5a747c19dab54facfe4fad4cbd6aa467612e899054fcc4c2cd73a9005fbd3cee = $this->env->getExtension("native_profiler");
        $__internal_5a747c19dab54facfe4fad4cbd6aa467612e899054fcc4c2cd73a9005fbd3cee->enter($__internal_5a747c19dab54facfe4fad4cbd6aa467612e899054fcc4c2cd73a9005fbd3cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a747c19dab54facfe4fad4cbd6aa467612e899054fcc4c2cd73a9005fbd3cee->leave($__internal_5a747c19dab54facfe4fad4cbd6aa467612e899054fcc4c2cd73a9005fbd3cee_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_342f5e9cb369488eb5c3c6c9afd47808301558db52372202f5f2151213128121 = $this->env->getExtension("native_profiler");
        $__internal_342f5e9cb369488eb5c3c6c9afd47808301558db52372202f5f2151213128121->enter($__internal_342f5e9cb369488eb5c3c6c9afd47808301558db52372202f5f2151213128121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_342f5e9cb369488eb5c3c6c9afd47808301558db52372202f5f2151213128121->leave($__internal_342f5e9cb369488eb5c3c6c9afd47808301558db52372202f5f2151213128121_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ba7e5fdbe96e511613c8e9d7b0f4e85e904fe063f075f1a71cc0817ee2b700cc = $this->env->getExtension("native_profiler");
        $__internal_ba7e5fdbe96e511613c8e9d7b0f4e85e904fe063f075f1a71cc0817ee2b700cc->enter($__internal_ba7e5fdbe96e511613c8e9d7b0f4e85e904fe063f075f1a71cc0817ee2b700cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ba7e5fdbe96e511613c8e9d7b0f4e85e904fe063f075f1a71cc0817ee2b700cc->leave($__internal_ba7e5fdbe96e511613c8e9d7b0f4e85e904fe063f075f1a71cc0817ee2b700cc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_37107110947b8fb26465687c60043c1f2ae1267a4d5768d35d16c62d159ca27e = $this->env->getExtension("native_profiler");
        $__internal_37107110947b8fb26465687c60043c1f2ae1267a4d5768d35d16c62d159ca27e->enter($__internal_37107110947b8fb26465687c60043c1f2ae1267a4d5768d35d16c62d159ca27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_37107110947b8fb26465687c60043c1f2ae1267a4d5768d35d16c62d159ca27e->leave($__internal_37107110947b8fb26465687c60043c1f2ae1267a4d5768d35d16c62d159ca27e_prof);

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
