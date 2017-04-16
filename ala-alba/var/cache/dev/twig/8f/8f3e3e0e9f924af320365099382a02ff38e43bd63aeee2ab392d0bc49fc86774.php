<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_442cdeaaaea6b939cc2600789fa03d7ce3ccf76f04ac03bfa8b342a8699da036 extends Twig_Template
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
        $__internal_6c99a8a5ebdc7da365442d13548b7b0b1ad5668871c0fbab7e0a0a090f79a0fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c99a8a5ebdc7da365442d13548b7b0b1ad5668871c0fbab7e0a0a090f79a0fc->enter($__internal_6c99a8a5ebdc7da365442d13548b7b0b1ad5668871c0fbab7e0a0a090f79a0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_65480d367d12a5391a7c09253af1b703d6c972dc9180cb9c1a888b3d5f1574e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65480d367d12a5391a7c09253af1b703d6c972dc9180cb9c1a888b3d5f1574e8->enter($__internal_65480d367d12a5391a7c09253af1b703d6c972dc9180cb9c1a888b3d5f1574e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6c99a8a5ebdc7da365442d13548b7b0b1ad5668871c0fbab7e0a0a090f79a0fc->leave($__internal_6c99a8a5ebdc7da365442d13548b7b0b1ad5668871c0fbab7e0a0a090f79a0fc_prof);

        
        $__internal_65480d367d12a5391a7c09253af1b703d6c972dc9180cb9c1a888b3d5f1574e8->leave($__internal_65480d367d12a5391a7c09253af1b703d6c972dc9180cb9c1a888b3d5f1574e8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
