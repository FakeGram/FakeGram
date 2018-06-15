<?php

/* Profile/Profile.html.twig */
class __TwigTemplate_dc310243bd0ad949dc02d284d8dae3ad0316cbc371146a86addbac06e963e8b2 extends Twig_Template
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
        $__internal_856057b655a1163665f0cba87c432abe816843c97a639fbfeef3c5f9907fcf68 = $this->env->getExtension("native_profiler");
        $__internal_856057b655a1163665f0cba87c432abe816843c97a639fbfeef3c5f9907fcf68->enter($__internal_856057b655a1163665f0cba87c432abe816843c97a639fbfeef3c5f9907fcf68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Profile/Profile.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "Profile/Profile.html.twig", 1)->display($context);
        // line 2
        echo "


\t<div class=\"container-fluid\">
\t
\t\t<div>
\t\t<label>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "login", array(), "array"), "html", null, true);
        echo "</label>
\t\t<label>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array(), "array"), "html", null, true);
        echo "</label>
\t\t<label>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nameAndSurrname", array(), "array"), "html", null, true);
        echo "</label>
\t\t<label>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "about", array(), "array"), "html", null, true);
        echo "</label>
\t\t
\t\t<label><img width=100px height=100px src=\"data:image/jpeg;base64,";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "avatar", array(), "array"), "html", null, true);
        echo "\"/></label>
\t\t";
        // line 14
        if (((isset($context["loggedIn"]) ? $context["loggedIn"] : $this->getContext($context, "loggedIn")) == true)) {
            // line 15
            echo "\t\t\t
\t\t\t\t\t<div style=\"display:none;\" id=\"CurrentUser\" >";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["CurrentUserLogin"]) ? $context["CurrentUserLogin"] : $this->getContext($context, "CurrentUserLogin")), "html", null, true);
            echo "</div>
\t\t\t\t\t<div style=\"display:none\" id=\"UserToFollow\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "login", array(), "array"), "html", null, true);
            echo "</div>
\t\t\t\t\t<button class=\"btn\" onclick=\"follow();\">Follow</button>
\t\t\t
\t\t\t\t";
        }
        // line 21
        echo "\t\t\t\t
\t\t</div>
\t\t<div>
\t\t\t";
        // line 24
        if ((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures"))) {
            // line 25
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures")));
            foreach ($context['_seq'] as $context["_key"] => $context["pic"]) {
                // line 26
                echo "\t\t\t\t\t<div class=\"PicturesMainContainer\">
\t\t\t\t\t\t<a href=\"/Profile/Photo/";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["pic"], "id", array(), "array"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div class=\"PicturesContainer\">
\t\t\t\t\t\t\t<img src=\"/";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["pic"], "pic", array(), "array"), "html", null, true);
                echo "\" class=\"Pictures\" width=700px height=700px/>
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
            // line 38
            echo "\t\t\t";
        } else {
            // line 39
            echo "\t\t\t\t<label>Brak zdjęć</label>
\t\t\t";
        }
        // line 41
        echo "\t\t</div>
\t\t
\t</div>

\t
\t
\t<script>
\t\tfunction follow()
\t\t{
\t\t\tvar currentuser=document.getElementById(\"CurrentUser\").innerHTML;
\t\t\tvar usertofollow=document.getElementById(\"UserToFollow\").innerHTML;
\t\t\t///Profile/";
        // line 52
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
\t\t\talert(usertofollow);
\t\t}
\t</script>

";
        // line 67
        $this->loadTemplate("footer.html.twig", "Profile/Profile.html.twig", 67)->display($context);
        // line 68
        echo "
";
        
        $__internal_856057b655a1163665f0cba87c432abe816843c97a639fbfeef3c5f9907fcf68->leave($__internal_856057b655a1163665f0cba87c432abe816843c97a639fbfeef3c5f9907fcf68_prof);

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
        return array (  144 => 68,  142 => 67,  124 => 52,  111 => 41,  107 => 39,  104 => 38,  89 => 29,  84 => 27,  81 => 26,  76 => 25,  74 => 24,  69 => 21,  62 => 17,  58 => 16,  55 => 15,  53 => 14,  49 => 13,  44 => 11,  40 => 10,  36 => 9,  32 => 8,  24 => 2,  22 => 1,);
    }
}
/* {% include 'header.html.twig' %}*/
/* */
/* */
/* */
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
/* 					<div style="display:none;" id="CurrentUser" >{{CurrentUserLogin}}</div>*/
/* 					<div style="display:none" id="UserToFollow">{{user['login']}}</div>*/
/* 					<button class="btn" onclick="follow();">Follow</button>*/
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
/* 							<img src="/{{pic['pic']}}" class="Pictures" width=700px height=700px/>*/
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
/* */
/* 	*/
/* 	*/
/* 	<script>*/
/* 		function follow()*/
/* 		{*/
/* 			var currentuser=document.getElementById("CurrentUser").innerHTML;*/
/* 			var usertofollow=document.getElementById("UserToFollow").innerHTML;*/
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
/* 			alert(usertofollow);*/
/* 		}*/
/* 	</script>*/
/* */
/* {% include 'footer.html.twig' %}*/
/* */
/* */
