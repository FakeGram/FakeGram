<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_07696763f5faa545ae13f6a4f64c7946895fb7b9777b441f4327cfd18370be81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_00ff82f2af268d6699888050b83249d60c1c4c0d4c406eefd382c9faf133f7d2 = $this->env->getExtension("native_profiler");
        $__internal_00ff82f2af268d6699888050b83249d60c1c4c0d4c406eefd382c9faf133f7d2->enter($__internal_00ff82f2af268d6699888050b83249d60c1c4c0d4c406eefd382c9faf133f7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00ff82f2af268d6699888050b83249d60c1c4c0d4c406eefd382c9faf133f7d2->leave($__internal_00ff82f2af268d6699888050b83249d60c1c4c0d4c406eefd382c9faf133f7d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a7e561fbd0f833119c5c1f323b2468e3b3a973a6f56826d60e5eee910a638d4 = $this->env->getExtension("native_profiler");
        $__internal_0a7e561fbd0f833119c5c1f323b2468e3b3a973a6f56826d60e5eee910a638d4->enter($__internal_0a7e561fbd0f833119c5c1f323b2468e3b3a973a6f56826d60e5eee910a638d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0a7e561fbd0f833119c5c1f323b2468e3b3a973a6f56826d60e5eee910a638d4->leave($__internal_0a7e561fbd0f833119c5c1f323b2468e3b3a973a6f56826d60e5eee910a638d4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4ab9090b2e2063325d43a26bf5350d54745965e46c3f1fc62f5dfaa9dd4bbe4 = $this->env->getExtension("native_profiler");
        $__internal_e4ab9090b2e2063325d43a26bf5350d54745965e46c3f1fc62f5dfaa9dd4bbe4->enter($__internal_e4ab9090b2e2063325d43a26bf5350d54745965e46c3f1fc62f5dfaa9dd4bbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e4ab9090b2e2063325d43a26bf5350d54745965e46c3f1fc62f5dfaa9dd4bbe4->leave($__internal_e4ab9090b2e2063325d43a26bf5350d54745965e46c3f1fc62f5dfaa9dd4bbe4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d99c24fef85cc2735e1cc5544719ac4d1bc71436300602543ce7b892e8916482 = $this->env->getExtension("native_profiler");
        $__internal_d99c24fef85cc2735e1cc5544719ac4d1bc71436300602543ce7b892e8916482->enter($__internal_d99c24fef85cc2735e1cc5544719ac4d1bc71436300602543ce7b892e8916482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d99c24fef85cc2735e1cc5544719ac4d1bc71436300602543ce7b892e8916482->leave($__internal_d99c24fef85cc2735e1cc5544719ac4d1bc71436300602543ce7b892e8916482_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
