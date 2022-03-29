<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_f88a2ac0fb44f321c2a8cad49633c767af55e3c913ca001ebb40d35bf3313d7b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!----------------------------------------------------------------------------------------------------------------------------- Start  -------------->
    <div style=\"padding: 5%\">
        <div style=\"padding-right: 20%; padding-left: 20%\">
            <div class=\"card card-info\">
                <!-------------------------------------------------------------------------------------------------------- Small Div -->
                <div class=\"card-header\">
                    <h3 class=\"card-title\">Horizontal Form</h3>
                </div>
                <!------------------------------------------------------------------------------------------------------ Start Form --->
                <form class=\"form-horizontal\">
                    <div class=\"card-body\">
                        <div class=\"form-group row\">
                            <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Email</label>
                            <div class=\"col-sm-10\">
                                <input type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Email\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"inputPassword3\" class=\"col-sm-2 col-form-label\">Password</label>
                            <div class=\"col-sm-10\">
                                <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <div class=\"offset-sm-2 col-sm-10\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck2\">
                                    <label class=\"form-check-label\" for=\"exampleCheck2\">Remember me</label>
                                </div>
                            </div>
                        </div>
                    </div>
                                                            <!------------------------------------------------------------ Small Div -->
                    <div class=\"card-footer\">
                        <button type=\"submit\" class=\"btn btn-info\">Sign in</button>
                        <button type=\"submit\" class=\"btn btn-default float-right\">Cancel</button>
                    </div>
                </form>
                <!-------------------------------------------------------------------------------------------------------- End Form ---->
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Hello HomeController!{% endblock title%}
{% block body %}
<!----------------------------------------------------------------------------------------------------------------------------- Start  -------------->
    <div style=\"padding: 5%\">
        <div style=\"padding-right: 20%; padding-left: 20%\">
            <div class=\"card card-info\">
                <!-------------------------------------------------------------------------------------------------------- Small Div -->
                <div class=\"card-header\">
                    <h3 class=\"card-title\">Horizontal Form</h3>
                </div>
                <!------------------------------------------------------------------------------------------------------ Start Form --->
                <form class=\"form-horizontal\">
                    <div class=\"card-body\">
                        <div class=\"form-group row\">
                            <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Email</label>
                            <div class=\"col-sm-10\">
                                <input type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Email\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <label for=\"inputPassword3\" class=\"col-sm-2 col-form-label\">Password</label>
                            <div class=\"col-sm-10\">
                                <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\">
                            </div>
                        </div>
                        <div class=\"form-group row\">
                            <div class=\"offset-sm-2 col-sm-10\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck2\">
                                    <label class=\"form-check-label\" for=\"exampleCheck2\">Remember me</label>
                                </div>
                            </div>
                        </div>
                    </div>
                                                            <!------------------------------------------------------------ Small Div -->
                    <div class=\"card-footer\">
                        <button type=\"submit\" class=\"btn btn-info\">Sign in</button>
                        <button type=\"submit\" class=\"btn btn-default float-right\">Cancel</button>
                    </div>
                </form>
                <!-------------------------------------------------------------------------------------------------------- End Form ---->
            </div>
        </div>
    </div>
{% endblock body%}
", "home/index.html.twig", "/var/www/html/templates/home/index.html.twig");
    }
}
