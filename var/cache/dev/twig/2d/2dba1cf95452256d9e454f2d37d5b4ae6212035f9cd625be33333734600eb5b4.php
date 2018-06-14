<?php

/* SearchPanel/Results.html.twig */
class __TwigTemplate_5eb4ba09329e1857eabbfe7ef685f00bf51f8817b07dde5ee4eae05f95cfcf28 extends Twig_Template
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
        $__internal_db10213139e6fdb664cd787a1ba9d9e2902996572cd7ceb5869775ee990e574e = $this->env->getExtension("native_profiler");
        $__internal_db10213139e6fdb664cd787a1ba9d9e2902996572cd7ceb5869775ee990e574e->enter($__internal_db10213139e6fdb664cd787a1ba9d9e2902996572cd7ceb5869775ee990e574e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SearchPanel/Results.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "SearchPanel/Results.html.twig", 1)->display($context);
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

";
        // line 25
        $this->loadTemplate("footer.html.twig", "SearchPanel/Results.html.twig", 25)->display($context);
        
        $__internal_db10213139e6fdb664cd787a1ba9d9e2902996572cd7ceb5869775ee990e574e->leave($__internal_db10213139e6fdb664cd787a1ba9d9e2902996572cd7ceb5869775ee990e574e_prof);

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
        return array (  74 => 25,  68 => 21,  64 => 19,  61 => 18,  52 => 15,  46 => 12,  41 => 10,  38 => 9,  33 => 8,  31 => 7,  24 => 2,  22 => 1,);
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
/* {% include 'footer.html.twig' %}*/
