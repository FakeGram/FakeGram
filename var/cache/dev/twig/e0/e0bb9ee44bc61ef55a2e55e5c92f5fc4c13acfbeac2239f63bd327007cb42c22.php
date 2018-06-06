<?php

/* SearchPanel/Explore.html.twig */
class __TwigTemplate_fc27fa76e7cd9841c637eadd59af72d80238f3f690ff003d2ecab9c6b2620725 extends Twig_Template
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
        $__internal_94c98c6c32f4766c5cce6401f5665e7856f06cd4f73bfbf30b209823f17b5f51 = $this->env->getExtension("native_profiler");
        $__internal_94c98c6c32f4766c5cce6401f5665e7856f06cd4f73bfbf30b209823f17b5f51->enter($__internal_94c98c6c32f4766c5cce6401f5665e7856f06cd4f73bfbf30b209823f17b5f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SearchPanel/Explore.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/profile.css"), "html", null, true);
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
\t<div style=\"width:900px;margin-left:auto;margin-right:auto;\">
\t<form action =\"/Search\" method=\"post\">
\t\t<input type=\"text\" class ='form-control inputs' id = \"SearchedArgument\" name =\"SearchedArgument\" placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), "html", null, true);
        echo "\" >
\t\t<button type=\"submit\" class = \"btn btn-default buttons\">Wyszukaj</button>
\t</form>
\t\t<div>
\t\t\t";
        // line 19
        if ((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures"))) {
            // line 20
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures")));
            foreach ($context['_seq'] as $context["_key"] => $context["pic"]) {
                // line 21
                echo "\t\t\t\t\t<div class=\"PicturesMainContainer\">
\t\t\t\t\t\t<a href=\"/Profile/Photo/";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["pic"], "id", array(), "array"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div class=\"PicturesContainer\">
\t\t\t\t\t\t\t<img src=\"/";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["pic"], "pic", array(), "array"), "html", null, true);
                echo "\" class=\"Pictures\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"PicturesButton\">
\t\t\t\t\t\t\t<input type=\"button\" value=\"Lubie to!\"/>
\t\t\t\t\t\t\t<input type=\"button\" value=\"Pokaż komentarze\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t\t";
        } else {
            // line 34
            echo "\t\t\t\t<label>Brak zdjęć</label>
\t\t\t";
        }
        // line 36
        echo "\t\t</div>
\t\t
\t</div>
\t</body>
\t</html>";
        
        $__internal_94c98c6c32f4766c5cce6401f5665e7856f06cd4f73bfbf30b209823f17b5f51->leave($__internal_94c98c6c32f4766c5cce6401f5665e7856f06cd4f73bfbf30b209823f17b5f51_prof);

    }

    public function getTemplateName()
    {
        return "SearchPanel/Explore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 36,  90 => 34,  87 => 33,  72 => 24,  67 => 22,  64 => 21,  59 => 20,  57 => 19,  50 => 15,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/* <html>*/
/* 	<head>*/
/* 		<title>Profile</title>*/
/* 		<meta charset="utf-8">*/
/* 	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />*/
/*   <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}" />*/
/* 	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>*/
/* 	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>*/
/* 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>*/
/* */
/* 	</head>*/
/* 	<body>*/
/* 	<div style="width:900px;margin-left:auto;margin-right:auto;">*/
/* 	<form action ="/Search" method="post">*/
/* 		<input type="text" class ='form-control inputs' id = "SearchedArgument" name ="SearchedArgument" placeholder="{{placeholder}}" >*/
/* 		<button type="submit" class = "btn btn-default buttons">Wyszukaj</button>*/
/* 	</form>*/
/* 		<div>*/
/* 			{% if pictures %}*/
/* 				{% for pic in pictures %}*/
/* 					<div class="PicturesMainContainer">*/
/* 						<a href="/Profile/Photo/{{pic['id']}}">*/
/* 						<div class="PicturesContainer">*/
/* 							<img src="/{{pic['pic']}}" class="Pictures"/>*/
/* 						</div>*/
/* 						</a>*/
/* 						<div class="PicturesButton">*/
/* 							<input type="button" value="Lubie to!"/>*/
/* 							<input type="button" value="Pokaż komentarze"/>*/
/* 						</div>*/
/* 					</div>*/
/* 				{% endfor %}*/
/* 			{% else %}*/
/* 				<label>Brak zdjęć</label>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 		*/
/* 	</div>*/
/* 	</body>*/
/* 	</html>*/
