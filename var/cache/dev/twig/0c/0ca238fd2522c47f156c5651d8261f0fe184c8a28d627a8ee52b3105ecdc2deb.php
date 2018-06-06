<?php

/* Profile/Photo.html.twig */
class __TwigTemplate_355bcf3fa3881e2e244b02fc37a68bd81e65acee90dbfb8ee2a15c205ff345be extends Twig_Template
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
        $__internal_5ce3230b6d0cd74ef4af9a4014f8dd7f283cd56894898714f09d0e1b20490ae3 = $this->env->getExtension("native_profiler");
        $__internal_5ce3230b6d0cd74ef4af9a4014f8dd7f283cd56894898714f09d0e1b20490ae3->enter($__internal_5ce3230b6d0cd74ef4af9a4014f8dd7f283cd56894898714f09d0e1b20490ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Profile/Photo.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "Profile/Photo.html.twig", 1)->display($context);
        // line 2
        echo "
\t<div class=\"container-fluid\">
\t\t<div class=\"PhotoContainer\">
\t\t\t<img src=\"/";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic")), "pic", array(), "array"), "html", null, true);
        echo "\" class=\"Photo\"/>
\t\t</div>
\t\t<div class=\"UserInfoAndTagsContainer\">
\t\t\t<div class=\"UserInfoContainer\">
\t\t\t\t
\t\t\t\t<img src=\"data:image/jpeg;base64,";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usr"]) ? $context["usr"] : $this->getContext($context, "usr")), "avatar", array(), "array"), "html", null, true);
        echo "\" class=\"Avatar\"/>
\t\t\t\t
\t\t\t\t<div class=\"Info\">
\t\t\t\t\t<label>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usr"]) ? $context["usr"] : $this->getContext($context, "usr")), "login", array(), "array"), "html", null, true);
        echo "</label>
\t\t\t\t\t<label>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usr"]) ? $context["usr"] : $this->getContext($context, "usr")), "email", array(), "array"), "html", null, true);
        echo "</label>
\t\t\t\t\t<label>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usr"]) ? $context["usr"] : $this->getContext($context, "usr")), "nameAndSurrname", array(), "array"), "html", null, true);
        echo "</label>
\t\t\t\t</info>
\t\t\t</div>
\t\t\t<div class=\"TagsContainer\">
\t\t\t\t<div class=\"Tag\">
\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 21
            echo "\t\t\t\t<a href=\"\">";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "</a> 
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"CommentsContainer\">
\t\t\t\t<div class=\"Likes\">
\t\t\t\t\tLikes:";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["likes"]) ? $context["likes"] : $this->getContext($context, "likes")), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comms"]) ? $context["comms"] : $this->getContext($context, "comms")));
        foreach ($context['_seq'] as $context["_key"] => $context["comm"]) {
            // line 30
            echo "\t\t\t\t\t<div class=\"Comment\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"Date\">
\t\t\t\t\t\t";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["comm"], "date", array(), "array"), "html", null, true);
            echo " 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"Author\">
\t\t\t\t\t\t";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["comm"], "login", array(), "array"), "html", null, true);
            echo " 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"Content\">
\t\t\t\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["comm"], "content", array(), "array"), "html", null, true);
            echo " 
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"clear:both;\"></div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t\t";
        if (((isset($context["loggedIn"]) ? $context["loggedIn"] : $this->getContext($context, "loggedIn")) == true)) {
            // line 45
            echo "\t\t\t\t\t<div class=\"CommentAdd\">
\t\t\t\t\t\t<form class=\"CommentInput\" action=\"/Profile/Photo/NewComment/";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic")), "id", array(), "array"), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"CommentInputContent\"  name=\"CommentContent\" id=\"CommentContent\">
\t\t\t\t\t\t\t<input type=\"submit\" class=\"CommentInputButton\" value=\"Dodaj Komentarz\"/>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 52
        echo "\t\t\t\t";
        if (((isset($context["loggedIn"]) ? $context["loggedIn"] : $this->getContext($context, "loggedIn")) == true)) {
            // line 53
            echo "\t\t\t\t\t<div class=\"LikeButton\">
\t\t\t\t\t\t<form  action=\"/Profile/Photo/AddLike/";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic")), "id", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t\t<input type=\"submit\" class=\"CommentInputButton\" value=\"<3\"/>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 59
        echo "\t\t\t</div>
\t\t</div>
\t\t
\t</div>
\t
";
        // line 64
        $this->loadTemplate("footer.html.twig", "Profile/Photo.html.twig", 64)->display($context);
        
        $__internal_5ce3230b6d0cd74ef4af9a4014f8dd7f283cd56894898714f09d0e1b20490ae3->leave($__internal_5ce3230b6d0cd74ef4af9a4014f8dd7f283cd56894898714f09d0e1b20490ae3_prof);

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
        return array (  153 => 64,  146 => 59,  136 => 54,  133 => 53,  130 => 52,  121 => 46,  118 => 45,  115 => 44,  104 => 39,  98 => 36,  92 => 33,  87 => 30,  83 => 29,  78 => 27,  72 => 23,  63 => 21,  59 => 20,  51 => 15,  47 => 14,  43 => 13,  37 => 10,  29 => 5,  24 => 2,  22 => 1,);
    }
}
/* {% include 'header.html.twig' %}*/
/* */
/* 	<div class="container-fluid">*/
/* 		<div class="PhotoContainer">*/
/* 			<img src="/{{pic['pic']}}" class="Photo"/>*/
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
/* 				{% for tag in tags %}*/
/* 				<a href="">{{tag}}</a> */
/* 				{% endfor %}*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="CommentsContainer">*/
/* 				<div class="Likes">*/
/* 					Likes:{{likes}}*/
/* 				</div>*/
/* 				{% for comm in comms %}*/
/* 					<div class="Comment">*/
/* 					*/
/* 					<div class="Date">*/
/* 						{{comm['date']}} */
/* 					</div>*/
/* 					<div class="Author">*/
/* 						{{comm['login']}} */
/* 					</div>*/
/* 					<div class="Content">*/
/* 						{{comm['content']}} */
/* 					</div>*/
/* 					<div style="clear:both;"></div>*/
/* 					</div>*/
/* 				{% endfor %}*/
/* 				{% if loggedIn==TRUE %}*/
/* 					<div class="CommentAdd">*/
/* 						<form class="CommentInput" action="/Profile/Photo/NewComment/{{pic['id']}}" method="post">*/
/* 							<input type="text" class="CommentInputContent"  name="CommentContent" id="CommentContent">*/
/* 							<input type="submit" class="CommentInputButton" value="Dodaj Komentarz"/>*/
/* 						</form>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				{% if loggedIn==TRUE %}*/
/* 					<div class="LikeButton">*/
/* 						<form  action="/Profile/Photo/AddLike/{{pic['id']}}/{{login}}" method="post">*/
/* 							<input type="submit" class="CommentInputButton" value="<3"/>*/
/* 						</form>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 	</div>*/
/* 	*/
/* {% include 'footer.html.twig' %}*/
