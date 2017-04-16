<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_ba7dfa9a7788ef2b5f0be8eaacc9f5c372adf35267cf20936dbd4ba1546e04fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5512034f0c1c0e4a2d4ba079c72ceb7c25e6d5f706f56f2fdc3dbe41b5d2076d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5512034f0c1c0e4a2d4ba079c72ceb7c25e6d5f706f56f2fdc3dbe41b5d2076d->enter($__internal_5512034f0c1c0e4a2d4ba079c72ceb7c25e6d5f706f56f2fdc3dbe41b5d2076d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_20ef52bda69605a0a2a510479a413210b1f339c1371d945aa39bf309bc11bd04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ef52bda69605a0a2a510479a413210b1f339c1371d945aa39bf309bc11bd04->enter($__internal_20ef52bda69605a0a2a510479a413210b1f339c1371d945aa39bf309bc11bd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5512034f0c1c0e4a2d4ba079c72ceb7c25e6d5f706f56f2fdc3dbe41b5d2076d->leave($__internal_5512034f0c1c0e4a2d4ba079c72ceb7c25e6d5f706f56f2fdc3dbe41b5d2076d_prof);

        
        $__internal_20ef52bda69605a0a2a510479a413210b1f339c1371d945aa39bf309bc11bd04->leave($__internal_20ef52bda69605a0a2a510479a413210b1f339c1371d945aa39bf309bc11bd04_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a53d3c9adaec83b9d68d7049a2b4a80336886c04095cfa0cc131077d878e5a80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a53d3c9adaec83b9d68d7049a2b4a80336886c04095cfa0cc131077d878e5a80->enter($__internal_a53d3c9adaec83b9d68d7049a2b4a80336886c04095cfa0cc131077d878e5a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_89be771979ac843ba722b42a05388741517f6ee3201101b8fae60c5caa7df789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89be771979ac843ba722b42a05388741517f6ee3201101b8fae60c5caa7df789->enter($__internal_89be771979ac843ba722b42a05388741517f6ee3201101b8fae60c5caa7df789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_89be771979ac843ba722b42a05388741517f6ee3201101b8fae60c5caa7df789->leave($__internal_89be771979ac843ba722b42a05388741517f6ee3201101b8fae60c5caa7df789_prof);

        
        $__internal_a53d3c9adaec83b9d68d7049a2b4a80336886c04095cfa0cc131077d878e5a80->leave($__internal_a53d3c9adaec83b9d68d7049a2b4a80336886c04095cfa0cc131077d878e5a80_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
