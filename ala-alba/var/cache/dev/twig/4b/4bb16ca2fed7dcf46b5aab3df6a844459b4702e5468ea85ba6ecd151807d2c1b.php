<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_bdbe02c4277300b06e2373ec1d0cb1cd335de0b1e79ab3df22cfb52c131360db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_fede0f1efbe4f831df25942c097e143a56d3af6122b327b806bb62da0aa83fdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fede0f1efbe4f831df25942c097e143a56d3af6122b327b806bb62da0aa83fdd->enter($__internal_fede0f1efbe4f831df25942c097e143a56d3af6122b327b806bb62da0aa83fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_671cb2654ada8ea42f408f2fe89f05854d5fdaa6f19b3f4907e6bf1a95f2bee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_671cb2654ada8ea42f408f2fe89f05854d5fdaa6f19b3f4907e6bf1a95f2bee6->enter($__internal_671cb2654ada8ea42f408f2fe89f05854d5fdaa6f19b3f4907e6bf1a95f2bee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fede0f1efbe4f831df25942c097e143a56d3af6122b327b806bb62da0aa83fdd->leave($__internal_fede0f1efbe4f831df25942c097e143a56d3af6122b327b806bb62da0aa83fdd_prof);

        
        $__internal_671cb2654ada8ea42f408f2fe89f05854d5fdaa6f19b3f4907e6bf1a95f2bee6->leave($__internal_671cb2654ada8ea42f408f2fe89f05854d5fdaa6f19b3f4907e6bf1a95f2bee6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05577587d03e51702bd31a98de474fb928351afd56fffdf87d51e7233f469275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05577587d03e51702bd31a98de474fb928351afd56fffdf87d51e7233f469275->enter($__internal_05577587d03e51702bd31a98de474fb928351afd56fffdf87d51e7233f469275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1f598625b9d9afcc21f94c38813b29ea69f706814a55ebd15d0bc27f37a7918b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f598625b9d9afcc21f94c38813b29ea69f706814a55ebd15d0bc27f37a7918b->enter($__internal_1f598625b9d9afcc21f94c38813b29ea69f706814a55ebd15d0bc27f37a7918b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_1f598625b9d9afcc21f94c38813b29ea69f706814a55ebd15d0bc27f37a7918b->leave($__internal_1f598625b9d9afcc21f94c38813b29ea69f706814a55ebd15d0bc27f37a7918b_prof);

        
        $__internal_05577587d03e51702bd31a98de474fb928351afd56fffdf87d51e7233f469275->leave($__internal_05577587d03e51702bd31a98de474fb928351afd56fffdf87d51e7233f469275_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
