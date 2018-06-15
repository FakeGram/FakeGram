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
        $__internal_c4d35afd5a58a19559bbb1d448b351b1a3e543b1839cfccb4286016c2649d6ab = $this->env->getExtension("native_profiler");
        $__internal_c4d35afd5a58a19559bbb1d448b351b1a3e543b1839cfccb4286016c2649d6ab->enter($__internal_c4d35afd5a58a19559bbb1d448b351b1a3e543b1839cfccb4286016c2649d6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c4d35afd5a58a19559bbb1d448b351b1a3e543b1839cfccb4286016c2649d6ab->leave($__internal_c4d35afd5a58a19559bbb1d448b351b1a3e543b1839cfccb4286016c2649d6ab_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b542f3b2e2d5d191086b2afda0778487082533a36e6dc5a95027961aee87d1c4 = $this->env->getExtension("native_profiler");
        $__internal_b542f3b2e2d5d191086b2afda0778487082533a36e6dc5a95027961aee87d1c4->enter($__internal_b542f3b2e2d5d191086b2afda0778487082533a36e6dc5a95027961aee87d1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b542f3b2e2d5d191086b2afda0778487082533a36e6dc5a95027961aee87d1c4->leave($__internal_b542f3b2e2d5d191086b2afda0778487082533a36e6dc5a95027961aee87d1c4_prof);

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
