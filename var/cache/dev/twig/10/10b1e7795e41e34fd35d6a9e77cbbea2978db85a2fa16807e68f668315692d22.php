<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_62ff2d22d5032a5ac21df11ca994c9e481f2885e3c08d4c702e13fa0da6abc88 extends Twig_Template
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
        $__internal_428760dc62a347df0402cca618616b0c7ae2cbef9cbc5eb2ef214ad8ba98158b = $this->env->getExtension("native_profiler");
        $__internal_428760dc62a347df0402cca618616b0c7ae2cbef9cbc5eb2ef214ad8ba98158b->enter($__internal_428760dc62a347df0402cca618616b0c7ae2cbef9cbc5eb2ef214ad8ba98158b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_428760dc62a347df0402cca618616b0c7ae2cbef9cbc5eb2ef214ad8ba98158b->leave($__internal_428760dc62a347df0402cca618616b0c7ae2cbef9cbc5eb2ef214ad8ba98158b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_47649509c46bf42e7868073b688da002cb7eee5fdd4d8014fe47987ec653b756 = $this->env->getExtension("native_profiler");
        $__internal_47649509c46bf42e7868073b688da002cb7eee5fdd4d8014fe47987ec653b756->enter($__internal_47649509c46bf42e7868073b688da002cb7eee5fdd4d8014fe47987ec653b756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_47649509c46bf42e7868073b688da002cb7eee5fdd4d8014fe47987ec653b756->leave($__internal_47649509c46bf42e7868073b688da002cb7eee5fdd4d8014fe47987ec653b756_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_beaeeadcc22f06430c7e6ed576bba0bd3d5134c70a92102632a17e2cf01b149b = $this->env->getExtension("native_profiler");
        $__internal_beaeeadcc22f06430c7e6ed576bba0bd3d5134c70a92102632a17e2cf01b149b->enter($__internal_beaeeadcc22f06430c7e6ed576bba0bd3d5134c70a92102632a17e2cf01b149b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_beaeeadcc22f06430c7e6ed576bba0bd3d5134c70a92102632a17e2cf01b149b->leave($__internal_beaeeadcc22f06430c7e6ed576bba0bd3d5134c70a92102632a17e2cf01b149b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f5b2f6782cc248a8f089181438d68c8ad1b2d395aaddaac96d44082c06c7dd38 = $this->env->getExtension("native_profiler");
        $__internal_f5b2f6782cc248a8f089181438d68c8ad1b2d395aaddaac96d44082c06c7dd38->enter($__internal_f5b2f6782cc248a8f089181438d68c8ad1b2d395aaddaac96d44082c06c7dd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f5b2f6782cc248a8f089181438d68c8ad1b2d395aaddaac96d44082c06c7dd38->leave($__internal_f5b2f6782cc248a8f089181438d68c8ad1b2d395aaddaac96d44082c06c7dd38_prof);

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
