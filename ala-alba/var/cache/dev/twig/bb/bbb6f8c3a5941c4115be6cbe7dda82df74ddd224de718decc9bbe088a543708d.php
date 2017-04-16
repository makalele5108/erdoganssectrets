<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_d691f38a42499a34a98cc0d2964754d2f987b9860ae8b528fe7802c025603cc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_383534d663a310f3b92eb7fa57e97cf3394cd3e565d981677afdd38a8169ff4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_383534d663a310f3b92eb7fa57e97cf3394cd3e565d981677afdd38a8169ff4b->enter($__internal_383534d663a310f3b92eb7fa57e97cf3394cd3e565d981677afdd38a8169ff4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_0e92112318e338c13cc3db8be96266cb0aa2137f6f6a23b80dff28bea7deaa8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e92112318e338c13cc3db8be96266cb0aa2137f6f6a23b80dff28bea7deaa8b->enter($__internal_0e92112318e338c13cc3db8be96266cb0aa2137f6f6a23b80dff28bea7deaa8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_383534d663a310f3b92eb7fa57e97cf3394cd3e565d981677afdd38a8169ff4b->leave($__internal_383534d663a310f3b92eb7fa57e97cf3394cd3e565d981677afdd38a8169ff4b_prof);

        
        $__internal_0e92112318e338c13cc3db8be96266cb0aa2137f6f6a23b80dff28bea7deaa8b->leave($__internal_0e92112318e338c13cc3db8be96266cb0aa2137f6f6a23b80dff28bea7deaa8b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_531a5c360c7d19912d21373958adf12e2ee996aa786b7ead2b546cc30a3d1660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_531a5c360c7d19912d21373958adf12e2ee996aa786b7ead2b546cc30a3d1660->enter($__internal_531a5c360c7d19912d21373958adf12e2ee996aa786b7ead2b546cc30a3d1660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b50f82ccb8f7c9452f80ed8f4aa11b8def0466f9f70884ee697dbee774328714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50f82ccb8f7c9452f80ed8f4aa11b8def0466f9f70884ee697dbee774328714->enter($__internal_b50f82ccb8f7c9452f80ed8f4aa11b8def0466f9f70884ee697dbee774328714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b50f82ccb8f7c9452f80ed8f4aa11b8def0466f9f70884ee697dbee774328714->leave($__internal_b50f82ccb8f7c9452f80ed8f4aa11b8def0466f9f70884ee697dbee774328714_prof);

        
        $__internal_531a5c360c7d19912d21373958adf12e2ee996aa786b7ead2b546cc30a3d1660->leave($__internal_531a5c360c7d19912d21373958adf12e2ee996aa786b7ead2b546cc30a3d1660_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e200dd88595469d395553cf7e7f534cdbc5ef8b09b2d31178f4634c3abc5a8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e200dd88595469d395553cf7e7f534cdbc5ef8b09b2d31178f4634c3abc5a8a->enter($__internal_6e200dd88595469d395553cf7e7f534cdbc5ef8b09b2d31178f4634c3abc5a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_12cdaab185c8265f83fbc5901dbbabc30547eb11a593a3e592ad1771e2a5ba05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12cdaab185c8265f83fbc5901dbbabc30547eb11a593a3e592ad1771e2a5ba05->enter($__internal_12cdaab185c8265f83fbc5901dbbabc30547eb11a593a3e592ad1771e2a5ba05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_12cdaab185c8265f83fbc5901dbbabc30547eb11a593a3e592ad1771e2a5ba05->leave($__internal_12cdaab185c8265f83fbc5901dbbabc30547eb11a593a3e592ad1771e2a5ba05_prof);

        
        $__internal_6e200dd88595469d395553cf7e7f534cdbc5ef8b09b2d31178f4634c3abc5a8a->leave($__internal_6e200dd88595469d395553cf7e7f534cdbc5ef8b09b2d31178f4634c3abc5a8a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
