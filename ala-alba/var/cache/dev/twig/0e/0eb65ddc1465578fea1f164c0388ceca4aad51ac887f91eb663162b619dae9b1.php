<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_bdfdfb4924447c698457841712bf9b1d8e1162282e2a02ddb862ca000ac180c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_86d639e35edf70d81767dce994b6380fa53e8742b0c942bdd46e91fb74d15b29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86d639e35edf70d81767dce994b6380fa53e8742b0c942bdd46e91fb74d15b29->enter($__internal_86d639e35edf70d81767dce994b6380fa53e8742b0c942bdd46e91fb74d15b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_106a3871c6d336c2270216594934ccb1fb9e526bf06c5e61a686dae30f183b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_106a3871c6d336c2270216594934ccb1fb9e526bf06c5e61a686dae30f183b70->enter($__internal_106a3871c6d336c2270216594934ccb1fb9e526bf06c5e61a686dae30f183b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86d639e35edf70d81767dce994b6380fa53e8742b0c942bdd46e91fb74d15b29->leave($__internal_86d639e35edf70d81767dce994b6380fa53e8742b0c942bdd46e91fb74d15b29_prof);

        
        $__internal_106a3871c6d336c2270216594934ccb1fb9e526bf06c5e61a686dae30f183b70->leave($__internal_106a3871c6d336c2270216594934ccb1fb9e526bf06c5e61a686dae30f183b70_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_125e3fb8173b52d0211d78add3abffb28c815870e844a07216312708f0a9e3bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_125e3fb8173b52d0211d78add3abffb28c815870e844a07216312708f0a9e3bb->enter($__internal_125e3fb8173b52d0211d78add3abffb28c815870e844a07216312708f0a9e3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9b712af9e2e87a37596da66354671d1ecf5f1fc8656ff91d6c3ddd1311d583f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b712af9e2e87a37596da66354671d1ecf5f1fc8656ff91d6c3ddd1311d583f4->enter($__internal_9b712af9e2e87a37596da66354671d1ecf5f1fc8656ff91d6c3ddd1311d583f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_9b712af9e2e87a37596da66354671d1ecf5f1fc8656ff91d6c3ddd1311d583f4->leave($__internal_9b712af9e2e87a37596da66354671d1ecf5f1fc8656ff91d6c3ddd1311d583f4_prof);

        
        $__internal_125e3fb8173b52d0211d78add3abffb28c815870e844a07216312708f0a9e3bb->leave($__internal_125e3fb8173b52d0211d78add3abffb28c815870e844a07216312708f0a9e3bb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
