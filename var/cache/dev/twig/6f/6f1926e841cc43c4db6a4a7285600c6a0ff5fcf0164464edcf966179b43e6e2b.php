<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b52d1cedd2b07db82ad881015a74b344fdb9ee9c4dac7446d5f46bca509491c0 extends Twig_Template
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
        $__internal_faaffbc369a81826a43e670c1d158bec41a8aa43efb9300f3a096f75da9eb552 = $this->env->getExtension("native_profiler");
        $__internal_faaffbc369a81826a43e670c1d158bec41a8aa43efb9300f3a096f75da9eb552->enter($__internal_faaffbc369a81826a43e670c1d158bec41a8aa43efb9300f3a096f75da9eb552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_faaffbc369a81826a43e670c1d158bec41a8aa43efb9300f3a096f75da9eb552->leave($__internal_faaffbc369a81826a43e670c1d158bec41a8aa43efb9300f3a096f75da9eb552_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
