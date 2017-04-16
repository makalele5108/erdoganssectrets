<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_7a59177340ef57fe19a38c7bdd81f45e0a0df7fbda3ed148a7b4a90a72de6bc8 extends Twig_Template
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
        $__internal_cc97ca006e7f26f360153981445165c9c2ccb84ffe7ab48272ccd294b145652e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc97ca006e7f26f360153981445165c9c2ccb84ffe7ab48272ccd294b145652e->enter($__internal_cc97ca006e7f26f360153981445165c9c2ccb84ffe7ab48272ccd294b145652e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_4f3b045abd7aa366dfd35f5f8e88273ae74ed4b6b317e244cb49c9a77539ddc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f3b045abd7aa366dfd35f5f8e88273ae74ed4b6b317e244cb49c9a77539ddc8->enter($__internal_4f3b045abd7aa366dfd35f5f8e88273ae74ed4b6b317e244cb49c9a77539ddc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_cc97ca006e7f26f360153981445165c9c2ccb84ffe7ab48272ccd294b145652e->leave($__internal_cc97ca006e7f26f360153981445165c9c2ccb84ffe7ab48272ccd294b145652e_prof);

        
        $__internal_4f3b045abd7aa366dfd35f5f8e88273ae74ed4b6b317e244cb49c9a77539ddc8->leave($__internal_4f3b045abd7aa366dfd35f5f8e88273ae74ed4b6b317e244cb49c9a77539ddc8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
