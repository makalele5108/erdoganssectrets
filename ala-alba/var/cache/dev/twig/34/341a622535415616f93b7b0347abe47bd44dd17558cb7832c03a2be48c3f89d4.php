<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_080893a95eef4bdd2059e2d70ea67bddf46760737d89640625a64bc73febd65a extends Twig_Template
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
        $__internal_1104f0efdf60ddb9d1c5cd66bf92394406f397288db2e5557cde996cc289216c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1104f0efdf60ddb9d1c5cd66bf92394406f397288db2e5557cde996cc289216c->enter($__internal_1104f0efdf60ddb9d1c5cd66bf92394406f397288db2e5557cde996cc289216c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_57a003471bb1c651e897f5601a343375030749ea64dbd636763aa718937b2cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a003471bb1c651e897f5601a343375030749ea64dbd636763aa718937b2cbc->enter($__internal_57a003471bb1c651e897f5601a343375030749ea64dbd636763aa718937b2cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1104f0efdf60ddb9d1c5cd66bf92394406f397288db2e5557cde996cc289216c->leave($__internal_1104f0efdf60ddb9d1c5cd66bf92394406f397288db2e5557cde996cc289216c_prof);

        
        $__internal_57a003471bb1c651e897f5601a343375030749ea64dbd636763aa718937b2cbc->leave($__internal_57a003471bb1c651e897f5601a343375030749ea64dbd636763aa718937b2cbc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
