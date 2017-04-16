<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1a262ca5606d3b8424c249ea10f03d9ead0a2d37437a568c28a90cef3c20a954 extends Twig_Template
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
        $__internal_d27518af1b499cbfbb3381af68354ed3cbdc0c20ca6e8a3448ec0ff4ee827914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d27518af1b499cbfbb3381af68354ed3cbdc0c20ca6e8a3448ec0ff4ee827914->enter($__internal_d27518af1b499cbfbb3381af68354ed3cbdc0c20ca6e8a3448ec0ff4ee827914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_429265340b4453489c21c50b3a69dc5094b53acff9f667a60c754c13152ba895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429265340b4453489c21c50b3a69dc5094b53acff9f667a60c754c13152ba895->enter($__internal_429265340b4453489c21c50b3a69dc5094b53acff9f667a60c754c13152ba895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d27518af1b499cbfbb3381af68354ed3cbdc0c20ca6e8a3448ec0ff4ee827914->leave($__internal_d27518af1b499cbfbb3381af68354ed3cbdc0c20ca6e8a3448ec0ff4ee827914_prof);

        
        $__internal_429265340b4453489c21c50b3a69dc5094b53acff9f667a60c754c13152ba895->leave($__internal_429265340b4453489c21c50b3a69dc5094b53acff9f667a60c754c13152ba895_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
