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
        $__internal_fb3fe218699a9f1c96a66677568d7825f440b115377490e159171f38f163fe18 = $this->env->getExtension("native_profiler");
        $__internal_fb3fe218699a9f1c96a66677568d7825f440b115377490e159171f38f163fe18->enter($__internal_fb3fe218699a9f1c96a66677568d7825f440b115377490e159171f38f163fe18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb3fe218699a9f1c96a66677568d7825f440b115377490e159171f38f163fe18->leave($__internal_fb3fe218699a9f1c96a66677568d7825f440b115377490e159171f38f163fe18_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b999a81e3c575a4b6f3e4e80870d54c267ed80455d3889e8b9c47f8882a9f354 = $this->env->getExtension("native_profiler");
        $__internal_b999a81e3c575a4b6f3e4e80870d54c267ed80455d3889e8b9c47f8882a9f354->enter($__internal_b999a81e3c575a4b6f3e4e80870d54c267ed80455d3889e8b9c47f8882a9f354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b999a81e3c575a4b6f3e4e80870d54c267ed80455d3889e8b9c47f8882a9f354->leave($__internal_b999a81e3c575a4b6f3e4e80870d54c267ed80455d3889e8b9c47f8882a9f354_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9f35e9d4d5c739fb2c731ee01e4f91b92c0febfda02f49e5a28d3fac0354cecb = $this->env->getExtension("native_profiler");
        $__internal_9f35e9d4d5c739fb2c731ee01e4f91b92c0febfda02f49e5a28d3fac0354cecb->enter($__internal_9f35e9d4d5c739fb2c731ee01e4f91b92c0febfda02f49e5a28d3fac0354cecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9f35e9d4d5c739fb2c731ee01e4f91b92c0febfda02f49e5a28d3fac0354cecb->leave($__internal_9f35e9d4d5c739fb2c731ee01e4f91b92c0febfda02f49e5a28d3fac0354cecb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_38773b52c860cf6190401071062f0fa6f194e0f344383f53f8ac1bb58fb04c31 = $this->env->getExtension("native_profiler");
        $__internal_38773b52c860cf6190401071062f0fa6f194e0f344383f53f8ac1bb58fb04c31->enter($__internal_38773b52c860cf6190401071062f0fa6f194e0f344383f53f8ac1bb58fb04c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_38773b52c860cf6190401071062f0fa6f194e0f344383f53f8ac1bb58fb04c31->leave($__internal_38773b52c860cf6190401071062f0fa6f194e0f344383f53f8ac1bb58fb04c31_prof);

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
