<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_6ccf767f50a02801ba8fa683f83f3e6e66d8b9c0afd34df01465d414f832b939 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_be1c8fc58bef79e50a5e58577f8de6808331d142ef26678805a3c2aedcd304d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be1c8fc58bef79e50a5e58577f8de6808331d142ef26678805a3c2aedcd304d9->enter($__internal_be1c8fc58bef79e50a5e58577f8de6808331d142ef26678805a3c2aedcd304d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_9651d3ffb5c9c4874320e7dad53d9f723cfed6d67a2e2bf69cabece5dda02cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9651d3ffb5c9c4874320e7dad53d9f723cfed6d67a2e2bf69cabece5dda02cab->enter($__internal_9651d3ffb5c9c4874320e7dad53d9f723cfed6d67a2e2bf69cabece5dda02cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be1c8fc58bef79e50a5e58577f8de6808331d142ef26678805a3c2aedcd304d9->leave($__internal_be1c8fc58bef79e50a5e58577f8de6808331d142ef26678805a3c2aedcd304d9_prof);

        
        $__internal_9651d3ffb5c9c4874320e7dad53d9f723cfed6d67a2e2bf69cabece5dda02cab->leave($__internal_9651d3ffb5c9c4874320e7dad53d9f723cfed6d67a2e2bf69cabece5dda02cab_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_8cf8784170f5b94147f147a158fe5754be09cc43b19cd3495a632a0d32167409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cf8784170f5b94147f147a158fe5754be09cc43b19cd3495a632a0d32167409->enter($__internal_8cf8784170f5b94147f147a158fe5754be09cc43b19cd3495a632a0d32167409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e9025d0d909d9b548bea9897d1ab3da2254cd0586f20cdf798ed5a76c841674a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9025d0d909d9b548bea9897d1ab3da2254cd0586f20cdf798ed5a76c841674a->enter($__internal_e9025d0d909d9b548bea9897d1ab3da2254cd0586f20cdf798ed5a76c841674a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_e9025d0d909d9b548bea9897d1ab3da2254cd0586f20cdf798ed5a76c841674a->leave($__internal_e9025d0d909d9b548bea9897d1ab3da2254cd0586f20cdf798ed5a76c841674a_prof);

        
        $__internal_8cf8784170f5b94147f147a158fe5754be09cc43b19cd3495a632a0d32167409->leave($__internal_8cf8784170f5b94147f147a158fe5754be09cc43b19cd3495a632a0d32167409_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc56f6b2a8c08ceec69d82ced66e8188299c19e5e6623eadacbc9fa942aeb525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc56f6b2a8c08ceec69d82ced66e8188299c19e5e6623eadacbc9fa942aeb525->enter($__internal_cc56f6b2a8c08ceec69d82ced66e8188299c19e5e6623eadacbc9fa942aeb525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9408afc1cbb029b7a24245dddfee7a69285cc503b4561624e7c6d0c4f7e232c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9408afc1cbb029b7a24245dddfee7a69285cc503b4561624e7c6d0c4f7e232c4->enter($__internal_9408afc1cbb029b7a24245dddfee7a69285cc503b4561624e7c6d0c4f7e232c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_9408afc1cbb029b7a24245dddfee7a69285cc503b4561624e7c6d0c4f7e232c4->leave($__internal_9408afc1cbb029b7a24245dddfee7a69285cc503b4561624e7c6d0c4f7e232c4_prof);

        
        $__internal_cc56f6b2a8c08ceec69d82ced66e8188299c19e5e6623eadacbc9fa942aeb525->leave($__internal_cc56f6b2a8c08ceec69d82ced66e8188299c19e5e6623eadacbc9fa942aeb525_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
