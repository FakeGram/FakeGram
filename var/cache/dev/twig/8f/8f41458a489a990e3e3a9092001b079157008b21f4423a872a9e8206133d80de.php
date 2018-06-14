<?php

/* SearchPanel/Resoults.html.twig */
class __TwigTemplate_291a4550b04201bc9a5685a0360e50556ff9bea8bc048b660eeb40f90536fa96 extends Twig_Template
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
        $__internal_148c91c358c5d98573e090759390c7818914e6796933fddd9a8fb1284e849699 = $this->env->getExtension("native_profiler");
        $__internal_148c91c358c5d98573e090759390c7818914e6796933fddd9a8fb1284e849699->enter($__internal_148c91c358c5d98573e090759390c7818914e6796933fddd9a8fb1284e849699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SearchPanel/Resoults.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "SearchPanel/Resoults.html.twig", 1)->display($context);
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
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t\t\t";
        } else {
            // line 18
            echo "\t\t\t\t<label>Brak użytkowników</label>
\t\t\t";
        }
        // line 20
        echo "\t\t</div>
\t\t
\t</div>

";
        // line 24
        $this->loadTemplate("footer.html.twig", "SearchPanel/Resoults.html.twig", 24)->display($context);
        
        $__internal_148c91c358c5d98573e090759390c7818914e6796933fddd9a8fb1284e849699->leave($__internal_148c91c358c5d98573e090759390c7818914e6796933fddd9a8fb1284e849699_prof);

    }

    public function getTemplateName()
    {
        return "SearchPanel/Resoults.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 24,  64 => 20,  60 => 18,  57 => 17,  46 => 12,  41 => 10,  38 => 9,  33 => 8,  31 => 7,  24 => 2,  22 => 1,);
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
/* 					</div>*/
/* 				{% endfor %}*/
/* 			{% else %}*/
/* 				<label>Brak użytkowników</label>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 		*/
/* 	</div>*/
/* */
/* {% include 'footer.html.twig' %}*/
