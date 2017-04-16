<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_3d7e9811e51b16c0fd9b1755abf1f1d58ea7419d2e00274a2fafecdfdca2b032 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_bde4243182d2c08af06eb224666b0d88428896bb78dfe07ab97f89bbdbdbf8dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bde4243182d2c08af06eb224666b0d88428896bb78dfe07ab97f89bbdbdbf8dc->enter($__internal_bde4243182d2c08af06eb224666b0d88428896bb78dfe07ab97f89bbdbdbf8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_487799c85714229e4bb12df06854691165189aa2197ba70e275e8eba82a437d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_487799c85714229e4bb12df06854691165189aa2197ba70e275e8eba82a437d6->enter($__internal_487799c85714229e4bb12df06854691165189aa2197ba70e275e8eba82a437d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bde4243182d2c08af06eb224666b0d88428896bb78dfe07ab97f89bbdbdbf8dc->leave($__internal_bde4243182d2c08af06eb224666b0d88428896bb78dfe07ab97f89bbdbdbf8dc_prof);

        
        $__internal_487799c85714229e4bb12df06854691165189aa2197ba70e275e8eba82a437d6->leave($__internal_487799c85714229e4bb12df06854691165189aa2197ba70e275e8eba82a437d6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f1a4a32270fdbe06b0c883c08af48c38fab7839be77537a8df3d4e97c8be391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1a4a32270fdbe06b0c883c08af48c38fab7839be77537a8df3d4e97c8be391->enter($__internal_2f1a4a32270fdbe06b0c883c08af48c38fab7839be77537a8df3d4e97c8be391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d47424c93ec0e2d4e4d2f3783de8c157adbf292c98005bf3e0c0e9c407552ea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d47424c93ec0e2d4e4d2f3783de8c157adbf292c98005bf3e0c0e9c407552ea0->enter($__internal_d47424c93ec0e2d4e4d2f3783de8c157adbf292c98005bf3e0c0e9c407552ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_d47424c93ec0e2d4e4d2f3783de8c157adbf292c98005bf3e0c0e9c407552ea0->leave($__internal_d47424c93ec0e2d4e4d2f3783de8c157adbf292c98005bf3e0c0e9c407552ea0_prof);

        
        $__internal_2f1a4a32270fdbe06b0c883c08af48c38fab7839be77537a8df3d4e97c8be391->leave($__internal_2f1a4a32270fdbe06b0c883c08af48c38fab7839be77537a8df3d4e97c8be391_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
