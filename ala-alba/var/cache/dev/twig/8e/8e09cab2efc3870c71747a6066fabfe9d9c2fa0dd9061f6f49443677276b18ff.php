<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_604034194242ecfc4ad5b5195126cad6994c9ec228058d2f1dce43127610d29b extends Twig_Template
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
        $__internal_2804cbe67ba716e7144804305686a078e24e7a5721ceaf7d8d8d4f7908be3513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2804cbe67ba716e7144804305686a078e24e7a5721ceaf7d8d8d4f7908be3513->enter($__internal_2804cbe67ba716e7144804305686a078e24e7a5721ceaf7d8d8d4f7908be3513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_94db156e6a6dc72365582f296d13cc92bd46246aff35fcf2be8d7c03f65f0cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94db156e6a6dc72365582f296d13cc92bd46246aff35fcf2be8d7c03f65f0cca->enter($__internal_94db156e6a6dc72365582f296d13cc92bd46246aff35fcf2be8d7c03f65f0cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2804cbe67ba716e7144804305686a078e24e7a5721ceaf7d8d8d4f7908be3513->leave($__internal_2804cbe67ba716e7144804305686a078e24e7a5721ceaf7d8d8d4f7908be3513_prof);

        
        $__internal_94db156e6a6dc72365582f296d13cc92bd46246aff35fcf2be8d7c03f65f0cca->leave($__internal_94db156e6a6dc72365582f296d13cc92bd46246aff35fcf2be8d7c03f65f0cca_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
