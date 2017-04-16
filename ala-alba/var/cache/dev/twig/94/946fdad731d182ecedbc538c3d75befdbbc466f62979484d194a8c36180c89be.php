<?php

/* AlbaBundle:Default:index.html.twig */
class __TwigTemplate_158923179b7a2b451e62be302fc725182f375181d661dccc14a9dfa546c37092 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Alba/base.html.twig", "AlbaBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Alba/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bde880672a4d9da36477ed9ad9faa23cb1a5016a392c3eabbfb5d9c700fb5a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bde880672a4d9da36477ed9ad9faa23cb1a5016a392c3eabbfb5d9c700fb5a4->enter($__internal_7bde880672a4d9da36477ed9ad9faa23cb1a5016a392c3eabbfb5d9c700fb5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AlbaBundle:Default:index.html.twig"));

        $__internal_031ffe3ab6b24aa25f02cd35d54ad6c0bac784a452f7f640790c4d5185b22944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031ffe3ab6b24aa25f02cd35d54ad6c0bac784a452f7f640790c4d5185b22944->enter($__internal_031ffe3ab6b24aa25f02cd35d54ad6c0bac784a452f7f640790c4d5185b22944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AlbaBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bde880672a4d9da36477ed9ad9faa23cb1a5016a392c3eabbfb5d9c700fb5a4->leave($__internal_7bde880672a4d9da36477ed9ad9faa23cb1a5016a392c3eabbfb5d9c700fb5a4_prof);

        
        $__internal_031ffe3ab6b24aa25f02cd35d54ad6c0bac784a452f7f640790c4d5185b22944->leave($__internal_031ffe3ab6b24aa25f02cd35d54ad6c0bac784a452f7f640790c4d5185b22944_prof);

    }

    public function getTemplateName()
    {
        return "AlbaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Alba/base.html.twig' %}", "AlbaBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\src\\Alba\\Bundle/Resources/views/Default/index.html.twig");
    }
}
