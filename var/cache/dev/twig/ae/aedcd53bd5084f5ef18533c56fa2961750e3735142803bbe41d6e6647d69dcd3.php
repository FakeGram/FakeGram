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
        $__internal_19c66ce685e8dd8627c8b68ebb37a6632d37a8f75e199128e9c5d02a02405b22 = $this->env->getExtension("native_profiler");
        $__internal_19c66ce685e8dd8627c8b68ebb37a6632d37a8f75e199128e9c5d02a02405b22->enter($__internal_19c66ce685e8dd8627c8b68ebb37a6632d37a8f75e199128e9c5d02a02405b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19c66ce685e8dd8627c8b68ebb37a6632d37a8f75e199128e9c5d02a02405b22->leave($__internal_19c66ce685e8dd8627c8b68ebb37a6632d37a8f75e199128e9c5d02a02405b22_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6dc32909d7cd6ddb69294f66d86daae810c960e332383e3cf317d0227fa11211 = $this->env->getExtension("native_profiler");
        $__internal_6dc32909d7cd6ddb69294f66d86daae810c960e332383e3cf317d0227fa11211->enter($__internal_6dc32909d7cd6ddb69294f66d86daae810c960e332383e3cf317d0227fa11211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6dc32909d7cd6ddb69294f66d86daae810c960e332383e3cf317d0227fa11211->leave($__internal_6dc32909d7cd6ddb69294f66d86daae810c960e332383e3cf317d0227fa11211_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0d11f53aae33f085d95576f4c52f3227299380a3e75fc0c0e2b3bec457f4f49c = $this->env->getExtension("native_profiler");
        $__internal_0d11f53aae33f085d95576f4c52f3227299380a3e75fc0c0e2b3bec457f4f49c->enter($__internal_0d11f53aae33f085d95576f4c52f3227299380a3e75fc0c0e2b3bec457f4f49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0d11f53aae33f085d95576f4c52f3227299380a3e75fc0c0e2b3bec457f4f49c->leave($__internal_0d11f53aae33f085d95576f4c52f3227299380a3e75fc0c0e2b3bec457f4f49c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c094299bc343162270649bfbb2c96024bfb026924aa928e5f3153ae70b5d45b = $this->env->getExtension("native_profiler");
        $__internal_1c094299bc343162270649bfbb2c96024bfb026924aa928e5f3153ae70b5d45b->enter($__internal_1c094299bc343162270649bfbb2c96024bfb026924aa928e5f3153ae70b5d45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1c094299bc343162270649bfbb2c96024bfb026924aa928e5f3153ae70b5d45b->leave($__internal_1c094299bc343162270649bfbb2c96024bfb026924aa928e5f3153ae70b5d45b_prof);

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
