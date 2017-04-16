<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_260bcf0ad8435ae81d6662912146cbbecd3eab416360156e2434007bc9a032d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d697ca1829649c4396db0c93d7c2b5befec652a0d057a48743ec0ee9a631e69a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d697ca1829649c4396db0c93d7c2b5befec652a0d057a48743ec0ee9a631e69a->enter($__internal_d697ca1829649c4396db0c93d7c2b5befec652a0d057a48743ec0ee9a631e69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_b50830d4b1d5081ad0594b1517e9c6af2c1cb834e902b7acc4c6e523bfc2054a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50830d4b1d5081ad0594b1517e9c6af2c1cb834e902b7acc4c6e523bfc2054a->enter($__internal_b50830d4b1d5081ad0594b1517e9c6af2c1cb834e902b7acc4c6e523bfc2054a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d697ca1829649c4396db0c93d7c2b5befec652a0d057a48743ec0ee9a631e69a->leave($__internal_d697ca1829649c4396db0c93d7c2b5befec652a0d057a48743ec0ee9a631e69a_prof);

        
        $__internal_b50830d4b1d5081ad0594b1517e9c6af2c1cb834e902b7acc4c6e523bfc2054a->leave($__internal_b50830d4b1d5081ad0594b1517e9c6af2c1cb834e902b7acc4c6e523bfc2054a_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_3e1fe052be0c376907268de84aa5cdb6f2340fc6bc862c9b4e7662d65fa14246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e1fe052be0c376907268de84aa5cdb6f2340fc6bc862c9b4e7662d65fa14246->enter($__internal_3e1fe052be0c376907268de84aa5cdb6f2340fc6bc862c9b4e7662d65fa14246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e7bd308a0b1bcceff72621a45ad4edc2301372f95389e6cb2fb4268c6ed9090e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7bd308a0b1bcceff72621a45ad4edc2301372f95389e6cb2fb4268c6ed9090e->enter($__internal_e7bd308a0b1bcceff72621a45ad4edc2301372f95389e6cb2fb4268c6ed9090e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_e7bd308a0b1bcceff72621a45ad4edc2301372f95389e6cb2fb4268c6ed9090e->leave($__internal_e7bd308a0b1bcceff72621a45ad4edc2301372f95389e6cb2fb4268c6ed9090e_prof);

        
        $__internal_3e1fe052be0c376907268de84aa5cdb6f2340fc6bc862c9b4e7662d65fa14246->leave($__internal_3e1fe052be0c376907268de84aa5cdb6f2340fc6bc862c9b4e7662d65fa14246_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2aa4b5fc042db36d29a26c1c4ba44fcbcc1f4d87d80fac8208f3099d389fe45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2aa4b5fc042db36d29a26c1c4ba44fcbcc1f4d87d80fac8208f3099d389fe45->enter($__internal_e2aa4b5fc042db36d29a26c1c4ba44fcbcc1f4d87d80fac8208f3099d389fe45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9958c80e5c07f23cc030d68ce87c67d3175e6c880d21cf361b14994a34dbbf1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9958c80e5c07f23cc030d68ce87c67d3175e6c880d21cf361b14994a34dbbf1a->enter($__internal_9958c80e5c07f23cc030d68ce87c67d3175e6c880d21cf361b14994a34dbbf1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_9958c80e5c07f23cc030d68ce87c67d3175e6c880d21cf361b14994a34dbbf1a->leave($__internal_9958c80e5c07f23cc030d68ce87c67d3175e6c880d21cf361b14994a34dbbf1a_prof);

        
        $__internal_e2aa4b5fc042db36d29a26c1c4ba44fcbcc1f4d87d80fac8208f3099d389fe45->leave($__internal_e2aa4b5fc042db36d29a26c1c4ba44fcbcc1f4d87d80fac8208f3099d389fe45_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
