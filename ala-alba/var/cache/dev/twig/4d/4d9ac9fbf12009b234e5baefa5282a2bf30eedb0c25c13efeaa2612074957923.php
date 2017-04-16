<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_db7073c8925af522bef9b568f0ed1138269d8b8b459d2b6682f511f7e9f24003 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_6baf6e9e463f143d9f348391eb33d9fa8c75547287fe5714d6b2eeec983b0b61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6baf6e9e463f143d9f348391eb33d9fa8c75547287fe5714d6b2eeec983b0b61->enter($__internal_6baf6e9e463f143d9f348391eb33d9fa8c75547287fe5714d6b2eeec983b0b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_351172a9a575a38ab5a77527a55e5c6cc55e9f31bb8eac895d86db8aedf02e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351172a9a575a38ab5a77527a55e5c6cc55e9f31bb8eac895d86db8aedf02e27->enter($__internal_351172a9a575a38ab5a77527a55e5c6cc55e9f31bb8eac895d86db8aedf02e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6baf6e9e463f143d9f348391eb33d9fa8c75547287fe5714d6b2eeec983b0b61->leave($__internal_6baf6e9e463f143d9f348391eb33d9fa8c75547287fe5714d6b2eeec983b0b61_prof);

        
        $__internal_351172a9a575a38ab5a77527a55e5c6cc55e9f31bb8eac895d86db8aedf02e27->leave($__internal_351172a9a575a38ab5a77527a55e5c6cc55e9f31bb8eac895d86db8aedf02e27_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e99880aff5ada1da6adc7a9384f5d9c1a3f3cee8c9dc7c638e8ad4dbd2aaca3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e99880aff5ada1da6adc7a9384f5d9c1a3f3cee8c9dc7c638e8ad4dbd2aaca3e->enter($__internal_e99880aff5ada1da6adc7a9384f5d9c1a3f3cee8c9dc7c638e8ad4dbd2aaca3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b4d87408353841d58c37c66eaf19b5fcea5555b85832aca1511a1f73c2cdf4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d87408353841d58c37c66eaf19b5fcea5555b85832aca1511a1f73c2cdf4d2->enter($__internal_b4d87408353841d58c37c66eaf19b5fcea5555b85832aca1511a1f73c2cdf4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_b4d87408353841d58c37c66eaf19b5fcea5555b85832aca1511a1f73c2cdf4d2->leave($__internal_b4d87408353841d58c37c66eaf19b5fcea5555b85832aca1511a1f73c2cdf4d2_prof);

        
        $__internal_e99880aff5ada1da6adc7a9384f5d9c1a3f3cee8c9dc7c638e8ad4dbd2aaca3e->leave($__internal_e99880aff5ada1da6adc7a9384f5d9c1a3f3cee8c9dc7c638e8ad4dbd2aaca3e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
", "FOSUserBundle:Group:show.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
