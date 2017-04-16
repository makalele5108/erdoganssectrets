<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_70d155e295e0744f5a82f8e8ae57d1791b3f59ab67688ff9030da9e9a4c87e08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62c5e3b8e2038929e020a264a77d584513527fea1de89ed33e3513166cf0410a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62c5e3b8e2038929e020a264a77d584513527fea1de89ed33e3513166cf0410a->enter($__internal_62c5e3b8e2038929e020a264a77d584513527fea1de89ed33e3513166cf0410a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_f63946bbdf1b649288523b0c8b55d8fcd84ad21e63b138ada95e35bd64644c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f63946bbdf1b649288523b0c8b55d8fcd84ad21e63b138ada95e35bd64644c32->enter($__internal_f63946bbdf1b649288523b0c8b55d8fcd84ad21e63b138ada95e35bd64644c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62c5e3b8e2038929e020a264a77d584513527fea1de89ed33e3513166cf0410a->leave($__internal_62c5e3b8e2038929e020a264a77d584513527fea1de89ed33e3513166cf0410a_prof);

        
        $__internal_f63946bbdf1b649288523b0c8b55d8fcd84ad21e63b138ada95e35bd64644c32->leave($__internal_f63946bbdf1b649288523b0c8b55d8fcd84ad21e63b138ada95e35bd64644c32_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_09028ecaced2bb0a9f26a41fad89124b2d7ba5e99ea584a891fe84283df2dd4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09028ecaced2bb0a9f26a41fad89124b2d7ba5e99ea584a891fe84283df2dd4a->enter($__internal_09028ecaced2bb0a9f26a41fad89124b2d7ba5e99ea584a891fe84283df2dd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_63780281da4d3bc56803a8fe8b67ddb7ef582c0a21065ed70bbb9741b0c2b801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63780281da4d3bc56803a8fe8b67ddb7ef582c0a21065ed70bbb9741b0c2b801->enter($__internal_63780281da4d3bc56803a8fe8b67ddb7ef582c0a21065ed70bbb9741b0c2b801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_63780281da4d3bc56803a8fe8b67ddb7ef582c0a21065ed70bbb9741b0c2b801->leave($__internal_63780281da4d3bc56803a8fe8b67ddb7ef582c0a21065ed70bbb9741b0c2b801_prof);

        
        $__internal_09028ecaced2bb0a9f26a41fad89124b2d7ba5e99ea584a891fe84283df2dd4a->leave($__internal_09028ecaced2bb0a9f26a41fad89124b2d7ba5e99ea584a891fe84283df2dd4a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
