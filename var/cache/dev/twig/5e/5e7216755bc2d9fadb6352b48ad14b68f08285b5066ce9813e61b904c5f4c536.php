<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0530ed7defc38b3f8444e8146c299640ae3ba83224abb3de6d4b45fa977b4eee extends Twig_Template
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
        $__internal_8321b5586c1cd4fbcd9e7a880655b061c222269ad58c8c0846ff37f6fd6a5b11 = $this->env->getExtension("native_profiler");
        $__internal_8321b5586c1cd4fbcd9e7a880655b061c222269ad58c8c0846ff37f6fd6a5b11->enter($__internal_8321b5586c1cd4fbcd9e7a880655b061c222269ad58c8c0846ff37f6fd6a5b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8321b5586c1cd4fbcd9e7a880655b061c222269ad58c8c0846ff37f6fd6a5b11->leave($__internal_8321b5586c1cd4fbcd9e7a880655b061c222269ad58c8c0846ff37f6fd6a5b11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
