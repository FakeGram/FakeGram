<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_8067edee6444ee98d51bdf0a10e01492d4d3e733b19c5c1e670f43432c32d0fb extends Twig_Template
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
        $__internal_312fc9f7cf964ea6b776b00d14a4e4d3b689816dbfc512fe8088ae797244b92c = $this->env->getExtension("native_profiler");
        $__internal_312fc9f7cf964ea6b776b00d14a4e4d3b689816dbfc512fe8088ae797244b92c->enter($__internal_312fc9f7cf964ea6b776b00d14a4e4d3b689816dbfc512fe8088ae797244b92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_312fc9f7cf964ea6b776b00d14a4e4d3b689816dbfc512fe8088ae797244b92c->leave($__internal_312fc9f7cf964ea6b776b00d14a4e4d3b689816dbfc512fe8088ae797244b92c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
