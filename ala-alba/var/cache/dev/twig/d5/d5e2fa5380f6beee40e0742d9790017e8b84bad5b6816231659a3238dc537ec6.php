<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_7827fc7e8b49351501fe4c67b3aac12e4da8d26c7ca77d47d0a7514f6ea11468 extends Twig_Template
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
        $__internal_3103373d50470ddd74799cee787b2e928b69e9d19157f999bc753ae6e50c9d4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3103373d50470ddd74799cee787b2e928b69e9d19157f999bc753ae6e50c9d4d->enter($__internal_3103373d50470ddd74799cee787b2e928b69e9d19157f999bc753ae6e50c9d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_96c7b9e85627627870a7659b22f3793674b69597cda44f5680188a2f3e67b882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c7b9e85627627870a7659b22f3793674b69597cda44f5680188a2f3e67b882->enter($__internal_96c7b9e85627627870a7659b22f3793674b69597cda44f5680188a2f3e67b882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_3103373d50470ddd74799cee787b2e928b69e9d19157f999bc753ae6e50c9d4d->leave($__internal_3103373d50470ddd74799cee787b2e928b69e9d19157f999bc753ae6e50c9d4d_prof);

        
        $__internal_96c7b9e85627627870a7659b22f3793674b69597cda44f5680188a2f3e67b882->leave($__internal_96c7b9e85627627870a7659b22f3793674b69597cda44f5680188a2f3e67b882_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
