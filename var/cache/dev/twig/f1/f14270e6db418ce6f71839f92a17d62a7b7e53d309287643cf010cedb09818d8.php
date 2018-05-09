<?php

/* Profile/Photo.html.twig */
class __TwigTemplate_5d47010a4446ad9b08b79ed87955a0916a89a149e2f35f5b8562b4335288acb2 extends Twig_Template
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
        $__internal_d7fb1748fed7d6d22abb5d789e6ac59a7d471c99abcf71a34d64951ae36bdf1b = $this->env->getExtension("native_profiler");
        $__internal_d7fb1748fed7d6d22abb5d789e6ac59a7d471c99abcf71a34d64951ae36bdf1b->enter($__internal_d7fb1748fed7d6d22abb5d789e6ac59a7d471c99abcf71a34d64951ae36bdf1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Profile/Photo.html.twig"));

        // line 1
        echo "<html>
\t<head>
\t\t<title>Profile</title>
\t\t<meta charset=\"utf-8\">
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/photo.css"), "html", null, true);
        echo "\" />
\t<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>

\t</head>
\t<body>
\t<div class=\"Container\">
\t\t<div class=\"PhotoContainer\">
\t\t\t<img src=\"/images/";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic")), "pic", array(), "array"), "html", null, true);
        echo "\" class=\"Photo\"/>
\t\t</div>
\t\t<div class=\"UserInfoAndTagsContainer\">
\t\t\t<div class=\"UserInfoContainer\">
\t\t\t\t
\t\t\t\t<img src=\"data:image/jpeg;base64,";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usr"]) ? $context["usr"] : $this->getContext($context, "usr")), "avatar", array(), "array"), "html", null, true);
        echo "\" class=\"Avatar\"/>
\t\t\t\t
\t\t\t\t<div class=\"Info\">
\t\t\t\t\t<label>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usr"]) ? $context["usr"] : $this->getContext($context, "usr")), "login", array(), "array"), "html", null, true);
        echo "</label>
\t\t\t\t\t<label>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usr"]) ? $context["usr"] : $this->getContext($context, "usr")), "email", array(), "array"), "html", null, true);
        echo "</label>
\t\t\t\t\t<label>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usr"]) ? $context["usr"] : $this->getContext($context, "usr")), "nameAndSurrname", array(), "array"), "html", null, true);
        echo "</label>
\t\t\t\t</info>
\t\t\t</div>
\t\t\t<div class=\"TagsContainer\">
\t\t\t\t<div class=\"Tag\">
\t\t\t\tTU BĘDĄ TAGI
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"CommentsContainer\">
\t\t\t\t<div class=\"Comment\">
\t\t\t\tKomentarze też będą :V
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t</div>
\t
\t</body>
</html>";
        
        $__internal_d7fb1748fed7d6d22abb5d789e6ac59a7d471c99abcf71a34d64951ae36bdf1b->leave($__internal_d7fb1748fed7d6d22abb5d789e6ac59a7d471c99abcf71a34d64951ae36bdf1b_prof);

    }

    public function getTemplateName()
    {
        return "Profile/Photo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 25,  68 => 24,  64 => 23,  58 => 20,  50 => 15,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/* <html>*/
/* 	<head>*/
/* 		<title>Profile</title>*/
/* 		<meta charset="utf-8">*/
/* 	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />*/
/*   <link rel="stylesheet" href="{{ asset('assets/css/photo.css') }}" />*/
/* 	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>*/
/* 	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>*/
/* 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>*/
/* */
/* 	</head>*/
/* 	<body>*/
/* 	<div class="Container">*/
/* 		<div class="PhotoContainer">*/
/* 			<img src="/images/{{pic['pic']}}" class="Photo"/>*/
/* 		</div>*/
/* 		<div class="UserInfoAndTagsContainer">*/
/* 			<div class="UserInfoContainer">*/
/* 				*/
/* 				<img src="data:image/jpeg;base64,{{usr['avatar']}}" class="Avatar"/>*/
/* 				*/
/* 				<div class="Info">*/
/* 					<label>{{usr['login']}}</label>*/
/* 					<label>{{usr['email']}}</label>*/
/* 					<label>{{usr['nameAndSurrname']}}</label>*/
/* 				</info>*/
/* 			</div>*/
/* 			<div class="TagsContainer">*/
/* 				<div class="Tag">*/
/* 				TU BĘDĄ TAGI*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="CommentsContainer">*/
/* 				<div class="Comment">*/
/* 				Komentarze też będą :V*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 	</div>*/
/* 	*/
/* 	</body>*/
/* </html>*/
