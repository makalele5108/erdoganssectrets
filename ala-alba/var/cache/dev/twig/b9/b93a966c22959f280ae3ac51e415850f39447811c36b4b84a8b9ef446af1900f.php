<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_afecc3d3404aecf5010b6f4aee82335d1349b077b2b00dac6b90be0541f28fb9 extends Twig_Template
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
        $__internal_3e589305959bee863f9f461ef909f8a5bf5145f4c654470bb3c245db04e2da66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e589305959bee863f9f461ef909f8a5bf5145f4c654470bb3c245db04e2da66->enter($__internal_3e589305959bee863f9f461ef909f8a5bf5145f4c654470bb3c245db04e2da66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_923a8e7e92be4a25e89067953fec02d4e46558a744191fbe0adbfbed18099522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923a8e7e92be4a25e89067953fec02d4e46558a744191fbe0adbfbed18099522->enter($__internal_923a8e7e92be4a25e89067953fec02d4e46558a744191fbe0adbfbed18099522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_3e589305959bee863f9f461ef909f8a5bf5145f4c654470bb3c245db04e2da66->leave($__internal_3e589305959bee863f9f461ef909f8a5bf5145f4c654470bb3c245db04e2da66_prof);

        
        $__internal_923a8e7e92be4a25e89067953fec02d4e46558a744191fbe0adbfbed18099522->leave($__internal_923a8e7e92be4a25e89067953fec02d4e46558a744191fbe0adbfbed18099522_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
