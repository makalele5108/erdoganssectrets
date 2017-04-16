<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_0f14d86f0462ec2ddbaa4fa0c49f9a04e76b117921f0208e74e8f849aa9de329 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f915e4761f707ba258e3d66ce5792cb4aa409934a2a06546f2d3439389a5d6f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f915e4761f707ba258e3d66ce5792cb4aa409934a2a06546f2d3439389a5d6f0->enter($__internal_f915e4761f707ba258e3d66ce5792cb4aa409934a2a06546f2d3439389a5d6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_551101b8629f97dedb0dc2dcecd6dd5ff175f26abcc719083ada0a6b44627cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551101b8629f97dedb0dc2dcecd6dd5ff175f26abcc719083ada0a6b44627cb8->enter($__internal_551101b8629f97dedb0dc2dcecd6dd5ff175f26abcc719083ada0a6b44627cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f915e4761f707ba258e3d66ce5792cb4aa409934a2a06546f2d3439389a5d6f0->leave($__internal_f915e4761f707ba258e3d66ce5792cb4aa409934a2a06546f2d3439389a5d6f0_prof);

        
        $__internal_551101b8629f97dedb0dc2dcecd6dd5ff175f26abcc719083ada0a6b44627cb8->leave($__internal_551101b8629f97dedb0dc2dcecd6dd5ff175f26abcc719083ada0a6b44627cb8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e333da9fa69fea9ac24d2505babfad5381f9acca4bda4d248d5f78d99b7a7ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e333da9fa69fea9ac24d2505babfad5381f9acca4bda4d248d5f78d99b7a7ad9->enter($__internal_e333da9fa69fea9ac24d2505babfad5381f9acca4bda4d248d5f78d99b7a7ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_612479f98693ef2eedd57de084c8d27f99558173f0265d59398d688a3f187c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612479f98693ef2eedd57de084c8d27f99558173f0265d59398d688a3f187c77->enter($__internal_612479f98693ef2eedd57de084c8d27f99558173f0265d59398d688a3f187c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_612479f98693ef2eedd57de084c8d27f99558173f0265d59398d688a3f187c77->leave($__internal_612479f98693ef2eedd57de084c8d27f99558173f0265d59398d688a3f187c77_prof);

        
        $__internal_e333da9fa69fea9ac24d2505babfad5381f9acca4bda4d248d5f78d99b7a7ad9->leave($__internal_e333da9fa69fea9ac24d2505babfad5381f9acca4bda4d248d5f78d99b7a7ad9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4ac42b634e752b447919272f5d660c2a88f464e5c7aa74d73d125810bfa7102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ac42b634e752b447919272f5d660c2a88f464e5c7aa74d73d125810bfa7102->enter($__internal_f4ac42b634e752b447919272f5d660c2a88f464e5c7aa74d73d125810bfa7102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_605a90a137236865ac66ae55bb2d0859d14e224cbb944ad545bc25213f4c3164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_605a90a137236865ac66ae55bb2d0859d14e224cbb944ad545bc25213f4c3164->enter($__internal_605a90a137236865ac66ae55bb2d0859d14e224cbb944ad545bc25213f4c3164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_605a90a137236865ac66ae55bb2d0859d14e224cbb944ad545bc25213f4c3164->leave($__internal_605a90a137236865ac66ae55bb2d0859d14e224cbb944ad545bc25213f4c3164_prof);

        
        $__internal_f4ac42b634e752b447919272f5d660c2a88f464e5c7aa74d73d125810bfa7102->leave($__internal_f4ac42b634e752b447919272f5d660c2a88f464e5c7aa74d73d125810bfa7102_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
