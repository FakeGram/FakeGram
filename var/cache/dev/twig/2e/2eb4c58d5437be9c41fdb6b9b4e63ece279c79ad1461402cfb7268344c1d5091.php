<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_332c9aa7e9da34c303933d9083388c694ba78905890aa22d2f8ed09b3b3a076d extends Twig_Template
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
        $__internal_141333c16bca3374c6638377f388d57419f4a868ef5f298a9ab6991ba2cc10f6 = $this->env->getExtension("native_profiler");
        $__internal_141333c16bca3374c6638377f388d57419f4a868ef5f298a9ab6991ba2cc10f6->enter($__internal_141333c16bca3374c6638377f388d57419f4a868ef5f298a9ab6991ba2cc10f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_141333c16bca3374c6638377f388d57419f4a868ef5f298a9ab6991ba2cc10f6->leave($__internal_141333c16bca3374c6638377f388d57419f4a868ef5f298a9ab6991ba2cc10f6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_be5d8fb037557bb7b7a912db78a37bb3435e7391c159c2887302ac0a544a4769 = $this->env->getExtension("native_profiler");
        $__internal_be5d8fb037557bb7b7a912db78a37bb3435e7391c159c2887302ac0a544a4769->enter($__internal_be5d8fb037557bb7b7a912db78a37bb3435e7391c159c2887302ac0a544a4769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_be5d8fb037557bb7b7a912db78a37bb3435e7391c159c2887302ac0a544a4769->leave($__internal_be5d8fb037557bb7b7a912db78a37bb3435e7391c159c2887302ac0a544a4769_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9413120636344a134213c5245e66f4caf5a7e32e8c07a8397921069126e7e010 = $this->env->getExtension("native_profiler");
        $__internal_9413120636344a134213c5245e66f4caf5a7e32e8c07a8397921069126e7e010->enter($__internal_9413120636344a134213c5245e66f4caf5a7e32e8c07a8397921069126e7e010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9413120636344a134213c5245e66f4caf5a7e32e8c07a8397921069126e7e010->leave($__internal_9413120636344a134213c5245e66f4caf5a7e32e8c07a8397921069126e7e010_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_89b898df4bb87c2e4228a6c9058742ab5464fe5eb2289608761e6d47a3b3e449 = $this->env->getExtension("native_profiler");
        $__internal_89b898df4bb87c2e4228a6c9058742ab5464fe5eb2289608761e6d47a3b3e449->enter($__internal_89b898df4bb87c2e4228a6c9058742ab5464fe5eb2289608761e6d47a3b3e449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_89b898df4bb87c2e4228a6c9058742ab5464fe5eb2289608761e6d47a3b3e449->leave($__internal_89b898df4bb87c2e4228a6c9058742ab5464fe5eb2289608761e6d47a3b3e449_prof);

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
