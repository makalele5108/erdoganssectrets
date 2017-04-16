<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_5df47e58d3bcac059963e3b95c64bb6af3a2b9d77ff21c45f2ae2ec6fdc7cee2 extends Twig_Template
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
        $__internal_33f8ea611d8afb814d326334595ceddabde8f6e59c63c0ca9ee8b306deffac60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f8ea611d8afb814d326334595ceddabde8f6e59c63c0ca9ee8b306deffac60->enter($__internal_33f8ea611d8afb814d326334595ceddabde8f6e59c63c0ca9ee8b306deffac60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_b3ab316a5bb798ad8504a3cf3339fa8fa52dceaccedf517101238fe0cce03c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ab316a5bb798ad8504a3cf3339fa8fa52dceaccedf517101238fe0cce03c9b->enter($__internal_b3ab316a5bb798ad8504a3cf3339fa8fa52dceaccedf517101238fe0cce03c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_33f8ea611d8afb814d326334595ceddabde8f6e59c63c0ca9ee8b306deffac60->leave($__internal_33f8ea611d8afb814d326334595ceddabde8f6e59c63c0ca9ee8b306deffac60_prof);

        
        $__internal_b3ab316a5bb798ad8504a3cf3339fa8fa52dceaccedf517101238fe0cce03c9b->leave($__internal_b3ab316a5bb798ad8504a3cf3339fa8fa52dceaccedf517101238fe0cce03c9b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
