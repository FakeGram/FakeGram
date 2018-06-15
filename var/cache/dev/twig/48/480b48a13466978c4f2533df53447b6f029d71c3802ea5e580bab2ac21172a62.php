<?php

/* SearchPanel/Explore.html.twig */
class __TwigTemplate_62445a45bcf6e3ec7b7482bde522a4a0b98f0dd11c0186c68dbddad35a65c29c extends Twig_Template
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
        $__internal_a858d79071e9e46655d2d1136f7183bdd486b1779a0e3f138cda712f1fe3136e = $this->env->getExtension("native_profiler");
        $__internal_a858d79071e9e46655d2d1136f7183bdd486b1779a0e3f138cda712f1fe3136e->enter($__internal_a858d79071e9e46655d2d1136f7183bdd486b1779a0e3f138cda712f1fe3136e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SearchPanel/Explore.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "SearchPanel/Explore.html.twig", 1)->display($context);
        // line 2
        echo "

\t<div class=\"container-fluid\">

\t\t<div class=\"\">
\t\t\t";
        // line 7
        if ((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic"))) {
            // line 8
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic")));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 9
                echo "\t\t\t\t\t<div class=\"tile curved single_pic flexible-tile\">
\t\t\t<div class=\"PicturesInfo\">
\t\t\t\t<img src=\"data:image/jpeg;base64,";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "usr", array(), "array"), "avatar", array(), "array"), "html", null, true);
                echo "\" class=\"avatar\" height=\"30px\" width=\"30px\" />
\t\t\t\t<label style=\"margin-left: 30px;\">";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "usr", array(), "array"), "login", array(), "array"), "html", null, true);
                echo "</label>
\t\t\t</div>
\t\t\t<div class=\"PicturesContainer\">
\t\t\t\t<a href=\"/Profile/Photo/";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array(), "array"), "html", null, true);
                echo "\">
\t\t\t\t\t<img src=\"/";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "pic", array(), "array"), "html", null, true);
                echo "\" class=\"Pictures\"/>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"PicturesButton\">
\t\t\t\t<button class=\"btn btn-default buttons\" onclick=\"like('";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "CurrentUser", array()), "login", array()), "html", null, true);
                echo "', ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array(), "array"), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "liked", array(), "array"), "html", null, true);
                echo " );\"><i class=\"fas fa-thumbs-up likeico\"></i>Lubię to!</button>
\t\t\t\tLikes:<div id=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array(), "array"), "html", null, true);
                echo "\" class=\"btn btn-default buttons\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "likes", array(), "array"), "html", null, true);
                echo "</div>
\t\t\t\t";
                // line 22
                if (array_key_exists("set", $context)) {
                    // line 23
                    echo "\t\t\t\t";
                    if (((isset($context["set"]) ? $context["set"] : $this->getContext($context, "set")) == "prof")) {
                        // line 24
                        echo "\t\t\t\t<a class=\"btn btn-default buttons\" href=\"/reedit/";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "pic", array(), "array"), "html", null, true);
                        echo "\" >Edytuj</a>
\t\t\t\t";
                    }
                    // line 26
                    echo "\t\t\t\t";
                }
                // line 27
                echo "\t\t\t\t<div style=\"display:none;\" id=\"pidd\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array(), "array"), "html", null, true);
                echo "</div>
\t\t\t\t<div style=\"display:none;\" id=\"plogg\">";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "usr", array(), "array"), "login", array(), "array"), "html", null, true);
                echo "</div>
\t\t\t\t<div style=\"display:none;\" id=\"check";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array(), "array"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "liked", array(), "array"), "html", null, true);
                echo "</div>
\t\t\t</div>
\t\t\t<div class=\"commentsSection\">
\t\t\t\t";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["p"], "comm", array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["comms"]) {
                    // line 33
                    echo "\t\t\t\t\t<div class=\"Comment\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"Date\">
\t\t\t\t\t\t";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comms"], "date", array(), "array"), "html", null, true);
                    echo " 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"Author\">
\t\t\t\t\t\t";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comms"], "login", array(), "array"), "html", null, true);
                    echo " 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"Content\">
\t\t\t\t\t\t";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comms"], "content", array(), "array"), "html", null, true);
                    echo " 
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"clear:both;\"></div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comms'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "\t\t\t\t";
                if ($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "CurrentUser", array(), "any", true, true)) {
                    // line 48
                    echo "\t\t\t\t\t<div class=\"CommentAdd\">
\t\t\t\t\t\t<form class=\"CommentInput\" action=\"/Profile/Photo/NewComment/";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array(), "array"), "html", null, true);
                    echo "\" method=\"post\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"CommentInputContent\"  name=\"CommentContent\" id=\"CommentContent\">
\t\t\t\t\t\t\t<input type=\"submit\" class=\"CommentInputButton\" value=\"Dodaj Komentarz\"/>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 55
                echo "\t\t\t\t";
                if ($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "CurrentUser", array(), "any", true, true)) {
                    // line 56
                    echo "\t\t\t\t\t<div class=\"LikeButton\">
\t\t\t\t\t\t<div style=\"display:none;\" id=\"picId\">";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array(), "array"), "html", null, true);
                    echo "</div>
\t\t\t\t\t\t<div style=\"display:none;\" id=\"login\">";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "CurrentUser", array()), "login", array()), "html", null, true);
                    echo "</div>
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 62
                echo "\t\t\t</div>
\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "\t\t\t";
        } else {
            // line 66
            echo "\t\t\t\t<label>Brak zdjęć</label>
\t\t\t";
        }
        // line 68
        echo "\t\t</div>
\t\t
\t\t<script>
\t\tfunction like(loginno, picid, likedd)
\t\t{
\t\t\tvar id=document.getElementById(\"picId\").innerHTML;
\t\t\tvar login=document.getElementById(\"login\").innerHTML;
\t\t\tvar action=\"/Profile/Photo/AddLike/\"+picid+\"/\"+loginno;
\t\t\t\$.ajax({
\t\t\t\turl:action,
\t\t\ttype:'POST',
\t\t\tdata:
\t\t\t{
\t\t\t\t
\t\t\t}
\t\t\t});
\t\t\tvar liked=document.getElementById(\"check\"+picid).innerHTML;
\t\t\t
\t\t\t
\t\t\tvar count=parseInt(document.getElementById(picid).innerHTML);
\t\t\t
\t\t\tif(liked==1)
\t\t\t{
\t\t\t\t
\t\t\t\tdocument.getElementById(picid).innerHTML=count-1;
\t\t\t\tliked=0;
\t\t\t\tdocument.getElementById(\"check\"+picid).innerHTML=0;
\t\t\t\t
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\t
\t\t\t\tdocument.getElementById(picid).innerHTML=count+1;
\t\t\t\tliked=1;
\t\t\t\tdocument.getElementById(\"check\"+picid).innerHTML=1;
\t\t\t}
\t\t\t
\t\t}
\t</script>

";
        // line 108
        $this->loadTemplate("footer.html.twig", "SearchPanel/Explore.html.twig", 108)->display($context);
        
        $__internal_a858d79071e9e46655d2d1136f7183bdd486b1779a0e3f138cda712f1fe3136e->leave($__internal_a858d79071e9e46655d2d1136f7183bdd486b1779a0e3f138cda712f1fe3136e_prof);

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
        return array (  229 => 108,  187 => 68,  183 => 66,  180 => 65,  172 => 62,  165 => 58,  161 => 57,  158 => 56,  155 => 55,  146 => 49,  143 => 48,  140 => 47,  129 => 42,  123 => 39,  117 => 36,  112 => 33,  108 => 32,  100 => 29,  96 => 28,  91 => 27,  88 => 26,  82 => 24,  79 => 23,  77 => 22,  71 => 21,  63 => 20,  56 => 16,  52 => 15,  46 => 12,  42 => 11,  38 => 9,  33 => 8,  31 => 7,  24 => 2,  22 => 1,);
    }
}
/* {% include 'header.html.twig' %}*/
/* */
/* */
/* 	<div class="container-fluid">*/
/* */
/* 		<div class="">*/
/* 			{% if pic %}*/
/* 				{% for p in pic %}*/
/* 					<div class="tile curved single_pic flexible-tile">*/
/* 			<div class="PicturesInfo">*/
/* 				<img src="data:image/jpeg;base64,{{p['usr']['avatar']}}" class="avatar" height="30px" width="30px" />*/
/* 				<label style="margin-left: 30px;">{{p['usr']['login']}}</label>*/
/* 			</div>*/
/* 			<div class="PicturesContainer">*/
/* 				<a href="/Profile/Photo/{{p['id']}}">*/
/* 					<img src="/{{p['pic']}}" class="Pictures"/>*/
/* 				</a>*/
/* 			</div>*/
/* 			<div class="PicturesButton">*/
/* 				<button class="btn btn-default buttons" onclick="like('{{session.CurrentUser.login}}', {{p['id']}}, {{p['liked']}} );"><i class="fas fa-thumbs-up likeico"></i>Lubię to!</button>*/
/* 				Likes:<div id="{{p['id']}}" class="btn btn-default buttons">{{p['likes']}}</div>*/
/* 				{% if set is defined %}*/
/* 				{% if set == "prof" %}*/
/* 				<a class="btn btn-default buttons" href="/reedit/{{p['pic']}}" >Edytuj</a>*/
/* 				{% endif %}*/
/* 				{% endif %}*/
/* 				<div style="display:none;" id="pidd">{{p['id']}}</div>*/
/* 				<div style="display:none;" id="plogg">{{p['usr']['login']}}</div>*/
/* 				<div style="display:none;" id="check{{p['id']}}">{{p['liked']}}</div>*/
/* 			</div>*/
/* 			<div class="commentsSection">*/
/* 				{% for comms in p['comm'] %}*/
/* 					<div class="Comment">*/
/* 					*/
/* 					<div class="Date">*/
/* 						{{comms['date']}} */
/* 					</div>*/
/* 					<div class="Author">*/
/* 						{{comms['login']}} */
/* 					</div>*/
/* 					<div class="Content">*/
/* 						{{comms['content']}} */
/* 					</div>*/
/* 					<div style="clear:both;"></div>*/
/* 					</div>*/
/* 				{% endfor %}*/
/* 				{% if session.CurrentUser is defined %}*/
/* 					<div class="CommentAdd">*/
/* 						<form class="CommentInput" action="/Profile/Photo/NewComment/{{p['id']}}" method="post">*/
/* 							<input type="text" class="CommentInputContent"  name="CommentContent" id="CommentContent">*/
/* 							<input type="submit" class="CommentInputButton" value="Dodaj Komentarz"/>*/
/* 						</form>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				{% if session.CurrentUser is defined %}*/
/* 					<div class="LikeButton">*/
/* 						<div style="display:none;" id="picId">{{p['id']}}</div>*/
/* 						<div style="display:none;" id="login">{{session.CurrentUser.login}}</div>*/
/* 							*/
/* 					</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		</div>*/
/* 				{% endfor %}*/
/* 			{% else %}*/
/* 				<label>Brak zdjęć</label>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 		*/
/* 		<script>*/
/* 		function like(loginno, picid, likedd)*/
/* 		{*/
/* 			var id=document.getElementById("picId").innerHTML;*/
/* 			var login=document.getElementById("login").innerHTML;*/
/* 			var action="/Profile/Photo/AddLike/"+picid+"/"+loginno;*/
/* 			$.ajax({*/
/* 				url:action,*/
/* 			type:'POST',*/
/* 			data:*/
/* 			{*/
/* 				*/
/* 			}*/
/* 			});*/
/* 			var liked=document.getElementById("check"+picid).innerHTML;*/
/* 			*/
/* 			*/
/* 			var count=parseInt(document.getElementById(picid).innerHTML);*/
/* 			*/
/* 			if(liked==1)*/
/* 			{*/
/* 				*/
/* 				document.getElementById(picid).innerHTML=count-1;*/
/* 				liked=0;*/
/* 				document.getElementById("check"+picid).innerHTML=0;*/
/* 				*/
/* 			}*/
/* 			else*/
/* 			{*/
/* 				*/
/* 				document.getElementById(picid).innerHTML=count+1;*/
/* 				liked=1;*/
/* 				document.getElementById("check"+picid).innerHTML=1;*/
/* 			}*/
/* 			*/
/* 		}*/
/* 	</script>*/
/* */
/* {% include 'footer.html.twig' %}*/
