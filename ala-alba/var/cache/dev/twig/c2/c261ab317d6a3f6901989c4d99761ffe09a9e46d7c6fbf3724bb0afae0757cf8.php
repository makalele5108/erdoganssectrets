<?php

/* :order_info:edit.html.twig */
class __TwigTemplate_d64bd6d05754f45a9499bdc4d192d7fe50e32fc0fe386853be8174a1d3b8b4f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":order_info:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b833ed6c5b4d0709a41bf0c404a034c85bb45b3db373028582d754a2decf16b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b833ed6c5b4d0709a41bf0c404a034c85bb45b3db373028582d754a2decf16b->enter($__internal_8b833ed6c5b4d0709a41bf0c404a034c85bb45b3db373028582d754a2decf16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":order_info:edit.html.twig"));

        $__internal_1064393925634285c5102753dee03d6cbaad344871f171c7487933ea30d14a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1064393925634285c5102753dee03d6cbaad344871f171c7487933ea30d14a1f->enter($__internal_1064393925634285c5102753dee03d6cbaad344871f171c7487933ea30d14a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":order_info:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b833ed6c5b4d0709a41bf0c404a034c85bb45b3db373028582d754a2decf16b->leave($__internal_8b833ed6c5b4d0709a41bf0c404a034c85bb45b3db373028582d754a2decf16b_prof);

        
        $__internal_1064393925634285c5102753dee03d6cbaad344871f171c7487933ea30d14a1f->leave($__internal_1064393925634285c5102753dee03d6cbaad344871f171c7487933ea30d14a1f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_40f304c538405233c4c187ef60612e324f9f94bdf40d0865fa0686f37550808a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f304c538405233c4c187ef60612e324f9f94bdf40d0865fa0686f37550808a->enter($__internal_40f304c538405233c4c187ef60612e324f9f94bdf40d0865fa0686f37550808a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72f4281d1fa846027647e68ccf12b6c0105ed2c694f1e461610702f4e6182ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f4281d1fa846027647e68ccf12b6c0105ed2c694f1e461610702f4e6182ee3->enter($__internal_72f4281d1fa846027647e68ccf12b6c0105ed2c694f1e461610702f4e6182ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Order_info edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_info_index");
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
        
        $__internal_72f4281d1fa846027647e68ccf12b6c0105ed2c694f1e461610702f4e6182ee3->leave($__internal_72f4281d1fa846027647e68ccf12b6c0105ed2c694f1e461610702f4e6182ee3_prof);

        
        $__internal_40f304c538405233c4c187ef60612e324f9f94bdf40d0865fa0686f37550808a->leave($__internal_40f304c538405233c4c187ef60612e324f9f94bdf40d0865fa0686f37550808a_prof);

    }

    public function getTemplateName()
    {
        return ":order_info:edit.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Order_info edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('order_info_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":order_info:edit.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\app/Resources\\views/order_info/edit.html.twig");
    }
}
