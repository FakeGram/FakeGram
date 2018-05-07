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
        $__internal_72b5971ceb9ad0f9af0aec4a05d41acc7a601df5b33f2207a72015d3ff332d6b = $this->env->getExtension("native_profiler");
        $__internal_72b5971ceb9ad0f9af0aec4a05d41acc7a601df5b33f2207a72015d3ff332d6b->enter($__internal_72b5971ceb9ad0f9af0aec4a05d41acc7a601df5b33f2207a72015d3ff332d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72b5971ceb9ad0f9af0aec4a05d41acc7a601df5b33f2207a72015d3ff332d6b->leave($__internal_72b5971ceb9ad0f9af0aec4a05d41acc7a601df5b33f2207a72015d3ff332d6b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_14871e32e8f931397013f6d6a23b0538fdf9f1d8f0bb29ba89ad71af11fe855e = $this->env->getExtension("native_profiler");
        $__internal_14871e32e8f931397013f6d6a23b0538fdf9f1d8f0bb29ba89ad71af11fe855e->enter($__internal_14871e32e8f931397013f6d6a23b0538fdf9f1d8f0bb29ba89ad71af11fe855e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_14871e32e8f931397013f6d6a23b0538fdf9f1d8f0bb29ba89ad71af11fe855e->leave($__internal_14871e32e8f931397013f6d6a23b0538fdf9f1d8f0bb29ba89ad71af11fe855e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_18a7536f8aa3ae3e10c9946feb11a3b5c130bd1a5b78f0304336b7538505d42d = $this->env->getExtension("native_profiler");
        $__internal_18a7536f8aa3ae3e10c9946feb11a3b5c130bd1a5b78f0304336b7538505d42d->enter($__internal_18a7536f8aa3ae3e10c9946feb11a3b5c130bd1a5b78f0304336b7538505d42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_18a7536f8aa3ae3e10c9946feb11a3b5c130bd1a5b78f0304336b7538505d42d->leave($__internal_18a7536f8aa3ae3e10c9946feb11a3b5c130bd1a5b78f0304336b7538505d42d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b58793dda24c7e6323391b7992a34289d5acda65a6387f92a63daefbf6344345 = $this->env->getExtension("native_profiler");
        $__internal_b58793dda24c7e6323391b7992a34289d5acda65a6387f92a63daefbf6344345->enter($__internal_b58793dda24c7e6323391b7992a34289d5acda65a6387f92a63daefbf6344345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b58793dda24c7e6323391b7992a34289d5acda65a6387f92a63daefbf6344345->leave($__internal_b58793dda24c7e6323391b7992a34289d5acda65a6387f92a63daefbf6344345_prof);

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
