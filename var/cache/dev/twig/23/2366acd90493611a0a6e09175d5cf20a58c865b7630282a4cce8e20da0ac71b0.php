<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_78372e0d6f13b6dd7ebac088b2d5912f564ca40318c1d6b357172d229bf603e9 extends Twig_Template
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
        $__internal_ce7249f1a174f58a7e517e66cf303b2fcf39d0d5e01b16171a7783f7a5a4578c = $this->env->getExtension("native_profiler");
        $__internal_ce7249f1a174f58a7e517e66cf303b2fcf39d0d5e01b16171a7783f7a5a4578c->enter($__internal_ce7249f1a174f58a7e517e66cf303b2fcf39d0d5e01b16171a7783f7a5a4578c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ce7249f1a174f58a7e517e66cf303b2fcf39d0d5e01b16171a7783f7a5a4578c->leave($__internal_ce7249f1a174f58a7e517e66cf303b2fcf39d0d5e01b16171a7783f7a5a4578c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
