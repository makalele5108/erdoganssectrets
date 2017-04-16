<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_3c78e283d979dc538ed8e38b6ec8a43803b0de949890ecf1c9f6a313bd343f59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_309450f75a08dc7b699f5db477b78735e1fd945594d33de4d43e1f7b2d5d87b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_309450f75a08dc7b699f5db477b78735e1fd945594d33de4d43e1f7b2d5d87b8->enter($__internal_309450f75a08dc7b699f5db477b78735e1fd945594d33de4d43e1f7b2d5d87b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_9d3539fe417ea1122f32c765a91abb65b80a88f21c84190ea9287d9376f08252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3539fe417ea1122f32c765a91abb65b80a88f21c84190ea9287d9376f08252->enter($__internal_9d3539fe417ea1122f32c765a91abb65b80a88f21c84190ea9287d9376f08252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_309450f75a08dc7b699f5db477b78735e1fd945594d33de4d43e1f7b2d5d87b8->leave($__internal_309450f75a08dc7b699f5db477b78735e1fd945594d33de4d43e1f7b2d5d87b8_prof);

        
        $__internal_9d3539fe417ea1122f32c765a91abb65b80a88f21c84190ea9287d9376f08252->leave($__internal_9d3539fe417ea1122f32c765a91abb65b80a88f21c84190ea9287d9376f08252_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c9cc0b89e442275a8239fb3fe86b1aeb46cd233a778540ff00ef86c4fb587436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9cc0b89e442275a8239fb3fe86b1aeb46cd233a778540ff00ef86c4fb587436->enter($__internal_c9cc0b89e442275a8239fb3fe86b1aeb46cd233a778540ff00ef86c4fb587436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_07508f7176b9d8c55db5fa77b85268814189395ea46fbbb46b821b9ecd4d8241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07508f7176b9d8c55db5fa77b85268814189395ea46fbbb46b821b9ecd4d8241->enter($__internal_07508f7176b9d8c55db5fa77b85268814189395ea46fbbb46b821b9ecd4d8241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_07508f7176b9d8c55db5fa77b85268814189395ea46fbbb46b821b9ecd4d8241->leave($__internal_07508f7176b9d8c55db5fa77b85268814189395ea46fbbb46b821b9ecd4d8241_prof);

        
        $__internal_c9cc0b89e442275a8239fb3fe86b1aeb46cd233a778540ff00ef86c4fb587436->leave($__internal_c9cc0b89e442275a8239fb3fe86b1aeb46cd233a778540ff00ef86c4fb587436_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
", "FOSUserBundle:Profile:edit.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
