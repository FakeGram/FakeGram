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
        $__internal_d39cad8d3c0bc9330037583f3d66a35c6c67fa850e6108424b1bbb0cd7f60690 = $this->env->getExtension("native_profiler");
        $__internal_d39cad8d3c0bc9330037583f3d66a35c6c67fa850e6108424b1bbb0cd7f60690->enter($__internal_d39cad8d3c0bc9330037583f3d66a35c6c67fa850e6108424b1bbb0cd7f60690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Profile/Profile.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "Profile/Profile.html.twig", 1)->display($context);
        // line 2
        echo "
\t<div class=\"container-fluid\">
\t
\t\t<div>
\t\t<label>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "login", array(), "array"), "html", null, true);
        echo "</label>
\t\t<label>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array(), "array"), "html", null, true);
        echo "</label>
\t\t<label>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nameAndSurrname", array(), "array"), "html", null, true);
        echo "</label>
\t\t<label>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "about", array(), "array"), "html", null, true);
        echo "</label>
\t\t
\t\t<label><img width=100px height=100px src=\"data:image/jpeg;base64,";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "avatar", array(), "array"), "html", null, true);
        echo "\"/></label>
\t\t";
        // line 12
        if (((isset($context["loggedIn"]) ? $context["loggedIn"] : $this->getContext($context, "loggedIn")) == true)) {
            // line 13
            echo "\t\t\t<form action=\"/Profile/";
            echo twig_escape_filter($this->env, (isset($context["CurrentUserLogin"]) ? $context["CurrentUserLogin"] : $this->getContext($context, "CurrentUserLogin")), "html", null, true);
            echo "/Follow\" method=\"POST\">
\t\t\t\t\t<input type=\"hidden\" name=\"CurrentUser\" value='";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["CurrentUserLogin"]) ? $context["CurrentUserLogin"] : $this->getContext($context, "CurrentUserLogin")), "html", null, true);
            echo "'/>
\t\t\t\t\t<input type=\"hidden\" name=\"UserToFollow\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "login", array(), "array"), "html", null, true);
            echo "\"/>
\t\t\t\t\t<input type=\"submit\" value=\"Follow\"/>
\t\t\t</form>
\t\t\t\t";
        }
        // line 19
        echo "\t\t</div>
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

";
        // line 42
        $this->loadTemplate("footer.html.twig", "Profile/Profile.html.twig", 42)->display($context);
        
        $__internal_d39cad8d3c0bc9330037583f3d66a35c6c67fa850e6108424b1bbb0cd7f60690->leave($__internal_d39cad8d3c0bc9330037583f3d66a35c6c67fa850e6108424b1bbb0cd7f60690_prof);

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
        return array (  116 => 42,  110 => 38,  106 => 36,  103 => 35,  88 => 26,  83 => 24,  80 => 23,  75 => 22,  73 => 21,  69 => 19,  62 => 15,  58 => 14,  53 => 13,  51 => 12,  47 => 11,  42 => 9,  38 => 8,  34 => 7,  30 => 6,  24 => 2,  22 => 1,);
    }
}
/* {% include 'header.html.twig' %}*/
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
/* 			<form action="/Profile/{{CurrentUserLogin}}/Follow" method="POST">*/
/* 					<input type="hidden" name="CurrentUser" value='{{CurrentUserLogin}}'/>*/
/* 					<input type="hidden" name="UserToFollow" value="{{user['login']}}"/>*/
/* 					<input type="submit" value="Follow"/>*/
/* 			</form>*/
/* 				{% endif %}*/
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
/* */
/* {% include 'footer.html.twig' %}*/
