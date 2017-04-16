<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_c7e2c4612eb1cf57d742f78df75ccf4054d7e1f69f44a6f2c79ac8205429331b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_931b5766e18b0c7995544151564b1b35af32a0b7053f4084f5183fd179016c37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_931b5766e18b0c7995544151564b1b35af32a0b7053f4084f5183fd179016c37->enter($__internal_931b5766e18b0c7995544151564b1b35af32a0b7053f4084f5183fd179016c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_88bb2aca15da0a7560a2ad372511dfb9d9922d8040751d3dca3a62b9a21e2337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88bb2aca15da0a7560a2ad372511dfb9d9922d8040751d3dca3a62b9a21e2337->enter($__internal_88bb2aca15da0a7560a2ad372511dfb9d9922d8040751d3dca3a62b9a21e2337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_931b5766e18b0c7995544151564b1b35af32a0b7053f4084f5183fd179016c37->leave($__internal_931b5766e18b0c7995544151564b1b35af32a0b7053f4084f5183fd179016c37_prof);

        
        $__internal_88bb2aca15da0a7560a2ad372511dfb9d9922d8040751d3dca3a62b9a21e2337->leave($__internal_88bb2aca15da0a7560a2ad372511dfb9d9922d8040751d3dca3a62b9a21e2337_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_62d0d9dc72776bd35bf25ee18e7dc97cff4c7ca8979b12ba75da6033fb8a6b60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62d0d9dc72776bd35bf25ee18e7dc97cff4c7ca8979b12ba75da6033fb8a6b60->enter($__internal_62d0d9dc72776bd35bf25ee18e7dc97cff4c7ca8979b12ba75da6033fb8a6b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e9e054300cbddcd87e45cc45e33abf052aee99857532632d7446dcca2f803f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e054300cbddcd87e45cc45e33abf052aee99857532632d7446dcca2f803f84->enter($__internal_e9e054300cbddcd87e45cc45e33abf052aee99857532632d7446dcca2f803f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_e9e054300cbddcd87e45cc45e33abf052aee99857532632d7446dcca2f803f84->leave($__internal_e9e054300cbddcd87e45cc45e33abf052aee99857532632d7446dcca2f803f84_prof);

        
        $__internal_62d0d9dc72776bd35bf25ee18e7dc97cff4c7ca8979b12ba75da6033fb8a6b60->leave($__internal_62d0d9dc72776bd35bf25ee18e7dc97cff4c7ca8979b12ba75da6033fb8a6b60_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
