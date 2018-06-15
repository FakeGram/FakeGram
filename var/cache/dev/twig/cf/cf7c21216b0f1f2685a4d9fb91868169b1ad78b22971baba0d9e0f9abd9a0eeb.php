<?php

/* :Login:Login.html.twig */
class __TwigTemplate_de2ac3d31b273319b07cbdd99e67483a93d7d7302b05bcfe8e5613d3a435cffd extends Twig_Template
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
        $__internal_36960d2905e518fc54ee6c9ff9e55d6cb859b94edf5e616d83b95938d5f908ef = $this->env->getExtension("native_profiler");
        $__internal_36960d2905e518fc54ee6c9ff9e55d6cb859b94edf5e616d83b95938d5f908ef->enter($__internal_36960d2905e518fc54ee6c9ff9e55d6cb859b94edf5e616d83b95938d5f908ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Login:Login.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", ":Login:Login.html.twig", 1)->display($context);
        // line 2
        echo "
<<<<<<< HEAD
\t<div class=\"container-fluid\">
=======
  <div class=\"container-fluid\">
>>>>>>> origin/Sladu
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
        <label>";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["err_comm"]) ? $context["err_comm"] : $this->getContext($context, "err_comm")), "html", null, true);
        echo "</label>
      </form>
  </div>
</div>


";
        // line 29
        $this->loadTemplate("footer.html.twig", ":Login:Login.html.twig", 29)->display($context);
        
        $__internal_36960d2905e518fc54ee6c9ff9e55d6cb859b94edf5e616d83b95938d5f908ef->leave($__internal_36960d2905e518fc54ee6c9ff9e55d6cb859b94edf5e616d83b95938d5f908ef_prof);

    }

    public function getTemplateName()
    {
        return ":Login:Login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 29,  47 => 23,  24 => 2,  22 => 1,);
    }
}
/* {% include 'header.html.twig' %}*/
/* */
/* <<<<<<< HEAD*/
/* 	<div class="container-fluid">*/
/* =======*/
/*   <div class="container-fluid">*/
/* >>>>>>> origin/Sladu*/
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
/*         <label>{{err_comm}}</label>*/
/*       </form>*/
/*   </div>*/
/* </div>*/
/* */
/* */
/* {% include 'footer.html.twig' %}*/
