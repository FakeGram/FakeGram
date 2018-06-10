<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8d2e79bf3b834e1173f463c44b98fbb831ddc43d45413c436964a13f0fa78a9e extends Twig_Template
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
        $__internal_43a409f3d4c2ea0dd5558880e4a188c0b74868ea20802b8d143a0d5b4e7f0231 = $this->env->getExtension("native_profiler");
        $__internal_43a409f3d4c2ea0dd5558880e4a188c0b74868ea20802b8d143a0d5b4e7f0231->enter($__internal_43a409f3d4c2ea0dd5558880e4a188c0b74868ea20802b8d143a0d5b4e7f0231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43a409f3d4c2ea0dd5558880e4a188c0b74868ea20802b8d143a0d5b4e7f0231->leave($__internal_43a409f3d4c2ea0dd5558880e4a188c0b74868ea20802b8d143a0d5b4e7f0231_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3ffb04bc7e011ede9a2d0473342656e326ab141b1f0a3b41eea5cd7eb1e3bfff = $this->env->getExtension("native_profiler");
        $__internal_3ffb04bc7e011ede9a2d0473342656e326ab141b1f0a3b41eea5cd7eb1e3bfff->enter($__internal_3ffb04bc7e011ede9a2d0473342656e326ab141b1f0a3b41eea5cd7eb1e3bfff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3ffb04bc7e011ede9a2d0473342656e326ab141b1f0a3b41eea5cd7eb1e3bfff->leave($__internal_3ffb04bc7e011ede9a2d0473342656e326ab141b1f0a3b41eea5cd7eb1e3bfff_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a78c991ae4f858fdfb3b957734e6e24d9f3e6dfe1603e620cb9f1caa3e8f2d85 = $this->env->getExtension("native_profiler");
        $__internal_a78c991ae4f858fdfb3b957734e6e24d9f3e6dfe1603e620cb9f1caa3e8f2d85->enter($__internal_a78c991ae4f858fdfb3b957734e6e24d9f3e6dfe1603e620cb9f1caa3e8f2d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a78c991ae4f858fdfb3b957734e6e24d9f3e6dfe1603e620cb9f1caa3e8f2d85->leave($__internal_a78c991ae4f858fdfb3b957734e6e24d9f3e6dfe1603e620cb9f1caa3e8f2d85_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_931f4b8c9a1dc83bdb0c0e85a3790a0b80b47962b7b68258daf3d4bdb68c2b10 = $this->env->getExtension("native_profiler");
        $__internal_931f4b8c9a1dc83bdb0c0e85a3790a0b80b47962b7b68258daf3d4bdb68c2b10->enter($__internal_931f4b8c9a1dc83bdb0c0e85a3790a0b80b47962b7b68258daf3d4bdb68c2b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_931f4b8c9a1dc83bdb0c0e85a3790a0b80b47962b7b68258daf3d4bdb68c2b10->leave($__internal_931f4b8c9a1dc83bdb0c0e85a3790a0b80b47962b7b68258daf3d4bdb68c2b10_prof);

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
