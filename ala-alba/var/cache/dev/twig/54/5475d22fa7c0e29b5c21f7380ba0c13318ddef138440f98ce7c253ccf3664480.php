<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3ebdf972d70f51f12a9e8ab0cef83da670bf8fed84edd16b940a4634075310b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb3d903ec4338d130452fba01ed7cdcfc79b407dcc1fe45b8358b7e11da7ffa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb3d903ec4338d130452fba01ed7cdcfc79b407dcc1fe45b8358b7e11da7ffa8->enter($__internal_fb3d903ec4338d130452fba01ed7cdcfc79b407dcc1fe45b8358b7e11da7ffa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_99898ee1f0e2adb1849e9ee83ddb0bb6883afdd3e1d089cbfb2f614bee77aefa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99898ee1f0e2adb1849e9ee83ddb0bb6883afdd3e1d089cbfb2f614bee77aefa->enter($__internal_99898ee1f0e2adb1849e9ee83ddb0bb6883afdd3e1d089cbfb2f614bee77aefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_fb3d903ec4338d130452fba01ed7cdcfc79b407dcc1fe45b8358b7e11da7ffa8->leave($__internal_fb3d903ec4338d130452fba01ed7cdcfc79b407dcc1fe45b8358b7e11da7ffa8_prof);

        
        $__internal_99898ee1f0e2adb1849e9ee83ddb0bb6883afdd3e1d089cbfb2f614bee77aefa->leave($__internal_99898ee1f0e2adb1849e9ee83ddb0bb6883afdd3e1d089cbfb2f614bee77aefa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
