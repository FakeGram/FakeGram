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
        $__internal_cc9cc2a5375e9b09f165eff283017292a6eba7e10df068c2fdd90f00894be70b = $this->env->getExtension("native_profiler");
        $__internal_cc9cc2a5375e9b09f165eff283017292a6eba7e10df068c2fdd90f00894be70b->enter($__internal_cc9cc2a5375e9b09f165eff283017292a6eba7e10df068c2fdd90f00894be70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Login:Login.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", ":Login:Login.html.twig", 1)->display($context);
        // line 2
        echo "
\t<div class=\"container-fluid\">
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
        // line 19
        echo twig_escape_filter($this->env, (isset($context["err_comm"]) ? $context["err_comm"] : $this->getContext($context, "err_comm")), "html", null, true);
        echo "</label>
      </form>
  </div>
</div>


";
        // line 25
        $this->loadTemplate("footer.html.twig", ":Login:Login.html.twig", 25)->display($context);
        
        $__internal_cc9cc2a5375e9b09f165eff283017292a6eba7e10df068c2fdd90f00894be70b->leave($__internal_cc9cc2a5375e9b09f165eff283017292a6eba7e10df068c2fdd90f00894be70b_prof);

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
        return array (  52 => 25,  43 => 19,  24 => 2,  22 => 1,);
    }
}
/* {% include 'header.html.twig' %}*/
/* */
/* 	<div class="container-fluid">*/
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