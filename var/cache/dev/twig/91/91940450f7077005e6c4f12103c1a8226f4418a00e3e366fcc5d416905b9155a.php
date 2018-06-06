<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c62faf47503bd69e5016f85f4a9de9a98a2e16d3ee4f11f2fa17401eeef3609b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d348ece53f0458b4aa2a22198ba4d64fc40d4c8f136c42cefe4032d17a022511 = $this->env->getExtension("native_profiler");
        $__internal_d348ece53f0458b4aa2a22198ba4d64fc40d4c8f136c42cefe4032d17a022511->enter($__internal_d348ece53f0458b4aa2a22198ba4d64fc40d4c8f136c42cefe4032d17a022511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d348ece53f0458b4aa2a22198ba4d64fc40d4c8f136c42cefe4032d17a022511->leave($__internal_d348ece53f0458b4aa2a22198ba4d64fc40d4c8f136c42cefe4032d17a022511_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a8f6190bd3a032f51386b38db50976f6c15d66714a931710f5993b9556b04ca9 = $this->env->getExtension("native_profiler");
        $__internal_a8f6190bd3a032f51386b38db50976f6c15d66714a931710f5993b9556b04ca9->enter($__internal_a8f6190bd3a032f51386b38db50976f6c15d66714a931710f5993b9556b04ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a8f6190bd3a032f51386b38db50976f6c15d66714a931710f5993b9556b04ca9->leave($__internal_a8f6190bd3a032f51386b38db50976f6c15d66714a931710f5993b9556b04ca9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_67bfc7dee19f3eb96db861001ad23f66a4ba72735891ebca844aef69c97b9dac = $this->env->getExtension("native_profiler");
        $__internal_67bfc7dee19f3eb96db861001ad23f66a4ba72735891ebca844aef69c97b9dac->enter($__internal_67bfc7dee19f3eb96db861001ad23f66a4ba72735891ebca844aef69c97b9dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_67bfc7dee19f3eb96db861001ad23f66a4ba72735891ebca844aef69c97b9dac->leave($__internal_67bfc7dee19f3eb96db861001ad23f66a4ba72735891ebca844aef69c97b9dac_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_84bb9a283cacb7f888a362dab89338739ef83d40f2bbfe0ee10e942933ab0c97 = $this->env->getExtension("native_profiler");
        $__internal_84bb9a283cacb7f888a362dab89338739ef83d40f2bbfe0ee10e942933ab0c97->enter($__internal_84bb9a283cacb7f888a362dab89338739ef83d40f2bbfe0ee10e942933ab0c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_84bb9a283cacb7f888a362dab89338739ef83d40f2bbfe0ee10e942933ab0c97->leave($__internal_84bb9a283cacb7f888a362dab89338739ef83d40f2bbfe0ee10e942933ab0c97_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
