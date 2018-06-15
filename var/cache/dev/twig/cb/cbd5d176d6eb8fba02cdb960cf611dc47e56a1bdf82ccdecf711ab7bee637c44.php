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
        $__internal_cae207a17878678115a3a584cf317569cb5defa38a4363fdbfb0b75e59163049 = $this->env->getExtension("native_profiler");
        $__internal_cae207a17878678115a3a584cf317569cb5defa38a4363fdbfb0b75e59163049->enter($__internal_cae207a17878678115a3a584cf317569cb5defa38a4363fdbfb0b75e59163049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_cae207a17878678115a3a584cf317569cb5defa38a4363fdbfb0b75e59163049->leave($__internal_cae207a17878678115a3a584cf317569cb5defa38a4363fdbfb0b75e59163049_prof);

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
