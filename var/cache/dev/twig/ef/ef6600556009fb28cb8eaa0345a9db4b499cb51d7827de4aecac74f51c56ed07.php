<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_883b0d234a15a93dccaf8015e52998373ec00062b561d7d840733cdae9ba2f9b extends Twig_Template
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
        $__internal_5ae59ecb31c9a54a2e29ac5d7d23e51f3eb859b35e8f442d91de8c4c4bbc8e19 = $this->env->getExtension("native_profiler");
        $__internal_5ae59ecb31c9a54a2e29ac5d7d23e51f3eb859b35e8f442d91de8c4c4bbc8e19->enter($__internal_5ae59ecb31c9a54a2e29ac5d7d23e51f3eb859b35e8f442d91de8c4c4bbc8e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5ae59ecb31c9a54a2e29ac5d7d23e51f3eb859b35e8f442d91de8c4c4bbc8e19->leave($__internal_5ae59ecb31c9a54a2e29ac5d7d23e51f3eb859b35e8f442d91de8c4c4bbc8e19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
