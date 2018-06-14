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
        $__internal_c5496285c48c28f5c31f460d2ca4985d933e0752c3fe84c081fcb275a4f36868 = $this->env->getExtension("native_profiler");
        $__internal_c5496285c48c28f5c31f460d2ca4985d933e0752c3fe84c081fcb275a4f36868->enter($__internal_c5496285c48c28f5c31f460d2ca4985d933e0752c3fe84c081fcb275a4f36868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5496285c48c28f5c31f460d2ca4985d933e0752c3fe84c081fcb275a4f36868->leave($__internal_c5496285c48c28f5c31f460d2ca4985d933e0752c3fe84c081fcb275a4f36868_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f919f6c434eeb4ee0f669794c30caa60fbbd63d765631d2ae5d667ab20d1f11d = $this->env->getExtension("native_profiler");
        $__internal_f919f6c434eeb4ee0f669794c30caa60fbbd63d765631d2ae5d667ab20d1f11d->enter($__internal_f919f6c434eeb4ee0f669794c30caa60fbbd63d765631d2ae5d667ab20d1f11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f919f6c434eeb4ee0f669794c30caa60fbbd63d765631d2ae5d667ab20d1f11d->leave($__internal_f919f6c434eeb4ee0f669794c30caa60fbbd63d765631d2ae5d667ab20d1f11d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d061c35da833686cde25e976c6982aa630b1db0d90c7b571d78034d8cb3d9bbb = $this->env->getExtension("native_profiler");
        $__internal_d061c35da833686cde25e976c6982aa630b1db0d90c7b571d78034d8cb3d9bbb->enter($__internal_d061c35da833686cde25e976c6982aa630b1db0d90c7b571d78034d8cb3d9bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d061c35da833686cde25e976c6982aa630b1db0d90c7b571d78034d8cb3d9bbb->leave($__internal_d061c35da833686cde25e976c6982aa630b1db0d90c7b571d78034d8cb3d9bbb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d0ba3b4cc8de8c4a908cb55f7966127fe98df177422b548bfe5bf9e831832668 = $this->env->getExtension("native_profiler");
        $__internal_d0ba3b4cc8de8c4a908cb55f7966127fe98df177422b548bfe5bf9e831832668->enter($__internal_d0ba3b4cc8de8c4a908cb55f7966127fe98df177422b548bfe5bf9e831832668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d0ba3b4cc8de8c4a908cb55f7966127fe98df177422b548bfe5bf9e831832668->leave($__internal_d0ba3b4cc8de8c4a908cb55f7966127fe98df177422b548bfe5bf9e831832668_prof);

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
