<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_45f805d36b797dddeac2e63a762201711a9dd95bc457bbcba6c1c89626392c6c extends Twig_Template
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
        $__internal_02b7c448b202de087aa6f57caf26e365b9634ef98a9f89bfe5cfa40cfe35a67d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02b7c448b202de087aa6f57caf26e365b9634ef98a9f89bfe5cfa40cfe35a67d->enter($__internal_02b7c448b202de087aa6f57caf26e365b9634ef98a9f89bfe5cfa40cfe35a67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_86a753daa80f8db0b1e558a941fa948fbe4bdef97699bcffa43bcafc075c2b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a753daa80f8db0b1e558a941fa948fbe4bdef97699bcffa43bcafc075c2b75->enter($__internal_86a753daa80f8db0b1e558a941fa948fbe4bdef97699bcffa43bcafc075c2b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_02b7c448b202de087aa6f57caf26e365b9634ef98a9f89bfe5cfa40cfe35a67d->leave($__internal_02b7c448b202de087aa6f57caf26e365b9634ef98a9f89bfe5cfa40cfe35a67d_prof);

        
        $__internal_86a753daa80f8db0b1e558a941fa948fbe4bdef97699bcffa43bcafc075c2b75->leave($__internal_86a753daa80f8db0b1e558a941fa948fbe4bdef97699bcffa43bcafc075c2b75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
