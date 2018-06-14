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
        $__internal_2861d12bb4bc094e51b8c960d4a1ad2922140ae57751d15f2950267aef1fb847 = $this->env->getExtension("native_profiler");
        $__internal_2861d12bb4bc094e51b8c960d4a1ad2922140ae57751d15f2950267aef1fb847->enter($__internal_2861d12bb4bc094e51b8c960d4a1ad2922140ae57751d15f2950267aef1fb847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2861d12bb4bc094e51b8c960d4a1ad2922140ae57751d15f2950267aef1fb847->leave($__internal_2861d12bb4bc094e51b8c960d4a1ad2922140ae57751d15f2950267aef1fb847_prof);

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
