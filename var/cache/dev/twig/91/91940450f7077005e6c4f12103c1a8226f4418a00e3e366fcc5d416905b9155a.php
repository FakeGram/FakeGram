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
        $__internal_dbed44b5a5adb6bf09275b7f89d5d99105d1aa2b534db71fb4774135e5a5c9fd = $this->env->getExtension("native_profiler");
        $__internal_dbed44b5a5adb6bf09275b7f89d5d99105d1aa2b534db71fb4774135e5a5c9fd->enter($__internal_dbed44b5a5adb6bf09275b7f89d5d99105d1aa2b534db71fb4774135e5a5c9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbed44b5a5adb6bf09275b7f89d5d99105d1aa2b534db71fb4774135e5a5c9fd->leave($__internal_dbed44b5a5adb6bf09275b7f89d5d99105d1aa2b534db71fb4774135e5a5c9fd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5239405657a58ae80d57b958242d75eab63b7d917a990c71047dcc796b1f04b0 = $this->env->getExtension("native_profiler");
        $__internal_5239405657a58ae80d57b958242d75eab63b7d917a990c71047dcc796b1f04b0->enter($__internal_5239405657a58ae80d57b958242d75eab63b7d917a990c71047dcc796b1f04b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5239405657a58ae80d57b958242d75eab63b7d917a990c71047dcc796b1f04b0->leave($__internal_5239405657a58ae80d57b958242d75eab63b7d917a990c71047dcc796b1f04b0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6d7054f9b8f2ca90c86783f4210f9847216dcd72ef060c6e4826a12942030b2 = $this->env->getExtension("native_profiler");
        $__internal_c6d7054f9b8f2ca90c86783f4210f9847216dcd72ef060c6e4826a12942030b2->enter($__internal_c6d7054f9b8f2ca90c86783f4210f9847216dcd72ef060c6e4826a12942030b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c6d7054f9b8f2ca90c86783f4210f9847216dcd72ef060c6e4826a12942030b2->leave($__internal_c6d7054f9b8f2ca90c86783f4210f9847216dcd72ef060c6e4826a12942030b2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fda3036a78a295a13f857fa3670331df1eeb05694387dc7d0d441b6df537620 = $this->env->getExtension("native_profiler");
        $__internal_0fda3036a78a295a13f857fa3670331df1eeb05694387dc7d0d441b6df537620->enter($__internal_0fda3036a78a295a13f857fa3670331df1eeb05694387dc7d0d441b6df537620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0fda3036a78a295a13f857fa3670331df1eeb05694387dc7d0d441b6df537620->leave($__internal_0fda3036a78a295a13f857fa3670331df1eeb05694387dc7d0d441b6df537620_prof);

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
