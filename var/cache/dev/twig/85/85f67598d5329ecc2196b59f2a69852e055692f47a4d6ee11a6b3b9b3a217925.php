<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_39ccc462c91eb9e5d09a227fb8010c5d41601959c434958780a6458c9303a21b extends Twig_Template
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
        $__internal_36957fe2529c770a5f4d829a013d792d813f6ed42a43a340a15588f9d738ee0d = $this->env->getExtension("native_profiler");
        $__internal_36957fe2529c770a5f4d829a013d792d813f6ed42a43a340a15588f9d738ee0d->enter($__internal_36957fe2529c770a5f4d829a013d792d813f6ed42a43a340a15588f9d738ee0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36957fe2529c770a5f4d829a013d792d813f6ed42a43a340a15588f9d738ee0d->leave($__internal_36957fe2529c770a5f4d829a013d792d813f6ed42a43a340a15588f9d738ee0d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1f974b052bb20efaac2266bc4df9984562ea6f22362285b6d3f785c4a9e3e31f = $this->env->getExtension("native_profiler");
        $__internal_1f974b052bb20efaac2266bc4df9984562ea6f22362285b6d3f785c4a9e3e31f->enter($__internal_1f974b052bb20efaac2266bc4df9984562ea6f22362285b6d3f785c4a9e3e31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1f974b052bb20efaac2266bc4df9984562ea6f22362285b6d3f785c4a9e3e31f->leave($__internal_1f974b052bb20efaac2266bc4df9984562ea6f22362285b6d3f785c4a9e3e31f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bef4bd485ca3e52f867da5c5f0c188721fef77f482094c22c020a19cd216adb8 = $this->env->getExtension("native_profiler");
        $__internal_bef4bd485ca3e52f867da5c5f0c188721fef77f482094c22c020a19cd216adb8->enter($__internal_bef4bd485ca3e52f867da5c5f0c188721fef77f482094c22c020a19cd216adb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bef4bd485ca3e52f867da5c5f0c188721fef77f482094c22c020a19cd216adb8->leave($__internal_bef4bd485ca3e52f867da5c5f0c188721fef77f482094c22c020a19cd216adb8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e43678f32ed8de22199e0b0c54c587f2e5d467d13e8d7787dc6b1f59b32a6dc3 = $this->env->getExtension("native_profiler");
        $__internal_e43678f32ed8de22199e0b0c54c587f2e5d467d13e8d7787dc6b1f59b32a6dc3->enter($__internal_e43678f32ed8de22199e0b0c54c587f2e5d467d13e8d7787dc6b1f59b32a6dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e43678f32ed8de22199e0b0c54c587f2e5d467d13e8d7787dc6b1f59b32a6dc3->leave($__internal_e43678f32ed8de22199e0b0c54c587f2e5d467d13e8d7787dc6b1f59b32a6dc3_prof);

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
