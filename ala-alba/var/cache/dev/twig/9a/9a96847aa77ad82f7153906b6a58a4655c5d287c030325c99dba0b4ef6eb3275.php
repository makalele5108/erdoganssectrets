<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_986b59441a5e4608535818a48f565b6475ebbd02f24ec6c94a8f938cc9538e97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_1375672edbfb29e2394e4748756a2ed96e04117a9e33adde2e3bbe9f451f7a7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1375672edbfb29e2394e4748756a2ed96e04117a9e33adde2e3bbe9f451f7a7e->enter($__internal_1375672edbfb29e2394e4748756a2ed96e04117a9e33adde2e3bbe9f451f7a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_74e2870577706ecc4881941f6784c54d4678d180447167d15b8e87399878fead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e2870577706ecc4881941f6784c54d4678d180447167d15b8e87399878fead->enter($__internal_74e2870577706ecc4881941f6784c54d4678d180447167d15b8e87399878fead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1375672edbfb29e2394e4748756a2ed96e04117a9e33adde2e3bbe9f451f7a7e->leave($__internal_1375672edbfb29e2394e4748756a2ed96e04117a9e33adde2e3bbe9f451f7a7e_prof);

        
        $__internal_74e2870577706ecc4881941f6784c54d4678d180447167d15b8e87399878fead->leave($__internal_74e2870577706ecc4881941f6784c54d4678d180447167d15b8e87399878fead_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96f1b326197154925dbbe6e23f2e6d181cdbcb3bf37de81de56ded50f5d44672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f1b326197154925dbbe6e23f2e6d181cdbcb3bf37de81de56ded50f5d44672->enter($__internal_96f1b326197154925dbbe6e23f2e6d181cdbcb3bf37de81de56ded50f5d44672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_649536975b04689482e69a4209281078dba7236accbb7c38fc8297252c08a8eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_649536975b04689482e69a4209281078dba7236accbb7c38fc8297252c08a8eb->enter($__internal_649536975b04689482e69a4209281078dba7236accbb7c38fc8297252c08a8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_649536975b04689482e69a4209281078dba7236accbb7c38fc8297252c08a8eb->leave($__internal_649536975b04689482e69a4209281078dba7236accbb7c38fc8297252c08a8eb_prof);

        
        $__internal_96f1b326197154925dbbe6e23f2e6d181cdbcb3bf37de81de56ded50f5d44672->leave($__internal_96f1b326197154925dbbe6e23f2e6d181cdbcb3bf37de81de56ded50f5d44672_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
