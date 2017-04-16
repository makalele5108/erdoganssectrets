<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_24ddd69e8721ffe6a68ef3333eaf02ccc835065aacc50b25672b0163ec93f756 extends Twig_Template
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
        $__internal_47a5211662b4a536f9d35c1872cf21c03e91624fd568dcb071b1707a26d14801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47a5211662b4a536f9d35c1872cf21c03e91624fd568dcb071b1707a26d14801->enter($__internal_47a5211662b4a536f9d35c1872cf21c03e91624fd568dcb071b1707a26d14801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_7e355c04696f3fff1226566a3c714917844041d29795eeb9cfec2679071e4557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e355c04696f3fff1226566a3c714917844041d29795eeb9cfec2679071e4557->enter($__internal_7e355c04696f3fff1226566a3c714917844041d29795eeb9cfec2679071e4557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_47a5211662b4a536f9d35c1872cf21c03e91624fd568dcb071b1707a26d14801->leave($__internal_47a5211662b4a536f9d35c1872cf21c03e91624fd568dcb071b1707a26d14801_prof);

        
        $__internal_7e355c04696f3fff1226566a3c714917844041d29795eeb9cfec2679071e4557->leave($__internal_7e355c04696f3fff1226566a3c714917844041d29795eeb9cfec2679071e4557_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
