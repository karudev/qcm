<?php

/* KdvQuizBundle:Session:view.html.twig */
class __TwigTemplate_fa6628b28f09473db5791757228ecf0b97924b41a9914d2c16d61015936514ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("KdvQuizBundle::base.html.twig", "KdvQuizBundle:Session:view.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KdvQuizBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bcef3fdbf4db11f3dc10cf9f487684f5a7a8112eed530459ec708eb153213f1 = $this->env->getExtension("native_profiler");
        $__internal_8bcef3fdbf4db11f3dc10cf9f487684f5a7a8112eed530459ec708eb153213f1->enter($__internal_8bcef3fdbf4db11f3dc10cf9f487684f5a7a8112eed530459ec708eb153213f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KdvQuizBundle:Session:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bcef3fdbf4db11f3dc10cf9f487684f5a7a8112eed530459ec708eb153213f1->leave($__internal_8bcef3fdbf4db11f3dc10cf9f487684f5a7a8112eed530459ec708eb153213f1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17e2bbd31a45005efbff160dab2c30829edfa79da55edb10e60e3095845ab93b = $this->env->getExtension("native_profiler");
        $__internal_17e2bbd31a45005efbff160dab2c30829edfa79da55edb10e60e3095845ab93b->enter($__internal_17e2bbd31a45005efbff160dab2c30829edfa79da55edb10e60e3095845ab93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div align=\"center\">
     <div><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("kdv_quiz_quiz_home");
        echo "\">Retour à la liste des QCM</a></div>
<h1>Résultat</h1>


<div>
   ";
        // line 10
        $context["note"] = 0;
        // line 11
        echo "   ";
        $context["maxNote"] = 0;
        // line 12
        echo "   ";
        $context["newMultipleQuestion"] = true;
        // line 13
        echo "   ";
        $context["multipleQuestionAnswerPosition"] = 0;
        // line 14
        echo "   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "sessionAnswers", array()));
        foreach ($context['_seq'] as $context["k"] => $context["sa"]) {
            // line 15
            echo "       
      
       
       ";
            // line 18
            if ((isset($context["newMultipleQuestion"]) ? $context["newMultipleQuestion"] : $this->getContext($context, "newMultipleQuestion"))) {
                // line 19
                echo "       <div>Question: <b>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sa"], "question", array()), "enunciated", array()), "html", null, true);
                echo "</b></div>
       ";
                // line 20
                if ( !(null === $this->getAttribute($this->getAttribute($context["sa"], "question", array()), "picturePath", array()))) {
                    // line 21
                    echo "            <div><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($context["sa"], "question", array()), "picturePath", array())), "html", null, true);
                    echo "\"></div>
        ";
                }
                // line 23
                echo "       ";
            }
            // line 24
            echo "       <div>
              
           ";
            // line 26
            if (($this->getAttribute($this->getAttribute($context["sa"], "question", array()), "type", array()) == "multiple_text")) {
                // line 27
                echo "              
              
               ";
                // line 29
                $context["newMultipleQuestion"] = false;
                // line 30
                echo "               ";
                $context["reponse"] = false;
                // line 31
                echo "               ";
                $context["reponseText"] = null;
                // line 32
                echo "               ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["sa"], "question", array()), "answers", array()));
                foreach ($context['_seq'] as $context["kma"] => $context["a"]) {
                    // line 33
                    echo "                  
                   ";
                    // line 34
                    if (((($context["kma"] == (isset($context["multipleQuestionAnswerPosition"]) ? $context["multipleQuestionAnswerPosition"] : $this->getContext($context, "multipleQuestionAnswerPosition"))) && (twig_lower_filter($this->env, $this->getAttribute($context["sa"], "text", array())) == twig_lower_filter($this->env, $this->getAttribute($context["a"], "text", array())))) && $this->getAttribute($context["a"], "isRightAnswer", array()))) {
                        // line 35
                        echo "                       ";
                        $context["note"] = ((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")) + $this->getAttribute($context["a"], "point", array()));
                        // line 36
                        echo "                       ";
                        $context["reponse"] = true;
                        // line 37
                        echo "                   ";
                    }
                    // line 38
                    echo "                   ";
                    if (($context["kma"] == (isset($context["multipleQuestionAnswerPosition"]) ? $context["multipleQuestionAnswerPosition"] : $this->getContext($context, "multipleQuestionAnswerPosition")))) {
                        // line 39
                        echo "                       ";
                        $context["maxNote"] = ((isset($context["maxNote"]) ? $context["maxNote"] : $this->getContext($context, "maxNote")) + $this->getAttribute($context["a"], "point", array()));
                        // line 40
                        echo "                       ";
                        $context["reponseText"] = $this->getAttribute($context["a"], "text", array());
                        // line 41
                        echo "                   ";
                    }
                    echo "     
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['kma'], $context['a'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "               
                 <font color=\"";
                // line 44
                echo (((isset($context["reponse"]) ? $context["reponse"] : $this->getContext($context, "reponse"))) ? ("green") : ("red"));
                echo "\"><b>";
                echo twig_escape_filter($this->env, ((isset($context["multipleQuestionAnswerPosition"]) ? $context["multipleQuestionAnswerPosition"] : $this->getContext($context, "multipleQuestionAnswerPosition")) + 1), "html", null, true);
                echo "</b>. ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sa"], "text", array()), "html", null, true);
                echo "</font>
                ";
                // line 45
                if (((isset($context["reponse"]) ? $context["reponse"] : $this->getContext($context, "reponse")) == false)) {
                    // line 46
                    echo "                    <br/> <font color=\"green\"><b>";
                    echo twig_escape_filter($this->env, ((isset($context["multipleQuestionAnswerPosition"]) ? $context["multipleQuestionAnswerPosition"] : $this->getContext($context, "multipleQuestionAnswerPosition")) + 1), "html", null, true);
                    echo "</b>. ";
                    echo twig_escape_filter($this->env, (isset($context["reponseText"]) ? $context["reponseText"] : $this->getContext($context, "reponseText")), "html", null, true);
                    echo "</font>
                ";
                }
                // line 48
                echo "               
                ";
                // line 49
                $context["multipleQuestionAnswerPosition"] = ((isset($context["multipleQuestionAnswerPosition"]) ? $context["multipleQuestionAnswerPosition"] : $this->getContext($context, "multipleQuestionAnswerPosition")) + 1);
                // line 50
                echo "               
                ";
                // line 51
                if (($this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "sessionAnswers", array(), "any", false, true), ($context["k"] + 1), array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "sessionAnswers", array()), ($context["k"] + 1), array(), "array"), "question", array()), "id", array()) != $this->getAttribute($this->getAttribute($context["sa"], "question", array()), "id", array())))) {
                    // line 52
                    echo "                  ";
                    $context["newMultipleQuestion"] = true;
                    // line 53
                    echo "                  ";
                    $context["multipleQuestionAnswerPosition"] = 0;
                    // line 54
                    echo "               ";
                }
                // line 55
                echo "           ";
            } else {
                // line 56
                echo "              
               <font color=\"";
                // line 57
                echo (($this->getAttribute($this->getAttribute($context["sa"], "answer", array()), "isRightAnswer", array())) ? ("green") : ("red"));
                echo "\">Réponse: ";
                echo $this->getAttribute($this->getAttribute($context["sa"], "answer", array()), "text", array());
                echo "</font><br/>
               ";
                // line 58
                if (($this->getAttribute($this->getAttribute($context["sa"], "answer", array()), "isRightAnswer", array()) == false)) {
                    // line 59
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($context["sa"], "answer", array()), "question", array()), "answers", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                        // line 60
                        echo "                        ";
                        if ($this->getAttribute($context["a"], "isRightAnswer", array())) {
                            // line 61
                            echo "                             ";
                            $context["maxNote"] = ((isset($context["maxNote"]) ? $context["maxNote"] : $this->getContext($context, "maxNote")) + $this->getAttribute($context["a"], "point", array()));
                            // line 62
                            echo "                             <font color=\"green\">Réponse: ";
                            echo $this->getAttribute($context["a"], "text", array());
                            echo "</font>
                        ";
                        }
                        // line 64
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    echo "               ";
                } else {
                    // line 66
                    echo "                    ";
                    $context["maxNote"] = ((isset($context["maxNote"]) ? $context["maxNote"] : $this->getContext($context, "maxNote")) + $this->getAttribute($this->getAttribute($context["sa"], "answer", array()), "point", array()));
                    // line 67
                    echo "               ";
                }
                // line 68
                echo "           ";
            }
            // line 69
            echo "           
       </div>
       <div><br/></div>
       ";
            // line 72
            if ( !(null === $this->getAttribute($context["sa"], "answer", array()))) {
                // line 73
                echo "       ";
                $context["note"] = ((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")) + $this->getAttribute($this->getAttribute($context["sa"], "answer", array()), "point", array()));
                // line 74
                echo "       ";
            }
            // line 75
            echo "     
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['sa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "   
    <h2>NOTE : ";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["maxNote"]) ? $context["maxNote"] : $this->getContext($context, "maxNote")), "html", null, true);
        echo "</h2>
   ";
        // line 82
        echo "</div>
  
</div>
";
        
        $__internal_17e2bbd31a45005efbff160dab2c30829edfa79da55edb10e60e3095845ab93b->leave($__internal_17e2bbd31a45005efbff160dab2c30829edfa79da55edb10e60e3095845ab93b_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_72c565f29af0ebf3529adb9700de8d701c0b9420b447356428cf85905acd065d = $this->env->getExtension("native_profiler");
        $__internal_72c565f29af0ebf3529adb9700de8d701c0b9420b447356428cf85905acd065d->enter($__internal_72c565f29af0ebf3529adb9700de8d701c0b9420b447356428cf85905acd065d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "   ";
        
        $__internal_72c565f29af0ebf3529adb9700de8d701c0b9420b447356428cf85905acd065d->leave($__internal_72c565f29af0ebf3529adb9700de8d701c0b9420b447356428cf85905acd065d_prof);

    }

    public function getTemplateName()
    {
        return "KdvQuizBundle:Session:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 88,  274 => 87,  264 => 82,  258 => 78,  255 => 77,  248 => 75,  245 => 74,  242 => 73,  240 => 72,  235 => 69,  232 => 68,  229 => 67,  226 => 66,  223 => 65,  217 => 64,  211 => 62,  208 => 61,  205 => 60,  200 => 59,  198 => 58,  192 => 57,  189 => 56,  186 => 55,  183 => 54,  180 => 53,  177 => 52,  175 => 51,  172 => 50,  170 => 49,  167 => 48,  159 => 46,  157 => 45,  149 => 44,  146 => 43,  137 => 41,  134 => 40,  131 => 39,  128 => 38,  125 => 37,  122 => 36,  119 => 35,  117 => 34,  114 => 33,  109 => 32,  106 => 31,  103 => 30,  101 => 29,  97 => 27,  95 => 26,  91 => 24,  88 => 23,  82 => 21,  80 => 20,  75 => 19,  73 => 18,  68 => 15,  63 => 14,  60 => 13,  57 => 12,  54 => 11,  52 => 10,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "KdvQuizBundle::base.html.twig"%}*/
/* */
/* {% block body %}*/
/* <div align="center">*/
/*      <div><a href="{{path('kdv_quiz_quiz_home')}}">Retour à la liste des QCM</a></div>*/
/* <h1>Résultat</h1>*/
/* */
/* */
/* <div>*/
/*    {% set note = 0 %}*/
/*    {% set maxNote = 0 %}*/
/*    {% set newMultipleQuestion = true %}*/
/*    {% set multipleQuestionAnswerPosition = 0 %}*/
/*    {% for k,sa in session.sessionAnswers %}*/
/*        */
/*       */
/*        */
/*        {% if newMultipleQuestion %}*/
/*        <div>Question: <b>{{sa.question.enunciated}}</b></div>*/
/*        {% if sa.question.picturePath is not null %}*/
/*             <div><img src="{{asset(sa.question.picturePath)}}"></div>*/
/*         {% endif %}*/
/*        {% endif %}*/
/*        <div>*/
/*               */
/*            {% if sa.question.type == 'multiple_text' %}*/
/*               */
/*               */
/*                {% set newMultipleQuestion = false %}*/
/*                {% set reponse = false %}*/
/*                {% set reponseText = null %}*/
/*                {% for kma,a in sa.question.answers %}*/
/*                   */
/*                    {% if kma == multipleQuestionAnswerPosition and sa.text|lower == a.text|lower  and a.isRightAnswer %}*/
/*                        {% set note = note + a.point %}*/
/*                        {% set reponse = true %}*/
/*                    {% endif %}*/
/*                    {% if kma == multipleQuestionAnswerPosition %}*/
/*                        {% set maxNote = maxNote + a.point %}*/
/*                        {% set reponseText = a.text %}*/
/*                    {% endif %}     */
/*                {% endfor %}*/
/*                */
/*                  <font color="{{reponse ? 'green' : 'red'}}"><b>{{multipleQuestionAnswerPosition+1}}</b>. {{sa.text}}</font>*/
/*                 {% if reponse == false %}*/
/*                     <br/> <font color="green"><b>{{multipleQuestionAnswerPosition+1}}</b>. {{reponseText}}</font>*/
/*                 {% endif %}*/
/*                */
/*                 {% set multipleQuestionAnswerPosition = multipleQuestionAnswerPosition + 1 %}*/
/*                */
/*                 {% if session.sessionAnswers[k+1] is defined and session.sessionAnswers[k+1].question.id != sa.question.id %}*/
/*                   {% set newMultipleQuestion = true %}*/
/*                   {% set multipleQuestionAnswerPosition = 0 %}*/
/*                {% endif %}*/
/*            {% else %}*/
/*               */
/*                <font color="{{sa.answer.isRightAnswer ? 'green' : 'red'}}">Réponse: {{sa.answer.text|raw}}</font><br/>*/
/*                {% if sa.answer.isRightAnswer == false %}*/
/*                     {% for a in sa.answer.question.answers %}*/
/*                         {% if a.isRightAnswer %}*/
/*                              {% set maxNote = maxNote + a.point %}*/
/*                              <font color="green">Réponse: {{a.text|raw}}</font>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                {% else %}*/
/*                     {% set maxNote = maxNote + sa.answer.point %}*/
/*                {% endif %}*/
/*            {% endif %}*/
/*            */
/*        </div>*/
/*        <div><br/></div>*/
/*        {% if sa.answer is not null %}*/
/*        {% set note = note + sa.answer.point %}*/
/*        {% endif %}*/
/*      */
/*    {% endfor %}*/
/*    */
/*     <h2>NOTE : {{note}}/{{maxNote}}</h2>*/
/*    {#<div>(En cours de dév pour répartitions des points)</div>*/
/*    <div id="container" style="min-width: 400px; max-width: 600px; height: 400px; margin: 0 auto"></div>*/
/*     #}*/
/* </div>*/
/*   */
/* </div>*/
/* {% endblock %}*/
/*       */
/* {% block javascripts %}*/
/*    {# <script>*/
/*     $(function () {*/
/* */
/*     $('#container').highcharts({*/
/* */
/*         chart: {*/
/*             polar: true,*/
/*             type: 'line'*/
/*         },*/
/*         credits:{*/
/*             enabled:false*/
/*         },*/
/* */
/*         title: {*/
/*             text: 'Répartition des points',*/
/*             x: -80*/
/*         },*/
/* */
/*         pane: {*/
/*             size: '80%'*/
/*         },*/
/* */
/*         xAxis: {*/
/*             categories: ['Sales', 'Marketing', 'Development', 'Customer Support',*/
/*                     'Information Technology', 'Administration'],*/
/*             tickmarkPlacement: 'on',*/
/*             lineWidth: 0*/
/*         },*/
/* */
/*         yAxis: {*/
/*             gridLineInterpolation: 'polygon',*/
/*             lineWidth: 0,*/
/*             min: 0*/
/*         },*/
/* */
/*         tooltip: {*/
/*             shared: true,*/
/*             pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.0f}</b><br/>'*/
/*         },*/
/* */
/*         legend: {*/
/*             align: 'right',*/
/*             verticalAlign: 'top',*/
/*             y: 70,*/
/*             layout: 'vertical'*/
/*         },*/
/* */
/*         series: [{*/
/*             name: 'Point',*/
/*             data: [2, 5, 2, 5, 5, 3],*/
/*             pointPlacement: 'on'*/
/*         }]*/
/* */
/*     });*/
/* });*/
/* </script>#}*/
/* {% endblock %}*/
