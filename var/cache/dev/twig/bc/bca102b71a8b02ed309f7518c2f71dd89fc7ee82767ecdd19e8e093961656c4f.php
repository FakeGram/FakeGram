<?php

/* Profile/Profile.html.twig */
class __TwigTemplate_c22005397437e878450836ca329110d45c2e6671a45c54bbcd90a839b97b8d55 extends Twig_Template
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
        $__internal_b5d1d3c5035d3741eeb4a6b0194b1fe48aacc2a8db49a321a43d9714c5ec18d4 = $this->env->getExtension("native_profiler");
        $__internal_b5d1d3c5035d3741eeb4a6b0194b1fe48aacc2a8db49a321a43d9714c5ec18d4->enter($__internal_b5d1d3c5035d3741eeb4a6b0194b1fe48aacc2a8db49a321a43d9714c5ec18d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Profile/Profile.html.twig"));

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
        echo "/>\"</label>
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
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"PicturesContainer\">
\t\t\t\t\t\t\t<img src=\"/images/";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["pic"], "pic", array(), "array"), "html", null, true);
                echo "\" class=\"Pictures\"/>
\t\t\t\t\t\t</div>
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
            // line 35
            echo "\t\t\t";
        } else {
            // line 36
            echo "\t\t\t\t<label>Brak zdjęć</label>
\t\t\t";
        }
        // line 38
        echo "\t\t</div>
\t\t
\t</div>
\t</body>
\t</html>";
        
        $__internal_b5d1d3c5035d3741eeb4a6b0194b1fe48aacc2a8db49a321a43d9714c5ec18d4->leave($__internal_b5d1d3c5035d3741eeb4a6b0194b1fe48aacc2a8db49a321a43d9714c5ec18d4_prof);

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
        return array (  105 => 38,  101 => 36,  98 => 35,  84 => 27,  79 => 24,  74 => 23,  72 => 22,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
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
/* 		<label><img width=100px height=100px src="data:image/jpeg;base64,{{user['avatar']}}/>"</label>*/
/* 		</div>*/
/* 		<div>*/
/* 			{% if pictures %}*/
/* 				{% for pic in pictures %}*/
/* 					<div class="PicturesMainContainer">*/
/* 					*/
/* 						<div class="PicturesContainer">*/
/* 							<img src="/images/{{pic['pic']}}" class="Pictures"/>*/
/* 						</div>*/
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
