<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_80ee84299ef7f8c81bf4e7cde0d20f25b6fccaf60d312147ec8a989e1613c301 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_04cc4c1560c1490213df863494a3506ba95c0aeb783dd52874aa3968a06a24d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04cc4c1560c1490213df863494a3506ba95c0aeb783dd52874aa3968a06a24d6->enter($__internal_04cc4c1560c1490213df863494a3506ba95c0aeb783dd52874aa3968a06a24d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_657afce0a0d5633a1ecf607a078e19c7f0ebb35efb6a6743668cb4699c5c922f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_657afce0a0d5633a1ecf607a078e19c7f0ebb35efb6a6743668cb4699c5c922f->enter($__internal_657afce0a0d5633a1ecf607a078e19c7f0ebb35efb6a6743668cb4699c5c922f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04cc4c1560c1490213df863494a3506ba95c0aeb783dd52874aa3968a06a24d6->leave($__internal_04cc4c1560c1490213df863494a3506ba95c0aeb783dd52874aa3968a06a24d6_prof);

        
        $__internal_657afce0a0d5633a1ecf607a078e19c7f0ebb35efb6a6743668cb4699c5c922f->leave($__internal_657afce0a0d5633a1ecf607a078e19c7f0ebb35efb6a6743668cb4699c5c922f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e374b697d6b73da08bef1a4c4c7947e5ca31bc0784e82d04d50959df849f0f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e374b697d6b73da08bef1a4c4c7947e5ca31bc0784e82d04d50959df849f0f13->enter($__internal_e374b697d6b73da08bef1a4c4c7947e5ca31bc0784e82d04d50959df849f0f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2ff326758d66d308666a10ff7ad215fc35d7d3f0d1aa2d5d03c5b7b169888e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff326758d66d308666a10ff7ad215fc35d7d3f0d1aa2d5d03c5b7b169888e27->enter($__internal_2ff326758d66d308666a10ff7ad215fc35d7d3f0d1aa2d5d03c5b7b169888e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_2ff326758d66d308666a10ff7ad215fc35d7d3f0d1aa2d5d03c5b7b169888e27->leave($__internal_2ff326758d66d308666a10ff7ad215fc35d7d3f0d1aa2d5d03c5b7b169888e27_prof);

        
        $__internal_e374b697d6b73da08bef1a4c4c7947e5ca31bc0784e82d04d50959df849f0f13->leave($__internal_e374b697d6b73da08bef1a4c4c7947e5ca31bc0784e82d04d50959df849f0f13_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
