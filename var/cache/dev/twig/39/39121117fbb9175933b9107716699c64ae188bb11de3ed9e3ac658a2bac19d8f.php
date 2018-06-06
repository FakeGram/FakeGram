<?php

/* UserPanel/UserPanel.html.twig */
class __TwigTemplate_67c99a84ee2654f70bbcde45d54bc7ab614384f8c6008c19b01143f3dccf3c45 extends Twig_Template
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
        $__internal_36d4806df82a09fbe919cc1b4b0e97a889783fbf9715d32303baf69966427091 = $this->env->getExtension("native_profiler");
        $__internal_36d4806df82a09fbe919cc1b4b0e97a889783fbf9715d32303baf69966427091->enter($__internal_36d4806df82a09fbe919cc1b4b0e97a889783fbf9715d32303baf69966427091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserPanel/UserPanel.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "UserPanel/UserPanel.html.twig", 1)->display($context);
        // line 2
        echo "


  <div class=\"container-fluid\">

    <div class=\"tile curved\">
    <h1>Witaj ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "html", null, true);
        echo "!</h1>

      <form class=\"\" action=\"/UserLoginUpdated\" method=\"post\">
        <div class=\"form-group\">
            <label for=\"login\">Edytuj Nazwę Użytkownika:</label>
          <input type=\"edtLogin\" class=\"form-control inputs\" id=\"edtLogin\" name=\"edtLogin\">
        </div>
        <div class=\"form-group\"> 
            <button type=\"submit\" class=\"btn btn-default buttons\">Wyślij</button>
        </div>
      </form>




      <form class=\"\" action=\"/UserEmailUpdated\" method=\"post\">
        <div class=\"form-group\">
          <label for=\"email\">Edytuj Adres e-Mail:</label>
          <input type=\"email\" class=\"form-control inputs\" id=\"edtEmail\" name=\"edtEmail\">
        </div>
        <div class=\"form-group\"> 
            <button type=\"submit\" class=\"btn btn-default buttons\">Wyślij</button>
        </div>
      </form>


   

      <form class=\"\" action=\"/UserPassUpdated\" method=\"post\">
        <div class=\"form-group\">
          <label for=\"Hasło\">Nowe Hasło</label>
          <input type=\"password\" class=\"form-control inputs\" id=\"edtPass\" name=\"edtPass\">
        </div>
        <div class=\"form-group\" style=\"margin-top: 20px;\">
          <label for=\"Hasło\">Powtórz Hasło</label>
          <input type=\"password\" class=\"form-control inputs\" id=\"edtPass2\" name=\"edtPass2\">
        </div>
        <div class=\"form-group\"> 
            <button type=\"submit\" class=\"btn btn-default\">Wyślij</button>
        </div>
      </form>


    
    <div class=\"bottom_part\">
      <div class=\"left\">
        <form class=\"form-inline\" action =\"/UserAvatarUpdated\" method=\"post\" enctype=\"multipart/form-data\">
          <label for=\"avatar\">Twój  Avatar:</label>
          <img height=\"100\" width=\"100\" src=\"data:image/jpeg;base64,";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["Actual_avatar"]) ? $context["Actual_avatar"] : $this->getContext($context, "Actual_avatar")), "html", null, true);
        echo "\" class=\"avatar\"/>
          <input type=\"file\" name=\"avatar\" accept=\"image/jpeg,image/gif,image/jpg,image/png\" class=\"load_avatar\">
          <button type= \"submit\" class=\"btn btn-default\">Zmień avatar</button>
          <label> ";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["err_comm"]) ? $context["err_comm"] : $this->getContext($context, "err_comm")), "html", null, true);
        echo " </label>
        </form>
      </div>
      <div class=\"right\">
        <form class=\"form-inline\" action=\"/UserAboutUpdated\" method=\"post\" id=\"aboutForm\">
          <label for=\"About Me\" class=\"about\">Opis O Mnie:</label>
          <textarea form =\"aboutForm\" name=\"edtAbout\" id=\"edtAbout\" class=\"text\">";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), "html", null, true);
        echo "</textarea>
          <input type= \"submit\" class=\"btn btn-default\" value=\"Edytuj Opis\">
        </form>
      </div>
    </div>
  </div>
</div>

";
        // line 73
        $this->loadTemplate("footer.html.twig", "UserPanel/UserPanel.html.twig", 73)->display($context);
        
        $__internal_36d4806df82a09fbe919cc1b4b0e97a889783fbf9715d32303baf69966427091->leave($__internal_36d4806df82a09fbe919cc1b4b0e97a889783fbf9715d32303baf69966427091_prof);

    }

    public function getTemplateName()
    {
        return "UserPanel/UserPanel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 73,  98 => 65,  89 => 59,  83 => 56,  32 => 8,  24 => 2,  22 => 1,);
    }
}
/* {% include 'header.html.twig' %}*/
/* */
/* */
/* */
/*   <div class="container-fluid">*/
/* */
/*     <div class="tile curved">*/
/*     <h1>Witaj {{login}}!</h1>*/
/* */
/*       <form class="" action="/UserLoginUpdated" method="post">*/
/*         <div class="form-group">*/
/*             <label for="login">Edytuj Nazwę Użytkownika:</label>*/
/*           <input type="edtLogin" class="form-control inputs" id="edtLogin" name="edtLogin">*/
/*         </div>*/
/*         <div class="form-group"> */
/*             <button type="submit" class="btn btn-default buttons">Wyślij</button>*/
/*         </div>*/
/*       </form>*/
/* */
/* */
/* */
/* */
/*       <form class="" action="/UserEmailUpdated" method="post">*/
/*         <div class="form-group">*/
/*           <label for="email">Edytuj Adres e-Mail:</label>*/
/*           <input type="email" class="form-control inputs" id="edtEmail" name="edtEmail">*/
/*         </div>*/
/*         <div class="form-group"> */
/*             <button type="submit" class="btn btn-default buttons">Wyślij</button>*/
/*         </div>*/
/*       </form>*/
/* */
/* */
/*    */
/* */
/*       <form class="" action="/UserPassUpdated" method="post">*/
/*         <div class="form-group">*/
/*           <label for="Hasło">Nowe Hasło</label>*/
/*           <input type="password" class="form-control inputs" id="edtPass" name="edtPass">*/
/*         </div>*/
/*         <div class="form-group" style="margin-top: 20px;">*/
/*           <label for="Hasło">Powtórz Hasło</label>*/
/*           <input type="password" class="form-control inputs" id="edtPass2" name="edtPass2">*/
/*         </div>*/
/*         <div class="form-group"> */
/*             <button type="submit" class="btn btn-default">Wyślij</button>*/
/*         </div>*/
/*       </form>*/
/* */
/* */
/*     */
/*     <div class="bottom_part">*/
/*       <div class="left">*/
/*         <form class="form-inline" action ="/UserAvatarUpdated" method="post" enctype="multipart/form-data">*/
/*           <label for="avatar">Twój  Avatar:</label>*/
/*           <img height="100" width="100" src="data:image/jpeg;base64,{{Actual_avatar}}" class="avatar"/>*/
/*           <input type="file" name="avatar" accept="image/jpeg,image/gif,image/jpg,image/png" class="load_avatar">*/
/*           <button type= "submit" class="btn btn-default">Zmień avatar</button>*/
/*           <label> {{err_comm}} </label>*/
/*         </form>*/
/*       </div>*/
/*       <div class="right">*/
/*         <form class="form-inline" action="/UserAboutUpdated" method="post" id="aboutForm">*/
/*           <label for="About Me" class="about">Opis O Mnie:</label>*/
/*           <textarea form ="aboutForm" name="edtAbout" id="edtAbout" class="text">{{about}}</textarea>*/
/*           <input type= "submit" class="btn btn-default" value="Edytuj Opis">*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* {% include 'footer.html.twig' %}*/
