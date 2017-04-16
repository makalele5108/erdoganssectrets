<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_055c1291dcc046254fe01ba6a8695e8cb510bcc0b526bdb6f2dbb9b1686b455d extends Twig_Template
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
        $__internal_47d12000a100f5279f195fd37e1793429bbe325efdd7b24c1dbd2cdec341e2ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d12000a100f5279f195fd37e1793429bbe325efdd7b24c1dbd2cdec341e2ed->enter($__internal_47d12000a100f5279f195fd37e1793429bbe325efdd7b24c1dbd2cdec341e2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_f6ed3e27a1cedf4599f7664d07437436a660746709c58a4185c215bda98da096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ed3e27a1cedf4599f7664d07437436a660746709c58a4185c215bda98da096->enter($__internal_f6ed3e27a1cedf4599f7664d07437436a660746709c58a4185c215bda98da096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_47d12000a100f5279f195fd37e1793429bbe325efdd7b24c1dbd2cdec341e2ed->leave($__internal_47d12000a100f5279f195fd37e1793429bbe325efdd7b24c1dbd2cdec341e2ed_prof);

        
        $__internal_f6ed3e27a1cedf4599f7664d07437436a660746709c58a4185c215bda98da096->leave($__internal_f6ed3e27a1cedf4599f7664d07437436a660746709c58a4185c215bda98da096_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
