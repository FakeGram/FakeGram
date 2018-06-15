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
        $__internal_25c2f50dcccbff78407b9507d4347c008ea8dbcff3d875ca29ae8827b9198254 = $this->env->getExtension("native_profiler");
        $__internal_25c2f50dcccbff78407b9507d4347c008ea8dbcff3d875ca29ae8827b9198254->enter($__internal_25c2f50dcccbff78407b9507d4347c008ea8dbcff3d875ca29ae8827b9198254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25c2f50dcccbff78407b9507d4347c008ea8dbcff3d875ca29ae8827b9198254->leave($__internal_25c2f50dcccbff78407b9507d4347c008ea8dbcff3d875ca29ae8827b9198254_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c64941620d27274b89a220e4ce056376f6163be49d8bc6473804ab5cc63b5d4d = $this->env->getExtension("native_profiler");
        $__internal_c64941620d27274b89a220e4ce056376f6163be49d8bc6473804ab5cc63b5d4d->enter($__internal_c64941620d27274b89a220e4ce056376f6163be49d8bc6473804ab5cc63b5d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c64941620d27274b89a220e4ce056376f6163be49d8bc6473804ab5cc63b5d4d->leave($__internal_c64941620d27274b89a220e4ce056376f6163be49d8bc6473804ab5cc63b5d4d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9a570d8afba3247d0d0b37d65db85770f754c0565e276107caad032a8162a7f = $this->env->getExtension("native_profiler");
        $__internal_d9a570d8afba3247d0d0b37d65db85770f754c0565e276107caad032a8162a7f->enter($__internal_d9a570d8afba3247d0d0b37d65db85770f754c0565e276107caad032a8162a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d9a570d8afba3247d0d0b37d65db85770f754c0565e276107caad032a8162a7f->leave($__internal_d9a570d8afba3247d0d0b37d65db85770f754c0565e276107caad032a8162a7f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_be0ecac7f80c614ab4391d7a941947bba622e365434579c10497ba315f4804c4 = $this->env->getExtension("native_profiler");
        $__internal_be0ecac7f80c614ab4391d7a941947bba622e365434579c10497ba315f4804c4->enter($__internal_be0ecac7f80c614ab4391d7a941947bba622e365434579c10497ba315f4804c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_be0ecac7f80c614ab4391d7a941947bba622e365434579c10497ba315f4804c4->leave($__internal_be0ecac7f80c614ab4391d7a941947bba622e365434579c10497ba315f4804c4_prof);

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
