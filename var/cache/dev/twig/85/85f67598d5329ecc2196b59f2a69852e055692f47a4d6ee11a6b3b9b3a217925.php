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
        $__internal_d10eb1ba592d46c5f7b36449e38c6d947f5c3cad258b8412d030ecacb3cb49f7 = $this->env->getExtension("native_profiler");
        $__internal_d10eb1ba592d46c5f7b36449e38c6d947f5c3cad258b8412d030ecacb3cb49f7->enter($__internal_d10eb1ba592d46c5f7b36449e38c6d947f5c3cad258b8412d030ecacb3cb49f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d10eb1ba592d46c5f7b36449e38c6d947f5c3cad258b8412d030ecacb3cb49f7->leave($__internal_d10eb1ba592d46c5f7b36449e38c6d947f5c3cad258b8412d030ecacb3cb49f7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b18855fb3e01ac953b4ad8c69335d2176f8058d5dfc27eba59c5d34647f6d76b = $this->env->getExtension("native_profiler");
        $__internal_b18855fb3e01ac953b4ad8c69335d2176f8058d5dfc27eba59c5d34647f6d76b->enter($__internal_b18855fb3e01ac953b4ad8c69335d2176f8058d5dfc27eba59c5d34647f6d76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b18855fb3e01ac953b4ad8c69335d2176f8058d5dfc27eba59c5d34647f6d76b->leave($__internal_b18855fb3e01ac953b4ad8c69335d2176f8058d5dfc27eba59c5d34647f6d76b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c108dfd3e67f6ed5527c37371efadd7acf95c6d6103b5b1b13211934f90901f3 = $this->env->getExtension("native_profiler");
        $__internal_c108dfd3e67f6ed5527c37371efadd7acf95c6d6103b5b1b13211934f90901f3->enter($__internal_c108dfd3e67f6ed5527c37371efadd7acf95c6d6103b5b1b13211934f90901f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c108dfd3e67f6ed5527c37371efadd7acf95c6d6103b5b1b13211934f90901f3->leave($__internal_c108dfd3e67f6ed5527c37371efadd7acf95c6d6103b5b1b13211934f90901f3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6de49b40e862683b5ddb8bd2e51e261c29bd9cc9b9dc7a6d9eb13ebb7b2f537 = $this->env->getExtension("native_profiler");
        $__internal_c6de49b40e862683b5ddb8bd2e51e261c29bd9cc9b9dc7a6d9eb13ebb7b2f537->enter($__internal_c6de49b40e862683b5ddb8bd2e51e261c29bd9cc9b9dc7a6d9eb13ebb7b2f537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c6de49b40e862683b5ddb8bd2e51e261c29bd9cc9b9dc7a6d9eb13ebb7b2f537->leave($__internal_c6de49b40e862683b5ddb8bd2e51e261c29bd9cc9b9dc7a6d9eb13ebb7b2f537_prof);

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
