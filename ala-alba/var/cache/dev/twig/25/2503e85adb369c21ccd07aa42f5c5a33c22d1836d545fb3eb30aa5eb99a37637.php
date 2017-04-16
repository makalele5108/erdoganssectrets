<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_1ae272360117f178cb6fe9c50a138a618c6f7c4baf21b539f58eda93bffcc498 extends Twig_Template
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
        $__internal_95114009e82be3166a5bb764794060fb5273d6a26ef7fb6c8242395440b80bcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95114009e82be3166a5bb764794060fb5273d6a26ef7fb6c8242395440b80bcb->enter($__internal_95114009e82be3166a5bb764794060fb5273d6a26ef7fb6c8242395440b80bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_6586895d7aa496a57cccd2d739df8becb68e17c08ac8b7509b5bd49fd5ee17d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6586895d7aa496a57cccd2d739df8becb68e17c08ac8b7509b5bd49fd5ee17d9->enter($__internal_6586895d7aa496a57cccd2d739df8becb68e17c08ac8b7509b5bd49fd5ee17d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_95114009e82be3166a5bb764794060fb5273d6a26ef7fb6c8242395440b80bcb->leave($__internal_95114009e82be3166a5bb764794060fb5273d6a26ef7fb6c8242395440b80bcb_prof);

        
        $__internal_6586895d7aa496a57cccd2d739df8becb68e17c08ac8b7509b5bd49fd5ee17d9->leave($__internal_6586895d7aa496a57cccd2d739df8becb68e17c08ac8b7509b5bd49fd5ee17d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
