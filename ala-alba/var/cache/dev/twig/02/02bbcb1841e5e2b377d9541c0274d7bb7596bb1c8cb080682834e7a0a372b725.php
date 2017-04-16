<?php

/* @Alba/Default/index.html.twig */
class __TwigTemplate_64a787cca90a3ac18d91293bdb2d870728432d9cbbd4f12aeb9649d18178c27c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Alba/base.html.twig", "@Alba/Default/index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Alba/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1fe2617d273ae099a972496b09a425aa54a70ffe9dfdf80ff82d11c33d996e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1fe2617d273ae099a972496b09a425aa54a70ffe9dfdf80ff82d11c33d996e6->enter($__internal_f1fe2617d273ae099a972496b09a425aa54a70ffe9dfdf80ff82d11c33d996e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Alba/Default/index.html.twig"));

        $__internal_864a1864ec62226c163542f6097a65b6d236d2bee9dfd34298f4107f2324d747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864a1864ec62226c163542f6097a65b6d236d2bee9dfd34298f4107f2324d747->enter($__internal_864a1864ec62226c163542f6097a65b6d236d2bee9dfd34298f4107f2324d747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Alba/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1fe2617d273ae099a972496b09a425aa54a70ffe9dfdf80ff82d11c33d996e6->leave($__internal_f1fe2617d273ae099a972496b09a425aa54a70ffe9dfdf80ff82d11c33d996e6_prof);

        
        $__internal_864a1864ec62226c163542f6097a65b6d236d2bee9dfd34298f4107f2324d747->leave($__internal_864a1864ec62226c163542f6097a65b6d236d2bee9dfd34298f4107f2324d747_prof);

    }

    public function getTemplateName()
    {
        return "@Alba/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Alba/base.html.twig' %}", "@Alba/Default/index.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\src\\Alba\\Bundle\\Resources\\views\\Default\\index.html.twig");
    }
}
