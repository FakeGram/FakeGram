<?php

/* Login/Login.html.twig */
class __TwigTemplate_20ef2a04e21284b3dad94ce0ebe7f3ec3a7d03babe5ce3c9e4c46d8443e87bee extends Twig_Template
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
        $__internal_897990d8cfb7a7196af000595816d720c088d888e3aa6b511e860608acf2e289 = $this->env->getExtension("native_profiler");
        $__internal_897990d8cfb7a7196af000595816d720c088d888e3aa6b511e860608acf2e289->enter($__internal_897990d8cfb7a7196af000595816d720c088d888e3aa6b511e860608acf2e289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Login/Login.html.twig"));

        // line 1
        echo "<html>
\t<head>
\t\t<title>Login ver. 0.00001</title>
\t\t<meta charset=\"utf-8\">
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
\t<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
\t</head>
\t<body>
\t<div class=\"container\">
  <h2>Zaloguj się !</h2>
  <p>Make the viewport larger than 768px wide to see that all of the form elements are inline, left aligned, and the labels are alongside.</p>
  <form class=\"form-inline\" action=\"/execute_login\" method=\"post\">
    <div class=\"form-group\">
      <label for=\"email\">E-mail:</label>
      <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Wprowadź adres E-mail\" name=\"email\">
    </div>
    <div class=\"form-group\">
      <label for=\"pwd\">Hasło:</label>
      <input type=\"password\" class=\"form-control\" id=\"pwd\" placeholder=\"Wprowadź hasło\" name=\"pwd\">
    </div>
    <div class=\"checkbox\">
      <label><input type=\"checkbox\" name=\"remember\"> Zapamiętaj mnie</label>
    </div>
    <button type=\"submit\" class=\"btn btn-default\">Zaloguj</button>
    <label>";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["err_comm"]) ? $context["err_comm"] : $this->getContext($context, "err_comm")), "html", null, true);
        echo "</label>
  </form>
</div>
\t</body>
</html>
";
        
        $__internal_897990d8cfb7a7196af000595816d720c088d888e3aa6b511e860608acf2e289->leave($__internal_897990d8cfb7a7196af000595816d720c088d888e3aa6b511e860608acf2e289_prof);

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
        return array (  59 => 27,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/* <html>*/
/* 	<head>*/
/* 		<title>Login ver. 0.00001</title>*/
/* 		<meta charset="utf-8">*/
/* 	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />*/
/* 	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>*/
/* 	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>*/
/* 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>*/
/* 	</head>*/
/* 	<body>*/
/* 	<div class="container">*/
/*   <h2>Zaloguj się !</h2>*/
/*   <p>Make the viewport larger than 768px wide to see that all of the form elements are inline, left aligned, and the labels are alongside.</p>*/
/*   <form class="form-inline" action="/execute_login" method="post">*/
/*     <div class="form-group">*/
/*       <label for="email">E-mail:</label>*/
/*       <input type="email" class="form-control" id="email" placeholder="Wprowadź adres E-mail" name="email">*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label for="pwd">Hasło:</label>*/
/*       <input type="password" class="form-control" id="pwd" placeholder="Wprowadź hasło" name="pwd">*/
/*     </div>*/
/*     <div class="checkbox">*/
/*       <label><input type="checkbox" name="remember"> Zapamiętaj mnie</label>*/
/*     </div>*/
/*     <button type="submit" class="btn btn-default">Zaloguj</button>*/
/*     <label>{{err_comm}}</label>*/
/*   </form>*/
/* </div>*/
/* 	</body>*/
/* </html>*/
/* */
