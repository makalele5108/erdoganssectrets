<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_9ed92de4d44e011f57fcaf5369103ce5b054ebc93ac35697289dfe8239d09088 extends Twig_Template
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
        $__internal_6f1acc384726c42610bd85f63b5451d64808754b3bcc1c1bd384f59e582309fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f1acc384726c42610bd85f63b5451d64808754b3bcc1c1bd384f59e582309fa->enter($__internal_6f1acc384726c42610bd85f63b5451d64808754b3bcc1c1bd384f59e582309fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_9db8310f12dc54b9743a9baa527b1b8a2e1d2b1e0137974fe14ea7e18dbdec72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9db8310f12dc54b9743a9baa527b1b8a2e1d2b1e0137974fe14ea7e18dbdec72->enter($__internal_9db8310f12dc54b9743a9baa527b1b8a2e1d2b1e0137974fe14ea7e18dbdec72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_6f1acc384726c42610bd85f63b5451d64808754b3bcc1c1bd384f59e582309fa->leave($__internal_6f1acc384726c42610bd85f63b5451d64808754b3bcc1c1bd384f59e582309fa_prof);

        
        $__internal_9db8310f12dc54b9743a9baa527b1b8a2e1d2b1e0137974fe14ea7e18dbdec72->leave($__internal_9db8310f12dc54b9743a9baa527b1b8a2e1d2b1e0137974fe14ea7e18dbdec72_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
