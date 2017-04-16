<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_d5a0b51378c0c03886d5483a7bed9e897177cc46dad8168710b208d514095b3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_beb9857047759d592cb24f6e7846e135ce79b1993b9a5b7160ce1ccd8fb1b7cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beb9857047759d592cb24f6e7846e135ce79b1993b9a5b7160ce1ccd8fb1b7cf->enter($__internal_beb9857047759d592cb24f6e7846e135ce79b1993b9a5b7160ce1ccd8fb1b7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_964157b1656514ad5998834bd060dae6addefa03ab53e18d7946eb68db151a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964157b1656514ad5998834bd060dae6addefa03ab53e18d7946eb68db151a85->enter($__internal_964157b1656514ad5998834bd060dae6addefa03ab53e18d7946eb68db151a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_beb9857047759d592cb24f6e7846e135ce79b1993b9a5b7160ce1ccd8fb1b7cf->leave($__internal_beb9857047759d592cb24f6e7846e135ce79b1993b9a5b7160ce1ccd8fb1b7cf_prof);

        
        $__internal_964157b1656514ad5998834bd060dae6addefa03ab53e18d7946eb68db151a85->leave($__internal_964157b1656514ad5998834bd060dae6addefa03ab53e18d7946eb68db151a85_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_00a6f096f714d765de8b807c5bf0b01acc19a16c01113085d6c09b90481f5ab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00a6f096f714d765de8b807c5bf0b01acc19a16c01113085d6c09b90481f5ab9->enter($__internal_00a6f096f714d765de8b807c5bf0b01acc19a16c01113085d6c09b90481f5ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_222d27830a3c019b85d751a46477c17ac7af6d2f1cbf904894f49acb0f9840bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_222d27830a3c019b85d751a46477c17ac7af6d2f1cbf904894f49acb0f9840bc->enter($__internal_222d27830a3c019b85d751a46477c17ac7af6d2f1cbf904894f49acb0f9840bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_222d27830a3c019b85d751a46477c17ac7af6d2f1cbf904894f49acb0f9840bc->leave($__internal_222d27830a3c019b85d751a46477c17ac7af6d2f1cbf904894f49acb0f9840bc_prof);

        
        $__internal_00a6f096f714d765de8b807c5bf0b01acc19a16c01113085d6c09b90481f5ab9->leave($__internal_00a6f096f714d765de8b807c5bf0b01acc19a16c01113085d6c09b90481f5ab9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
