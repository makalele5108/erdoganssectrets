<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_84cd78bf23a2575340c0a6afe6da9119b6d58927502d81a4144d32eb8164a362 extends Twig_Template
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
        $__internal_26b1123b387851d26cff1c5cc4bc7f9258481f67c93b6c0ee5cd84752fb1fda3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26b1123b387851d26cff1c5cc4bc7f9258481f67c93b6c0ee5cd84752fb1fda3->enter($__internal_26b1123b387851d26cff1c5cc4bc7f9258481f67c93b6c0ee5cd84752fb1fda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_65f47b0234126f7b1beaec8b585c601a7aa08d791cbcdd4552ccbd1de9e2f3df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f47b0234126f7b1beaec8b585c601a7aa08d791cbcdd4552ccbd1de9e2f3df->enter($__internal_65f47b0234126f7b1beaec8b585c601a7aa08d791cbcdd4552ccbd1de9e2f3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_26b1123b387851d26cff1c5cc4bc7f9258481f67c93b6c0ee5cd84752fb1fda3->leave($__internal_26b1123b387851d26cff1c5cc4bc7f9258481f67c93b6c0ee5cd84752fb1fda3_prof);

        
        $__internal_65f47b0234126f7b1beaec8b585c601a7aa08d791cbcdd4552ccbd1de9e2f3df->leave($__internal_65f47b0234126f7b1beaec8b585c601a7aa08d791cbcdd4552ccbd1de9e2f3df_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
", "@Twig/Exception/error.xml.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
