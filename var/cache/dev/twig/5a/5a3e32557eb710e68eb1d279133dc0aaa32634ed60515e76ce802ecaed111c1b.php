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
        $__internal_67713277e2fc5935a6f7785ffe7477635d7ea4976de4ae02a1d02a4bc28aa8b9 = $this->env->getExtension("native_profiler");
        $__internal_67713277e2fc5935a6f7785ffe7477635d7ea4976de4ae02a1d02a4bc28aa8b9->enter($__internal_67713277e2fc5935a6f7785ffe7477635d7ea4976de4ae02a1d02a4bc28aa8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_67713277e2fc5935a6f7785ffe7477635d7ea4976de4ae02a1d02a4bc28aa8b9->leave($__internal_67713277e2fc5935a6f7785ffe7477635d7ea4976de4ae02a1d02a4bc28aa8b9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e14bdbcb3eccd0064cf50c55a110293647ce3ade044d58b6b0fa1045d49a4c9 = $this->env->getExtension("native_profiler");
        $__internal_9e14bdbcb3eccd0064cf50c55a110293647ce3ade044d58b6b0fa1045d49a4c9->enter($__internal_9e14bdbcb3eccd0064cf50c55a110293647ce3ade044d58b6b0fa1045d49a4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9e14bdbcb3eccd0064cf50c55a110293647ce3ade044d58b6b0fa1045d49a4c9->leave($__internal_9e14bdbcb3eccd0064cf50c55a110293647ce3ade044d58b6b0fa1045d49a4c9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e5ef4d1f6fda1bf5a7b6c7c63dfbd08fef97014a29b048294a6cb2d4c7056598 = $this->env->getExtension("native_profiler");
        $__internal_e5ef4d1f6fda1bf5a7b6c7c63dfbd08fef97014a29b048294a6cb2d4c7056598->enter($__internal_e5ef4d1f6fda1bf5a7b6c7c63dfbd08fef97014a29b048294a6cb2d4c7056598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e5ef4d1f6fda1bf5a7b6c7c63dfbd08fef97014a29b048294a6cb2d4c7056598->leave($__internal_e5ef4d1f6fda1bf5a7b6c7c63dfbd08fef97014a29b048294a6cb2d4c7056598_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_513c53cae877cd96f9d3f002e72528b6a706e0cc2868723f108504b958d44893 = $this->env->getExtension("native_profiler");
        $__internal_513c53cae877cd96f9d3f002e72528b6a706e0cc2868723f108504b958d44893->enter($__internal_513c53cae877cd96f9d3f002e72528b6a706e0cc2868723f108504b958d44893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_513c53cae877cd96f9d3f002e72528b6a706e0cc2868723f108504b958d44893->leave($__internal_513c53cae877cd96f9d3f002e72528b6a706e0cc2868723f108504b958d44893_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2793bd2e1da2371ecf4c1d0f7f3f1fc28092478b58d95aa6dc664d73b928c6d8 = $this->env->getExtension("native_profiler");
        $__internal_2793bd2e1da2371ecf4c1d0f7f3f1fc28092478b58d95aa6dc664d73b928c6d8->enter($__internal_2793bd2e1da2371ecf4c1d0f7f3f1fc28092478b58d95aa6dc664d73b928c6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2793bd2e1da2371ecf4c1d0f7f3f1fc28092478b58d95aa6dc664d73b928c6d8->leave($__internal_2793bd2e1da2371ecf4c1d0f7f3f1fc28092478b58d95aa6dc664d73b928c6d8_prof);

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
