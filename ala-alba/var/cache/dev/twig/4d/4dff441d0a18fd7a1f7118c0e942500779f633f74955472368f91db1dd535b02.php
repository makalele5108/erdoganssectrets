<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_f945decd22c4ec8b30350921c3d9b9d7aa3562a3e45b5e0841083d901c613d90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d063fd69704ee8281475569267a222c2244fb155519dead813d7d2b178bdb192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d063fd69704ee8281475569267a222c2244fb155519dead813d7d2b178bdb192->enter($__internal_d063fd69704ee8281475569267a222c2244fb155519dead813d7d2b178bdb192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_789a25cfcb5487446d028ba6444056cfaf1700d842208530b8438e9841669e95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789a25cfcb5487446d028ba6444056cfaf1700d842208530b8438e9841669e95->enter($__internal_789a25cfcb5487446d028ba6444056cfaf1700d842208530b8438e9841669e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d063fd69704ee8281475569267a222c2244fb155519dead813d7d2b178bdb192->leave($__internal_d063fd69704ee8281475569267a222c2244fb155519dead813d7d2b178bdb192_prof);

        
        $__internal_789a25cfcb5487446d028ba6444056cfaf1700d842208530b8438e9841669e95->leave($__internal_789a25cfcb5487446d028ba6444056cfaf1700d842208530b8438e9841669e95_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_05aff9ec9e41c648ddbd0770cd612ee00d059c3a23a6879a16f875185a3df4bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05aff9ec9e41c648ddbd0770cd612ee00d059c3a23a6879a16f875185a3df4bd->enter($__internal_05aff9ec9e41c648ddbd0770cd612ee00d059c3a23a6879a16f875185a3df4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4366dc7ea075629d479e7957fbb48b71e5f46069fd46c2b19f4c0414fab691be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4366dc7ea075629d479e7957fbb48b71e5f46069fd46c2b19f4c0414fab691be->enter($__internal_4366dc7ea075629d479e7957fbb48b71e5f46069fd46c2b19f4c0414fab691be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4366dc7ea075629d479e7957fbb48b71e5f46069fd46c2b19f4c0414fab691be->leave($__internal_4366dc7ea075629d479e7957fbb48b71e5f46069fd46c2b19f4c0414fab691be_prof);

        
        $__internal_05aff9ec9e41c648ddbd0770cd612ee00d059c3a23a6879a16f875185a3df4bd->leave($__internal_05aff9ec9e41c648ddbd0770cd612ee00d059c3a23a6879a16f875185a3df4bd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9d3f727fa96cf2023a0ebf0af88df1e612e044eec9149fc7c989f340f6fa9e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9d3f727fa96cf2023a0ebf0af88df1e612e044eec9149fc7c989f340f6fa9e0->enter($__internal_b9d3f727fa96cf2023a0ebf0af88df1e612e044eec9149fc7c989f340f6fa9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8861613b74e92b4d73f2bf8ce18bc250b05b47081074a5df7f19cdb19b11351f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8861613b74e92b4d73f2bf8ce18bc250b05b47081074a5df7f19cdb19b11351f->enter($__internal_8861613b74e92b4d73f2bf8ce18bc250b05b47081074a5df7f19cdb19b11351f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8861613b74e92b4d73f2bf8ce18bc250b05b47081074a5df7f19cdb19b11351f->leave($__internal_8861613b74e92b4d73f2bf8ce18bc250b05b47081074a5df7f19cdb19b11351f_prof);

        
        $__internal_b9d3f727fa96cf2023a0ebf0af88df1e612e044eec9149fc7c989f340f6fa9e0->leave($__internal_b9d3f727fa96cf2023a0ebf0af88df1e612e044eec9149fc7c989f340f6fa9e0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
