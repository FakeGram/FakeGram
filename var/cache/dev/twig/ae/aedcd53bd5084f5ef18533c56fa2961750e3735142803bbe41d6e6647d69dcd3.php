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
        $__internal_0bc4f9d9c763601347aded0f6a003695e46fd2489fe30fe86a702b8ac3de15ae = $this->env->getExtension("native_profiler");
        $__internal_0bc4f9d9c763601347aded0f6a003695e46fd2489fe30fe86a702b8ac3de15ae->enter($__internal_0bc4f9d9c763601347aded0f6a003695e46fd2489fe30fe86a702b8ac3de15ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bc4f9d9c763601347aded0f6a003695e46fd2489fe30fe86a702b8ac3de15ae->leave($__internal_0bc4f9d9c763601347aded0f6a003695e46fd2489fe30fe86a702b8ac3de15ae_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ea4d0bcf12f1df8aedcb389f25b491e457588f8243ad61066c55daea101e6b04 = $this->env->getExtension("native_profiler");
        $__internal_ea4d0bcf12f1df8aedcb389f25b491e457588f8243ad61066c55daea101e6b04->enter($__internal_ea4d0bcf12f1df8aedcb389f25b491e457588f8243ad61066c55daea101e6b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ea4d0bcf12f1df8aedcb389f25b491e457588f8243ad61066c55daea101e6b04->leave($__internal_ea4d0bcf12f1df8aedcb389f25b491e457588f8243ad61066c55daea101e6b04_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ac646ead89757f48ba56435a19ca71d383963f13980e4812945a91685a1508e0 = $this->env->getExtension("native_profiler");
        $__internal_ac646ead89757f48ba56435a19ca71d383963f13980e4812945a91685a1508e0->enter($__internal_ac646ead89757f48ba56435a19ca71d383963f13980e4812945a91685a1508e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ac646ead89757f48ba56435a19ca71d383963f13980e4812945a91685a1508e0->leave($__internal_ac646ead89757f48ba56435a19ca71d383963f13980e4812945a91685a1508e0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_29cf8eb86efedf1074a4cd95167675f304728d38a2f586a4c749b9d815c1d33f = $this->env->getExtension("native_profiler");
        $__internal_29cf8eb86efedf1074a4cd95167675f304728d38a2f586a4c749b9d815c1d33f->enter($__internal_29cf8eb86efedf1074a4cd95167675f304728d38a2f586a4c749b9d815c1d33f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_29cf8eb86efedf1074a4cd95167675f304728d38a2f586a4c749b9d815c1d33f->leave($__internal_29cf8eb86efedf1074a4cd95167675f304728d38a2f586a4c749b9d815c1d33f_prof);

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
