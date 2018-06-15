<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_db71adab35cd37b2e6eb0ea9797a5c1287448b745118268cb7f78c33068fc662 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_ccf331774eee1d602cd9f211459e2e9dd46a4b5f859d4a716a53c4edf1600f08 = $this->env->getExtension("native_profiler");
        $__internal_ccf331774eee1d602cd9f211459e2e9dd46a4b5f859d4a716a53c4edf1600f08->enter($__internal_ccf331774eee1d602cd9f211459e2e9dd46a4b5f859d4a716a53c4edf1600f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccf331774eee1d602cd9f211459e2e9dd46a4b5f859d4a716a53c4edf1600f08->leave($__internal_ccf331774eee1d602cd9f211459e2e9dd46a4b5f859d4a716a53c4edf1600f08_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3396e0c47842af19382fcdd3db7651bea11a7b4437edd84e3d62aef7e75b3314 = $this->env->getExtension("native_profiler");
        $__internal_3396e0c47842af19382fcdd3db7651bea11a7b4437edd84e3d62aef7e75b3314->enter($__internal_3396e0c47842af19382fcdd3db7651bea11a7b4437edd84e3d62aef7e75b3314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3396e0c47842af19382fcdd3db7651bea11a7b4437edd84e3d62aef7e75b3314->leave($__internal_3396e0c47842af19382fcdd3db7651bea11a7b4437edd84e3d62aef7e75b3314_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d12531b7b9d97cb5c2b823366436acc92f193b94dd1c4db7cb2d7ffd9fa22b48 = $this->env->getExtension("native_profiler");
        $__internal_d12531b7b9d97cb5c2b823366436acc92f193b94dd1c4db7cb2d7ffd9fa22b48->enter($__internal_d12531b7b9d97cb5c2b823366436acc92f193b94dd1c4db7cb2d7ffd9fa22b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d12531b7b9d97cb5c2b823366436acc92f193b94dd1c4db7cb2d7ffd9fa22b48->leave($__internal_d12531b7b9d97cb5c2b823366436acc92f193b94dd1c4db7cb2d7ffd9fa22b48_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
