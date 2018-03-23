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
        $__internal_0c87495f22a569759ff0faa81d4d1a51a18c77e26b3bf2f9da0f6d295d6d843c = $this->env->getExtension("native_profiler");
        $__internal_0c87495f22a569759ff0faa81d4d1a51a18c77e26b3bf2f9da0f6d295d6d843c->enter($__internal_0c87495f22a569759ff0faa81d4d1a51a18c77e26b3bf2f9da0f6d295d6d843c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c87495f22a569759ff0faa81d4d1a51a18c77e26b3bf2f9da0f6d295d6d843c->leave($__internal_0c87495f22a569759ff0faa81d4d1a51a18c77e26b3bf2f9da0f6d295d6d843c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_83eeca7d289a85442ea29e1ef8079604851eb4af59d0baca1aff6c5f278fa7f3 = $this->env->getExtension("native_profiler");
        $__internal_83eeca7d289a85442ea29e1ef8079604851eb4af59d0baca1aff6c5f278fa7f3->enter($__internal_83eeca7d289a85442ea29e1ef8079604851eb4af59d0baca1aff6c5f278fa7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_83eeca7d289a85442ea29e1ef8079604851eb4af59d0baca1aff6c5f278fa7f3->leave($__internal_83eeca7d289a85442ea29e1ef8079604851eb4af59d0baca1aff6c5f278fa7f3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_21abb601282ffbe4884f9694c4976b2af01d95a45e98f6f9c08bf9ab74e8be00 = $this->env->getExtension("native_profiler");
        $__internal_21abb601282ffbe4884f9694c4976b2af01d95a45e98f6f9c08bf9ab74e8be00->enter($__internal_21abb601282ffbe4884f9694c4976b2af01d95a45e98f6f9c08bf9ab74e8be00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_21abb601282ffbe4884f9694c4976b2af01d95a45e98f6f9c08bf9ab74e8be00->leave($__internal_21abb601282ffbe4884f9694c4976b2af01d95a45e98f6f9c08bf9ab74e8be00_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a90ecf84877e36c318f5cc09f829bec133d1f66cf3e6b535af9065d6110463b = $this->env->getExtension("native_profiler");
        $__internal_3a90ecf84877e36c318f5cc09f829bec133d1f66cf3e6b535af9065d6110463b->enter($__internal_3a90ecf84877e36c318f5cc09f829bec133d1f66cf3e6b535af9065d6110463b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3a90ecf84877e36c318f5cc09f829bec133d1f66cf3e6b535af9065d6110463b->leave($__internal_3a90ecf84877e36c318f5cc09f829bec133d1f66cf3e6b535af9065d6110463b_prof);

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
