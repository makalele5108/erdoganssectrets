<?php

/* AlbaBundle:rooms:show.html.twig */
class __TwigTemplate_c772ed53c7946d765533275d2a25728dac9e5faceeb7cfa60425e1bd84552045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AlbaBundle:rooms:show.html.twig", 1);
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
        $__internal_831a2795a8bbc2297b325d0ce24ee9b2db9a4a0f18423c20c7465a285cb9ab27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_831a2795a8bbc2297b325d0ce24ee9b2db9a4a0f18423c20c7465a285cb9ab27->enter($__internal_831a2795a8bbc2297b325d0ce24ee9b2db9a4a0f18423c20c7465a285cb9ab27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AlbaBundle:rooms:show.html.twig"));

        $__internal_24c85ded1e6492643fe1748b1a3de0a33d48e4536273c6d1f3344c8b863e9921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24c85ded1e6492643fe1748b1a3de0a33d48e4536273c6d1f3344c8b863e9921->enter($__internal_24c85ded1e6492643fe1748b1a3de0a33d48e4536273c6d1f3344c8b863e9921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AlbaBundle:rooms:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_831a2795a8bbc2297b325d0ce24ee9b2db9a4a0f18423c20c7465a285cb9ab27->leave($__internal_831a2795a8bbc2297b325d0ce24ee9b2db9a4a0f18423c20c7465a285cb9ab27_prof);

        
        $__internal_24c85ded1e6492643fe1748b1a3de0a33d48e4536273c6d1f3344c8b863e9921->leave($__internal_24c85ded1e6492643fe1748b1a3de0a33d48e4536273c6d1f3344c8b863e9921_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7849f4f6a2a2ea99af7db7fa87595c7ed7381ee6783fc1feaa0d019fa8c983f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7849f4f6a2a2ea99af7db7fa87595c7ed7381ee6783fc1feaa0d019fa8c983f7->enter($__internal_7849f4f6a2a2ea99af7db7fa87595c7ed7381ee6783fc1feaa0d019fa8c983f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77c143b2259a42ba24411133a1c83df3c744ecc8dc3f7bae05aca839054e4551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c143b2259a42ba24411133a1c83df3c744ecc8dc3f7bae05aca839054e4551->enter($__internal_77c143b2259a42ba24411133a1c83df3c744ecc8dc3f7bae05aca839054e4551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Room</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Seasonprice</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "seasonPrice", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "price", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rooms_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rooms_edit", array("id" => $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_77c143b2259a42ba24411133a1c83df3c744ecc8dc3f7bae05aca839054e4551->leave($__internal_77c143b2259a42ba24411133a1c83df3c744ecc8dc3f7bae05aca839054e4551_prof);

        
        $__internal_7849f4f6a2a2ea99af7db7fa87595c7ed7381ee6783fc1feaa0d019fa8c983f7->leave($__internal_7849f4f6a2a2ea99af7db7fa87595c7ed7381ee6783fc1feaa0d019fa8c983f7_prof);

    }

    public function getTemplateName()
    {
        return "AlbaBundle:rooms:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  100 => 35,  94 => 32,  88 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Room</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ room.id }}</td>
            </tr>
            <tr>
                <th>Seasonprice</th>
                <td>{{ room.seasonPrice }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ room.description }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ room.price }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('rooms_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('rooms_edit', { 'id': room.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "AlbaBundle:rooms:show.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\src\\Alba\\Bundle/Resources/views/rooms/show.html.twig");
    }
}
