<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_694dfe10b8ceef7523a96c5aa26e928761742e111434950aaefef91251a0c3a8 extends Twig_Template
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
        $__internal_562177fb1094a3592c41b29adfdc819556d9f6b769a8b21f71a7d549ba2a4735 = $this->env->getExtension("native_profiler");
        $__internal_562177fb1094a3592c41b29adfdc819556d9f6b769a8b21f71a7d549ba2a4735->enter($__internal_562177fb1094a3592c41b29adfdc819556d9f6b769a8b21f71a7d549ba2a4735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_562177fb1094a3592c41b29adfdc819556d9f6b769a8b21f71a7d549ba2a4735->leave($__internal_562177fb1094a3592c41b29adfdc819556d9f6b769a8b21f71a7d549ba2a4735_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e37411aee4ff8d966c362b2b8dd4dc4a262740cd8f64ca2cf61a9fe119ae0749 = $this->env->getExtension("native_profiler");
        $__internal_e37411aee4ff8d966c362b2b8dd4dc4a262740cd8f64ca2cf61a9fe119ae0749->enter($__internal_e37411aee4ff8d966c362b2b8dd4dc4a262740cd8f64ca2cf61a9fe119ae0749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e37411aee4ff8d966c362b2b8dd4dc4a262740cd8f64ca2cf61a9fe119ae0749->leave($__internal_e37411aee4ff8d966c362b2b8dd4dc4a262740cd8f64ca2cf61a9fe119ae0749_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e08af97c3316700063b64ea7c8c66744b1201abf3e2f9edad40e258a2e93f72 = $this->env->getExtension("native_profiler");
        $__internal_8e08af97c3316700063b64ea7c8c66744b1201abf3e2f9edad40e258a2e93f72->enter($__internal_8e08af97c3316700063b64ea7c8c66744b1201abf3e2f9edad40e258a2e93f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8e08af97c3316700063b64ea7c8c66744b1201abf3e2f9edad40e258a2e93f72->leave($__internal_8e08af97c3316700063b64ea7c8c66744b1201abf3e2f9edad40e258a2e93f72_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4cc0098e051cce369cdaceee97da16fcfe2ae91e887733cb100e35494f6932f2 = $this->env->getExtension("native_profiler");
        $__internal_4cc0098e051cce369cdaceee97da16fcfe2ae91e887733cb100e35494f6932f2->enter($__internal_4cc0098e051cce369cdaceee97da16fcfe2ae91e887733cb100e35494f6932f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4cc0098e051cce369cdaceee97da16fcfe2ae91e887733cb100e35494f6932f2->leave($__internal_4cc0098e051cce369cdaceee97da16fcfe2ae91e887733cb100e35494f6932f2_prof);

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
