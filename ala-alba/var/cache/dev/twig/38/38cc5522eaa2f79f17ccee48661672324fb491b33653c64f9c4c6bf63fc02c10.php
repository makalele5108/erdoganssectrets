<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_cbc0c4f032103b5de6886ed7f06cc3794e4c5d1755774fa9824b1e05d679b6af extends Twig_Template
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
        $__internal_2f2bd88adf4a5d957751206c17f9bb05965ec609d4cda3873f46bb394c380df1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f2bd88adf4a5d957751206c17f9bb05965ec609d4cda3873f46bb394c380df1->enter($__internal_2f2bd88adf4a5d957751206c17f9bb05965ec609d4cda3873f46bb394c380df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_54f1ad15978bcaad778027ccf83129569034384424bfdb0fc3e1a6fb53b2d544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f1ad15978bcaad778027ccf83129569034384424bfdb0fc3e1a6fb53b2d544->enter($__internal_54f1ad15978bcaad778027ccf83129569034384424bfdb0fc3e1a6fb53b2d544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_2f2bd88adf4a5d957751206c17f9bb05965ec609d4cda3873f46bb394c380df1->leave($__internal_2f2bd88adf4a5d957751206c17f9bb05965ec609d4cda3873f46bb394c380df1_prof);

        
        $__internal_54f1ad15978bcaad778027ccf83129569034384424bfdb0fc3e1a6fb53b2d544->leave($__internal_54f1ad15978bcaad778027ccf83129569034384424bfdb0fc3e1a6fb53b2d544_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
