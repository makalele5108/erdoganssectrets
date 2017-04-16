<?php

/* :order_info:show.html.twig */
class __TwigTemplate_8dd90a3f475b0e5fe5cdb5a1b29cccfa8c757b7fc21c8778d9439eb43f23b591 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":order_info:show.html.twig", 1);
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
        $__internal_a852917b9a0aaa5f1c34a34015fcf27cfb26b365ceaee3e8913450ec398fde63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a852917b9a0aaa5f1c34a34015fcf27cfb26b365ceaee3e8913450ec398fde63->enter($__internal_a852917b9a0aaa5f1c34a34015fcf27cfb26b365ceaee3e8913450ec398fde63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":order_info:show.html.twig"));

        $__internal_ddc8d49cc199476f8194f4a52f4b81ff06dc37e4fac19e4c8b52dbc108988391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc8d49cc199476f8194f4a52f4b81ff06dc37e4fac19e4c8b52dbc108988391->enter($__internal_ddc8d49cc199476f8194f4a52f4b81ff06dc37e4fac19e4c8b52dbc108988391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":order_info:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a852917b9a0aaa5f1c34a34015fcf27cfb26b365ceaee3e8913450ec398fde63->leave($__internal_a852917b9a0aaa5f1c34a34015fcf27cfb26b365ceaee3e8913450ec398fde63_prof);

        
        $__internal_ddc8d49cc199476f8194f4a52f4b81ff06dc37e4fac19e4c8b52dbc108988391->leave($__internal_ddc8d49cc199476f8194f4a52f4b81ff06dc37e4fac19e4c8b52dbc108988391_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bd5d30e9cb3cd3d80782e3c7dd6081352f8d03bd9115c4fef1facdb35cb35ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bd5d30e9cb3cd3d80782e3c7dd6081352f8d03bd9115c4fef1facdb35cb35ab->enter($__internal_5bd5d30e9cb3cd3d80782e3c7dd6081352f8d03bd9115c4fef1facdb35cb35ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0fa3239a9167d3414f6c5851944b2cb6f248584cdfa19cf8ee4652d35bef4515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa3239a9167d3414f6c5851944b2cb6f248584cdfa19cf8ee4652d35bef4515->enter($__internal_0fa3239a9167d3414f6c5851944b2cb6f248584cdfa19cf8ee4652d35bef4515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Order_info</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : $this->getContext($context, "order_info")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : $this->getContext($context, "order_info")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : $this->getContext($context, "order_info")), "lastname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : $this->getContext($context, "order_info")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Place</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : $this->getContext($context, "order_info")), "place", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>City</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : $this->getContext($context, "order_info")), "city", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Zipcode</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : $this->getContext($context, "order_info")), "zipcode", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : $this->getContext($context, "order_info")), "country", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phonenumber</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : $this->getContext($context, "order_info")), "phoneNumber", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Arrival</th>
                <td>";
        // line 46
        if ($this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : $this->getContext($context, "order_info")), "arrival", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : $this->getContext($context, "order_info")), "arrival", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Departure</th>
                <td>";
        // line 50
        if ($this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : $this->getContext($context, "order_info")), "departure", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : $this->getContext($context, "order_info")), "departure", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Creditcard</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : $this->getContext($context, "order_info")), "creditcard", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cardowner</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : $this->getContext($context, "order_info")), "cardOwner", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Kindpayment</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : $this->getContext($context, "order_info")), "kindPayment", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_info_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_info_edit", array("id" => $this->getAttribute((isset($context["order_info"]) ? $context["order_info"] : $this->getContext($context, "order_info")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 75
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0fa3239a9167d3414f6c5851944b2cb6f248584cdfa19cf8ee4652d35bef4515->leave($__internal_0fa3239a9167d3414f6c5851944b2cb6f248584cdfa19cf8ee4652d35bef4515_prof);

        
        $__internal_5bd5d30e9cb3cd3d80782e3c7dd6081352f8d03bd9115c4fef1facdb35cb35ab->leave($__internal_5bd5d30e9cb3cd3d80782e3c7dd6081352f8d03bd9115c4fef1facdb35cb35ab_prof);

    }

    public function getTemplateName()
    {
        return ":order_info:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 77,  174 => 75,  168 => 72,  162 => 69,  152 => 62,  145 => 58,  138 => 54,  129 => 50,  120 => 46,  113 => 42,  106 => 38,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Order_info</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ order_info.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ order_info.name }}</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>{{ order_info.lastname }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ order_info.email }}</td>
            </tr>
            <tr>
                <th>Place</th>
                <td>{{ order_info.place }}</td>
            </tr>
            <tr>
                <th>City</th>
                <td>{{ order_info.city }}</td>
            </tr>
            <tr>
                <th>Zipcode</th>
                <td>{{ order_info.zipcode }}</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>{{ order_info.country }}</td>
            </tr>
            <tr>
                <th>Phonenumber</th>
                <td>{{ order_info.phoneNumber }}</td>
            </tr>
            <tr>
                <th>Arrival</th>
                <td>{% if order_info.arrival %}{{ order_info.arrival|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Departure</th>
                <td>{% if order_info.departure %}{{ order_info.departure|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Creditcard</th>
                <td>{{ order_info.creditcard }}</td>
            </tr>
            <tr>
                <th>Cardowner</th>
                <td>{{ order_info.cardOwner }}</td>
            </tr>
            <tr>
                <th>Kindpayment</th>
                <td>{{ order_info.kindPayment }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('order_info_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('order_info_edit', { 'id': order_info.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":order_info:show.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\app/Resources\\views/order_info/show.html.twig");
    }
}
