<?php

/* :Login:Register.html.twig */
class __TwigTemplate_1266073bb9f0e4b3ad752fcfaf7dd5e8405f0e1915e2aca3822f0860f3bc7b7e extends Twig_Template
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
        $__internal_4facc52d981cffc58312bb89f213137f043a237bf1bd088967402b9db150b57a = $this->env->getExtension("native_profiler");
        $__internal_4facc52d981cffc58312bb89f213137f043a237bf1bd088967402b9db150b57a->enter($__internal_4facc52d981cffc58312bb89f213137f043a237bf1bd088967402b9db150b57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Login:Register.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", ":Login:Register.html.twig", 1)->display($context);
        // line 2
        echo "
\t<div class=\"container-fluid\">
    <div class=\"tile curved\">
      <h2>Rejestracja</h2>
      <form \" action=\"/Register\" method=\"post\">
        <div class=\"form-group\">
          <label for=\"login\">Login:</label>
          <input type=\"login\" class=\"form-control\" id=\"login\" placeholder=\"Wprowadź login\" name=\"login\">
        </div>
        <div class=\"form-group\">
          <label for=\"email\">E-mail:</label>
          <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Wprowadź email\" name=\"email\">
        </div>
        <div class=\"form-group\">
          <label for=\"pwd\">Hasło:</label>
          <input type=\"password\" class=\"form-control\" id=\"pwd\" placeholder=\"Wprowadź hasło\" name=\"pwd\">
        </div>
           <div class=\"form-group\">
          <label for=\"pwd\">Powtórz hasło:</label>
          <input type=\"password\" class=\"form-control\" id=\"pwd_ack\" placeholder=\"Powtórz hasło\" name=\"pwd_ack\">
        </div>
        <div class=\"checkbox\">
          <label><input type=\"checkbox\" name=\"remember\"> Zapamiętaj mnie</label>
        </div>
        <button type=\"submit\" class=\"btn btn-default\">Zaloguj</button>
        <label>";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["err_comm"]) ? $context["err_comm"] : $this->getContext($context, "err_comm")), "html", null, true);
        echo "</label> <!-- Może się przydać  -->
      </form>
    </div>
  </div>

";
        // line 32
        $this->loadTemplate("footer.html.twig", ":Login:Register.html.twig", 32)->display($context);
        
        $__internal_4facc52d981cffc58312bb89f213137f043a237bf1bd088967402b9db150b57a->leave($__internal_4facc52d981cffc58312bb89f213137f043a237bf1bd088967402b9db150b57a_prof);

    }

    public function getTemplateName()
    {
        return ":Login:Register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 32,  51 => 27,  24 => 2,  22 => 1,);
    }
}
/* {% include 'header.html.twig' %}*/
/* */
/* 	<div class="container-fluid">*/
/*     <div class="tile curved">*/
/*       <h2>Rejestracja</h2>*/
/*       <form " action="/Register" method="post">*/
/*         <div class="form-group">*/
/*           <label for="login">Login:</label>*/
/*           <input type="login" class="form-control" id="login" placeholder="Wprowadź login" name="login">*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label for="email">E-mail:</label>*/
/*           <input type="email" class="form-control" id="email" placeholder="Wprowadź email" name="email">*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label for="pwd">Hasło:</label>*/
/*           <input type="password" class="form-control" id="pwd" placeholder="Wprowadź hasło" name="pwd">*/
/*         </div>*/
/*            <div class="form-group">*/
/*           <label for="pwd">Powtórz hasło:</label>*/
/*           <input type="password" class="form-control" id="pwd_ack" placeholder="Powtórz hasło" name="pwd_ack">*/
/*         </div>*/
/*         <div class="checkbox">*/
/*           <label><input type="checkbox" name="remember"> Zapamiętaj mnie</label>*/
/*         </div>*/
/*         <button type="submit" class="btn btn-default">Zaloguj</button>*/
/*         <label>{{err_comm}}</label> <!-- Może się przydać  -->*/
/*       </form>*/
/*     </div>*/
/*   </div>*/
/* */
/* {% include 'footer.html.twig' %}*/
/* */
