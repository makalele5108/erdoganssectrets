<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_530abaeead083f7d4dcbedfb01c647b5082f9dd2f89588175293efb3ae232b9b extends Twig_Template
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
        $__internal_40bf534907ec99e2989b1eb5f6025cf8d91d66f1fd2ab4ce7afd1d3a93c2a85e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40bf534907ec99e2989b1eb5f6025cf8d91d66f1fd2ab4ce7afd1d3a93c2a85e->enter($__internal_40bf534907ec99e2989b1eb5f6025cf8d91d66f1fd2ab4ce7afd1d3a93c2a85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_f60232e6820186ab455a326c8a67f931dce67a9ddaa8897d95fa28a87b559454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f60232e6820186ab455a326c8a67f931dce67a9ddaa8897d95fa28a87b559454->enter($__internal_f60232e6820186ab455a326c8a67f931dce67a9ddaa8897d95fa28a87b559454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_40bf534907ec99e2989b1eb5f6025cf8d91d66f1fd2ab4ce7afd1d3a93c2a85e->leave($__internal_40bf534907ec99e2989b1eb5f6025cf8d91d66f1fd2ab4ce7afd1d3a93c2a85e_prof);

        
        $__internal_f60232e6820186ab455a326c8a67f931dce67a9ddaa8897d95fa28a87b559454->leave($__internal_f60232e6820186ab455a326c8a67f931dce67a9ddaa8897d95fa28a87b559454_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
