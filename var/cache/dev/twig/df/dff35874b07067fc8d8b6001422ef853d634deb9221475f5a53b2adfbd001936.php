<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_42ad1cda4129fb7dd270a17c73e9d777ce83a5593fdd83dab77160909243549d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f92078517128ccdd128814b58eb9ccaa4325eb0249cecc03ea221a9d6cd8e370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f92078517128ccdd128814b58eb9ccaa4325eb0249cecc03ea221a9d6cd8e370->enter($__internal_f92078517128ccdd128814b58eb9ccaa4325eb0249cecc03ea221a9d6cd8e370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f11ba770473cff9aa5243b85aa1f857e796900f2a4c436fe7e3298c6d67660e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f11ba770473cff9aa5243b85aa1f857e796900f2a4c436fe7e3298c6d67660e5->enter($__internal_f11ba770473cff9aa5243b85aa1f857e796900f2a4c436fe7e3298c6d67660e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_f92078517128ccdd128814b58eb9ccaa4325eb0249cecc03ea221a9d6cd8e370->leave($__internal_f92078517128ccdd128814b58eb9ccaa4325eb0249cecc03ea221a9d6cd8e370_prof);

        
        $__internal_f11ba770473cff9aa5243b85aa1f857e796900f2a4c436fe7e3298c6d67660e5->leave($__internal_f11ba770473cff9aa5243b85aa1f857e796900f2a4c436fe7e3298c6d67660e5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_afe838243f5899d954071df8f2d3d02e20966ab9362f405c5332ced64ced508c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afe838243f5899d954071df8f2d3d02e20966ab9362f405c5332ced64ced508c->enter($__internal_afe838243f5899d954071df8f2d3d02e20966ab9362f405c5332ced64ced508c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_108dee70a86c65aee731156c89b10d3d871c6345d8524275b7e0b13f878d9769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_108dee70a86c65aee731156c89b10d3d871c6345d8524275b7e0b13f878d9769->enter($__internal_108dee70a86c65aee731156c89b10d3d871c6345d8524275b7e0b13f878d9769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_108dee70a86c65aee731156c89b10d3d871c6345d8524275b7e0b13f878d9769->leave($__internal_108dee70a86c65aee731156c89b10d3d871c6345d8524275b7e0b13f878d9769_prof);

        
        $__internal_afe838243f5899d954071df8f2d3d02e20966ab9362f405c5332ced64ced508c->leave($__internal_afe838243f5899d954071df8f2d3d02e20966ab9362f405c5332ced64ced508c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_bf2b7d8b2150d37f887b035486fa85ace3aa5d23321740fec51b25573fa10e4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf2b7d8b2150d37f887b035486fa85ace3aa5d23321740fec51b25573fa10e4f->enter($__internal_bf2b7d8b2150d37f887b035486fa85ace3aa5d23321740fec51b25573fa10e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e4e1b1ccc51a999fccd7fea73ab095c605c23b9652487ef4d999dd98088c3e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e1b1ccc51a999fccd7fea73ab095c605c23b9652487ef4d999dd98088c3e46->enter($__internal_e4e1b1ccc51a999fccd7fea73ab095c605c23b9652487ef4d999dd98088c3e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e4e1b1ccc51a999fccd7fea73ab095c605c23b9652487ef4d999dd98088c3e46->leave($__internal_e4e1b1ccc51a999fccd7fea73ab095c605c23b9652487ef4d999dd98088c3e46_prof);

        
        $__internal_bf2b7d8b2150d37f887b035486fa85ace3aa5d23321740fec51b25573fa10e4f->leave($__internal_bf2b7d8b2150d37f887b035486fa85ace3aa5d23321740fec51b25573fa10e4f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_575bf26f0d9e91ff9cf45d18f066b1eaba28b8ba8a51ce6a60d12774524399e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_575bf26f0d9e91ff9cf45d18f066b1eaba28b8ba8a51ce6a60d12774524399e3->enter($__internal_575bf26f0d9e91ff9cf45d18f066b1eaba28b8ba8a51ce6a60d12774524399e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c441827256b403e707bf4b6de7088a972df8ff0a9969f79e93367d05e7f1a332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c441827256b403e707bf4b6de7088a972df8ff0a9969f79e93367d05e7f1a332->enter($__internal_c441827256b403e707bf4b6de7088a972df8ff0a9969f79e93367d05e7f1a332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c441827256b403e707bf4b6de7088a972df8ff0a9969f79e93367d05e7f1a332->leave($__internal_c441827256b403e707bf4b6de7088a972df8ff0a9969f79e93367d05e7f1a332_prof);

        
        $__internal_575bf26f0d9e91ff9cf45d18f066b1eaba28b8ba8a51ce6a60d12774524399e3->leave($__internal_575bf26f0d9e91ff9cf45d18f066b1eaba28b8ba8a51ce6a60d12774524399e3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/test2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
