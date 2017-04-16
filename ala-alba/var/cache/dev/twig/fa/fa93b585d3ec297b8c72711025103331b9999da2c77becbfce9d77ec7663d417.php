<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_28ad015174cff0737d5194faaf1a6451255cd3cbcc7ad519382615a9e1f320a0 extends Twig_Template
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
        $__internal_3df1abd5c6f68092914863a7bf92951ae9e883cdf110e851e925b2cd9bef3849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df1abd5c6f68092914863a7bf92951ae9e883cdf110e851e925b2cd9bef3849->enter($__internal_3df1abd5c6f68092914863a7bf92951ae9e883cdf110e851e925b2cd9bef3849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_4020b8b16fb5ebe0dfe23e1772bbcf626cef62d5c3810cf58706cc18c4b5cb91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4020b8b16fb5ebe0dfe23e1772bbcf626cef62d5c3810cf58706cc18c4b5cb91->enter($__internal_4020b8b16fb5ebe0dfe23e1772bbcf626cef62d5c3810cf58706cc18c4b5cb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3df1abd5c6f68092914863a7bf92951ae9e883cdf110e851e925b2cd9bef3849->leave($__internal_3df1abd5c6f68092914863a7bf92951ae9e883cdf110e851e925b2cd9bef3849_prof);

        
        $__internal_4020b8b16fb5ebe0dfe23e1772bbcf626cef62d5c3810cf58706cc18c4b5cb91->leave($__internal_4020b8b16fb5ebe0dfe23e1772bbcf626cef62d5c3810cf58706cc18c4b5cb91_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
