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
        $__internal_534d28424598a23b225c3d8fefa2badeb908ec6a426db36061135c595c6d69c6 = $this->env->getExtension("native_profiler");
        $__internal_534d28424598a23b225c3d8fefa2badeb908ec6a426db36061135c595c6d69c6->enter($__internal_534d28424598a23b225c3d8fefa2badeb908ec6a426db36061135c595c6d69c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserPanel/UserPanel.html.twig"));

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
</head>
<body>
 
 <div class=\"container-fluid\">
  <h1>Witaj ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "html", null, true);
        echo "!</h1>
  <p>Resize the browser window to see the effect.</p>
  <form action=\"/Logout\">
    <button type=\"submit\" class=\"btn btn-default\">Wyloguj się</button>
  </form>
  <div class=\"row\">
    <div class=\"col-sm-4\" style=\"background-color:lavender;\">.Login: ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "html", null, true);
        echo "</div>
    <div class=\"col-sm-8\" style=\"background-color:lavenderblush;\">Email: ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "</div>
  </div>
</div>

<!-- Tutaj avatary zdjęcia etc -->

<div class=\"container\">
  <div class=\"panel-group\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">Sample Tekst !</div>
      <div class=\"panel-body\">Panel Content</div>
    </div>

<!-- Ponieżej formularze Edycji Danych -->

    <form class=\"form-inline\" action=\"/UserLoginUpdated\" method=\"post\">
  <div class=\"form-group\">
    <label for=\"login\">Edytuj Nazwę Użytkownika:</label>
    <input type=\"edtLogin\" class=\"form-control\" id=\"edtLogin\" name=\"edtLogin\">
  </div>
 <div class=\"form-group\"> 
    <div class=\"col-sm-offset-0 col-sm-10\">
      <button type=\"submit\" class=\"btn btn-default\">Wyślij</button>

  </div>
</div>
  </form>

</br>

<form class=\"form-inline\" action=\"/UserEmailUpdated\" method=\"post\">

    <div class=\"form-group\">
    <label for=\"email\">Edytuj Adres e-Mail:</label>
    <input type=\"email\" class=\"form-control\" id=\"edtEmail\" name=\"edtEmail\">
  </div>
   <div class=\"form-group\"> 
    <div class=\"col-sm-offset-0 col-sm-10\">
      <button type=\"submit\" class=\"btn btn-default\">Wyślij</button>
    </div>
  </div>
  </form>

</br>

<form class=\"form-inline\" action=\"/UserPassUpdated\" method=\"post\">

  <div class=\"form-group\">
    <label for=\"Hasło\">Nowe Hasło</label>
    <input type=\"password\" class=\"form-control\" id=\"edtPass\" name=\"edtPass\">
  </div>

</br></br>

  <div class=\"form-group\">

    <label for=\"Hasło\">Powtórz Hasło</label>
    <input type=\"password\" class=\"form-control\" id=\"edtPass2\" name=\"edtPass2\">
  </div>
    <div class=\"form-group\"> 
    <div class=\"col-sm-offset-0 col-sm-10\">
      <button type=\"submit\" class=\"btn btn-default\">Wyślij</button>
    </div>
  </div>
</form>

</br>

<form class=\"form-inline\" action =\"/UserAvatarUpdated\" method=\"post\" enctype=\"multipart/form-data\">
  <label for=\"avatar\">Twój  Avatar: <img height=\"100\" width=\"100\" src=\"data:image/jpeg;base64,";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["Actual_avatar"]) ? $context["Actual_avatar"] : $this->getContext($context, "Actual_avatar")), "html", null, true);
        echo "\" /> </br></br>Edytuj Avatara</label>
  <input type=\"file\" name=\"avatar\" accept=\"image/jpeg,image/gif,image/jpg,image/png\"> </br>
  <button type= \"submit\" class=\"btn btn-default\">Zmień avatar</button>
</br>
  <label> ";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["err_comm"]) ? $context["err_comm"] : $this->getContext($context, "err_comm")), "html", null, true);
        echo " </label>
</form>
<!--
    <div class=\"panel panel-primary\">
      <div class=\"panel-heading\">Panel with panel-primary class</div>
      <div class=\"panel-body\">Panel Content</div>
    </div>

    <div class=\"panel panel-success\">
      <div class=\"panel-heading\">Panel with panel-success class</div>
      <div class=\"panel-body\">Panel Content</div>
    </div>

    <div class=\"panel panel-info\">
      <div class=\"panel-heading\">Panel with panel-info class</div>
      <div class=\"panel-body\">Panel Content</div>
    </div>

    <div class=\"panel panel-warning\">
      <div class=\"panel-heading\">Panel with panel-warning class</div>
      <div class=\"panel-body\">Panel Content</div>
    </div>

    <div class=\"panel panel-danger\">
      <div class=\"panel-heading\">Panel with panel-danger class</div>
      <div class=\"panel-body\">Panel Content</div>
    </div>
  </div>
-->


</div>

</body>
</html>
";
        
        $__internal_534d28424598a23b225c3d8fefa2badeb908ec6a426db36061135c595c6d69c6->leave($__internal_534d28424598a23b225c3d8fefa2badeb908ec6a426db36061135c595c6d69c6_prof);

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
        return array (  129 => 94,  122 => 90,  50 => 21,  46 => 20,  37 => 14,  22 => 1,);
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
/* </head>*/
/* <body>*/
/*  */
/*  <div class="container-fluid">*/
/*   <h1>Witaj {{login}}!</h1>*/
/*   <p>Resize the browser window to see the effect.</p>*/
/*   <form action="/Logout">*/
/*     <button type="submit" class="btn btn-default">Wyloguj się</button>*/
/*   </form>*/
/*   <div class="row">*/
/*     <div class="col-sm-4" style="background-color:lavender;">.Login: {{login}}</div>*/
/*     <div class="col-sm-8" style="background-color:lavenderblush;">Email: {{email}}</div>*/
/*   </div>*/
/* </div>*/
/* */
/* <!-- Tutaj avatary zdjęcia etc -->*/
/* */
/* <div class="container">*/
/*   <div class="panel-group">*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">Sample Tekst !</div>*/
/*       <div class="panel-body">Panel Content</div>*/
/*     </div>*/
/* */
/* <!-- Ponieżej formularze Edycji Danych -->*/
/* */
/*     <form class="form-inline" action="/UserLoginUpdated" method="post">*/
/*   <div class="form-group">*/
/*     <label for="login">Edytuj Nazwę Użytkownika:</label>*/
/*     <input type="edtLogin" class="form-control" id="edtLogin" name="edtLogin">*/
/*   </div>*/
/*  <div class="form-group"> */
/*     <div class="col-sm-offset-0 col-sm-10">*/
/*       <button type="submit" class="btn btn-default">Wyślij</button>*/
/* */
/*   </div>*/
/* </div>*/
/*   </form>*/
/* */
/* </br>*/
/* */
/* <form class="form-inline" action="/UserEmailUpdated" method="post">*/
/* */
/*     <div class="form-group">*/
/*     <label for="email">Edytuj Adres e-Mail:</label>*/
/*     <input type="email" class="form-control" id="edtEmail" name="edtEmail">*/
/*   </div>*/
/*    <div class="form-group"> */
/*     <div class="col-sm-offset-0 col-sm-10">*/
/*       <button type="submit" class="btn btn-default">Wyślij</button>*/
/*     </div>*/
/*   </div>*/
/*   </form>*/
/* */
/* </br>*/
/* */
/* <form class="form-inline" action="/UserPassUpdated" method="post">*/
/* */
/*   <div class="form-group">*/
/*     <label for="Hasło">Nowe Hasło</label>*/
/*     <input type="password" class="form-control" id="edtPass" name="edtPass">*/
/*   </div>*/
/* */
/* </br></br>*/
/* */
/*   <div class="form-group">*/
/* */
/*     <label for="Hasło">Powtórz Hasło</label>*/
/*     <input type="password" class="form-control" id="edtPass2" name="edtPass2">*/
/*   </div>*/
/*     <div class="form-group"> */
/*     <div class="col-sm-offset-0 col-sm-10">*/
/*       <button type="submit" class="btn btn-default">Wyślij</button>*/
/*     </div>*/
/*   </div>*/
/* </form>*/
/* */
/* </br>*/
/* */
/* <form class="form-inline" action ="/UserAvatarUpdated" method="post" enctype="multipart/form-data">*/
/*   <label for="avatar">Twój  Avatar: <img height="100" width="100" src="data:image/jpeg;base64,{{Actual_avatar}}" /> </br></br>Edytuj Avatara</label>*/
/*   <input type="file" name="avatar" accept="image/jpeg,image/gif,image/jpg,image/png"> </br>*/
/*   <button type= "submit" class="btn btn-default">Zmień avatar</button>*/
/* </br>*/
/*   <label> {{err_comm}} </label>*/
/* </form>*/
/* <!--*/
/*     <div class="panel panel-primary">*/
/*       <div class="panel-heading">Panel with panel-primary class</div>*/
/*       <div class="panel-body">Panel Content</div>*/
/*     </div>*/
/* */
/*     <div class="panel panel-success">*/
/*       <div class="panel-heading">Panel with panel-success class</div>*/
/*       <div class="panel-body">Panel Content</div>*/
/*     </div>*/
/* */
/*     <div class="panel panel-info">*/
/*       <div class="panel-heading">Panel with panel-info class</div>*/
/*       <div class="panel-body">Panel Content</div>*/
/*     </div>*/
/* */
/*     <div class="panel panel-warning">*/
/*       <div class="panel-heading">Panel with panel-warning class</div>*/
/*       <div class="panel-body">Panel Content</div>*/
/*     </div>*/
/* */
/*     <div class="panel panel-danger">*/
/*       <div class="panel-heading">Panel with panel-danger class</div>*/
/*       <div class="panel-body">Panel Content</div>*/
/*     </div>*/
/*   </div>*/
/* -->*/
/* */
/* */
/* </div>*/
/* */
/* </body>*/
/* </html>*/
/* */
