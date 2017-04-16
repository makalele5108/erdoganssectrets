<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_181dc42bc29dcb63f51c3df810aa54ca81d7abfb98e0d5e6f86815399d09f3d8 extends Twig_Template
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
        $__internal_6fd6e89b492a4abd66a7f16e3e63a26f878b6d60f3ebbb1e98f5292bd1ad7834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd6e89b492a4abd66a7f16e3e63a26f878b6d60f3ebbb1e98f5292bd1ad7834->enter($__internal_6fd6e89b492a4abd66a7f16e3e63a26f878b6d60f3ebbb1e98f5292bd1ad7834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_00b77f8f28a5374ea560a7beeca5d9eb7591e91831e9be05bd85871e731d7f94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00b77f8f28a5374ea560a7beeca5d9eb7591e91831e9be05bd85871e731d7f94->enter($__internal_00b77f8f28a5374ea560a7beeca5d9eb7591e91831e9be05bd85871e731d7f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6fd6e89b492a4abd66a7f16e3e63a26f878b6d60f3ebbb1e98f5292bd1ad7834->leave($__internal_6fd6e89b492a4abd66a7f16e3e63a26f878b6d60f3ebbb1e98f5292bd1ad7834_prof);

        
        $__internal_00b77f8f28a5374ea560a7beeca5d9eb7591e91831e9be05bd85871e731d7f94->leave($__internal_00b77f8f28a5374ea560a7beeca5d9eb7591e91831e9be05bd85871e731d7f94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
