<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_592dddfbf26f841d1b3667a903647e5647d4e143af132c33da5fe9e1fe310401 extends Twig_Template
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
        $__internal_2df03162b6421565d8798f677605255e9f0c10cd96f0fe5d42a03e09d592a16b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2df03162b6421565d8798f677605255e9f0c10cd96f0fe5d42a03e09d592a16b->enter($__internal_2df03162b6421565d8798f677605255e9f0c10cd96f0fe5d42a03e09d592a16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_41027d494e1fdd7776faecf63dcd527d46626692a12d76acb039e5a1ebe67aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41027d494e1fdd7776faecf63dcd527d46626692a12d76acb039e5a1ebe67aef->enter($__internal_41027d494e1fdd7776faecf63dcd527d46626692a12d76acb039e5a1ebe67aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2df03162b6421565d8798f677605255e9f0c10cd96f0fe5d42a03e09d592a16b->leave($__internal_2df03162b6421565d8798f677605255e9f0c10cd96f0fe5d42a03e09d592a16b_prof);

        
        $__internal_41027d494e1fdd7776faecf63dcd527d46626692a12d76acb039e5a1ebe67aef->leave($__internal_41027d494e1fdd7776faecf63dcd527d46626692a12d76acb039e5a1ebe67aef_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e977c78b71eaceb74245c534c35e4d0301b36446b14257d986354b3ae981aaec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e977c78b71eaceb74245c534c35e4d0301b36446b14257d986354b3ae981aaec->enter($__internal_e977c78b71eaceb74245c534c35e4d0301b36446b14257d986354b3ae981aaec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_51640837d7c76fc765ed33a0a0d8a37e27e51d27199c6848e24ff92a050aa0fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51640837d7c76fc765ed33a0a0d8a37e27e51d27199c6848e24ff92a050aa0fe->enter($__internal_51640837d7c76fc765ed33a0a0d8a37e27e51d27199c6848e24ff92a050aa0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_51640837d7c76fc765ed33a0a0d8a37e27e51d27199c6848e24ff92a050aa0fe->leave($__internal_51640837d7c76fc765ed33a0a0d8a37e27e51d27199c6848e24ff92a050aa0fe_prof);

        
        $__internal_e977c78b71eaceb74245c534c35e4d0301b36446b14257d986354b3ae981aaec->leave($__internal_e977c78b71eaceb74245c534c35e4d0301b36446b14257d986354b3ae981aaec_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_77603e206b54930daff49ba648b8fd09562f6cf32dd7cea5fee61c2c8e49fee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77603e206b54930daff49ba648b8fd09562f6cf32dd7cea5fee61c2c8e49fee2->enter($__internal_77603e206b54930daff49ba648b8fd09562f6cf32dd7cea5fee61c2c8e49fee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_3f3632c2076af9a97feb568134d4fbcd2e65774f65742ffe6501c6f2048e75c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3632c2076af9a97feb568134d4fbcd2e65774f65742ffe6501c6f2048e75c9->enter($__internal_3f3632c2076af9a97feb568134d4fbcd2e65774f65742ffe6501c6f2048e75c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3f3632c2076af9a97feb568134d4fbcd2e65774f65742ffe6501c6f2048e75c9->leave($__internal_3f3632c2076af9a97feb568134d4fbcd2e65774f65742ffe6501c6f2048e75c9_prof);

        
        $__internal_77603e206b54930daff49ba648b8fd09562f6cf32dd7cea5fee61c2c8e49fee2->leave($__internal_77603e206b54930daff49ba648b8fd09562f6cf32dd7cea5fee61c2c8e49fee2_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a83d0c718669973cd584161281388b7f2956ec1d81f99b272de6ef04cc13c000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a83d0c718669973cd584161281388b7f2956ec1d81f99b272de6ef04cc13c000->enter($__internal_a83d0c718669973cd584161281388b7f2956ec1d81f99b272de6ef04cc13c000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_696a5dcd432660365eb516c23e2176bbe8c13af3adb6ea702977da2eb3686c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696a5dcd432660365eb516c23e2176bbe8c13af3adb6ea702977da2eb3686c5e->enter($__internal_696a5dcd432660365eb516c23e2176bbe8c13af3adb6ea702977da2eb3686c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_696a5dcd432660365eb516c23e2176bbe8c13af3adb6ea702977da2eb3686c5e->leave($__internal_696a5dcd432660365eb516c23e2176bbe8c13af3adb6ea702977da2eb3686c5e_prof);

        
        $__internal_a83d0c718669973cd584161281388b7f2956ec1d81f99b272de6ef04cc13c000->leave($__internal_a83d0c718669973cd584161281388b7f2956ec1d81f99b272de6ef04cc13c000_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
