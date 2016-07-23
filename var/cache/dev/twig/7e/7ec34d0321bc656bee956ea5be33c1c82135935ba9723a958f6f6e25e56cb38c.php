<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0861805491ef9d3137ef53eb2d816ee55ba0959aaa96d5438da329ac3c11b20e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c3a2bedef28f342bc981c859dd359538e4f045475d9bdaf3947d392267d60b6 = $this->env->getExtension("native_profiler");
        $__internal_7c3a2bedef28f342bc981c859dd359538e4f045475d9bdaf3947d392267d60b6->enter($__internal_7c3a2bedef28f342bc981c859dd359538e4f045475d9bdaf3947d392267d60b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c3a2bedef28f342bc981c859dd359538e4f045475d9bdaf3947d392267d60b6->leave($__internal_7c3a2bedef28f342bc981c859dd359538e4f045475d9bdaf3947d392267d60b6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_01ba0ddb1a878fe64221d098b05dc1f367048e7d137bb9676680259ab6e72dd8 = $this->env->getExtension("native_profiler");
        $__internal_01ba0ddb1a878fe64221d098b05dc1f367048e7d137bb9676680259ab6e72dd8->enter($__internal_01ba0ddb1a878fe64221d098b05dc1f367048e7d137bb9676680259ab6e72dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_01ba0ddb1a878fe64221d098b05dc1f367048e7d137bb9676680259ab6e72dd8->leave($__internal_01ba0ddb1a878fe64221d098b05dc1f367048e7d137bb9676680259ab6e72dd8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_238bc65a8c138978956ef1b40603d82933c0268be3144f8f1b5fcb05e6976614 = $this->env->getExtension("native_profiler");
        $__internal_238bc65a8c138978956ef1b40603d82933c0268be3144f8f1b5fcb05e6976614->enter($__internal_238bc65a8c138978956ef1b40603d82933c0268be3144f8f1b5fcb05e6976614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_238bc65a8c138978956ef1b40603d82933c0268be3144f8f1b5fcb05e6976614->leave($__internal_238bc65a8c138978956ef1b40603d82933c0268be3144f8f1b5fcb05e6976614_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5755e738af3b043cd8a5d457a836450affe0a575a4ef273a8d7770b1ff6fe8cd = $this->env->getExtension("native_profiler");
        $__internal_5755e738af3b043cd8a5d457a836450affe0a575a4ef273a8d7770b1ff6fe8cd->enter($__internal_5755e738af3b043cd8a5d457a836450affe0a575a4ef273a8d7770b1ff6fe8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5755e738af3b043cd8a5d457a836450affe0a575a4ef273a8d7770b1ff6fe8cd->leave($__internal_5755e738af3b043cd8a5d457a836450affe0a575a4ef273a8d7770b1ff6fe8cd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
