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
        $__internal_78498dc91e780006819d32aba6e110329eab8ad38941e375a848247d2903d959 = $this->env->getExtension("native_profiler");
        $__internal_78498dc91e780006819d32aba6e110329eab8ad38941e375a848247d2903d959->enter($__internal_78498dc91e780006819d32aba6e110329eab8ad38941e375a848247d2903d959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SearchPanel/Explore.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "SearchPanel/Explore.html.twig", 1)->display($context);
        // line 2
        echo "

\t<div class=\"container-fluid\">

\t\t<div class=\"\">
\t\t\t";
        // line 7
        if ((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures"))) {
            // line 8
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures")));
            foreach ($context['_seq'] as $context["_key"] => $context["pic"]) {
                // line 9
                echo "\t\t\t\t\t<div class=\"tile curved single_pic flexible-tile\">
\t\t\t\t\t\t\t<div class=\"PicturesContainer\">
\t\t\t\t\t\t\t\t<a href=\"/Profile/Photo/";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["pic"], "id", array(), "array"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"/";
                // line 12
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
            // line 21
            echo "\t\t\t";
        } else {
            // line 22
            echo "\t\t\t\t<label>Brak zdjęć</label>
\t\t\t";
        }
        // line 24
        echo "\t\t</div>
\t\t
\t</div>

";
        // line 28
        $this->loadTemplate("footer.html.twig", "SearchPanel/Explore.html.twig", 28)->display($context);
        
        $__internal_78498dc91e780006819d32aba6e110329eab8ad38941e375a848247d2903d959->leave($__internal_78498dc91e780006819d32aba6e110329eab8ad38941e375a848247d2903d959_prof);

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
        return array (  74 => 28,  68 => 24,  64 => 22,  61 => 21,  46 => 12,  42 => 11,  38 => 9,  33 => 8,  31 => 7,  24 => 2,  22 => 1,);
    }
}
/* {% include 'header.html.twig' %}*/
/* */
/* */
/* 	<div class="container-fluid">*/
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
