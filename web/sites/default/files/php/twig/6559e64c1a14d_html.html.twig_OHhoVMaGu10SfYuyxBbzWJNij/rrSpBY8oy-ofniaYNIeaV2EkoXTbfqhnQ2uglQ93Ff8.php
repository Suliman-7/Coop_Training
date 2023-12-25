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

/* themes/custom/alula_theme/templates/html.html.twig */
class __TwigTemplate_7a09cc06cbd13a48b8f64d521e54a7ea extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "

";
        // line 29
        $context["body_classes"] = [0 => ((        // line 30
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 31
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 31, $this->source))))), 2 => ((        // line 32
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 32, $this->source)))) : ("")), 3 => ((        // line 33
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), 4 => (((        // line 34
($context["b5_body_schema"] ?? null) == "light")) ? (" text-dark") : ((((($context["b5_body_schema"] ?? null) == "dark")) ? (" text-light") : (" ")))), 5 => (((        // line 35
($context["b5_body_bg_schema"] ?? null) != "none")) ? ((" bg-" . $this->sandbox->ensureToStringAllowed(($context["b5_body_bg_schema"] ?? null), 35, $this->source))) : (" ")), 6 => "d-flex flex-column h-100"];
        // line 39
        if (((($__internal_compile_0 = ($context["html_attributes"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["dir"] ?? null) : null) == "ltr")) {
            // line 40
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("alula_theme/global-ltr"), "html", null, true);
            echo "
";
        } elseif (((($__internal_compile_1 =         // line 41
($context["html_attributes"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["dir"] ?? null) : null) == "rtl")) {
            // line 42
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("alula_theme/global-rtl"), "html", null, true);
        }
        // line 51
        echo "<!DOCTYPE html>
<html";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["html_attributes"] ?? null), "addClass", [0 => "h-100"], "method", false, false, true, 52), 52, $this->source), "html", null, true);
        echo ">


<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <meta name=\"Description\" content=\"نادي العلا\" />
    <link rel=\"shortcut icon\" type=\"image\" href=\"assets/images/logo.svg\" />
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css\" />
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css\" />
    <link rel=\"stylesheet\" href=\"assets/css/animate.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">


    <title> نادي العلا | الرئيسية</title>
</head>

<body>


    ";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 75, $this->source), "html", null, true);
        echo "
    ";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 76, $this->source), "html", null, true);
        echo "
    ";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 77, $this->source), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 78, $this->source), "html", null, true);
        echo "\">

    <!-- header -->
    <header>
        <nav class=\"navbar navbar-expand-lg \">
            <div class=\"container flex-lg-column align-items-stretch\">
                <div class=\"logo_social d-flex justify-content-between align-items-center\">
                    <a class=\"navbar-brand\" href=\"./index.html\">
                        <img class=\"img-fluid\" src=\"assets/images/logo.svg\" alt=\"\">
                    </a>
                    <div class=\"social-media\">
                        <ul class=\"d-flex list-unstyled gap-2 ga-md-3 m-0\">
                            <li>
                                <a target=\"_blank\" href=\"https://twitter.com/AlUlaclub\">
                                    <i class=\"fab fa-twitter\"></i>
                                </a>
                            </li>
                            <li>
                                <a target=\"_blank\" href=\"https://www.linkedin.com/company/نادي-العلا-السعودي/\">
                                    <i class=\"fab fa-linkedin\"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-content\">
                    <div class=\"hamburger-toggle\">
                        <div class=\"hamburger\">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbar-content\">
                    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" aria-current=\"page\" href=\"./index.html\">الرئيسية</a>
                        </li>
                        <li class=\"nav-item dropdown dropdown-mega position-static\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\">عن النادي</a>
                            <div class=\"dropdown-menu  \">
                                <div class=\"mega-content px-lg-4\">
                                    <div class=\"container gx-90 py-4\">
                                        <div class=\"row gy-4 gx-90\">
                                            <div class=\"col-12 mega-col col-md-4   \">
                                                <h5 class=\"fw-semibold mb-3\">التأسيس</h5>

                                                <img class=\"img-fluid\" src=\"assets/images/Foundation2.jpg\" alt=\"\">
                                                <p class=\"mt-3\">جرت مباراة شهيرة في محافظة العلا في العام 1978، شهدها صاحب السمو الملكي الأمير عبد المحسن بن عبد العزيز، أمير المدينة المنورة وقتذاك. وأسهم حضور أمير المنطقة في تتويج الجهود الفردية الناجحة للنشاط الرياضي
                                                    والاجتماعي في المنطقة. ومع فورة الحماس التي أعقبت نهاية المباراة، ارتجل القياديون من الفريقين المطالبة بتأسيس نادٍ رياضي لمحافظة العلا، وتضافرت الجهود حتى تسجل النادي رسميًا في كشوفات الرئاسة العامة
                                                    لرعاية الشباب بعدها بـ3 أعوام، في العام 1981.</p>
                                                <a class=\"fw-semibold color-accent\" href=\"./history.html\">المزيد</a>
                                            </div>
                                            <div class=\"col-12 mega-col col-md-4  \">
                                                <h5 class=\"fw-semibold  mb-3\">قيادات النادي الحالية</h5>
                                                <div class=\"leader-box d-grid   text-center gap-3\">
                                                    <div class=\"leader gap-2  d-flex align-items-center\">
                                                        <div class=\"image max-115\">
                                                            <img class=\"img-fluid w-100-100 rounded-circle\" src=\"assets/images/leader1.png\" alt=\"\">
                                                        </div>
                                                        <div>
                                                            <h6 class=\"fw-semibold\">م. عمرو بن صالح المدني</h6>
                                                            <p>رئيس مجلس الإدارة المكلف</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"leader  gap-2 d-flex align-items-center\">
                                                        <div class=\"image max-115\">
                                                            <img class=\"img-fluid w-100-100  rounded-circle\" src=\"assets/images/leader2.png\" alt=\"\">
                                                        </div>
                                                        <div>
                                                            <h6 class=\"fw-semibold\"> زياد عبد الرحمن السحيباني</h6>
                                                            <p>نائب رئيس مجلس الإدارة</p>
                                                        </div>
                                                    </div>
                                                    <div class=\"leader  gap-2 d-flex align-items-center\">

                                                        <div class=\"image max-115\">
                                                            <img class=\"img-fluid w-100-100  rounded-circle\" src=\"assets/images/leader3.png\" alt=\"\">
                                                        </div>
                                                        <div>
                                                            <h6 class=\"fw-semibold\"> أحمد بن راشد الراشد</h6>
                                                            <p> الرئيس التنفيذي
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-12 mega-col col-md-4   \">
                                                <div>
                                                    <h5 class=\"fw-semibold  mb-3\"> الرؤية</h5>
                                                    <p>نادي رياضي رائد قائم على الاستدامة والتميز الرياضي، ويعزز الشعور بالفخر والانتماء في مجتمع العلا</p>
                                                </div>

                                                <div>
                                                    <ul class=\"d-grid gap-2 list-unstyled mt-5\">
                                                        <li>
                                                            <a class=\"fw-semibold color-accent\" href=\"./history.html\">نبذة تاريخية</a>
                                                        </li>
                                                        <li>
                                                            <a class=\"fw-semibold color-accent\" href=\"./leaders.html\">القيادات </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"fw-semibold color-accent\" href=\"./achievements.html\"> الإنجازات</a>
                                                        </li>
                                                        <li>
                                                            <a class=\"fw-semibold color-accent\" href=\"./history.html#values\"> قيم النادي </a>
                                                        </li>
                                                        <li>
                                                            <a class=\"fw-semibold color-accent\" href=\"./history.html#pillars\"> ركائز النادي </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown dropdown-mega position-static\">
                            <a class=\"nav-link dropdown-toggle\" href=\"./players.html\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\"> الفريق
                                الأول</a>
                            <div class=\"dropdown-menu  \">
                                <div class=\"mega-content px-4\">
                                    <div class=\"container\">
                                        <div class=\"row\">
                                            <div class=\"col-12 mt-4 mb-3\">
                                                <h5 class=\"fw-semibold mb-3\">فريق كرة القدم للموسم الرياضي 2022-23</h5>
                                            </div>


                                        </div>
                                        <div class=\"row gy-3\">
                                            <div class=\"col-lg-2 col-md-4 players\">
                                                <div class=\"player-card position-relative\">
                                                    <div class=\"overlay-text\">
                                                        <h5>77</h5>
                                                        <h4> عماد صالح الكناني
                                                        </h4>
                                                        <hr>
                                                        <ul class=\"list-unstyled d-grid gap-1 mt-4\">
                                                            <li>
                                                                <span>المركز :</span>
                                                                <span>الهجوم</span>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class=\"player-name\">
                                                        <div class=\"number\">
                                                            77
                                                        </div>
                                                        <div class=\"name\">
                                                            عماد صالح الكناني
                                                        </div>
                                                    </div>
                                                    <img class=\"img-fluid\" src=\"assets/images/players/عماد صالح الكناني  مهاجم  77.png\" alt=\"\">
                                                </div>
                                            </div>
                                            <div class=\"col-lg-2 col-md-4 players\">
                                                <div class=\"player-card position-relative\">
                                                    <div class=\"overlay-text\">
                                                        <h5>15</h5>
                                                        <h4> محمد طاهر الشريف
                                                        </h4>
                                                        <hr>
                                                        <ul class=\"list-unstyled d-grid gap-1 mt-4\">
                                                            <li>
                                                                <span>المركز :</span>
                                                                <span>الهجوم</span>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class=\"player-name\">
                                                        <div class=\"number\">
                                                            15
                                                        </div>
                                                        <div class=\"name\">
                                                            محمد طاهر الشريف

                                                        </div>
                                                    </div>
                                                    <img class=\"img-fluid\" src=\"assets/images/players/محمد طاهر الشريف  مهاجم  15.png\" alt=\"\">
                                                </div>
                                            </div>
                                            <div class=\"col-lg-2 col-md-4 players\">
                                                <div class=\"player-card position-relative\">
                                                    <div class=\"overlay-text\">
                                                        <h5>20</h5>
                                                        <h4> تركي أحمد الخضير </h4>
                                                        <hr>
                                                        <ul class=\"list-unstyled d-grid gap-1 mt-4\">
                                                            <li>
                                                                <span>المركز :</span>
                                                                <span>الوسط</span>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class=\"player-name\">
                                                        <div class=\"number\">
                                                            20
                                                        </div>
                                                        <div class=\"name\">
                                                            تركي أحمد الخضير
                                                        </div>
                                                    </div>
                                                    <img class=\"img-fluid\" src=\"assets/images/players/تركي أحمد الخضير  محور  20.png\" alt=\"\">
                                                </div>
                                            </div>
                                            <div class=\"col-lg-2 col-md-4 players\">
                                                <div class=\"player-card position-relative\">
                                                    <div class=\"overlay-text\">
                                                        <h5>88</h5>
                                                        <h4> إبراهيم نايف العتيبي </h4>
                                                        <hr>
                                                        <ul class=\"list-unstyled d-grid gap-1 mt-4\">
                                                            <li>
                                                                <span>المركز :</span>
                                                                <span>ظهير</span>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class=\"player-name\">
                                                        <div class=\"number\">
                                                            88
                                                        </div>
                                                        <div class=\"name\">
                                                            إبراهيم نايف العتيبي
                                                        </div>
                                                    </div>
                                                    <img class=\"img-fluid\" src=\"assets/images/players/إبراهيم نايف العتيبي  ظهير  88.png\" alt=\"\">
                                                </div>
                                            </div>
                                            <div class=\"col-lg-2 col-md-4 players\">
                                                <div class=\"player-card position-relative\">
                                                    <div class=\"overlay-text\">
                                                        <h5>70</h5>
                                                        <h4> أحمد حبيب الكعكي </h4>
                                                        <hr>
                                                        <ul class=\"list-unstyled d-grid gap-1 mt-4\">
                                                            <li>
                                                                <span>المركز :</span>
                                                                <span>ظهير</span>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class=\"player-name\">
                                                        <div class=\"number\">
                                                            70
                                                        </div>
                                                        <div class=\"name\">
                                                            أحمد حبيب الكعكي
                                                        </div>
                                                    </div>
                                                    <img class=\"img-fluid\" src=\"assets/images/players/أحمد حبيب الكعكي  ظهير  70.png\" alt=\"\">
                                                </div>
                                            </div>
                                            <div class=\"col-lg-2 col-md-4 players\">
                                                <div class=\"player-card position-relative\">
                                                    <div class=\"overlay-text\">
                                                        <h5>1</h5>
                                                        <h4> سلطان صالح الشمري </h4>
                                                        <hr>
                                                        <ul class=\"list-unstyled d-grid gap-1 mt-4\">
                                                            <li>
                                                                <span>المركز :</span>
                                                                <span>حارس مرمى</span>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class=\"player-name\">
                                                        <div class=\"number\">
                                                            1
                                                        </div>
                                                        <div class=\"name\">
                                                            سلطان صالح الشمري
                                                        </div>
                                                    </div>
                                                    <img class=\"img-fluid\" src=\"assets/images/players/سلطان صالح الشمري  حارس  1.png\" alt=\"\">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-12\">
                                                <div class=\"text-center mt-5 mb-3\">
                                                    <a href=\"./players.html\" class=\"btn btn-outline-secondary fw-semibold show-all-product \">
                                                        جميع اللاعبين </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                المركز الإعلامي
                            </a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <li><a class=\"dropdown-item\" href=\"./news.html\">الأخبار</a></li>
                                <li><a class=\"dropdown-item\" href=\"./media-center.html\"> المكتبة المرئية</a></li>

                            </ul>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"./various-sports.html\">الرياضات المختلفة </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"./womens-sports.html\"> الرياضات النسائية </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"./academy.html\"> الأكاديمية </a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"./social.html\"> المسؤولية المجتمعية </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"./contact-us.html\"> اتصل بنا </a>
                        </li>
                    </ul>


                    <ul class=\"navbar-nav second-nav ms-auto mb-2 mb-lg-0\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" target=\"_blank\" href=\"https://skillano.com/categories/625301/%D9%85%D8%AA%D8%AC%D8%B1-%D9%86%D8%A7%D8%AF%D9%8A-%D8%A7%D9%84%D8%B9%D9%84%D8%A7-%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A\">
                                المتجر </a>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link\" target=\"_blank\" href=\"https://www.experiencealula.com/ar\"> تعرف على
                                العلا </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


    </header>
    <!-- End header -->


    <!-- Start hero  section-->
    <section class=\"hero mt-2 mb-4 wow animate__fadeIn\" data-wow-duration=\"1s\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"swiper h-100 \">
                        <div class=\"swiper h-100 hero-slider\">
                            <div class=\"swiper-wrapper\">
                                <div class=\"swiper-slide\">
                                    <a href=\"./single-node-6.html\">
                                        <img class=\"img-fluid h-100 obj-cover\" src=\"assets/images/ALULA-FC-9-min.jpg\" alt=\"\">
                                        <div class=\"title\">
                                            <h3 class=\"m-0\"> النمور العربية تعسكر في سلوفينيا </h3>
                                        </div>
                                    </a>
                                </div>

                                <div class=\"swiper-slide\">
                                    <a href=\"./single-node-1.html\">
                                        <img class=\"img-fluid  h-100 obj-cover\" src=\"assets/images/النمور العربية مقبلة على الحصاد.jpg\" alt=\"\">
                                        <div class=\"title\">
                                            <h3 class=\"m-0\"> النمور العربية مقبلة على الحصاد</h3>
                                        </div>

                                    </a>
                                </div>

                                <div class=\"swiper-slide\">
                                    <a href=\"./single-node-3.html\">
                                        <img class=\"img-fluid  h-100 obj-cover\" src=\"assets/images/نادي العلا يجدد التعاقد مع المدرب جميل قاسم.jpg\" alt=\"\">
                                        <div class=\"title\">
                                            <h3 class=\"m-0\"> نادي العلا يجدد التعاقد مع المدرب جميل قاسم</h3>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"next-match h-100\">
                        <!-- Swiper -->
                        <div class=\"swiper h-100  \">
                            <div class=\"swiper-wrapper\">
                                <div class=\"swiper-slide\">
                                    <div class=\"match text-center p-2 pb-5 p-lg-5\">
                                        <h6 class=\"mb-md-5 mb-3\">
                                            المباريات القادمة

                                        </h6>
                                        <div class=\"clubs mb-md-5 mb-3 max-225 m-auto d-flex align-items-center justify-content-between\">
                                            <div class=\"club \">
                                                <div class=\"logo-club\">
                                                    <img src=\"assets/images/المزاحمية.png\" alt=\"\">
                                                </div>
                                                <p class=\"mb-0 mt-2\"> المزاحمية </p>
                                            </div>
                                            <div class=\"club\">
                                                <div class=\"logo-club\">
                                                    <img src=\"assets/images/logo.svg\" alt=\"\">
                                                </div>
                                                <p class=\"mb-0 mt-2\">العلا </p>
                                            </div>
                                        </div>
                                        <p>
                                            ملعب نادي المزاحمية
                                        </p>
                                        <time>3:10 م</time>
                                        <div class=\"date d-flex align-items-center gap-2 justify-content-center\">
                                            <span class=\"day\">الخميس</span>
                                            <span class=\"s-date\">
                                                04/11/2023
                                            </span>
                                        </div>
                                    </div>


                                </div>

                                <div class=\"swiper-slide\">
                                    <div class=\"match text-center p-2  pb-5 p-lg-5\">
                                        <h6 class=\"mb-md-5 mb-3\">
                                            المباريات القادمة

                                        </h6>
                                        <div class=\"clubs mb-md-5 mb-3 max-225 m-auto d-flex align-items-center justify-content-between\">
                                            <div class=\"club \">
                                                <div class=\"logo-club\">
                                                    <img src=\"assets/images/logo.svg\" alt=\"\">
                                                </div>
                                                <p class=\"mb-0  mt-2\">العلا </p>
                                            </div>
                                            <div class=\"club\">
                                                <div class=\"logo-club\">
                                                    <img src=\"assets/images/رضوى.png\" alt=\"\">
                                                </div>
                                                <p class=\"mb-0  mt-2\"> رضوى</p>
                                            </div>
                                        </div>
                                        <p>
                                            ملعب الأمير محمد بن عبد العزيز

                                        </p>
                                        <time>3:35 م</time>
                                        <div class=\"date d-flex align-items-center gap-2 justify-content-center\">
                                            <span class=\"day\">السبت</span>
                                            <span class=\"s-date\">
                                                11/11/2023
                                            </span>
                                        </div>
                                    </div>


                                </div>
                                <div class=\"swiper-slide\">
                                    <div class=\"match text-center p-2  pb-5 p-lg-5\">
                                        <h6 class=\"mb-md-5 mb-3\">
                                            آخر المباريات

                                        </h6>
                                        <div class=\"clubs mb-md-5 mb-3 max-225 m-auto d-flex align-items-center justify-content-between\">
                                            <div class=\"club \">
                                                <div class=\"logo-club\">
                                                    <img src=\"assets/images/logo.svg\" alt=\"\">
                                                </div>
                                                <p class=\"mb-0  mt-2\">العلا </p>
                                            </div>
                                            <div class=\"club\">
                                                <div class=\"logo-club\">
                                                    <img src=\"assets/images/الوطني.png\" alt=\"\">
                                                </div>
                                                <p class=\"mb-0  mt-2\"> الوطني </p>
                                            </div>
                                        </div>
                                        <p>
                                            ملعب الأمير محمد بن عبد العزيز
                                        </p>
                                        <time>3:35 م</time>
                                        <div class=\"date d-flex align-items-center gap-2 justify-content-center\">
                                            <span class=\"day\">السبت</span>
                                            <span class=\"s-date\">
                                               18/11/2023

                                            </span>
                                        </div>
                                    </div>


                                </div>


                            </div>
                            <div class=\"swiper-controll \">

                                <div class=\" swiper-pagination \"></div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- End herosection -->


    <!-- Start About Club Section -->
    <section class=\"about-us py-4 my-5 mt-0\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-9\">
                    <div class=\"text wow animate__slideInRight\" data-wow-duration=\"1s\">
                        <p class=\"mb-0\">نادي العلا هو الواجهة الرياضية لمحافظة العلا، تأسس في العام 1981. وانتقلت ملكيته إلى الهيئة الملكية بمحافظة العلا مطلع يونيو 2023. يعمل النادي على مبدأ التميز الرياضي والاستدامة، وتعزيز الشعور بالفخر والانتماء في محافظة العلا.
                            يعمل نادي العلا في المحافظة التي تُعدُ موطنًا لخمس محميات طبيعية، ما يجعل له دورًا مساهمًا في الحفاظ على النمر العربي. ويُعبّر النادي عن دوره عبر شعار النادي الذي يحمل رسمة النمر العربي، بصورة تعكس المسؤولية الاجتماعية للمنتسبين
                            للنادي في حماية هذا الكائن من الإنقراض.

                        </p>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"image   mt-4 mt-md-0   h-100 d-flex align-items-center justify-content-md-end justify-content-center\">
                        <img src=\"assets/images/gold-logo.png\" width=\"100\" class=\"img-fluid\" alt=\"\">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About Club Section -->


    <!-- Start News Club Section -->

    <section class=\"news\">
        <div class=\"container gx-xl-5\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"title mb-4\">
                        <h2>
                            الأخبار
                        </h2>
                    </div>
                </div>

            </div>
            <div class=\"row gx-xl-5 wow animate__slideInUp\" data-wow-duration=\"1s\">
                <div class=\"col-lg-8\">

                    <div class=\"card shadow border-0 \">
                        <div class=\"row g-0 h-100\">
                            <div class=\"col-md-5\">
                                <div class=\"card-image has-hover overflow-hidden h-100\">
                                    <img src=\"assets/images/ALULA-FC-9-min.jpg\" class=\"img-fluid  w-100 h-100 obj-cover\" alt=\"...\">
                                </div>
                            </div>
                            <div class=\"col-md-7\">
                                <div class=\"card-body\">
                                    <!-- <div class=\"author mb-4 d-flex justify-content-between align-items-center\">
                                        <div class=\"d-flex align-items-center gap-2\">
                                            <img src=\"assets/images/author.png\" alt=\"\">
                                            <div class=\"name\">عبدالله الحربي</div>
                                        </div>

                                        <div class=\"share_post\">


                                            <div class=\"btn-group dropup\">

                                                <i class=\"fas fa-share dropdown-toggle border-0\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"></i>

                                                <ul class=\"dropdown-menu border-0 shadow  gap-1 text-end px-2 py-2\">
                                                    <li>
                                                        <a href=\"\"><span>Facebook</span>
                                                            <i class=\"fab fa-facebook\"></i>

                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"\"><span>Twitter</span>
                                                            <i class=\"fab fa-twitter\"></i>

                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"\"><span>snapchat</span>
                                                            <i class=\"fab fa-snapchat-ghost\"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>



                                        </div>
                                    </div> -->
                                    <h5 class=\"card-title  \">النمور العربية تعسكر في سلوفينيا</h5>

                                    <div class=\"post-info my-3 d-flex gap-5\">
                                        <div class=\"date\">
                                            <i class=\"fal fa-calendar\"></i>
                                            <span>03/09/2023</span>
                                        </div>
                                        <!-- <div class=\"comment\">
                                            <i class=\"fal fa-comment\"></i>
                                            <span>38</span>
                                        </div> -->
                                    </div>

                                    <p class=\"card-text mb-3\">
                                        انطلق معسكر الفريق الأول لكرة القدم بنادي العلا في سلوفينيا، استعدادًا للموسم الجديد 2023-2024. ويمتد المعسكر الذي انطلق منتصف أغسطس الجاري، حتى مطلع سبتمبر المقبل.
                                    </p>

                                    <a href=\"./single-node-6.html\" class=\"readmore btn btn-outline-secondary\">المزيد</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card shadow border-0 rounded-0 mt-3 mt-lg-5\">
                        <div class=\"row g-0 h-100\">
                            <div class=\"col-md-5\">
                                <div class=\"card-image  has-hover overflow-hidden h-100\">
                                    <img src=\"assets/images/النمور العربية مقبلة على الحصاد.jpg\" class=\"img-fluid  w-100 h-100 obj-cover\" alt=\"...\">
                                </div>
                            </div>
                            <div class=\"col-md-7\">
                                <div class=\"card-body\">
                                    <!-- <div class=\"author mb-4 d-flex justify-content-between align-items-center\">
                                                            <div class=\"d-flex align-items-center gap-2\">
                                                                <img src=\"assets/images/author.png\" alt=\"\">
                                                                <div class=\"name\">عبدالله الحربي</div>
                                                            </div>
                    
                                                            <div class=\"share_post\">
                                                                <div class=\"btn-group dropup\">
                                                                    <i class=\"fas fa-share dropdown-toggle border-0\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"></i>
                                                                    <ul class=\"dropdown-menu border-0 shadow  gap-1 text-end px-2 py-2\">
                                                                        <li>
                                                                            <a href=\"\"><span>Facebook</span>
                                                                                <i class=\"fab fa-facebook\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"\"><span>Twitter</span>
                                                                                <i class=\"fab fa-twitter\"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"\"><span>snapchat</span>
                                                                                <i class=\"fab fa-snapchat-ghost\"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                    
                    
                    
                                                            </div>
                                                        </div> -->
                                    <h5 class=\"card-title  \"> النمور العربية مقبلة على الحصاد</h5>

                                    <div class=\"post-info my-3 d-flex gap-5\">
                                        <div class=\"date\">
                                            <i class=\"fal fa-calendar\"></i>
                                            <span>05/06/2023</span>
                                        </div>
                                        <!-- <div class=\"comment\">
                                                                <i class=\"fal fa-comment\"></i>
                                                                <span>38</span>
                                                            </div> -->
                                    </div>
                                    <p class=\"card-text  mb-3\"> أشاد المدير التنفيذي لكرة القدم بنادي العلا، محمد خوجة، بخطوة تجديد التعاقد مع المدرب جميل قاسم، وقال إنه اسم كبير في عالم التدريب على مستوى كرة القدم السعودية، مستشهدًا بمسيرته الحافلة بتكرار تجربة الصعود إلى دوري
                                        المحترفين مع 5 فرق مختلفة.
                                    </p>



                                    <a href=\"./single-node-1.html\" class=\"readmore btn btn-outline-secondary\">المزيد</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card shadow border-0 rounded-0 mt-3 mt-lg-5\">
                        <div class=\"row g-0 h-100\">
                            <div class=\"col-md-5\">
                                <div class=\"card-image has-hover overflow-hidden h-100\">
                                    <img src=\"assets/images/news4.jpg\" class=\"img-fluid  w-100 h-100 obj-cover\" alt=\"...\">
                                </div>
                            </div>
                            <div class=\"col-md-7\">
                                <div class=\"card-body\">
                                    <!-- <div class=\"author mb-4 d-flex justify-content-between align-items-center\">
                                                                            <div class=\"d-flex align-items-center gap-2\">
                                                                                <img src=\"assets/images/author.png\" alt=\"\">
                                                                                <div class=\"name\">عبدالله الحربي</div>
                                                                            </div>
                                    
                                                                            <div class=\"share_post\">
                                    
                                    
                                                                                <div class=\"btn-group dropup\">
                                    
                                                                                    <i class=\"fas fa-share dropdown-toggle border-0\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"></i>
                                    
                                                                                    <ul class=\"dropdown-menu border-0 shadow  gap-1 text-end px-2 py-2\">
                                                                                        <li>
                                                                                            <a href=\"\"><span>Facebook</span>
                                                                                                <i class=\"fab fa-facebook\"></i>
                                    
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href=\"\"><span>Twitter</span>
                                                                                                <i class=\"fab fa-twitter\"></i>
                                    
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href=\"\"><span>snapchat</span>
                                                                                                <i class=\"fab fa-snapchat-ghost\"></i>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                    
                                    
                                    
                                                                            </div>
                                                                        </div> -->
                                    <h5 class=\"card-title  \"> انتقال ملكية نادي العلا للهيئة الملكية لمحافظة العلا </h5>

                                    <div class=\"post-info my-3 d-flex gap-5\">
                                        <div class=\"date\">
                                            <i class=\"fal fa-calendar\"></i>
                                            <span>05/06/2023</span>
                                        </div>
                                        <!-- <div class=\"comment\">
                                                                                <i class=\"fal fa-comment\"></i>
                                                                                <span>38</span>
                                                                            </div> -->
                                    </div>

                                    <p class=\"card-text mb-3\">أطلق صاحب السمو الملكي الأمير محمد بن سلمان بن عبدالعزيز آل سعود ولي العهد رئيس مجلس الوزراء -حفظه الله- اليوم مشروع الاستثمار والتخصيص للأندية الرياضية، بعد اكتمال الإجراءات التنفيذية للمرحلة الأولى،...
                                    </p>

                                    <a href=\"./single-node-4.html\" class=\"readmore btn btn-outline-secondary\">المزيد</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 mt-3 mt-lg-0\">
                    <div class=\"row related-news\">
                        <div class=\"col-lg-12 col-md-6\">
                            <div class=\"card shadow border-0   rounded-0  \">
                                <a href=\"./single-node-3.html\">
                                    <div class=\"has-hover overflow-hidden\">
                                        <img src=\"assets/images/نادي العلا يجدد التعاقد مع المدرب جميل قاسم.jpg\" class=\"card-img-top rounded-0 obj-cover\" alt=\"...\">
                                    </div>
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title\">نادي العلا يجدد التعاقد مع المدرب جميل قاسم</h5>
                                        <div class=\"post-info mt-3 d-flex gap-5\">
                                            <div class=\"date\">
                                                <i class=\"fal fa-calendar\"></i>
                                                <span>05/06/2023</span>
                                            </div>
                                            <!-- <div class=\"comment\">
                                                                                                        <i class=\"fal fa-comment\"></i>
                                                                                                        <span>38</span>
                                                                                                    </div> -->
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class=\"col-lg-12 col-md-6 mt-0 mt-lg-5\">
                            <div class=\"card shadow border-0   rounded-0  \">
                                <a href=\"./single-node-5.html\">
                                    <div class=\"has-hover overflow-hidden\">
                                        <img src=\"assets/images/logo.svg\" style=\" height: 207px;\" class=\"card-img-top rounded-0 \" alt=\"...\">
                                    </div>
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title\"> تأمين طبي وتسهيلات بنكية لمنسوبي العلا</h5>
                                        <div class=\"post-info mt-3 d-flex gap-5\">
                                            <div class=\"date\">
                                                <i class=\"fal fa-calendar\"></i>
                                                <span>09/06/2023</span>
                                            </div>
                                            <!-- <div class=\"comment\">
                                                                                                                            </div> -->
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class=\"col-lg-12 col-md-6 mt-0 mt-lg-5\">
                            <div class=\"card shadow border-0   rounded-0  \">
                                <a href=\"./single-node-5.html\">
                                    <div class=\"has-hover overflow-hidden\">
                                        <img src=\"assets/images/فريق السيدات ينطلق في يوليو.jpg\" style=\" height: 207px;\" class=\"card-img-top rounded-0 \" alt=\"...\">
                                    </div>
                                    <div class=\"card-body\">
                                        <h5 class=\"card-title\"> فريق السيدات ينطلق في يوليو
                                        </h5>
                                        <div class=\"post-info mt-3 d-flex gap-5\">
                                            <div class=\"date\">
                                                <i class=\"fal fa-calendar\"></i>
                                                <span>05/06/2023</span>
                                            </div>
                                            <!-- <div class=\"comment\">
                                                                                                                                                    </div> -->
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </section>
    <!-- End News Club Section -->

    <!-- Start TimeLine Section -->
    <section class=\"timeline mt-md-5  wow animate__slideInUp\" data-wow-duration=\"1s\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"text-center title my-5\">
                        <h2> تاريخنا مع كرة القدم
                        </h2>
                    </div>
                </div>
            </div>

            <div class=\"position-relative\">
                <!-- Swiper -->
                <div class=\"swiper \">
                    <div class=\"swiper-wrapper\">
                        <div class=\"swiper-slide active\">1981</div>
                        <div class=\"swiper-slide\">1990</div>
                        <div class=\"swiper-slide\">1990</div>
                        <div class=\"swiper-slide\">1993</div>
                        <div class=\"swiper-slide\">1994</div>
                        <div class=\"swiper-slide\">1999</div>
                        <div class=\"swiper-slide\">2003</div>
                        <div class=\"swiper-slide\">2011</div>
                        <div class=\"swiper-slide\">2020</div>
                        <div class=\"swiper-slide\">2023</div>


                    </div>

                </div>
                <div class=\"swiper-button-next\"></div>
                <div class=\"swiper-button-prev\"></div>

            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"timeline-content text-center max-900 mx-auto my-5\">
                        <div class=\"content show\" data-index=\"0\">
                            <h2 class=\"mb-5\">تأسيس النادي </h2>
                            <img src=\"assets/images/Mask Group 10.png\" class=\"img-fluid  \" alt=\"\">
                        </div>

                        <div class=\"content\" data-index=\"1\">
                            <h2 class=\"mb-5\">بطل منطقة المدينة المنورة للناشئين</h2>

                            <img src=\"assets/images/news2.png\" class=\"img-fluid  \" alt=\"\">
                        </div>
                        <div class=\"content\" data-index=\"2\">
                            <h2 class=\"mb-5\">وصيف بطل المملكة للناشئين</h2>

                            <img src=\"assets/images/Mask Group 10.png\" class=\"img-fluid  \" alt=\"\">
                        </div>
                        <div class=\"content\" data-index=\"3\">
                            <h2 class=\"mb-5\">بطل منطقة المدينة المنورة</h2>

                            <img src=\"assets/images/news2.png\" class=\"img-fluid  \" alt=\"\">
                        </div>
                        <div class=\"content\" data-index=\"4\">
                            <h2 class=\"mb-5\">بطل المدينة المنورة للموسم الثاني على التوالي</h2>

                            <img src=\"assets/images/Mask Group 10.png\" class=\"img-fluid  \" alt=\"\">
                        </div>
                        <div class=\"content\" data-index=\"5\">
                            <h2 class=\"mb-5\">بطل منطقة المدينة المنورة</h2>

                            <img src=\"assets/images/news2.png\" class=\"img-fluid  \" alt=\"\">
                        </div>
                        <div class=\"content\" data-index=\"6\">
                            <h2 class=\"mb-5\">بطل منطقة المدينة المنورة</h2>

                            <img src=\"assets/images/Mask Group 10.png\" class=\"img-fluid  \" alt=\"\">
                        </div>
                        <div class=\"content\" data-index=\"7\">
                            <h2 class=\"mb-5\">بطل منطقة المدينة المنورة</h2>

                            <img src=\"assets/images/news2.png\" class=\"img-fluid  \" alt=\"\">
                        </div>
                        <div class=\"content\" data-index=\"8\">
                            <h2 class=\"mb-5\">بطل منطقة المدينة المنورة</h2>

                            <img src=\"assets/images/Mask Group 10.png\" class=\"img-fluid  \" alt=\"\">
                        </div>
                        <div class=\"content\" data-index=\"9\">
                            <h2 class=\"mb-5\"></h2>
                            <img src=\"assets/images/news2.png\" class=\"img-fluid  \" alt=\"\">
                        </div>


                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- End TimeLine Section -->

    <!-- Start various-games Section -->

    <section class=\"various-games py-5 mt-5 wow animate__slideInUp\" data-wow-duration=\"1s\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"title text-center\">
                        <h2 class=\"text-white\">الألعاب المختلفة</h2>
                        <p class=\"text-white mt-3 max-500 m-auto mb-5\">
                            يؤسس نادي العلا إلى رفع الرياضات التنافسية الفردية والجماعية إلى 17 لعبة بحلول الموسم الرياضي 2028-2029. ويبرز من الألعاب المُفعلة حاليًا كرة قدم الصالات وكرة السلة وكرة الطائرة وكرة الطاولة وألعاب القوى ورماية السهام.
                        </p>
                    </div>
                </div>


            </div>
            <div class=\"swiper pb-4 \">
                <div class=\"swiper-wrapper\">
                    <div class=\"swiper-slide \">

                        <div class=\"image position-relative \">
                            <img class=\"img-fluid\" src=\"assets/images/L2tWTjDA.jpeg\" alt=\"\">
                            <h4 class=\"  fw-semibold  color-accent \">كرة قدم الصالات
                            </h4>
                        </div>

                    </div>
                    <div class=\"swiper-slide\">

                        <div class=\"image position-relative \">
                            <img class=\"img-fluid\" src=\"assets/images/r_AVKOEQ.jpeg\" alt=\"\">
                            <h4 class=\"  fw-semibold  color-accent \"> كرة الطائرة

                            </h4>
                        </div>
                    </div>
                    <div class=\"swiper-slide\">

                        <div class=\"image position-relative \">
                            <img class=\"img-fluid\" src=\"assets/images/كرة الطاولة.jpeg\" alt=\"\">
                            <h4 class=\"  fw-semibold  color-accent \"> كرة الطاولة

                            </h4>
                        </div>
                    </div>
                    <div class=\"swiper-slide\">

                        <div class=\"image position-relative \">
                            <img class=\"img-fluid\" src=\"assets/images/كرة السلة-min.JPG\" alt=\"\">
                            <h4 class=\"  fw-semibold  color-accent \"> كرة السلة

                            </h4>
                        </div>
                    </div>
                    <div class=\"swiper-slide\">
                        <div class=\"image position-relative \">
                            <img class=\"img-fluid\" src=\"assets/images/zxzlCP2Y.jpeg\" alt=\"\">
                            <h4 class=\"  fw-semibold  color-accent \">ألعاب القوى
                            </h4>
                        </div>

                    </div>
                    <div class=\"swiper-slide\">

                        <div class=\"image position-relative \">
                            <img class=\"img-fluid\" src=\"assets/images/EGuj6yCH.jpeg\" alt=\"\">
                            <h4 class=\"  fw-semibold  color-accent \">رماية السهام

                            </h4>
                        </div>

                    </div>

                </div>
                <div class=\"swiper-button-next next-1\"></div>
                <div class=\"swiper-button-prev prev-1\"></div>
            </div>
        </div>
    </section>
    <!-- End various-games Section -->

    <!-- start shop Section -->
    <section class=\"shop py-5 wow animate__slideInUp\" data-wow-duration=\"1s\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"title text-center mb-3 mb-md-5\">
                        <h2>المتجر</h2>
                    </div>
                </div>
            </div>
            <div class=\"row gx-md-3 gy-3\">
                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"card rounded-0 h-100\">
                        <div class=\"card-images\">
                            <img src=\"assets/images/shop-1.png\" class=\"card-img-1 img-fluid\" alt=\"...\">
                            <img src=\"assets/images/shop-1-1.png\" class=\"card-img-2 img-fluid\" alt=\"...\">

                        </div>
                        <div class=\"card-body\">
                            <p class=\"card-title mb-4\">ULA 3T قميص نادي العلا السعودي الثاني 2023
                            </p>
                            <div class=\"buttons d-flex justify-content-between align-items-center\">
                                <div class=\"price\">
                                    <span>120.00 </span> ر.س
                                </div>
                                <a target=\"_blank\" href=\"https://skillano.com/products/%D9%82%D9%85%D9%8A%D8%B5-%D9%86%D8%A7%D8%AF%D9%8A-%D8%A7%D9%84%D8%B9%D9%84%D8%A7-%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A-%D8%A7%D9%84%D8%AB%D8%A7%D9%86%D9%8A-2023\" class=\"btn btn-outline-secondary\"> احصل عليه</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"card rounded-0 h-100\">
                        <div class=\"card-images\">
                            <img src=\"assets/images/shop-2.png\" class=\"card-img-1 img-fluid\" alt=\"...\">
                            <img src=\"assets/images/shop-2-1.png\" class=\"card-img-2 img-fluid\" alt=\"...\">

                        </div>
                        <div class=\"card-body\">
                            <p class=\"card-title mb-4\">SK 1116 طقم تمرين رياضي نادي العلا السعودي 2023

                            </p>
                            <div class=\"buttons d-flex justify-content-between align-items-center\">
                                <div class=\"price\">
                                    <span>149.99</span> ر.س
                                </div>
                                <a target=\"_blank\" href=\"https://skillano.com/products/%D8%B7%D9%82%D9%85-%D8%AA%D9%85%D8%B1%D9%8A%D9%86-%D8%B1%D9%8A%D8%A7%D8%B6%D9%8A-%D9%86%D8%A7%D8%AF%D9%8A-%D8%A7%D9%84%D8%B9%D9%84%D8%A7-%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A-2023\" class=\"btn btn-outline-secondary\"> احصل عليه</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"card rounded-0 h-100\">
                        <div class=\"card-images\">
                            <img src=\"assets/images/shop-3.png\" class=\"card-img-1 img-fluid\" alt=\"...\">
                            <img src=\"assets/images/shop3-1.png\" class=\"card-img-2 img-fluid\" alt=\"...\">

                        </div>
                        <div class=\"card-body\">
                            <p class=\"card-title mb-4\">قميص نادي العلا السعودي 2023

                            </p>
                            <div class=\"buttons d-flex justify-content-between align-items-center\">
                                <div class=\"price\">
                                    <span>120.00</span> ر.س
                                </div>
                                <a target=\"_blank\" href=\"https://skillano.com/products/%D9%82%D9%85%D9%8A%D8%B5-%D9%86%D8%A7%D8%AF%D9%8A-%D8%A7%D9%84%D8%B9%D9%84%D8%A7-%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A-2023\" class=\"btn btn-outline-secondary\"> احصل عليه</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"card rounded-0 h-100\">
                        <div class=\"card-images\">
                            <img src=\"assets/images/shop-41.png\" class=\"card-img-1 img-fluid\" alt=\"...\">
                            <img src=\"assets/images/shop5.png\" class=\"card-img-2 img-fluid\" alt=\"...\">

                        </div>
                        <div class=\"card-body\">
                            <p class=\"card-title mb-4\"> SK 2103 سويت شيرت مع بنطلون نادي العلا السعودي 2023

                            </p>
                            <div class=\"buttons d-flex justify-content-between align-items-center\">
                                <div class=\"price\">
                                    <span>250.00</span> ر.س
                                </div>
                                <a target=\"_blank\" href=\"https://skillano.com/products/%D8%B3%D9%88%D9%8A%D8%AA-%D8%B4%D9%8A%D8%B1%D8%AA-%D9%85%D8%B9-%D8%A8%D9%86%D8%B7%D9%84%D9%88%D9%86-%D9%86%D8%A7%D8%AF%D9%8A-%D8%A7%D9%84%D8%B9%D9%84%D8%A7-%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A-2023\"
                                    class=\"btn btn-outline-secondary\"> احصل عليه</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"text-center mt-5 \">
                        <a target=\"_blank\" href=\"https://skillano.com/categories/625301/%D9%85%D8%AA%D8%AC%D8%B1-%D9%86%D8%A7%D8%AF%D9%8A-%D8%A7%D9%84%D8%B9%D9%84%D8%A7-%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A\" class=\"btn btn-outline-secondary show-all-product \"> تصفح جميع المنتجات </a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End shop Section -->

    <!-- start Media Center Section -->
    <section class=\"media-center portfolio my-5  \">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"title text-center mb-5\">
                        <h2> المكتبة المرئية </h2>
                    </div>
                </div>
            </div>
            <div class=\"row g-2\">
                <div class=\"col-md-6\">
                    <div class=\"portfolio-wrap\">

                        <img src=\"assets/images/photos/Pic1.JPG\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <!-- <h4>نادي العلا </h4>
                                <p>وصف وصف </p> -->
                        </div>
                        <a href=\"assets/images/photos/Pic1.JPG\" class=\"glightbox2\">
                            <div class=\"portfolio-links\">

                                <i class=\"fal fa-search-plus\"></i>

                            </div>
                        </a>

                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"portfolio-wrap  \">
                        <img src=\"assets/images/photos/Pic2.jpg\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <!-- <h4>نادي العلا </h4>
                                <p>وصف وصف </p> -->
                        </div>
                        <a href=\"assets/images/photos/Pic2.jpg\" class=\"glightbox2\">
                            <div class=\"portfolio-links\">
                                <i class=\"fal fa-search-plus\"></i>

                            </div>
                        </a>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"portfolio-wrap  \">
                        <img src=\"assets/images/photos/Pic3.jpg\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <!-- <h4>نادي العلا </h4>
                                <p>وصف وصف </p> -->
                        </div>
                        <a href=\"assets/images/photos/Pic3.jpg\" class=\"glightbox2\">
                            <div class=\"portfolio-links\">

                                <i class=\"fal fa-search-plus\"></i>

                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"col-md-3\">
                    <div class=\"portfolio-wrap \">
                        <img src=\"assets/images/photos/Pic4.jpg\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <!-- <h4>نادي العلا </h4>
                                                    <p>وصف وصف </p> -->
                        </div>
                        <a href=\"assets/images/photos/Pic4.jpg\" class=\"glightbox2\">
                            <div class=\"portfolio-links\">

                                <i class=\"fal fa-search-plus\"></i>

                            </div>
                        </a>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"portfolio-wrap video\">

                        <img src=\"assets/images/about.jpg\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <!-- <h4>نادي العلا </h4>
                                                        <p>وصف وصف </p> -->
                        </div>
                        <a href=\"assets/videos/Soon-First-Trophy.mp4\" class=\"glightbox2\">
                            <div class=\"portfolio-links\">

                                <i class=\"fal fa-search-plus\"></i>

                            </div>
                        </a>

                    </div>
                </div>

                <div class=\"col-md-3\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"assets/images/photos/Pic6.jpg\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <!-- <h4>نادي العلا </h4>
                                                                        <p>وصف وصف </p> -->
                        </div>
                        <a href=\"assets/images/photos/Pic6.jpg\" class=\"glightbox2\">
                            <div class=\"portfolio-links\">

                                <i class=\"fal fa-search-plus\"></i>

                            </div>
                        </a>
                    </div>
                </div>

                <div class=\"col-md-3\">
                    <div class=\"portfolio-wrap\">
                        <img src=\"assets/images/photos/Pic7.jpg\" class=\"img-fluid\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <!-- <h4>نادي العلا </h4>
                                                                        <p>وصف وصف </p> -->
                        </div>
                        <a href=\"assets/images/photos/Pic7.jpg\" class=\"glightbox2\">
                            <div class=\"portfolio-links\">


                                <i class=\"fal fa-search-plus\"></i>

                            </div>
                        </a>
                    </div>
                </div>

            </div>
    </section>

    <!-- End Media Center Section -->



    <!-- start alula-sport Section -->
    <div class=\"alula my-5 pt-md-5 wow animate__slideInUp\" data-wow-duration=\"1s\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"title text-center mb-4\">
                        <h2>الرياضة في العلا</h2>
                    </div>
                </div>
            </div>
            <div class=\"row gx-0\">
                <div class=\"col-md-6\">
                    <div class=\"image h-100  \">
                        <img class=\"img-fluid  h-100 obj-cover\" src=\"assets/images/MainImageSportsField-Compressed.jpg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"text py-4 px-4 text-white h-100  \">
                        <h4 class=\"mb-2\">الملاعب المجتمعية</h4>
                        <p class=\"p1 mb-4\">تتوفر خيارات ممارسة الرياضة في محافظة العلا؛ بصورة غير مسبوقة، مع وجود 4 مجمعات رياضية، تتوزع جغرافيا لتخدم كافة الأحياء؛ وتعرف باسم \"الملاعب المجتمعية\" ضمن مخرجات استراتيجية العلا للرياضة، الهادفة لتقديم الدعم الرياضي لأهالي العلا،
                            إلى جانب تفعيل المشاركة المجتمعية في الرياضة. وينتظم نحو 300 من المستفيدين في الوقت الحالي، تحت إشراف 10 من المؤهلين فنيًا وإداريًا من أبناء العلا. وتشهد الملاعب المجتمعية إقامة البرامج والانشطة التدريبية داخل الملاعب. </p>
                        <h4>
                            كيف اصل للملاعب
                        </h4>
                        <ul class=\" flex-wrap d-flex justify-content-between align-items-center list-unstyled\">
                            <li>
                                <a href=\"\">
                                    <i class=\"fas fa-map-marker-alt\"></i>
                                    <span>ملعب المحاش</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"\">
                                    <i class=\"fas fa-map-marker-alt\"></i>
                                    <span>ملعب الصخيرات</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"\">
                                    <i class=\"fas fa-map-marker-alt\"></i>

                                    <span>ملعب الإسكان</span>
                                </a>
                            </li>

                            <li>
                                <a href=\"\">
                                    <i class=\"fas fa-map-marker-alt\"></i>

                                    <span>ملعب العذيب</span> </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"row mt-4 gy-3\">
                <div class=\"col-md-4\">
                    <div class=\"image h-100\">
                        <img class=\"img-fluid h-100 obj-cover\" src=\"assets/images/alula/CSR-4.jpg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"image h-100\">
                        <img class=\"img-fluid h-100 obj-cover\" src=\"assets/images/alula/CSR-5.jpg\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"image h-100\">
                        <img class=\"img-fluid h-100 obj-cover\" src=\"assets/images/alula/CSR-3.jpg\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End alula-sport Section -->

    <!-- Start footer  section-->
    <footer class=\"pt-5 overflow-hidden position-relative\">
        <div class=\"top-footer position-relative py-md-5 py-3\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-8\">
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <div class=\"footer-memu\">
                                    <h3 class=\"mb-4\">عن النادي</h3>
                                    <ul class=\"d-grid gap-2 list-unstyled\">
                                        <li>
                                            <a href=\"./history.html\">
                                                التأسيس
                                            </a>

                                        </li>
                                        <li><a href=\"./leaders.html\">
                                                قيادات النادي
                                            </a>
                                        </li>
                                        <li><a href=\"./achievements.html\">
                                                الإنجازات
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"./academy.html\">
                                                الأكاديمية
                                            </a>

                                        </li>
                                        <li>
                                            <a href=\"./social.html\">
                                                المسؤولية المجتمعية
                                            </a>

                                        </li>
                                        <li>
                                            <a target=\"_blank\" href=\"https://skillano.com/categories/625301/%D9%85%D8%AA%D8%AC%D8%B1-%D9%86%D8%A7%D8%AF%D9%8A-%D8%A7%D9%84%D8%B9%D9%84%D8%A7-%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A\">
                                                المتجر
                                            </a>

                                        </li>

                                    </ul>
                                </div>
                            </div>

                            <div class=\"col-md-4\">
                                <div class=\"footer-memu\">
                                    <h3 class=\"mb-4\"> المركز الاعلامي </h3>
                                    <ul class=\"d-grid gap-2 list-unstyled\">
                                        <li>
                                            <a href=\"./news.html\">
                                                الأخبار
                                            </a>

                                        </li>
                                        <li><a href=\"./media-center.html\">
                                                المكتبة المرئية

                                            </a>
                                        </li>
                                        <li><a target=\"_blank\" href=\"https://www.experiencealula.com/ar\">
                                                تعرف على العلا
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            <div class=\"col-md-4\">
                                <div class=\"footer-memu\">
                                    <h3 class=\"mb-lg-5 mb-4\"> شركاؤنا </h3>
                                    <div class=\"d-grid d-lg-flex gap-3\">
                                        <img class=\"img-fluid\" width=\"120\" src=\"assets/images/experience_alula-_-استكشف-العلا-logo.webp\" alt=\"\">
                                        <img class=\"img-fluid\" width=\"120\" src=\"assets/images/svgexport-1.webp\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 mt-5 mt-md-0\">
                        <dov class=\"footer-logo d-flex align-items-center justify-content-lg-end justify-content-center h-100\">
                            <img src=\"assets/images/logo.svg\" class=\"img-fluid\">
                        </dov>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"bottom-footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <p class=\"m-0 py-4\">جميع الحقوق محفوظة لنادي العلا الرياضي السعودي</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js \"></script>
    <script src=\"https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js \"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.bundle.min.js \"></script>
    <script src=\"assets/js/wow.min.js\"></script>
    <script src=\"assets/js/script.js \"></script>

</body>

</html>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/alula_theme/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 78,  101 => 77,  97 => 76,  93 => 75,  67 => 52,  64 => 51,  60 => 42,  58 => 41,  53 => 40,  51 => 39,  49 => 35,  48 => 34,  47 => 33,  46 => 32,  45 => 31,  44 => 30,  43 => 29,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/alula_theme/templates/html.html.twig", "/Applications/MAMP/htdocs/drupal91/web/themes/custom/alula_theme/templates/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29, "if" => 39);
        static $filters = array("clean_class" => 31, "escape" => 40);
        static $functions = array("attach_library" => 40);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
