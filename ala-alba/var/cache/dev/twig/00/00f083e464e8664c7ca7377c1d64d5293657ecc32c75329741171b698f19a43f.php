<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_599f8ef4b40f5ba37bc70e28075e47b037b4588dc56ad34f9e747f80c57c36af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_f3135efe35c937d9330179731861950bd7d5c3b3b67d138013e7c8370b002cce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3135efe35c937d9330179731861950bd7d5c3b3b67d138013e7c8370b002cce->enter($__internal_f3135efe35c937d9330179731861950bd7d5c3b3b67d138013e7c8370b002cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_d2f3a34eb2f104f21d14799c2576dbd8aedb7c073ff06bf9c025ce8dd0f0493c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f3a34eb2f104f21d14799c2576dbd8aedb7c073ff06bf9c025ce8dd0f0493c->enter($__internal_d2f3a34eb2f104f21d14799c2576dbd8aedb7c073ff06bf9c025ce8dd0f0493c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3135efe35c937d9330179731861950bd7d5c3b3b67d138013e7c8370b002cce->leave($__internal_f3135efe35c937d9330179731861950bd7d5c3b3b67d138013e7c8370b002cce_prof);

        
        $__internal_d2f3a34eb2f104f21d14799c2576dbd8aedb7c073ff06bf9c025ce8dd0f0493c->leave($__internal_d2f3a34eb2f104f21d14799c2576dbd8aedb7c073ff06bf9c025ce8dd0f0493c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e0d6992637c360b398f8f13510ca11b2aef4791fd91f04b609e3207010194a24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0d6992637c360b398f8f13510ca11b2aef4791fd91f04b609e3207010194a24->enter($__internal_e0d6992637c360b398f8f13510ca11b2aef4791fd91f04b609e3207010194a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8d46a710716d77147ccace1dafc6f48a87ce3cd5a1d51f10c20afae696e9e310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d46a710716d77147ccace1dafc6f48a87ce3cd5a1d51f10c20afae696e9e310->enter($__internal_8d46a710716d77147ccace1dafc6f48a87ce3cd5a1d51f10c20afae696e9e310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_8d46a710716d77147ccace1dafc6f48a87ce3cd5a1d51f10c20afae696e9e310->leave($__internal_8d46a710716d77147ccace1dafc6f48a87ce3cd5a1d51f10c20afae696e9e310_prof);

        
        $__internal_e0d6992637c360b398f8f13510ca11b2aef4791fd91f04b609e3207010194a24->leave($__internal_e0d6992637c360b398f8f13510ca11b2aef4791fd91f04b609e3207010194a24_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
