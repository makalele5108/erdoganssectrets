<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_0e213fa5563e718fec59cf2f25f38fc4328c6b556e03685822352ad336016055 extends Twig_Template
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
        $__internal_9e18b16fcfde330ea3ee27ce5b2d86fd74fccc56780c0238641883429b40ae74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e18b16fcfde330ea3ee27ce5b2d86fd74fccc56780c0238641883429b40ae74->enter($__internal_9e18b16fcfde330ea3ee27ce5b2d86fd74fccc56780c0238641883429b40ae74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_0971740aa748c02bb8ca0627f54b9f46d1791ce6a2f272733318e5bc8a0905fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0971740aa748c02bb8ca0627f54b9f46d1791ce6a2f272733318e5bc8a0905fe->enter($__internal_0971740aa748c02bb8ca0627f54b9f46d1791ce6a2f272733318e5bc8a0905fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9e18b16fcfde330ea3ee27ce5b2d86fd74fccc56780c0238641883429b40ae74->leave($__internal_9e18b16fcfde330ea3ee27ce5b2d86fd74fccc56780c0238641883429b40ae74_prof);

        
        $__internal_0971740aa748c02bb8ca0627f54b9f46d1791ce6a2f272733318e5bc8a0905fe->leave($__internal_0971740aa748c02bb8ca0627f54b9f46d1791ce6a2f272733318e5bc8a0905fe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
