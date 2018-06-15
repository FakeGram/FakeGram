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
        $__internal_de2131b34d774fab4c220b14fe419e58a3c0fb547cfc2790f391730020d2d8dd = $this->env->getExtension("native_profiler");
        $__internal_de2131b34d774fab4c220b14fe419e58a3c0fb547cfc2790f391730020d2d8dd->enter($__internal_de2131b34d774fab4c220b14fe419e58a3c0fb547cfc2790f391730020d2d8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_de2131b34d774fab4c220b14fe419e58a3c0fb547cfc2790f391730020d2d8dd->leave($__internal_de2131b34d774fab4c220b14fe419e58a3c0fb547cfc2790f391730020d2d8dd_prof);

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
