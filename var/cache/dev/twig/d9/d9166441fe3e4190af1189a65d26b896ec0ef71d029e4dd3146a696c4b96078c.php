<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ba195a74120d576d7289881d8f4314cba6e844c2a8e72cb3bcee33d04d6f584e extends Twig_Template
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
        $__internal_b6383db48488f2fa82f526404fa7304a1a77ceaacbe458476b4640be17124dd4 = $this->env->getExtension("native_profiler");
        $__internal_b6383db48488f2fa82f526404fa7304a1a77ceaacbe458476b4640be17124dd4->enter($__internal_b6383db48488f2fa82f526404fa7304a1a77ceaacbe458476b4640be17124dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b6383db48488f2fa82f526404fa7304a1a77ceaacbe458476b4640be17124dd4->leave($__internal_b6383db48488f2fa82f526404fa7304a1a77ceaacbe458476b4640be17124dd4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
