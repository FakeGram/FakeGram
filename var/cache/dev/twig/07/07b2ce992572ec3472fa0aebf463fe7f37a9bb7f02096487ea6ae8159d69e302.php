<?php

/* Login/Login.html.twig */
class __TwigTemplate_46427c3423d61a3a59b760a0d91f6af20b08947d714d26f93cefd6a9b20a56c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a1a6450d81e77e1d326496a4e4c008830d19d696e451b67a43af3752fedd68e = $this->env->getExtension("native_profiler");
        $__internal_9a1a6450d81e77e1d326496a4e4c008830d19d696e451b67a43af3752fedd68e->enter($__internal_9a1a6450d81e77e1d326496a4e4c008830d19d696e451b67a43af3752fedd68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Login/Login.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "Login/Login.html.twig", 1)->display($context);
        // line 2
        echo "

\t<div class=\"container-fluid\">
  <div class=\"container-fluid\">
    <div class=\"tile curved\">
      <h2 class=\"log-in\">Zaloguj się !</h2>
      <form class=\"\" action=\"/execute_login\" method=\"post\">
        <div class=\"login-group-sec\">
          <label class=\"login-label\" for=\"email\">E-mail:</label>
          <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Wprowadź adres E-mail\" name=\"email\">
        </div>
        <div class=\"login-group-sec\">
          <label class=\"login-label\" for=\"pwd\">Hasło:</label>
          <input type=\"password\" class=\"form-control\" id=\"pwd\" placeholder=\"Wprowadź hasło\" name=\"pwd\">
        </div>
        <div class=\"login-group-sec\">
          <label class=\"\"><input type=\"checkbox\" name=\"remember\"> Zapamiętaj mnie</label>
        </div>
        <button class=\"log-submit\" type=\"submit\" class=\"btn btn-default\">Zaloguj</button>
       ";
        // line 21
        if (array_key_exists("err_comm", $context)) {
            // line 22
            echo "        <label>";
            echo twig_escape_filter($this->env, (isset($context["err_comm"]) ? $context["err_comm"] : $this->getContext($context, "err_comm")), "html", null, true);
            echo "</label>
        ";
        }
        // line 24
        echo "      </form>
  </div>
</div>


";
        // line 29
        $this->loadTemplate("footer.html.twig", "Login/Login.html.twig", 29)->display($context);
        
        $__internal_9a1a6450d81e77e1d326496a4e4c008830d19d696e451b67a43af3752fedd68e->leave($__internal_9a1a6450d81e77e1d326496a4e4c008830d19d696e451b67a43af3752fedd68e_prof);

    }

    public function getTemplateName()
    {
        return "Login/Login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 29,  53 => 24,  47 => 22,  45 => 21,  24 => 2,  22 => 1,);
    }
}
/* {% include 'header.html.twig' %}*/
/* */
/* */
/* 	<div class="container-fluid">*/
/*   <div class="container-fluid">*/
/*     <div class="tile curved">*/
/*       <h2 class="log-in">Zaloguj się !</h2>*/
/*       <form class="" action="/execute_login" method="post">*/
/*         <div class="login-group-sec">*/
/*           <label class="login-label" for="email">E-mail:</label>*/
/*           <input type="email" class="form-control" id="email" placeholder="Wprowadź adres E-mail" name="email">*/
/*         </div>*/
/*         <div class="login-group-sec">*/
/*           <label class="login-label" for="pwd">Hasło:</label>*/
/*           <input type="password" class="form-control" id="pwd" placeholder="Wprowadź hasło" name="pwd">*/
/*         </div>*/
/*         <div class="login-group-sec">*/
/*           <label class=""><input type="checkbox" name="remember"> Zapamiętaj mnie</label>*/
/*         </div>*/
/*         <button class="log-submit" type="submit" class="btn btn-default">Zaloguj</button>*/
/*        {%if err_comm is defined%}*/
/*         <label>{{err_comm}}</label>*/
/*         {% endif %}*/
/*       </form>*/
/*   </div>*/
/* </div>*/
/* */
/* */
/* {% include 'footer.html.twig' %}*/
