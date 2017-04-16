<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_11a443b10b139a1824c73f8415d7b4398da4ceb26b9939de9be58777feb6c3e7 extends Twig_Template
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
        $__internal_4e3949a93b4ea13c8a132b803b5203082468ea1cc5faffb213a432cae868d110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e3949a93b4ea13c8a132b803b5203082468ea1cc5faffb213a432cae868d110->enter($__internal_4e3949a93b4ea13c8a132b803b5203082468ea1cc5faffb213a432cae868d110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_1c452894e1307a30588897fce49b440084482a4175c3e6370ffebc2742ce5afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c452894e1307a30588897fce49b440084482a4175c3e6370ffebc2742ce5afe->enter($__internal_1c452894e1307a30588897fce49b440084482a4175c3e6370ffebc2742ce5afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_4e3949a93b4ea13c8a132b803b5203082468ea1cc5faffb213a432cae868d110->leave($__internal_4e3949a93b4ea13c8a132b803b5203082468ea1cc5faffb213a432cae868d110_prof);

        
        $__internal_1c452894e1307a30588897fce49b440084482a4175c3e6370ffebc2742ce5afe->leave($__internal_1c452894e1307a30588897fce49b440084482a4175c3e6370ffebc2742ce5afe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
