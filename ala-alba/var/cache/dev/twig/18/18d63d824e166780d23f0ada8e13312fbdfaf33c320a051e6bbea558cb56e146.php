<?php

/* :rooms:index.html.twig */
class __TwigTemplate_c5ffad619252dc115779622ab68ce4a697d8a6c01e8219fc6903592e9509c162 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":rooms:index.html.twig", 1);
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
        $__internal_ea4fad4810b6f9e873886b1a0e1ec59114619837a6c25bfe43363ceb05558fe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea4fad4810b6f9e873886b1a0e1ec59114619837a6c25bfe43363ceb05558fe6->enter($__internal_ea4fad4810b6f9e873886b1a0e1ec59114619837a6c25bfe43363ceb05558fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rooms:index.html.twig"));

        $__internal_0f77b8c7304443db322a0c7ba16d3a8bfdc92246afd233a462c0c665feb46ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f77b8c7304443db322a0c7ba16d3a8bfdc92246afd233a462c0c665feb46ad8->enter($__internal_0f77b8c7304443db322a0c7ba16d3a8bfdc92246afd233a462c0c665feb46ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rooms:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea4fad4810b6f9e873886b1a0e1ec59114619837a6c25bfe43363ceb05558fe6->leave($__internal_ea4fad4810b6f9e873886b1a0e1ec59114619837a6c25bfe43363ceb05558fe6_prof);

        
        $__internal_0f77b8c7304443db322a0c7ba16d3a8bfdc92246afd233a462c0c665feb46ad8->leave($__internal_0f77b8c7304443db322a0c7ba16d3a8bfdc92246afd233a462c0c665feb46ad8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cd2f415a1cdfd12c5b215cba6cd48b8535809216466345f8ba1cd66d7163923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cd2f415a1cdfd12c5b215cba6cd48b8535809216466345f8ba1cd66d7163923->enter($__internal_6cd2f415a1cdfd12c5b215cba6cd48b8535809216466345f8ba1cd66d7163923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_948c96904b9412f58a11671c1289bb9231b3f2c66fa6ae9d634b31200a1ea974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_948c96904b9412f58a11671c1289bb9231b3f2c66fa6ae9d634b31200a1ea974->enter($__internal_948c96904b9412f58a11671c1289bb9231b3f2c66fa6ae9d634b31200a1ea974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Rooms list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Seasonprice</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) ? $context["rooms"] : $this->getContext($context, "rooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rooms_show", array("id" => $this->getAttribute($context["room"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "seasonPrice", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "price", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rooms_show", array("id" => $this->getAttribute($context["room"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rooms_edit", array("id" => $this->getAttribute($context["room"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rooms_new");
        echo "\">Create a new room</a>
        </li>
    </ul>
";
        
        $__internal_948c96904b9412f58a11671c1289bb9231b3f2c66fa6ae9d634b31200a1ea974->leave($__internal_948c96904b9412f58a11671c1289bb9231b3f2c66fa6ae9d634b31200a1ea974_prof);

        
        $__internal_6cd2f415a1cdfd12c5b215cba6cd48b8535809216466345f8ba1cd66d7163923->leave($__internal_6cd2f415a1cdfd12c5b215cba6cd48b8535809216466345f8ba1cd66d7163923_prof);

    }

    public function getTemplateName()
    {
        return ":rooms:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 40,  110 => 35,  98 => 29,  92 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Rooms list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Seasonprice</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for room in rooms %}
            <tr>
                <td><a href=\"{{ path('rooms_show', { 'id': room.id }) }}\">{{ room.id }}</a></td>
                <td>{{ room.seasonPrice }}</td>
                <td>{{ room.description }}</td>
                <td>{{ room.price }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('rooms_show', { 'id': room.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('rooms_edit', { 'id': room.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('rooms_new') }}\">Create a new room</a>
        </li>
    </ul>
{% endblock %}
", ":rooms:index.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\app/Resources\\views/rooms/index.html.twig");
    }
}
