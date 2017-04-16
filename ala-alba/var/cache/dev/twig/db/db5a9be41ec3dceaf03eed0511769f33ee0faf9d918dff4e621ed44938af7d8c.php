<?php

/* order_info/index.html.twig */
class __TwigTemplate_e2a1f9f2d49b4a7d9b44a2e950f6be78076ec78e2dc712b966d1192c2244e940 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "order_info/index.html.twig", 1);
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
        $__internal_530d46d9c003455f50a1f523076e0aed8900d09a0238d9d248996ee1da6535c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_530d46d9c003455f50a1f523076e0aed8900d09a0238d9d248996ee1da6535c8->enter($__internal_530d46d9c003455f50a1f523076e0aed8900d09a0238d9d248996ee1da6535c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "order_info/index.html.twig"));

        $__internal_ea83f4d51a43de727ddb49f06a22a0f5aaead93eb5a4070fd5f97cd4b7cbc082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea83f4d51a43de727ddb49f06a22a0f5aaead93eb5a4070fd5f97cd4b7cbc082->enter($__internal_ea83f4d51a43de727ddb49f06a22a0f5aaead93eb5a4070fd5f97cd4b7cbc082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "order_info/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_530d46d9c003455f50a1f523076e0aed8900d09a0238d9d248996ee1da6535c8->leave($__internal_530d46d9c003455f50a1f523076e0aed8900d09a0238d9d248996ee1da6535c8_prof);

        
        $__internal_ea83f4d51a43de727ddb49f06a22a0f5aaead93eb5a4070fd5f97cd4b7cbc082->leave($__internal_ea83f4d51a43de727ddb49f06a22a0f5aaead93eb5a4070fd5f97cd4b7cbc082_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbb740d9422b2d4563fd26252ca587507875a710c9debf67dfe52e4ce6981403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbb740d9422b2d4563fd26252ca587507875a710c9debf67dfe52e4ce6981403->enter($__internal_cbb740d9422b2d4563fd26252ca587507875a710c9debf67dfe52e4ce6981403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_960e17c58b44116a82a3322a659a38e770771e71e42381617d987a8b0ad54970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960e17c58b44116a82a3322a659a38e770771e71e42381617d987a8b0ad54970->enter($__internal_960e17c58b44116a82a3322a659a38e770771e71e42381617d987a8b0ad54970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Order_infos list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Place</th>
                <th>City</th>
                <th>Zipcode</th>
                <th>Country</th>
                <th>Phonenumber</th>
                <th>Arrival</th>
                <th>Departure</th>
                <th>Creditcard</th>
                <th>Cardowner</th>
                <th>Kindpayment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_infos"]) ? $context["order_infos"] : $this->getContext($context, "order_infos")));
        foreach ($context['_seq'] as $context["_key"] => $context["order_info"]) {
            // line 28
            echo "            <tr>
                <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_info_show", array("id" => $this->getAttribute($context["order_info"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["order_info"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["order_info"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["order_info"], "lastname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["order_info"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["order_info"], "place", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["order_info"], "city", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["order_info"], "zipcode", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["order_info"], "country", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["order_info"], "phoneNumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            if ($this->getAttribute($context["order_info"], "arrival", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order_info"], "arrival", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 39
            if ($this->getAttribute($context["order_info"], "departure", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order_info"], "departure", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["order_info"], "creditcard", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["order_info"], "cardOwner", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["order_info"], "kindPayment", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_info_show", array("id" => $this->getAttribute($context["order_info"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_info_edit", array("id" => $this->getAttribute($context["order_info"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_info_new");
        echo "\">Create a new order_info</a>
        </li>
    </ul>
";
        
        $__internal_960e17c58b44116a82a3322a659a38e770771e71e42381617d987a8b0ad54970->leave($__internal_960e17c58b44116a82a3322a659a38e770771e71e42381617d987a8b0ad54970_prof);

        
        $__internal_cbb740d9422b2d4563fd26252ca587507875a710c9debf67dfe52e4ce6981403->leave($__internal_cbb740d9422b2d4563fd26252ca587507875a710c9debf67dfe52e4ce6981403_prof);

    }

    public function getTemplateName()
    {
        return "order_info/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 60,  164 => 55,  152 => 49,  146 => 46,  139 => 42,  135 => 41,  131 => 40,  125 => 39,  119 => 38,  115 => 37,  111 => 36,  107 => 35,  103 => 34,  99 => 33,  95 => 32,  91 => 31,  87 => 30,  81 => 29,  78 => 28,  74 => 27,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Order_infos list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Place</th>
                <th>City</th>
                <th>Zipcode</th>
                <th>Country</th>
                <th>Phonenumber</th>
                <th>Arrival</th>
                <th>Departure</th>
                <th>Creditcard</th>
                <th>Cardowner</th>
                <th>Kindpayment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for order_info in order_infos %}
            <tr>
                <td><a href=\"{{ path('order_info_show', { 'id': order_info.id }) }}\">{{ order_info.id }}</a></td>
                <td>{{ order_info.name }}</td>
                <td>{{ order_info.lastname }}</td>
                <td>{{ order_info.email }}</td>
                <td>{{ order_info.place }}</td>
                <td>{{ order_info.city }}</td>
                <td>{{ order_info.zipcode }}</td>
                <td>{{ order_info.country }}</td>
                <td>{{ order_info.phoneNumber }}</td>
                <td>{% if order_info.arrival %}{{ order_info.arrival|date('Y-m-d') }}{% endif %}</td>
                <td>{% if order_info.departure %}{{ order_info.departure|date('Y-m-d') }}{% endif %}</td>
                <td>{{ order_info.creditcard }}</td>
                <td>{{ order_info.cardOwner }}</td>
                <td>{{ order_info.kindPayment }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('order_info_show', { 'id': order_info.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('order_info_edit', { 'id': order_info.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('order_info_new') }}\">Create a new order_info</a>
        </li>
    </ul>
{% endblock %}
", "order_info/index.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\app\\Resources\\views\\order_info\\index.html.twig");
    }
}
