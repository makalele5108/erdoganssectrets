<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_62e623694352252364a1ae092551863519526e5cfddf26d8117f0ebd248030a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_e2b5a75df1d1b41c3f42092812402f8b9e9bfb1e93e4ef5176607af63d7c1684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2b5a75df1d1b41c3f42092812402f8b9e9bfb1e93e4ef5176607af63d7c1684->enter($__internal_e2b5a75df1d1b41c3f42092812402f8b9e9bfb1e93e4ef5176607af63d7c1684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_3445954f640dd70d633f2b54e1a3db9b16b1f13568c0918095d5c8aa5c6ea13d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3445954f640dd70d633f2b54e1a3db9b16b1f13568c0918095d5c8aa5c6ea13d->enter($__internal_3445954f640dd70d633f2b54e1a3db9b16b1f13568c0918095d5c8aa5c6ea13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2b5a75df1d1b41c3f42092812402f8b9e9bfb1e93e4ef5176607af63d7c1684->leave($__internal_e2b5a75df1d1b41c3f42092812402f8b9e9bfb1e93e4ef5176607af63d7c1684_prof);

        
        $__internal_3445954f640dd70d633f2b54e1a3db9b16b1f13568c0918095d5c8aa5c6ea13d->leave($__internal_3445954f640dd70d633f2b54e1a3db9b16b1f13568c0918095d5c8aa5c6ea13d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d435080d536d721c1e9046b3e03d636c31434124d3bfdc49616073fb58c3277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d435080d536d721c1e9046b3e03d636c31434124d3bfdc49616073fb58c3277->enter($__internal_9d435080d536d721c1e9046b3e03d636c31434124d3bfdc49616073fb58c3277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_33276c22a6228b64028864e3a76bbbde116b013d77c1ca35ba143c9c4bcd3cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33276c22a6228b64028864e3a76bbbde116b013d77c1ca35ba143c9c4bcd3cc4->enter($__internal_33276c22a6228b64028864e3a76bbbde116b013d77c1ca35ba143c9c4bcd3cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_33276c22a6228b64028864e3a76bbbde116b013d77c1ca35ba143c9c4bcd3cc4->leave($__internal_33276c22a6228b64028864e3a76bbbde116b013d77c1ca35ba143c9c4bcd3cc4_prof);

        
        $__internal_9d435080d536d721c1e9046b3e03d636c31434124d3bfdc49616073fb58c3277->leave($__internal_9d435080d536d721c1e9046b3e03d636c31434124d3bfdc49616073fb58c3277_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b80f424a259723037fcdfa0911b70c8470f92db2c7d6f365125e88f69028585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b80f424a259723037fcdfa0911b70c8470f92db2c7d6f365125e88f69028585->enter($__internal_4b80f424a259723037fcdfa0911b70c8470f92db2c7d6f365125e88f69028585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e1232b817ddc31d568676385dfd0c2b14a6febc0a5d1c8be6708bdb956d84a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e1232b817ddc31d568676385dfd0c2b14a6febc0a5d1c8be6708bdb956d84a1->enter($__internal_0e1232b817ddc31d568676385dfd0c2b14a6febc0a5d1c8be6708bdb956d84a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0e1232b817ddc31d568676385dfd0c2b14a6febc0a5d1c8be6708bdb956d84a1->leave($__internal_0e1232b817ddc31d568676385dfd0c2b14a6febc0a5d1c8be6708bdb956d84a1_prof);

        
        $__internal_4b80f424a259723037fcdfa0911b70c8470f92db2c7d6f365125e88f69028585->leave($__internal_4b80f424a259723037fcdfa0911b70c8470f92db2c7d6f365125e88f69028585_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
