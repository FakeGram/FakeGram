<?php

/* SearchPanel/Explore.html.twig */
class __TwigTemplate_fc27fa76e7cd9841c637eadd59af72d80238f3f690ff003d2ecab9c6b2620725 extends Twig_Template
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
        $__internal_4523ec724ed64b063f9111f3f34b04dc14859dc6434ff4c51eeb245ae0b5b753 = $this->env->getExtension("native_profiler");
        $__internal_4523ec724ed64b063f9111f3f34b04dc14859dc6434ff4c51eeb245ae0b5b753->enter($__internal_4523ec724ed64b063f9111f3f34b04dc14859dc6434ff4c51eeb245ae0b5b753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SearchPanel/Explore.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "SearchPanel/Explore.html.twig", 1)->display($context);
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
        if ((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures"))) {
            // line 15
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures")));
            foreach ($context['_seq'] as $context["_key"] => $context["pic"]) {
                // line 16
                echo "\t\t\t\t\t<div class=\"tile curved single_pic flexible-tile\">
\t\t\t\t\t\t\t<div class=\"PicturesContainer\">
\t\t\t\t\t\t\t\t<a href=\"/Profile/Photo/";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["pic"], "id", array(), "array"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"/";
                // line 19
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
            // line 28
            echo "\t\t\t";
        } else {
            // line 29
            echo "\t\t\t\t<label>Brak zdjęć</label>
\t\t\t";
        }
        // line 31
        echo "\t\t</div>
\t\t

";
        // line 34
        $this->loadTemplate("footer.html.twig", "SearchPanel/Explore.html.twig", 34)->display($context);
        
        $__internal_4523ec724ed64b063f9111f3f34b04dc14859dc6434ff4c51eeb245ae0b5b753->leave($__internal_4523ec724ed64b063f9111f3f34b04dc14859dc6434ff4c51eeb245ae0b5b753_prof);

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
        return array (  83 => 34,  78 => 31,  74 => 29,  71 => 28,  56 => 19,  52 => 18,  48 => 16,  43 => 15,  41 => 14,  32 => 8,  24 => 2,  22 => 1,);
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
/* */
/* {% include 'footer.html.twig' %}*/
