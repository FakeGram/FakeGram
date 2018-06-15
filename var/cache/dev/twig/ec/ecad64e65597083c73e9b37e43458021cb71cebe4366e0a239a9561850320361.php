<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_b23640d98765668cedc4eee822fa40c36ab60e3cec3c8340b99593307aa7755f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_5a4c935b73b92037b3c404aaef7787bb093194ccaf2b6c8349e71a86ecedd077 = $this->env->getExtension("native_profiler");
        $__internal_5a4c935b73b92037b3c404aaef7787bb093194ccaf2b6c8349e71a86ecedd077->enter($__internal_5a4c935b73b92037b3c404aaef7787bb093194ccaf2b6c8349e71a86ecedd077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a4c935b73b92037b3c404aaef7787bb093194ccaf2b6c8349e71a86ecedd077->leave($__internal_5a4c935b73b92037b3c404aaef7787bb093194ccaf2b6c8349e71a86ecedd077_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_56d7ad2f84514bc8b3f5a1cbd71a3619a4a4b8df87427d2c40edc0e541bc7779 = $this->env->getExtension("native_profiler");
        $__internal_56d7ad2f84514bc8b3f5a1cbd71a3619a4a4b8df87427d2c40edc0e541bc7779->enter($__internal_56d7ad2f84514bc8b3f5a1cbd71a3619a4a4b8df87427d2c40edc0e541bc7779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_56d7ad2f84514bc8b3f5a1cbd71a3619a4a4b8df87427d2c40edc0e541bc7779->leave($__internal_56d7ad2f84514bc8b3f5a1cbd71a3619a4a4b8df87427d2c40edc0e541bc7779_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c7ddecd43a412418dcf48e210e11089c3b1583b237dc45b789974cec59b5f53 = $this->env->getExtension("native_profiler");
        $__internal_9c7ddecd43a412418dcf48e210e11089c3b1583b237dc45b789974cec59b5f53->enter($__internal_9c7ddecd43a412418dcf48e210e11089c3b1583b237dc45b789974cec59b5f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_9c7ddecd43a412418dcf48e210e11089c3b1583b237dc45b789974cec59b5f53->leave($__internal_9c7ddecd43a412418dcf48e210e11089c3b1583b237dc45b789974cec59b5f53_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
