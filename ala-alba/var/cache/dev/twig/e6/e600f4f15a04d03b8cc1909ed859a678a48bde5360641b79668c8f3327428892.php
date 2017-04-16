<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_a5f1b1ecb00272c2e61513bb8f23b020490dbf7385968e0a150d04f10ec19c06 extends Twig_Template
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
        $__internal_4110723074cb9f149410fcc0d963a8492ebb327a47c03fc0c899e9ee928bf258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4110723074cb9f149410fcc0d963a8492ebb327a47c03fc0c899e9ee928bf258->enter($__internal_4110723074cb9f149410fcc0d963a8492ebb327a47c03fc0c899e9ee928bf258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_7e322996f4d6ea69af26e5eb506b6e7182a449c698d954f961263b15a52f66db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e322996f4d6ea69af26e5eb506b6e7182a449c698d954f961263b15a52f66db->enter($__internal_7e322996f4d6ea69af26e5eb506b6e7182a449c698d954f961263b15a52f66db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_4110723074cb9f149410fcc0d963a8492ebb327a47c03fc0c899e9ee928bf258->leave($__internal_4110723074cb9f149410fcc0d963a8492ebb327a47c03fc0c899e9ee928bf258_prof);

        
        $__internal_7e322996f4d6ea69af26e5eb506b6e7182a449c698d954f961263b15a52f66db->leave($__internal_7e322996f4d6ea69af26e5eb506b6e7182a449c698d954f961263b15a52f66db_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
