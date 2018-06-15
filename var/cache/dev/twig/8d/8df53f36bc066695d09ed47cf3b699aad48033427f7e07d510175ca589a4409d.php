<?php

/* :SearchPanel:Results.html.twig */
class __TwigTemplate_a1de51eb2c76c7e778442cad4f7ab9513ad1bc29626d94a98dddd6126d48f636 extends Twig_Template
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
        $__internal_f1a4b20f98637534687e9bd6bced6d7cdbb12e34b4db38d5380ca018bf81c866 = $this->env->getExtension("native_profiler");
        $__internal_f1a4b20f98637534687e9bd6bced6d7cdbb12e34b4db38d5380ca018bf81c866->enter($__internal_f1a4b20f98637534687e9bd6bced6d7cdbb12e34b4db38d5380ca018bf81c866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":SearchPanel:Results.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", ":SearchPanel:Results.html.twig", 1)->display($context);
        // line 2
        echo "

\t<div style=\"width:900px;margin-left:auto;margin-right:auto;\">

\t\t<div>
\t\t\t";
        // line 7
        if ((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users"))) {
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
        // line 30
        if (array_key_exists("pictures", $context)) {
            // line 31
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures")));
            foreach ($context['_seq'] as $context["_key"] => $context["pic"]) {
                // line 32
                echo "\t\t\t\t\t<div class=\"PicturesMainContainer\">
\t\t\t\t\t\t<a href=\"/Profile/Photo/";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["pic"], "id", array(), "array"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div class=\"PicturesContainer\">
\t\t\t\t\t\t\t<img src=\"/";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["pic"], "pic", array(), "array"), "html", null, true);
                echo "\" class=\"Pictures\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"PicturesButton\">
\t\t\t\t\t\t\t<button class=\"btn btn-default buttons\"><i class=\"fas fa-thumbs-up likeico\"></i>Lubię to!</button>
\t\t\t\t\t\t\t<button class=\"btn btn-default buttons\"><i class=\"fas fa-comment-alt likeico\"></i>Pokaż komentarze</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t\t";
        } else {
            // line 45
            echo "\t\t\t\t<label>Brak zdjęć</label>
\t\t\t";
        }
        // line 47
        echo "\t\t\t</div>
\t\t
\t\t</div>
\t\t
\t</div>



";
        // line 55
        $this->loadTemplate("footer.html.twig", ":SearchPanel:Results.html.twig", 55)->display($context);
        
        $__internal_f1a4b20f98637534687e9bd6bced6d7cdbb12e34b4db38d5380ca018bf81c866->leave($__internal_f1a4b20f98637534687e9bd6bced6d7cdbb12e34b4db38d5380ca018bf81c866_prof);

    }

    public function getTemplateName()
    {
        return ":SearchPanel:Results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 55,  116 => 47,  112 => 45,  109 => 44,  94 => 35,  89 => 33,  86 => 32,  81 => 31,  79 => 30,  68 => 21,  64 => 19,  61 => 18,  52 => 15,  46 => 12,  41 => 10,  38 => 9,  33 => 8,  31 => 7,  24 => 2,  22 => 1,);
    }
}
/* {% include 'header.html.twig' %}*/
/* */
/* */
/* 	<div style="width:900px;margin-left:auto;margin-right:auto;">*/
/* */
/* 		<div>*/
/* 			{% if users %}*/
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
/* */
/* 						*/
/* 						<!-- TAGI -->*/
/* 	<div style="width:900px;margin-left:auto;margin-right:auto;">*/
/* */
/* 		<div>*/
/* 			{% if pictures  is defined%}*/
/* 				{% for pic in pictures %}*/
/* 					<div class="PicturesMainContainer">*/
/* 						<a href="/Profile/Photo/{{pic['id']}}">*/
/* 						<div class="PicturesContainer">*/
/* 							<img src="/{{pic['pic']}}" class="Pictures"/>*/
/* 						</div>*/
/* 						</a>*/
/* 						<div class="PicturesButton">*/
/* 							<button class="btn btn-default buttons"><i class="fas fa-thumbs-up likeico"></i>Lubię to!</button>*/
/* 							<button class="btn btn-default buttons"><i class="fas fa-comment-alt likeico"></i>Pokaż komentarze</button>*/
/* 						</div>*/
/* 					</div>*/
/* 				{% endfor %}*/
/* 			{% else %}*/
/* 				<label>Brak zdjęć</label>*/
/* 			{% endif %}*/
/* 			</div>*/
/* 		*/
/* 		</div>*/
/* 		*/
/* 	</div>*/
/* */
/* */
/* */
/* {% include 'footer.html.twig' %}*/
