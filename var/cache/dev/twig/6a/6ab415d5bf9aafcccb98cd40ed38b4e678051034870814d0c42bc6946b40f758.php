<?php

/* TwigBundle:Exception:traces_text.html.twig */
class __TwigTemplate_3a0fe71bfa57d22c1fdff3b65ec555df9c121ff64e7eaaed650ce1eb86cd1c5f extends Twig_Template
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
<<<<<<< HEAD:var/cache/dev/twig/6a/6ab415d5bf9aafcccb98cd40ed38b4e678051034870814d0c42bc6946b40f758.php
        $__internal_55f81a3d2ca44879cb527dcfe81652165376f7c054e200e30c62c9c36558d456 = $this->env->getExtension("native_profiler");
        $__internal_55f81a3d2ca44879cb527dcfe81652165376f7c054e200e30c62c9c36558d456->enter($__internal_55f81a3d2ca44879cb527dcfe81652165376f7c054e200e30c62c9c36558d456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces_text.html.twig"));
=======
        $__internal_dce7fecf2d2bf6d03f1aaab71ba758b7aca8d6be5836b377c1e7366fb466f18a = $this->env->getExtension("native_profiler");
        $__internal_dce7fecf2d2bf6d03f1aaab71ba758b7aca8d6be5836b377c1e7366fb466f18a->enter($__internal_dce7fecf2d2bf6d03f1aaab71ba758b7aca8d6be5836b377c1e7366fb466f18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));
>>>>>>> origin/Sladu:var/cache/dev/twig/ac/ac98d9e40b97ca2cb3fd94a726f85f0a4d675560ca6e3967d4d91cbcad908160.php

        // line 1
        echo "<div class=\"block\">
    <h2>
        Stack Trace (Plain Text)&nbsp;
        ";
        // line 4
        ob_start();
        // line 5
        echo "        <a href=\"#\" onclick=\"toggle('traces-text'); switchIcons('icon-traces-text-open', 'icon-traces-text-close'); return false;\">
            <img class=\"toggle\" id=\"icon-traces-text-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: none\" />
            <img class=\"toggle\" id=\"icon-traces-text-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: inline\" />
        </a>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 10
        echo "    </h2>

    <div id=\"traces-text\" class=\"trace\" style=\"display: none;\">
<pre>";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 14
            echo "[";
            echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
            echo "] ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "class", array()), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "message", array()), "html", null, true);
            echo "
";
            // line 15
            $this->loadTemplate("@Twig/Exception/traces.txt.twig", "TwigBundle:Exception:traces_text.html.twig", 15)->display(array("exception" => $context["e"]));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</pre>
    </div>
</div>
";
        
<<<<<<< HEAD:var/cache/dev/twig/6a/6ab415d5bf9aafcccb98cd40ed38b4e678051034870814d0c42bc6946b40f758.php
        $__internal_55f81a3d2ca44879cb527dcfe81652165376f7c054e200e30c62c9c36558d456->leave($__internal_55f81a3d2ca44879cb527dcfe81652165376f7c054e200e30c62c9c36558d456_prof);
=======
        $__internal_dce7fecf2d2bf6d03f1aaab71ba758b7aca8d6be5836b377c1e7366fb466f18a->leave($__internal_dce7fecf2d2bf6d03f1aaab71ba758b7aca8d6be5836b377c1e7366fb466f18a_prof);
>>>>>>> origin/Sladu:var/cache/dev/twig/ac/ac98d9e40b97ca2cb3fd94a726f85f0a4d675560ca6e3967d4d91cbcad908160.php

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  54 => 15,  45 => 14,  41 => 13,  36 => 10,  29 => 5,  27 => 4,  22 => 1,);
    }
}
/* <div class="block">*/
/*     <h2>*/
/*         Stack Trace (Plain Text)&nbsp;*/
/*         {% spaceless %}*/
/*         <a href="#" onclick="toggle('traces-text'); switchIcons('icon-traces-text-open', 'icon-traces-text-close'); return false;">*/
/*             <img class="toggle" id="icon-traces-text-close" alt="-" src="data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=" style="display: none" />*/
/*             <img class="toggle" id="icon-traces-text-open" alt="+" src="data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7" style="display: inline" />*/
/*         </a>*/
/*         {% endspaceless %}*/
/*     </h2>*/
/* */
/*     <div id="traces-text" class="trace" style="display: none;">*/
/* <pre>{% for i, e in exception.toarray %}*/
/* [{{ i + 1 }}] {{ e.class }}: {{ e.message }}*/
/* {% include '@Twig/Exception/traces.txt.twig' with { 'exception': e } only %}*/
/* {% endfor %}</pre>*/
/*     </div>*/
/* </div>*/
/* */