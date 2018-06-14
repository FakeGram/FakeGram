<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c582e3c751dbdc69b34bdc240966f600de0b7297c9e648b7885cac9c8e10d8b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1cf0953f4cea0a7d2834e35a80c15f54f74fe20cd698a348bfb2da9448ca0c57 = $this->env->getExtension("native_profiler");
        $__internal_1cf0953f4cea0a7d2834e35a80c15f54f74fe20cd698a348bfb2da9448ca0c57->enter($__internal_1cf0953f4cea0a7d2834e35a80c15f54f74fe20cd698a348bfb2da9448ca0c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1cf0953f4cea0a7d2834e35a80c15f54f74fe20cd698a348bfb2da9448ca0c57->leave($__internal_1cf0953f4cea0a7d2834e35a80c15f54f74fe20cd698a348bfb2da9448ca0c57_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7acd0fc5f493632a0388acc08fdd23585ef60e2f5dc81fa122128e62d9d56f0f = $this->env->getExtension("native_profiler");
        $__internal_7acd0fc5f493632a0388acc08fdd23585ef60e2f5dc81fa122128e62d9d56f0f->enter($__internal_7acd0fc5f493632a0388acc08fdd23585ef60e2f5dc81fa122128e62d9d56f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7acd0fc5f493632a0388acc08fdd23585ef60e2f5dc81fa122128e62d9d56f0f->leave($__internal_7acd0fc5f493632a0388acc08fdd23585ef60e2f5dc81fa122128e62d9d56f0f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
