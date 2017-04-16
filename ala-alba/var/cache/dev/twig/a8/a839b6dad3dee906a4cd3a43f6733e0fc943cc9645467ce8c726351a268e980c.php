<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_d493eda50e983016a33921b1d6cca9eb4fd3c4986862226447ee4083a31c825c extends Twig_Template
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
        $__internal_c7115604acb7c061d61452fa860527036a862ed4fe0957e4ab45b682059679ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7115604acb7c061d61452fa860527036a862ed4fe0957e4ab45b682059679ef->enter($__internal_c7115604acb7c061d61452fa860527036a862ed4fe0957e4ab45b682059679ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_73596dcac092d3620a345b2abb769f67e9e5ec74db9480a424540a5dd2d3994e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73596dcac092d3620a345b2abb769f67e9e5ec74db9480a424540a5dd2d3994e->enter($__internal_73596dcac092d3620a345b2abb769f67e9e5ec74db9480a424540a5dd2d3994e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_c7115604acb7c061d61452fa860527036a862ed4fe0957e4ab45b682059679ef->leave($__internal_c7115604acb7c061d61452fa860527036a862ed4fe0957e4ab45b682059679ef_prof);

        
        $__internal_73596dcac092d3620a345b2abb769f67e9e5ec74db9480a424540a5dd2d3994e->leave($__internal_73596dcac092d3620a345b2abb769f67e9e5ec74db9480a424540a5dd2d3994e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
