<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layout.html.twig */
class __TwigTemplate_3a3ee9afd40a07d393ca9e246698ec0fa7bc4e7c52562930e8854873aa3bcb07 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"ltr\" lang=\"en\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"ltr\" lang=\"en\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"ltr\" lang=\"en\">
<!--<![endif]-->

<!-- Mirrored from templatetasarim.com/opencart/Bicycle/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 11:36:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\" /><!-- /Added by HTTrack -->
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>VELO.TN</title>
    <base  />
    <meta name=\"description\" content=\"My Store\" />
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/jquery-2.1.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" />
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/inspire/product-slider-zoom/jquery.elevatezoom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/../../../cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/../../../cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&amp;display=swap\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/view/theme/default/stylesheet/stylesheet.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/swiper/css/owl.carousel.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/swiper/css/owl.theme.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/swiper/css/swiper.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/swiper/css/opencart.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/swiper/css/css/owl.carousel.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/swiper/css/css/owl.theme.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/magnific/magnific-popup.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/view/theme/default/stylesheet/inspirenewsletter.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/inspirequickview.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />

    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/countdown/jquery.plugin.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/countdown/jquery.countdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!--right to left (RTL)-->
    <!--over RTL-->
    <!--lightbox -->
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/blog/lightbox-2.6.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/blog/lightbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!--lightbox End-->

    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/inspire/custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/swiper/js/owl.carousel.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/swiper/js/swiper.jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/inspirequickview.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/inspirenewsletter.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/common.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <link href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/catalog/cart.png"), "html", null, true);
        echo "\" rel=\"icon\" />
    <svg style=\"display:none\">
        <symbol viewBox=\"0 0 483.083 483.083\" id=\"hsearch\">
            <path d=\"M332.74,315.35c30.883-33.433,50.15-78.2,50.15-127.5C382.89,84.433,298.74,0,195.04,0S7.19,84.433,7.19,187.85
      S91.34,375.7,195.04,375.7c42.217,0,81.033-13.883,112.483-37.4l139.683,139.683c3.4,3.4,7.65,5.1,11.9,5.1s8.783-1.7,11.9-5.1
      c6.517-6.517,6.517-17.283,0-24.083L332.74,315.35z M41.19,187.85C41.19,103.133,110.04,34,195.04,34
      c84.717,0,153.85,68.85,153.85,153.85S280.04,341.7,195.04,341.7S41.19,272.567,41.19,187.85z\"/>
        </symbol>
        <symbol viewBox=\"0 0 129 129\" id=\"addwish\">
            <path d=\"m121.6,40.1c-3.3-16.6-15.1-27.3-30.3-27.3-8.5,0-17.7,3.5-26.7,10.1-9.1-6.8-18.3-10.3-26.9-10.3-15.2,0-27.1,10.8-30.3,27.6-4.8,24.9 10.6,58 55.7,76 0.5,0.2 1,0.3 1.5,0.3 0.5,0 1-0.1 1.5-0.3 45-18.4 60.3-51.4 55.5-76.1zm-57,67.9c-39.6-16.4-53.3-45-49.2-66.3 2.4-12.7 11.2-21 22.3-21 7.5,0 15.9,3.6 24.3,10.5 1.5,1.2 3.6,1.2 5.1,0 8.4-6.7 16.7-10.2 24.2-10.2 11.1,0 19.8,8.1 22.3,20.7 4.1,21.1-9.5,49.6-49,66.3z\"></path>
        </symbol>
        <symbol id=\"addcart\" viewBox=\"0 0 511.998 511.998\">
            <path d=\"M507.472,175.195c-3.63-4.286-8.96-6.757-14.577-6.757h-53.031L335.717,26.582c-6.247-8.514-18.2-10.329-26.702-4.095
      c-8.508,6.247-10.336,18.207-4.095,26.708l87.546,119.244H114.439l87.546-119.244c6.247-8.508,4.407-20.461-4.095-26.708
      c-8.502-6.241-20.461-4.407-26.708,4.095L67.034,168.439h-47.93c-5.617,0-10.947,2.471-14.577,6.757s-5.19,9.947-4.267,15.487
      L48.021,477.25c1.535,9.208,9.508,15.965,18.843,15.965h378.269c9.342,0,17.309-6.75,18.843-15.965l47.761-286.567
      C512.662,185.149,511.102,179.481,507.472,175.195z M428.953,455.006H83.047L41.654,206.648h428.692L428.953,455.006z\"></path>
            <path d=\"M256,251.225c-10.552,0-19.104,8.552-19.104,19.104v125.454c0,10.552,8.552,19.104,19.104,19.104
      c10.552,0,19.104-8.546,19.104-19.105V270.329C275.104,259.777,266.552,251.225,256,251.225z\"></path>
            <path d=\"M354.706,251.225c-10.552,0-19.104,8.552-19.104,19.104v125.454c0,10.552,8.552,19.104,19.104,19.104
      c10.553,0,19.105-8.546,19.104-19.105V270.329C373.81,259.777,365.258,251.225,354.706,251.225z\"></path>
            <path d=\"M157.294,251.225c-10.552,0-19.104,8.552-19.104,19.104v125.454c0,10.552,8.552,19.104,19.104,19.104
      s19.104-8.546,19.104-19.105V270.329C176.398,259.777,167.846,251.225,157.294,251.225z\"></path>
        </symbol>
        <symbol id=\"addcompare\" viewBox=\"0 0 73.17 73.17\">
            <path d=\"M36.856,12.554c-2.393,0-4.328,1.896-4.328,4.234v52.14c0,2.348,1.936,4.242,4.328,4.242
        c2.389,0,4.328-1.896,4.328-4.242v-52.14C41.185,14.449,39.244,12.554,36.856,12.554z M13.957,26.687
        c-2.391,0-4.329,1.903-4.329,4.242v37.999c0,2.348,1.938,4.242,4.329,4.242c2.388,0,4.325-1.896,4.325-4.242V30.929
        C18.282,28.59,16.345,26.687,13.957,26.687z M59.214,0c-2.389,0-4.324,1.903-4.324,4.242v64.686c0,2.348,1.937,4.242,4.324,4.242
        c2.393,0,4.328-1.896,4.328-4.242V4.242C63.542,1.903,61.606,0,59.214,0z\"></path>
        </symbol>
        <symbol viewBox=\"0 0 456.793 456.793\" id=\"proquick\">
            <path d=\"M448.947,218.474c-0.922-1.168-23.055-28.933-61-56.81c-50.707-37.253-105.879-56.944-159.551-56.944
      c-53.673,0-108.845,19.691-159.551,56.944c-37.944,27.876-60.077,55.642-61,56.81L0,228.396l7.845,9.923
      c0.923,1.168,23.056,28.934,61,56.811c50.707,37.254,105.878,56.943,159.551,56.943c53.672,0,108.844-19.689,159.551-56.943
      c37.945-27.877,60.078-55.643,61-56.811l7.846-9.923L448.947,218.474z M228.396,312.096c-46.152,0-83.699-37.548-83.699-83.699
      c0-46.152,37.547-83.699,83.699-83.699s83.7,37.547,83.7,83.699C312.096,274.548,274.548,312.096,228.396,312.096z
       M41.685,228.396c9.197-9.872,25.32-25.764,46.833-41.478c13.911-10.16,31.442-21.181,51.772-30.305
      c-15.989,19.589-25.593,44.584-25.593,71.782s9.604,52.193,25.593,71.782c-20.329-9.124-37.861-20.146-51.771-30.306
      C67.002,254.159,50.878,238.265,41.685,228.396z M368.273,269.874c-13.912,10.16-31.443,21.182-51.771,30.306
      c15.988-19.589,25.594-44.584,25.594-71.782s-9.605-52.193-25.594-71.782c20.33,9.124,37.861,20.146,51.771,30.305
      c21.516,15.715,37.639,31.609,46.832,41.477C405.91,238.268,389.785,254.161,368.273,269.874z\"></path>
            <path d=\"M223.646,168.834c-27.513,4-50.791,31.432-41.752,59.562c8.23-20.318,25.457-33.991,45.795-32.917
      c16.336,0.863,33.983,18.237,33.59,32.228c1.488,22.407-12.725,39.047-32.884,47.191c46.671,15.21,73.197-44.368,51.818-79.352
      C268.232,175.942,245.969,166.23,223.646,168.834z\"></path>
        </symbol>
    </svg>
</head>
<body>
<nav id=\"top\" class=\"hidden-xs\">
    <div class=\"container\">
        <div class=\"paddbg\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6 col-sm-6 headadd hidden-xs\">
                    Welcome To World's largest Online Shopping Hub
                </div>
                <div id=\"top-links\" class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right\">
                    <li class=\"dropdown xsac u-acc\"><a href=\"indexe223.html?route=account/account\" title=\"My Account\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-user-o hidden-md hidden-sm hidden-lg\"></i><span class=\"hidden-xs\">My Account <i class=\"fa fa-angle-down hidden-xs\"></i></span></a>
                        <ul class=\"dropdown-menu dropdown-menu-right acdrop\">
                            <li><a href=\"index5502.html?route=account/register\"> <i class=\"fa fa-address-book-o\"></i> Register</a></li>
                            <li><a href=\"indexe223.html?route=account/login\"> <i class=\"fa fa-sign-in\"></i> Login</a></li>
                            <li class=\"head-compare\"><a href=\"index6431.html?route=product/compare\" title=\"Compare\"><i class=\"fa fa-exchange\"></i> Compare</a></li>
                            <li><a href=\"indexe223.html?route=account/wishlist\" id=\"wishlist-total\" title=\"Wish List (0)\"><i class=\"fa fa-heart\"></i> Wish List (0)</a></li>
                        </ul>
                    </li>
                    <div class=\"curlan curxs\">
                        <form action=\"http://templatetasarim.com/opencart/Bicycle/index.php?route=common/currency/currency\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
                            <div class=\"btn-group\">
                                <button class=\"btn btn-link dropdown-toggle test curd\" data-toggle=\"dropdown\">                               <strong>\$</strong>        <span class=\"t-title\">Currency&nbsp;<i class=\"fa fa-angle-down\"></i></span></button>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    <li>
                                        <button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"EUR\">€ Euro</button>
                                    </li>
                                    <li>
                                        <button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"GBP\">£ Pound Sterling</button>
                                    </li>
                                    <li>
                                        <button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"USD\">\$ US Dollar</button>
                                    </li>
                                </ul>
                            </div>
                            <input type=\"hidden\" name=\"code\" value=\"\" />
                            <input type=\"hidden\" name=\"redirect\" value=\"index9328.html?route=common/home\" />
                        </form>
                    </div>





                    <div class=\"curlan\">
                        <form action=\"http://templatetasarim.com/opencart/Bicycle/index.php?route=common/language/language\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
                            <div class=\"btn-group\">
                                <button class=\"btn btn-link dropdown-toggle test\" data-toggle=\"dropdown\">

                                    <img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/language/en-gb/en-gb.png"), "html", null, true);
        echo "\" alt=\"English\" title=\"English\">
                                    <span class=\"t-title\">Language&nbsp;<i class=\"fa fa-angle-down\"></i></span></button>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"ar\"><img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/language/ar/ar.png"), "html", null, true);
        echo "\" alt=\"arabic\" title=\"arabic\" /> arabic</button>
                                    </li>
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"en-gb\"><img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/language/en-gb/en-gb.png"), "html", null, true);
        echo "\" alt=\"English\" title=\"English\" /> English</button>
                                    </li>
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"sv-se\"><img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/language/sv-se/sv-se.png"), "html", null, true);
        echo "\" alt=\"Swedish\" title=\"Swedish\" /> Swedish</button>
                                    </li>
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"fr-fr\"><img src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/language/fr-fr/fr-fr.png"), "html", null, true);
        echo "\" alt=\"French\" title=\"French\" /> French</button>
                                    </li>
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"it-it\"><img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/language/it-it/it-it.png"), "html", null, true);
        echo "\" alt=\"Italian\" title=\"Italian\" /> Italian</button>
                                    </li>
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"pl-pl\"><img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/language/pl-pl/pl-pl.png"), "html", null, true);
        echo "\" alt=\"Polish\" title=\"Polish\" /> Polish</button>
                                    </li>
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"es-es\"><img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/language/es-es/es-es.png"), "html", null, true);
        echo "\" alt=\"Spanish\" title=\"Spanish\" /> Spanish</button>
                                    </li>
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"de-de\"><img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/language/de-de/de-de.png"), "html", null, true);
        echo "\" alt=\"German\" title=\"German\" /> German</button>
                                    </li>
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"ka-ge\"><img src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/language/ka-ge/ka-ge.png"), "html", null, true);
        echo "\" alt=\"Georgian\" title=\"Georgian\" /> Georgian</button>
                                    </li>
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"bg-bg\"><img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/language/bg-bg/bg-bg.png"), "html", null, true);
        echo "\" alt=\"Bulgarian\" title=\"Bulgarian\" /> Bulgarian</button>
                                    </li>
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"cs-cz\"><img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/language/cs-cz/cs-cz.png"), "html", null, true);
        echo "\" alt=\"czech\" title=\"czech\" /> czech</button>
                                    </li>
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"fi-fi\"><img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/language/fi-fi/fi-fi.png"), "html", null, true);
        echo "\" alt=\"Finnish\" title=\"Finnish\" /> Finnish</button>
                                    </li>
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"ja\"><img src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/language/ja/ja.png"), "html", null, true);
        echo "\" alt=\"日本語\" title=\"日本語\" /> 日本語</button>
                                    </li>
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"hu-hu\"><img src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/catalog/language/hu-hu/hu-hu.png"), "html", null, true);
        echo "\" alt=\"Hungarian\" title=\"Hungarian\" /> Hungarian</button>
                                    </li>
                                </ul>
                            </div>
                            <input type=\"hidden\" name=\"code\" value=\"\" />
                            <input type=\"hidden\" name=\"redirect\" value=\"index9328.html?route=common/home\" />
                        </form>
                    </div>

                </div>


            </div>
        </div>
    </div>
</nav>

<header>
    <div class=\"head-bottom container\">
        <div class=\"head-po\">
            <div class=\"head-middle hsticky\">
                <div class=\"row\">
                    <div class=\"col-lg-2 col-md-2 col-xs-12 col-sm-2 xslogo\">
                        <div id=\"logo\"><a href=\"index9328.html?route=common/home\"><img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/catalog/final.PNG"), "html", null, true);
        echo "\" title=\"Your Store\" alt=\"Your Store\" class=\"img-responsive\" /></a></div>
                    </div>
                    <div class=\"col-lg-7 col-md-8 col-sm-8 col-xs-12 rpart text-center\">

                        <div class=\"hidden-xs allcate\">
                            <div class=\"cate-menu\" id=\"all-menu\">
                                <nav id=\"menu\" class=\"navbar\">
                                    <div class=\"navbar-header\"><span id=\"category\" class=\"visible-xs\">Categories</span>
                                        <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
                                    </div>
                                    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                                        <ul class=\"nav navbar-nav\">
                                            <li class=\"dropdown moremenu\"><a href=\"index98dc.html?route=product/category&amp;path=20\" class=\"dropdown-toggle header-menu\" data-toggle=\"dropdown\">Bikes<i class=\"fa fa-angle-down enangle\"></i></a>
                                                <div class=\"dropdown-menu\">
                                                    <div class=\"dropdown-inner\">
                                                        <ul class=\"list-unstyled\">
                                                            <li class=\"dropdown-submenu\"> <a href=\"indexedea.html?route=product/category&amp;path=20_48\" class=\"submenu-title\"> Kids Bikes (19) </a>
                                                            </li>
                                                            <li class=\"dropdown-submenu\"> <a href=\"index4294.html?route=product/category&amp;path=20_44\" class=\"submenu-title\"> Mountain Bike (19) </a>
                                                            </li>
                                                            <li class=\"dropdown-submenu\"> <a href=\"index6096.html?route=product/category&amp;path=20_49\" class=\"submenu-title\"> Road Bike (19) </a>
                                                            </li>
                                                            <li class=\"dropdown-submenu\"> <a href=\"indexdd46.html?route=product/category&amp;path=20_43\" class=\"submenu-title\"> Sports Bike (19) </a>
                                                            </li>
                                                            <li class=\"dropdown-submenu\"> <a href=\"index3e5e.html?route=product/category&amp;path=20_47\" class=\"submenu-title\"> Tubeless (18) </a>
                                                            </li>
                                                            <li class=\"dropdown-submenu\"> <a href=\"indexd9fe.html?route=product/category&amp;path=20_26\" class=\"submenu-title\"> Parts (19) </a>
                                                            </li>
                                                            <li class=\"dropdown-submenu\"> <a href=\"indexf345.html?route=product/category&amp;path=20_27\" class=\"submenu-title\"> Professionals (19) </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- <a href=\"http://templatetasarim.com/opencart/Bicycle/index.php?route=product/category&amp;path=20\" class=\"see-all\">Show All Desktops</a> --> </div>
                                            </li>
                                            <li class=\"moremenu\"><a href=\"index7fa3.html?route=product/category&amp;path=18\">Bikes</a></li>
                                            <li class=\"dropdown moremenu\"><a href=\"index1647.html?route=product/category&amp;path=25\" class=\"dropdown-toggle header-menu\" data-toggle=\"dropdown\">Components<i class=\"fa fa-angle-down enangle\"></i></a>
                                                <div class=\"dropdown-menu\">
                                                    <div class=\"dropdown-inner\">
                                                        <ul class=\"list-unstyled\">
                                                            <li class=\"dropdown-submenu\"> <a href=\"indexe177.html?route=product/category&amp;path=25_28\" class=\"submenu-title\"> Comfort Bike (19) </a>
                                                                <ul class=\"list-unstyled grand-child\">
                                                                    <li> <a href=\"indexe733.html?route=product/category&amp;path=28_50\"> Comfort Bike (19) </a> </li>
                                                                    <li> <a href=\"index7328.html?route=product/category&amp;path=28_53\"> Hybrid Bikes (19) </a> </li>
                                                                    <li> <a href=\"index43ee.html?route=product/category&amp;path=28_35\"> Sports Bike (19) </a> </li>
                                                                    <li> <a href=\"indexf6ce.html?route=product/category&amp;path=28_36\"> Tubeless (18 </a> </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                        <ul class=\"list-unstyled\">
                                                            <li class=\"dropdown-submenu\"> <a href=\"index68a7.html?route=product/category&amp;path=25_30\" class=\"submenu-title\"> categories </a>
                                                                <ul class=\"list-unstyled grand-child\">
                                                                    <li> <a href=\"indexedf3.html?route=product/category&amp;path=30_46\"> Folding Bikes (19) </a> </li>
                                                                    <li> <a href=\"indexfb9c.html?route=product/category&amp;path=30_45\"> Tubeless (18) </a> </li>
                                                                    <li> <a href=\"index0ee8.html?route=product/category&amp;path=30_29\">  Hybrid Bikes (19)</a> </li>
                                                                    <li> <a href=\"index293d.html?route=product/category&amp;path=30_31\"> Scanners (14) </a> </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                        <ul class=\"list-unstyled\">
                                                            <li class=\"dropdown-submenu\"> <a href=\"index955a.html?route=product/category&amp;path=25_32\" class=\"submenu-title\"> Accessories (14) </a>
                                                                <ul class=\"list-unstyled grand-child\">
                                                                    <li> <a href=\"indexcc10.html?route=product/category&amp;path=32_40\"> Accessories (14) </a> </li>
                                                                    <li> <a href=\"indexf446.html?route=product/category&amp;path=32_41\"> City Bikes (14) </a> </li>
                                                                    <li> <a href=\"indexf08c.html?route=product/category&amp;path=32_39\"> E-Bikes (14) </a> </li>
                                                                    <li> <a href=\"indexefae.html?route=product/category&amp;path=32_37\"> Comfort Bike (19) </a> </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- <a href=\"http://templatetasarim.com/opencart/Bicycle/index.php?route=product/category&amp;path=25\" class=\"see-all\">Show All Components</a> --> </div>
                                            </li>
                                            <li class=\"moremenu\"><a href=\"index70a9.html?route=product/category&amp;path=57\">Professionals</a></li>
                                            <li class=\"moremenu\"><a href=\"indexc957.html?route=product/category&amp;path=24\">Parts</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>


                        <div class=\"hidden-md hidden-lg hidden-sm\">
                            <nav id=\"menu\" class=\"navbar\">

                                <div class=\"navbar-header\"><!-- <span id=\"category\" class=\"visible-xs\">Categories</span> -->
                                    <button type=\"button\" class=\"btn btn-navbar\" onclick=\"openNav()\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
                                </div>

                                <div id=\"mySidenav\" class=\"sidenav\">
                                    <div class=\"close-nav\">
                                        <span class=\"categories\">Category</span>
                                        <a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\"><i class=\"fa fa-close\"></i></a>
                                    </div>
                                    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                                        <ul class=\"nav navbar-nav\">
                                            <li class=\"dropdown\"><a href=\"index98dc.html?route=product/category&amp;path=20\" class=\"dropdown-toggle header-menu\" data-toggle=\"dropdown\">Products<i class=\"fa fa-angle-down pull-right\"></i></a>
                                                <div class=\"dropdown-menu\">
                                                    <div class=\"dropdown-inner\">               <ul class=\"list-unstyled\">

                                                            <li class=\"dropdown-submenu\"> <a href=\"indexedea.html?route=product/category&amp;path=20_48\" class=\"submenu-title\"> Kids Bikes (19) </a>
                                                            </li>


                                                            <li class=\"dropdown-submenu\"> <a href=\"index4294.html?route=product/category&amp;path=20_44\" class=\"submenu-title\"> Mountain Bike (19) </a>
                                                            </li>


                                                            <li class=\"dropdown-submenu\"> <a href=\"index6096.html?route=product/category&amp;path=20_49\" class=\"submenu-title\"> Road Bike (19) </a>
                                                            </li>


                                                            <li class=\"dropdown-submenu\"> <a href=\"indexdd46.html?route=product/category&amp;path=20_43\" class=\"submenu-title\"> Sports Bike (19) </a>
                                                            </li>


                                                            <li class=\"dropdown-submenu\"> <a href=\"index3e5e.html?route=product/category&amp;path=20_47\" class=\"submenu-title\"> Tubeless (18) </a>
                                                            </li>


                                                            <li class=\"dropdown-submenu\"> <a href=\"indexd9fe.html?route=product/category&amp;path=20_26\" class=\"submenu-title\"> ligne 334 layout </a>
                                                            </li>


                                                            <li class=\"dropdown-submenu\"> <a href=\"indexf345.html?route=product/category&amp;path=20_27\" class=\"submenu-title\">ligne 334 layout </a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <a href=\"index98dc.html?route=product/category&amp;path=20\" class=\"see-all\">Show All Bikes</a> </div>
                                            </li>
                                            <li><a href=\"index7fa3.html?route=product/category&amp;path=18\">Bikes</a></li>
                                            <li class=\"dropdown\"><a href=\"index1647.html?route=product/category&amp;path=25\" class=\"dropdown-toggle header-menu\" data-toggle=\"dropdown\">Components<i class=\"fa fa-angle-down pull-right\"></i></a>
                                                <div class=\"dropdown-menu\">
                                                    <div class=\"dropdown-inner\">               <ul class=\"list-unstyled\">

                                                            <li class=\"dropdown-submenu\"> <a href=\"indexe177.html?route=product/category&amp;path=25_28\" class=\"submenu-title\"> Bikes </a>
                                                                <ul class=\"list-unstyled grand-child\">
                                                                    <li><a href=\"indexe733.html?route=product/category&amp;path=28_50\"> Comfort Bike (19) </a> </li>
                                                                    <li><a href=\"index7328.html?route=product/category&amp;path=28_53\"> Hybrid Bikes (19) </a> </li>
                                                                    <li><a href=\"index43ee.html?route=product/category&amp;path=28_35\"> Accessories 1(14) </a> </li>
                                                                    <li><a href=\"indexf6ce.html?route=product/category&amp;path=28_36\"> Accessories 2 (14) </a> </li>
                                                                </ul>
                                                            </li>

                                                        </ul>
                                                        <ul class=\"list-unstyled\">

                                                            <li class=\"dropdown-submenu\"> <a href=\"index68a7.html?route=product/category&amp;path=25_30\" class=\"submenu-title\"> Accessories </a>
                                                                <ul class=\"list-unstyled grand-child\">
                                                                    <li><a href=\"indexedf3.html?route=product/category&amp;path=30_46\"> Folding Bikes (19) </a> </li>
                                                                    <li><a href=\"indexfb9c.html?route=product/category&amp;path=30_45\"> Hybrid Bikes (19) </a> </li>
                                                                    <li><a href=\"index0ee8.html?route=product/category&amp;path=30_29\"> Mice and Trackballs (19) </a> </li>
                                                                    <li><a href=\"index293d.html?route=product/category&amp;path=30_31\"> layout ligne 367 </a> </li>
                                                                </ul>
                                                            </li>

                                                        </ul>
                                                        <ul class=\"list-unstyled\">

                                                            <li class=\"dropdown-submenu\"> <a href=\"index955a.html?route=product/category&amp;path=25_32\" class=\"submenu-title\"> Professionals </a>
                                                                <ul class=\"list-unstyled grand-child\">
                                                                    <li><a href=\"indexcc10.html?route=product/category&amp;path=32_40\"> Accessories (14) </a> </li>
                                                                    <li><a href=\"indexf446.html?route=product/category&amp;path=32_41\"> City Bikes (14) </a> </li>
                                                                    <li><a href=\"indexf08c.html?route=product/category&amp;path=32_39\"> E-Bikes (14) </a> </li>
                                                                    <li><a href=\"indexefae.html?route=product/category&amp;path=32_37\"> Hybrid Bikes (19) </a> </li>
                                                                </ul>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <a href=\"index1647.html?route=product/category&amp;path=25\" class=\"see-all\">Show All Components</a> </div>
                                            </li>
                                            <li><a href=\"index70a9.html?route=product/category&amp;path=57\">Accessories</a></li>
                                            <li><a href=\"indexc957.html?route=product/category&amp;path=24\">Professionals</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>

                        </div>

                        <script type=\"text/javascript\">
                            function headermenu() {
                                if (jQuery(window).width() < 992)
                                {
                                    jQuery('ul.nav li.dropdown a.header-menu').attr(\"data-toggle\",\"dropdown\");
                                }
                                else
                                {
                                    jQuery('ul.nav li.dropdown a.header-menu').attr(\"data-toggle\",\"\");
                                }
                            }
                            \$(document).ready(function(){headermenu();});
                            jQuery(window).resize(function() {headermenu();});
                            jQuery(window).scroll(function() {headermenu();});
                        </script>


                    </div>
                    <div class=\"col-lg-3 col-md-2 col-sm-2 text-right head-b-right\">
                        <div class=\"d-inline-block hidden-sm hidden0md hidden-lg xs-ac\"></div>
                        <div class=\"hcall d-inline-block\">
                            <div class=\"dropdown\">
                                <button class=\"btn btn-primary insp-search-btn dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><i class=\"fa fa-search\"></i></button>
                                <div class=\"dropdown-menu insp-search-drop\">
                                    <div class=\"head-bg\">
                                        <div class=\"row\">
                                            <div class=\"head-menu-p\">
                                                <div class=\"deskmenu\"><div id=\"search\" class=\"header-btns desktop-search inline-block\">

                                                        <!-- category Search Start par categorie (chercher par categorie recherche avencée -->
                                                        <!-- <select class=\"form-control\" id=\"insp-search-category\">
                                                          <option value=\"0\">Categories</option>
                                                                            <option value=\"20\">Desktops</option>
                                                                                          <option value=\"48\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kids Bikes</option>
                                                                                                      <option value=\"44\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mountain Bike</option>
                                                                                                      <option value=\"49\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Road Bike</option>
                                                                                                      <option value=\"43\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sports Bike</option>
                                                                                                      <option value=\"47\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tubeless</option>
                                                                                                      <option value=\"26\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PC</option>
                                                                                                      <option value=\"27\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mac</option>
                                                                                                        <option value=\"18\">Laptops</option>
                                                                                            <option value=\"25\">Components</option>
                                                                                          <option value=\"28\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Monitors</option>
                                                                                                  <option value=\"50\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Comfort Bike</option>
                                                                                                    <option value=\"53\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hybrid Bikes</option>
                                                                                                    <option value=\"35\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 1</option>
                                                                                                    <option value=\"36\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 2</option>
                                                                                                        <option value=\"30\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Printers</option>
                                                                                                  <option value=\"46\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Folding Bikes</option>
                                                                                                    <option value=\"45\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Windows</option>
                                                                                                    <option value=\"29\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mice and Trackballs</option>
                                                                                                    <option value=\"31\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scanners</option>
                                                                                                        <option value=\"32\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web Cameras</option>
                                                                                                  <option value=\"40\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Accessories</option>
                                                                                                    <option value=\"41\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City Bikes</option>
                                                                                                    <option value=\"39\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-Bikes</option>
                                                                                                    <option value=\"37\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 5</option>
                                                                                                          <option value=\"57\">Tablets</option>
                                                                                            <option value=\"24\">Phones</option>
                                                                              </select> -->
                                                        <!-- category Search End  -->
                                                        <div class=\"my-search\">
                                                            <div class=\"input-group\">
                                                                <input type=\"text\" name=\"search\" value=\"\" placeholder=\"Search\" class=\"form-control input-lg insp-search\">
                                                                <<span class=\"input-group-btn\">
                                                                  <button type=\"button\" class=\"btn btn-default btn-lg\"><svg width=\"20px\" height=\"24px\"><use xlink:href=\"#hsearch\"></use></svg></button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <!-- category Search Start  -->
                                                        <div class=\"insp-search\">
                                                            <div class=\"insp-search-loader\" style=\"display: none;\"><div class=\"loaders\"></div></div><!-- Add Loader -->
                                                            <div class=\"insp-search-result\"></div>
                                                        </div>
                                                        <!-- category Search End  -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class=\"hcall hidden-xs hidden-sm hidden-md d-inline-block\">
                            <a href=\"index2724.html?route=information/contact\">
                                <span class=\"call-ic d-inline-block\"><img src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/catalog/news.png"), "html", null, true);
        echo "\" alt=\"cart\" class=\"svg\" /></span>
                                <div class=\"d-inline-block text-left\">
                                    <h4>Contact Us</h4>
                                    <h5>58491039</h5>
                                </div>
                            </a>
                        </div>
                        <div id=\"cart\">

                            <button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"Loading...\" class=\"dropdown-toggle\"><span class=\"cartr\"><span class=\"cart-i d-inline-block\"><img src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/catalog/cart.png"), "html", null, true);
        echo "\" alt=\"cart\" class=\"svg\" /></span><span id=\"cart-total\" class=\"text-left\"><h5 class=\" hidden-xs\">My Cart</h5><h6>0<span class=\"hidden-xs\"> Item</span></h6></span></span></button>

                            <ul class=\"dropdown-menu pull-right\">
                                <li>
                                    <p class=\"text-center\">Your shopping cart is empty!</p>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
</header>
<h1>c'est la ligne 507 de layout </h1>
<!-- ------------------------------------------------------------------------------le debut contenu de l application ------------------------------------------------------------- -->
";
        // line 513
        echo "
<!-- ------------------------------------------------------------------------------la fin  contenu de l application ------------------------------------------------------------- -->
    <footer>
        <div class=\"foot-top\">
            <div class=\"container\">
                <div class=\"inspire-newsletter  inspire-newsletter\" id=\"newsletter_1580988993\" data-mode=\"default\">
                    <form id=\"formNewLestter\" method=\"post\" action=\"http://templatetasarim.com/opencart/Bicycle/index.php?route=extension/module/inspirenewsletter/subscribe\" class=\"formNewLestter newsletter-bg\" >
                        <div class=\"inner news-pati row\">
                            <div class=\"col-sm-6 col-xs-12 hidden-xs\">
                                <div class=\"sign-up-img\"></div>
                                <div class=\"description-top \">
                                    <h3 class=\"mail-msg\">Sign Up For Newsletter</h3>
                                    <p>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSignup Our newsletter And get latest updates!

                                    </p>
                                </div>
                            </div>
                            <div class=\"form-group col-sm-6 col-xs-12\">
                                <input type=\"text\" class=\"form-control input-md inputNew\"  onblur=\"javascript:if(this.value=='')this.value='Your email address';\" onfocus=\"javascript:if(this.value=='Your email address')this.value='';\" value=\"Your email address\" size=\"18\" name=\"email\">
                                <button type=\"submit\" name=\"submitNewsletter\" class=\"btn btn-danger ne-su\">Subscribe</button>
                                <input type=\"hidden\" value=\"1\" name=\"action\">
                                <div class=\"valid\"></div>
                                <div class=\"description-bottom\">





                                </div>
                            </div>

                        </div>
                    </form>
                </div>

                <script type=\"text/javascript\"><!--
                    \$(\"#newsletter_1580988993\").inspireoNewsletter().work(  'Email is not valid!' );
                    --></script>

            </div>
        </div>
        <div class=\"container\">





            <div class=\"\">
                <div class=\"row footmr\">




                    <div class=\"middle-footer\">
                        <div class=\"col-sm-3\">
                            <div class=\"xs-fab\">
                                <aside id=\"column-left1\">
                                    <div>  <div>  <h5 class=\"\"><span>Contact us</span>
                                                <button type=\"button\" class=\"btn btn-primary toggle collapsed\" data-toggle=\"collapse\" data-target=\"#contact\"></button>
                                            </h5>
                                            <div id=\"contact\" class=\"collapse footer-collapse footcontact\">
                                                <ul class=\"list-unstyled f-left\">
                                                    <li><i class=\"fa fa-map-marker\"></i>Esprit ghazela </li>
                                                    <li><i class=\"fa fa-envelope\"></i>DEFENDERS@esprit.tn </li>
                                                    <li><i class=\"fa fa-phone\"></i>58491039</li>
                                                    <li><i class=\"fa fa-paper-plane\"></i>Ariana,Tunis</li>
                                                </ul>
                                                <div class=\"footsocial\">
                                                    <ul class=\"socials list-inline\">
                                                        <li class=\"facebook\"><a href=\"#\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li class=\"twitter\"><a href=\"#\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li class=\"google_plus\"><a href=\"#\" target=\"_blank\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                        <li class=\"pinterest\"><a href=\"#\" target=\"_blank\"><i class=\"fa fa-pinterest\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div></div></div>



                                    <script type=\"text/javascript\">
                                        \$(document).ready(function() {
                                            \$(\"#owl-testi\").owlCarousel({
                                                itemsCustom : [
                                                    [0, 1],
                                                    [768, 2],
                                                    [992, 2],
                                                    [1200, 3]
                                                ],
                                                autoPlay: false,
                                                navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
                                                navigation : true,
                                                pagination:false
                                            });
                                        });
                                    </script>


                                </aside>

                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <h5>Extras
                                <button type=\"button\" class=\"btn btn-primary toggle collapsed\" data-toggle=\"collapse\" data-target=\"#extra\"></button>
                            </h5>
                            <div id=\"extra\" class=\"collapse footer-collapse\">
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"indexd773.html?route=product/manufacturer\">Brands</a></li>
                                    <li><a href=\"index4dd2.html?route=account/voucher\">Gift Certificates</a></li>
                                    <li><a href=\"index3d18.html?route=affiliate/login\">Affiliate</a></li>
                                    <li><a href=\"indexf110.html?route=product/special\">Specials</a></li>
                                    <li><a href=\"index7cb2.html?route=information/sitemap\">Site Map</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <h5>Information
                                <button type=\"button\" class=\"btn btn-primary toggle collapsed\" data-toggle=\"collapse\" data-target=\"#info\"></button>
                            </h5>
                            <div id=\"info\" class=\"collapse footer-collapse\">
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"index8816.html?route=information/information&amp;information_id=4\">About Us</a></li>
                                    <li><a href=\"index1766.html?route=information/information&amp;information_id=6\">Delivery Information</a></li>
                                    <li><a href=\"index1679.html?route=information/information&amp;information_id=3\">Privacy Policy</a></li>
                                    <li><a href=\"index99e4.html?route=information/information&amp;information_id=5\">Terms &amp; Conditions</a></li>
                                    <li><a href=\"index2724.html?route=information/contact\">Contact Us</a></li>
                                    <li><a href=\"index7cb2.html?route=information/sitemap\">Site Map</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <h5>My Account
                                <button type=\"button\" class=\"btn btn-primary toggle collapsed\" data-toggle=\"collapse\" data-target=\"#account\"></button>
                            </h5>
                            <div id=\"account\" class=\"collapse footer-collapse\">
                                <ul class=\"list-unstyled lastb\">
                                    <li><a href=\"indexe223.html?route=account/account\">My Account</a></li>
                                    <li><a href=\"indexe223.html?route=account/order\">Order History</a></li>
                                    <li><a href=\"indexe223.html?route=account/wishlist\">Wish List</a></li>
                                    <li><a href=\"indexe223.html?route=account/newsletter\">Newsletter</a></li>
                                    <li><a href=\"index71ba.html?route=account/return/add\">Returns</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--   -->
                </div>

            </div>




        </div>

        <div class=\"foot-power\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"copy col-xs-12 col-sm-6\">Powered By <a href=\"http://www.opencart.com/\">Defenders</a> VELO.TN &copy; 2020</div>
                    <div class=\"col-xs-12 col-sm-6 text-right\"> <div>  <div class=\"foot-bottom\">
                                <div class=\"footmr\">
                                    <!-- <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12 f-social\">
                                        <div class=\"foot-app\">
                                        <div class=\"title-footer hidden-md hidden-sm hidden-xs\">Download Our App</div>
                                        <ul class=\"list-unstyled inline-block\">
                                          <li><a title=\"AppStore\" href=\"#\"><img class=\"img-responsive\" src=\"image/catalog/app1.png\" alt=\"App Store\"></a></li>
                                          <li><a title=\"PlayStore\" href=\"#\"><img class=\"img-responsive\" src=\"image/catalog/app2.png\" alt=\"Play Store\"></a></li>
                                        </ul>
                                      </div>
                                    </div> -->
                                    <div class=\"pull-right \">
                                        <div class=\"text-right\">
                                            <a href=\"#\"><img class=\"img-responsive center-block\" src=\"";
        // line 686
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/catalog/payment.png"), "html", null, true);
        echo "\" alt=\"imgpayment\"></a>
                                        </div>
                                    </div>
                                </div>
                            </div></div>



                        <script type=\"text/javascript\">
                            \$(document).ready(function() {
                                \$(\"#owl-testi\").owlCarousel({
                                    itemsCustom : [
                                        [0, 1],
                                        [768, 2],
                                        [992, 2],
                                        [1200, 3]
                                    ],
                                    autoPlay: false,
                                    navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
                                    navigation : true,
                                    pagination:false
                                });
                            });
                        </script>


                    </div>
                </div>
            </div>
        </div>
        <a href=\"#\" id=\"scroll\" title=\"Scroll to Top\" style=\"display: block;\">
            <i class=\"fa fa-angle-up\"></i>
        </a>
    </footer>



</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  863 => 686,  688 => 513,  666 => 491,  654 => 482,  385 => 216,  359 => 193,  353 => 190,  347 => 187,  341 => 184,  335 => 181,  329 => 178,  323 => 175,  317 => 172,  311 => 169,  305 => 166,  299 => 163,  293 => 160,  287 => 157,  281 => 154,  274 => 150,  175 => 54,  171 => 53,  167 => 52,  163 => 51,  159 => 50,  155 => 49,  151 => 48,  146 => 46,  140 => 43,  136 => 42,  129 => 38,  125 => 37,  120 => 35,  116 => 34,  112 => 33,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  92 => 28,  88 => 27,  84 => 26,  79 => 24,  75 => 23,  71 => 22,  67 => 21,  63 => 20,  59 => 19,  55 => 18,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"ltr\" lang=\"en\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"ltr\" lang=\"en\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"ltr\" lang=\"en\">
<!--<![endif]-->

<!-- Mirrored from templatetasarim.com/opencart/Bicycle/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 11:36:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\" /><!-- /Added by HTTrack -->
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>VELO.TN</title>
    <base  />
    <meta name=\"description\" content=\"My Store\" />
    <script src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/jquery-2.1.1.min.js') }}\" type=\"text/javascript\"></script>
    <link href=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\" media=\"screen\" />
    <script src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/bootstrap/js/bootstrap.min.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/inspire/product-slider-zoom/jquery.elevatezoom.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/../../../cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js')}}\" type=\"text/javascript\"></script>
    <link href=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/../../../cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&amp;display=swap\" rel=\"stylesheet\">
    <link href=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/view/theme/default/stylesheet/stylesheet.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/swiper/css/owl.carousel.css')}}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/swiper/css/owl.theme.css')}}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/swiper/css/swiper.min.css')}}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/swiper/css/opencart.css')}}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/swiper/css/css/owl.carousel.css')}}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/swiper/css/css/owl.theme.css')}}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/magnific/magnific-popup.css')}}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/view/theme/default/stylesheet/inspirenewsletter.css')}}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/inspirequickview.css')}}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />

    <script src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/countdown/jquery.plugin.min.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/countdown/jquery.countdown.min.js')}}\" type=\"text/javascript\"></script>
    <!--right to left (RTL)-->
    <!--over RTL-->
    <!--lightbox -->
    <script src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/blog/lightbox-2.6.min.js')}}\" type=\"text/javascript\"></script>
    <link href=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/blog/lightbox.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <!--lightbox End-->

    <script src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/inspire/custom.js')}}\" type=\"text/javascript\"></script>

    <script src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/swiper/js/owl.carousel.min.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/swiper/js/swiper.jquery.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/inspirequickview.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/jquery/inspirenewsletter.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/view/javascript/common.js')}}\" type=\"text/javascript\"></script>
    <link href=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/catalog/cart.png')}}\" rel=\"icon\" />
    <svg style=\"display:none\">
        <symbol viewBox=\"0 0 483.083 483.083\" id=\"hsearch\">
            <path d=\"M332.74,315.35c30.883-33.433,50.15-78.2,50.15-127.5C382.89,84.433,298.74,0,195.04,0S7.19,84.433,7.19,187.85
      S91.34,375.7,195.04,375.7c42.217,0,81.033-13.883,112.483-37.4l139.683,139.683c3.4,3.4,7.65,5.1,11.9,5.1s8.783-1.7,11.9-5.1
      c6.517-6.517,6.517-17.283,0-24.083L332.74,315.35z M41.19,187.85C41.19,103.133,110.04,34,195.04,34
      c84.717,0,153.85,68.85,153.85,153.85S280.04,341.7,195.04,341.7S41.19,272.567,41.19,187.85z\"/>
        </symbol>
        <symbol viewBox=\"0 0 129 129\" id=\"addwish\">
            <path d=\"m121.6,40.1c-3.3-16.6-15.1-27.3-30.3-27.3-8.5,0-17.7,3.5-26.7,10.1-9.1-6.8-18.3-10.3-26.9-10.3-15.2,0-27.1,10.8-30.3,27.6-4.8,24.9 10.6,58 55.7,76 0.5,0.2 1,0.3 1.5,0.3 0.5,0 1-0.1 1.5-0.3 45-18.4 60.3-51.4 55.5-76.1zm-57,67.9c-39.6-16.4-53.3-45-49.2-66.3 2.4-12.7 11.2-21 22.3-21 7.5,0 15.9,3.6 24.3,10.5 1.5,1.2 3.6,1.2 5.1,0 8.4-6.7 16.7-10.2 24.2-10.2 11.1,0 19.8,8.1 22.3,20.7 4.1,21.1-9.5,49.6-49,66.3z\"></path>
        </symbol>
        <symbol id=\"addcart\" viewBox=\"0 0 511.998 511.998\">
            <path d=\"M507.472,175.195c-3.63-4.286-8.96-6.757-14.577-6.757h-53.031L335.717,26.582c-6.247-8.514-18.2-10.329-26.702-4.095
      c-8.508,6.247-10.336,18.207-4.095,26.708l87.546,119.244H114.439l87.546-119.244c6.247-8.508,4.407-20.461-4.095-26.708
      c-8.502-6.241-20.461-4.407-26.708,4.095L67.034,168.439h-47.93c-5.617,0-10.947,2.471-14.577,6.757s-5.19,9.947-4.267,15.487
      L48.021,477.25c1.535,9.208,9.508,15.965,18.843,15.965h378.269c9.342,0,17.309-6.75,18.843-15.965l47.761-286.567
      C512.662,185.149,511.102,179.481,507.472,175.195z M428.953,455.006H83.047L41.654,206.648h428.692L428.953,455.006z\"></path>
            <path d=\"M256,251.225c-10.552,0-19.104,8.552-19.104,19.104v125.454c0,10.552,8.552,19.104,19.104,19.104
      c10.552,0,19.104-8.546,19.104-19.105V270.329C275.104,259.777,266.552,251.225,256,251.225z\"></path>
            <path d=\"M354.706,251.225c-10.552,0-19.104,8.552-19.104,19.104v125.454c0,10.552,8.552,19.104,19.104,19.104
      c10.553,0,19.105-8.546,19.104-19.105V270.329C373.81,259.777,365.258,251.225,354.706,251.225z\"></path>
            <path d=\"M157.294,251.225c-10.552,0-19.104,8.552-19.104,19.104v125.454c0,10.552,8.552,19.104,19.104,19.104
      s19.104-8.546,19.104-19.105V270.329C176.398,259.777,167.846,251.225,157.294,251.225z\"></path>
        </symbol>
        <symbol id=\"addcompare\" viewBox=\"0 0 73.17 73.17\">
            <path d=\"M36.856,12.554c-2.393,0-4.328,1.896-4.328,4.234v52.14c0,2.348,1.936,4.242,4.328,4.242
        c2.389,0,4.328-1.896,4.328-4.242v-52.14C41.185,14.449,39.244,12.554,36.856,12.554z M13.957,26.687
        c-2.391,0-4.329,1.903-4.329,4.242v37.999c0,2.348,1.938,4.242,4.329,4.242c2.388,0,4.325-1.896,4.325-4.242V30.929
        C18.282,28.59,16.345,26.687,13.957,26.687z M59.214,0c-2.389,0-4.324,1.903-4.324,4.242v64.686c0,2.348,1.937,4.242,4.324,4.242
        c2.393,0,4.328-1.896,4.328-4.242V4.242C63.542,1.903,61.606,0,59.214,0z\"></path>
        </symbol>
        <symbol viewBox=\"0 0 456.793 456.793\" id=\"proquick\">
            <path d=\"M448.947,218.474c-0.922-1.168-23.055-28.933-61-56.81c-50.707-37.253-105.879-56.944-159.551-56.944
      c-53.673,0-108.845,19.691-159.551,56.944c-37.944,27.876-60.077,55.642-61,56.81L0,228.396l7.845,9.923
      c0.923,1.168,23.056,28.934,61,56.811c50.707,37.254,105.878,56.943,159.551,56.943c53.672,0,108.844-19.689,159.551-56.943
      c37.945-27.877,60.078-55.643,61-56.811l7.846-9.923L448.947,218.474z M228.396,312.096c-46.152,0-83.699-37.548-83.699-83.699
      c0-46.152,37.547-83.699,83.699-83.699s83.7,37.547,83.7,83.699C312.096,274.548,274.548,312.096,228.396,312.096z
       M41.685,228.396c9.197-9.872,25.32-25.764,46.833-41.478c13.911-10.16,31.442-21.181,51.772-30.305
      c-15.989,19.589-25.593,44.584-25.593,71.782s9.604,52.193,25.593,71.782c-20.329-9.124-37.861-20.146-51.771-30.306
      C67.002,254.159,50.878,238.265,41.685,228.396z M368.273,269.874c-13.912,10.16-31.443,21.182-51.771,30.306
      c15.988-19.589,25.594-44.584,25.594-71.782s-9.605-52.193-25.594-71.782c20.33,9.124,37.861,20.146,51.771,30.305
      c21.516,15.715,37.639,31.609,46.832,41.477C405.91,238.268,389.785,254.161,368.273,269.874z\"></path>
            <path d=\"M223.646,168.834c-27.513,4-50.791,31.432-41.752,59.562c8.23-20.318,25.457-33.991,45.795-32.917
      c16.336,0.863,33.983,18.237,33.59,32.228c1.488,22.407-12.725,39.047-32.884,47.191c46.671,15.21,73.197-44.368,51.818-79.352
      C268.232,175.942,245.969,166.23,223.646,168.834z\"></path>
        </symbol>
    </svg>
</head>
<body>
<nav id=\"top\" class=\"hidden-xs\">
    <div class=\"container\">
        <div class=\"paddbg\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-6 col-sm-6 headadd hidden-xs\">
                    Welcome To World's largest Online Shopping Hub
                </div>
                <div id=\"top-links\" class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right\">
                    <li class=\"dropdown xsac u-acc\"><a href=\"indexe223.html?route=account/account\" title=\"My Account\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-user-o hidden-md hidden-sm hidden-lg\"></i><span class=\"hidden-xs\">My Account <i class=\"fa fa-angle-down hidden-xs\"></i></span></a>
                        <ul class=\"dropdown-menu dropdown-menu-right acdrop\">
                            <li><a href=\"index5502.html?route=account/register\"> <i class=\"fa fa-address-book-o\"></i> Register</a></li>
                            <li><a href=\"indexe223.html?route=account/login\"> <i class=\"fa fa-sign-in\"></i> Login</a></li>
                            <li class=\"head-compare\"><a href=\"index6431.html?route=product/compare\" title=\"Compare\"><i class=\"fa fa-exchange\"></i> Compare</a></li>
                            <li><a href=\"indexe223.html?route=account/wishlist\" id=\"wishlist-total\" title=\"Wish List (0)\"><i class=\"fa fa-heart\"></i> Wish List (0)</a></li>
                        </ul>
                    </li>
                    <div class=\"curlan curxs\">
                        <form action=\"http://templatetasarim.com/opencart/Bicycle/index.php?route=common/currency/currency\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
                            <div class=\"btn-group\">
                                <button class=\"btn btn-link dropdown-toggle test curd\" data-toggle=\"dropdown\">                               <strong>\$</strong>        <span class=\"t-title\">Currency&nbsp;<i class=\"fa fa-angle-down\"></i></span></button>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    <li>
                                        <button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"EUR\">€ Euro</button>
                                    </li>
                                    <li>
                                        <button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"GBP\">£ Pound Sterling</button>
                                    </li>
                                    <li>
                                        <button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"USD\">\$ US Dollar</button>
                                    </li>
                                </ul>
                            </div>
                            <input type=\"hidden\" name=\"code\" value=\"\" />
                            <input type=\"hidden\" name=\"redirect\" value=\"index9328.html?route=common/home\" />
                        </form>
                    </div>





                    <div class=\"curlan\">
                        <form action=\"http://templatetasarim.com/opencart/Bicycle/index.php?route=common/language/language\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
                            <div class=\"btn-group\">
                                <button class=\"btn btn-link dropdown-toggle test\" data-toggle=\"dropdown\">

                                    <img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/language/en-gb/en-gb.png')}}\" alt=\"English\" title=\"English\">
                                    <span class=\"t-title\">Language&nbsp;<i class=\"fa fa-angle-down\"></i></span></button>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"ar\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/language/ar/ar.png')}}\" alt=\"arabic\" title=\"arabic\" /> arabic</button>
                                    </li>
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"en-gb\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/language/en-gb/en-gb.png')}}\" alt=\"English\" title=\"English\" /> English</button>
                                    </li>
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"sv-se\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/language/sv-se/sv-se.png')}}\" alt=\"Swedish\" title=\"Swedish\" /> Swedish</button>
                                    </li>
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"fr-fr\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/language/fr-fr/fr-fr.png')}}\" alt=\"French\" title=\"French\" /> French</button>
                                    </li>
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"it-it\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/language/it-it/it-it.png')}}\" alt=\"Italian\" title=\"Italian\" /> Italian</button>
                                    </li>
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"pl-pl\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/language/pl-pl/pl-pl.png')}}\" alt=\"Polish\" title=\"Polish\" /> Polish</button>
                                    </li>
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"es-es\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/language/es-es/es-es.png')}}\" alt=\"Spanish\" title=\"Spanish\" /> Spanish</button>
                                    </li>
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"de-de\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/language/de-de/de-de.png')}}\" alt=\"German\" title=\"German\" /> German</button>
                                    </li>
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"ka-ge\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/language/ka-ge/ka-ge.png')}}\" alt=\"Georgian\" title=\"Georgian\" /> Georgian</button>
                                    </li>
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"bg-bg\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/language/bg-bg/bg-bg.png')}}\" alt=\"Bulgarian\" title=\"Bulgarian\" /> Bulgarian</button>
                                    </li>
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"cs-cz\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/language/cs-cz/cs-cz.png')}}\" alt=\"czech\" title=\"czech\" /> czech</button>
                                    </li>
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"fi-fi\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/language/fi-fi/fi-fi.png')}}\" alt=\"Finnish\" title=\"Finnish\" /> Finnish</button>
                                    </li>
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"ja\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/language/ja/ja.png')}}\" alt=\"日本語\" title=\"日本語\" /> 日本語</button>
                                    </li>
                                    <li>
                                        <button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"hu-hu\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/catalog/language/hu-hu/hu-hu.png')}}\" alt=\"Hungarian\" title=\"Hungarian\" /> Hungarian</button>
                                    </li>
                                </ul>
                            </div>
                            <input type=\"hidden\" name=\"code\" value=\"\" />
                            <input type=\"hidden\" name=\"redirect\" value=\"index9328.html?route=common/home\" />
                        </form>
                    </div>

                </div>


            </div>
        </div>
    </div>
</nav>

<header>
    <div class=\"head-bottom container\">
        <div class=\"head-po\">
            <div class=\"head-middle hsticky\">
                <div class=\"row\">
                    <div class=\"col-lg-2 col-md-2 col-xs-12 col-sm-2 xslogo\">
                        <div id=\"logo\"><a href=\"index9328.html?route=common/home\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/catalog/final.PNG')}}\" title=\"Your Store\" alt=\"Your Store\" class=\"img-responsive\" /></a></div>
                    </div>
                    <div class=\"col-lg-7 col-md-8 col-sm-8 col-xs-12 rpart text-center\">

                        <div class=\"hidden-xs allcate\">
                            <div class=\"cate-menu\" id=\"all-menu\">
                                <nav id=\"menu\" class=\"navbar\">
                                    <div class=\"navbar-header\"><span id=\"category\" class=\"visible-xs\">Categories</span>
                                        <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
                                    </div>
                                    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                                        <ul class=\"nav navbar-nav\">
                                            <li class=\"dropdown moremenu\"><a href=\"index98dc.html?route=product/category&amp;path=20\" class=\"dropdown-toggle header-menu\" data-toggle=\"dropdown\">Bikes<i class=\"fa fa-angle-down enangle\"></i></a>
                                                <div class=\"dropdown-menu\">
                                                    <div class=\"dropdown-inner\">
                                                        <ul class=\"list-unstyled\">
                                                            <li class=\"dropdown-submenu\"> <a href=\"indexedea.html?route=product/category&amp;path=20_48\" class=\"submenu-title\"> Kids Bikes (19) </a>
                                                            </li>
                                                            <li class=\"dropdown-submenu\"> <a href=\"index4294.html?route=product/category&amp;path=20_44\" class=\"submenu-title\"> Mountain Bike (19) </a>
                                                            </li>
                                                            <li class=\"dropdown-submenu\"> <a href=\"index6096.html?route=product/category&amp;path=20_49\" class=\"submenu-title\"> Road Bike (19) </a>
                                                            </li>
                                                            <li class=\"dropdown-submenu\"> <a href=\"indexdd46.html?route=product/category&amp;path=20_43\" class=\"submenu-title\"> Sports Bike (19) </a>
                                                            </li>
                                                            <li class=\"dropdown-submenu\"> <a href=\"index3e5e.html?route=product/category&amp;path=20_47\" class=\"submenu-title\"> Tubeless (18) </a>
                                                            </li>
                                                            <li class=\"dropdown-submenu\"> <a href=\"indexd9fe.html?route=product/category&amp;path=20_26\" class=\"submenu-title\"> Parts (19) </a>
                                                            </li>
                                                            <li class=\"dropdown-submenu\"> <a href=\"indexf345.html?route=product/category&amp;path=20_27\" class=\"submenu-title\"> Professionals (19) </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- <a href=\"http://templatetasarim.com/opencart/Bicycle/index.php?route=product/category&amp;path=20\" class=\"see-all\">Show All Desktops</a> --> </div>
                                            </li>
                                            <li class=\"moremenu\"><a href=\"index7fa3.html?route=product/category&amp;path=18\">Bikes</a></li>
                                            <li class=\"dropdown moremenu\"><a href=\"index1647.html?route=product/category&amp;path=25\" class=\"dropdown-toggle header-menu\" data-toggle=\"dropdown\">Components<i class=\"fa fa-angle-down enangle\"></i></a>
                                                <div class=\"dropdown-menu\">
                                                    <div class=\"dropdown-inner\">
                                                        <ul class=\"list-unstyled\">
                                                            <li class=\"dropdown-submenu\"> <a href=\"indexe177.html?route=product/category&amp;path=25_28\" class=\"submenu-title\"> Comfort Bike (19) </a>
                                                                <ul class=\"list-unstyled grand-child\">
                                                                    <li> <a href=\"indexe733.html?route=product/category&amp;path=28_50\"> Comfort Bike (19) </a> </li>
                                                                    <li> <a href=\"index7328.html?route=product/category&amp;path=28_53\"> Hybrid Bikes (19) </a> </li>
                                                                    <li> <a href=\"index43ee.html?route=product/category&amp;path=28_35\"> Sports Bike (19) </a> </li>
                                                                    <li> <a href=\"indexf6ce.html?route=product/category&amp;path=28_36\"> Tubeless (18 </a> </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                        <ul class=\"list-unstyled\">
                                                            <li class=\"dropdown-submenu\"> <a href=\"index68a7.html?route=product/category&amp;path=25_30\" class=\"submenu-title\"> categories </a>
                                                                <ul class=\"list-unstyled grand-child\">
                                                                    <li> <a href=\"indexedf3.html?route=product/category&amp;path=30_46\"> Folding Bikes (19) </a> </li>
                                                                    <li> <a href=\"indexfb9c.html?route=product/category&amp;path=30_45\"> Tubeless (18) </a> </li>
                                                                    <li> <a href=\"index0ee8.html?route=product/category&amp;path=30_29\">  Hybrid Bikes (19)</a> </li>
                                                                    <li> <a href=\"index293d.html?route=product/category&amp;path=30_31\"> Scanners (14) </a> </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                        <ul class=\"list-unstyled\">
                                                            <li class=\"dropdown-submenu\"> <a href=\"index955a.html?route=product/category&amp;path=25_32\" class=\"submenu-title\"> Accessories (14) </a>
                                                                <ul class=\"list-unstyled grand-child\">
                                                                    <li> <a href=\"indexcc10.html?route=product/category&amp;path=32_40\"> Accessories (14) </a> </li>
                                                                    <li> <a href=\"indexf446.html?route=product/category&amp;path=32_41\"> City Bikes (14) </a> </li>
                                                                    <li> <a href=\"indexf08c.html?route=product/category&amp;path=32_39\"> E-Bikes (14) </a> </li>
                                                                    <li> <a href=\"indexefae.html?route=product/category&amp;path=32_37\"> Comfort Bike (19) </a> </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- <a href=\"http://templatetasarim.com/opencart/Bicycle/index.php?route=product/category&amp;path=25\" class=\"see-all\">Show All Components</a> --> </div>
                                            </li>
                                            <li class=\"moremenu\"><a href=\"index70a9.html?route=product/category&amp;path=57\">Professionals</a></li>
                                            <li class=\"moremenu\"><a href=\"indexc957.html?route=product/category&amp;path=24\">Parts</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>


                        <div class=\"hidden-md hidden-lg hidden-sm\">
                            <nav id=\"menu\" class=\"navbar\">

                                <div class=\"navbar-header\"><!-- <span id=\"category\" class=\"visible-xs\">Categories</span> -->
                                    <button type=\"button\" class=\"btn btn-navbar\" onclick=\"openNav()\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
                                </div>

                                <div id=\"mySidenav\" class=\"sidenav\">
                                    <div class=\"close-nav\">
                                        <span class=\"categories\">Category</span>
                                        <a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\"><i class=\"fa fa-close\"></i></a>
                                    </div>
                                    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                                        <ul class=\"nav navbar-nav\">
                                            <li class=\"dropdown\"><a href=\"index98dc.html?route=product/category&amp;path=20\" class=\"dropdown-toggle header-menu\" data-toggle=\"dropdown\">Products<i class=\"fa fa-angle-down pull-right\"></i></a>
                                                <div class=\"dropdown-menu\">
                                                    <div class=\"dropdown-inner\">               <ul class=\"list-unstyled\">

                                                            <li class=\"dropdown-submenu\"> <a href=\"indexedea.html?route=product/category&amp;path=20_48\" class=\"submenu-title\"> Kids Bikes (19) </a>
                                                            </li>


                                                            <li class=\"dropdown-submenu\"> <a href=\"index4294.html?route=product/category&amp;path=20_44\" class=\"submenu-title\"> Mountain Bike (19) </a>
                                                            </li>


                                                            <li class=\"dropdown-submenu\"> <a href=\"index6096.html?route=product/category&amp;path=20_49\" class=\"submenu-title\"> Road Bike (19) </a>
                                                            </li>


                                                            <li class=\"dropdown-submenu\"> <a href=\"indexdd46.html?route=product/category&amp;path=20_43\" class=\"submenu-title\"> Sports Bike (19) </a>
                                                            </li>


                                                            <li class=\"dropdown-submenu\"> <a href=\"index3e5e.html?route=product/category&amp;path=20_47\" class=\"submenu-title\"> Tubeless (18) </a>
                                                            </li>


                                                            <li class=\"dropdown-submenu\"> <a href=\"indexd9fe.html?route=product/category&amp;path=20_26\" class=\"submenu-title\"> ligne 334 layout </a>
                                                            </li>


                                                            <li class=\"dropdown-submenu\"> <a href=\"indexf345.html?route=product/category&amp;path=20_27\" class=\"submenu-title\">ligne 334 layout </a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <a href=\"index98dc.html?route=product/category&amp;path=20\" class=\"see-all\">Show All Bikes</a> </div>
                                            </li>
                                            <li><a href=\"index7fa3.html?route=product/category&amp;path=18\">Bikes</a></li>
                                            <li class=\"dropdown\"><a href=\"index1647.html?route=product/category&amp;path=25\" class=\"dropdown-toggle header-menu\" data-toggle=\"dropdown\">Components<i class=\"fa fa-angle-down pull-right\"></i></a>
                                                <div class=\"dropdown-menu\">
                                                    <div class=\"dropdown-inner\">               <ul class=\"list-unstyled\">

                                                            <li class=\"dropdown-submenu\"> <a href=\"indexe177.html?route=product/category&amp;path=25_28\" class=\"submenu-title\"> Bikes </a>
                                                                <ul class=\"list-unstyled grand-child\">
                                                                    <li><a href=\"indexe733.html?route=product/category&amp;path=28_50\"> Comfort Bike (19) </a> </li>
                                                                    <li><a href=\"index7328.html?route=product/category&amp;path=28_53\"> Hybrid Bikes (19) </a> </li>
                                                                    <li><a href=\"index43ee.html?route=product/category&amp;path=28_35\"> Accessories 1(14) </a> </li>
                                                                    <li><a href=\"indexf6ce.html?route=product/category&amp;path=28_36\"> Accessories 2 (14) </a> </li>
                                                                </ul>
                                                            </li>

                                                        </ul>
                                                        <ul class=\"list-unstyled\">

                                                            <li class=\"dropdown-submenu\"> <a href=\"index68a7.html?route=product/category&amp;path=25_30\" class=\"submenu-title\"> Accessories </a>
                                                                <ul class=\"list-unstyled grand-child\">
                                                                    <li><a href=\"indexedf3.html?route=product/category&amp;path=30_46\"> Folding Bikes (19) </a> </li>
                                                                    <li><a href=\"indexfb9c.html?route=product/category&amp;path=30_45\"> Hybrid Bikes (19) </a> </li>
                                                                    <li><a href=\"index0ee8.html?route=product/category&amp;path=30_29\"> Mice and Trackballs (19) </a> </li>
                                                                    <li><a href=\"index293d.html?route=product/category&amp;path=30_31\"> layout ligne 367 </a> </li>
                                                                </ul>
                                                            </li>

                                                        </ul>
                                                        <ul class=\"list-unstyled\">

                                                            <li class=\"dropdown-submenu\"> <a href=\"index955a.html?route=product/category&amp;path=25_32\" class=\"submenu-title\"> Professionals </a>
                                                                <ul class=\"list-unstyled grand-child\">
                                                                    <li><a href=\"indexcc10.html?route=product/category&amp;path=32_40\"> Accessories (14) </a> </li>
                                                                    <li><a href=\"indexf446.html?route=product/category&amp;path=32_41\"> City Bikes (14) </a> </li>
                                                                    <li><a href=\"indexf08c.html?route=product/category&amp;path=32_39\"> E-Bikes (14) </a> </li>
                                                                    <li><a href=\"indexefae.html?route=product/category&amp;path=32_37\"> Hybrid Bikes (19) </a> </li>
                                                                </ul>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <a href=\"index1647.html?route=product/category&amp;path=25\" class=\"see-all\">Show All Components</a> </div>
                                            </li>
                                            <li><a href=\"index70a9.html?route=product/category&amp;path=57\">Accessories</a></li>
                                            <li><a href=\"indexc957.html?route=product/category&amp;path=24\">Professionals</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>

                        </div>

                        <script type=\"text/javascript\">
                            function headermenu() {
                                if (jQuery(window).width() < 992)
                                {
                                    jQuery('ul.nav li.dropdown a.header-menu').attr(\"data-toggle\",\"dropdown\");
                                }
                                else
                                {
                                    jQuery('ul.nav li.dropdown a.header-menu').attr(\"data-toggle\",\"\");
                                }
                            }
                            \$(document).ready(function(){headermenu();});
                            jQuery(window).resize(function() {headermenu();});
                            jQuery(window).scroll(function() {headermenu();});
                        </script>


                    </div>
                    <div class=\"col-lg-3 col-md-2 col-sm-2 text-right head-b-right\">
                        <div class=\"d-inline-block hidden-sm hidden0md hidden-lg xs-ac\"></div>
                        <div class=\"hcall d-inline-block\">
                            <div class=\"dropdown\">
                                <button class=\"btn btn-primary insp-search-btn dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"><i class=\"fa fa-search\"></i></button>
                                <div class=\"dropdown-menu insp-search-drop\">
                                    <div class=\"head-bg\">
                                        <div class=\"row\">
                                            <div class=\"head-menu-p\">
                                                <div class=\"deskmenu\"><div id=\"search\" class=\"header-btns desktop-search inline-block\">

                                                        <!-- category Search Start par categorie (chercher par categorie recherche avencée -->
                                                        <!-- <select class=\"form-control\" id=\"insp-search-category\">
                                                          <option value=\"0\">Categories</option>
                                                                            <option value=\"20\">Desktops</option>
                                                                                          <option value=\"48\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kids Bikes</option>
                                                                                                      <option value=\"44\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mountain Bike</option>
                                                                                                      <option value=\"49\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Road Bike</option>
                                                                                                      <option value=\"43\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sports Bike</option>
                                                                                                      <option value=\"47\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tubeless</option>
                                                                                                      <option value=\"26\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PC</option>
                                                                                                      <option value=\"27\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mac</option>
                                                                                                        <option value=\"18\">Laptops</option>
                                                                                            <option value=\"25\">Components</option>
                                                                                          <option value=\"28\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Monitors</option>
                                                                                                  <option value=\"50\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Comfort Bike</option>
                                                                                                    <option value=\"53\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hybrid Bikes</option>
                                                                                                    <option value=\"35\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 1</option>
                                                                                                    <option value=\"36\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 2</option>
                                                                                                        <option value=\"30\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Printers</option>
                                                                                                  <option value=\"46\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Folding Bikes</option>
                                                                                                    <option value=\"45\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Windows</option>
                                                                                                    <option value=\"29\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mice and Trackballs</option>
                                                                                                    <option value=\"31\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scanners</option>
                                                                                                        <option value=\"32\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web Cameras</option>
                                                                                                  <option value=\"40\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Accessories</option>
                                                                                                    <option value=\"41\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City Bikes</option>
                                                                                                    <option value=\"39\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-Bikes</option>
                                                                                                    <option value=\"37\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 5</option>
                                                                                                          <option value=\"57\">Tablets</option>
                                                                                            <option value=\"24\">Phones</option>
                                                                              </select> -->
                                                        <!-- category Search End  -->
                                                        <div class=\"my-search\">
                                                            <div class=\"input-group\">
                                                                <input type=\"text\" name=\"search\" value=\"\" placeholder=\"Search\" class=\"form-control input-lg insp-search\">
                                                                <<span class=\"input-group-btn\">
                                                                  <button type=\"button\" class=\"btn btn-default btn-lg\"><svg width=\"20px\" height=\"24px\"><use xlink:href=\"#hsearch\"></use></svg></button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <!-- category Search Start  -->
                                                        <div class=\"insp-search\">
                                                            <div class=\"insp-search-loader\" style=\"display: none;\"><div class=\"loaders\"></div></div><!-- Add Loader -->
                                                            <div class=\"insp-search-result\"></div>
                                                        </div>
                                                        <!-- category Search End  -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class=\"hcall hidden-xs hidden-sm hidden-md d-inline-block\">
                            <a href=\"index2724.html?route=information/contact\">
                                <span class=\"call-ic d-inline-block\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/catalog/news.png')}}\" alt=\"cart\" class=\"svg\" /></span>
                                <div class=\"d-inline-block text-left\">
                                    <h4>Contact Us</h4>
                                    <h5>58491039</h5>
                                </div>
                            </a>
                        </div>
                        <div id=\"cart\">

                            <button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"Loading...\" class=\"dropdown-toggle\"><span class=\"cartr\"><span class=\"cart-i d-inline-block\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/catalog/cart.png')}}\" alt=\"cart\" class=\"svg\" /></span><span id=\"cart-total\" class=\"text-left\"><h5 class=\" hidden-xs\">My Cart</h5><h6>0<span class=\"hidden-xs\"> Item</span></h6></span></span></button>

                            <ul class=\"dropdown-menu pull-right\">
                                <li>
                                    <p class=\"text-center\">Your shopping cart is empty!</p>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
</header>
<h1>c'est la ligne 507 de layout </h1>
<!-- ------------------------------------------------------------------------------le debut contenu de l application ------------------------------------------------------------- -->
{#   {% block content %}

{% endblock  %} }} #}

<!-- ------------------------------------------------------------------------------la fin  contenu de l application ------------------------------------------------------------- -->
    <footer>
        <div class=\"foot-top\">
            <div class=\"container\">
                <div class=\"inspire-newsletter  inspire-newsletter\" id=\"newsletter_1580988993\" data-mode=\"default\">
                    <form id=\"formNewLestter\" method=\"post\" action=\"http://templatetasarim.com/opencart/Bicycle/index.php?route=extension/module/inspirenewsletter/subscribe\" class=\"formNewLestter newsletter-bg\" >
                        <div class=\"inner news-pati row\">
                            <div class=\"col-sm-6 col-xs-12 hidden-xs\">
                                <div class=\"sign-up-img\"></div>
                                <div class=\"description-top \">
                                    <h3 class=\"mail-msg\">Sign Up For Newsletter</h3>
                                    <p>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSignup Our newsletter And get latest updates!

                                    </p>
                                </div>
                            </div>
                            <div class=\"form-group col-sm-6 col-xs-12\">
                                <input type=\"text\" class=\"form-control input-md inputNew\"  onblur=\"javascript:if(this.value=='')this.value='Your email address';\" onfocus=\"javascript:if(this.value=='Your email address')this.value='';\" value=\"Your email address\" size=\"18\" name=\"email\">
                                <button type=\"submit\" name=\"submitNewsletter\" class=\"btn btn-danger ne-su\">Subscribe</button>
                                <input type=\"hidden\" value=\"1\" name=\"action\">
                                <div class=\"valid\"></div>
                                <div class=\"description-bottom\">





                                </div>
                            </div>

                        </div>
                    </form>
                </div>

                <script type=\"text/javascript\"><!--
                    \$(\"#newsletter_1580988993\").inspireoNewsletter().work(  'Email is not valid!' );
                    --></script>

            </div>
        </div>
        <div class=\"container\">





            <div class=\"\">
                <div class=\"row footmr\">




                    <div class=\"middle-footer\">
                        <div class=\"col-sm-3\">
                            <div class=\"xs-fab\">
                                <aside id=\"column-left1\">
                                    <div>  <div>  <h5 class=\"\"><span>Contact us</span>
                                                <button type=\"button\" class=\"btn btn-primary toggle collapsed\" data-toggle=\"collapse\" data-target=\"#contact\"></button>
                                            </h5>
                                            <div id=\"contact\" class=\"collapse footer-collapse footcontact\">
                                                <ul class=\"list-unstyled f-left\">
                                                    <li><i class=\"fa fa-map-marker\"></i>Esprit ghazela </li>
                                                    <li><i class=\"fa fa-envelope\"></i>DEFENDERS@esprit.tn </li>
                                                    <li><i class=\"fa fa-phone\"></i>58491039</li>
                                                    <li><i class=\"fa fa-paper-plane\"></i>Ariana,Tunis</li>
                                                </ul>
                                                <div class=\"footsocial\">
                                                    <ul class=\"socials list-inline\">
                                                        <li class=\"facebook\"><a href=\"#\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
                                                        <li class=\"twitter\"><a href=\"#\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a></li>
                                                        <li class=\"google_plus\"><a href=\"#\" target=\"_blank\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                        <li class=\"pinterest\"><a href=\"#\" target=\"_blank\"><i class=\"fa fa-pinterest\"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div></div></div>



                                    <script type=\"text/javascript\">
                                        \$(document).ready(function() {
                                            \$(\"#owl-testi\").owlCarousel({
                                                itemsCustom : [
                                                    [0, 1],
                                                    [768, 2],
                                                    [992, 2],
                                                    [1200, 3]
                                                ],
                                                autoPlay: false,
                                                navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
                                                navigation : true,
                                                pagination:false
                                            });
                                        });
                                    </script>


                                </aside>

                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <h5>Extras
                                <button type=\"button\" class=\"btn btn-primary toggle collapsed\" data-toggle=\"collapse\" data-target=\"#extra\"></button>
                            </h5>
                            <div id=\"extra\" class=\"collapse footer-collapse\">
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"indexd773.html?route=product/manufacturer\">Brands</a></li>
                                    <li><a href=\"index4dd2.html?route=account/voucher\">Gift Certificates</a></li>
                                    <li><a href=\"index3d18.html?route=affiliate/login\">Affiliate</a></li>
                                    <li><a href=\"indexf110.html?route=product/special\">Specials</a></li>
                                    <li><a href=\"index7cb2.html?route=information/sitemap\">Site Map</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <h5>Information
                                <button type=\"button\" class=\"btn btn-primary toggle collapsed\" data-toggle=\"collapse\" data-target=\"#info\"></button>
                            </h5>
                            <div id=\"info\" class=\"collapse footer-collapse\">
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"index8816.html?route=information/information&amp;information_id=4\">About Us</a></li>
                                    <li><a href=\"index1766.html?route=information/information&amp;information_id=6\">Delivery Information</a></li>
                                    <li><a href=\"index1679.html?route=information/information&amp;information_id=3\">Privacy Policy</a></li>
                                    <li><a href=\"index99e4.html?route=information/information&amp;information_id=5\">Terms &amp; Conditions</a></li>
                                    <li><a href=\"index2724.html?route=information/contact\">Contact Us</a></li>
                                    <li><a href=\"index7cb2.html?route=information/sitemap\">Site Map</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-sm-3\">
                            <h5>My Account
                                <button type=\"button\" class=\"btn btn-primary toggle collapsed\" data-toggle=\"collapse\" data-target=\"#account\"></button>
                            </h5>
                            <div id=\"account\" class=\"collapse footer-collapse\">
                                <ul class=\"list-unstyled lastb\">
                                    <li><a href=\"indexe223.html?route=account/account\">My Account</a></li>
                                    <li><a href=\"indexe223.html?route=account/order\">Order History</a></li>
                                    <li><a href=\"indexe223.html?route=account/wishlist\">Wish List</a></li>
                                    <li><a href=\"indexe223.html?route=account/newsletter\">Newsletter</a></li>
                                    <li><a href=\"index71ba.html?route=account/return/add\">Returns</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--   -->
                </div>

            </div>




        </div>

        <div class=\"foot-power\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"copy col-xs-12 col-sm-6\">Powered By <a href=\"http://www.opencart.com/\">Defenders</a> VELO.TN &copy; 2020</div>
                    <div class=\"col-xs-12 col-sm-6 text-right\"> <div>  <div class=\"foot-bottom\">
                                <div class=\"footmr\">
                                    <!-- <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12 f-social\">
                                        <div class=\"foot-app\">
                                        <div class=\"title-footer hidden-md hidden-sm hidden-xs\">Download Our App</div>
                                        <ul class=\"list-unstyled inline-block\">
                                          <li><a title=\"AppStore\" href=\"#\"><img class=\"img-responsive\" src=\"image/catalog/app1.png\" alt=\"App Store\"></a></li>
                                          <li><a title=\"PlayStore\" href=\"#\"><img class=\"img-responsive\" src=\"image/catalog/app2.png\" alt=\"Play Store\"></a></li>
                                        </ul>
                                      </div>
                                    </div> -->
                                    <div class=\"pull-right \">
                                        <div class=\"text-right\">
                                            <a href=\"#\"><img class=\"img-responsive center-block\" src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/catalog/payment.png')}}\" alt=\"imgpayment\"></a>
                                        </div>
                                    </div>
                                </div>
                            </div></div>



                        <script type=\"text/javascript\">
                            \$(document).ready(function() {
                                \$(\"#owl-testi\").owlCarousel({
                                    itemsCustom : [
                                        [0, 1],
                                        [768, 2],
                                        [992, 2],
                                        [1200, 3]
                                    ],
                                    autoPlay: false,
                                    navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
                                    navigation : true,
                                    pagination:false
                                });
                            });
                        </script>


                    </div>
                </div>
            </div>
        </div>
        <a href=\"#\" id=\"scroll\" title=\"Scroll to Top\" style=\"display: block;\">
            <i class=\"fa fa-angle-up\"></i>
        </a>
    </footer>



</body>
</html>
", "layout.html.twig", "C:\\wamp64\\www\\PiDev\\app\\Resources\\views\\layout.html.twig");
    }
}
