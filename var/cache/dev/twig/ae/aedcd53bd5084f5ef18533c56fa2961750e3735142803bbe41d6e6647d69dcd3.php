<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9e954f5018cce46763a99538a97239841cac1ed48f5975c67972659922535894 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea3a6d1fedc95434ef34e8cf1629bc499ad812831a0f8856146bb9ce00c63a0d = $this->env->getExtension("native_profiler");
        $__internal_ea3a6d1fedc95434ef34e8cf1629bc499ad812831a0f8856146bb9ce00c63a0d->enter($__internal_ea3a6d1fedc95434ef34e8cf1629bc499ad812831a0f8856146bb9ce00c63a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea3a6d1fedc95434ef34e8cf1629bc499ad812831a0f8856146bb9ce00c63a0d->leave($__internal_ea3a6d1fedc95434ef34e8cf1629bc499ad812831a0f8856146bb9ce00c63a0d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7a69adbf62e11f01a9304fd550ed76c79c4bac86165de1428879731fed98d3c4 = $this->env->getExtension("native_profiler");
        $__internal_7a69adbf62e11f01a9304fd550ed76c79c4bac86165de1428879731fed98d3c4->enter($__internal_7a69adbf62e11f01a9304fd550ed76c79c4bac86165de1428879731fed98d3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7a69adbf62e11f01a9304fd550ed76c79c4bac86165de1428879731fed98d3c4->leave($__internal_7a69adbf62e11f01a9304fd550ed76c79c4bac86165de1428879731fed98d3c4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_220bcc724695143f55b34780c4612773402059eaa84b0f62000088b8fd67665a = $this->env->getExtension("native_profiler");
        $__internal_220bcc724695143f55b34780c4612773402059eaa84b0f62000088b8fd67665a->enter($__internal_220bcc724695143f55b34780c4612773402059eaa84b0f62000088b8fd67665a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_220bcc724695143f55b34780c4612773402059eaa84b0f62000088b8fd67665a->leave($__internal_220bcc724695143f55b34780c4612773402059eaa84b0f62000088b8fd67665a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_07f4959e41bed44be9cadc12fbf4d2c321e9c2c30bf01bfd97d4caaa99c47959 = $this->env->getExtension("native_profiler");
        $__internal_07f4959e41bed44be9cadc12fbf4d2c321e9c2c30bf01bfd97d4caaa99c47959->enter($__internal_07f4959e41bed44be9cadc12fbf4d2c321e9c2c30bf01bfd97d4caaa99c47959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_07f4959e41bed44be9cadc12fbf4d2c321e9c2c30bf01bfd97d4caaa99c47959->leave($__internal_07f4959e41bed44be9cadc12fbf4d2c321e9c2c30bf01bfd97d4caaa99c47959_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
