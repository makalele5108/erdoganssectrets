<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_4baf3292023e2bf91c14eceb81deda4e1f55d3eda43211e0537863fd99799431 extends Twig_Template
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
        $__internal_dae1a5e07f881476a2f97a7e548b9a40fe181319648453d9ba910d468938c512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae1a5e07f881476a2f97a7e548b9a40fe181319648453d9ba910d468938c512->enter($__internal_dae1a5e07f881476a2f97a7e548b9a40fe181319648453d9ba910d468938c512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_b263e0e85fc7025ecfacda0d09d9278bef3ef9bbbbc70b8bff7cc4739f57fb6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b263e0e85fc7025ecfacda0d09d9278bef3ef9bbbbc70b8bff7cc4739f57fb6c->enter($__internal_b263e0e85fc7025ecfacda0d09d9278bef3ef9bbbbc70b8bff7cc4739f57fb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_dae1a5e07f881476a2f97a7e548b9a40fe181319648453d9ba910d468938c512->leave($__internal_dae1a5e07f881476a2f97a7e548b9a40fe181319648453d9ba910d468938c512_prof);

        
        $__internal_b263e0e85fc7025ecfacda0d09d9278bef3ef9bbbbc70b8bff7cc4739f57fb6c->leave($__internal_b263e0e85fc7025ecfacda0d09d9278bef3ef9bbbbc70b8bff7cc4739f57fb6c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1c100eb8df19d1a1f5131f4b9b105c52e315106694bdb92a28f41bccbdb977aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c100eb8df19d1a1f5131f4b9b105c52e315106694bdb92a28f41bccbdb977aa->enter($__internal_1c100eb8df19d1a1f5131f4b9b105c52e315106694bdb92a28f41bccbdb977aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_358ae3bed5cd1a46c50def36e817f1a8e157c5242f699d95c9c1c43a34eb6808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_358ae3bed5cd1a46c50def36e817f1a8e157c5242f699d95c9c1c43a34eb6808->enter($__internal_358ae3bed5cd1a46c50def36e817f1a8e157c5242f699d95c9c1c43a34eb6808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_358ae3bed5cd1a46c50def36e817f1a8e157c5242f699d95c9c1c43a34eb6808->leave($__internal_358ae3bed5cd1a46c50def36e817f1a8e157c5242f699d95c9c1c43a34eb6808_prof);

        
        $__internal_1c100eb8df19d1a1f5131f4b9b105c52e315106694bdb92a28f41bccbdb977aa->leave($__internal_1c100eb8df19d1a1f5131f4b9b105c52e315106694bdb92a28f41bccbdb977aa_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_65ed1ff695b8012b75815f80e5a451856ea31f528fc8fb03520fb0e1ae3adfa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65ed1ff695b8012b75815f80e5a451856ea31f528fc8fb03520fb0e1ae3adfa9->enter($__internal_65ed1ff695b8012b75815f80e5a451856ea31f528fc8fb03520fb0e1ae3adfa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_cba7aab11f341cc8541a2198873e50196468372e12774722e31d8c3f8153f3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba7aab11f341cc8541a2198873e50196468372e12774722e31d8c3f8153f3e6->enter($__internal_cba7aab11f341cc8541a2198873e50196468372e12774722e31d8c3f8153f3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cba7aab11f341cc8541a2198873e50196468372e12774722e31d8c3f8153f3e6->leave($__internal_cba7aab11f341cc8541a2198873e50196468372e12774722e31d8c3f8153f3e6_prof);

        
        $__internal_65ed1ff695b8012b75815f80e5a451856ea31f528fc8fb03520fb0e1ae3adfa9->leave($__internal_65ed1ff695b8012b75815f80e5a451856ea31f528fc8fb03520fb0e1ae3adfa9_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2c051a148fb4e88134ac071aade6d667a49be36f41d52592c0b5fb9c502da98b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c051a148fb4e88134ac071aade6d667a49be36f41d52592c0b5fb9c502da98b->enter($__internal_2c051a148fb4e88134ac071aade6d667a49be36f41d52592c0b5fb9c502da98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_83b398b13a20c22eecfaae46034d68a8e937d9669516bafe30937ffec9f9fc46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b398b13a20c22eecfaae46034d68a8e937d9669516bafe30937ffec9f9fc46->enter($__internal_83b398b13a20c22eecfaae46034d68a8e937d9669516bafe30937ffec9f9fc46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_83b398b13a20c22eecfaae46034d68a8e937d9669516bafe30937ffec9f9fc46->leave($__internal_83b398b13a20c22eecfaae46034d68a8e937d9669516bafe30937ffec9f9fc46_prof);

        
        $__internal_2c051a148fb4e88134ac071aade6d667a49be36f41d52592c0b5fb9c502da98b->leave($__internal_2c051a148fb4e88134ac071aade6d667a49be36f41d52592c0b5fb9c502da98b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
", "@FOSUser/Resetting/email.txt.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
