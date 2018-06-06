<?php

/* UserPanel/UserPanel.html.twig */
class __TwigTemplate_cefacaf88f166508eef79b3fc936eb3c3207f4ce766c9fa0590f366eaa13c7bc extends Twig_Template
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
        $__internal_beb11acb5d94cb8ab4f12cabfe3d43f3bdb8970c6e2c7edfaac773072b05c58d = $this->env->getExtension("native_profiler");
        $__internal_beb11acb5d94cb8ab4f12cabfe3d43f3bdb8970c6e2c7edfaac773072b05c58d->enter($__internal_beb11acb5d94cb8ab4f12cabfe3d43f3bdb8970c6e2c7edfaac773072b05c58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserPanel/UserPanel.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <title>Bootstrap Example</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/user_panel.css"), "html", null, true);
        echo "\" />
</head>
<body>


  <form action=\"/Logout\">
    <button type=\"submit\" class=\"btn btn-default\">Wyloguj się</button>
  </form>
  <form action=\"/\">
    <button type=\"submit\" class=\"btn btn-default\">Strona Główna</button>
  </form>


  <div class=\"container-fluid\">

    <div class=\"panel_tile\">
    <h1>Witaj ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "html", null, true);
        echo "!</h1>
    <div class=\"row\">
      <div class=\"col-sm-4\" style=\"background-color:lavender;\">.Login: ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "html", null, true);
        echo "</div>
      <div class=\"col-sm-8\" style=\"background-color:lavenderblush;\">Email: ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "</div>
    </div>

    <div class=\"single_input\">
      <form class=\"form-inline\" action=\"/UserLoginUpdated\" method=\"post\">
        <div class=\"form-group\">
            <label for=\"login\">Edytuj Nazwę Użytkownika:</label>
          <input type=\"edtLogin\" class=\"form-control inputs\" id=\"edtLogin\" name=\"edtLogin\">
        </div>
        <div class=\"form-group\"> 
          <div class=\"col-sm-offset-0 col-sm-10\">
            <button type=\"submit\" class=\"btn btn-default buttons\">Wyślij</button>
          </div>
        </div>
      </form>
    </div>


    <div class=\"single_input\">
      <form class=\"form-inline\" action=\"/UserEmailUpdated\" method=\"post\">
        <div class=\"form-group\">
          <label for=\"email\">Edytuj Adres e-Mail:</label>
          <input type=\"email\" class=\"form-control inputs\" id=\"edtEmail\" name=\"edtEmail\">
        </div>
        <div class=\"form-group\"> 
          <div class=\"col-sm-offset-0 col-sm-10\">
            <button type=\"submit\" class=\"btn btn-default buttons\">Wyślij</button>
          </div>
        </div>
      </form>
    </div>

   

    <div class=\"single_input\">
      <form class=\"form-inline\" action=\"/UserPassUpdated\" method=\"post\">
        <div class=\"form-group\">
          <label for=\"Hasło\">Nowe Hasło</label>
          <input type=\"password\" class=\"form-control inputs\" id=\"edtPass\" name=\"edtPass\">
        </div>
        <div class=\"form-group\" style=\"margin-top: 20px;\">
          <label for=\"Hasło\">Powtórz Hasło</label>
          <input type=\"password\" class=\"form-control inputs\" id=\"edtPass2\" name=\"edtPass2\">
        </div>
        <div class=\"form-group\"> 
          <div class=\"col-sm-offset-0 col-sm-10\">
            <button type=\"submit\" class=\"btn btn-default\">Wyślij</button>
          </div>
        </div>
      </form>
    </div>

    
    <div class=\"bottom_part\">
      <div class=\"left\">
        <form class=\"form-inline\" action =\"/UserAvatarUpdated\" method=\"post\" enctype=\"multipart/form-data\">
          <label for=\"avatar\">Twój  Avatar:</label>
          <img height=\"100\" width=\"100\" src=\"data:image/jpeg;base64,";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["Actual_avatar"]) ? $context["Actual_avatar"] : $this->getContext($context, "Actual_avatar")), "html", null, true);
        echo "\" class=\"avatar\"/>
          <input type=\"file\" name=\"avatar\" accept=\"image/jpeg,image/gif,image/jpg,image/png\" class=\"load_avatar\">
          <button type= \"submit\" class=\"btn btn-default\">Zmień avatar</button>
          <label> ";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["err_comm"]) ? $context["err_comm"] : $this->getContext($context, "err_comm")), "html", null, true);
        echo " </label>
        </form>
      </div>
      <div class=\"right\">
        <form class=\"form-inline\" action=\"/UserAboutUpdated\" method=\"post\" id=\"aboutForm\">
          <label for=\"About Me\" class=\"about\">Opis O Mnie:</label>
          <textarea form =\"aboutForm\" name=\"edtAbout\" id=\"edtAbout\" class=\"text\">";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), "html", null, true);
        echo "</textarea>
          <input type= \"submit\" class=\"btn btn-default\" value=\"Edytuj Opis\">
        </form>
      </div>
    </div>
  </div>
</div>


</body>
</html>
";
        
        $__internal_beb11acb5d94cb8ab4f12cabfe3d43f3bdb8970c6e2c7edfaac773072b05c58d->leave($__internal_beb11acb5d94cb8ab4f12cabfe3d43f3bdb8970c6e2c7edfaac773072b05c58d_prof);

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
        return array (  136 => 95,  127 => 89,  121 => 86,  61 => 29,  57 => 28,  52 => 26,  33 => 10,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*   <title>Bootstrap Example</title>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">*/
/*   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>*/
/*   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>*/
/*   <link rel="stylesheet" href="{{ asset('assets/css/user_panel.css') }}" />*/
/* </head>*/
/* <body>*/
/* */
/* */
/*   <form action="/Logout">*/
/*     <button type="submit" class="btn btn-default">Wyloguj się</button>*/
/*   </form>*/
/*   <form action="/">*/
/*     <button type="submit" class="btn btn-default">Strona Główna</button>*/
/*   </form>*/
/* */
/* */
/*   <div class="container-fluid">*/
/* */
/*     <div class="panel_tile">*/
/*     <h1>Witaj {{login}}!</h1>*/
/*     <div class="row">*/
/*       <div class="col-sm-4" style="background-color:lavender;">.Login: {{login}}</div>*/
/*       <div class="col-sm-8" style="background-color:lavenderblush;">Email: {{email}}</div>*/
/*     </div>*/
/* */
/*     <div class="single_input">*/
/*       <form class="form-inline" action="/UserLoginUpdated" method="post">*/
/*         <div class="form-group">*/
/*             <label for="login">Edytuj Nazwę Użytkownika:</label>*/
/*           <input type="edtLogin" class="form-control inputs" id="edtLogin" name="edtLogin">*/
/*         </div>*/
/*         <div class="form-group"> */
/*           <div class="col-sm-offset-0 col-sm-10">*/
/*             <button type="submit" class="btn btn-default buttons">Wyślij</button>*/
/*           </div>*/
/*         </div>*/
/*       </form>*/
/*     </div>*/
/* */
/* */
/*     <div class="single_input">*/
/*       <form class="form-inline" action="/UserEmailUpdated" method="post">*/
/*         <div class="form-group">*/
/*           <label for="email">Edytuj Adres e-Mail:</label>*/
/*           <input type="email" class="form-control inputs" id="edtEmail" name="edtEmail">*/
/*         </div>*/
/*         <div class="form-group"> */
/*           <div class="col-sm-offset-0 col-sm-10">*/
/*             <button type="submit" class="btn btn-default buttons">Wyślij</button>*/
/*           </div>*/
/*         </div>*/
/*       </form>*/
/*     </div>*/
/* */
/*    */
/* */
/*     <div class="single_input">*/
/*       <form class="form-inline" action="/UserPassUpdated" method="post">*/
/*         <div class="form-group">*/
/*           <label for="Hasło">Nowe Hasło</label>*/
/*           <input type="password" class="form-control inputs" id="edtPass" name="edtPass">*/
/*         </div>*/
/*         <div class="form-group" style="margin-top: 20px;">*/
/*           <label for="Hasło">Powtórz Hasło</label>*/
/*           <input type="password" class="form-control inputs" id="edtPass2" name="edtPass2">*/
/*         </div>*/
/*         <div class="form-group"> */
/*           <div class="col-sm-offset-0 col-sm-10">*/
/*             <button type="submit" class="btn btn-default">Wyślij</button>*/
/*           </div>*/
/*         </div>*/
/*       </form>*/
/*     </div>*/
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
/* */
/* </body>*/
/* </html>*/
/* */
