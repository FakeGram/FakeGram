<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_0dc870784228818e2e863fc6c2044b4fc5e428ce9775aa67fee4930c6a2a2e7d extends Twig_Template
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
        $__internal_b1eed8b47db95c53a0d1a40c050c8b5a7395dd1c4f029fb233468b7e9aaa121d = $this->env->getExtension("native_profiler");
        $__internal_b1eed8b47db95c53a0d1a40c050c8b5a7395dd1c4f029fb233468b7e9aaa121d->enter($__internal_b1eed8b47db95c53a0d1a40c050c8b5a7395dd1c4f029fb233468b7e9aaa121d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b1eed8b47db95c53a0d1a40c050c8b5a7395dd1c4f029fb233468b7e9aaa121d->leave($__internal_b1eed8b47db95c53a0d1a40c050c8b5a7395dd1c4f029fb233468b7e9aaa121d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
