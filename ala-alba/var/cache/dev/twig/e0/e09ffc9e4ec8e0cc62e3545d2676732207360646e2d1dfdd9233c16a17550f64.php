<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_e5d146be41102bb0278edae755a59752355d13b3fa8ecb5acec6b93ebfb9da19 extends Twig_Template
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
        $__internal_0607b043216fb9cc9ed30b520a97f38dd02121671a3824e2fb5bcef25418e0f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0607b043216fb9cc9ed30b520a97f38dd02121671a3824e2fb5bcef25418e0f3->enter($__internal_0607b043216fb9cc9ed30b520a97f38dd02121671a3824e2fb5bcef25418e0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_6b7575eea3ef02261e55690cb4b0a7f7e1be56d0db9451a0de565201d8fe3ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7575eea3ef02261e55690cb4b0a7f7e1be56d0db9451a0de565201d8fe3ea1->enter($__internal_6b7575eea3ef02261e55690cb4b0a7f7e1be56d0db9451a0de565201d8fe3ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_0607b043216fb9cc9ed30b520a97f38dd02121671a3824e2fb5bcef25418e0f3->leave($__internal_0607b043216fb9cc9ed30b520a97f38dd02121671a3824e2fb5bcef25418e0f3_prof);

        
        $__internal_6b7575eea3ef02261e55690cb4b0a7f7e1be56d0db9451a0de565201d8fe3ea1->leave($__internal_6b7575eea3ef02261e55690cb4b0a7f7e1be56d0db9451a0de565201d8fe3ea1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
