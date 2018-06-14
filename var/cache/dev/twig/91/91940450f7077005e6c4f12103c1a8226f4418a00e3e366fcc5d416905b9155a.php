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
        $__internal_fb56a660d36cc58345701cc737ec7f226dab8a176ebc08dabf79e14cdba2403d = $this->env->getExtension("native_profiler");
        $__internal_fb56a660d36cc58345701cc737ec7f226dab8a176ebc08dabf79e14cdba2403d->enter($__internal_fb56a660d36cc58345701cc737ec7f226dab8a176ebc08dabf79e14cdba2403d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb56a660d36cc58345701cc737ec7f226dab8a176ebc08dabf79e14cdba2403d->leave($__internal_fb56a660d36cc58345701cc737ec7f226dab8a176ebc08dabf79e14cdba2403d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_99d5c34cb561ab0d5f6f6e88337819b95a2ebcde3a18780905444b9698814db8 = $this->env->getExtension("native_profiler");
        $__internal_99d5c34cb561ab0d5f6f6e88337819b95a2ebcde3a18780905444b9698814db8->enter($__internal_99d5c34cb561ab0d5f6f6e88337819b95a2ebcde3a18780905444b9698814db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_99d5c34cb561ab0d5f6f6e88337819b95a2ebcde3a18780905444b9698814db8->leave($__internal_99d5c34cb561ab0d5f6f6e88337819b95a2ebcde3a18780905444b9698814db8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_75a7df96ba90e056b6c0e3bdd1ba7fe6270677b0ac44c4af484be72b445e7ce1 = $this->env->getExtension("native_profiler");
        $__internal_75a7df96ba90e056b6c0e3bdd1ba7fe6270677b0ac44c4af484be72b445e7ce1->enter($__internal_75a7df96ba90e056b6c0e3bdd1ba7fe6270677b0ac44c4af484be72b445e7ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_75a7df96ba90e056b6c0e3bdd1ba7fe6270677b0ac44c4af484be72b445e7ce1->leave($__internal_75a7df96ba90e056b6c0e3bdd1ba7fe6270677b0ac44c4af484be72b445e7ce1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_54f77a4891e2b02776b08690a03ff039fc363c018672b3448e1646839cc1bac0 = $this->env->getExtension("native_profiler");
        $__internal_54f77a4891e2b02776b08690a03ff039fc363c018672b3448e1646839cc1bac0->enter($__internal_54f77a4891e2b02776b08690a03ff039fc363c018672b3448e1646839cc1bac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_54f77a4891e2b02776b08690a03ff039fc363c018672b3448e1646839cc1bac0->leave($__internal_54f77a4891e2b02776b08690a03ff039fc363c018672b3448e1646839cc1bac0_prof);

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
