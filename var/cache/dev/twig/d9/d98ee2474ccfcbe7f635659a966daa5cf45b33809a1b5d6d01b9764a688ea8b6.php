<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4fe0126cea834c2021a568bc22188a6a6babe007ed6f1aff9514e87b8ba11595 extends Twig_Template
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
        $__internal_a96d1265c18b7608147e9ed7f09102b4994fe11229bc5cee651525d186d2169b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a96d1265c18b7608147e9ed7f09102b4994fe11229bc5cee651525d186d2169b->enter($__internal_a96d1265c18b7608147e9ed7f09102b4994fe11229bc5cee651525d186d2169b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_207488ef2394f400cd95121efa54d39328e484cb131a8d2999066cf15d771a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_207488ef2394f400cd95121efa54d39328e484cb131a8d2999066cf15d771a40->enter($__internal_207488ef2394f400cd95121efa54d39328e484cb131a8d2999066cf15d771a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a96d1265c18b7608147e9ed7f09102b4994fe11229bc5cee651525d186d2169b->leave($__internal_a96d1265c18b7608147e9ed7f09102b4994fe11229bc5cee651525d186d2169b_prof);

        
        $__internal_207488ef2394f400cd95121efa54d39328e484cb131a8d2999066cf15d771a40->leave($__internal_207488ef2394f400cd95121efa54d39328e484cb131a8d2999066cf15d771a40_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5eecb484c35060a6afb6db6c1bda707066f3da9c2de7f5493e8e223b3aac8b8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eecb484c35060a6afb6db6c1bda707066f3da9c2de7f5493e8e223b3aac8b8b->enter($__internal_5eecb484c35060a6afb6db6c1bda707066f3da9c2de7f5493e8e223b3aac8b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f475f134da79686063eaa63dab0abde822708d4344a78a76fae328660a218038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f475f134da79686063eaa63dab0abde822708d4344a78a76fae328660a218038->enter($__internal_f475f134da79686063eaa63dab0abde822708d4344a78a76fae328660a218038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f475f134da79686063eaa63dab0abde822708d4344a78a76fae328660a218038->leave($__internal_f475f134da79686063eaa63dab0abde822708d4344a78a76fae328660a218038_prof);

        
        $__internal_5eecb484c35060a6afb6db6c1bda707066f3da9c2de7f5493e8e223b3aac8b8b->leave($__internal_5eecb484c35060a6afb6db6c1bda707066f3da9c2de7f5493e8e223b3aac8b8b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea1b47632cf27f34aced8e9ceee719b711d1cafb7ffd836fbc43a5c28bb28a85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea1b47632cf27f34aced8e9ceee719b711d1cafb7ffd836fbc43a5c28bb28a85->enter($__internal_ea1b47632cf27f34aced8e9ceee719b711d1cafb7ffd836fbc43a5c28bb28a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_653da44e8184f771ec2c87625d8a4c5f5fbb466698c5b8be96e6898124483a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653da44e8184f771ec2c87625d8a4c5f5fbb466698c5b8be96e6898124483a62->enter($__internal_653da44e8184f771ec2c87625d8a4c5f5fbb466698c5b8be96e6898124483a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_653da44e8184f771ec2c87625d8a4c5f5fbb466698c5b8be96e6898124483a62->leave($__internal_653da44e8184f771ec2c87625d8a4c5f5fbb466698c5b8be96e6898124483a62_prof);

        
        $__internal_ea1b47632cf27f34aced8e9ceee719b711d1cafb7ffd836fbc43a5c28bb28a85->leave($__internal_ea1b47632cf27f34aced8e9ceee719b711d1cafb7ffd836fbc43a5c28bb28a85_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cac8883bf1724662cd3e02f9338a5f1a6b05adf9c9a02580bbe8be025e07d62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cac8883bf1724662cd3e02f9338a5f1a6b05adf9c9a02580bbe8be025e07d62->enter($__internal_5cac8883bf1724662cd3e02f9338a5f1a6b05adf9c9a02580bbe8be025e07d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6463a56c05e0cef4e1e8eac694cd2d257ff1f6cdbe8c2194a33c50f5c9ea33a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6463a56c05e0cef4e1e8eac694cd2d257ff1f6cdbe8c2194a33c50f5c9ea33a->enter($__internal_e6463a56c05e0cef4e1e8eac694cd2d257ff1f6cdbe8c2194a33c50f5c9ea33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e6463a56c05e0cef4e1e8eac694cd2d257ff1f6cdbe8c2194a33c50f5c9ea33a->leave($__internal_e6463a56c05e0cef4e1e8eac694cd2d257ff1f6cdbe8c2194a33c50f5c9ea33a_prof);

        
        $__internal_5cac8883bf1724662cd3e02f9338a5f1a6b05adf9c9a02580bbe8be025e07d62->leave($__internal_5cac8883bf1724662cd3e02f9338a5f1a6b05adf9c9a02580bbe8be025e07d62_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/test2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
