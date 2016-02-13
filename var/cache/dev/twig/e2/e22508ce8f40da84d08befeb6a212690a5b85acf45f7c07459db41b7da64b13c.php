<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_32057ddbd7504069caeef8a93c6a519be6b5bc40680e96bb935804d1e5c75139 extends Twig_Template
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
        $__internal_c9492b7b80258946c855e8e609949687ca90aec6cdc9c2f2f78e337bcd19e9ac = $this->env->getExtension("native_profiler");
        $__internal_c9492b7b80258946c855e8e609949687ca90aec6cdc9c2f2f78e337bcd19e9ac->enter($__internal_c9492b7b80258946c855e8e609949687ca90aec6cdc9c2f2f78e337bcd19e9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9492b7b80258946c855e8e609949687ca90aec6cdc9c2f2f78e337bcd19e9ac->leave($__internal_c9492b7b80258946c855e8e609949687ca90aec6cdc9c2f2f78e337bcd19e9ac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a8166f9efdeb963ea5f6ab67946d0dbd0ac82b5794d10a5e0448351fbff0c8c1 = $this->env->getExtension("native_profiler");
        $__internal_a8166f9efdeb963ea5f6ab67946d0dbd0ac82b5794d10a5e0448351fbff0c8c1->enter($__internal_a8166f9efdeb963ea5f6ab67946d0dbd0ac82b5794d10a5e0448351fbff0c8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a8166f9efdeb963ea5f6ab67946d0dbd0ac82b5794d10a5e0448351fbff0c8c1->leave($__internal_a8166f9efdeb963ea5f6ab67946d0dbd0ac82b5794d10a5e0448351fbff0c8c1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a86405b6d40cee2b816a28e9b585ec44266aa5d47d39dab4e3ba74f571182f0a = $this->env->getExtension("native_profiler");
        $__internal_a86405b6d40cee2b816a28e9b585ec44266aa5d47d39dab4e3ba74f571182f0a->enter($__internal_a86405b6d40cee2b816a28e9b585ec44266aa5d47d39dab4e3ba74f571182f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a86405b6d40cee2b816a28e9b585ec44266aa5d47d39dab4e3ba74f571182f0a->leave($__internal_a86405b6d40cee2b816a28e9b585ec44266aa5d47d39dab4e3ba74f571182f0a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_af5c9693dc801ba1adedd88bdec06ad5a4bd23c11b664a1da8628a96bb392387 = $this->env->getExtension("native_profiler");
        $__internal_af5c9693dc801ba1adedd88bdec06ad5a4bd23c11b664a1da8628a96bb392387->enter($__internal_af5c9693dc801ba1adedd88bdec06ad5a4bd23c11b664a1da8628a96bb392387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_af5c9693dc801ba1adedd88bdec06ad5a4bd23c11b664a1da8628a96bb392387->leave($__internal_af5c9693dc801ba1adedd88bdec06ad5a4bd23c11b664a1da8628a96bb392387_prof);

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
