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
        $__internal_c897a18fd77690b7c1be56c4986b0090b8006a2db99fa9ded51c35d4beea1e22 = $this->env->getExtension("native_profiler");
        $__internal_c897a18fd77690b7c1be56c4986b0090b8006a2db99fa9ded51c35d4beea1e22->enter($__internal_c897a18fd77690b7c1be56c4986b0090b8006a2db99fa9ded51c35d4beea1e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c897a18fd77690b7c1be56c4986b0090b8006a2db99fa9ded51c35d4beea1e22->leave($__internal_c897a18fd77690b7c1be56c4986b0090b8006a2db99fa9ded51c35d4beea1e22_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9b98bf2090f13172e068d417f3220fe5a59f68888d185fc7c3fd1c5af4d1fdfb = $this->env->getExtension("native_profiler");
        $__internal_9b98bf2090f13172e068d417f3220fe5a59f68888d185fc7c3fd1c5af4d1fdfb->enter($__internal_9b98bf2090f13172e068d417f3220fe5a59f68888d185fc7c3fd1c5af4d1fdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9b98bf2090f13172e068d417f3220fe5a59f68888d185fc7c3fd1c5af4d1fdfb->leave($__internal_9b98bf2090f13172e068d417f3220fe5a59f68888d185fc7c3fd1c5af4d1fdfb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2fd610b49a3adbd6142cdb61ef7b5d5ca12d4f46adc7c69127023aabf0ffbc7e = $this->env->getExtension("native_profiler");
        $__internal_2fd610b49a3adbd6142cdb61ef7b5d5ca12d4f46adc7c69127023aabf0ffbc7e->enter($__internal_2fd610b49a3adbd6142cdb61ef7b5d5ca12d4f46adc7c69127023aabf0ffbc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2fd610b49a3adbd6142cdb61ef7b5d5ca12d4f46adc7c69127023aabf0ffbc7e->leave($__internal_2fd610b49a3adbd6142cdb61ef7b5d5ca12d4f46adc7c69127023aabf0ffbc7e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_96e842e091d3583adbf9e25a60b6bcf5669ab28fda1ae175a345d7d80cc84098 = $this->env->getExtension("native_profiler");
        $__internal_96e842e091d3583adbf9e25a60b6bcf5669ab28fda1ae175a345d7d80cc84098->enter($__internal_96e842e091d3583adbf9e25a60b6bcf5669ab28fda1ae175a345d7d80cc84098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_96e842e091d3583adbf9e25a60b6bcf5669ab28fda1ae175a345d7d80cc84098->leave($__internal_96e842e091d3583adbf9e25a60b6bcf5669ab28fda1ae175a345d7d80cc84098_prof);

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
