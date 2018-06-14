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
        $__internal_f0e0aab8b4a5b0816b743ba2bf3476a3756ad66bfcc0f4c4e1ee0dc13a36bc9c = $this->env->getExtension("native_profiler");
        $__internal_f0e0aab8b4a5b0816b743ba2bf3476a3756ad66bfcc0f4c4e1ee0dc13a36bc9c->enter($__internal_f0e0aab8b4a5b0816b743ba2bf3476a3756ad66bfcc0f4c4e1ee0dc13a36bc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f0e0aab8b4a5b0816b743ba2bf3476a3756ad66bfcc0f4c4e1ee0dc13a36bc9c->leave($__internal_f0e0aab8b4a5b0816b743ba2bf3476a3756ad66bfcc0f4c4e1ee0dc13a36bc9c_prof);

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
