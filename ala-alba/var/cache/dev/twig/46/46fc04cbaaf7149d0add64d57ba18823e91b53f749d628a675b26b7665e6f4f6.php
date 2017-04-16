<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_ef129ae217f27862d3dc62beceb63d555df0ad5ac830e80b7df84f96b87735ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_016747c457d71f0e218ef94fa9ba2a7008a929fb2531e5cbb8267e72135632ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_016747c457d71f0e218ef94fa9ba2a7008a929fb2531e5cbb8267e72135632ae->enter($__internal_016747c457d71f0e218ef94fa9ba2a7008a929fb2531e5cbb8267e72135632ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_4ca01e13a961dd475f0920ca66fc132da4a98ce3fefacf0350c2575a6600f9c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca01e13a961dd475f0920ca66fc132da4a98ce3fefacf0350c2575a6600f9c1->enter($__internal_4ca01e13a961dd475f0920ca66fc132da4a98ce3fefacf0350c2575a6600f9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_016747c457d71f0e218ef94fa9ba2a7008a929fb2531e5cbb8267e72135632ae->leave($__internal_016747c457d71f0e218ef94fa9ba2a7008a929fb2531e5cbb8267e72135632ae_prof);

        
        $__internal_4ca01e13a961dd475f0920ca66fc132da4a98ce3fefacf0350c2575a6600f9c1->leave($__internal_4ca01e13a961dd475f0920ca66fc132da4a98ce3fefacf0350c2575a6600f9c1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c272de791f3831a55335d0173f5382bed67dfa8b89accdc469cfb6fe479169d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c272de791f3831a55335d0173f5382bed67dfa8b89accdc469cfb6fe479169d5->enter($__internal_c272de791f3831a55335d0173f5382bed67dfa8b89accdc469cfb6fe479169d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_3c2777b23ba8ff8f02c687530e87a12403e9fc145ee7b0194ea310660f99d944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c2777b23ba8ff8f02c687530e87a12403e9fc145ee7b0194ea310660f99d944->enter($__internal_3c2777b23ba8ff8f02c687530e87a12403e9fc145ee7b0194ea310660f99d944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_3c2777b23ba8ff8f02c687530e87a12403e9fc145ee7b0194ea310660f99d944->leave($__internal_3c2777b23ba8ff8f02c687530e87a12403e9fc145ee7b0194ea310660f99d944_prof);

        
        $__internal_c272de791f3831a55335d0173f5382bed67dfa8b89accdc469cfb6fe479169d5->leave($__internal_c272de791f3831a55335d0173f5382bed67dfa8b89accdc469cfb6fe479169d5_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_912a930433ab8ca23bace2f4925fd0022df445291939d7afcc25e9b2063eee18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_912a930433ab8ca23bace2f4925fd0022df445291939d7afcc25e9b2063eee18->enter($__internal_912a930433ab8ca23bace2f4925fd0022df445291939d7afcc25e9b2063eee18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_5ea306c379279bdd04914f6035d5048f71d7eee7ac55bdd670ad489500fbb915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea306c379279bdd04914f6035d5048f71d7eee7ac55bdd670ad489500fbb915->enter($__internal_5ea306c379279bdd04914f6035d5048f71d7eee7ac55bdd670ad489500fbb915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5ea306c379279bdd04914f6035d5048f71d7eee7ac55bdd670ad489500fbb915->leave($__internal_5ea306c379279bdd04914f6035d5048f71d7eee7ac55bdd670ad489500fbb915_prof);

        
        $__internal_912a930433ab8ca23bace2f4925fd0022df445291939d7afcc25e9b2063eee18->leave($__internal_912a930433ab8ca23bace2f4925fd0022df445291939d7afcc25e9b2063eee18_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_99bd2672d248dbedff2daf8f9bad7b5295930bae323e375a1260574f9abb7d5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99bd2672d248dbedff2daf8f9bad7b5295930bae323e375a1260574f9abb7d5d->enter($__internal_99bd2672d248dbedff2daf8f9bad7b5295930bae323e375a1260574f9abb7d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_565cd2aad05d0acffd35c379baabcb7103bd781f9b8d0fac8b5aa92f065c0d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_565cd2aad05d0acffd35c379baabcb7103bd781f9b8d0fac8b5aa92f065c0d3e->enter($__internal_565cd2aad05d0acffd35c379baabcb7103bd781f9b8d0fac8b5aa92f065c0d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_565cd2aad05d0acffd35c379baabcb7103bd781f9b8d0fac8b5aa92f065c0d3e->leave($__internal_565cd2aad05d0acffd35c379baabcb7103bd781f9b8d0fac8b5aa92f065c0d3e_prof);

        
        $__internal_99bd2672d248dbedff2daf8f9bad7b5295930bae323e375a1260574f9abb7d5d->leave($__internal_99bd2672d248dbedff2daf8f9bad7b5295930bae323e375a1260574f9abb7d5d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
