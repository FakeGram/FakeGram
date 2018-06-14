<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_8b742a1636d84f9aa48a3d194a4969c6b6eb36b04897522bf852b3387ca8e842 extends Twig_Template
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
        $__internal_fdffd4dda282d7da783a147479817f6494e7724b885acb662d29ef1491d64bd0 = $this->env->getExtension("native_profiler");
        $__internal_fdffd4dda282d7da783a147479817f6494e7724b885acb662d29ef1491d64bd0->enter($__internal_fdffd4dda282d7da783a147479817f6494e7724b885acb662d29ef1491d64bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_fdffd4dda282d7da783a147479817f6494e7724b885acb662d29ef1491d64bd0->leave($__internal_fdffd4dda282d7da783a147479817f6494e7724b885acb662d29ef1491d64bd0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
