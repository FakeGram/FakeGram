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
        $__internal_d5492e774f01391a3eabb908f53cab5604cb5e634962ed80316dac379f9668c2 = $this->env->getExtension("native_profiler");
        $__internal_d5492e774f01391a3eabb908f53cab5604cb5e634962ed80316dac379f9668c2->enter($__internal_d5492e774f01391a3eabb908f53cab5604cb5e634962ed80316dac379f9668c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Profile/Photo.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "Profile/Photo.html.twig", 1)->display($context);
        // line 2
        echo "
\t<div class=\"container-fluid\">

\t\t<div class=\"tile curved single_pic flexible-tile\">
\t\t\t<div class=\"PicturesInfo\">
\t\t\t\t<img src=\"data:image/jpeg;base64,";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usr"]) ? $context["usr"] : $this->getContext($context, "usr")), "avatar", array(), "array"), "html", null, true);
        echo "\" class=\"avatar\" height=\"30px\" width=\"30px\" />
\t\t\t\t<label style=\"margin-left: 30px;\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usr"]) ? $context["usr"] : $this->getContext($context, "usr")), "login", array(), "array"), "html", null, true);
        echo "</label>
\t\t\t</div>
\t\t\t<div class=\"PicturesContainer\">
\t\t\t\t<a href=\"/Profile/Photo/";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic")), "id", array(), "array"), "html", null, true);
        echo "\">
\t\t\t\t\t<img src=\"/";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic")), "pic", array(), "array"), "html", null, true);
        echo "\" class=\"Pictures\"/>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"PicturesButton\">
\t\t\t\t<button class=\"btn btn-default buttons\" onclick=\"like();\"><i class=\"fas fa-thumbs-up likeico\"></i>Lubię to!</button>
\t\t\t\tLikes:<div id=\"likes\" class=\"btn btn-default buttons\">";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["likes"]) ? $context["likes"] : $this->getContext($context, "likes")), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"commentsSection\">
\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comms"]) ? $context["comms"] : $this->getContext($context, "comms")));
        foreach ($context['_seq'] as $context["_key"] => $context["comm"]) {
            // line 21
            echo "\t\t\t\t\t<div class=\"Comment\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"Date\">
\t\t\t\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["comm"], "date", array(), "array"), "html", null, true);
            echo " 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"Author\">
\t\t\t\t\t\t";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["comm"], "login", array(), "array"), "html", null, true);
            echo " 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"Content\">
\t\t\t\t\t\t";
            // line 30
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
        // line 35
        echo "\t\t\t\t";
        if (((isset($context["loggedIn"]) ? $context["loggedIn"] : $this->getContext($context, "loggedIn")) == true)) {
            // line 36
            echo "\t\t\t\t\t<div class=\"CommentAdd\">
\t\t\t\t\t\t<form class=\"CommentInput\" action=\"/Profile/Photo/NewComment/";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic")), "id", array(), "array"), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"CommentInputContent\"  name=\"CommentContent\" id=\"CommentContent\">
\t\t\t\t\t\t\t<input type=\"submit\" class=\"CommentInputButton\" value=\"Dodaj Komentarz\"/>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t";
        if (((isset($context["loggedIn"]) ? $context["loggedIn"] : $this->getContext($context, "loggedIn")) == true)) {
            // line 44
            echo "\t\t\t\t\t<div class=\"LikeButton\">
\t\t\t\t\t\t<div style=\"display:none;\" id=\"picId\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic")), "id", array(), "array"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div style=\"display:none;\" id=\"login\">";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 50
        echo "\t\t\t</div>
\t\t</div>



<!--
\t\t<div class=\"PhotoContainer\">
\t\t\t<img src=\"/";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic")), "pic", array(), "array"), "html", null, true);
        echo "\" class=\"Photo\"/>
\t\t</div>
\t\t<div class=\"UserInfoAndTagsContainer\">
\t\t\t<div class=\"UserInfoContainer\">
\t\t\t\t
\t\t\t\t<img src=\"data:image/jpeg;base64,";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usr"]) ? $context["usr"] : $this->getContext($context, "usr")), "avatar", array(), "array"), "html", null, true);
        echo "\" class=\"Avatar\"/>
\t\t\t\t
\t\t\t\t<div class=\"Info\">
\t\t\t\t\t<a href=\"/Profile/";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usr"]) ? $context["usr"] : $this->getContext($context, "usr")), "login", array(), "array"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<label>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usr"]) ? $context["usr"] : $this->getContext($context, "usr")), "login", array(), "array"), "html", null, true);
        echo "</label>
\t\t\t\t\t</a>

\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"TagsContainer\">
\t\t\t\t<div class=\"Tag\">
\t\t\t\t";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 74
            echo "\t\t\t\t<a href=\"\">";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "</a> 
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"CommentsContainer\">
\t\t\t\t<div class=\"Likes\">

\t\t\t\t\tLikes:<div id=\"likes\">";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["likes"]) ? $context["likes"] : $this->getContext($context, "likes")), "html", null, true);
        echo "</div>

\t\t\t\t\tLikes:<label id=\"likes\">";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["likes"]) ? $context["likes"] : $this->getContext($context, "likes")), "html", null, true);
        echo "</label>

\t\t\t\t\t<div style=\"display:none;\" id=\"liked\">";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["liked"]) ? $context["liked"] : $this->getContext($context, "liked")), "html", null, true);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comms"]) ? $context["comms"] : $this->getContext($context, "comms")));
        foreach ($context['_seq'] as $context["_key"] => $context["comm"]) {
            // line 88
            echo "\t\t\t\t\t<div class=\"Comment\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"Date\">
\t\t\t\t\t\t";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["comm"], "date", array(), "array"), "html", null, true);
            echo " 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"Author\">
\t\t\t\t\t\t";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["comm"], "login", array(), "array"), "html", null, true);
            echo " 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"Content\">
\t\t\t\t\t\t";
            // line 97
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
        // line 102
        echo "\t\t\t\t";
        if (((isset($context["loggedIn"]) ? $context["loggedIn"] : $this->getContext($context, "loggedIn")) == true)) {
            // line 103
            echo "\t\t\t\t\t<div class=\"CommentAdd\">
\t\t\t\t\t\t<form class=\"CommentInput\" action=\"/Profile/Photo/NewComment/";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic")), "id", array(), "array"), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"CommentInputContent\"  name=\"CommentContent\" id=\"CommentContent\">
\t\t\t\t\t\t\t<input type=\"submit\" class=\"CommentInputButton\" value=\"Dodaj Komentarz\"/>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 110
        echo "\t\t\t\t";
        if (((isset($context["loggedIn"]) ? $context["loggedIn"] : $this->getContext($context, "loggedIn")) == true)) {
            // line 111
            echo "\t\t\t\t\t<div class=\"LikeButton\">
\t\t\t\t\t\t<div style=\"display:none;\" id=\"picId\">";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic")), "id", array(), "array"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div style=\"display:none;\" id=\"login\">";
            // line 113
            echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<button onclick=\"like();\"><3</button>
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 118
        echo "\t\t\t</div>
\t\t</div>
\t\t
\t</div>-->

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
        // line 160
        $this->loadTemplate("footer.html.twig", "Profile/Photo.html.twig", 160)->display($context);
        
        $__internal_d5492e774f01391a3eabb908f53cab5604cb5e634962ed80316dac379f9668c2->leave($__internal_d5492e774f01391a3eabb908f53cab5604cb5e634962ed80316dac379f9668c2_prof);

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
        return array (  304 => 160,  260 => 118,  252 => 113,  248 => 112,  245 => 111,  242 => 110,  233 => 104,  230 => 103,  227 => 102,  216 => 97,  210 => 94,  204 => 91,  199 => 88,  195 => 87,  190 => 85,  185 => 83,  180 => 81,  173 => 76,  164 => 74,  160 => 73,  150 => 66,  146 => 65,  140 => 62,  132 => 57,  123 => 50,  116 => 46,  112 => 45,  109 => 44,  106 => 43,  97 => 37,  94 => 36,  91 => 35,  80 => 30,  74 => 27,  68 => 24,  63 => 21,  59 => 20,  53 => 17,  45 => 12,  41 => 11,  35 => 8,  31 => 7,  24 => 2,  22 => 1,);
    }
}
/* {% include 'header.html.twig' %}*/
/* */
/* 	<div class="container-fluid">*/
/* */
/* 		<div class="tile curved single_pic flexible-tile">*/
/* 			<div class="PicturesInfo">*/
/* 				<img src="data:image/jpeg;base64,{{usr['avatar']}}" class="avatar" height="30px" width="30px" />*/
/* 				<label style="margin-left: 30px;">{{usr['login']}}</label>*/
/* 			</div>*/
/* 			<div class="PicturesContainer">*/
/* 				<a href="/Profile/Photo/{{pic['id']}}">*/
/* 					<img src="/{{pic['pic']}}" class="Pictures"/>*/
/* 				</a>*/
/* 			</div>*/
/* 			<div class="PicturesButton">*/
/* 				<button class="btn btn-default buttons" onclick="like();"><i class="fas fa-thumbs-up likeico"></i>Lubię to!</button>*/
/* 				Likes:<div id="likes" class="btn btn-default buttons">{{likes}}</div>*/
/* 			</div>*/
/* 			<div class="commentsSection">*/
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
/* 							*/
/* 					</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		</div>*/
/* */
/* */
/* */
/* <!--*/
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
/* 					</a>*/
/* */
/* 			</div>*/
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
/* */
/* 					Likes:<div id="likes">{{likes}}</div>*/
/* */
/* 					Likes:<label id="likes">{{likes}}</label>*/
/* */
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
/* 	</div>-->*/
/* */
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
