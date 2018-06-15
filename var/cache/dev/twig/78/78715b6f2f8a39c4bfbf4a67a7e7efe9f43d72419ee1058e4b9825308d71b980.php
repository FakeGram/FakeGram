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
        $__internal_518b2e9805998c324aa94a531c3ae443cfb28d9d5a51d1573a0ca33a0a31da06 = $this->env->getExtension("native_profiler");
        $__internal_518b2e9805998c324aa94a531c3ae443cfb28d9d5a51d1573a0ca33a0a31da06->enter($__internal_518b2e9805998c324aa94a531c3ae443cfb28d9d5a51d1573a0ca33a0a31da06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_518b2e9805998c324aa94a531c3ae443cfb28d9d5a51d1573a0ca33a0a31da06->leave($__internal_518b2e9805998c324aa94a531c3ae443cfb28d9d5a51d1573a0ca33a0a31da06_prof);

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
