<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_56c8c119897379d9d61e3be7dfb3d301f5baab4873d51406a8d53b49d8901266 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_872db2a4f475f6c99e0fcfb04f07238aaa281f22592f9ea16bdd3cfe1bc46785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_872db2a4f475f6c99e0fcfb04f07238aaa281f22592f9ea16bdd3cfe1bc46785->enter($__internal_872db2a4f475f6c99e0fcfb04f07238aaa281f22592f9ea16bdd3cfe1bc46785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_cc28dd875094f6ca7e36fc74b75c05a3091c1eb0ee5e516d0c0a3ade90088c31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc28dd875094f6ca7e36fc74b75c05a3091c1eb0ee5e516d0c0a3ade90088c31->enter($__internal_cc28dd875094f6ca7e36fc74b75c05a3091c1eb0ee5e516d0c0a3ade90088c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_872db2a4f475f6c99e0fcfb04f07238aaa281f22592f9ea16bdd3cfe1bc46785->leave($__internal_872db2a4f475f6c99e0fcfb04f07238aaa281f22592f9ea16bdd3cfe1bc46785_prof);

        
        $__internal_cc28dd875094f6ca7e36fc74b75c05a3091c1eb0ee5e516d0c0a3ade90088c31->leave($__internal_cc28dd875094f6ca7e36fc74b75c05a3091c1eb0ee5e516d0c0a3ade90088c31_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80c64976ab8d10743c152c5926720e7ce3a954b80289141bedc690621dfb9174 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80c64976ab8d10743c152c5926720e7ce3a954b80289141bedc690621dfb9174->enter($__internal_80c64976ab8d10743c152c5926720e7ce3a954b80289141bedc690621dfb9174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_15b186a24dae3ab8fc544e73cfbfbcde2a8620b51ca2f88c40d218b2dc9624cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b186a24dae3ab8fc544e73cfbfbcde2a8620b51ca2f88c40d218b2dc9624cc->enter($__internal_15b186a24dae3ab8fc544e73cfbfbcde2a8620b51ca2f88c40d218b2dc9624cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_15b186a24dae3ab8fc544e73cfbfbcde2a8620b51ca2f88c40d218b2dc9624cc->leave($__internal_15b186a24dae3ab8fc544e73cfbfbcde2a8620b51ca2f88c40d218b2dc9624cc_prof);

        
        $__internal_80c64976ab8d10743c152c5926720e7ce3a954b80289141bedc690621dfb9174->leave($__internal_80c64976ab8d10743c152c5926720e7ce3a954b80289141bedc690621dfb9174_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
