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
        $__internal_0b2ea729d4c494d0290094d91c50009ac18778e1adde42b46a891cd283b708b5 = $this->env->getExtension("native_profiler");
        $__internal_0b2ea729d4c494d0290094d91c50009ac18778e1adde42b46a891cd283b708b5->enter($__internal_0b2ea729d4c494d0290094d91c50009ac18778e1adde42b46a891cd283b708b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b2ea729d4c494d0290094d91c50009ac18778e1adde42b46a891cd283b708b5->leave($__internal_0b2ea729d4c494d0290094d91c50009ac18778e1adde42b46a891cd283b708b5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_46ce16f98870c8c8dd9433ff64adbd96ae22099aac55f3144391c32798b7ddbe = $this->env->getExtension("native_profiler");
        $__internal_46ce16f98870c8c8dd9433ff64adbd96ae22099aac55f3144391c32798b7ddbe->enter($__internal_46ce16f98870c8c8dd9433ff64adbd96ae22099aac55f3144391c32798b7ddbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_46ce16f98870c8c8dd9433ff64adbd96ae22099aac55f3144391c32798b7ddbe->leave($__internal_46ce16f98870c8c8dd9433ff64adbd96ae22099aac55f3144391c32798b7ddbe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_084f4fc48488236246dfab9634d51305f30e466d4d7626c61635b2d000cc6fdb = $this->env->getExtension("native_profiler");
        $__internal_084f4fc48488236246dfab9634d51305f30e466d4d7626c61635b2d000cc6fdb->enter($__internal_084f4fc48488236246dfab9634d51305f30e466d4d7626c61635b2d000cc6fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_084f4fc48488236246dfab9634d51305f30e466d4d7626c61635b2d000cc6fdb->leave($__internal_084f4fc48488236246dfab9634d51305f30e466d4d7626c61635b2d000cc6fdb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e7c9bc946362ccf456d24db4914a05a0d6b0592a00b534a756497d5d9facaa3 = $this->env->getExtension("native_profiler");
        $__internal_3e7c9bc946362ccf456d24db4914a05a0d6b0592a00b534a756497d5d9facaa3->enter($__internal_3e7c9bc946362ccf456d24db4914a05a0d6b0592a00b534a756497d5d9facaa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3e7c9bc946362ccf456d24db4914a05a0d6b0592a00b534a756497d5d9facaa3->leave($__internal_3e7c9bc946362ccf456d24db4914a05a0d6b0592a00b534a756497d5d9facaa3_prof);

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
