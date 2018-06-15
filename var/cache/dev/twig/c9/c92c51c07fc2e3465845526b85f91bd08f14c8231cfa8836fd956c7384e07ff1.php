<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_c26e3f9fb73dce9e5e7e206cc2244ec473c5f4f58351aff19aef36c287dbb41b extends Twig_Template
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
        $__internal_e29ff6129bfc1aede6eca9f4def3c379bf8338020ea2d82b9541bde3f60caee9 = $this->env->getExtension("native_profiler");
        $__internal_e29ff6129bfc1aede6eca9f4def3c379bf8338020ea2d82b9541bde3f60caee9->enter($__internal_e29ff6129bfc1aede6eca9f4def3c379bf8338020ea2d82b9541bde3f60caee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e29ff6129bfc1aede6eca9f4def3c379bf8338020ea2d82b9541bde3f60caee9->leave($__internal_e29ff6129bfc1aede6eca9f4def3c379bf8338020ea2d82b9541bde3f60caee9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
