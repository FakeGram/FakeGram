<?php

/* base.html.twig */
class __TwigTemplate_717a42b9afb939a4253bfa919feee013f04d0154e70873a9185af62ded0afa93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9dca42d36208e73588054f655f4987a9950d09ababfd7bfd50f8226b786b50e0 = $this->env->getExtension("native_profiler");
        $__internal_9dca42d36208e73588054f655f4987a9950d09ababfd7bfd50f8226b786b50e0->enter($__internal_9dca42d36208e73588054f655f4987a9950d09ababfd7bfd50f8226b786b50e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9dca42d36208e73588054f655f4987a9950d09ababfd7bfd50f8226b786b50e0->leave($__internal_9dca42d36208e73588054f655f4987a9950d09ababfd7bfd50f8226b786b50e0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_584b3b3223cb37905867a0477c209c3047cdee92c47a921a0fc878dbdf252fa9 = $this->env->getExtension("native_profiler");
        $__internal_584b3b3223cb37905867a0477c209c3047cdee92c47a921a0fc878dbdf252fa9->enter($__internal_584b3b3223cb37905867a0477c209c3047cdee92c47a921a0fc878dbdf252fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_584b3b3223cb37905867a0477c209c3047cdee92c47a921a0fc878dbdf252fa9->leave($__internal_584b3b3223cb37905867a0477c209c3047cdee92c47a921a0fc878dbdf252fa9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e6f2e5af6898434f7d352a2b10dc61623caa17c2fd1349845b2761dff1c7d802 = $this->env->getExtension("native_profiler");
        $__internal_e6f2e5af6898434f7d352a2b10dc61623caa17c2fd1349845b2761dff1c7d802->enter($__internal_e6f2e5af6898434f7d352a2b10dc61623caa17c2fd1349845b2761dff1c7d802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e6f2e5af6898434f7d352a2b10dc61623caa17c2fd1349845b2761dff1c7d802->leave($__internal_e6f2e5af6898434f7d352a2b10dc61623caa17c2fd1349845b2761dff1c7d802_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b5cbc5579e1f76abc189928cc5ca363e0b4ae6cf4af6f45a3bebcb5971ac2ba = $this->env->getExtension("native_profiler");
        $__internal_2b5cbc5579e1f76abc189928cc5ca363e0b4ae6cf4af6f45a3bebcb5971ac2ba->enter($__internal_2b5cbc5579e1f76abc189928cc5ca363e0b4ae6cf4af6f45a3bebcb5971ac2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2b5cbc5579e1f76abc189928cc5ca363e0b4ae6cf4af6f45a3bebcb5971ac2ba->leave($__internal_2b5cbc5579e1f76abc189928cc5ca363e0b4ae6cf4af6f45a3bebcb5971ac2ba_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3364a96f743411864557323c1c43f8a0fec2b0861b504aa3b760f1a990bf1fa5 = $this->env->getExtension("native_profiler");
        $__internal_3364a96f743411864557323c1c43f8a0fec2b0861b504aa3b760f1a990bf1fa5->enter($__internal_3364a96f743411864557323c1c43f8a0fec2b0861b504aa3b760f1a990bf1fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3364a96f743411864557323c1c43f8a0fec2b0861b504aa3b760f1a990bf1fa5->leave($__internal_3364a96f743411864557323c1c43f8a0fec2b0861b504aa3b760f1a990bf1fa5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
