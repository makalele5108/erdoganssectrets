<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_c791f4165d1945a200a425aeda7c3a304a842c65bfef680b9589319cee5774c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e3c4450114549f231ca202e0d53106ae2ad61adae4b212a43e0ddc6a734cfd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e3c4450114549f231ca202e0d53106ae2ad61adae4b212a43e0ddc6a734cfd3->enter($__internal_8e3c4450114549f231ca202e0d53106ae2ad61adae4b212a43e0ddc6a734cfd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_f95ba6b2949295fab9635456e020ebf33a51bc1adc79da83cba576abf21caf18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95ba6b2949295fab9635456e020ebf33a51bc1adc79da83cba576abf21caf18->enter($__internal_f95ba6b2949295fab9635456e020ebf33a51bc1adc79da83cba576abf21caf18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_8e3c4450114549f231ca202e0d53106ae2ad61adae4b212a43e0ddc6a734cfd3->leave($__internal_8e3c4450114549f231ca202e0d53106ae2ad61adae4b212a43e0ddc6a734cfd3_prof);

        
        $__internal_f95ba6b2949295fab9635456e020ebf33a51bc1adc79da83cba576abf21caf18->leave($__internal_f95ba6b2949295fab9635456e020ebf33a51bc1adc79da83cba576abf21caf18_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
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

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
