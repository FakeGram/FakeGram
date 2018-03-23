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
        $__internal_fd4ff123dbe734ceab33ad26fdf3359caa648227d2a14aed7862f6ee753fc8fc = $this->env->getExtension("native_profiler");
        $__internal_fd4ff123dbe734ceab33ad26fdf3359caa648227d2a14aed7862f6ee753fc8fc->enter($__internal_fd4ff123dbe734ceab33ad26fdf3359caa648227d2a14aed7862f6ee753fc8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_fd4ff123dbe734ceab33ad26fdf3359caa648227d2a14aed7862f6ee753fc8fc->leave($__internal_fd4ff123dbe734ceab33ad26fdf3359caa648227d2a14aed7862f6ee753fc8fc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_67c083218a875d09c5b4bffe4230be60984a18b6c358a30fc6a7c7f62afbd316 = $this->env->getExtension("native_profiler");
        $__internal_67c083218a875d09c5b4bffe4230be60984a18b6c358a30fc6a7c7f62afbd316->enter($__internal_67c083218a875d09c5b4bffe4230be60984a18b6c358a30fc6a7c7f62afbd316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_67c083218a875d09c5b4bffe4230be60984a18b6c358a30fc6a7c7f62afbd316->leave($__internal_67c083218a875d09c5b4bffe4230be60984a18b6c358a30fc6a7c7f62afbd316_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_39d0794adb39fd1bbe02e86e8f7a78a419f0b11e1ff5bedc5712322351773857 = $this->env->getExtension("native_profiler");
        $__internal_39d0794adb39fd1bbe02e86e8f7a78a419f0b11e1ff5bedc5712322351773857->enter($__internal_39d0794adb39fd1bbe02e86e8f7a78a419f0b11e1ff5bedc5712322351773857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_39d0794adb39fd1bbe02e86e8f7a78a419f0b11e1ff5bedc5712322351773857->leave($__internal_39d0794adb39fd1bbe02e86e8f7a78a419f0b11e1ff5bedc5712322351773857_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c5eae668bc8654f51b0755002d587d485586cf1d78da636ee19b665dc86e464 = $this->env->getExtension("native_profiler");
        $__internal_8c5eae668bc8654f51b0755002d587d485586cf1d78da636ee19b665dc86e464->enter($__internal_8c5eae668bc8654f51b0755002d587d485586cf1d78da636ee19b665dc86e464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8c5eae668bc8654f51b0755002d587d485586cf1d78da636ee19b665dc86e464->leave($__internal_8c5eae668bc8654f51b0755002d587d485586cf1d78da636ee19b665dc86e464_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cc7c819edef7ffd2dc24c2ca59db64cff6fcb20a4f6aeb53e2ae7b1e2ac27db4 = $this->env->getExtension("native_profiler");
        $__internal_cc7c819edef7ffd2dc24c2ca59db64cff6fcb20a4f6aeb53e2ae7b1e2ac27db4->enter($__internal_cc7c819edef7ffd2dc24c2ca59db64cff6fcb20a4f6aeb53e2ae7b1e2ac27db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cc7c819edef7ffd2dc24c2ca59db64cff6fcb20a4f6aeb53e2ae7b1e2ac27db4->leave($__internal_cc7c819edef7ffd2dc24c2ca59db64cff6fcb20a4f6aeb53e2ae7b1e2ac27db4_prof);

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
