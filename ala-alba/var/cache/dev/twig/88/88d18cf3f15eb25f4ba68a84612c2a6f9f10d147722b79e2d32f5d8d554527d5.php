<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_b32b337263a1b95c07eb11ddfa163c0989a77791145ede19c0b39bd2ca20d014 extends Twig_Template
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
        $__internal_ee250d6b47783f2aacd1c59ea10989e1bc967e885b883245b002c4d93e9c033f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee250d6b47783f2aacd1c59ea10989e1bc967e885b883245b002c4d93e9c033f->enter($__internal_ee250d6b47783f2aacd1c59ea10989e1bc967e885b883245b002c4d93e9c033f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_e09e24482ffc44f1aef63d89a03d54df59850fd304510241714c3d3ff580dea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e09e24482ffc44f1aef63d89a03d54df59850fd304510241714c3d3ff580dea2->enter($__internal_e09e24482ffc44f1aef63d89a03d54df59850fd304510241714c3d3ff580dea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_ee250d6b47783f2aacd1c59ea10989e1bc967e885b883245b002c4d93e9c033f->leave($__internal_ee250d6b47783f2aacd1c59ea10989e1bc967e885b883245b002c4d93e9c033f_prof);

        
        $__internal_e09e24482ffc44f1aef63d89a03d54df59850fd304510241714c3d3ff580dea2->leave($__internal_e09e24482ffc44f1aef63d89a03d54df59850fd304510241714c3d3ff580dea2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
