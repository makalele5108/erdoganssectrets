<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4f8013b187e7a49949aa24d25b57f82dbf6736c4d0afe406f5b012001d79496f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4eca746b4c578c551c8bf650758b7ac36f145c3900aba009c217ab143d96f19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4eca746b4c578c551c8bf650758b7ac36f145c3900aba009c217ab143d96f19->enter($__internal_e4eca746b4c578c551c8bf650758b7ac36f145c3900aba009c217ab143d96f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_abec067cff5f4041eb3781b4b73fb9635e684fb3e41d64b42451d4db9c87a54d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abec067cff5f4041eb3781b4b73fb9635e684fb3e41d64b42451d4db9c87a54d->enter($__internal_abec067cff5f4041eb3781b4b73fb9635e684fb3e41d64b42451d4db9c87a54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4eca746b4c578c551c8bf650758b7ac36f145c3900aba009c217ab143d96f19->leave($__internal_e4eca746b4c578c551c8bf650758b7ac36f145c3900aba009c217ab143d96f19_prof);

        
        $__internal_abec067cff5f4041eb3781b4b73fb9635e684fb3e41d64b42451d4db9c87a54d->leave($__internal_abec067cff5f4041eb3781b4b73fb9635e684fb3e41d64b42451d4db9c87a54d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e7765b08088eb6b9442870611d13764c564f254f87e38e3fb181375fa977db8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7765b08088eb6b9442870611d13764c564f254f87e38e3fb181375fa977db8c->enter($__internal_e7765b08088eb6b9442870611d13764c564f254f87e38e3fb181375fa977db8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_41f25a2882b8556bb4e27dd3ee1333a3281a44a5ce41e4bdebe362a4e3459973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f25a2882b8556bb4e27dd3ee1333a3281a44a5ce41e4bdebe362a4e3459973->enter($__internal_41f25a2882b8556bb4e27dd3ee1333a3281a44a5ce41e4bdebe362a4e3459973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_41f25a2882b8556bb4e27dd3ee1333a3281a44a5ce41e4bdebe362a4e3459973->leave($__internal_41f25a2882b8556bb4e27dd3ee1333a3281a44a5ce41e4bdebe362a4e3459973_prof);

        
        $__internal_e7765b08088eb6b9442870611d13764c564f254f87e38e3fb181375fa977db8c->leave($__internal_e7765b08088eb6b9442870611d13764c564f254f87e38e3fb181375fa977db8c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_64496ee5534702b92a84182aacba28c02e26377379424b3d76cc3c1d7303dae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64496ee5534702b92a84182aacba28c02e26377379424b3d76cc3c1d7303dae5->enter($__internal_64496ee5534702b92a84182aacba28c02e26377379424b3d76cc3c1d7303dae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_93e64fb7541660a03d179c8a972e6a96d550d9c5e47feb524e0d265e7c3130bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e64fb7541660a03d179c8a972e6a96d550d9c5e47feb524e0d265e7c3130bc->enter($__internal_93e64fb7541660a03d179c8a972e6a96d550d9c5e47feb524e0d265e7c3130bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_93e64fb7541660a03d179c8a972e6a96d550d9c5e47feb524e0d265e7c3130bc->leave($__internal_93e64fb7541660a03d179c8a972e6a96d550d9c5e47feb524e0d265e7c3130bc_prof);

        
        $__internal_64496ee5534702b92a84182aacba28c02e26377379424b3d76cc3c1d7303dae5->leave($__internal_64496ee5534702b92a84182aacba28c02e26377379424b3d76cc3c1d7303dae5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b26403a5ff8d6a12130e03e76e2dc50540598b6348fb6f8abf5361c1e8579ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b26403a5ff8d6a12130e03e76e2dc50540598b6348fb6f8abf5361c1e8579ab->enter($__internal_4b26403a5ff8d6a12130e03e76e2dc50540598b6348fb6f8abf5361c1e8579ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20e89c6db470927dd39b668fa3c01633257e716ad50b45cb18655a5ad79bbd72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e89c6db470927dd39b668fa3c01633257e716ad50b45cb18655a5ad79bbd72->enter($__internal_20e89c6db470927dd39b668fa3c01633257e716ad50b45cb18655a5ad79bbd72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_20e89c6db470927dd39b668fa3c01633257e716ad50b45cb18655a5ad79bbd72->leave($__internal_20e89c6db470927dd39b668fa3c01633257e716ad50b45cb18655a5ad79bbd72_prof);

        
        $__internal_4b26403a5ff8d6a12130e03e76e2dc50540598b6348fb6f8abf5361c1e8579ab->leave($__internal_4b26403a5ff8d6a12130e03e76e2dc50540598b6348fb6f8abf5361c1e8579ab_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
