<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_16b32b5043420463e6a1e2d44223440c04b382424715b9c6375b883a5a2212bf extends Twig_Template
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
        $__internal_915cd23a454cf17f3f721e6cae761521c61e5867216cd4fee3e839f1e6d824df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_915cd23a454cf17f3f721e6cae761521c61e5867216cd4fee3e839f1e6d824df->enter($__internal_915cd23a454cf17f3f721e6cae761521c61e5867216cd4fee3e839f1e6d824df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_622ed6a88c1c271779adfe501dcc44c33e4260e12650ba482d5fd17ae7e2913b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_622ed6a88c1c271779adfe501dcc44c33e4260e12650ba482d5fd17ae7e2913b->enter($__internal_622ed6a88c1c271779adfe501dcc44c33e4260e12650ba482d5fd17ae7e2913b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_915cd23a454cf17f3f721e6cae761521c61e5867216cd4fee3e839f1e6d824df->leave($__internal_915cd23a454cf17f3f721e6cae761521c61e5867216cd4fee3e839f1e6d824df_prof);

        
        $__internal_622ed6a88c1c271779adfe501dcc44c33e4260e12650ba482d5fd17ae7e2913b->leave($__internal_622ed6a88c1c271779adfe501dcc44c33e4260e12650ba482d5fd17ae7e2913b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
