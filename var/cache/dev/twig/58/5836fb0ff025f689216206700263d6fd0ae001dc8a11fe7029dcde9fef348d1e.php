<?php

/* :SearchPanel:Explore.html.twig */
class __TwigTemplate_d22d54c3a5923ad3bc042ff71211c3516639641aa8aa18524ad9ff0fe47e06b0 extends Twig_Template
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
        $__internal_bac8e6de51aad2c2b46595f17f5294ce8b2d4430b1e9dd2503152e7b066b821d = $this->env->getExtension("native_profiler");
        $__internal_bac8e6de51aad2c2b46595f17f5294ce8b2d4430b1e9dd2503152e7b066b821d->enter($__internal_bac8e6de51aad2c2b46595f17f5294ce8b2d4430b1e9dd2503152e7b066b821d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":SearchPanel:Explore.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", ":SearchPanel:Explore.html.twig", 1)->display($context);
        // line 2
        echo "

\t<div class=\"container-fluid\">


\t<form action =\"/Search\" method=\"post\">
\t\t<input type=\"text\" class ='form-control inputs' id = \"SearchedArgument\" name =\"SearchedArgument\" placeholder=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), "html", null, true);
        echo "\" >
\t\t<button type=\"submit\" class = \"btn btn-default buttons\">Wyszukaj</button>
\t</form>


\t\t<div class=\"\">
\t\t\t";
        // line 14
        if ((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic"))) {
            // line 15
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic")));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 16
                echo "\t\t\t\t\t<div class=\"tile curved single_pic flexible-tile\">
\t\t\t<div class=\"PicturesInfo\">
\t\t\t\t<img src=\"data:image/jpeg;base64,";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "usr", array(), "array"), "avatar", array(), "array"), "html", null, true);
                echo "\" class=\"avatar\" height=\"30px\" width=\"30px\" />
\t\t\t\t<label style=\"margin-left: 30px;\">";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "usr", array(), "array"), "login", array(), "array"), "html", null, true);
                echo "</label>
\t\t\t</div>
\t\t\t<div class=\"PicturesContainer\">
\t\t\t\t<a href=\"/Profile/Photo/";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array(), "array"), "html", null, true);
                echo "\">
\t\t\t\t\t<img src=\"/";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic")), "pic", array(), "array"), "html", null, true);
                echo "\" class=\"Pictures\"/>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"PicturesButton\">
\t\t\t\t<button class=\"btn btn-default buttons\" onclick=\"like();\"><i class=\"fas fa-thumbs-up likeico\"></i>Lubię to!</button>
\t\t\t\tLikes:<div id=\"likes\" class=\"btn btn-default buttons\">";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "likes", array(), "array"), "html", null, true);
                echo "</div>
\t\t\t\t<div style=\"display:none;\" id=\"pidd\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array(), "array"), "html", null, true);
                echo "</div>
\t\t\t\t<div style=\"display:none;\" id=\"plogg\">";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "usr", array(), "array"), "login", array(), "array"), "html", null, true);
                echo "</div>
\t\t\t</div>
\t\t\t<div class=\"commentsSection\">
\t\t\t\t";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["p"], "comms", array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["comm"]) {
                    // line 34
                    echo "\t\t\t\t\t<div class=\"Comment\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"Date\">
\t\t\t\t\t\t";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comm"], "date", array(), "array"), "html", null, true);
                    echo " 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"Author\">
\t\t\t\t\t\t";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comm"], "login", array(), "array"), "html", null, true);
                    echo " 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"Content\">
\t\t\t\t\t\t";
                    // line 43
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
                // line 48
                echo "\t\t\t\t";
                if (((isset($context["loggedIn"]) ? $context["loggedIn"] : $this->getContext($context, "loggedIn")) == true)) {
                    // line 49
                    echo "\t\t\t\t\t<div class=\"CommentAdd\">
\t\t\t\t\t\t<form class=\"CommentInput\" action=\"/Profile/Photo/NewComment/";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic")), "id", array(), "array"), "html", null, true);
                    echo "\" method=\"post\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"CommentInputContent\"  name=\"CommentContent\" id=\"CommentContent\">
\t\t\t\t\t\t\t<input type=\"submit\" class=\"CommentInputButton\" value=\"Dodaj Komentarz\"/>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 56
                echo "\t\t\t\t";
                if (((isset($context["loggedIn"]) ? $context["loggedIn"] : $this->getContext($context, "loggedIn")) == true)) {
                    // line 57
                    echo "\t\t\t\t\t<div class=\"LikeButton\">
\t\t\t\t\t\t<div style=\"display:none;\" id=\"picId\">";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pic"]) ? $context["pic"] : $this->getContext($context, "pic")), "id", array(), "array"), "html", null, true);
                    echo "</div>
\t\t\t\t\t\t<div style=\"display:none;\" id=\"login\">";
                    // line 59
                    echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "html", null, true);
                    echo "</div>
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 63
                echo "\t\t\t</div>
\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "\t\t\t";
        } else {
            // line 67
            echo "\t\t\t\t<label>Brak zdjęć</label>
\t\t\t";
        }
        // line 69
        echo "\t\t</div>
\t\t
\t\t<script>
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
        // line 109
        $this->loadTemplate("footer.html.twig", ":SearchPanel:Explore.html.twig", 109)->display($context);
        
        $__internal_bac8e6de51aad2c2b46595f17f5294ce8b2d4430b1e9dd2503152e7b066b821d->leave($__internal_bac8e6de51aad2c2b46595f17f5294ce8b2d4430b1e9dd2503152e7b066b821d_prof);

    }

    public function getTemplateName()
    {
        return ":SearchPanel:Explore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 109,  167 => 69,  163 => 67,  160 => 66,  152 => 63,  145 => 59,  141 => 58,  138 => 57,  135 => 56,  126 => 50,  123 => 49,  120 => 48,  109 => 43,  103 => 40,  97 => 37,  92 => 34,  88 => 33,  82 => 30,  78 => 29,  74 => 28,  66 => 23,  62 => 22,  56 => 19,  52 => 18,  48 => 16,  43 => 15,  41 => 14,  32 => 8,  24 => 2,  22 => 1,);
    }
}
/* {% include 'header.html.twig' %}*/
/* */
/* */
/* 	<div class="container-fluid">*/
/* */
/* */
/* 	<form action ="/Search" method="post">*/
/* 		<input type="text" class ='form-control inputs' id = "SearchedArgument" name ="SearchedArgument" placeholder="{{placeholder}}" >*/
/* 		<button type="submit" class = "btn btn-default buttons">Wyszukaj</button>*/
/* 	</form>*/
/* */
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
/* 					<img src="/{{pic['pic']}}" class="Pictures"/>*/
/* 				</a>*/
/* 			</div>*/
/* 			<div class="PicturesButton">*/
/* 				<button class="btn btn-default buttons" onclick="like();"><i class="fas fa-thumbs-up likeico"></i>Lubię to!</button>*/
/* 				Likes:<div id="likes" class="btn btn-default buttons">{{p['likes']}}</div>*/
/* 				<div style="display:none;" id="pidd">{{p['id']}}</div>*/
/* 				<div style="display:none;" id="plogg">{{p['usr']['login']}}</div>*/
/* 			</div>*/
/* 			<div class="commentsSection">*/
/* 				{% for comm in p['comms'] %}*/
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
/* 				{% endfor %}*/
/* 			{% else %}*/
/* 				<label>Brak zdjęć</label>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 		*/
/* 		<script>*/
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
/* */
/* {% include 'footer.html.twig' %}*/
