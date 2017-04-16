<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_e6510cb3f2472d873137502a29a092ac7608cd605138769131b4dc78710c0282 extends Twig_Template
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
        $__internal_3ee5e307243acc414443377179f7bcce5bee9a2d90aec69905f8354ff8df70b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee5e307243acc414443377179f7bcce5bee9a2d90aec69905f8354ff8df70b9->enter($__internal_3ee5e307243acc414443377179f7bcce5bee9a2d90aec69905f8354ff8df70b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_a927fb8ca741fa18910a30a1a4ab1e6fa326d9d11a2fc43706a39fdfd60271bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a927fb8ca741fa18910a30a1a4ab1e6fa326d9d11a2fc43706a39fdfd60271bc->enter($__internal_a927fb8ca741fa18910a30a1a4ab1e6fa326d9d11a2fc43706a39fdfd60271bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3ee5e307243acc414443377179f7bcce5bee9a2d90aec69905f8354ff8df70b9->leave($__internal_3ee5e307243acc414443377179f7bcce5bee9a2d90aec69905f8354ff8df70b9_prof);

        
        $__internal_a927fb8ca741fa18910a30a1a4ab1e6fa326d9d11a2fc43706a39fdfd60271bc->leave($__internal_a927fb8ca741fa18910a30a1a4ab1e6fa326d9d11a2fc43706a39fdfd60271bc_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_950d2bf32535efbffd26a015baef4947fdd97622bc25a2c6818f04d69bddc100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_950d2bf32535efbffd26a015baef4947fdd97622bc25a2c6818f04d69bddc100->enter($__internal_950d2bf32535efbffd26a015baef4947fdd97622bc25a2c6818f04d69bddc100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_5799202cbe61f74d71d3c21210cf18b8ecca1d194c687a280f7c1e27af3b496c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5799202cbe61f74d71d3c21210cf18b8ecca1d194c687a280f7c1e27af3b496c->enter($__internal_5799202cbe61f74d71d3c21210cf18b8ecca1d194c687a280f7c1e27af3b496c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_5799202cbe61f74d71d3c21210cf18b8ecca1d194c687a280f7c1e27af3b496c->leave($__internal_5799202cbe61f74d71d3c21210cf18b8ecca1d194c687a280f7c1e27af3b496c_prof);

        
        $__internal_950d2bf32535efbffd26a015baef4947fdd97622bc25a2c6818f04d69bddc100->leave($__internal_950d2bf32535efbffd26a015baef4947fdd97622bc25a2c6818f04d69bddc100_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_12a8061dfcdd66d3fbe8214e4fb0fc455fa6bb3433d729809e3fd5d59bf03f9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12a8061dfcdd66d3fbe8214e4fb0fc455fa6bb3433d729809e3fd5d59bf03f9e->enter($__internal_12a8061dfcdd66d3fbe8214e4fb0fc455fa6bb3433d729809e3fd5d59bf03f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_c62f4285df7df0fecea1ad33780a701c3488292bb659db43b0709e254ed26229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c62f4285df7df0fecea1ad33780a701c3488292bb659db43b0709e254ed26229->enter($__internal_c62f4285df7df0fecea1ad33780a701c3488292bb659db43b0709e254ed26229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c62f4285df7df0fecea1ad33780a701c3488292bb659db43b0709e254ed26229->leave($__internal_c62f4285df7df0fecea1ad33780a701c3488292bb659db43b0709e254ed26229_prof);

        
        $__internal_12a8061dfcdd66d3fbe8214e4fb0fc455fa6bb3433d729809e3fd5d59bf03f9e->leave($__internal_12a8061dfcdd66d3fbe8214e4fb0fc455fa6bb3433d729809e3fd5d59bf03f9e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f0e67f72d2e6072c27469c7975bb21f5c6cea983d66608e2fb204d762cc6f3ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0e67f72d2e6072c27469c7975bb21f5c6cea983d66608e2fb204d762cc6f3ac->enter($__internal_f0e67f72d2e6072c27469c7975bb21f5c6cea983d66608e2fb204d762cc6f3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_542359ae16eaaa2d8ffed8139a40a8ac5c37e7726e59df9f59fd6bdb84932c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_542359ae16eaaa2d8ffed8139a40a8ac5c37e7726e59df9f59fd6bdb84932c3b->enter($__internal_542359ae16eaaa2d8ffed8139a40a8ac5c37e7726e59df9f59fd6bdb84932c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_542359ae16eaaa2d8ffed8139a40a8ac5c37e7726e59df9f59fd6bdb84932c3b->leave($__internal_542359ae16eaaa2d8ffed8139a40a8ac5c37e7726e59df9f59fd6bdb84932c3b_prof);

        
        $__internal_f0e67f72d2e6072c27469c7975bb21f5c6cea983d66608e2fb204d762cc6f3ac->leave($__internal_f0e67f72d2e6072c27469c7975bb21f5c6cea983d66608e2fb204d762cc6f3ac_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
