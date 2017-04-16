<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_20db46d6e14662e4d2c83ad26d19299996553a1fb3d7f5d8f0a074bbe5492933 extends Twig_Template
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
        $__internal_13cfa0210359a3b001cce1472f5e15ad5c0bbb1c23958ecfc1b428a23665a4f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13cfa0210359a3b001cce1472f5e15ad5c0bbb1c23958ecfc1b428a23665a4f7->enter($__internal_13cfa0210359a3b001cce1472f5e15ad5c0bbb1c23958ecfc1b428a23665a4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_8c5fd38624359f98f6aa0b1f105a897d8e85d4a9686504f67912aeb9c8342089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5fd38624359f98f6aa0b1f105a897d8e85d4a9686504f67912aeb9c8342089->enter($__internal_8c5fd38624359f98f6aa0b1f105a897d8e85d4a9686504f67912aeb9c8342089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_13cfa0210359a3b001cce1472f5e15ad5c0bbb1c23958ecfc1b428a23665a4f7->leave($__internal_13cfa0210359a3b001cce1472f5e15ad5c0bbb1c23958ecfc1b428a23665a4f7_prof);

        
        $__internal_8c5fd38624359f98f6aa0b1f105a897d8e85d4a9686504f67912aeb9c8342089->leave($__internal_8c5fd38624359f98f6aa0b1f105a897d8e85d4a9686504f67912aeb9c8342089_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
