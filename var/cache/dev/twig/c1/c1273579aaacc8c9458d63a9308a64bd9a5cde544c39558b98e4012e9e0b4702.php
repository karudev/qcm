<?php

/* KdvQuizBundle::base.html.twig */
class __TwigTemplate_3dbcb408123eb63058132e8019a92286dd2a34ef0b70ccb10cafe1dfff6ca31c extends Twig_Template
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
        $__internal_8494f4d912d591100f9288b0f807fcfc8658b4abcaba25f4e365cc437d0c3e78 = $this->env->getExtension("native_profiler");
        $__internal_8494f4d912d591100f9288b0f807fcfc8658b4abcaba25f4e365cc437d0c3e78->enter($__internal_8494f4d912d591100f9288b0f807fcfc8658b4abcaba25f4e365cc437d0c3e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KdvQuizBundle::base.html.twig"));

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
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "
<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/kdvquiz/js/jquery/jquery-1.12.0.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/kdvquiz/js/highcharts/highcharts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/kdvquiz/js/highcharts/highcharts-more.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/kdvquiz/js/highcharts/modules/exporting.js"), "html", null, true);
        echo "\"></script>
";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "</body>
</html>
";
        
        $__internal_8494f4d912d591100f9288b0f807fcfc8658b4abcaba25f4e365cc437d0c3e78->leave($__internal_8494f4d912d591100f9288b0f807fcfc8658b4abcaba25f4e365cc437d0c3e78_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3a80aa2f5755f5d132aafbfcc0faa1a7bbf7a796b4c2313d9cea217738b74df = $this->env->getExtension("native_profiler");
        $__internal_a3a80aa2f5755f5d132aafbfcc0faa1a7bbf7a796b4c2313d9cea217738b74df->enter($__internal_a3a80aa2f5755f5d132aafbfcc0faa1a7bbf7a796b4c2313d9cea217738b74df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "QCM";
        
        $__internal_a3a80aa2f5755f5d132aafbfcc0faa1a7bbf7a796b4c2313d9cea217738b74df->leave($__internal_a3a80aa2f5755f5d132aafbfcc0faa1a7bbf7a796b4c2313d9cea217738b74df_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_23790e6c275d8aaa0fbf7455aaf4a0704350199b070bcaaddc56b64dd93f3a60 = $this->env->getExtension("native_profiler");
        $__internal_23790e6c275d8aaa0fbf7455aaf4a0704350199b070bcaaddc56b64dd93f3a60->enter($__internal_23790e6c275d8aaa0fbf7455aaf4a0704350199b070bcaaddc56b64dd93f3a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_23790e6c275d8aaa0fbf7455aaf4a0704350199b070bcaaddc56b64dd93f3a60->leave($__internal_23790e6c275d8aaa0fbf7455aaf4a0704350199b070bcaaddc56b64dd93f3a60_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_36b8932e8790ae49bacce359860cdc3c5613ff1fc7f582b6c05a2c989146aaad = $this->env->getExtension("native_profiler");
        $__internal_36b8932e8790ae49bacce359860cdc3c5613ff1fc7f582b6c05a2c989146aaad->enter($__internal_36b8932e8790ae49bacce359860cdc3c5613ff1fc7f582b6c05a2c989146aaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_36b8932e8790ae49bacce359860cdc3c5613ff1fc7f582b6c05a2c989146aaad->leave($__internal_36b8932e8790ae49bacce359860cdc3c5613ff1fc7f582b6c05a2c989146aaad_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_260e496a0c62fefadbe527bd00aa3a1b2a5643acc9e7fc2f070c514d67e938fc = $this->env->getExtension("native_profiler");
        $__internal_260e496a0c62fefadbe527bd00aa3a1b2a5643acc9e7fc2f070c514d67e938fc->enter($__internal_260e496a0c62fefadbe527bd00aa3a1b2a5643acc9e7fc2f070c514d67e938fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_260e496a0c62fefadbe527bd00aa3a1b2a5643acc9e7fc2f070c514d67e938fc->leave($__internal_260e496a0c62fefadbe527bd00aa3a1b2a5643acc9e7fc2f070c514d67e938fc_prof);

    }

    public function getTemplateName()
    {
        return "KdvQuizBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 16,  100 => 10,  89 => 6,  77 => 5,  68 => 17,  66 => 16,  62 => 15,  58 => 14,  54 => 13,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}QCM{% endblock %}</title>*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* {% block body %}{% endblock %}*/
/* */
/* <script src="{{asset('bundles/kdvquiz/js/jquery/jquery-1.12.0.js')}}"></script>*/
/* <script src="{{asset('bundles/kdvquiz/js/highcharts/highcharts.js')}}"></script>*/
/* <script src="{{asset('bundles/kdvquiz/js/highcharts/highcharts-more.js')}}"></script>*/
/* <script src="{{asset('bundles/kdvquiz/js/highcharts/modules/exporting.js')}}"></script>*/
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
