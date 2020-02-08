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

/* @Template/Template/Template.html.twig */
class __TwigTemplate_bd81260686428b0a6fc02b55d04100e936ff6d669ba505095d5190f069c44cba extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Template/Template/Template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Template/Template/Template.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "@Template/Template/Template.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Your Store";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div id=\"page-preloader\" class=\"visible\">
        <div class=\"preloader\">
            <div id=\"loading-center-absolute\">
                <div class=\"object\" id=\"object_one\"></div>
            </div>
        </div>
    </div>
    <div id=\"common-home\">
    <div class=\"bg-color-b\">
        <div class=\"row commonrow\">
            <div id=\"content\" class=\"col-sm-12\"><div class=\"slide-padding\">
                    <div class=\"homeslide\">
                        <div id=\"slideshow0\" class=\"owl-carousel owl-theme\">
                            <div class=\"text-center\"><a href=\"#\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/slider/slide-03-1920x700.jpg"), "html", null, true);
        echo "\" alt=\"slider\" class=\"img-responsive\" /></a></div>
                            <div class=\"text-center\"><a href=\"#\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/slider/slide-01-1920x700.jpg"), "html", null, true);
        echo "\" alt=\"MacBookAir\" class=\"img-responsive\" /></a></div>
                        </div>
                    </div>
                </div>

                <script type=\"text/javascript\">
                    \$(document).ready(function() {
                        \$(\"#slideshow0\").owlCarousel({
                            itemsCustom : [
                                [0, 1]
                            ],
                            autoPlay: 2500,
                            animateIn: 'fadeIn',
                            animateOut: 'fadeOut',
                            loop: true,
                            navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
                            navigation : true,
                            pagination:false
                        });
                    });
                </script>

                <div class=\"cbanner pro-nepr\">
                    <div class=\"row\">
                        <div class=\"col-xs-4\">
                            <div class=\"banner-e\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/Allbanner/640x300-3-640x300.jpg"), "html", null, true);
        echo "\" alt=\"banner\" class=\"img-responsive center-block\" />
                                </a>
                            </div>
                        </div>
                        <div class=\"col-xs-4\">
                            <div class=\"banner-e\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/Allbanner/640x300-02-640x300.jpg"), "html", null, true);
        echo "\" alt=\"banner\" class=\"img-responsive center-block\" />
                                </a>
                            </div>
                        </div>
                        <div class=\"col-xs-4\">
                            <div class=\"banner-e\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/Allbanner/640x300-640x300.jpg"), "html", null, true);
        echo "\" alt=\"banner\" class=\"img-responsive center-block\" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class=\"container\">
                    <div class=\"pro-bg\">
                        <div class=\"tab-pro text-center\">
                            <h2>Trending products<hr></h2>
                            <ul class=\"nav nav-tabs pro-tab\">
                                <li class=\"active\"><a href=\"#featurep\" data-toggle=\"tab\">Featured</a></li>
                                <li class=\"tabl\"><a href=\"#bestp\" data-toggle=\"tab\">BestSeller</a></li>
                                <li><a href=\"#newp\" data-toggle=\"tab\">New</a></li>

                            </ul>
                        </div>
                        <div class=\"tab-content pro-nepr\">

                            <div class=\"tab-pane active\" id=\"featurep\">

                                <div class=\"pro-nepr\">
                                    <div class=\"row thummargin\">
                                        <div id=\"feature\" class=\"owl-theme owl-carousel\">

                                            <div class=\"multi-row\">
                                                <div class=\"product-layout col-xs-12\">
                                                    <div class=\"product-thumb transition\">
                                                        <div class=\"image\"><a href=\"index9144.html?route=product/product&amp;product_id=40\"><img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-06-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"iPhone\" title=\"iPhone\" class=\"img-responsive center-block\" /></a>

                                                            <a href=\"index9144.html?route=product/product&amp;product_id=40\"><img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-13-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>








                                                        </div>
                                                        <div class=\"caption text-center\">
                                                            <h4><a href=\"index9144.html?route=product/product&amp;product_id=40\">iPhone</a></h4>
                                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            </div>                      <p class=\"price\">           \$123.20
                                                            </p>

                                                            <div class=\"button-group\">
                                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('40');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('40');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('40');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class=\"product-layout col-xs-12\">
                                                    <div class=\"product-thumb transition\">
                                                        <div class=\"image\"><a href=\"indexf073.html?route=product/product&amp;product_id=30\"><img src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-02-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"Canon EOS 5D\" title=\"Canon EOS 5D\" class=\"img-responsive center-block\" /></a>

                                                            <a href=\"indexf073.html?route=product/product&amp;product_id=30\"><img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-05-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>








                                                            <span class=\"salepro\">sale</span>

                                                        </div>
                                                        <div class=\"caption text-center\">
                                                            <h4><a href=\"indexf073.html?route=product/product&amp;product_id=30\">Canon EOS 5D</a></h4>
                                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            </div>                      <p class=\"price\">  <span class=\"price-new\">\$98.00</span> <span class=\"price-old\">\$122.00</span>            </p>

                                                            <p class=\"sale-tag hot\">Save 20%</p>
                                                            <div class=\"button-group\">
                                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('30');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('30');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('30');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"multi-row\">
                                                <div class=\"product-layout col-xs-12\">
                                                    <div class=\"product-thumb transition\">
                                                        <div class=\"image\"><a href=\"indexbb02.html?route=product/product&amp;product_id=42\"><img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-01-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"Apple Cinema 30&quot;\" title=\"Apple Cinema 30&quot;\" class=\"img-responsive center-block\" /></a>

                                                            <a href=\"indexbb02.html?route=product/product&amp;product_id=42\"><img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-11-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>












                                                            <span class=\"salepro\">sale</span>

                                                        </div>
                                                        <div class=\"caption text-center\">
                                                            <h4><a href=\"indexbb02.html?route=product/product&amp;product_id=42\">Apple Cinema 30&quot;</a></h4>
                                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            </div>                      <p class=\"price\">  <span class=\"price-new\">\$110.00</span> <span class=\"price-old\">\$122.00</span>            </p>

                                                            <p class=\"sale-tag sale\">Save 10%</p>
                                                            <div class=\"button-group\">
                                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('42');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('42');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('42');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class=\"product-layout col-xs-12\">
                                                    <div class=\"product-thumb transition\">
                                                        <div class=\"image\"><a href=\"indexd21c.html?route=product/product&amp;product_id=47\"><img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-03-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"HP LP3065\" title=\"HP LP3065\" class=\"img-responsive center-block\" /></a>

                                                            <a href=\"indexd21c.html?route=product/product&amp;product_id=47\"><img src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-09-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>









                                                        </div>
                                                        <div class=\"caption text-center\">
                                                            <h4><a href=\"indexd21c.html?route=product/product&amp;product_id=47\">HP LP3065</a></h4>
                                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            </div>                      <p class=\"price\">           \$122.00
                                                            </p>

                                                            <div class=\"button-group\">
                                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"multi-row\">
                                                <div class=\"product-layout col-xs-12\">
                                                    <div class=\"product-thumb transition\">
                                                        <div class=\"image\"><a href=\"indexcae8.html?route=product/product&amp;product_id=41\"><img src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-05-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"iMac\" title=\"iMac\" class=\"img-responsive center-block\" /></a>

                                                            <a href=\"indexcae8.html?route=product/product&amp;product_id=41\"><img src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-15-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>









                                                            <span class=\"salepro\">sale</span>

                                                        </div>
                                                        <div class=\"caption text-center\">
                                                            <h4><a href=\"indexcae8.html?route=product/product&amp;product_id=41\">iMac</a></h4>
                                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            </div>                      <p class=\"price\">  <span class=\"price-new\">\$62.00</span> <span class=\"price-old\">\$122.00</span>            </p>

                                                            <p class=\"sale-tag hot\">Save 50%</p>
                                                            <div class=\"button-group\">
                                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class=\"product-layout col-xs-12\">
                                                    <div class=\"product-thumb transition\">
                                                        <div class=\"image\"><a href=\"indexb77e.html?route=product/product&amp;product_id=48\"><img src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-07-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive center-block\" /></a>

                                                            <a href=\"indexb77e.html?route=product/product&amp;product_id=48\"><img src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-16-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>









                                                        </div>
                                                        <div class=\"caption text-center\">
                                                            <h4><a href=\"indexb77e.html?route=product/product&amp;product_id=48\">iPod Classic</a></h4>
                                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            </div>                      <p class=\"price\">           \$122.00
                                                            </p>

                                                            <div class=\"button-group\">
                                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('48');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('48');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('48');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"multi-row\">
                                                <div class=\"product-layout col-xs-12\">
                                                    <div class=\"product-thumb transition\">
                                                        <div class=\"image\"><a href=\"indexbfcf.html?route=product/product&amp;product_id=31\"><img src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-14-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"Nikon D300\" title=\"Nikon D300\" class=\"img-responsive center-block\" /></a>

                                                            <a href=\"indexbfcf.html?route=product/product&amp;product_id=31\"><img src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-10-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>









                                                        </div>
                                                        <div class=\"caption text-center\">
                                                            <h4><a href=\"indexbfcf.html?route=product/product&amp;product_id=31\">Nikon D300</a></h4>
                                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            </div>                      <p class=\"price\">           \$98.00
                                                            </p>

                                                            <div class=\"button-group\">
                                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('31');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('31');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('31');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class=\"product-layout col-xs-12\">
                                                    <div class=\"product-thumb transition\">
                                                        <div class=\"image\"><a href=\"indexb8ca.html?route=product/product&amp;product_id=43\"><img src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-11-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"MacBook\" title=\"MacBook\" class=\"img-responsive center-block\" /></a>

                                                            <a href=\"indexb8ca.html?route=product/product&amp;product_id=43\"><img src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-03-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>









                                                        </div>
                                                        <div class=\"caption text-center\">
                                                            <h4><a href=\"indexb8ca.html?route=product/product&amp;product_id=43\">MacBook</a></h4>
                                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            </div>                      <p class=\"price\">           \$602.00
                                                            </p>

                                                            <div class=\"button-group\">
                                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('43');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('43');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('43');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"multi-row\">
                                                <div class=\"product-layout col-xs-12\">
                                                    <div class=\"product-thumb transition\">
                                                        <div class=\"image\"><a href=\"indexd94c.html?route=product/product&amp;product_id=44\"><img src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-12-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"MacBook Air\" title=\"MacBook Air\" class=\"img-responsive center-block\" /></a>

                                                            <a href=\"indexd94c.html?route=product/product&amp;product_id=44\"><img src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-10-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>









                                                        </div>
                                                        <div class=\"caption text-center\">
                                                            <h4><a href=\"indexd94c.html?route=product/product&amp;product_id=44\">MacBook Air</a></h4>
                                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            </div>                      <p class=\"price\">           \$1,202.00
                                                            </p>

                                                            <div class=\"button-group\">
                                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('44');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('44');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('44');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class=\"product-layout col-xs-12\">
                                                    <div class=\"product-thumb transition\">
                                                        <div class=\"image\"><a href=\"index531d.html?route=product/product&amp;product_id=45\"><img src=\"";
        // line 538
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-13-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"MacBook Pro\" title=\"MacBook Pro\" class=\"img-responsive center-block\" /></a>

                                                            <a href=\"index531d.html?route=product/product&amp;product_id=45\"><img src=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-03-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>









                                                        </div>
                                                        <div class=\"caption text-center\">
                                                            <h4><a href=\"index531d.html?route=product/product&amp;product_id=45\">MacBook Pro</a></h4>
                                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            </div>                      <p class=\"price\">           \$2,000.00
                                                            </p>

                                                            <div class=\"button-group\">
                                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('45');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('45');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('45');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>



                                        </div>

                                    </div>
                                </div>
                            </div>

                            <script type=\"text/javascript\">
                                \$(document).ready(function() {
                                    \$(\"#feature\").owlCarousel({
                                        itemsCustom : [
                                            [0, 2],
                                            [375, 2],
                                            [600, 3],
                                            [768, 3],
                                            [992, 3],
                                            [1200, 4],
                                            [1410, 4]
                                        ],
                                        // autoPlay: 1000,
                                        navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
                                        navigation : true,
                                        pagination:false
                                    });
                                });
                            </script>
                            <div class=\"tab-pane\" id=\"bestp\">
                                <div class=\"row thummargin\">
                                    <div id=\"best\" class=\"owl-theme owl-carousel\">

                                        <div class=\"multi-row\">
                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\">
                                                        <a href=\"indexbfcf.html?route=product/product&amp;product_id=31\"><img src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-14-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"Nikon D300\" title=\"Nikon D300\" class=\"img-responsive\" /></a>

                                                        <a href=\"indexbfcf.html?route=product/product&amp;product_id=31\">
                                                            <img src=\"";
        // line 623
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-10-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"indexbfcf.html?route=product/product&amp;product_id=31\">Nikon D300</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">           \$98.00
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('31');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('31');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('31');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\">
                                                        <a href=\"indexd21c.html?route=product/product&amp;product_id=47\"><img src=\"";
        // line 660
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-03-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"HP LP3065\" title=\"HP LP3065\" class=\"img-responsive\" /></a>

                                                        <a href=\"indexd21c.html?route=product/product&amp;product_id=47\">
                                                            <img src=\"";
        // line 663
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-09-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"indexd21c.html?route=product/product&amp;product_id=47\">HP LP3065</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">           \$122.00
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"multi-row\">
                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\">
                                                        <a href=\"indexb77e.html?route=product/product&amp;product_id=48\"><img src=\"";
        // line 702
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-07-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\" /></a>

                                                        <a href=\"indexb77e.html?route=product/product&amp;product_id=48\">
                                                            <img src=\"";
        // line 705
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-16-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"indexb77e.html?route=product/product&amp;product_id=48\">iPod Classic</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">           \$122.00
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('48');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('48');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('48');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\">
                                                        <a href=\"indexb8ca.html?route=product/product&amp;product_id=43\"><img src=\"";
        // line 742
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-11-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"MacBook\" title=\"MacBook\" class=\"img-responsive\" /></a>

                                                        <a href=\"indexb8ca.html?route=product/product&amp;product_id=43\">
                                                            <img src=\"";
        // line 745
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-03-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"indexb8ca.html?route=product/product&amp;product_id=43\">MacBook</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">           \$602.00
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('43');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('43');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('43');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"multi-row\">
                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\">
                                                        <a href=\"index531d.html?route=product/product&amp;product_id=45\"><img src=\"";
        // line 784
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-13-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"MacBook Pro\" title=\"MacBook Pro\" class=\"img-responsive\" /></a>

                                                        <a href=\"index531d.html?route=product/product&amp;product_id=45\">
                                                            <img src=\"";
        // line 787
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-03-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"index531d.html?route=product/product&amp;product_id=45\">MacBook Pro</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">           \$2,000.00
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('45');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('45');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('45');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\">
                                                        <a href=\"indexd94c.html?route=product/product&amp;product_id=44\"><img src=\"";
        // line 824
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-12-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"MacBook Air\" title=\"MacBook Air\" class=\"img-responsive\" /></a>

                                                        <a href=\"indexd94c.html?route=product/product&amp;product_id=44\">
                                                            <img src=\"";
        // line 827
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-10-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"indexd94c.html?route=product/product&amp;product_id=44\">MacBook Air</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">           \$1,202.00
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('44');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('44');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('44');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"multi-row\">
                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\">
                                                        <a href=\"index9144.html?route=product/product&amp;product_id=40\"><img src=\"";
        // line 866
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-06-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"iPhone\" title=\"iPhone\" class=\"img-responsive\" /></a>

                                                        <a href=\"index9144.html?route=product/product&amp;product_id=40\">
                                                            <img src=\"";
        // line 869
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-13-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"index9144.html?route=product/product&amp;product_id=40\">iPhone</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">           \$123.20
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('40');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('40');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('40');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\">
                                                        <a href=\"indexcae8.html?route=product/product&amp;product_id=41\"><img src=\"";
        // line 906
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-05-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"iMac\" title=\"iMac\" class=\"img-responsive\" /></a>

                                                        <a href=\"indexcae8.html?route=product/product&amp;product_id=41\">
                                                            <img src=\"";
        // line 909
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-15-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"indexcae8.html?route=product/product&amp;product_id=41\">iMac</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">  <span class=\"price-new\">\$62.00</span> <span class=\"price-old\">\$122.00</span>            </p>

                                                        <p class=\"sale-tag hot\">Save 50%</p>
                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>









                            <script type=\"text/javascript\">
                                \$(document).ready(function() {
                                    \$(\"#best\").owlCarousel({
                                        itemsCustom : [
                                            [0, 2],
                                            [375, 2],
                                            [600, 3],
                                            [768, 3],
                                            [992, 3],
                                            [1200, 4],
                                            [1410, 4]
                                        ],
                                        // autoPlay: 1000,
                                        navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
                                        navigation : true,
                                        pagination:false
                                    });
                                });
                            </script>

                            <div class=\"tab-pane\" id=\"newp\">
                                <div class=\"row thummargin\">
                                    <div id=\"latest\" class=\"owl-theme owl-carousel\">

                                        <div class=\"multi-row\">
                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\"><a href=\"index3d7a.html?route=product/product&amp;product_id=49\"><img src=\"";
        // line 985
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-17-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"Samsung Galaxy Tab 10.1\" title=\"Samsung Galaxy Tab 10.1\" class=\"img-responsive center-block\" /></a>

                                                        <a href=\"index3d7a.html?route=product/product&amp;product_id=49\"><img src=\"";
        // line 987
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-04-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>

                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"index3d7a.html?route=product/product&amp;product_id=49\">Samsung Galaxy Tab 10.1</a></h4>
                                                        <div class=\"rating\">          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                        </div>
                                                        <p class=\"price\">           \$241.99
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('49');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('49');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('49');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\"><a href=\"indexb77e.html?route=product/product&amp;product_id=48\"><img src=\"";
        // line 1013
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-07-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive center-block\" /></a>

                                                        <a href=\"indexb77e.html?route=product/product&amp;product_id=48\"><img src=\"";
        // line 1015
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-16-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>

                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"indexb77e.html?route=product/product&amp;product_id=48\">iPod Classic</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">           \$122.00
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('48');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('48');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('48');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"multi-row\">
                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\"><a href=\"indexd21c.html?route=product/product&amp;product_id=47\"><img src=\"";
        // line 1054
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-03-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"HP LP3065\" title=\"HP LP3065\" class=\"img-responsive center-block\" /></a>

                                                        <a href=\"indexd21c.html?route=product/product&amp;product_id=47\"><img src=\"";
        // line 1056
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-09-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>

                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"indexd21c.html?route=product/product&amp;product_id=47\">HP LP3065</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">           \$122.00
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\"><a href=\"index2ebe.html?route=product/product&amp;product_id=46\"><img src=\"";
        // line 1093
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-21-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"Sony VAIO\" title=\"Sony VAIO\" class=\"img-responsive center-block\" /></a>

                                                        <a href=\"index2ebe.html?route=product/product&amp;product_id=46\"><img src=\"";
        // line 1095
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-01-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>

                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"index2ebe.html?route=product/product&amp;product_id=46\">Sony VAIO</a></h4>
                                                        <div class=\"rating\">          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                        </div>
                                                        <p class=\"price\">           \$1,202.00
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('46');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('46');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('46');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"multi-row\">
                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\"><a href=\"index531d.html?route=product/product&amp;product_id=45\"><img src=\"";
        // line 1123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-13-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"MacBook Pro\" title=\"MacBook Pro\" class=\"img-responsive center-block\" /></a>

                                                        <a href=\"index531d.html?route=product/product&amp;product_id=45\"><img src=\"";
        // line 1125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-03-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>

                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"index531d.html?route=product/product&amp;product_id=45\">MacBook Pro</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">           \$2,000.00
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('45');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('45');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('45');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\"><a href=\"indexd94c.html?route=product/product&amp;product_id=44\"><img src=\"";
        // line 1162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-12-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"MacBook Air\" title=\"MacBook Air\" class=\"img-responsive center-block\" /></a>

                                                        <a href=\"indexd94c.html?route=product/product&amp;product_id=44\"><img src=\"";
        // line 1164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-10-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>

                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"indexd94c.html?route=product/product&amp;product_id=44\">MacBook Air</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">           \$1,202.00
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('44');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('44');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('44');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"multi-row\">
                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\"><a href=\"indexb8ca.html?route=product/product&amp;product_id=43\"><img src=\"";
        // line 1203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-11-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"MacBook\" title=\"MacBook\" class=\"img-responsive center-block\" /></a>

                                                        <a href=\"indexb8ca.html?route=product/product&amp;product_id=43\"><img src=\"";
        // line 1205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-03-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>

                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"indexb8ca.html?route=product/product&amp;product_id=43\">MacBook</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">           \$602.00
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('43');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('43');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('43');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\"><a href=\"indexbb02.html?route=product/product&amp;product_id=42\"><img src=\"";
        // line 1242
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-01-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"Apple Cinema 30&quot;\" title=\"Apple Cinema 30&quot;\" class=\"img-responsive center-block\" /></a>

                                                        <a href=\"indexbb02.html?route=product/product&amp;product_id=42\"><img src=\"";
        // line 1244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-11-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>

                                                        <span class=\"salepro\">sale</span>
                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"indexbb02.html?route=product/product&amp;product_id=42\">Apple Cinema 30&quot;</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">  <span class=\"price-new\">\$110.00</span> <span class=\"price-old\">\$122.00</span>            </p>

                                                        <p class=\"sale-tag hot\">Save 10%</p>
                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('42');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('42');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('42');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"multi-row\">
                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\"><a href=\"indexcae8.html?route=product/product&amp;product_id=41\"><img src=\"";
        // line 1284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-05-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"iMac\" title=\"iMac\" class=\"img-responsive center-block\" /></a>

                                                        <a href=\"indexcae8.html?route=product/product&amp;product_id=41\"><img src=\"";
        // line 1286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-15-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>

                                                        <span class=\"salepro\">sale</span>
                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"indexcae8.html?route=product/product&amp;product_id=41\">iMac</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">  <span class=\"price-new\">\$62.00</span> <span class=\"price-old\">\$122.00</span>            </p>

                                                        <p class=\"sale-tag new\">Save 50%</p>
                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\"><a href=\"index9144.html?route=product/product&amp;product_id=40\"><img src=\"";
        // line 1324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-06-1000x700.jpg"), "html", null, true);
        echo "\" alt=\"iPhone\" title=\"iPhone\" class=\"img-responsive center-block\" /></a>

                                                        <a href=\"index9144.html?route=product/product&amp;product_id=40\"><img src=\"";
        // line 1326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-13-1000x700.jpg"), "html", null, true);
        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>

                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"index9144.html?route=product/product&amp;product_id=40\">iPhone</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">           \$123.20
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('40');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('40');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('40');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <script type=\"text/javascript\">
                    \$(document).ready(function() {
                        \$(\"#latest\").owlCarousel({
                            itemsCustom : [
                                [0, 2],
                                [375, 2],
                                [600, 3],
                                [768, 3],
                                [992, 3],
                                [1200, 4],
                                [1410, 4]
                            ],
                            // autoPlay: 1000,
                            navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
                            navigation : true,
                            pagination:false
                        });
                    });
                </script>
                <div>  <div id=\"offerbanner\" class=\"clearfix\">
                        <div class=\"parallax\" data-source-url=\"";
        // line 1393
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/catalog/parallax.jpg"), "html", null, true);
        echo "\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/catalog/parallax.jpg"), "html", null, true);
        echo ");\">
                            <div class=\"container\">
                                <div class=\"parallax-list pull-right text-center\">
                                    <div class=\"offer-head\">Save To 50% Off On First order!</div>
                                    <div class=\"offer-subhead\">Special Offer</div>
                                    <div class=\"offer-info\">Click &amp; Collect First Delivery Free over</div>
                                    <a class=\"btn btn-primary\" href=\"#\">SHOP NOW</a>
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



                <div class=\"dealbg\">
                    <div class=\"pro-bg pro-nepr container\">
                        <div class=\"\">
                            <h2 class=\"heading\">Deals of the day<hr></h2>
                            <div class=\"count-pro\">
                                <div class=\"row thummargin\">
                                    <div id=\"count\" class=\"owl-theme owl-carousel\">

                                        <div class=\"product-layout col-xs-12\">
                                            <div class=\"product-thumb transition\">
                                                <div class=\"image\"><a href=\"indexbb02.html?route=product/product&amp;product_id=42\"><img src=\"";
        // line 1436
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-01-315x221.jpg"), "html", null, true);
        echo "\" alt=\"Apple Cinema 30&quot;\" title=\"Apple Cinema 30&quot;\" class=\"img-responsive center-block\" /></a>



                                                    <div id=\"Countdown42\" class=\"box-timer\"></div>       </div>


                                                <div class=\"caption text-center\">
                                                    <h4><a href=\"indexbb02.html?route=product/product&amp;product_id=42\">Apple Cinema 30&quot;</a></h4>
                                                    <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                    </div>

                                                    <p class=\"price\">  <span class=\"price-new\">\$110.00</span> <span class=\"price-old\">\$122.00</span>            </p>

                                                    <div class=\"button-group\">
                                                        <button class=\"acart\" type=\"button\" onclick=\"cart.add('42');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('42');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('42');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                        <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                    </div>


                                                </div>




                                                <script type=\"text/javascript\">
                                                    \$(document).ready(function () {
                                                        \$('#Countdown42').countdown({
                                                            until: new Date(2021, 10-1, 13, 00, 00, 00),
                                                            labels: ['Years', 'Months', 'Weeks', 'Days', 'Hrs', 'Mins', 'Secs'],
                                                            labels1: ['Year', 'Month', 'Week', 'Day', 'Hr', 'Min', 'Sec'],
                                                        });
                                                        //\$('#Countdown<?php echo \$product['product_id'];?>').countdown('pause');
                                                    });
                                                </script>
                                            </div>
                                        </div>

                                        <div class=\"product-layout col-xs-12\">
                                            <div class=\"product-thumb transition\">
                                                <div class=\"image\"><a href=\"indexf073.html?route=product/product&amp;product_id=30\"><img src=\"";
        // line 1493
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-02-315x221.jpg"), "html", null, true);
        echo "\" alt=\"Canon EOS 5D\" title=\"Canon EOS 5D\" class=\"img-responsive center-block\" /></a>



                                                    <div id=\"Countdown30\" class=\"box-timer\"></div>       </div>


                                                <div class=\"caption text-center\">
                                                    <h4><a href=\"indexf073.html?route=product/product&amp;product_id=30\">Canon EOS 5D</a></h4>
                                                    <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                    </div>

                                                    <p class=\"price\">  <span class=\"price-new\">\$98.00</span> <span class=\"price-old\">\$122.00</span>            </p>

                                                    <div class=\"button-group\">
                                                        <button class=\"acart\" type=\"button\" onclick=\"cart.add('30');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('30');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('30');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                        <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                    </div>


                                                </div>




                                                <script type=\"text/javascript\">
                                                    \$(document).ready(function () {
                                                        \$('#Countdown30').countdown({
                                                            until: new Date(2025, 07-1, 10, 00, 00, 00),
                                                            labels: ['Years', 'Months', 'Weeks', 'Days', 'Hrs', 'Mins', 'Secs'],
                                                            labels1: ['Year', 'Month', 'Week', 'Day', 'Hr', 'Min', 'Sec'],
                                                        });
                                                        //\$('#Countdown<?php echo \$product['product_id'];?>').countdown('pause');
                                                    });
                                                </script>
                                            </div>
                                        </div>

                                        <div class=\"product-layout col-xs-12\">
                                            <div class=\"product-thumb transition\">
                                                <div class=\"image\"><a href=\"indexd21c.html?route=product/product&amp;product_id=47\"><img src=\"";
        // line 1550
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-03-315x221.jpg"), "html", null, true);
        echo "\" alt=\"HP LP3065\" title=\"HP LP3065\" class=\"img-responsive center-block\" /></a>



                                                    <div id=\"Countdown47\" class=\"box-timer\"></div>       </div>


                                                <div class=\"caption text-center\">
                                                    <h4><a href=\"indexd21c.html?route=product/product&amp;product_id=47\">HP LP3065</a></h4>
                                                    <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                    </div>

                                                    <p class=\"price\">           \$122.00
                                                    </p>

                                                    <div class=\"button-group\">
                                                        <button class=\"acart\" type=\"button\" onclick=\"cart.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                        <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                    </div>


                                                </div>




                                                <script type=\"text/javascript\">
                                                    \$(document).ready(function () {
                                                        \$('#Countdown47').countdown({
                                                            until: new Date(2021, 11-1, 25, 00, 00, 00),
                                                            labels: ['Years', 'Months', 'Weeks', 'Days', 'Hrs', 'Mins', 'Secs'],
                                                            labels1: ['Year', 'Month', 'Week', 'Day', 'Hr', 'Min', 'Sec'],
                                                        });
                                                        //\$('#Countdown<?php echo \$product['product_id'];?>').countdown('pause');
                                                    });
                                                </script>
                                            </div>
                                        </div>

                                        <div class=\"product-layout col-xs-12\">
                                            <div class=\"product-thumb transition\">
                                                <div class=\"image\"><a href=\"indexcae8.html?route=product/product&amp;product_id=41\"><img src=\"";
        // line 1608
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-05-315x221.jpg"), "html", null, true);
        echo "\" alt=\"iMac\" title=\"iMac\" class=\"img-responsive center-block\" /></a>



                                                    <div id=\"Countdown41\" class=\"box-timer\"></div>       </div>


                                                <div class=\"caption text-center\">
                                                    <h4><a href=\"indexcae8.html?route=product/product&amp;product_id=41\">iMac</a></h4>
                                                    <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                    </div>

                                                    <p class=\"price\">  <span class=\"price-new\">\$62.00</span> <span class=\"price-old\">\$122.00</span>            </p>

                                                    <div class=\"button-group\">
                                                        <button class=\"acart\" type=\"button\" onclick=\"cart.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                        <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                    </div>


                                                </div>




                                                <script type=\"text/javascript\">
                                                    \$(document).ready(function () {
                                                        \$('#Countdown41').countdown({
                                                            until: new Date(2021, 09-1, 22, 00, 00, 00),
                                                            labels: ['Years', 'Months', 'Weeks', 'Days', 'Hrs', 'Mins', 'Secs'],
                                                            labels1: ['Year', 'Month', 'Week', 'Day', 'Hr', 'Min', 'Sec'],
                                                    });
                                                        //\$('#Countdown<?php echo \$product['product_id'];?>').countdown('pause');
                                                    });
                                                </script>
                                            </div>
                                        </div>

                                        <div class=\"product-layout col-xs-12\">
                                            <div class=\"product-thumb transition\">
                                                <div class=\"image\"><a href=\"index6320.html?route=product/product&amp;product_id=28\"><img src=\"";
        // line 1665
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-04-315x221.jpg"), "html", null, true);
        echo "\" alt=\"HTC Touch HD\" title=\"HTC Touch HD\" class=\"img-responsive center-block\" /></a>



                                                    <div id=\"Countdown28\" class=\"box-timer\"></div>       </div>


                                                <div class=\"caption text-center\">
                                                    <h4><a href=\"index6320.html?route=product/product&amp;product_id=28\">HTC Touch HD</a></h4>
                                                    <div class=\"rating\">          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                    </div>


                                                    <p class=\"price\">           \$122.00
                                                    </p>

                                                    <div class=\"button-group\">
                                                        <button class=\"acart\" type=\"button\" onclick=\"cart.add('28');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('28');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('28');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                        <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                    </div>


                                                </div>




                                                <script type=\"text/javascript\">
                                                    \$(document).ready(function () {
                                                        \$('#Countdown28').countdown({
                                                            until: new Date(2021, 06-1, 16, 00, 00, 00),
                                                            labels: ['Years', 'Months', 'Weeks', 'Days', 'Hrs', 'Mins', 'Secs'],
                                                            labels1: ['Year', 'Month', 'Week', 'Day', 'Hr', 'Min', 'Sec'],
                                                        });
                                                        //\$('#Countdown<?php echo \$product['product_id'];?>').countdown('pause');
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type=\"text/javascript\">
                    \$(document).ready(function() {
                        \$(\"#count\").owlCarousel({
                            itemsCustom : [
                                [0, 1],
                                [375, 2],
                                [600, 3],
                                [768, 3],
                                [992, 3],
                                [1200, 4]
                            ],
                            // autoPlay: 1000,
                            navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
                            navigation : true,
                            pagination:false
                        });
                    });
                </script>
                <div class=\"carouselbg\">
                    <div class=\"container\">
                        <div class=\"logo-slider row\">
                            <div class=\"col-xs-12\">
                                <div id=\"carousel0\" class=\"owl-carousel owl-theme\">


                                    <div class=\"text-center\"><img src=\"";
        // line 1741
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/brand/4-225x150.jpg"), "html", null, true);
        echo "\" alt=\"Starbucks\" class=\"center-block img-responsive\" /></div>


                                    <div class=\"text-center\"><img src=\"";
        // line 1744
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/brand/3-225x150.jpg"), "html", null, true);
        echo "\" alt=\"Disney\" class=\"center-block img-responsive\" /></div>


                                    <div class=\"text-center\"><img src=\"";
        // line 1747
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/brand/2-225x150.jpg"), "html", null, true);
        echo "\" alt=\"Dell\" class=\"center-block img-responsive\" /></div>


                                    <div class=\"text-center\"><img src=\"";
        // line 1750
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/brand/1-225x150.jpg"), "html", null, true);
        echo "\" alt=\"Harley Davidson\" class=\"center-block img-responsive\" /></div>


                                    <div class=\"text-center\"><img src=\"";
        // line 1753
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/brand/6-225x150.jpg"), "html", null, true);
        echo "\" alt=\"Canon\" class=\"center-block img-responsive\" /></div>


                                    <div class=\"text-center\"><img src=\"";
        // line 1756
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/brand/5-225x150.jpg"), "html", null, true);
        echo "\" alt=\"Burger King\" class=\"center-block img-responsive\" /></div>


                                    <div class=\"text-center\"><img src=\"";
        // line 1759
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/brand/4-225x150.jpg"), "html", null, true);
        echo "\" alt=\"Coca Cola\" class=\"center-block img-responsive\" /></div>


                                    <div class=\"text-center\"><img src=\"";
        // line 1762
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/brand/3-225x150.jpg"), "html", null, true);
        echo "\" alt=\"Sony\" class=\"center-block img-responsive\" /></div>


                                    <div class=\"text-center\"><img src=\"";
        // line 1765
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/brand/2-225x150.jpg"), "html", null, true);
        echo "\" alt=\"RedBull\" class=\"center-block img-responsive\" /></div>


                                    <div class=\"text-center\"><img src=\"";
        // line 1768
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/brand/1-225x150.jpg"), "html", null, true);
        echo "\" alt=\"NFL\" class=\"center-block img-responsive\" /></div>



                                </div>
                            </div>
                        </div>
                    </div>


                    <script type=\"text/javascript\">
                        \$(document).ready(function() {
                            \$(\"#carousel0\").owlCarousel({
                                itemsCustom : [
                                    [0, 2],
                                    [600, 4],
                                    [768, 5],
                                    [992, 5],
                                    [1200, 7]
                                ],
                                autoPlay: 2000,
                                loop: true,
                                navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
                                navigation : false,
                                pagination:false
                            });
                        });
                    </script>
                    <div class=\"container pro-nepr\">
                        <div class=\"box blog_inspire \">
                            <div class=\"cmn-title wow bounce\">
                                <h3 class=\"heading\">Latest Blog<hr></h3>
                            </div>
                            <!-- <div class=\"blog-heading\">Latest Blog</div> -->
                            <div class=\"box-content row thummargin\">
                                <div class=\"box-product\">
                                    <div id=\"blog\" class=\"owl-carousel owl-theme\">
                                        <div class=\"product-block col-xs-12\">
                                            <div class=\"blogb\">
                                                <div class=\"blog-left\">
                                                    <div class=\"inspire-blog-image\">
                                                        <img src=\"";
        // line 1809
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/blog/blog-01-893x502.jpg"), "html", null, true);
        echo "\" alt=\"Latest Blog\" title=\"Latest Blog\" class=\"img-responsive\" />
                                                        <div class=\"blog-post-image-hover\"> </div>
                                                        <p class=\"inspire_post_hover\">
                                                            <a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"";
        // line 1812
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/blog/blog-01-893x502.jpg"), "html", null, true);
        echo "\" data-lightbox=\"example-set\">jjj</a>
                                                            <a class=\"icon readmore_link\" title=\"Click to view Read More \" href=\"indexed5d.html?route=information/blogger&amp;blogger_id=5\">jjj</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class=\"blog-right text-center\">
                                                    <div class=\"inspire-post-author\">
                                                        <span class=\"write-comment\"> <a href=\"indexed5d.html?route=information/blogger&amp;blogger_id=5\">0 Comments</a> </span>
                                                        <span>|</span><span class=\"date-time\">17/11/2019</span>
                                                    </div>
                                                    <h4><a href=\"indexed5d.html?route=information/blogger&amp;blogger_id=5\">Lorem ipsum dolor sit amet</a> </h4>

                                                    <div class=\"blog-desc\">Vivamus condimentum bibendum mauris. Lorem ipsum d...</div>
                                                    <a class=\"read more\" href=\"indexed5d.html?route=information/blogger&amp;blogger_id=5\">Read More</a>

                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"product-block col-xs-12\">
                                            <div class=\"blogb\">
                                                <div class=\"blog-left\">
                                                    <div class=\"inspire-blog-image\">
                                                        <img src=\"";
        // line 1834
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/blog/blog-04-893x502.jpg"), "html", null, true);
        echo "\" alt=\"Latest Blog\" title=\"Latest Blog\" class=\"img-responsive\" />
                                                        <div class=\"blog-post-image-hover\"> </div>
                                                        <p class=\"inspire_post_hover\">
                                                            <a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"";
        // line 1837
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/blog/blog-04-893x502.jpg"), "html", null, true);
        echo "\" data-lightbox=\"example-set\">jjj</a>
                                                            <a class=\"icon readmore_link\" title=\"Click to view Read More \" href=\"index4b1d.html?route=information/blogger&amp;blogger_id=4\">jjj</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class=\"blog-right text-center\">
                                                    <div class=\"inspire-post-author\">
                                                        <span class=\"write-comment\"> <a href=\"index4b1d.html?route=information/blogger&amp;blogger_id=4\">0 Comments</a> </span>
                                                        <span>|</span><span class=\"date-time\">17/11/2019</span>
                                                    </div>
                                                    <h4><a href=\"index4b1d.html?route=information/blogger&amp;blogger_id=4\">tincidunt gravida orci tincidunt</a> </h4>

                                                    <div class=\"blog-desc\">Vivamus condimentum bibendum mauris. Lorem ipsum d...</div>
                                                    <a class=\"read more\" href=\"index4b1d.html?route=information/blogger&amp;blogger_id=4\">Read More</a>

                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"product-block col-xs-12\">
                                            <div class=\"blogb\">
                                                <div class=\"blog-left\">
                                                    <div class=\"inspire-blog-image\">
                                                        <img src=\"";
        // line 1859
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/blog/blog-03-893x502.jpg"), "html", null, true);
        echo "\" alt=\"Latest Blog\" title=\"Latest Blog\" class=\"img-responsive\" />
                                                        <div class=\"blog-post-image-hover\"> </div>
                                                        <p class=\"inspire_post_hover\">
                                                            <a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"";
        // line 1862
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/blog/blog-03-893x502.jpg"), "html", null, true);
        echo "\" data-lightbox=\"example-set\">jjj</a>
                                                            <a class=\"icon readmore_link\" title=\"Click to view Read More \" href=\"indexaa69.html?route=information/blogger&amp;blogger_id=3\">jjj</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class=\"blog-right text-center\">
                                                    <div class=\"inspire-post-author\">
                                                        <span class=\"write-comment\"> <a href=\"indexaa69.html?route=information/blogger&amp;blogger_id=3\">0 Comments</a> </span>
                                                        <span>|</span><span class=\"date-time\">17/11/2019</span>
                                                    </div>
                                                    <h4><a href=\"indexaa69.html?route=information/blogger&amp;blogger_id=3\">bibendum mauris</a> </h4>

                                                    <div class=\"blog-desc\">Vivamus condimentum bibendum mauris. Lorem ipsum d...</div>
                                                    <a class=\"read more\" href=\"indexaa69.html?route=information/blogger&amp;blogger_id=3\">Read More</a>

                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"product-block col-xs-12\">
                                            <div class=\"blogb\">
                                                <div class=\"blog-left\">
                                                    <div class=\"inspire-blog-image\">
                                                        <img src=\"";
        // line 1884
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/blog/blog-04-893x502.jpg"), "html", null, true);
        echo "\" alt=\"Latest Blog\" title=\"Latest Blog\" class=\"img-responsive\" />
                                                        <div class=\"blog-post-image-hover\"> </div>
                                                        <p class=\"inspire_post_hover\">
                                                            <a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"";
        // line 1887
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/blog/blog-04-893x502.jpg"), "html", null, true);
        echo "\" data-lightbox=\"example-set\">jjj</a>
                                                            <a class=\"icon readmore_link\" title=\"Click to view Read More \" href=\"index5463.html?route=information/blogger&amp;blogger_id=2\">jjj</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class=\"blog-right text-center\">
                                                    <div class=\"inspire-post-author\">
                                                        <span class=\"write-comment\"> <a href=\"index5463.html?route=information/blogger&amp;blogger_id=2\">0 Comments</a> </span>
                                                        <span>|</span><span class=\"date-time\">17/11/2019</span>
                                                    </div>
                                                    <h4><a href=\"index5463.html?route=information/blogger&amp;blogger_id=2\">lectus quis tortor gravida</a> </h4>

                                                    <div class=\"blog-desc\">Vivamus condimentum bibendum mauris. Lorem ipsum d...</div>
                                                    <a class=\"read more\" href=\"index5463.html?route=information/blogger&amp;blogger_id=2\">Read More</a>

                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"product-block col-xs-12\">
                                            <div class=\"blogb\">
                                                <div class=\"blog-left\">
                                                    <div class=\"inspire-blog-image\">
                                                        <img src=\"";
        // line 1909
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/blog/blog-02-893x502.jpg"), "html", null, true);
        echo "\" alt=\"Latest Blog\" title=\"Latest Blog\" class=\"img-responsive\" />
                                                        <div class=\"blog-post-image-hover\"> </div>
                                                        <p class=\"inspire_post_hover\">
                                                            <a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"";
        // line 1912
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/blog/blog-02-893x502.jpg"), "html", null, true);
        echo "\" data-lightbox=\"example-set\">jjj</a>
                                                            <a class=\"icon readmore_link\" title=\"Click to view Read More \" href=\"index5a4b.html?route=information/blogger&amp;blogger_id=1\">jjj</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class=\"blog-right text-center\">
                                                    <div class=\"inspire-post-author\">
                                                        <span class=\"write-comment\"> <a href=\"index5a4b.html?route=information/blogger&amp;blogger_id=1\">0 Comments</a> </span>
                                                        <span>|</span><span class=\"date-time\">17/11/2019</span>
                                                    </div>
                                                    <h4><a href=\"index5a4b.html?route=information/blogger&amp;blogger_id=1\">Vivamus condimentum bibendum mauris</a> </h4>

                                                    <div class=\"blog-desc\">Vivamus condimentum bibendum mauris. Lorem ipsum d...</div>
                                                    <a class=\"read more\" href=\"index5a4b.html?route=information/blogger&amp;blogger_id=1\">Read More</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script type=\"text/javascript\">
                        \$(document).ready(function() {
                            \$(\"#blog\").owlCarousel({
                                itemsCustom : [
                                    [0, 1],
                                    [600, 2],
                                    [768, 2],
                                    [992, 3],
                                    [1200, 3]
                                ],
                                // autoPlay: 1000,
                                navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
                                navigation : true,
                                pagination:false
                            });
                        });
                    </script>

                    <div class=\"pro-nepr container\">
                        <h3 class=\"heading\">Specials<hr></h3>
                        <div class=\"row thummargin\">
                            <div id=\"special\" class=\"owl-theme owl-carousel\">
                                <div class=\"product-layout col-xs-12\">
                                    <div class=\"product-thumb transition\">
                                        <div class=\"image\"><a href=\"indexbb02.html?route=product/product&amp;product_id=42\"><img src=\"";
        // line 1960
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-01-315x220.jpg"), "html", null, true);
        echo "\" alt=\"Apple Cinema 30&quot;\" title=\"Apple Cinema 30&quot;\" class=\"img-responsive center-block\" /></a>


                                            <span class=\"salepro\">sale</span>

                                        </div>
                                        <div class=\"caption text-center\">
                                            <h4><a href=\"indexbb02.html?route=product/product&amp;product_id=42\">Apple Cinema 30&quot;</a></h4>
                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                            </div>                <p class=\"price\">  <span class=\"price-new\">\$110.00</span> <span class=\"price-old\">\$122.00</span>            </p>

                                            <p class=\"sale-tag sale\">Save 10%</p>
                                            <div class=\"button-group\">
                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('42');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('42');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('42');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class=\"product-layout col-xs-12\">
                                    <div class=\"product-thumb transition\">
                                        <div class=\"image\"><a href=\"indexf073.html?route=product/product&amp;product_id=30\"><img src=\"";
        // line 1999
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-02-315x220.jpg"), "html", null, true);
        echo "\" alt=\"Canon EOS 5D\" title=\"Canon EOS 5D\" class=\"img-responsive center-block\" /></a>


                                            <span class=\"salepro\">sale</span>

                                        </div>
                                        <div class=\"caption text-center\">
                                            <h4><a href=\"indexf073.html?route=product/product&amp;product_id=30\">Canon EOS 5D</a></h4>
                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                            </div>                <p class=\"price\">  <span class=\"price-new\">\$98.00</span> <span class=\"price-old\">\$122.00</span>            </p>

                                            <p class=\"sale-tag new\">Save 20%</p>
                                            <div class=\"button-group\">
                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('30');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('30');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('30');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class=\"product-layout col-xs-12\">
                                    <div class=\"product-thumb transition\">
                                        <div class=\"image\"><a href=\"indexd21c.html?route=product/product&amp;product_id=47\"><img src=\"";
        // line 2038
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-03-315x220.jpg"), "html", null, true);
        echo "\" alt=\"HP LP3065\" title=\"HP LP3065\" class=\"img-responsive center-block\" /></a>



                                        </div>
                                        <div class=\"caption text-center\">
                                            <h4><a href=\"indexd21c.html?route=product/product&amp;product_id=47\">HP LP3065</a></h4>
                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                            </div>                <p class=\"price\">           \$122.00
                                            </p>

                                            <div class=\"button-group\">
                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class=\"product-layout col-xs-12\">
                                    <div class=\"product-thumb transition\">
                                        <div class=\"image\"><a href=\"index6320.html?route=product/product&amp;product_id=28\"><img src=\"";
        // line 2076
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-04-315x220.jpg"), "html", null, true);
        echo "\" alt=\"HTC Touch HD\" title=\"HTC Touch HD\" class=\"img-responsive center-block\" /></a>



                                        </div>
                                        <div class=\"caption text-center\">
                                            <h4><a href=\"index6320.html?route=product/product&amp;product_id=28\">HTC Touch HD</a></h4>
                                            <div class=\"rating\">          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                            </div>
                                            <p class=\"price\">           \$122.00
                                            </p>

                                            <div class=\"button-group\">
                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('28');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('28');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('28');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class=\"product-layout col-xs-12\">
                                    <div class=\"product-thumb transition\">
                                        <div class=\"image\"><a href=\"indexcae8.html?route=product/product&amp;product_id=41\"><img src=\"";
        // line 2104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-05-315x220.jpg"), "html", null, true);
        echo "\" alt=\"iMac\" title=\"iMac\" class=\"img-responsive center-block\" /></a>


                                            <span class=\"salepro\">sale</span>

                                        </div>
                                        <div class=\"caption text-center\">
                                            <h4><a href=\"indexcae8.html?route=product/product&amp;product_id=41\">iMac</a></h4>
                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                            </div>                <p class=\"price\">  <span class=\"price-new\">\$62.00</span> <span class=\"price-old\">\$122.00</span>            </p>

                                            <p class=\"sale-tag new\">Save 50%</p>
                                            <div class=\"button-group\">
                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div></div>
                    </div>

                    <script type=\"text/javascript\">
                        \$(document).ready(function() {
                            \$(\"#special\").owlCarousel({
                                itemsCustom : [
                                    [0, 2],
                                    [375, 2],
                                    [600, 3],
                                    [768, 3],
                                    [992, 4],
                                    [1200, 4],
                                    [1410, 4]
                                ],
                                // autoPlay: 1000,
                                navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
                                navigation : true,
                                pagination:false
                            });
                        });
                    </script>
                    <div>  <div class=\"service-bg\">
                            <div class=\"container\">
                                <div class=\"all-ser text-center\">
                                    <div class=\"ser-block\">
                                        <div class=\"d-inline-block\">
                                            <i class=\"fa fa-smile-o\"></i>
                                        </div>
                                        <div class=\"ser-co d-inline-block text-left\">
                                            <h5>100% SETISFACTION</h5>
                                            <h6>If you are unable.</h6>
                                        </div>
                                    </div>
                                    <div class=\"ser-block\">
                                        <div class=\"d-inline-block\">
                                            <i class=\"fa fa-ship\"></i>
                                        </div>
                                        <div class=\"ser-co d-inline-block text-left\">
                                            <h5>FAST FREE SHIPMENT</h5>
                                            <h6>Load any Computers.</h6>
                                        </div>
                                    </div>
                                    <div class=\"ser-block\">
                                        <div class=\"d-inline-block\">
                                            <i class=\"fa fa-retweet\"></i>
                                        </div>
                                        <div class=\"ser-co d-inline-block text-left\">
                                            <h5>14 DAYS MONEY BACK</h5>
                                            <h6>If you are unable.</h6>
                                        </div>
                                    </div>
                                    <div class=\"ser-block\">
                                        <div class=\"d-inline-block\">
                                            <i class=\"fa fa-credit-card\"></i>
                                        </div>
                                        <div class=\"ser-co d-inline-block text-left\">
                                            <h5>PAYMENT METHOD</h5>
                                            <h6>Secure payment</h6>
                                        </div>
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Template/Template/Template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2456 => 2104,  2425 => 2076,  2384 => 2038,  2342 => 1999,  2300 => 1960,  2249 => 1912,  2243 => 1909,  2218 => 1887,  2212 => 1884,  2187 => 1862,  2181 => 1859,  2156 => 1837,  2150 => 1834,  2125 => 1812,  2119 => 1809,  2075 => 1768,  2069 => 1765,  2063 => 1762,  2057 => 1759,  2051 => 1756,  2045 => 1753,  2039 => 1750,  2033 => 1747,  2027 => 1744,  2021 => 1741,  1942 => 1665,  1882 => 1608,  1821 => 1550,  1761 => 1493,  1701 => 1436,  1653 => 1393,  1583 => 1326,  1578 => 1324,  1537 => 1286,  1532 => 1284,  1489 => 1244,  1484 => 1242,  1444 => 1205,  1439 => 1203,  1397 => 1164,  1392 => 1162,  1352 => 1125,  1347 => 1123,  1316 => 1095,  1311 => 1093,  1271 => 1056,  1266 => 1054,  1224 => 1015,  1219 => 1013,  1190 => 987,  1185 => 985,  1106 => 909,  1100 => 906,  1060 => 869,  1054 => 866,  1012 => 827,  1006 => 824,  966 => 787,  960 => 784,  918 => 745,  912 => 742,  872 => 705,  866 => 702,  824 => 663,  818 => 660,  778 => 623,  772 => 620,  689 => 540,  684 => 538,  635 => 492,  630 => 490,  579 => 442,  574 => 440,  525 => 394,  520 => 392,  469 => 344,  464 => 342,  413 => 294,  408 => 292,  357 => 244,  352 => 242,  298 => 191,  293 => 189,  241 => 140,  236 => 138,  188 => 93,  183 => 91,  149 => 60,  139 => 53,  129 => 46,  99 => 19,  95 => 18,  79 => 4,  70 => 3,  52 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block title %}Your Store{% endblock  %}
{% block content %}

    <div id=\"page-preloader\" class=\"visible\">
        <div class=\"preloader\">
            <div id=\"loading-center-absolute\">
                <div class=\"object\" id=\"object_one\"></div>
            </div>
        </div>
    </div>
    <div id=\"common-home\">
    <div class=\"bg-color-b\">
        <div class=\"row commonrow\">
            <div id=\"content\" class=\"col-sm-12\"><div class=\"slide-padding\">
                    <div class=\"homeslide\">
                        <div id=\"slideshow0\" class=\"owl-carousel owl-theme\">
                            <div class=\"text-center\"><a href=\"#\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/slider/slide-03-1920x700.jpg')}}\" alt=\"slider\" class=\"img-responsive\" /></a></div>
                            <div class=\"text-center\"><a href=\"#\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/slider/slide-01-1920x700.jpg')}}\" alt=\"MacBookAir\" class=\"img-responsive\" /></a></div>
                        </div>
                    </div>
                </div>

                <script type=\"text/javascript\">
                    \$(document).ready(function() {
                        \$(\"#slideshow0\").owlCarousel({
                            itemsCustom : [
                                [0, 1]
                            ],
                            autoPlay: 2500,
                            animateIn: 'fadeIn',
                            animateOut: 'fadeOut',
                            loop: true,
                            navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
                            navigation : true,
                            pagination:false
                        });
                    });
                </script>

                <div class=\"cbanner pro-nepr\">
                    <div class=\"row\">
                        <div class=\"col-xs-4\">
                            <div class=\"banner-e\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/Allbanner/640x300-3-640x300.jpg')}}\" alt=\"banner\" class=\"img-responsive center-block\" />
                                </a>
                            </div>
                        </div>
                        <div class=\"col-xs-4\">
                            <div class=\"banner-e\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/Allbanner/640x300-02-640x300.jpg')}}\" alt=\"banner\" class=\"img-responsive center-block\" />
                                </a>
                            </div>
                        </div>
                        <div class=\"col-xs-4\">
                            <div class=\"banner-e\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/Allbanner/640x300-640x300.jpg')}}\" alt=\"banner\" class=\"img-responsive center-block\" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class=\"container\">
                    <div class=\"pro-bg\">
                        <div class=\"tab-pro text-center\">
                            <h2>Trending products<hr></h2>
                            <ul class=\"nav nav-tabs pro-tab\">
                                <li class=\"active\"><a href=\"#featurep\" data-toggle=\"tab\">Featured</a></li>
                                <li class=\"tabl\"><a href=\"#bestp\" data-toggle=\"tab\">BestSeller</a></li>
                                <li><a href=\"#newp\" data-toggle=\"tab\">New</a></li>

                            </ul>
                        </div>
                        <div class=\"tab-content pro-nepr\">

                            <div class=\"tab-pane active\" id=\"featurep\">

                                <div class=\"pro-nepr\">
                                    <div class=\"row thummargin\">
                                        <div id=\"feature\" class=\"owl-theme owl-carousel\">

                                            <div class=\"multi-row\">
                                                <div class=\"product-layout col-xs-12\">
                                                    <div class=\"product-thumb transition\">
                                                        <div class=\"image\"><a href=\"index9144.html?route=product/product&amp;product_id=40\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-06-1000x700.jpg')}}\" alt=\"iPhone\" title=\"iPhone\" class=\"img-responsive center-block\" /></a>

                                                            <a href=\"index9144.html?route=product/product&amp;product_id=40\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-13-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>








                                                        </div>
                                                        <div class=\"caption text-center\">
                                                            <h4><a href=\"index9144.html?route=product/product&amp;product_id=40\">iPhone</a></h4>
                                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            </div>                      <p class=\"price\">           \$123.20
                                                            </p>

                                                            <div class=\"button-group\">
                                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('40');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('40');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('40');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class=\"product-layout col-xs-12\">
                                                    <div class=\"product-thumb transition\">
                                                        <div class=\"image\"><a href=\"indexf073.html?route=product/product&amp;product_id=30\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-02-1000x700.jpg')}}\" alt=\"Canon EOS 5D\" title=\"Canon EOS 5D\" class=\"img-responsive center-block\" /></a>

                                                            <a href=\"indexf073.html?route=product/product&amp;product_id=30\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-05-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>








                                                            <span class=\"salepro\">sale</span>

                                                        </div>
                                                        <div class=\"caption text-center\">
                                                            <h4><a href=\"indexf073.html?route=product/product&amp;product_id=30\">Canon EOS 5D</a></h4>
                                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            </div>                      <p class=\"price\">  <span class=\"price-new\">\$98.00</span> <span class=\"price-old\">\$122.00</span>            </p>

                                                            <p class=\"sale-tag hot\">Save 20%</p>
                                                            <div class=\"button-group\">
                                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('30');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('30');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('30');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"multi-row\">
                                                <div class=\"product-layout col-xs-12\">
                                                    <div class=\"product-thumb transition\">
                                                        <div class=\"image\"><a href=\"indexbb02.html?route=product/product&amp;product_id=42\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-01-1000x700.jpg')}}\" alt=\"Apple Cinema 30&quot;\" title=\"Apple Cinema 30&quot;\" class=\"img-responsive center-block\" /></a>

                                                            <a href=\"indexbb02.html?route=product/product&amp;product_id=42\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-11-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>












                                                            <span class=\"salepro\">sale</span>

                                                        </div>
                                                        <div class=\"caption text-center\">
                                                            <h4><a href=\"indexbb02.html?route=product/product&amp;product_id=42\">Apple Cinema 30&quot;</a></h4>
                                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            </div>                      <p class=\"price\">  <span class=\"price-new\">\$110.00</span> <span class=\"price-old\">\$122.00</span>            </p>

                                                            <p class=\"sale-tag sale\">Save 10%</p>
                                                            <div class=\"button-group\">
                                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('42');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('42');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('42');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class=\"product-layout col-xs-12\">
                                                    <div class=\"product-thumb transition\">
                                                        <div class=\"image\"><a href=\"indexd21c.html?route=product/product&amp;product_id=47\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-03-1000x700.jpg')}}\" alt=\"HP LP3065\" title=\"HP LP3065\" class=\"img-responsive center-block\" /></a>

                                                            <a href=\"indexd21c.html?route=product/product&amp;product_id=47\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-09-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>









                                                        </div>
                                                        <div class=\"caption text-center\">
                                                            <h4><a href=\"indexd21c.html?route=product/product&amp;product_id=47\">HP LP3065</a></h4>
                                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            </div>                      <p class=\"price\">           \$122.00
                                                            </p>

                                                            <div class=\"button-group\">
                                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"multi-row\">
                                                <div class=\"product-layout col-xs-12\">
                                                    <div class=\"product-thumb transition\">
                                                        <div class=\"image\"><a href=\"indexcae8.html?route=product/product&amp;product_id=41\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-05-1000x700.jpg')}}\" alt=\"iMac\" title=\"iMac\" class=\"img-responsive center-block\" /></a>

                                                            <a href=\"indexcae8.html?route=product/product&amp;product_id=41\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-15-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>









                                                            <span class=\"salepro\">sale</span>

                                                        </div>
                                                        <div class=\"caption text-center\">
                                                            <h4><a href=\"indexcae8.html?route=product/product&amp;product_id=41\">iMac</a></h4>
                                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            </div>                      <p class=\"price\">  <span class=\"price-new\">\$62.00</span> <span class=\"price-old\">\$122.00</span>            </p>

                                                            <p class=\"sale-tag hot\">Save 50%</p>
                                                            <div class=\"button-group\">
                                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class=\"product-layout col-xs-12\">
                                                    <div class=\"product-thumb transition\">
                                                        <div class=\"image\"><a href=\"indexb77e.html?route=product/product&amp;product_id=48\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-07-1000x700.jpg')}}\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive center-block\" /></a>

                                                            <a href=\"indexb77e.html?route=product/product&amp;product_id=48\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-16-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>









                                                        </div>
                                                        <div class=\"caption text-center\">
                                                            <h4><a href=\"indexb77e.html?route=product/product&amp;product_id=48\">iPod Classic</a></h4>
                                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            </div>                      <p class=\"price\">           \$122.00
                                                            </p>

                                                            <div class=\"button-group\">
                                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('48');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('48');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('48');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"multi-row\">
                                                <div class=\"product-layout col-xs-12\">
                                                    <div class=\"product-thumb transition\">
                                                        <div class=\"image\"><a href=\"indexbfcf.html?route=product/product&amp;product_id=31\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-14-1000x700.jpg')}}\" alt=\"Nikon D300\" title=\"Nikon D300\" class=\"img-responsive center-block\" /></a>

                                                            <a href=\"indexbfcf.html?route=product/product&amp;product_id=31\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-10-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>









                                                        </div>
                                                        <div class=\"caption text-center\">
                                                            <h4><a href=\"indexbfcf.html?route=product/product&amp;product_id=31\">Nikon D300</a></h4>
                                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            </div>                      <p class=\"price\">           \$98.00
                                                            </p>

                                                            <div class=\"button-group\">
                                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('31');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('31');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('31');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class=\"product-layout col-xs-12\">
                                                    <div class=\"product-thumb transition\">
                                                        <div class=\"image\"><a href=\"indexb8ca.html?route=product/product&amp;product_id=43\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-11-1000x700.jpg')}}\" alt=\"MacBook\" title=\"MacBook\" class=\"img-responsive center-block\" /></a>

                                                            <a href=\"indexb8ca.html?route=product/product&amp;product_id=43\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-03-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>









                                                        </div>
                                                        <div class=\"caption text-center\">
                                                            <h4><a href=\"indexb8ca.html?route=product/product&amp;product_id=43\">MacBook</a></h4>
                                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            </div>                      <p class=\"price\">           \$602.00
                                                            </p>

                                                            <div class=\"button-group\">
                                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('43');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('43');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('43');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"multi-row\">
                                                <div class=\"product-layout col-xs-12\">
                                                    <div class=\"product-thumb transition\">
                                                        <div class=\"image\"><a href=\"indexd94c.html?route=product/product&amp;product_id=44\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-12-1000x700.jpg')}}\" alt=\"MacBook Air\" title=\"MacBook Air\" class=\"img-responsive center-block\" /></a>

                                                            <a href=\"indexd94c.html?route=product/product&amp;product_id=44\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-10-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>









                                                        </div>
                                                        <div class=\"caption text-center\">
                                                            <h4><a href=\"indexd94c.html?route=product/product&amp;product_id=44\">MacBook Air</a></h4>
                                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            </div>                      <p class=\"price\">           \$1,202.00
                                                            </p>

                                                            <div class=\"button-group\">
                                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('44');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('44');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('44');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class=\"product-layout col-xs-12\">
                                                    <div class=\"product-thumb transition\">
                                                        <div class=\"image\"><a href=\"index531d.html?route=product/product&amp;product_id=45\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-13-1000x700.jpg')}}\" alt=\"MacBook Pro\" title=\"MacBook Pro\" class=\"img-responsive center-block\" /></a>

                                                            <a href=\"index531d.html?route=product/product&amp;product_id=45\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-03-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>









                                                        </div>
                                                        <div class=\"caption text-center\">
                                                            <h4><a href=\"index531d.html?route=product/product&amp;product_id=45\">MacBook Pro</a></h4>
                                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            </div>                      <p class=\"price\">           \$2,000.00
                                                            </p>

                                                            <div class=\"button-group\">
                                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('45');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('45');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('45');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>



                                        </div>

                                    </div>
                                </div>
                            </div>

                            <script type=\"text/javascript\">
                                \$(document).ready(function() {
                                    \$(\"#feature\").owlCarousel({
                                        itemsCustom : [
                                            [0, 2],
                                            [375, 2],
                                            [600, 3],
                                            [768, 3],
                                            [992, 3],
                                            [1200, 4],
                                            [1410, 4]
                                        ],
                                        // autoPlay: 1000,
                                        navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
                                        navigation : true,
                                        pagination:false
                                    });
                                });
                            </script>
                            <div class=\"tab-pane\" id=\"bestp\">
                                <div class=\"row thummargin\">
                                    <div id=\"best\" class=\"owl-theme owl-carousel\">

                                        <div class=\"multi-row\">
                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\">
                                                        <a href=\"indexbfcf.html?route=product/product&amp;product_id=31\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-14-1000x700.jpg')}}\" alt=\"Nikon D300\" title=\"Nikon D300\" class=\"img-responsive\" /></a>

                                                        <a href=\"indexbfcf.html?route=product/product&amp;product_id=31\">
                                                            <img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-10-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"indexbfcf.html?route=product/product&amp;product_id=31\">Nikon D300</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">           \$98.00
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('31');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('31');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('31');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\">
                                                        <a href=\"indexd21c.html?route=product/product&amp;product_id=47\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-03-1000x700.jpg')}}\" alt=\"HP LP3065\" title=\"HP LP3065\" class=\"img-responsive\" /></a>

                                                        <a href=\"indexd21c.html?route=product/product&amp;product_id=47\">
                                                            <img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-09-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"indexd21c.html?route=product/product&amp;product_id=47\">HP LP3065</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">           \$122.00
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"multi-row\">
                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\">
                                                        <a href=\"indexb77e.html?route=product/product&amp;product_id=48\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-07-1000x700.jpg')}}\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\" /></a>

                                                        <a href=\"indexb77e.html?route=product/product&amp;product_id=48\">
                                                            <img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-16-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"indexb77e.html?route=product/product&amp;product_id=48\">iPod Classic</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">           \$122.00
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('48');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('48');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('48');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\">
                                                        <a href=\"indexb8ca.html?route=product/product&amp;product_id=43\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-11-1000x700.jpg')}}\" alt=\"MacBook\" title=\"MacBook\" class=\"img-responsive\" /></a>

                                                        <a href=\"indexb8ca.html?route=product/product&amp;product_id=43\">
                                                            <img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-03-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"indexb8ca.html?route=product/product&amp;product_id=43\">MacBook</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">           \$602.00
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('43');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('43');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('43');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"multi-row\">
                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\">
                                                        <a href=\"index531d.html?route=product/product&amp;product_id=45\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-13-1000x700.jpg')}}\" alt=\"MacBook Pro\" title=\"MacBook Pro\" class=\"img-responsive\" /></a>

                                                        <a href=\"index531d.html?route=product/product&amp;product_id=45\">
                                                            <img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-03-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"index531d.html?route=product/product&amp;product_id=45\">MacBook Pro</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">           \$2,000.00
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('45');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('45');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('45');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\">
                                                        <a href=\"indexd94c.html?route=product/product&amp;product_id=44\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-12-1000x700.jpg')}}\" alt=\"MacBook Air\" title=\"MacBook Air\" class=\"img-responsive\" /></a>

                                                        <a href=\"indexd94c.html?route=product/product&amp;product_id=44\">
                                                            <img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-10-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"indexd94c.html?route=product/product&amp;product_id=44\">MacBook Air</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">           \$1,202.00
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('44');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('44');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('44');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"multi-row\">
                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\">
                                                        <a href=\"index9144.html?route=product/product&amp;product_id=40\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-06-1000x700.jpg')}}\" alt=\"iPhone\" title=\"iPhone\" class=\"img-responsive\" /></a>

                                                        <a href=\"index9144.html?route=product/product&amp;product_id=40\">
                                                            <img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-13-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"index9144.html?route=product/product&amp;product_id=40\">iPhone</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">           \$123.20
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('40');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('40');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('40');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\">
                                                        <a href=\"indexcae8.html?route=product/product&amp;product_id=41\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-05-1000x700.jpg')}}\" alt=\"iMac\" title=\"iMac\" class=\"img-responsive\" /></a>

                                                        <a href=\"indexcae8.html?route=product/product&amp;product_id=41\">
                                                            <img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-15-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"indexcae8.html?route=product/product&amp;product_id=41\">iMac</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">  <span class=\"price-new\">\$62.00</span> <span class=\"price-old\">\$122.00</span>            </p>

                                                        <p class=\"sale-tag hot\">Save 50%</p>
                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>









                            <script type=\"text/javascript\">
                                \$(document).ready(function() {
                                    \$(\"#best\").owlCarousel({
                                        itemsCustom : [
                                            [0, 2],
                                            [375, 2],
                                            [600, 3],
                                            [768, 3],
                                            [992, 3],
                                            [1200, 4],
                                            [1410, 4]
                                        ],
                                        // autoPlay: 1000,
                                        navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
                                        navigation : true,
                                        pagination:false
                                    });
                                });
                            </script>

                            <div class=\"tab-pane\" id=\"newp\">
                                <div class=\"row thummargin\">
                                    <div id=\"latest\" class=\"owl-theme owl-carousel\">

                                        <div class=\"multi-row\">
                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\"><a href=\"index3d7a.html?route=product/product&amp;product_id=49\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-17-1000x700.jpg')}}\" alt=\"Samsung Galaxy Tab 10.1\" title=\"Samsung Galaxy Tab 10.1\" class=\"img-responsive center-block\" /></a>

                                                        <a href=\"index3d7a.html?route=product/product&amp;product_id=49\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-04-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>

                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"index3d7a.html?route=product/product&amp;product_id=49\">Samsung Galaxy Tab 10.1</a></h4>
                                                        <div class=\"rating\">          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                        </div>
                                                        <p class=\"price\">           \$241.99
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('49');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('49');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('49');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\"><a href=\"indexb77e.html?route=product/product&amp;product_id=48\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-07-1000x700.jpg')}}\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive center-block\" /></a>

                                                        <a href=\"indexb77e.html?route=product/product&amp;product_id=48\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-16-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>

                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"indexb77e.html?route=product/product&amp;product_id=48\">iPod Classic</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">           \$122.00
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('48');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('48');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('48');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"multi-row\">
                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\"><a href=\"indexd21c.html?route=product/product&amp;product_id=47\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-03-1000x700.jpg')}}\" alt=\"HP LP3065\" title=\"HP LP3065\" class=\"img-responsive center-block\" /></a>

                                                        <a href=\"indexd21c.html?route=product/product&amp;product_id=47\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-09-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>

                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"indexd21c.html?route=product/product&amp;product_id=47\">HP LP3065</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">           \$122.00
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\"><a href=\"index2ebe.html?route=product/product&amp;product_id=46\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-21-1000x700.jpg')}}\" alt=\"Sony VAIO\" title=\"Sony VAIO\" class=\"img-responsive center-block\" /></a>

                                                        <a href=\"index2ebe.html?route=product/product&amp;product_id=46\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-01-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>

                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"index2ebe.html?route=product/product&amp;product_id=46\">Sony VAIO</a></h4>
                                                        <div class=\"rating\">          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                        </div>
                                                        <p class=\"price\">           \$1,202.00
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('46');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('46');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('46');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"multi-row\">
                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\"><a href=\"index531d.html?route=product/product&amp;product_id=45\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-13-1000x700.jpg')}}\" alt=\"MacBook Pro\" title=\"MacBook Pro\" class=\"img-responsive center-block\" /></a>

                                                        <a href=\"index531d.html?route=product/product&amp;product_id=45\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-03-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>

                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"index531d.html?route=product/product&amp;product_id=45\">MacBook Pro</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">           \$2,000.00
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('45');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('45');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('45');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\"><a href=\"indexd94c.html?route=product/product&amp;product_id=44\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-12-1000x700.jpg')}}\" alt=\"MacBook Air\" title=\"MacBook Air\" class=\"img-responsive center-block\" /></a>

                                                        <a href=\"indexd94c.html?route=product/product&amp;product_id=44\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-10-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>

                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"indexd94c.html?route=product/product&amp;product_id=44\">MacBook Air</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">           \$1,202.00
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('44');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('44');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('44');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"multi-row\">
                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\"><a href=\"indexb8ca.html?route=product/product&amp;product_id=43\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-11-1000x700.jpg')}}\" alt=\"MacBook\" title=\"MacBook\" class=\"img-responsive center-block\" /></a>

                                                        <a href=\"indexb8ca.html?route=product/product&amp;product_id=43\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-03-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>

                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"indexb8ca.html?route=product/product&amp;product_id=43\">MacBook</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">           \$602.00
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('43');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('43');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('43');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\"><a href=\"indexbb02.html?route=product/product&amp;product_id=42\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-01-1000x700.jpg')}}\" alt=\"Apple Cinema 30&quot;\" title=\"Apple Cinema 30&quot;\" class=\"img-responsive center-block\" /></a>

                                                        <a href=\"indexbb02.html?route=product/product&amp;product_id=42\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-11-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>

                                                        <span class=\"salepro\">sale</span>
                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"indexbb02.html?route=product/product&amp;product_id=42\">Apple Cinema 30&quot;</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">  <span class=\"price-new\">\$110.00</span> <span class=\"price-old\">\$122.00</span>            </p>

                                                        <p class=\"sale-tag hot\">Save 10%</p>
                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('42');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('42');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('42');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"multi-row\">
                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\"><a href=\"indexcae8.html?route=product/product&amp;product_id=41\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-05-1000x700.jpg')}}\" alt=\"iMac\" title=\"iMac\" class=\"img-responsive center-block\" /></a>

                                                        <a href=\"indexcae8.html?route=product/product&amp;product_id=41\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-15-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>

                                                        <span class=\"salepro\">sale</span>
                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"indexcae8.html?route=product/product&amp;product_id=41\">iMac</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">  <span class=\"price-new\">\$62.00</span> <span class=\"price-old\">\$122.00</span>            </p>

                                                        <p class=\"sale-tag new\">Save 50%</p>
                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=\"product-layout col-xs-12\">
                                                <div class=\"product-thumb transition\">
                                                    <div class=\"image\"><a href=\"index9144.html?route=product/product&amp;product_id=40\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-06-1000x700.jpg')}}\" alt=\"iPhone\" title=\"iPhone\" class=\"img-responsive center-block\" /></a>

                                                        <a href=\"index9144.html?route=product/product&amp;product_id=40\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-13-1000x700.jpg')}}\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>

                                                    </div>
                                                    <div class=\"caption text-center\">
                                                        <h4><a href=\"index9144.html?route=product/product&amp;product_id=40\">iPhone</a></h4>
                                                        <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        </div>
                                                        <p class=\"price\">           \$123.20
                                                        </p>

                                                        <div class=\"button-group\">
                                                            <button class=\"acart\" type=\"button\" onclick=\"cart.add('40');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('40');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                            <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('40');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                            <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <script type=\"text/javascript\">
                    \$(document).ready(function() {
                        \$(\"#latest\").owlCarousel({
                            itemsCustom : [
                                [0, 2],
                                [375, 2],
                                [600, 3],
                                [768, 3],
                                [992, 3],
                                [1200, 4],
                                [1410, 4]
                            ],
                            // autoPlay: 1000,
                            navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
                            navigation : true,
                            pagination:false
                        });
                    });
                </script>
                <div>  <div id=\"offerbanner\" class=\"clearfix\">
                        <div class=\"parallax\" data-source-url=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/catalog/parallax.jpg')}}\" style=\"background-image: url({{ asset('front/templatetasarim.com/opencart/Bicycle/image/catalog/parallax.jpg')}});\">
                            <div class=\"container\">
                                <div class=\"parallax-list pull-right text-center\">
                                    <div class=\"offer-head\">Save To 50% Off On First order!</div>
                                    <div class=\"offer-subhead\">Special Offer</div>
                                    <div class=\"offer-info\">Click &amp; Collect First Delivery Free over</div>
                                    <a class=\"btn btn-primary\" href=\"#\">SHOP NOW</a>
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



                <div class=\"dealbg\">
                    <div class=\"pro-bg pro-nepr container\">
                        <div class=\"\">
                            <h2 class=\"heading\">Deals of the day<hr></h2>
                            <div class=\"count-pro\">
                                <div class=\"row thummargin\">
                                    <div id=\"count\" class=\"owl-theme owl-carousel\">

                                        <div class=\"product-layout col-xs-12\">
                                            <div class=\"product-thumb transition\">
                                                <div class=\"image\"><a href=\"indexbb02.html?route=product/product&amp;product_id=42\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-01-315x221.jpg')}}\" alt=\"Apple Cinema 30&quot;\" title=\"Apple Cinema 30&quot;\" class=\"img-responsive center-block\" /></a>



                                                    <div id=\"Countdown42\" class=\"box-timer\"></div>       </div>


                                                <div class=\"caption text-center\">
                                                    <h4><a href=\"indexbb02.html?route=product/product&amp;product_id=42\">Apple Cinema 30&quot;</a></h4>
                                                    <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                    </div>

                                                    <p class=\"price\">  <span class=\"price-new\">\$110.00</span> <span class=\"price-old\">\$122.00</span>            </p>

                                                    <div class=\"button-group\">
                                                        <button class=\"acart\" type=\"button\" onclick=\"cart.add('42');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('42');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('42');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                        <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                    </div>


                                                </div>




                                                <script type=\"text/javascript\">
                                                    \$(document).ready(function () {
                                                        \$('#Countdown42').countdown({
                                                            until: new Date(2021, 10-1, 13, 00, 00, 00),
                                                            labels: ['Years', 'Months', 'Weeks', 'Days', 'Hrs', 'Mins', 'Secs'],
                                                            labels1: ['Year', 'Month', 'Week', 'Day', 'Hr', 'Min', 'Sec'],
                                                        });
                                                        //\$('#Countdown<?php echo \$product['product_id'];?>').countdown('pause');
                                                    });
                                                </script>
                                            </div>
                                        </div>

                                        <div class=\"product-layout col-xs-12\">
                                            <div class=\"product-thumb transition\">
                                                <div class=\"image\"><a href=\"indexf073.html?route=product/product&amp;product_id=30\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-02-315x221.jpg')}}\" alt=\"Canon EOS 5D\" title=\"Canon EOS 5D\" class=\"img-responsive center-block\" /></a>



                                                    <div id=\"Countdown30\" class=\"box-timer\"></div>       </div>


                                                <div class=\"caption text-center\">
                                                    <h4><a href=\"indexf073.html?route=product/product&amp;product_id=30\">Canon EOS 5D</a></h4>
                                                    <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                    </div>

                                                    <p class=\"price\">  <span class=\"price-new\">\$98.00</span> <span class=\"price-old\">\$122.00</span>            </p>

                                                    <div class=\"button-group\">
                                                        <button class=\"acart\" type=\"button\" onclick=\"cart.add('30');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('30');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('30');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                        <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                    </div>


                                                </div>




                                                <script type=\"text/javascript\">
                                                    \$(document).ready(function () {
                                                        \$('#Countdown30').countdown({
                                                            until: new Date(2025, 07-1, 10, 00, 00, 00),
                                                            labels: ['Years', 'Months', 'Weeks', 'Days', 'Hrs', 'Mins', 'Secs'],
                                                            labels1: ['Year', 'Month', 'Week', 'Day', 'Hr', 'Min', 'Sec'],
                                                        });
                                                        //\$('#Countdown<?php echo \$product['product_id'];?>').countdown('pause');
                                                    });
                                                </script>
                                            </div>
                                        </div>

                                        <div class=\"product-layout col-xs-12\">
                                            <div class=\"product-thumb transition\">
                                                <div class=\"image\"><a href=\"indexd21c.html?route=product/product&amp;product_id=47\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-03-315x221.jpg')}}\" alt=\"HP LP3065\" title=\"HP LP3065\" class=\"img-responsive center-block\" /></a>



                                                    <div id=\"Countdown47\" class=\"box-timer\"></div>       </div>


                                                <div class=\"caption text-center\">
                                                    <h4><a href=\"indexd21c.html?route=product/product&amp;product_id=47\">HP LP3065</a></h4>
                                                    <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                    </div>

                                                    <p class=\"price\">           \$122.00
                                                    </p>

                                                    <div class=\"button-group\">
                                                        <button class=\"acart\" type=\"button\" onclick=\"cart.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                        <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                    </div>


                                                </div>




                                                <script type=\"text/javascript\">
                                                    \$(document).ready(function () {
                                                        \$('#Countdown47').countdown({
                                                            until: new Date(2021, 11-1, 25, 00, 00, 00),
                                                            labels: ['Years', 'Months', 'Weeks', 'Days', 'Hrs', 'Mins', 'Secs'],
                                                            labels1: ['Year', 'Month', 'Week', 'Day', 'Hr', 'Min', 'Sec'],
                                                        });
                                                        //\$('#Countdown<?php echo \$product['product_id'];?>').countdown('pause');
                                                    });
                                                </script>
                                            </div>
                                        </div>

                                        <div class=\"product-layout col-xs-12\">
                                            <div class=\"product-thumb transition\">
                                                <div class=\"image\"><a href=\"indexcae8.html?route=product/product&amp;product_id=41\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-05-315x221.jpg')}}\" alt=\"iMac\" title=\"iMac\" class=\"img-responsive center-block\" /></a>



                                                    <div id=\"Countdown41\" class=\"box-timer\"></div>       </div>


                                                <div class=\"caption text-center\">
                                                    <h4><a href=\"indexcae8.html?route=product/product&amp;product_id=41\">iMac</a></h4>
                                                    <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                        <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                    </div>

                                                    <p class=\"price\">  <span class=\"price-new\">\$62.00</span> <span class=\"price-old\">\$122.00</span>            </p>

                                                    <div class=\"button-group\">
                                                        <button class=\"acart\" type=\"button\" onclick=\"cart.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                        <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                    </div>


                                                </div>




                                                <script type=\"text/javascript\">
                                                    \$(document).ready(function () {
                                                        \$('#Countdown41').countdown({
                                                            until: new Date(2021, 09-1, 22, 00, 00, 00),
                                                            labels: ['Years', 'Months', 'Weeks', 'Days', 'Hrs', 'Mins', 'Secs'],
                                                            labels1: ['Year', 'Month', 'Week', 'Day', 'Hr', 'Min', 'Sec'],
                                                    });
                                                        //\$('#Countdown<?php echo \$product['product_id'];?>').countdown('pause');
                                                    });
                                                </script>
                                            </div>
                                        </div>

                                        <div class=\"product-layout col-xs-12\">
                                            <div class=\"product-thumb transition\">
                                                <div class=\"image\"><a href=\"index6320.html?route=product/product&amp;product_id=28\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-04-315x221.jpg')}}\" alt=\"HTC Touch HD\" title=\"HTC Touch HD\" class=\"img-responsive center-block\" /></a>



                                                    <div id=\"Countdown28\" class=\"box-timer\"></div>       </div>


                                                <div class=\"caption text-center\">
                                                    <h4><a href=\"index6320.html?route=product/product&amp;product_id=28\">HTC Touch HD</a></h4>
                                                    <div class=\"rating\">          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                    </div>


                                                    <p class=\"price\">           \$122.00
                                                    </p>

                                                    <div class=\"button-group\">
                                                        <button class=\"acart\" type=\"button\" onclick=\"cart.add('28');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('28');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                        <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('28');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                        <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                                    </div>


                                                </div>




                                                <script type=\"text/javascript\">
                                                    \$(document).ready(function () {
                                                        \$('#Countdown28').countdown({
                                                            until: new Date(2021, 06-1, 16, 00, 00, 00),
                                                            labels: ['Years', 'Months', 'Weeks', 'Days', 'Hrs', 'Mins', 'Secs'],
                                                            labels1: ['Year', 'Month', 'Week', 'Day', 'Hr', 'Min', 'Sec'],
                                                        });
                                                        //\$('#Countdown<?php echo \$product['product_id'];?>').countdown('pause');
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type=\"text/javascript\">
                    \$(document).ready(function() {
                        \$(\"#count\").owlCarousel({
                            itemsCustom : [
                                [0, 1],
                                [375, 2],
                                [600, 3],
                                [768, 3],
                                [992, 3],
                                [1200, 4]
                            ],
                            // autoPlay: 1000,
                            navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
                            navigation : true,
                            pagination:false
                        });
                    });
                </script>
                <div class=\"carouselbg\">
                    <div class=\"container\">
                        <div class=\"logo-slider row\">
                            <div class=\"col-xs-12\">
                                <div id=\"carousel0\" class=\"owl-carousel owl-theme\">


                                    <div class=\"text-center\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/brand/4-225x150.jpg')}}\" alt=\"Starbucks\" class=\"center-block img-responsive\" /></div>


                                    <div class=\"text-center\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/brand/3-225x150.jpg')}}\" alt=\"Disney\" class=\"center-block img-responsive\" /></div>


                                    <div class=\"text-center\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/brand/2-225x150.jpg')}}\" alt=\"Dell\" class=\"center-block img-responsive\" /></div>


                                    <div class=\"text-center\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/brand/1-225x150.jpg')}}\" alt=\"Harley Davidson\" class=\"center-block img-responsive\" /></div>


                                    <div class=\"text-center\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/brand/6-225x150.jpg')}}\" alt=\"Canon\" class=\"center-block img-responsive\" /></div>


                                    <div class=\"text-center\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/brand/5-225x150.jpg')}}\" alt=\"Burger King\" class=\"center-block img-responsive\" /></div>


                                    <div class=\"text-center\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/brand/4-225x150.jpg')}}\" alt=\"Coca Cola\" class=\"center-block img-responsive\" /></div>


                                    <div class=\"text-center\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/brand/3-225x150.jpg')}}\" alt=\"Sony\" class=\"center-block img-responsive\" /></div>


                                    <div class=\"text-center\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/brand/2-225x150.jpg')}}\" alt=\"RedBull\" class=\"center-block img-responsive\" /></div>


                                    <div class=\"text-center\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/brand/1-225x150.jpg')}}\" alt=\"NFL\" class=\"center-block img-responsive\" /></div>



                                </div>
                            </div>
                        </div>
                    </div>


                    <script type=\"text/javascript\">
                        \$(document).ready(function() {
                            \$(\"#carousel0\").owlCarousel({
                                itemsCustom : [
                                    [0, 2],
                                    [600, 4],
                                    [768, 5],
                                    [992, 5],
                                    [1200, 7]
                                ],
                                autoPlay: 2000,
                                loop: true,
                                navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
                                navigation : false,
                                pagination:false
                            });
                        });
                    </script>
                    <div class=\"container pro-nepr\">
                        <div class=\"box blog_inspire \">
                            <div class=\"cmn-title wow bounce\">
                                <h3 class=\"heading\">Latest Blog<hr></h3>
                            </div>
                            <!-- <div class=\"blog-heading\">Latest Blog</div> -->
                            <div class=\"box-content row thummargin\">
                                <div class=\"box-product\">
                                    <div id=\"blog\" class=\"owl-carousel owl-theme\">
                                        <div class=\"product-block col-xs-12\">
                                            <div class=\"blogb\">
                                                <div class=\"blog-left\">
                                                    <div class=\"inspire-blog-image\">
                                                        <img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/blog/blog-01-893x502.jpg')}}\" alt=\"Latest Blog\" title=\"Latest Blog\" class=\"img-responsive\" />
                                                        <div class=\"blog-post-image-hover\"> </div>
                                                        <p class=\"inspire_post_hover\">
                                                            <a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/blog/blog-01-893x502.jpg')}}\" data-lightbox=\"example-set\">jjj</a>
                                                            <a class=\"icon readmore_link\" title=\"Click to view Read More \" href=\"indexed5d.html?route=information/blogger&amp;blogger_id=5\">jjj</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class=\"blog-right text-center\">
                                                    <div class=\"inspire-post-author\">
                                                        <span class=\"write-comment\"> <a href=\"indexed5d.html?route=information/blogger&amp;blogger_id=5\">0 Comments</a> </span>
                                                        <span>|</span><span class=\"date-time\">17/11/2019</span>
                                                    </div>
                                                    <h4><a href=\"indexed5d.html?route=information/blogger&amp;blogger_id=5\">Lorem ipsum dolor sit amet</a> </h4>

                                                    <div class=\"blog-desc\">Vivamus condimentum bibendum mauris. Lorem ipsum d...</div>
                                                    <a class=\"read more\" href=\"indexed5d.html?route=information/blogger&amp;blogger_id=5\">Read More</a>

                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"product-block col-xs-12\">
                                            <div class=\"blogb\">
                                                <div class=\"blog-left\">
                                                    <div class=\"inspire-blog-image\">
                                                        <img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/blog/blog-04-893x502.jpg')}}\" alt=\"Latest Blog\" title=\"Latest Blog\" class=\"img-responsive\" />
                                                        <div class=\"blog-post-image-hover\"> </div>
                                                        <p class=\"inspire_post_hover\">
                                                            <a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/blog/blog-04-893x502.jpg')}}\" data-lightbox=\"example-set\">jjj</a>
                                                            <a class=\"icon readmore_link\" title=\"Click to view Read More \" href=\"index4b1d.html?route=information/blogger&amp;blogger_id=4\">jjj</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class=\"blog-right text-center\">
                                                    <div class=\"inspire-post-author\">
                                                        <span class=\"write-comment\"> <a href=\"index4b1d.html?route=information/blogger&amp;blogger_id=4\">0 Comments</a> </span>
                                                        <span>|</span><span class=\"date-time\">17/11/2019</span>
                                                    </div>
                                                    <h4><a href=\"index4b1d.html?route=information/blogger&amp;blogger_id=4\">tincidunt gravida orci tincidunt</a> </h4>

                                                    <div class=\"blog-desc\">Vivamus condimentum bibendum mauris. Lorem ipsum d...</div>
                                                    <a class=\"read more\" href=\"index4b1d.html?route=information/blogger&amp;blogger_id=4\">Read More</a>

                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"product-block col-xs-12\">
                                            <div class=\"blogb\">
                                                <div class=\"blog-left\">
                                                    <div class=\"inspire-blog-image\">
                                                        <img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/blog/blog-03-893x502.jpg')}}\" alt=\"Latest Blog\" title=\"Latest Blog\" class=\"img-responsive\" />
                                                        <div class=\"blog-post-image-hover\"> </div>
                                                        <p class=\"inspire_post_hover\">
                                                            <a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/blog/blog-03-893x502.jpg')}}\" data-lightbox=\"example-set\">jjj</a>
                                                            <a class=\"icon readmore_link\" title=\"Click to view Read More \" href=\"indexaa69.html?route=information/blogger&amp;blogger_id=3\">jjj</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class=\"blog-right text-center\">
                                                    <div class=\"inspire-post-author\">
                                                        <span class=\"write-comment\"> <a href=\"indexaa69.html?route=information/blogger&amp;blogger_id=3\">0 Comments</a> </span>
                                                        <span>|</span><span class=\"date-time\">17/11/2019</span>
                                                    </div>
                                                    <h4><a href=\"indexaa69.html?route=information/blogger&amp;blogger_id=3\">bibendum mauris</a> </h4>

                                                    <div class=\"blog-desc\">Vivamus condimentum bibendum mauris. Lorem ipsum d...</div>
                                                    <a class=\"read more\" href=\"indexaa69.html?route=information/blogger&amp;blogger_id=3\">Read More</a>

                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"product-block col-xs-12\">
                                            <div class=\"blogb\">
                                                <div class=\"blog-left\">
                                                    <div class=\"inspire-blog-image\">
                                                        <img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/blog/blog-04-893x502.jpg')}}\" alt=\"Latest Blog\" title=\"Latest Blog\" class=\"img-responsive\" />
                                                        <div class=\"blog-post-image-hover\"> </div>
                                                        <p class=\"inspire_post_hover\">
                                                            <a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/blog/blog-04-893x502.jpg')}}\" data-lightbox=\"example-set\">jjj</a>
                                                            <a class=\"icon readmore_link\" title=\"Click to view Read More \" href=\"index5463.html?route=information/blogger&amp;blogger_id=2\">jjj</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class=\"blog-right text-center\">
                                                    <div class=\"inspire-post-author\">
                                                        <span class=\"write-comment\"> <a href=\"index5463.html?route=information/blogger&amp;blogger_id=2\">0 Comments</a> </span>
                                                        <span>|</span><span class=\"date-time\">17/11/2019</span>
                                                    </div>
                                                    <h4><a href=\"index5463.html?route=information/blogger&amp;blogger_id=2\">lectus quis tortor gravida</a> </h4>

                                                    <div class=\"blog-desc\">Vivamus condimentum bibendum mauris. Lorem ipsum d...</div>
                                                    <a class=\"read more\" href=\"index5463.html?route=information/blogger&amp;blogger_id=2\">Read More</a>

                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"product-block col-xs-12\">
                                            <div class=\"blogb\">
                                                <div class=\"blog-left\">
                                                    <div class=\"inspire-blog-image\">
                                                        <img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/blog/blog-02-893x502.jpg')}}\" alt=\"Latest Blog\" title=\"Latest Blog\" class=\"img-responsive\" />
                                                        <div class=\"blog-post-image-hover\"> </div>
                                                        <p class=\"inspire_post_hover\">
                                                            <a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/blog/blog-02-893x502.jpg')}}\" data-lightbox=\"example-set\">jjj</a>
                                                            <a class=\"icon readmore_link\" title=\"Click to view Read More \" href=\"index5a4b.html?route=information/blogger&amp;blogger_id=1\">jjj</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class=\"blog-right text-center\">
                                                    <div class=\"inspire-post-author\">
                                                        <span class=\"write-comment\"> <a href=\"index5a4b.html?route=information/blogger&amp;blogger_id=1\">0 Comments</a> </span>
                                                        <span>|</span><span class=\"date-time\">17/11/2019</span>
                                                    </div>
                                                    <h4><a href=\"index5a4b.html?route=information/blogger&amp;blogger_id=1\">Vivamus condimentum bibendum mauris</a> </h4>

                                                    <div class=\"blog-desc\">Vivamus condimentum bibendum mauris. Lorem ipsum d...</div>
                                                    <a class=\"read more\" href=\"index5a4b.html?route=information/blogger&amp;blogger_id=1\">Read More</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script type=\"text/javascript\">
                        \$(document).ready(function() {
                            \$(\"#blog\").owlCarousel({
                                itemsCustom : [
                                    [0, 1],
                                    [600, 2],
                                    [768, 2],
                                    [992, 3],
                                    [1200, 3]
                                ],
                                // autoPlay: 1000,
                                navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
                                navigation : true,
                                pagination:false
                            });
                        });
                    </script>

                    <div class=\"pro-nepr container\">
                        <h3 class=\"heading\">Specials<hr></h3>
                        <div class=\"row thummargin\">
                            <div id=\"special\" class=\"owl-theme owl-carousel\">
                                <div class=\"product-layout col-xs-12\">
                                    <div class=\"product-thumb transition\">
                                        <div class=\"image\"><a href=\"indexbb02.html?route=product/product&amp;product_id=42\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-01-315x220.jpg')}}\" alt=\"Apple Cinema 30&quot;\" title=\"Apple Cinema 30&quot;\" class=\"img-responsive center-block\" /></a>


                                            <span class=\"salepro\">sale</span>

                                        </div>
                                        <div class=\"caption text-center\">
                                            <h4><a href=\"indexbb02.html?route=product/product&amp;product_id=42\">Apple Cinema 30&quot;</a></h4>
                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                            </div>                <p class=\"price\">  <span class=\"price-new\">\$110.00</span> <span class=\"price-old\">\$122.00</span>            </p>

                                            <p class=\"sale-tag sale\">Save 10%</p>
                                            <div class=\"button-group\">
                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('42');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('42');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('42');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class=\"product-layout col-xs-12\">
                                    <div class=\"product-thumb transition\">
                                        <div class=\"image\"><a href=\"indexf073.html?route=product/product&amp;product_id=30\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-02-315x220.jpg')}}\" alt=\"Canon EOS 5D\" title=\"Canon EOS 5D\" class=\"img-responsive center-block\" /></a>


                                            <span class=\"salepro\">sale</span>

                                        </div>
                                        <div class=\"caption text-center\">
                                            <h4><a href=\"indexf073.html?route=product/product&amp;product_id=30\">Canon EOS 5D</a></h4>
                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                            </div>                <p class=\"price\">  <span class=\"price-new\">\$98.00</span> <span class=\"price-old\">\$122.00</span>            </p>

                                            <p class=\"sale-tag new\">Save 20%</p>
                                            <div class=\"button-group\">
                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('30');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('30');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('30');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class=\"product-layout col-xs-12\">
                                    <div class=\"product-thumb transition\">
                                        <div class=\"image\"><a href=\"indexd21c.html?route=product/product&amp;product_id=47\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-03-315x220.jpg')}}\" alt=\"HP LP3065\" title=\"HP LP3065\" class=\"img-responsive center-block\" /></a>



                                        </div>
                                        <div class=\"caption text-center\">
                                            <h4><a href=\"indexd21c.html?route=product/product&amp;product_id=47\">HP LP3065</a></h4>
                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                            </div>                <p class=\"price\">           \$122.00
                                            </p>

                                            <div class=\"button-group\">
                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('47');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class=\"product-layout col-xs-12\">
                                    <div class=\"product-thumb transition\">
                                        <div class=\"image\"><a href=\"index6320.html?route=product/product&amp;product_id=28\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-04-315x220.jpg')}}\" alt=\"HTC Touch HD\" title=\"HTC Touch HD\" class=\"img-responsive center-block\" /></a>



                                        </div>
                                        <div class=\"caption text-center\">
                                            <h4><a href=\"index6320.html?route=product/product&amp;product_id=28\">HTC Touch HD</a></h4>
                                            <div class=\"rating\">          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                            </div>
                                            <p class=\"price\">           \$122.00
                                            </p>

                                            <div class=\"button-group\">
                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('28');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('28');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('28');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class=\"product-layout col-xs-12\">
                                    <div class=\"product-thumb transition\">
                                        <div class=\"image\"><a href=\"indexcae8.html?route=product/product&amp;product_id=41\"><img src=\"{{ asset('front/templatetasarim.com/opencart/Bicycle/image/cache/catalog/product/opencart-05-315x220.jpg')}}\" alt=\"iMac\" title=\"iMac\" class=\"img-responsive center-block\" /></a>


                                            <span class=\"salepro\">sale</span>

                                        </div>
                                        <div class=\"caption text-center\">
                                            <h4><a href=\"indexcae8.html?route=product/product&amp;product_id=41\">iMac</a></h4>
                                            <div class=\"rating\">
                                    <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                                <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
                                            </div>                <p class=\"price\">  <span class=\"price-new\">\$62.00</span> <span class=\"price-old\">\$122.00</span>            </p>

                                            <p class=\"sale-tag new\">Save 50%</p>
                                            <div class=\"button-group\">
                                                <button class=\"acart\" type=\"button\" onclick=\"cart.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcart\"></use></svg></button>
                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Wish List\" onclick=\"wishlist.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addwish\"></use></svg></button>
                                                <button type=\"button\" data-toggle=\"tooltip\" title=\"Compare\" onclick=\"compare.add('41');\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#addcompare\"></use></svg></button>
                                                <div class=\"bquickv\" data-toggle=\"tooltip\" title=\"Quick View\"> </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div></div>
                    </div>

                    <script type=\"text/javascript\">
                        \$(document).ready(function() {
                            \$(\"#special\").owlCarousel({
                                itemsCustom : [
                                    [0, 2],
                                    [375, 2],
                                    [600, 3],
                                    [768, 3],
                                    [992, 4],
                                    [1200, 4],
                                    [1410, 4]
                                ],
                                // autoPlay: 1000,
                                navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
                                navigation : true,
                                pagination:false
                            });
                        });
                    </script>
                    <div>  <div class=\"service-bg\">
                            <div class=\"container\">
                                <div class=\"all-ser text-center\">
                                    <div class=\"ser-block\">
                                        <div class=\"d-inline-block\">
                                            <i class=\"fa fa-smile-o\"></i>
                                        </div>
                                        <div class=\"ser-co d-inline-block text-left\">
                                            <h5>100% SETISFACTION</h5>
                                            <h6>If you are unable.</h6>
                                        </div>
                                    </div>
                                    <div class=\"ser-block\">
                                        <div class=\"d-inline-block\">
                                            <i class=\"fa fa-ship\"></i>
                                        </div>
                                        <div class=\"ser-co d-inline-block text-left\">
                                            <h5>FAST FREE SHIPMENT</h5>
                                            <h6>Load any Computers.</h6>
                                        </div>
                                    </div>
                                    <div class=\"ser-block\">
                                        <div class=\"d-inline-block\">
                                            <i class=\"fa fa-retweet\"></i>
                                        </div>
                                        <div class=\"ser-co d-inline-block text-left\">
                                            <h5>14 DAYS MONEY BACK</h5>
                                            <h6>If you are unable.</h6>
                                        </div>
                                    </div>
                                    <div class=\"ser-block\">
                                        <div class=\"d-inline-block\">
                                            <i class=\"fa fa-credit-card\"></i>
                                        </div>
                                        <div class=\"ser-co d-inline-block text-left\">
                                            <h5>PAYMENT METHOD</h5>
                                            <h6>Secure payment</h6>
                                        </div>
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
{% endblock  %}", "@Template/Template/Template.html.twig", "C:\\xampp\\htdocs\\projet\\symfony\\PiDev\\src\\TemplateBundle\\Resources\\views\\Template\\Template.html.twig");
    }
}
