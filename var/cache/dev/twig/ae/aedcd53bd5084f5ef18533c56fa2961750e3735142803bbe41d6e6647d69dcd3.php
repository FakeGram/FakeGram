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
        $__internal_cf002e66c9338dd616ebac8128c7a3f239ddfab055152fb7f57f024559c63aad = $this->env->getExtension("native_profiler");
        $__internal_cf002e66c9338dd616ebac8128c7a3f239ddfab055152fb7f57f024559c63aad->enter($__internal_cf002e66c9338dd616ebac8128c7a3f239ddfab055152fb7f57f024559c63aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf002e66c9338dd616ebac8128c7a3f239ddfab055152fb7f57f024559c63aad->leave($__internal_cf002e66c9338dd616ebac8128c7a3f239ddfab055152fb7f57f024559c63aad_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e5faae390b2936d628eb27989462a3880b603a22bec244f34202da31c7c5360b = $this->env->getExtension("native_profiler");
        $__internal_e5faae390b2936d628eb27989462a3880b603a22bec244f34202da31c7c5360b->enter($__internal_e5faae390b2936d628eb27989462a3880b603a22bec244f34202da31c7c5360b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e5faae390b2936d628eb27989462a3880b603a22bec244f34202da31c7c5360b->leave($__internal_e5faae390b2936d628eb27989462a3880b603a22bec244f34202da31c7c5360b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1bf3fd28f04a88491826a4f92cb4045d2de69ef8207a767a2e134ee53c6865a8 = $this->env->getExtension("native_profiler");
        $__internal_1bf3fd28f04a88491826a4f92cb4045d2de69ef8207a767a2e134ee53c6865a8->enter($__internal_1bf3fd28f04a88491826a4f92cb4045d2de69ef8207a767a2e134ee53c6865a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1bf3fd28f04a88491826a4f92cb4045d2de69ef8207a767a2e134ee53c6865a8->leave($__internal_1bf3fd28f04a88491826a4f92cb4045d2de69ef8207a767a2e134ee53c6865a8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_350b39cccae7b208e92d5b789266b086e915ef063f0158a0b61efdc6e36a9db3 = $this->env->getExtension("native_profiler");
        $__internal_350b39cccae7b208e92d5b789266b086e915ef063f0158a0b61efdc6e36a9db3->enter($__internal_350b39cccae7b208e92d5b789266b086e915ef063f0158a0b61efdc6e36a9db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_350b39cccae7b208e92d5b789266b086e915ef063f0158a0b61efdc6e36a9db3->leave($__internal_350b39cccae7b208e92d5b789266b086e915ef063f0158a0b61efdc6e36a9db3_prof);

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
