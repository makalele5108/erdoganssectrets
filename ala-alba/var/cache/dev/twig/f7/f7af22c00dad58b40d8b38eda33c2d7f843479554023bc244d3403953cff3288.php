<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_ba75305330659102e3e74284df128ea8d8fd1acc3eb2d5d5f7e17056efec82c7 extends Twig_Template
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
        $__internal_dcbc64ae91976969428c36c799425b3f050135a2f552866ca5eb39d46571e05c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcbc64ae91976969428c36c799425b3f050135a2f552866ca5eb39d46571e05c->enter($__internal_dcbc64ae91976969428c36c799425b3f050135a2f552866ca5eb39d46571e05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_1953bb03c155fa484ae9c278b55f70885da0e40cc96ca93286474566baff7ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1953bb03c155fa484ae9c278b55f70885da0e40cc96ca93286474566baff7ada->enter($__internal_1953bb03c155fa484ae9c278b55f70885da0e40cc96ca93286474566baff7ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_dcbc64ae91976969428c36c799425b3f050135a2f552866ca5eb39d46571e05c->leave($__internal_dcbc64ae91976969428c36c799425b3f050135a2f552866ca5eb39d46571e05c_prof);

        
        $__internal_1953bb03c155fa484ae9c278b55f70885da0e40cc96ca93286474566baff7ada->leave($__internal_1953bb03c155fa484ae9c278b55f70885da0e40cc96ca93286474566baff7ada_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
