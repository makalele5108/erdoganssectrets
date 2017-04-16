<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_cabbc98d4d1ca63edf0bc15a740f78478a439226de3edfd7d3f8384dc1f52614 extends Twig_Template
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
        $__internal_857050ddec0f19153f427c4dde3d55553c058d1b7ff8cfd7d274e025ec1f6317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_857050ddec0f19153f427c4dde3d55553c058d1b7ff8cfd7d274e025ec1f6317->enter($__internal_857050ddec0f19153f427c4dde3d55553c058d1b7ff8cfd7d274e025ec1f6317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_95e58d293c0f5a97a5f7642eb5ca8264e9de301532e4cba0eab0a34c37f36279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e58d293c0f5a97a5f7642eb5ca8264e9de301532e4cba0eab0a34c37f36279->enter($__internal_95e58d293c0f5a97a5f7642eb5ca8264e9de301532e4cba0eab0a34c37f36279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_857050ddec0f19153f427c4dde3d55553c058d1b7ff8cfd7d274e025ec1f6317->leave($__internal_857050ddec0f19153f427c4dde3d55553c058d1b7ff8cfd7d274e025ec1f6317_prof);

        
        $__internal_95e58d293c0f5a97a5f7642eb5ca8264e9de301532e4cba0eab0a34c37f36279->leave($__internal_95e58d293c0f5a97a5f7642eb5ca8264e9de301532e4cba0eab0a34c37f36279_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
