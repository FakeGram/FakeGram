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
        $__internal_fc85b2c7b4d6d44079762422d5b6353e959b6abc9b34a2eb89c2a06f52d58215 = $this->env->getExtension("native_profiler");
        $__internal_fc85b2c7b4d6d44079762422d5b6353e959b6abc9b34a2eb89c2a06f52d58215->enter($__internal_fc85b2c7b4d6d44079762422d5b6353e959b6abc9b34a2eb89c2a06f52d58215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc85b2c7b4d6d44079762422d5b6353e959b6abc9b34a2eb89c2a06f52d58215->leave($__internal_fc85b2c7b4d6d44079762422d5b6353e959b6abc9b34a2eb89c2a06f52d58215_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_35007a6e58724cb6e96d40ce669889cfec0e6753363ee4dde9ca596caf7022ef = $this->env->getExtension("native_profiler");
        $__internal_35007a6e58724cb6e96d40ce669889cfec0e6753363ee4dde9ca596caf7022ef->enter($__internal_35007a6e58724cb6e96d40ce669889cfec0e6753363ee4dde9ca596caf7022ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_35007a6e58724cb6e96d40ce669889cfec0e6753363ee4dde9ca596caf7022ef->leave($__internal_35007a6e58724cb6e96d40ce669889cfec0e6753363ee4dde9ca596caf7022ef_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_35e3f7124fb8445bfc78372a297da121e8bcb1bcab5f735aa2ac871dbdd6446c = $this->env->getExtension("native_profiler");
        $__internal_35e3f7124fb8445bfc78372a297da121e8bcb1bcab5f735aa2ac871dbdd6446c->enter($__internal_35e3f7124fb8445bfc78372a297da121e8bcb1bcab5f735aa2ac871dbdd6446c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_35e3f7124fb8445bfc78372a297da121e8bcb1bcab5f735aa2ac871dbdd6446c->leave($__internal_35e3f7124fb8445bfc78372a297da121e8bcb1bcab5f735aa2ac871dbdd6446c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d837dddfe04d08f4002c14c2c2590e55599005df0c21c1fcae8d447a2f4ff68 = $this->env->getExtension("native_profiler");
        $__internal_5d837dddfe04d08f4002c14c2c2590e55599005df0c21c1fcae8d447a2f4ff68->enter($__internal_5d837dddfe04d08f4002c14c2c2590e55599005df0c21c1fcae8d447a2f4ff68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5d837dddfe04d08f4002c14c2c2590e55599005df0c21c1fcae8d447a2f4ff68->leave($__internal_5d837dddfe04d08f4002c14c2c2590e55599005df0c21c1fcae8d447a2f4ff68_prof);

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
