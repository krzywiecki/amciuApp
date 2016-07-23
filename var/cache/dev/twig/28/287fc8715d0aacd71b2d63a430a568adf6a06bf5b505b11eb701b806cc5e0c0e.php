<?php

/* base.html.twig */
class __TwigTemplate_79f8cd50e55d79b3c480fb5f574e5581214bb9f1afb53586f6e1c8ce91192257 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b1c7cf6f7e61d98c6f4b25d1ee28e9963f9c06a0899ee4b094f2e0b37728f75 = $this->env->getExtension("native_profiler");
        $__internal_4b1c7cf6f7e61d98c6f4b25d1ee28e9963f9c06a0899ee4b094f2e0b37728f75->enter($__internal_4b1c7cf6f7e61d98c6f4b25d1ee28e9963f9c06a0899ee4b094f2e0b37728f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_4b1c7cf6f7e61d98c6f4b25d1ee28e9963f9c06a0899ee4b094f2e0b37728f75->leave($__internal_4b1c7cf6f7e61d98c6f4b25d1ee28e9963f9c06a0899ee4b094f2e0b37728f75_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_78168ff96443eeaf42e7421e90d9811a75b774b20a2b4bbb9e3e834d168cc737 = $this->env->getExtension("native_profiler");
        $__internal_78168ff96443eeaf42e7421e90d9811a75b774b20a2b4bbb9e3e834d168cc737->enter($__internal_78168ff96443eeaf42e7421e90d9811a75b774b20a2b4bbb9e3e834d168cc737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_78168ff96443eeaf42e7421e90d9811a75b774b20a2b4bbb9e3e834d168cc737->leave($__internal_78168ff96443eeaf42e7421e90d9811a75b774b20a2b4bbb9e3e834d168cc737_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_87011d08383815f5d07466169bdacf63ac10de88907c9cca092e842dfe99bc3f = $this->env->getExtension("native_profiler");
        $__internal_87011d08383815f5d07466169bdacf63ac10de88907c9cca092e842dfe99bc3f->enter($__internal_87011d08383815f5d07466169bdacf63ac10de88907c9cca092e842dfe99bc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_87011d08383815f5d07466169bdacf63ac10de88907c9cca092e842dfe99bc3f->leave($__internal_87011d08383815f5d07466169bdacf63ac10de88907c9cca092e842dfe99bc3f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b223863b72825a736f631354299caca5b97a9522c6d0f8d533e94a6e385a623c = $this->env->getExtension("native_profiler");
        $__internal_b223863b72825a736f631354299caca5b97a9522c6d0f8d533e94a6e385a623c->enter($__internal_b223863b72825a736f631354299caca5b97a9522c6d0f8d533e94a6e385a623c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b223863b72825a736f631354299caca5b97a9522c6d0f8d533e94a6e385a623c->leave($__internal_b223863b72825a736f631354299caca5b97a9522c6d0f8d533e94a6e385a623c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_50e9c63971d5b75a664b6cbef75a927a315d84cc9a14f5a46366d5b4ff999454 = $this->env->getExtension("native_profiler");
        $__internal_50e9c63971d5b75a664b6cbef75a927a315d84cc9a14f5a46366d5b4ff999454->enter($__internal_50e9c63971d5b75a664b6cbef75a927a315d84cc9a14f5a46366d5b4ff999454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_50e9c63971d5b75a664b6cbef75a927a315d84cc9a14f5a46366d5b4ff999454->leave($__internal_50e9c63971d5b75a664b6cbef75a927a315d84cc9a14f5a46366d5b4ff999454_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
