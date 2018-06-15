<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_422ea238eff1e8151ba64f9ea6c60aa429dbfeba6faad881a5d36532e9b38c6d extends Twig_Template
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
        $__internal_f4849f4eb2421cb46cbf1171e7bf08de673b282789636d7d7ef2ed614b113133 = $this->env->getExtension("native_profiler");
        $__internal_f4849f4eb2421cb46cbf1171e7bf08de673b282789636d7d7ef2ed614b113133->enter($__internal_f4849f4eb2421cb46cbf1171e7bf08de673b282789636d7d7ef2ed614b113133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f4849f4eb2421cb46cbf1171e7bf08de673b282789636d7d7ef2ed614b113133->leave($__internal_f4849f4eb2421cb46cbf1171e7bf08de673b282789636d7d7ef2ed614b113133_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
