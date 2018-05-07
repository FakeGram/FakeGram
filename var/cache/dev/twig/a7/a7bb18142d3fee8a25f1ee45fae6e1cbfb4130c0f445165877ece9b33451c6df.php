<?php

/* Login/Register.html.twig */
class __TwigTemplate_ec7317e18f5cd49e7f6e65bc77ca4dd97c4208e976c7135b6617455518dc6def extends Twig_Template
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
        $__internal_fa0c02fad43da2c74ecb81d1b4b3f72034d5b5d9748f1fb94ea7dc26c2dafaad = $this->env->getExtension("native_profiler");
        $__internal_fa0c02fad43da2c74ecb81d1b4b3f72034d5b5d9748f1fb94ea7dc26c2dafaad->enter($__internal_fa0c02fad43da2c74ecb81d1b4b3f72034d5b5d9748f1fb94ea7dc26c2dafaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Login/Register.html.twig"));

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
  <h2>Rejestracja</h2>
  <p>Wypełnij dobrze wszystkie pola to spotkasz bagiennego trola.</p>
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
        // line 35
        echo twig_escape_filter($this->env, (isset($context["err_comm"]) ? $context["err_comm"] : $this->getContext($context, "err_comm")), "html", null, true);
        echo "</label> <!-- Może się przydać  -->
  </form>
</div>
\t</body>
</html>
";
        
        $__internal_fa0c02fad43da2c74ecb81d1b4b3f72034d5b5d9748f1fb94ea7dc26c2dafaad->leave($__internal_fa0c02fad43da2c74ecb81d1b4b3f72034d5b5d9748f1fb94ea7dc26c2dafaad_prof);

    }

    public function getTemplateName()
    {
        return "Login/Register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 35,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
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
/*   <h2>Rejestracja</h2>*/
/*   <p>Wypełnij dobrze wszystkie pola to spotkasz bagiennego trola.</p>*/
/*   <form " action="/Register" method="post">*/
/*     <div class="form-group">*/
/*       <label for="login">Login:</label>*/
/*       <input type="login" class="form-control" id="login" placeholder="Wprowadź login" name="login">*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label for="email">E-mail:</label>*/
/*       <input type="email" class="form-control" id="email" placeholder="Wprowadź email" name="email">*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label for="pwd">Hasło:</label>*/
/*       <input type="password" class="form-control" id="pwd" placeholder="Wprowadź hasło" name="pwd">*/
/*     </div>*/
/*        <div class="form-group">*/
/*       <label for="pwd">Powtórz hasło:</label>*/
/*       <input type="password" class="form-control" id="pwd_ack" placeholder="Powtórz hasło" name="pwd_ack">*/
/*     </div>*/
/*     <div class="checkbox">*/
/*       <label><input type="checkbox" name="remember"> Zapamiętaj mnie</label>*/
/*     </div>*/
/*     <button type="submit" class="btn btn-default">Zaloguj</button>*/
/*     <label>{{err_comm}}</label> <!-- Może się przydać  -->*/
/*   </form>*/
/* </div>*/
/* 	</body>*/
/* </html>*/
/* */
