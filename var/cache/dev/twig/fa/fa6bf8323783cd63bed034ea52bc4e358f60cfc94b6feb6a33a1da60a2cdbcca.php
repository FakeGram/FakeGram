<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_15f8200fcb0ea63a7bd9b688e1f48c7a5191e54ec6eff273141d4d535744b248 extends Twig_Template
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
        $__internal_1f3ab209175612b69a392df3ed913b5ab601825eb3257d6eb34b855d985396b6 = $this->env->getExtension("native_profiler");
        $__internal_1f3ab209175612b69a392df3ed913b5ab601825eb3257d6eb34b855d985396b6->enter($__internal_1f3ab209175612b69a392df3ed913b5ab601825eb3257d6eb34b855d985396b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1f3ab209175612b69a392df3ed913b5ab601825eb3257d6eb34b855d985396b6->leave($__internal_1f3ab209175612b69a392df3ed913b5ab601825eb3257d6eb34b855d985396b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
