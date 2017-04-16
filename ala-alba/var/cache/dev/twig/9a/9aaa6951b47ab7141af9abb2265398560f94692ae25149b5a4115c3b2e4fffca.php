<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ed48decd470a6db586ca4174c00b617b6792b6a41960745e5e6744c495aef3a7 extends Twig_Template
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
        $__internal_b710b8f094091a3a2ca6c1ab2caee483463e63fc35428b787190e8c9d23ca756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b710b8f094091a3a2ca6c1ab2caee483463e63fc35428b787190e8c9d23ca756->enter($__internal_b710b8f094091a3a2ca6c1ab2caee483463e63fc35428b787190e8c9d23ca756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_13f30137c3c84a16ff7c225669ee36b18c6bc7bdbead698265c0198bc8945044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f30137c3c84a16ff7c225669ee36b18c6bc7bdbead698265c0198bc8945044->enter($__internal_13f30137c3c84a16ff7c225669ee36b18c6bc7bdbead698265c0198bc8945044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_b710b8f094091a3a2ca6c1ab2caee483463e63fc35428b787190e8c9d23ca756->leave($__internal_b710b8f094091a3a2ca6c1ab2caee483463e63fc35428b787190e8c9d23ca756_prof);

        
        $__internal_13f30137c3c84a16ff7c225669ee36b18c6bc7bdbead698265c0198bc8945044->leave($__internal_13f30137c3c84a16ff7c225669ee36b18c6bc7bdbead698265c0198bc8945044_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
