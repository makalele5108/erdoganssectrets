<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f6fbbd6594a28faa24cc2c4548c5ea408f045a6b98e66ce4746882ad2d4e4740 extends Twig_Template
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
        $__internal_3a1941b66b0e78ea2822ebb8f1c36d17ada76166b0219569b475b9296b06b295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a1941b66b0e78ea2822ebb8f1c36d17ada76166b0219569b475b9296b06b295->enter($__internal_3a1941b66b0e78ea2822ebb8f1c36d17ada76166b0219569b475b9296b06b295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_2809f7b7d6fd436eb57cc2553481426d6acbf07f5ff3f1ac0fbbfb78d0c05d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2809f7b7d6fd436eb57cc2553481426d6acbf07f5ff3f1ac0fbbfb78d0c05d18->enter($__internal_2809f7b7d6fd436eb57cc2553481426d6acbf07f5ff3f1ac0fbbfb78d0c05d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_3a1941b66b0e78ea2822ebb8f1c36d17ada76166b0219569b475b9296b06b295->leave($__internal_3a1941b66b0e78ea2822ebb8f1c36d17ada76166b0219569b475b9296b06b295_prof);

        
        $__internal_2809f7b7d6fd436eb57cc2553481426d6acbf07f5ff3f1ac0fbbfb78d0c05d18->leave($__internal_2809f7b7d6fd436eb57cc2553481426d6acbf07f5ff3f1ac0fbbfb78d0c05d18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
