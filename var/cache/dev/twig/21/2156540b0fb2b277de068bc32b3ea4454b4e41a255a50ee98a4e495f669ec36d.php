<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_bbaf00fe6d4a0172798061c21dad861f191824fa619fe3632dddfae153422bdf extends Twig_Template
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
        $__internal_894268d89c8d08906011af6bb77bd26d382c42867cd494baf820b6fe35b42f28 = $this->env->getExtension("native_profiler");
        $__internal_894268d89c8d08906011af6bb77bd26d382c42867cd494baf820b6fe35b42f28->enter($__internal_894268d89c8d08906011af6bb77bd26d382c42867cd494baf820b6fe35b42f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_894268d89c8d08906011af6bb77bd26d382c42867cd494baf820b6fe35b42f28->leave($__internal_894268d89c8d08906011af6bb77bd26d382c42867cd494baf820b6fe35b42f28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
