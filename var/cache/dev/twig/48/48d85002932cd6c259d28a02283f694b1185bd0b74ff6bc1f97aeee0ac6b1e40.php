<?php

/* Profile/Profile.html.twig */
class __TwigTemplate_9f92194dbe5e8054ab1d8f7fe85df83321d89d5641f530f2c96c4066138b3ad1 extends Twig_Template
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
        $__internal_6be265bac0c82f772261536b2a2d1bee261235a4da7ed55ef19ba890b4863d9e = $this->env->getExtension("native_profiler");
        $__internal_6be265bac0c82f772261536b2a2d1bee261235a4da7ed55ef19ba890b4863d9e->enter($__internal_6be265bac0c82f772261536b2a2d1bee261235a4da7ed55ef19ba890b4863d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Profile/Profile.html.twig"));

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
\t\t<div>
\t\t<label>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "login", array(), "array"), "html", null, true);
        echo "</label>
\t\t<label>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array(), "array"), "html", null, true);
        echo "</label>
\t\t<label>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nameAndSurrname", array(), "array"), "html", null, true);
        echo "</label>
\t\t<label>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "about", array(), "array"), "html", null, true);
        echo "</label>
\t\t<label><img width=100px height=100px src=\"data:image/jpeg;base64,";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "avatar", array(), "array"), "html", null, true);
        echo "\"/></label>
\t\t</div>
\t\t<div>
\t\t\t";
        // line 22
        if ((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures"))) {
            // line 23
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures")));
            foreach ($context['_seq'] as $context["_key"] => $context["pic"]) {
                // line 24
                echo "\t\t\t\t\t<div class=\"PicturesMainContainer\">
\t\t\t\t\t\t<a href=\"/Profile/Photo/";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["pic"], "id", array(), "array"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div class=\"PicturesContainer\">
\t\t\t\t\t\t\t<img src=\"/";
                // line 27
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
            // line 36
            echo "\t\t\t";
        } else {
            // line 37
            echo "\t\t\t\t<label>Brak zdjęć</label>
\t\t\t";
        }
        // line 39
        echo "\t\t</div>
\t\t
\t</div>
\t</body>
\t</html>";
        
        $__internal_6be265bac0c82f772261536b2a2d1bee261235a4da7ed55ef19ba890b4863d9e->leave($__internal_6be265bac0c82f772261536b2a2d1bee261235a4da7ed55ef19ba890b4863d9e_prof);

    }

    public function getTemplateName()
    {
        return "Profile/Profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 39,  105 => 37,  102 => 36,  87 => 27,  82 => 25,  79 => 24,  74 => 23,  72 => 22,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
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
/* 		<div>*/
/* 		<label>{{user['login']}}</label>*/
/* 		<label>{{user['email']}}</label>*/
/* 		<label>{{user['nameAndSurrname']}}</label>*/
/* 		<label>{{user['about']}}</label>*/
/* 		<label><img width=100px height=100px src="data:image/jpeg;base64,{{user['avatar']}}"/></label>*/
/* 		</div>*/
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
