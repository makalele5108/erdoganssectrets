<?php

/* @Alba/user/edit.html.twig */
class __TwigTemplate_e0b8b68bbe23686faf98c9ee4060dd838b625ab902089016dca5b571f851f315 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Alba/base.html.twig", "@Alba/user/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Alba/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61f531ed599e1714f5344cf01ca0f1ee35a61f4eeb7c4972f45828b003a906a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61f531ed599e1714f5344cf01ca0f1ee35a61f4eeb7c4972f45828b003a906a2->enter($__internal_61f531ed599e1714f5344cf01ca0f1ee35a61f4eeb7c4972f45828b003a906a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Alba/user/edit.html.twig"));

        $__internal_facbb88fb934f49faafc4b0b51835d6abe2cd14093c70b91fbc7878296bc3060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_facbb88fb934f49faafc4b0b51835d6abe2cd14093c70b91fbc7878296bc3060->enter($__internal_facbb88fb934f49faafc4b0b51835d6abe2cd14093c70b91fbc7878296bc3060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Alba/user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61f531ed599e1714f5344cf01ca0f1ee35a61f4eeb7c4972f45828b003a906a2->leave($__internal_61f531ed599e1714f5344cf01ca0f1ee35a61f4eeb7c4972f45828b003a906a2_prof);

        
        $__internal_facbb88fb934f49faafc4b0b51835d6abe2cd14093c70b91fbc7878296bc3060->leave($__internal_facbb88fb934f49faafc4b0b51835d6abe2cd14093c70b91fbc7878296bc3060_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0b2cfc112525b0cb31a8314825b00c2ed1ace58b5522803e79f4493a3bd452c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b2cfc112525b0cb31a8314825b00c2ed1ace58b5522803e79f4493a3bd452c->enter($__internal_e0b2cfc112525b0cb31a8314825b00c2ed1ace58b5522803e79f4493a3bd452c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_60c9fef6c049819a684afc60ed26428287c8ddff54e42f5de966fecf67bea1ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c9fef6c049819a684afc60ed26428287c8ddff54e42f5de966fecf67bea1ee->enter($__internal_60c9fef6c049819a684afc60ed26428287c8ddff54e42f5de966fecf67bea1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_60c9fef6c049819a684afc60ed26428287c8ddff54e42f5de966fecf67bea1ee->leave($__internal_60c9fef6c049819a684afc60ed26428287c8ddff54e42f5de966fecf67bea1ee_prof);

        
        $__internal_e0b2cfc112525b0cb31a8314825b00c2ed1ace58b5522803e79f4493a3bd452c->leave($__internal_e0b2cfc112525b0cb31a8314825b00c2ed1ace58b5522803e79f4493a3bd452c_prof);

    }

    public function getTemplateName()
    {
        return "@Alba/user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Alba/base.html.twig' %}

{% block body %}
    <h1>User edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Alba/user/edit.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\src\\Alba\\Bundle\\Resources\\views\\user\\edit.html.twig");
    }
}
