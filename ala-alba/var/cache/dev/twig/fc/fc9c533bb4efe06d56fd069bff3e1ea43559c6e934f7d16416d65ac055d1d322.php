<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_2dce0c1981558ef61a6cd2e388d514d13eb7562b745f0f0946ffc1622422a1e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_62b6ce1cc1cf97dc8ec899c923eaa091da94ea2330ea1581285b67abbf0b1389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62b6ce1cc1cf97dc8ec899c923eaa091da94ea2330ea1581285b67abbf0b1389->enter($__internal_62b6ce1cc1cf97dc8ec899c923eaa091da94ea2330ea1581285b67abbf0b1389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_33eddc6e5d8699907730f09a9354d5969687a2c6a646932b64c91e72d85dece8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33eddc6e5d8699907730f09a9354d5969687a2c6a646932b64c91e72d85dece8->enter($__internal_33eddc6e5d8699907730f09a9354d5969687a2c6a646932b64c91e72d85dece8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62b6ce1cc1cf97dc8ec899c923eaa091da94ea2330ea1581285b67abbf0b1389->leave($__internal_62b6ce1cc1cf97dc8ec899c923eaa091da94ea2330ea1581285b67abbf0b1389_prof);

        
        $__internal_33eddc6e5d8699907730f09a9354d5969687a2c6a646932b64c91e72d85dece8->leave($__internal_33eddc6e5d8699907730f09a9354d5969687a2c6a646932b64c91e72d85dece8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d195bc20ea09b9961d99e6b0816c78fa00a71a1df6590a3cd413871995f7e018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d195bc20ea09b9961d99e6b0816c78fa00a71a1df6590a3cd413871995f7e018->enter($__internal_d195bc20ea09b9961d99e6b0816c78fa00a71a1df6590a3cd413871995f7e018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_133b97708ef24973d49b2eee00dce9eec3f834b3299e07690008a53b3999f7e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133b97708ef24973d49b2eee00dce9eec3f834b3299e07690008a53b3999f7e5->enter($__internal_133b97708ef24973d49b2eee00dce9eec3f834b3299e07690008a53b3999f7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_133b97708ef24973d49b2eee00dce9eec3f834b3299e07690008a53b3999f7e5->leave($__internal_133b97708ef24973d49b2eee00dce9eec3f834b3299e07690008a53b3999f7e5_prof);

        
        $__internal_d195bc20ea09b9961d99e6b0816c78fa00a71a1df6590a3cd413871995f7e018->leave($__internal_d195bc20ea09b9961d99e6b0816c78fa00a71a1df6590a3cd413871995f7e018_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
