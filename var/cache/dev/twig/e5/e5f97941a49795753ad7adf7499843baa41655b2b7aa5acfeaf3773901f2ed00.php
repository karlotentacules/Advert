<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_001ec319e56b05cdf9c9542561587dc367de6b139dec9406243e318a64bdc777 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c750152819db8af22cc542c17fe709b9e1d3dbfac779aa298a9f54e7cd3e69c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c750152819db8af22cc542c17fe709b9e1d3dbfac779aa298a9f54e7cd3e69c->enter($__internal_9c750152819db8af22cc542c17fe709b9e1d3dbfac779aa298a9f54e7cd3e69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_dafa8d5871bd3f0a16462324b578a67b140c8cb6a4f5f918c0825cdeab6071c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dafa8d5871bd3f0a16462324b578a67b140c8cb6a4f5f918c0825cdeab6071c5->enter($__internal_dafa8d5871bd3f0a16462324b578a67b140c8cb6a4f5f918c0825cdeab6071c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c750152819db8af22cc542c17fe709b9e1d3dbfac779aa298a9f54e7cd3e69c->leave($__internal_9c750152819db8af22cc542c17fe709b9e1d3dbfac779aa298a9f54e7cd3e69c_prof);

        
        $__internal_dafa8d5871bd3f0a16462324b578a67b140c8cb6a4f5f918c0825cdeab6071c5->leave($__internal_dafa8d5871bd3f0a16462324b578a67b140c8cb6a4f5f918c0825cdeab6071c5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0d522e097c3c610bd3c1e76260ad41a80823393a0db4879eb76fb8bc4f854273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d522e097c3c610bd3c1e76260ad41a80823393a0db4879eb76fb8bc4f854273->enter($__internal_0d522e097c3c610bd3c1e76260ad41a80823393a0db4879eb76fb8bc4f854273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b3cf568871be0fe27d3e3881ec8a12284bcf94846fd432908e745edcf1bc9f89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3cf568871be0fe27d3e3881ec8a12284bcf94846fd432908e745edcf1bc9f89->enter($__internal_b3cf568871be0fe27d3e3881ec8a12284bcf94846fd432908e745edcf1bc9f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_b3cf568871be0fe27d3e3881ec8a12284bcf94846fd432908e745edcf1bc9f89->leave($__internal_b3cf568871be0fe27d3e3881ec8a12284bcf94846fd432908e745edcf1bc9f89_prof);

        
        $__internal_0d522e097c3c610bd3c1e76260ad41a80823393a0db4879eb76fb8bc4f854273->leave($__internal_0d522e097c3c610bd3c1e76260ad41a80823393a0db4879eb76fb8bc4f854273_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/test2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
