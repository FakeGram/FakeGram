<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e19270f94b2b8af180d944522605e41daef18a2150e949dc80a7082cea162f29 extends Twig_Template
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
        $__internal_c20f81b778d1d9d272efb72a5096daba1558c341118e05d5a4474d9728d47bce = $this->env->getExtension("native_profiler");
        $__internal_c20f81b778d1d9d272efb72a5096daba1558c341118e05d5a4474d9728d47bce->enter($__internal_c20f81b778d1d9d272efb72a5096daba1558c341118e05d5a4474d9728d47bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c20f81b778d1d9d272efb72a5096daba1558c341118e05d5a4474d9728d47bce->leave($__internal_c20f81b778d1d9d272efb72a5096daba1558c341118e05d5a4474d9728d47bce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_005a7db61f40902d710770e785b918b3a29358ef27bd25e06ff10d08cf7aae5d = $this->env->getExtension("native_profiler");
        $__internal_005a7db61f40902d710770e785b918b3a29358ef27bd25e06ff10d08cf7aae5d->enter($__internal_005a7db61f40902d710770e785b918b3a29358ef27bd25e06ff10d08cf7aae5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_005a7db61f40902d710770e785b918b3a29358ef27bd25e06ff10d08cf7aae5d->leave($__internal_005a7db61f40902d710770e785b918b3a29358ef27bd25e06ff10d08cf7aae5d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9243fd7cec9f3d832554e3a7738fa7fb62fdd5131e146dc45ad32619100024fc = $this->env->getExtension("native_profiler");
        $__internal_9243fd7cec9f3d832554e3a7738fa7fb62fdd5131e146dc45ad32619100024fc->enter($__internal_9243fd7cec9f3d832554e3a7738fa7fb62fdd5131e146dc45ad32619100024fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9243fd7cec9f3d832554e3a7738fa7fb62fdd5131e146dc45ad32619100024fc->leave($__internal_9243fd7cec9f3d832554e3a7738fa7fb62fdd5131e146dc45ad32619100024fc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ed17aa01f1e9d8e8d426d7e25a4366df2c45bdbe59527bc2b176e7abd3385d9 = $this->env->getExtension("native_profiler");
        $__internal_4ed17aa01f1e9d8e8d426d7e25a4366df2c45bdbe59527bc2b176e7abd3385d9->enter($__internal_4ed17aa01f1e9d8e8d426d7e25a4366df2c45bdbe59527bc2b176e7abd3385d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4ed17aa01f1e9d8e8d426d7e25a4366df2c45bdbe59527bc2b176e7abd3385d9->leave($__internal_4ed17aa01f1e9d8e8d426d7e25a4366df2c45bdbe59527bc2b176e7abd3385d9_prof);

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
