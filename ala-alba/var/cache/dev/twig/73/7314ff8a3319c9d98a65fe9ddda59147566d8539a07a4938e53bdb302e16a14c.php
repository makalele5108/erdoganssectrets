<?php

/* AlbaBundle:user:new.html.twig */
class __TwigTemplate_a0a81828d756c4a11b5d9e42c2ed63368b411b035d51b25512162b99dc834ffd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Alba/base.html.twig", "AlbaBundle:user:new.html.twig", 1);
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
        $__internal_26178f62bb330036d3ef86e8dd5e51616477603584d81ab6b543a637fdc60742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26178f62bb330036d3ef86e8dd5e51616477603584d81ab6b543a637fdc60742->enter($__internal_26178f62bb330036d3ef86e8dd5e51616477603584d81ab6b543a637fdc60742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AlbaBundle:user:new.html.twig"));

        $__internal_dd51aafaa3a193da7d3c3f32dc3de718fd52fc786367e613cc1e476c04641ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd51aafaa3a193da7d3c3f32dc3de718fd52fc786367e613cc1e476c04641ef4->enter($__internal_dd51aafaa3a193da7d3c3f32dc3de718fd52fc786367e613cc1e476c04641ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AlbaBundle:user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26178f62bb330036d3ef86e8dd5e51616477603584d81ab6b543a637fdc60742->leave($__internal_26178f62bb330036d3ef86e8dd5e51616477603584d81ab6b543a637fdc60742_prof);

        
        $__internal_dd51aafaa3a193da7d3c3f32dc3de718fd52fc786367e613cc1e476c04641ef4->leave($__internal_dd51aafaa3a193da7d3c3f32dc3de718fd52fc786367e613cc1e476c04641ef4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_af3eb073209b6ea04dc3be85e9ab9da5e4df59d112bb2a92b46895c0520bc3cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af3eb073209b6ea04dc3be85e9ab9da5e4df59d112bb2a92b46895c0520bc3cf->enter($__internal_af3eb073209b6ea04dc3be85e9ab9da5e4df59d112bb2a92b46895c0520bc3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71164f1aa458b39b792a76ffe7609d5a46559360247d400410f039acbf7f4407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71164f1aa458b39b792a76ffe7609d5a46559360247d400410f039acbf7f4407->enter($__internal_71164f1aa458b39b792a76ffe7609d5a46559360247d400410f039acbf7f4407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_71164f1aa458b39b792a76ffe7609d5a46559360247d400410f039acbf7f4407->leave($__internal_71164f1aa458b39b792a76ffe7609d5a46559360247d400410f039acbf7f4407_prof);

        
        $__internal_af3eb073209b6ea04dc3be85e9ab9da5e4df59d112bb2a92b46895c0520bc3cf->leave($__internal_af3eb073209b6ea04dc3be85e9ab9da5e4df59d112bb2a92b46895c0520bc3cf_prof);

    }

    public function getTemplateName()
    {
        return "AlbaBundle:user:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "AlbaBundle:user:new.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\src\\Alba\\Bundle/Resources/views/user/new.html.twig");
    }
}
