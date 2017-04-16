<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_ec7f7d9f3b0b04d8daf248e8a1c3192de8570a70c148ebc458f409fac6b78387 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_9bfed2c8a8793d2f53c469c92c88e787fb97f26549c28683c88c360bbb95ac33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bfed2c8a8793d2f53c469c92c88e787fb97f26549c28683c88c360bbb95ac33->enter($__internal_9bfed2c8a8793d2f53c469c92c88e787fb97f26549c28683c88c360bbb95ac33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_53d234dbef3822f75b41f4a97ab3deb7cfa09097211c7a66652ce6a0d18e526d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53d234dbef3822f75b41f4a97ab3deb7cfa09097211c7a66652ce6a0d18e526d->enter($__internal_53d234dbef3822f75b41f4a97ab3deb7cfa09097211c7a66652ce6a0d18e526d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bfed2c8a8793d2f53c469c92c88e787fb97f26549c28683c88c360bbb95ac33->leave($__internal_9bfed2c8a8793d2f53c469c92c88e787fb97f26549c28683c88c360bbb95ac33_prof);

        
        $__internal_53d234dbef3822f75b41f4a97ab3deb7cfa09097211c7a66652ce6a0d18e526d->leave($__internal_53d234dbef3822f75b41f4a97ab3deb7cfa09097211c7a66652ce6a0d18e526d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4615cb554a414ccd7d3627e4fb5c5419af010f5b9f5086a5f0b171a1477ae085 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4615cb554a414ccd7d3627e4fb5c5419af010f5b9f5086a5f0b171a1477ae085->enter($__internal_4615cb554a414ccd7d3627e4fb5c5419af010f5b9f5086a5f0b171a1477ae085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f1953c3450e135ecaf4c66d46901504186c93a80ec7a45694fb88c13db16d653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1953c3450e135ecaf4c66d46901504186c93a80ec7a45694fb88c13db16d653->enter($__internal_f1953c3450e135ecaf4c66d46901504186c93a80ec7a45694fb88c13db16d653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_f1953c3450e135ecaf4c66d46901504186c93a80ec7a45694fb88c13db16d653->leave($__internal_f1953c3450e135ecaf4c66d46901504186c93a80ec7a45694fb88c13db16d653_prof);

        
        $__internal_4615cb554a414ccd7d3627e4fb5c5419af010f5b9f5086a5f0b171a1477ae085->leave($__internal_4615cb554a414ccd7d3627e4fb5c5419af010f5b9f5086a5f0b171a1477ae085_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
", "@FOSUser/Registration/confirmed.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
