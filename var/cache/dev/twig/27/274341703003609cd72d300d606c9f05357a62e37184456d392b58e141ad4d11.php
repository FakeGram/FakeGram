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
        $__internal_0ec35e03aba5c42edb11f78a93b41b82b79e318fd1b0a9af4ab469dbd8915137 = $this->env->getExtension("native_profiler");
        $__internal_0ec35e03aba5c42edb11f78a93b41b82b79e318fd1b0a9af4ab469dbd8915137->enter($__internal_0ec35e03aba5c42edb11f78a93b41b82b79e318fd1b0a9af4ab469dbd8915137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ec35e03aba5c42edb11f78a93b41b82b79e318fd1b0a9af4ab469dbd8915137->leave($__internal_0ec35e03aba5c42edb11f78a93b41b82b79e318fd1b0a9af4ab469dbd8915137_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c2706260e4d74da1eb33e8d8873e3f217bd82a58a59e106684d70533af51ff92 = $this->env->getExtension("native_profiler");
        $__internal_c2706260e4d74da1eb33e8d8873e3f217bd82a58a59e106684d70533af51ff92->enter($__internal_c2706260e4d74da1eb33e8d8873e3f217bd82a58a59e106684d70533af51ff92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c2706260e4d74da1eb33e8d8873e3f217bd82a58a59e106684d70533af51ff92->leave($__internal_c2706260e4d74da1eb33e8d8873e3f217bd82a58a59e106684d70533af51ff92_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c578660fa4cdb9fa93dbafac3d9b9ad78df0b54104b7badfdb6a843e69d5a60d = $this->env->getExtension("native_profiler");
        $__internal_c578660fa4cdb9fa93dbafac3d9b9ad78df0b54104b7badfdb6a843e69d5a60d->enter($__internal_c578660fa4cdb9fa93dbafac3d9b9ad78df0b54104b7badfdb6a843e69d5a60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c578660fa4cdb9fa93dbafac3d9b9ad78df0b54104b7badfdb6a843e69d5a60d->leave($__internal_c578660fa4cdb9fa93dbafac3d9b9ad78df0b54104b7badfdb6a843e69d5a60d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f8fc35a8a10b1552063d943882eb5ae724419074596a8ca01082057e2163a5b = $this->env->getExtension("native_profiler");
        $__internal_9f8fc35a8a10b1552063d943882eb5ae724419074596a8ca01082057e2163a5b->enter($__internal_9f8fc35a8a10b1552063d943882eb5ae724419074596a8ca01082057e2163a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9f8fc35a8a10b1552063d943882eb5ae724419074596a8ca01082057e2163a5b->leave($__internal_9f8fc35a8a10b1552063d943882eb5ae724419074596a8ca01082057e2163a5b_prof);

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
