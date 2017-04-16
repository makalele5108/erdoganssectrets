<?php

/* AlbaBundle:user:show.html.twig */
class __TwigTemplate_9135814b3ac59ba97252df412f41952574b7f72c8dc52d452ca2f8aad5e3f325 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Alba/base.html.twig", "AlbaBundle:user:show.html.twig", 1);
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
        $__internal_4c2f7cd0854bc88fb24379b407e9677e87e3070a02b84920a6bd616e9c0a802b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c2f7cd0854bc88fb24379b407e9677e87e3070a02b84920a6bd616e9c0a802b->enter($__internal_4c2f7cd0854bc88fb24379b407e9677e87e3070a02b84920a6bd616e9c0a802b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AlbaBundle:user:show.html.twig"));

        $__internal_487b0c9ad36edf5f644fda755bcac2134cae357986cb0ee34d57fa95f8c2cdbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_487b0c9ad36edf5f644fda755bcac2134cae357986cb0ee34d57fa95f8c2cdbb->enter($__internal_487b0c9ad36edf5f644fda755bcac2134cae357986cb0ee34d57fa95f8c2cdbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AlbaBundle:user:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c2f7cd0854bc88fb24379b407e9677e87e3070a02b84920a6bd616e9c0a802b->leave($__internal_4c2f7cd0854bc88fb24379b407e9677e87e3070a02b84920a6bd616e9c0a802b_prof);

        
        $__internal_487b0c9ad36edf5f644fda755bcac2134cae357986cb0ee34d57fa95f8c2cdbb->leave($__internal_487b0c9ad36edf5f644fda755bcac2134cae357986cb0ee34d57fa95f8c2cdbb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcdbf649cc2a3c19eb015218c5414a3c52440aafb7018526b91e2cca76916bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcdbf649cc2a3c19eb015218c5414a3c52440aafb7018526b91e2cca76916bc7->enter($__internal_bcdbf649cc2a3c19eb015218c5414a3c52440aafb7018526b91e2cca76916bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5aa7e39b2729cf41c4e0a492dadace4ec4cb8e48a805aff042d783473c391c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5aa7e39b2729cf41c4e0a492dadace4ec4cb8e48a805aff042d783473c391c0->enter($__internal_c5aa7e39b2729cf41c4e0a492dadace4ec4cb8e48a805aff042d783473c391c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Preposition</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prePosition", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sex</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "sex", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Place</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "place", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Zipcode</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "zipcode", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>City</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "city", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "country", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phonenumber</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phoneNumber", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c5aa7e39b2729cf41c4e0a492dadace4ec4cb8e48a805aff042d783473c391c0->leave($__internal_c5aa7e39b2729cf41c4e0a492dadace4ec4cb8e48a805aff042d783473c391c0_prof);

        
        $__internal_bcdbf649cc2a3c19eb015218c5414a3c52440aafb7018526b91e2cca76916bc7->leave($__internal_bcdbf649cc2a3c19eb015218c5414a3c52440aafb7018526b91e2cca76916bc7_prof);

    }

    public function getTemplateName()
    {
        return "AlbaBundle:user:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 65,  151 => 63,  145 => 60,  139 => 57,  129 => 50,  122 => 46,  115 => 42,  108 => 38,  101 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ user.id }}</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>{{ user.firstName }}</td>
            </tr>
            <tr>
                <th>Preposition</th>
                <td>{{ user.prePosition }}</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>{{ user.lastName }}</td>
            </tr>
            <tr>
                <th>Sex</th>
                <td>{{ user.sex }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if user.date %}{{ user.date|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Place</th>
                <td>{{ user.place }}</td>
            </tr>
            <tr>
                <th>Zipcode</th>
                <td>{{ user.zipcode }}</td>
            </tr>
            <tr>
                <th>City</th>
                <td>{{ user.city }}</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>{{ user.country }}</td>
            </tr>
            <tr>
                <th>Phonenumber</th>
                <td>{{ user.phoneNumber }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "AlbaBundle:user:show.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\src\\Alba\\Bundle/Resources/views/user/show.html.twig");
    }
}
