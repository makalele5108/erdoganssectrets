<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_fb40f1a64ef602f5c3821ff4201e417d69a16f12e3e36ccbb8208f5b0579c12b extends Twig_Template
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
        $__internal_cb8ba8faa82096aa0933a25fb936739cec44b3e1138fdee459ca0f079ad18853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb8ba8faa82096aa0933a25fb936739cec44b3e1138fdee459ca0f079ad18853->enter($__internal_cb8ba8faa82096aa0933a25fb936739cec44b3e1138fdee459ca0f079ad18853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_f024daf93235169398ba6d7563e1c5547725b96252ad6af8bc33d0941c0ce4a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f024daf93235169398ba6d7563e1c5547725b96252ad6af8bc33d0941c0ce4a4->enter($__internal_f024daf93235169398ba6d7563e1c5547725b96252ad6af8bc33d0941c0ce4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cb8ba8faa82096aa0933a25fb936739cec44b3e1138fdee459ca0f079ad18853->leave($__internal_cb8ba8faa82096aa0933a25fb936739cec44b3e1138fdee459ca0f079ad18853_prof);

        
        $__internal_f024daf93235169398ba6d7563e1c5547725b96252ad6af8bc33d0941c0ce4a4->leave($__internal_f024daf93235169398ba6d7563e1c5547725b96252ad6af8bc33d0941c0ce4a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
