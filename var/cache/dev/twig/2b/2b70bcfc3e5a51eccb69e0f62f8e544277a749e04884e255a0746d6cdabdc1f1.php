<?php

/* SearchPanel/Results.html.twig */
class __TwigTemplate_a061a09fbbf8f8157399d3628fb57c22b297d71f4cf313d56a3360561baa768a extends Twig_Template
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
        $__internal_987ff03be61d8b0fb19c0f61123e735b10b5e138efd3881f0381bbfaa414d715 = $this->env->getExtension("native_profiler");
        $__internal_987ff03be61d8b0fb19c0f61123e735b10b5e138efd3881f0381bbfaa414d715->enter($__internal_987ff03be61d8b0fb19c0f61123e735b10b5e138efd3881f0381bbfaa414d715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SearchPanel/Results.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "SearchPanel/Results.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"container-fluid\">
\t<div style=\"width:900px;margin-left:auto;margin-right:auto;\">

\t\t<div>
\t\t\t";
        // line 7
        if (array_key_exists("users", $context)) {
            // line 8
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 9
                echo "\t\t\t\t\t<div class=\"PicturesMainContainer\">
\t\t\t\t\t\t<a href=\"/Profile/";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "login", array(), "array"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div class=\"PicturesContainer\">
\t\t\t\t\t\t\t<img width=100px height=100px src=\"data:image/jpeg;base64,";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "avatar", array(), "array"), "html", null, true);
                echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<label>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "login", array(), "array"), "html", null, true);
                echo "</label>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\t\t";
        } else {
            // line 19
            echo "\t\t\t\t<label>Brak użytkowników</label>
\t\t\t";
        }
        // line 21
        echo "\t\t</div>
\t\t
\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- TAGI -->
\t<div style=\"width:900px;margin-left:auto;margin-right:auto;\">

\t\t<div>
\t\t\t";
        // line 29
        if (array_key_exists("pictures", $context)) {
            // line 30
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures")));
            foreach ($context['_seq'] as $context["_key"] => $context["pic"]) {
                // line 31
                echo "\t\t\t\t\t<div class=\"tile curved single_pic flexible-tile\">
\t\t\t\t\t\t<!--<div class=\"PicturesInfo\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t<div class=\"PicturesContainer\">
\t\t\t\t\t\t\t<a href=\"/Profile/Photo/";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["pic"], "id", array(), "array"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<img src=\"/";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["pic"], "pic", array(), "array"), "html", null, true);
                echo "\" class=\"Pictures\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<!--<div class=\"PicturesButton\">
\t\t\t\t\t\t\t<button class=\"btn btn-default buttons\"><i class=\"fas fa-thumbs-up likeico\"></i>Lubię to!</button>
\t\t\t\t\t\t\t<button class=\"btn btn-default buttons\"><i class=\"fas fa-comment-alt likeico\"></i>Pokaż komentarze</button>
\t\t\t\t\t\t</div>-->
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "\t\t\t";
        } else {
            // line 48
            echo "\t\t\t\t<label>Brak zdjęć</label>
\t\t\t";
        }
        // line 50
        echo "\t\t</div>
\t\t
\t\t</div>
\t\t
\t</div>


";
        // line 57
        $this->loadTemplate("footer.html.twig", "SearchPanel/Results.html.twig", 57)->display($context);
        
        $__internal_987ff03be61d8b0fb19c0f61123e735b10b5e138efd3881f0381bbfaa414d715->leave($__internal_987ff03be61d8b0fb19c0f61123e735b10b5e138efd3881f0381bbfaa414d715_prof);

    }

    public function getTemplateName()
    {
        return "SearchPanel/Results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 57,  119 => 50,  115 => 48,  112 => 47,  96 => 37,  92 => 36,  85 => 31,  80 => 30,  78 => 29,  68 => 21,  64 => 19,  61 => 18,  52 => 15,  46 => 12,  41 => 10,  38 => 9,  33 => 8,  31 => 7,  24 => 2,  22 => 1,);
    }
}
/* {% include 'header.html.twig' %}*/
/* */
/* <div class="container-fluid">*/
/* 	<div style="width:900px;margin-left:auto;margin-right:auto;">*/
/* */
/* 		<div>*/
/* 			{% if users is defined %}*/
/* 				{% for user in users %}*/
/* 					<div class="PicturesMainContainer">*/
/* 						<a href="/Profile/{{user['login']}}">*/
/* 						<div class="PicturesContainer">*/
/* 							<img width=100px height=100px src="data:image/jpeg;base64,{{user['avatar']}}" />*/
/* 						</div>*/
/* 						</a>*/
/* 						<label>{{user['login']}}</label>*/
/* 					</div>*/
/* 				{% endfor %}*/
/* 			{% else %}*/
/* 				<label>Brak użytkowników</label>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 		*/
/* 	</div>*/
/* 						*/
/* 						<!-- TAGI -->*/
/* 	<div style="width:900px;margin-left:auto;margin-right:auto;">*/
/* */
/* 		<div>*/
/* 			{% if pictures is defined %}*/
/* 				{% for pic in pictures %}*/
/* 					<div class="tile curved single_pic flexible-tile">*/
/* 						<!--<div class="PicturesInfo">*/
/* 							*/
/* 						</div>-->*/
/* 						<div class="PicturesContainer">*/
/* 							<a href="/Profile/Photo/{{pic['id']}}">*/
/* 								<img src="/{{pic['pic']}}" class="Pictures"/>*/
/* 							</a>*/
/* 						</div>*/
/* 						*/
/* 						<!--<div class="PicturesButton">*/
/* 							<button class="btn btn-default buttons"><i class="fas fa-thumbs-up likeico"></i>Lubię to!</button>*/
/* 							<button class="btn btn-default buttons"><i class="fas fa-comment-alt likeico"></i>Pokaż komentarze</button>*/
/* 						</div>-->*/
/* 					</div>*/
/* 				{% endfor %}*/
/* 			{% else %}*/
/* 				<label>Brak zdjęć</label>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 		*/
/* 		</div>*/
/* 		*/
/* 	</div>*/
/* */
/* */
/* {% include 'footer.html.twig' %}*/
