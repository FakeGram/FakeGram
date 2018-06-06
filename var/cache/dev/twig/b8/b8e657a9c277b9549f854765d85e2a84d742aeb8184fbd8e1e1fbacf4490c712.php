<?php

/* Profile/Profile.html.twig */
class __TwigTemplate_91d124ba1764c33137338f34ca5c8faf33de06c133ef2f9ae2e94c49c1262ec5 extends Twig_Template
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
        $__internal_83de32345cde646468709427a12205c6c6471a388da9e62e877317996b6ffeaa = $this->env->getExtension("native_profiler");
        $__internal_83de32345cde646468709427a12205c6c6471a388da9e62e877317996b6ffeaa->enter($__internal_83de32345cde646468709427a12205c6c6471a388da9e62e877317996b6ffeaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Profile/Profile.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "Profile/Profile.html.twig", 1)->display($context);
        // line 2
        echo "\t<div class=\"container-fluid\">
\t
\t\t<div>
\t\t<label>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "login", array(), "array"), "html", null, true);
        echo "</label>
\t\t<label>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array(), "array"), "html", null, true);
        echo "</label>
\t\t<label>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nameAndSurrname", array(), "array"), "html", null, true);
        echo "</label>
\t\t<label>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "about", array(), "array"), "html", null, true);
        echo "</label>
\t\t
\t\t<label><img width=100px height=100px src=\"data:image/jpeg;base64,";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "avatar", array(), "array"), "html", null, true);
        echo "\"/></label>
\t\t";
        // line 11
        if (((isset($context["loggedIn"]) ? $context["loggedIn"] : $this->getContext($context, "loggedIn")) == true)) {
            // line 12
            echo "\t\t\t
\t\t\t\t\t<div style=\"display:none;\" id=\"CurrentUser\" >";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["CurrentUserLogin"]) ? $context["CurrentUserLogin"] : $this->getContext($context, "CurrentUserLogin")), "html", null, true);
            echo "'</div>
\t\t\t\t\t<div style=\"display:none\" id=\"UserToFollow\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "login", array(), "array"), "html", null, true);
            echo "\"</div>
\t\t\t\t\t<button onclick=\"follow();\">Follow\"</button>
\t\t\t
\t\t\t\t";
        }
        // line 18
        echo "\t\t\t\t
\t\t</div>
\t\t<div>
\t\t\t";
        // line 21
        if ((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures"))) {
            // line 22
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures")));
            foreach ($context['_seq'] as $context["_key"] => $context["pic"]) {
                // line 23
                echo "\t\t\t\t\t<div class=\"PicturesMainContainer\">
\t\t\t\t\t\t<a href=\"/Profile/Photo/";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["pic"], "id", array(), "array"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div class=\"PicturesContainer\">
\t\t\t\t\t\t\t<img src=\"/";
                // line 26
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
\t
\t
\t<script>
\t\tfunction follow()
\t\t{
\t\t\tvar currentuser=document.getElementById(\"CurrentUser\");
\t\t\tvar usertofollow=document.getElementById(\"UserToFollow\");
\t\t\t///Profile/";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "login", array(), "array"), "html", null, true);
        echo "/Follow
\t\t\tvar action=\"/Profile/\"+usertofollow+\"/Follow\";
\t\t\t\$.ajax({
\t\t\turl:action,
\t\t\ttype:'POST',
\t\t\tdata:
\t\t\t{
\t\t\t\tCurrentUser:currentuser,
\t\t\t\tUserToFollow:usertofollow
\t\t\t}
\t\t\t});
\t\t\t
\t\t}
\t</script>
\t";
        // line 62
        $this->loadTemplate("footer.html.twig", "Profile/Profile.html.twig", 62)->display($context);
        // line 63
        echo "\t
\t";
        
        $__internal_83de32345cde646468709427a12205c6c6471a388da9e62e877317996b6ffeaa->leave($__internal_83de32345cde646468709427a12205c6c6471a388da9e62e877317996b6ffeaa_prof);

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
        return array (  139 => 63,  137 => 62,  120 => 48,  108 => 38,  104 => 36,  101 => 35,  86 => 26,  81 => 24,  78 => 23,  73 => 22,  71 => 21,  66 => 18,  59 => 14,  55 => 13,  52 => 12,  50 => 11,  46 => 10,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  24 => 2,  22 => 1,);
    }
}
/* {% include 'header.html.twig' %}*/
/* 	<div class="container-fluid">*/
/* 	*/
/* 		<div>*/
/* 		<label>{{user['login']}}</label>*/
/* 		<label>{{user['email']}}</label>*/
/* 		<label>{{user['nameAndSurrname']}}</label>*/
/* 		<label>{{user['about']}}</label>*/
/* 		*/
/* 		<label><img width=100px height=100px src="data:image/jpeg;base64,{{user['avatar']}}"/></label>*/
/* 		{% if loggedIn==TRUE %}*/
/* 			*/
/* 					<div style="display:none;" id="CurrentUser" >{{CurrentUserLogin}}'</div>*/
/* 					<div style="display:none" id="UserToFollow">{{user['login']}}"</div>*/
/* 					<button onclick="follow();">Follow"</button>*/
/* 			*/
/* 				{% endif %}*/
/* 				*/
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
/* 	*/
/* 	*/
/* 	<script>*/
/* 		function follow()*/
/* 		{*/
/* 			var currentuser=document.getElementById("CurrentUser");*/
/* 			var usertofollow=document.getElementById("UserToFollow");*/
/* 			///Profile/{{user['login']}}/Follow*/
/* 			var action="/Profile/"+usertofollow+"/Follow";*/
/* 			$.ajax({*/
/* 			url:action,*/
/* 			type:'POST',*/
/* 			data:*/
/* 			{*/
/* 				CurrentUser:currentuser,*/
/* 				UserToFollow:usertofollow*/
/* 			}*/
/* 			});*/
/* 			*/
/* 		}*/
/* 	</script>*/
/* 	{% include 'footer.html.twig' %}*/
/* 	*/
/* 	*/
