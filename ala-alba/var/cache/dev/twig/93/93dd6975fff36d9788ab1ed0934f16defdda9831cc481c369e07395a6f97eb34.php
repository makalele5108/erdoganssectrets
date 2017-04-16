<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_811081022aaee7f42458c513da7b90e5922f1c5a63d8e912793b3d66e5b09d0c extends Twig_Template
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
        $__internal_0726fbdbd0fc863c0cfaa7d52a92d7b8cb7ddae48b02665f391d7efcb4e8155a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0726fbdbd0fc863c0cfaa7d52a92d7b8cb7ddae48b02665f391d7efcb4e8155a->enter($__internal_0726fbdbd0fc863c0cfaa7d52a92d7b8cb7ddae48b02665f391d7efcb4e8155a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_2c65a21e0282fb77a0c856846a2cbd93f88dbf276875b31cecab9c24e76f9046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c65a21e0282fb77a0c856846a2cbd93f88dbf276875b31cecab9c24e76f9046->enter($__internal_2c65a21e0282fb77a0c856846a2cbd93f88dbf276875b31cecab9c24e76f9046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0726fbdbd0fc863c0cfaa7d52a92d7b8cb7ddae48b02665f391d7efcb4e8155a->leave($__internal_0726fbdbd0fc863c0cfaa7d52a92d7b8cb7ddae48b02665f391d7efcb4e8155a_prof);

        
        $__internal_2c65a21e0282fb77a0c856846a2cbd93f88dbf276875b31cecab9c24e76f9046->leave($__internal_2c65a21e0282fb77a0c856846a2cbd93f88dbf276875b31cecab9c24e76f9046_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
