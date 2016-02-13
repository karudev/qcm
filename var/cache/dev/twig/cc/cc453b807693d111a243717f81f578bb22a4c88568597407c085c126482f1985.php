<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_49642e05aac206254c16400b28b05b62088ef5fdb9b53860fba29d150350e105 extends Twig_Template
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
        $__internal_e5bd709de26e1110733633687ffd6e76cbb5aa8edc52c3f820dabf1259024689 = $this->env->getExtension("native_profiler");
        $__internal_e5bd709de26e1110733633687ffd6e76cbb5aa8edc52c3f820dabf1259024689->enter($__internal_e5bd709de26e1110733633687ffd6e76cbb5aa8edc52c3f820dabf1259024689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5bd709de26e1110733633687ffd6e76cbb5aa8edc52c3f820dabf1259024689->leave($__internal_e5bd709de26e1110733633687ffd6e76cbb5aa8edc52c3f820dabf1259024689_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_107638f9f7d5d159a8e32302f5c25888c281d085f8c36b3af610e39946084507 = $this->env->getExtension("native_profiler");
        $__internal_107638f9f7d5d159a8e32302f5c25888c281d085f8c36b3af610e39946084507->enter($__internal_107638f9f7d5d159a8e32302f5c25888c281d085f8c36b3af610e39946084507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_107638f9f7d5d159a8e32302f5c25888c281d085f8c36b3af610e39946084507->leave($__internal_107638f9f7d5d159a8e32302f5c25888c281d085f8c36b3af610e39946084507_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6429f87caad7e9e27e23412c435929497a3d89def6043b9ea1aea5d7eff85944 = $this->env->getExtension("native_profiler");
        $__internal_6429f87caad7e9e27e23412c435929497a3d89def6043b9ea1aea5d7eff85944->enter($__internal_6429f87caad7e9e27e23412c435929497a3d89def6043b9ea1aea5d7eff85944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6429f87caad7e9e27e23412c435929497a3d89def6043b9ea1aea5d7eff85944->leave($__internal_6429f87caad7e9e27e23412c435929497a3d89def6043b9ea1aea5d7eff85944_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c452c3d9e8695d9862fea38d3296351e3154d26af545f52e12d30510924c941c = $this->env->getExtension("native_profiler");
        $__internal_c452c3d9e8695d9862fea38d3296351e3154d26af545f52e12d30510924c941c->enter($__internal_c452c3d9e8695d9862fea38d3296351e3154d26af545f52e12d30510924c941c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c452c3d9e8695d9862fea38d3296351e3154d26af545f52e12d30510924c941c->leave($__internal_c452c3d9e8695d9862fea38d3296351e3154d26af545f52e12d30510924c941c_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
