<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_36995cee03f25d6a5b7e3251bdbc7fc02537aef1753393ac2afe9f4229dadc3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ca31efe29a1b180d2bbb59b7ddc8367e4372579fac03beb62b1812cba95f0794 = $this->env->getExtension("native_profiler");
        $__internal_ca31efe29a1b180d2bbb59b7ddc8367e4372579fac03beb62b1812cba95f0794->enter($__internal_ca31efe29a1b180d2bbb59b7ddc8367e4372579fac03beb62b1812cba95f0794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca31efe29a1b180d2bbb59b7ddc8367e4372579fac03beb62b1812cba95f0794->leave($__internal_ca31efe29a1b180d2bbb59b7ddc8367e4372579fac03beb62b1812cba95f0794_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e98e878c27dc2a89e8c84ad25d4befb6afc7e1ccd9214d828d92194b047e0bbe = $this->env->getExtension("native_profiler");
        $__internal_e98e878c27dc2a89e8c84ad25d4befb6afc7e1ccd9214d828d92194b047e0bbe->enter($__internal_e98e878c27dc2a89e8c84ad25d4befb6afc7e1ccd9214d828d92194b047e0bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e98e878c27dc2a89e8c84ad25d4befb6afc7e1ccd9214d828d92194b047e0bbe->leave($__internal_e98e878c27dc2a89e8c84ad25d4befb6afc7e1ccd9214d828d92194b047e0bbe_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ae5f4eb156280305a1cea6a6f9beff46fb115d68c3da30edc7123f546c629a40 = $this->env->getExtension("native_profiler");
        $__internal_ae5f4eb156280305a1cea6a6f9beff46fb115d68c3da30edc7123f546c629a40->enter($__internal_ae5f4eb156280305a1cea6a6f9beff46fb115d68c3da30edc7123f546c629a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ae5f4eb156280305a1cea6a6f9beff46fb115d68c3da30edc7123f546c629a40->leave($__internal_ae5f4eb156280305a1cea6a6f9beff46fb115d68c3da30edc7123f546c629a40_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ceac3dc694cb21ce7174d57692016a8049e6dc7d9ded76166e9d36f8c0cc5b9a = $this->env->getExtension("native_profiler");
        $__internal_ceac3dc694cb21ce7174d57692016a8049e6dc7d9ded76166e9d36f8c0cc5b9a->enter($__internal_ceac3dc694cb21ce7174d57692016a8049e6dc7d9ded76166e9d36f8c0cc5b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ceac3dc694cb21ce7174d57692016a8049e6dc7d9ded76166e9d36f8c0cc5b9a->leave($__internal_ceac3dc694cb21ce7174d57692016a8049e6dc7d9ded76166e9d36f8c0cc5b9a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
