<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_faad843189ee4b0524cc87f9c5d06cb6336ddbf0dd0c88d08b0a0ea0e1c9d498 extends Twig_Template
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
        $__internal_0be626f422e2ebc23ec966fb813ee74e02d482e95c261b47fa89d567820c6c86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be626f422e2ebc23ec966fb813ee74e02d482e95c261b47fa89d567820c6c86->enter($__internal_0be626f422e2ebc23ec966fb813ee74e02d482e95c261b47fa89d567820c6c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_c2db4f50b52cbd12837f3cca13512c5ad9a8b14c925d173310f706a70df98973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2db4f50b52cbd12837f3cca13512c5ad9a8b14c925d173310f706a70df98973->enter($__internal_c2db4f50b52cbd12837f3cca13512c5ad9a8b14c925d173310f706a70df98973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0be626f422e2ebc23ec966fb813ee74e02d482e95c261b47fa89d567820c6c86->leave($__internal_0be626f422e2ebc23ec966fb813ee74e02d482e95c261b47fa89d567820c6c86_prof);

        
        $__internal_c2db4f50b52cbd12837f3cca13512c5ad9a8b14c925d173310f706a70df98973->leave($__internal_c2db4f50b52cbd12837f3cca13512c5ad9a8b14c925d173310f706a70df98973_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
