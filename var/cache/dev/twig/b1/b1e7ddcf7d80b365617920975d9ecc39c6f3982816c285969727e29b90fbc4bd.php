<?php

/* Profile/Photo.html.twig */
class __TwigTemplate_d454d99bc7d62b5fa4932be1a2d7fdcf4ca0202cb195bf0eb8bc6824a273690b extends Twig_Template
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
        $__internal_6c1fe1815104b5a222a2c622f1832f7159c231ba13b9756a36e6be9a312b320c = $this->env->getExtension("native_profiler");
        $__internal_6c1fe1815104b5a222a2c622f1832f7159c231ba13b9756a36e6be9a312b320c->enter($__internal_6c1fe1815104b5a222a2c622f1832f7159c231ba13b9756a36e6be9a312b320c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Profile/Photo.html.twig"));

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
\t\t\t\t<button class=\"btn btn-default buttons\" onclick=\"follow('";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usr"]) ? $context["usr"] : $this->getContext($context, "usr")), "login", array(), "array"), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "CurrentUser", array()), "login", array()), "html", null, true);
        echo "');\">Subskrybuj!</button>
\t\t\t</div>
\t\t\t<div class=\"PicturesContainer\">
\t\t\t\t<a href=\"/Profile/Photo/";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic")), "id", array(), "array"), "html", null, true);
        echo "\">
\t\t\t\t\t<img src=\"/";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic")), "pic", array(), "array"), "html", null, true);
        echo "\" class=\"Pictures\"/>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"PicturesButton\">
\t\t\t\t<button class=\"btn btn-default buttons\" onclick=\"like();\"><i class=\"fas fa-thumbs-up likeico\"></i>Lubię to!</button>
\t\t\t\tLikes:<div id=\"likes\" class=\"btn btn-default buttons\">";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["likes"]) ? $context["likes"] : $this->getContext($context, "likes")), "html", null, true);
        echo "</div>
\t\t\t\t<div style=\"display:hidden;\"></div>
\t\t\t\t<div style=\"display:hidden;\"></div>
\t\t\t</div>
\t\t\t<div class=\"commentsSection\">
\t\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comms"]) ? $context["comms"] : $this->getContext($context, "comms")));
        foreach ($context['_seq'] as $context["_key"] => $context["comm"]) {
            // line 24
            echo "\t\t\t\t\t<div class=\"Comment\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"Date\">
\t\t\t\t\t\t";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["comm"], "date", array(), "array"), "html", null, true);
            echo " 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"Author\">
\t\t\t\t\t\t";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["comm"], "login", array(), "array"), "html", null, true);
            echo " 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"Content\">
\t\t\t\t\t\t";
            // line 33
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
        // line 38
        echo "\t\t\t\t";
        if (((isset($context["loggedIn"]) ? $context["loggedIn"] : $this->getContext($context, "loggedIn")) == true)) {
            // line 39
            echo "\t\t\t\t\t<div class=\"CommentAdd\">
\t\t\t\t\t\t<form class=\"CommentInput\" action=\"/Profile/Photo/NewComment/";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic")), "id", array(), "array"), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"CommentInputContent\"  name=\"CommentContent\" id=\"CommentContent\">
\t\t\t\t\t\t\t<input type=\"submit\" class=\"CommentInputButton\" value=\"Dodaj Komentarz\"/>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t";
        if (((isset($context["loggedIn"]) ? $context["loggedIn"] : $this->getContext($context, "loggedIn")) == true)) {
            // line 47
            echo "\t\t\t\t\t<div class=\"LikeButton\">
\t\t\t\t\t\t<div style=\"display:none;\" id=\"picId\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic")), "id", array(), "array"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div style=\"display:none;\" id=\"login\">";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 53
        echo "\t\t\t</div>
\t\t</div>



<!--
\t\t<div class=\"PhotoContainer\">
\t\t\t<img src=\"/";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic")), "pic", array(), "array"), "html", null, true);
        echo "\" class=\"Photo\"/>
\t\t</div>
\t\t<div class=\"UserInfoAndTagsContainer\">
\t\t\t<div class=\"UserInfoContainer\">
\t\t\t\t
\t\t\t\t<img src=\"data:image/jpeg;base64,";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usr"]) ? $context["usr"] : $this->getContext($context, "usr")), "avatar", array(), "array"), "html", null, true);
        echo "\" class=\"Avatar\"/>
\t\t\t\t
\t\t\t\t<div class=\"Info\">
\t\t\t\t\t<a href=\"/Profile/";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usr"]) ? $context["usr"] : $this->getContext($context, "usr")), "login", array(), "array"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<label>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usr"]) ? $context["usr"] : $this->getContext($context, "usr")), "login", array(), "array"), "html", null, true);
        echo "</label>
\t\t\t\t\t</a>

\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"TagsContainer\">
\t\t\t\t<div class=\"Tag\">
\t\t\t\t";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 77
            echo "\t\t\t\t<a href=\"\">";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "</a> 
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"CommentsContainer\">
\t\t\t\t<div class=\"Likes\">

\t\t\t\t\tLikes:<div id=\"likes\">";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["likes"]) ? $context["likes"] : $this->getContext($context, "likes")), "html", null, true);
        echo "</div>

\t\t\t\t\tLikes:<label id=\"likes\">";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["likes"]) ? $context["likes"] : $this->getContext($context, "likes")), "html", null, true);
        echo "</label>

\t\t\t\t\t<div style=\"display:none;\" id=\"liked\">";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["liked"]) ? $context["liked"] : $this->getContext($context, "liked")), "html", null, true);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comms"]) ? $context["comms"] : $this->getContext($context, "comms")));
        foreach ($context['_seq'] as $context["_key"] => $context["comm"]) {
            // line 91
            echo "\t\t\t\t\t<div class=\"Comment\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"Date\">
\t\t\t\t\t\t";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["comm"], "date", array(), "array"), "html", null, true);
            echo " 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"Author\">
\t\t\t\t\t\t";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["comm"], "login", array(), "array"), "html", null, true);
            echo " 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"Content\">
\t\t\t\t\t\t";
            // line 100
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
        // line 105
        echo "\t\t\t\t";
        if (((isset($context["loggedIn"]) ? $context["loggedIn"] : $this->getContext($context, "loggedIn")) == true)) {
            // line 106
            echo "\t\t\t\t\t<div class=\"CommentAdd\">
\t\t\t\t\t\t<form class=\"CommentInput\" action=\"/Profile/Photo/NewComment/";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic")), "id", array(), "array"), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"CommentInputContent\"  name=\"CommentContent\" id=\"CommentContent\">
\t\t\t\t\t\t\t<input type=\"submit\" class=\"CommentInputButton\" value=\"Dodaj Komentarz\"/>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 113
        echo "\t\t\t\t";
        if (((isset($context["loggedIn"]) ? $context["loggedIn"] : $this->getContext($context, "loggedIn")) == true)) {
            // line 114
            echo "\t\t\t\t\t<div class=\"LikeButton\">
\t\t\t\t\t\t<div style=\"display:none;\" id=\"picId\">";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic")), "id", array(), "array"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<div style=\"display:none;\" id=\"login\">";
            // line 116
            echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "html", null, true);
            echo "</div>
\t\t\t\t\t\t<button onclick=\"like();\"><3</button>
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 121
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


\t\tfunction follow(user1, user2)
\t\t{
\t\t\tvar action=\"/Profile/\"+user1+\"/Follow\";
\t\t\t\$.ajax({
\t\t\turl:action,
\t\t\ttype:'POST',
\t\t\tdata:
\t\t\t{
\t\t\t\tUserToFollow: user1,
\t\t\t\tCurrentUser: user2,
\t\t\t}
\t\t\t});
\t\t}
\t</script>
";
        // line 178
        $this->loadTemplate("footer.html.twig", "Profile/Photo.html.twig", 178)->display($context);
        
        $__internal_6c1fe1815104b5a222a2c622f1832f7159c231ba13b9756a36e6be9a312b320c->leave($__internal_6c1fe1815104b5a222a2c622f1832f7159c231ba13b9756a36e6be9a312b320c_prof);

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
        return array (  327 => 178,  268 => 121,  260 => 116,  256 => 115,  253 => 114,  250 => 113,  241 => 107,  238 => 106,  235 => 105,  224 => 100,  218 => 97,  212 => 94,  207 => 91,  203 => 90,  198 => 88,  193 => 86,  188 => 84,  181 => 79,  172 => 77,  168 => 76,  158 => 69,  154 => 68,  148 => 65,  140 => 60,  131 => 53,  124 => 49,  120 => 48,  117 => 47,  114 => 46,  105 => 40,  102 => 39,  99 => 38,  88 => 33,  82 => 30,  76 => 27,  71 => 24,  67 => 23,  59 => 18,  51 => 13,  47 => 12,  39 => 9,  35 => 8,  31 => 7,  24 => 2,  22 => 1,);
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
/* 				<button class="btn btn-default buttons" onclick="follow('{{usr['login']}}', '{{session.CurrentUser.login}}');">Subskrybuj!</button>*/
/* 			</div>*/
/* 			<div class="PicturesContainer">*/
/* 				<a href="/Profile/Photo/{{pic['id']}}">*/
/* 					<img src="/{{pic['pic']}}" class="Pictures"/>*/
/* 				</a>*/
/* 			</div>*/
/* 			<div class="PicturesButton">*/
/* 				<button class="btn btn-default buttons" onclick="like();"><i class="fas fa-thumbs-up likeico"></i>Lubię to!</button>*/
/* 				Likes:<div id="likes" class="btn btn-default buttons">{{likes}}</div>*/
/* 				<div style="display:hidden;"></div>*/
/* 				<div style="display:hidden;"></div>*/
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
/* */
/* */
/* 		function follow(user1, user2)*/
/* 		{*/
/* 			var action="/Profile/"+user1+"/Follow";*/
/* 			$.ajax({*/
/* 			url:action,*/
/* 			type:'POST',*/
/* 			data:*/
/* 			{*/
/* 				UserToFollow: user1,*/
/* 				CurrentUser: user2,*/
/* 			}*/
/* 			});*/
/* 		}*/
/* 	</script>*/
/* {% include 'footer.html.twig' %}*/
