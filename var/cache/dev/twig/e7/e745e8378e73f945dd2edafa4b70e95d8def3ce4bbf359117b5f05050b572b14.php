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
        $__internal_67573434e7210798aaafa558604746d35587959053dbcec9abed1db872480f70 = $this->env->getExtension("native_profiler");
        $__internal_67573434e7210798aaafa558604746d35587959053dbcec9abed1db872480f70->enter($__internal_67573434e7210798aaafa558604746d35587959053dbcec9abed1db872480f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67573434e7210798aaafa558604746d35587959053dbcec9abed1db872480f70->leave($__internal_67573434e7210798aaafa558604746d35587959053dbcec9abed1db872480f70_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b5851808a0097cdb25a40a38e6827a8abc0521ada6eb5c97e03d4684b3080751 = $this->env->getExtension("native_profiler");
        $__internal_b5851808a0097cdb25a40a38e6827a8abc0521ada6eb5c97e03d4684b3080751->enter($__internal_b5851808a0097cdb25a40a38e6827a8abc0521ada6eb5c97e03d4684b3080751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b5851808a0097cdb25a40a38e6827a8abc0521ada6eb5c97e03d4684b3080751->leave($__internal_b5851808a0097cdb25a40a38e6827a8abc0521ada6eb5c97e03d4684b3080751_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4eaac56eb371f38b464f5dcdfb4610f92edbcd39b8ac362fc9c2ba927539b0f7 = $this->env->getExtension("native_profiler");
        $__internal_4eaac56eb371f38b464f5dcdfb4610f92edbcd39b8ac362fc9c2ba927539b0f7->enter($__internal_4eaac56eb371f38b464f5dcdfb4610f92edbcd39b8ac362fc9c2ba927539b0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4eaac56eb371f38b464f5dcdfb4610f92edbcd39b8ac362fc9c2ba927539b0f7->leave($__internal_4eaac56eb371f38b464f5dcdfb4610f92edbcd39b8ac362fc9c2ba927539b0f7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d2d63fb55dd73afafaa30c0df94734a2a6218e08879f2b0339435111a30e5da = $this->env->getExtension("native_profiler");
        $__internal_0d2d63fb55dd73afafaa30c0df94734a2a6218e08879f2b0339435111a30e5da->enter($__internal_0d2d63fb55dd73afafaa30c0df94734a2a6218e08879f2b0339435111a30e5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0d2d63fb55dd73afafaa30c0df94734a2a6218e08879f2b0339435111a30e5da->leave($__internal_0d2d63fb55dd73afafaa30c0df94734a2a6218e08879f2b0339435111a30e5da_prof);

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
