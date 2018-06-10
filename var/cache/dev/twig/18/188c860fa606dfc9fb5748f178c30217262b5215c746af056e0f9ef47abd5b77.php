<?php

/* SearchPanel/Explore.html.twig */
class __TwigTemplate_b63f82be47dc35fe5e2803eea46b8195e58a2174349be0d17add09a67b27cccd extends Twig_Template
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
        $__internal_79750ef42f3d49a4f26cd586ba2f5ce0886acc944dbb40496a3b1d2787b5388c = $this->env->getExtension("native_profiler");
        $__internal_79750ef42f3d49a4f26cd586ba2f5ce0886acc944dbb40496a3b1d2787b5388c->enter($__internal_79750ef42f3d49a4f26cd586ba2f5ce0886acc944dbb40496a3b1d2787b5388c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SearchPanel/Explore.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "SearchPanel/Explore.html.twig", 1)->display($context);
        // line 2
        echo "

\t<div class=\"container-fluid\">

\t<form action =\"/Search\" method=\"post\">
\t\t<input type=\"text\" class ='form-control inputs' id = \"SearchedArgument\" name =\"SearchedArgument\" placeholder=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), "html", null, true);
        echo "\" >
\t\t<button type=\"submit\" class = \"btn btn-default buttons\">Wyszukaj</button>
\t</form>

\t\t<div class=\"\">
\t\t\t";
        // line 12
        if ((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures"))) {
            // line 13
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures")));
            foreach ($context['_seq'] as $context["_key"] => $context["pic"]) {
                // line 14
                echo "\t\t\t\t\t<div class=\"tile curved single_pic flexible-tile\">
\t\t\t\t\t\t\t<div class=\"PicturesContainer\">
\t\t\t\t\t\t\t\t<a href=\"/Profile/Photo/";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["pic"], "id", array(), "array"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"/";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["pic"], "pic", array(), "array"), "html", null, true);
                echo "\" class=\"Pictures\"/>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
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
            // line 26
            echo "\t\t\t";
        } else {
            // line 27
            echo "\t\t\t\t<label>Brak zdjęć</label>
\t\t\t";
        }
        // line 29
        echo "\t\t</div>
\t\t
\t</div>

";
        // line 33
        $this->loadTemplate("footer.html.twig", "SearchPanel/Explore.html.twig", 33)->display($context);
        
        $__internal_79750ef42f3d49a4f26cd586ba2f5ce0886acc944dbb40496a3b1d2787b5388c->leave($__internal_79750ef42f3d49a4f26cd586ba2f5ce0886acc944dbb40496a3b1d2787b5388c_prof);

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
        return array (  82 => 33,  76 => 29,  72 => 27,  69 => 26,  54 => 17,  50 => 16,  46 => 14,  41 => 13,  39 => 12,  31 => 7,  24 => 2,  22 => 1,);
    }
}
/* {% include 'header.html.twig' %}*/
/* */
/* */
/* 	<div class="container-fluid">*/
/* */
/* 	<form action ="/Search" method="post">*/
/* 		<input type="text" class ='form-control inputs' id = "SearchedArgument" name ="SearchedArgument" placeholder="{{placeholder}}" >*/
/* 		<button type="submit" class = "btn btn-default buttons">Wyszukaj</button>*/
/* 	</form>*/
/* */
/* 		<div class="">*/
/* 			{% if pictures %}*/
/* 				{% for pic in pictures %}*/
/* 					<div class="tile curved single_pic flexible-tile">*/
/* 							<div class="PicturesContainer">*/
/* 								<a href="/Profile/Photo/{{pic['id']}}">*/
/* 									<img src="/{{pic['pic']}}" class="Pictures"/>*/
/* 								</a>*/
/* 							</div>*/
/* 						<div class="PicturesButton">*/
/* 							<button class="btn btn-default buttons"><i class="fas fa-thumbs-up likeico"></i>Lubię to!</button>*/
/* 							<button class="btn btn-default buttons"><i class="fas fa-comment-alt likeico"></i>Pokaż komentarze</button>*/
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
