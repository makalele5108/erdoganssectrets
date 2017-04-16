<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_9e073c7816358a460177a55c525719ba67020529a2c43f1cae2b17efbef100a3 extends Twig_Template
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
        $__internal_eaa53610d01c5e8ad78ee4dce262ba0c9e267d2b664f644d3fa8de8bc9141315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa53610d01c5e8ad78ee4dce262ba0c9e267d2b664f644d3fa8de8bc9141315->enter($__internal_eaa53610d01c5e8ad78ee4dce262ba0c9e267d2b664f644d3fa8de8bc9141315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_4e478c502156087df92e5c126d210b8e26c7cadc5a76b20471a8f054b7669c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e478c502156087df92e5c126d210b8e26c7cadc5a76b20471a8f054b7669c84->enter($__internal_4e478c502156087df92e5c126d210b8e26c7cadc5a76b20471a8f054b7669c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_eaa53610d01c5e8ad78ee4dce262ba0c9e267d2b664f644d3fa8de8bc9141315->leave($__internal_eaa53610d01c5e8ad78ee4dce262ba0c9e267d2b664f644d3fa8de8bc9141315_prof);

        
        $__internal_4e478c502156087df92e5c126d210b8e26c7cadc5a76b20471a8f054b7669c84->leave($__internal_4e478c502156087df92e5c126d210b8e26c7cadc5a76b20471a8f054b7669c84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
