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
        $__internal_3f15aecd549e9c245464295376a453aef016efae6c3d159b64ba9ce8cff41dce = $this->env->getExtension("native_profiler");
        $__internal_3f15aecd549e9c245464295376a453aef016efae6c3d159b64ba9ce8cff41dce->enter($__internal_3f15aecd549e9c245464295376a453aef016efae6c3d159b64ba9ce8cff41dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SearchPanel/Explore.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "SearchPanel/Explore.html.twig", 1)->display($context);
        // line 2
        echo "

\t<div style=\"width:900px;margin-left:auto;margin-right:auto;\">
\t<form action =\"/Search\" method=\"post\">
\t\t<input type=\"text\" class ='form-control inputs' id = \"SearchedArgument\" name =\"SearchedArgument\" placeholder=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), "html", null, true);
        echo "\" >
\t\t<button type=\"submit\" class = \"btn btn-default buttons\">Wyszukaj</button>
\t</form>
\t\t<div>
\t\t\t";
        // line 10
        if ((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures"))) {
            // line 11
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures")));
            foreach ($context['_seq'] as $context["_key"] => $context["pic"]) {
                // line 12
                echo "\t\t\t\t\t<div class=\"PicturesMainContainer\">
\t\t\t\t\t\t<a href=\"/Profile/Photo/";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["pic"], "id", array(), "array"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div class=\"PicturesContainer\">
\t\t\t\t\t\t\t<img src=\"/";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["pic"], "pic", array(), "array"), "html", null, true);
                echo "\" class=\"Pictures\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"PicturesButton\">
\t\t\t\t\t\t\t<input type=\"button\" value=\"Lubie to!\"/>
\t\t\t\t\t\t\t<input type=\"button\" value=\"Pokaż komentarze\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t\t";
        } else {
            // line 25
            echo "\t\t\t\t<label>Brak zdjęć</label>
\t\t\t";
        }
        // line 27
        echo "\t\t</div>
\t\t
\t</div>

";
        // line 31
        $this->loadTemplate("footer.html.twig", "SearchPanel/Explore.html.twig", 31)->display($context);
        
        $__internal_3f15aecd549e9c245464295376a453aef016efae6c3d159b64ba9ce8cff41dce->leave($__internal_3f15aecd549e9c245464295376a453aef016efae6c3d159b64ba9ce8cff41dce_prof);

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
        return array (  80 => 31,  74 => 27,  70 => 25,  67 => 24,  52 => 15,  47 => 13,  44 => 12,  39 => 11,  37 => 10,  30 => 6,  24 => 2,  22 => 1,);
    }
}
/* {% include 'header.html.twig' %}*/
/* */
/* */
/* 	<div style="width:900px;margin-left:auto;margin-right:auto;">*/
/* 	<form action ="/Search" method="post">*/
/* 		<input type="text" class ='form-control inputs' id = "SearchedArgument" name ="SearchedArgument" placeholder="{{placeholder}}" >*/
/* 		<button type="submit" class = "btn btn-default buttons">Wyszukaj</button>*/
/* 	</form>*/
/* 		<div>*/
/* 			{% if pictures %}*/
/* 				{% for pic in pictures %}*/
/* 					<div class="PicturesMainContainer">*/
/* 						<a href="/Profile/Photo/{{pic['id']}}">*/
/* 						<div class="PicturesContainer">*/
/* 							<img src="/{{pic['pic']}}" class="Pictures"/>*/
/* 						</div>*/
/* 						</a>*/
/* 						<div class="PicturesButton">*/
/* 							<input type="button" value="Lubie to!"/>*/
/* 							<input type="button" value="Pokaż komentarze"/>*/
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
