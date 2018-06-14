<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_30dbe65ce720dc1506a1729d6aa0e02a46b39f5851567e52b81441802d4df459 extends Twig_Template
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
        $__internal_8ef20d6fe739c9abc96fd3e3e2a2d4fa161a3e001708cdba487cd882b3ca2337 = $this->env->getExtension("native_profiler");
        $__internal_8ef20d6fe739c9abc96fd3e3e2a2d4fa161a3e001708cdba487cd882b3ca2337->enter($__internal_8ef20d6fe739c9abc96fd3e3e2a2d4fa161a3e001708cdba487cd882b3ca2337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_8ef20d6fe739c9abc96fd3e3e2a2d4fa161a3e001708cdba487cd882b3ca2337->leave($__internal_8ef20d6fe739c9abc96fd3e3e2a2d4fa161a3e001708cdba487cd882b3ca2337_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
