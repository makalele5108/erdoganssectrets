<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_41f2a1aa4ddccfd6c478cddf1a02ef70b327df5c6a45702676b4128f4aba2363 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_2c2f5105e8b60827156db8bbdae68831115b095155cb2b59bd6fe5d0cc893be6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c2f5105e8b60827156db8bbdae68831115b095155cb2b59bd6fe5d0cc893be6->enter($__internal_2c2f5105e8b60827156db8bbdae68831115b095155cb2b59bd6fe5d0cc893be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_364de128f7b6b843539f8a4b15cd91c97fa715e20c626792a464504893d273e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364de128f7b6b843539f8a4b15cd91c97fa715e20c626792a464504893d273e5->enter($__internal_364de128f7b6b843539f8a4b15cd91c97fa715e20c626792a464504893d273e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c2f5105e8b60827156db8bbdae68831115b095155cb2b59bd6fe5d0cc893be6->leave($__internal_2c2f5105e8b60827156db8bbdae68831115b095155cb2b59bd6fe5d0cc893be6_prof);

        
        $__internal_364de128f7b6b843539f8a4b15cd91c97fa715e20c626792a464504893d273e5->leave($__internal_364de128f7b6b843539f8a4b15cd91c97fa715e20c626792a464504893d273e5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b14d977a60b9586bfa1f440863e47ba17a335e3ac0649cb261e90270e0ee6b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b14d977a60b9586bfa1f440863e47ba17a335e3ac0649cb261e90270e0ee6b7->enter($__internal_3b14d977a60b9586bfa1f440863e47ba17a335e3ac0649cb261e90270e0ee6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f78bc6b01278cac401da1c80df3f6a56fa4952dd26a799fe3f388cf9bd642ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78bc6b01278cac401da1c80df3f6a56fa4952dd26a799fe3f388cf9bd642ee2->enter($__internal_f78bc6b01278cac401da1c80df3f6a56fa4952dd26a799fe3f388cf9bd642ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f78bc6b01278cac401da1c80df3f6a56fa4952dd26a799fe3f388cf9bd642ee2->leave($__internal_f78bc6b01278cac401da1c80df3f6a56fa4952dd26a799fe3f388cf9bd642ee2_prof);

        
        $__internal_3b14d977a60b9586bfa1f440863e47ba17a335e3ac0649cb261e90270e0ee6b7->leave($__internal_3b14d977a60b9586bfa1f440863e47ba17a335e3ac0649cb261e90270e0ee6b7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
