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
        $__internal_28101076c16f9b2ae868bf32ce1b92ebf6383198821e016a96789acbd0ef6bde = $this->env->getExtension("native_profiler");
        $__internal_28101076c16f9b2ae868bf32ce1b92ebf6383198821e016a96789acbd0ef6bde->enter($__internal_28101076c16f9b2ae868bf32ce1b92ebf6383198821e016a96789acbd0ef6bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Profile/Photo.html.twig"));

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
\t\t\t\t\t<a href=\"/Profile/";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usr"]) ? $context["usr"] : $this->getContext($context, "usr")), "login", array(), "array"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<label>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usr"]) ? $context["usr"] : $this->getContext($context, "usr")), "login", array(), "array"), "html", null, true);
        echo "</label>

\t\t\t</div>
\t\t\t<div class=\"TagsContainer\">
\t\t\t\t<div class=\"Tag\">
\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 20
            echo "\t\t\t\t<a href=\"\">";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "</a> 
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"CommentsContainer\">
\t\t\t\t<div class=\"Likes\">
\t\t\t\t\tLikes:<label id=\"likes\">";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["likes"]) ? $context["likes"] : $this->getContext($context, "likes")), "html", null, true);
        echo "</label>
\t\t\t\t\t<div style=\"display:none;\" id=\"liked\">";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["liked"]) ? $context["liked"] : $this->getContext($context, "liked")), "html", null, true);
        echo "</div>
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
\t\t\t\t\t\t<div style=\"display:none;\" id=\"picId\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic")), "id", array(), "array"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div style=\"display:none;\" id=\"login\">";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<button onclick=\"like();\"><3</button>
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 60
        echo "\t\t\t</div>
\t\t</div>
\t\t
\t</div>
\t</div>
\t<script>
\t\tfunction like()
\t\t{
\t\t\tvar id=document.getElementById(\"picId\").innerHTML;
\t\t\tvar login=document.getElementById(\"login\").innerHTML;
\t\t\tvar action=\"/Profile/Photo/AddLike/\"+id+\"/\"+login;
\t\t\t\$.ajax({
\t\t\t\turl:action,
\t\t\ttype:'POST',
\t\t\tdata:
\t\t\t{
\t\t\t\t
\t\t\t}
\t\t\t});
\t\t\tvar liked=document.getElementById(\"liked\").innerHTML;
\t\t\t
\t\t\t
\t\t\tvar count=parseInt(document.getElementById(\"likes\").innerHTML);
\t\t\t
\t\t\tif(liked==\"0\")
\t\t\t{
\t\t\t\t
\t\t\t\tdocument.getElementById(\"likes\").innerHTML=count+1;
\t\t\t\tliked=\"1\";
\t\t\t\tdocument.getElementById(\"liked\").innerHTML=liked;
\t\t\t\t
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\t
\t\t\t\tdocument.getElementById(\"likes\").innerHTML=count-1;
\t\t\t\tliked=\"0\";
\t\t\t\tdocument.getElementById(\"liked\").innerHTML=liked;
\t\t\t}
\t\t\t
\t\t}
\t</script>
";
        // line 102
        $this->loadTemplate("footer.html.twig", "Profile/Photo.html.twig", 102)->display($context);
        
        $__internal_28101076c16f9b2ae868bf32ce1b92ebf6383198821e016a96789acbd0ef6bde->leave($__internal_28101076c16f9b2ae868bf32ce1b92ebf6383198821e016a96789acbd0ef6bde_prof);

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
        return array (  192 => 102,  148 => 60,  140 => 55,  136 => 54,  133 => 53,  130 => 52,  121 => 46,  118 => 45,  115 => 44,  104 => 39,  98 => 36,  92 => 33,  87 => 30,  83 => 29,  78 => 27,  74 => 26,  68 => 22,  59 => 20,  55 => 19,  47 => 14,  43 => 13,  37 => 10,  29 => 5,  24 => 2,  22 => 1,);
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
/* 					<a href="/Profile/{{usr['login']}}">*/
/* 							<label>{{usr['login']}}</label>*/
/* */
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
/* 					Likes:<label id="likes">{{likes}}</label>*/
/* 					<div style="display:none;" id="liked">{{liked}}</div>*/
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
/* 						<div style="display:none;" id="picId">{{pic['id']}}</div>*/
/* 						<div style="display:none;" id="login">{{login}}</div>*/
/* 						<button onclick="like();"><3</button>*/
/* 							*/
/* 					</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 	</div>*/
/* 	</div>*/
/* 	<script>*/
/* 		function like()*/
/* 		{*/
/* 			var id=document.getElementById("picId").innerHTML;*/
/* 			var login=document.getElementById("login").innerHTML;*/
/* 			var action="/Profile/Photo/AddLike/"+id+"/"+login;*/
/* 			$.ajax({*/
/* 				url:action,*/
/* 			type:'POST',*/
/* 			data:*/
/* 			{*/
/* 				*/
/* 			}*/
/* 			});*/
/* 			var liked=document.getElementById("liked").innerHTML;*/
/* 			*/
/* 			*/
/* 			var count=parseInt(document.getElementById("likes").innerHTML);*/
/* 			*/
/* 			if(liked=="0")*/
/* 			{*/
/* 				*/
/* 				document.getElementById("likes").innerHTML=count+1;*/
/* 				liked="1";*/
/* 				document.getElementById("liked").innerHTML=liked;*/
/* 				*/
/* 			}*/
/* 			else*/
/* 			{*/
/* 				*/
/* 				document.getElementById("likes").innerHTML=count-1;*/
/* 				liked="0";*/
/* 				document.getElementById("liked").innerHTML=liked;*/
/* 			}*/
/* 			*/
/* 		}*/
/* 	</script>*/
/* {% include 'footer.html.twig' %}*/
