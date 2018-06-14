<?php

/* ::base.html.twig */
class __TwigTemplate_fb2137393ba80a63b84ae07399a32adc274f44d5e84cb003229a6ff466a582f2 extends Twig_Template
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
        $__internal_332c2d54e479c0282b48ec3d073be926239dee9ad390e920c077ea1b8ff7cfa2 = $this->env->getExtension("native_profiler");
        $__internal_332c2d54e479c0282b48ec3d073be926239dee9ad390e920c077ea1b8ff7cfa2->enter($__internal_332c2d54e479c0282b48ec3d073be926239dee9ad390e920c077ea1b8ff7cfa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_332c2d54e479c0282b48ec3d073be926239dee9ad390e920c077ea1b8ff7cfa2->leave($__internal_332c2d54e479c0282b48ec3d073be926239dee9ad390e920c077ea1b8ff7cfa2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_87630fb7667292c6055c77224efb5fa44bcc29a3e09553ce281238e8699e6a17 = $this->env->getExtension("native_profiler");
        $__internal_87630fb7667292c6055c77224efb5fa44bcc29a3e09553ce281238e8699e6a17->enter($__internal_87630fb7667292c6055c77224efb5fa44bcc29a3e09553ce281238e8699e6a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_87630fb7667292c6055c77224efb5fa44bcc29a3e09553ce281238e8699e6a17->leave($__internal_87630fb7667292c6055c77224efb5fa44bcc29a3e09553ce281238e8699e6a17_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eb8772a24ebfc7bcf8926c6a5b3802c46993abed93fc45a35bb9f9cc087d7eda = $this->env->getExtension("native_profiler");
        $__internal_eb8772a24ebfc7bcf8926c6a5b3802c46993abed93fc45a35bb9f9cc087d7eda->enter($__internal_eb8772a24ebfc7bcf8926c6a5b3802c46993abed93fc45a35bb9f9cc087d7eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_eb8772a24ebfc7bcf8926c6a5b3802c46993abed93fc45a35bb9f9cc087d7eda->leave($__internal_eb8772a24ebfc7bcf8926c6a5b3802c46993abed93fc45a35bb9f9cc087d7eda_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_62cbb586cbb0181e6fb54e1557230c2ccfe490c075121a7dd750b7e05c30b72d = $this->env->getExtension("native_profiler");
        $__internal_62cbb586cbb0181e6fb54e1557230c2ccfe490c075121a7dd750b7e05c30b72d->enter($__internal_62cbb586cbb0181e6fb54e1557230c2ccfe490c075121a7dd750b7e05c30b72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_62cbb586cbb0181e6fb54e1557230c2ccfe490c075121a7dd750b7e05c30b72d->leave($__internal_62cbb586cbb0181e6fb54e1557230c2ccfe490c075121a7dd750b7e05c30b72d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_60d5746ce7ebc17b2f5f4f074e592cb27516ab5470e22efbe3016b82ebf99bbe = $this->env->getExtension("native_profiler");
        $__internal_60d5746ce7ebc17b2f5f4f074e592cb27516ab5470e22efbe3016b82ebf99bbe->enter($__internal_60d5746ce7ebc17b2f5f4f074e592cb27516ab5470e22efbe3016b82ebf99bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_60d5746ce7ebc17b2f5f4f074e592cb27516ab5470e22efbe3016b82ebf99bbe->leave($__internal_60d5746ce7ebc17b2f5f4f074e592cb27516ab5470e22efbe3016b82ebf99bbe_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
