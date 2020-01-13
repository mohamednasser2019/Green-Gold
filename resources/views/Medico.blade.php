@extends('medico_temp')

@section('content')
    <div id="wrapper">

        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="background-color:darkgreen;">
            <div class="top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <img src="{{ asset('public/img/googleplaybadge.png')}}" width="150" height="60">
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <h3 class="bold text-right">جرين جولد للمشروعات الزراعية</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container navigation">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a>
                        <img src="{{ asset('public/img/logo.png')}}" alt="logo" width="190" height="80"/>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        {{--                        <li><a href="#activities">نشاط الشركة</a></li>--}}
                        <li><a href="#facilities">خدماتنا</a></li>
                        <li><a href="#testimonial">المعارض الدولية</a></li>
                        <li><a href="#news">الأخبار والاحداث</a></li>
                        <li><a href="#partner">شركاء</a></li>
                        <li><a href="#service">مقالات</a></li>
                        <li><a href="#doctor">منتجاتنا</a></li>
                        <li><a href="#aboutUs">عن الشركة</a></li>
                        <li class="active"><a href="#slider">الرئيسيه</a></li>

                    </ul>
                </div>

                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <section id="slider" data-stellar-background-ratio="0.5">
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="https://source.unsplash.com/LAaSoL0LrYs/1920x1080">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="display-4">First Slide</h2>
                            <p class="lead">This is a description for the third slide.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="https://source.unsplash.com/bF2vsubyHcQ/1920x1080">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="display-4">Second Slide</h2>
                            <p class="lead">This is a description for the second slide.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="https://source.unsplash.com/bF2vsubyHcQ/1920x1080">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="display-4">Thrid Slide</h2>
                            <p class="lead">This is a description for the second slide.</p>
                        </div>
                    </div>
                </div>

                <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>

            </div>
        </section>

        <!-- /Section: intro -->
        <!--aboutUs-->
        <section id="aboutUs" class="home-section paddingtop-40">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="callaction bg-gray">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                                        <h3 style="text-align: center;color:green;">عن الشركة</h3>
                                        <div class="text-right">
                                            <p class="text-bold" style="text-align: center; font-size: 17px;"
                                               id="about">
                                                جرين جولد للتوكيلات التجارية والزراعية شركة مصرية متخصصة في تغذية
                                                النباتات
                                                والحماية من الأمراض وعلامة تجارية مسجلة "جرين جولد" , تميزت من خلال سجل
                                                حافل
                                                من النجاحات المستمره منذ إنشائها عام2005 ، بدعم السوق المصرية والعربية
                                                والافريقية بالخدمات الموثوقة والمنتجات المميزة. الشركة رائده فى السوق
                                                المصرية بتخصصها فى خدمه مزارعى نظم الزراعة العضوية و الجلوبال جاب بشكل
                                                خاص
                                                والسوق الزراعية بشكل عام بتقديم توليفة من المدخلات الزراعية المتميزة
                                                والمتوافقة مع متطلبات المجلس التصديري للحاصلات الزراعية المصرية والهيئة
                                                القومية لسلامة الغذاء المصرية ، من اسمدة ومخصبات ومبيدات زراعية اساسية
                                                ومتخصصة بشقيها الكميائي والعضوي لدعم عملاؤنا مصدري الحاصلات الزراعية
                                                ونحرص
                                                على إنتقاء الشركاء المتخصصين فى هذا المجال لضمان جوده المنتجات والتى تفي
                                                بهذه الاغراض كذلك تقديم الدعم الفنى عن طريق انتشار فروعنا ومهندسينا
                                                بكافة
                                                المناطق الزراعية وعقد الندوات وورش العمل والأيام الحقلية بالتعاون مع
                                                كبرى
                                                الشركات العالمية فى المناطق الزراعية المختلفة
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="callaction bg-gray">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                                        <h3 style="text-align: center;color:green;">
                                            لماذا تختار جرين جولد في مشروعاتك واعمالك الزراعية ؟
                                        </h3>
                                        <ul class="list-group">
                                            <ol style="text-align: center; font-size: 17px;">
                                                لأننا متخصصون فى تغذية النباتات والحماية من الأمراض من خلال سجل حافل من
                                                النجاحات المستمره منذ عام 2005 ، بدعم السوق المصرية والعربية والافريقية
                                                بالخدمات الموثوقة والمنتجات المميزة
                                            </ol>
                                            <ol style="text-align: center; font-size: 17px;">
                                                الشركة رائده فى السوق المصرية بتخصصها فى خدمه مزارعى نظم الزراعة العضوية
                                                و الجلوبال جاب بشكل خاص والسوق الزراعية بشكل عام بتقديم توليفة من
                                                المدخلات الزراعية المتميزة والمتوافقة مع متطلبات المجلس التصديري
                                                للحاصلات الزراعية المصرية والهيئة القومية لسلامة الغذاء المصرية ، من
                                                اسمدة ومخصبات وكيماويات ومبيدات زراعية اساسية ومتخصصة بشقيها الكميائي
                                                والعضوي لدعم عملاؤنا مصدري الحاصلات الزراعية ونحرص على إنتقاء الشركاء
                                                المتخصصين فى هذا المجال لضمان جوده المنتجات والتى تفي بهذه الاغراض
                                            </ol>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="callaction bg-gray">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                                        <h3 style="text-align: center;color:green;">
                                            رسالتنا
                                        </h3>
                                        <p class="text-bold" style="text-align: center; font-size: 17px;">
                                            تقديم الحلول المبتكرة ذات الجودة العالية والمعرفة اللازمة لزيادة الإنتاجية
                                            والوقاية من الأمراض باستخدام أفضل التكنولوجيات الراقية والعالمية المتوافقة
                                            مع أنظمة الزراعات العضوية
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="callaction bg-gray">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                                        <h3 style="text-align: center;color:green;">
                                            رؤيتنا
                                        </h3>
                                        <p class="text-bold" style="text-align: center; font-size: 17px;">
                                            أن نكون الرقم الأول في العالم في توفير حلول مبتكرة في مجال تغذية النباتات
                                            والحماية من الأمراض
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="callaction bg-gray">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                                        <h3 style="text-align: center;color:green;">
                                            قيمنا
                                        </h3>
                                        <div class="wow fadeInUp" data-wow-delay="0.2s" style="text-align: center;">
                                            <h3 style="color:green;">العمل بروح الفريق الواحد</h3>
                                            <p style="text-align: center; font-size: 17px;">نحن نؤمن بالعمل الجماعي
                                                والعمل كفريق واحد حيث أنه لا يوجد حدود للطاقة
                                                التعاونية لدينا. ونقوم بتحقيق التميز والنجاح من خلال وضع الأهداف
                                                الجماعية
                                                فوق كل المصالح الشخصية. ونقوم أيضاً بدعم وتشجيع التواصل المفتوح والتعاون
                                                الجاد بين الزملاء من مختلف الخلفيات والتخصصات</p>
                                        </div>
                                        <div class="wow fadeInUp" data-wow-delay="0.2s" style="text-align: center;">
                                            <h3 style="color:green;">النزاهة</h3>
                                            <p style="text-align: center; font-size: 17px;">نحن نحترم اتفاقاتنا ونحن
                                                صادقين في اتصالاتنا.</p>
                                        </div>
                                        <div class="wow fadeInUp" data-wow-delay="0.2s" style="text-align: center;">
                                            <h3 style="color:green;">الأداء</h3>
                                            <p style="text-align: center; font-size: 17px;">نحن نسعى جاهدين من أجل
                                                التحسين المستمر في أداء العمل لدينا، ونقوم بقياس
                                                النتائج بعناية فائقة،</p>
                                        </div>
                                        <div class="wow fadeInUp" data-wow-delay="0.2s" style="text-align: center;">
                                            <h3 style="color:green;">التركيز على العملاء</h3>
                                            <p style="text-align: center; font-size: 17px;">نحن نتجاوز توقعات العملاء
                                                للقيمة والخدمة. نحن نبني ونحافظ على علاقاتنا مع
                                                العملاء ونضمن رضا العملاء على المدى الطويل</p>
                                        </div>
                                        <div class="wow fadeInUp" data-wow-delay="0.2s" style="text-align: center;">
                                            <h3 style="color:green;">الابتكار</h3>
                                            <p style="text-align: center; font-size: 17px;">نحن نسعى دائما إلى إيجاد سبل
                                                مبتكرة من أجل تعزيز منتجاتنا وخدماتنا،
                                                وتقديم
                                                قيمة لعملائنا. ونسعى أيضاً من أجل التعلم المستمر وذلك بواسطة التكييف
                                                والتأقلم مع المعرفة الحالية، وكذلك من خلال البحث والتجريب، مع الفهم
                                                الكامل
                                                أننا نتعلم من أخطائنا وكذلك أيضاً نتعلم من النجاحات التي قمنا
                                                بتحقيقها</p>
                                        </div>
                                        <div class="wow fadeInUp" data-wow-delay="0.2s" style="text-align: center;">
                                            <h3 style="color:green;">الجودة</h3>
                                            <p style="text-align: center; font-size: 17px;">الجودة هي أمر راسخ ومتأصل في
                                                العمل من خلال زملائنا وجميع قيمنا. نمتلك شغف
                                                الجودة التي لا هوادة فيها في كل شيء نقوم بعمله</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--endAbout Us-->
        <!-- Section: boxes -->
        <section id="boxes" class="home-section paddingtop-80">

            <div align="center">
                <h3 style="color:green;"> تتنوع خدمات شركة جرين جولد في المجال الزراعي وخدمة المشروعات الزراعية حيث نوفر
                    الخدمات التالية
                </h3>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="box text-center">
                                <img src="{{ asset('public/img/icon/1.png')}}" alt="" width="40" height="40"/>
                                <br><br>
                                <h6 class="h-bold" style="color:green;">نظم الزراعه الحديثة</h6>
                                <p>
                                    نظم الزراعه الحديثة
                                    لدينا كل ماهو جديد فى الزراعةداخل الصوب والبيوت المحميه والانفاق وكذلك انظمه الزراعة
                                    بدون تربة(هيدروبونيك والايربونيك) وزراعة الاسطح

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="box text-center">
                                <img src="{{ asset('public/img/icon/2.png')}}" alt="" width="40" height="40"/>
                                <br><br>
                                <h4 class="h-bold" style="color:green;">
                                    الكيماويات الزراعية
                                </h4>
                                <p>
                                    الجديد فى الكيماويات الزراعية ومعالجات الملوحة ومحسنات التربة والعمل على تطويرها
                                    بأحدث اساليب طرق الادارة الحديثة والمتقدمة
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="box text-center">
                                <img src="{{ asset('public/img/icon/3.png')}}" alt="" width="40" height="40"/>
                                <br><br>
                                <h4 class="h-bold" style="color:green;">الاسمدة والمخصبات</h4>
                                <p>
                                    لدينا كل ماهو جديد فى مجال الاسمدة الكيماوية والمركبات العضويةوالفولفات والهيومات
                                    ومستخلصات طحالب بحرية والاحماض الامينية </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="box text-center">

                                <img src="{{ asset('public/img/icon/4.png')}}" alt="" width="40" height="40"/>
                                <br><br>
                                <h4 class="h-bold" style="color:green;">المبيدات الزراعية</h4>
                                <p>
                                    تقديم خدمات المبيدات الزراعية الحيوية والعضوية والكيميائية التي تحتاج اليها الاراضي
                                    الزراعية التي تتميز بالجودة والفعاليه
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /Section: boxes -->
        <!-- Section: team -->
        <section id="doctor" class="home-section bg-gray paddingbot-60">
            <div class="container marginbot-50">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="section-heading text-center">
                                <h2 class="h-bold" style="color:green;">المنتجات</h2>
                            </div>
                        </div>
                        <div class="divider-short">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                            <p class="text-bold" style="text-align: center; font-size: 17px;">
                                جرين جولد للمشروعات الزراعية تعمل لأكثر من خمسة عشرة عاماً مع كبرى مختبرات الابحاث
                                والتطوير فى المركبات السمادية السائلة والمخصبات كذلك الأسمدة البودرة والمدعمة بالعناصر
                                الصغرى والهيوميك والفالفيك أسيد والأسمدة العضوية ومنظمات النمو النباتية. يتم تطوير هذه
                                المستحضرات باستخدام أحدث التقنيات لاستخلاص البروتينات النباتية، والإنزيمات الطبيعية
                                والأحماض العضوية المعقدة والكربوهيدرات والفيتامينات والهرمونات والعناصر الغذائية
                                والطحالب البحرية والاحماض الأمينية ومنظمات النمو الطبيعية والأكسينات والسيتوكينينات
                                والاندولات. يتم استخدام صور مختلفة من هذه المكونات في صياغة أكثر من 50 منتج مختلف، وخاصة
                                المنتجات العضوية الجديدة المصممة لحماية المحاصيل من الأمراض وزيادة الإنتاج
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="filters-container" class="cbp-l-filters-alignRight">
                            <div data-filter="*" class="cbp-filter-item">كل المنتجات
                                ({{ count($data['Product'])+1 }})
                            </div>
                            @foreach($data['Category'] as $cat)
                                @if($cat->id==5)
                                    <div data-filter=".{{$cat->id}}"
                                         class="cbp-filter-item-active cbp-filter-item">{{$cat->category_name}}
                                        (
                                        <div class="cbp-filter-counter"></div>
                                        )
                                    </div>
                                @else
                                    <div data-filter=".{{$cat->id}}" class="cbp-filter-item">{{$cat->category_name}}
                                        (
                                        <div class="cbp-filter-counter"></div>
                                        )
                                    </div>
                                @endif
                            @endforeach
                            <br><br>

                            <div id="grid-container" class="cbp-l-grid-team">
                                <ul>
                                    @foreach($data['Product'] as $product)

                                        <li class="cbp-item {{$product->getCategory->id}} ">
                                            <a href="{{ URL::to('product/'.$product->id)}}"
                                               class="cbp-caption cbp-singlePage">
                                                <div class="cbp-caption-defaultWrap">
                                                    <img
                                                        src="{{asset('public/uploads/Products_Images/'.$product->product_img)}}"
                                                        alt="" width="100%">
                                                </div>
                                                <div class="cbp-caption-activeWrap">
                                                    <div class="cbp-l-caption-alignCenter">
                                                        <div class="cbp-l-caption-body">
                                                            <div class="cbp-l-caption-text">عرض المنتج</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{URL::to('product/'.$product->id)}}"
                                               class="cbp-singlePage cbp-l-grid-team-name">{{$product->product_name}}</a>
                                            <div
                                                class="cbp-l-grid-team-position">{{ $product->getCategory->category_name }}</div>
                                        </li>

                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- /Section: team -->
        <!-- Section: works -->
        <section id="facilities" class="home-section paddingbot-60">
            <div class="container marginbot-50">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="section-heading text-center">
                                <h2 class="h-bold" style="color:green;">خدماتنا</h2>
                                <p>تتنوع خدمات شركة جرين جولد في المجال الزراعي وخدمة المشروعات الزراعية بتوفير الخدمات
                                    التالي</p>
                            </div>
                        </div>
                        <div class="divider-short"></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="box text-center">
                                <img src="{{ asset('public/img/icon/services/1.png')}}" width="60" height="60"/>
                                <br><br>
                                <h4 class="h-bold" style="color:green;">تطبيقات التليفون المحمول</h4>
                                <p>
                                    أول شركة زراعية مصرية تقدم تطبيق خاص بخدمات الشركة المختلفة لكافة العملاء في مصر
                                    والشرق الأوسط وأفريقيا على متجر جوجل بلاي لنكون الأقرب اليكم</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="box text-center">
                                <img src="{{ asset('public/img/icon/services/2.png')}}" width="60" height="60"/>
                                <br><br>
                                <h4 class="h-bold" style="color:green;"> الكيماويات الزراعية</h4>
                                <p>
                                    الجديد في الكيماويات الزراعية ومعالجات الملوحة ومحسنات التربة والعمل على تطويرها
                                    بأحدث اساليب طرق الادارة الحديثة والمتقدمة </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="box text-center">
                                <img src="{{ asset('public/img/icon/services/3.png')}}" width="60" height="60"/>
                                <br><br>
                                <h4 class="h-bold" style="color:green;">الاسمدة والمخصبات </h4>
                                <p>
                                    لدينا كل ما هو جديد في مجال الاسمدة الكيماوية والمركبات العضوية والفولفات والهيومات
                                    ومستخلصات لطحالب البحرية والاحماض الامينية</div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="box text-center">

                                <img src="{{ asset('public/img/icon/services/4.png')}}" width="60" height="60"/>
                                <br><br>

                                <h4 class="h-bold" style="color:green;">بدائل المبيدات الزراعية</h4>
                                <p>
                                    تقديم خدمات بدائل المبيدات الزراعية الحيوية والعضوية والكيميائية التي تحتاج اليها
                                    الاراضي الزراعية التي تتميز بالجودة والفعالية
                                </p>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="col-sm-3 col-md-3">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="box text-center">
                                <img src="{{ asset('public/img/icon/services/5.png')}}" width="60" height="60"/>
                                <br><br>
                                <h4 class="h-bold" style="color:green;">نظم الزراعة الحديثة</h4>
                                <p>
                                    لدينا كل ما هو جديد في انظمة الزراعات المحورية والزراعات المحمية والانفاق وكذلك
                                    انظمة الزراعة بدون تربة (هيدروبونيك والايربونيك)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- /Section: works -->

        <!-- Section: testimonial -->

        <section id="testimonial" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">

            <div class="carousel-reviews broun-block">

                <div class="container">
                    <div class="row">
                        <div id="carousel-reviews" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="block-text rel zmin">
                                            <a title="" href="#">معرض الدولي للزراعة والثروة الحيوانية- أزمير- تركيا
                                                2013</a>

                                            <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                        </div>
                                        <div class="person-text rel text-light">
                                            <img src="{{ asset('public/img/turkey.jpg')}}" alt=""
                                                 class="person img-circle"/>
                                            <a title="">تركيا</a>
                                            <span>2013</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 hidden-xs">
                                        <div class="block-text rel zmin">
                                            <a title="" href="#">معرض شنغهاي الدولي للكيماويات والمبيدات الزراعية -
                                                الصين 2014</a>

                                            <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                        </div>
                                        <div class="person-text rel text-light">
                                            <img src="{{ asset('public/img/china.jpg')}}" alt=""
                                                 class="person img-circle"/>
                                            <a title="" href="#">الصين</a>
                                            <span>2014</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                        <div class="block-text rel zmin">
                                            <a title="">معرض صحاري الدولي الزراعي لأفريقيا والشرق الأوسط - مصر 2015</a>

                                            <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                        </div>
                                        <div class="person-text rel text-light">
                                            <img src="{{ asset('public/img/africa.jpg')}}" alt=""
                                                 class="person img-circle"/>
                                            <a title="">مصر</a>
                                            <span>2015</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="block-text rel zmin">
                                            <a title="">معرض جروتيك اورواسيا الدولي للتقنيات والمعدات والزراعات المحمية
                                                – انطاليا - تركيا 2016</a>

                                            <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                        </div>
                                        <div class="person-text rel text-light">
                                            <img src="{{ asset('public/img/turkry2016.jpg')}}" alt=""
                                                 class="person img-circle"/>
                                            <a title="" href="#">تركيا</a>
                                            <span>2016</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 hidden-xs">
                                        <div class="block-text rel zmin">
                                            <a title="" href="#">معرض صحاري الدولي الزراعي لأفريقيا والشرق الأوسط - مصر
                                                2016</a>

                                            <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                        </div>
                                        <div class="person-text rel text-light">
                                            <img src="{{ asset('public/img/egypt2016.jpg')}}" alt=""
                                                 class="person img-circle"/>
                                            <a title="">مصر</a>
                                            <span>2016</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 hidden-xs">
                                        <div class="block-text rel zmin">
                                            <a title="">معرض الاسكندرية الدولي للزراعة والثروة الحيوانية ومستلزماتها –
                                                أجرواليكس - الاسكندرية - مصر 2017 </a>

                                            <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                        </div>
                                        <div class="person-text rel text-light">
                                            <img src="{{ asset('public/img/egypt2016.jpg')}}" alt=""
                                                 class="person img-circle"/>
                                            <a title="">مصر</a>
                                            <span>2017</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="item">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="block-text rel zmin">
                                            <a title="">معرض جروتيك اورواسيا الدولي للتقنيات والمعدات والزراعات المحمية
                                                – انطاليا - تركيا 2018</a>

                                            <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                        </div>
                                        <div class="person-text rel text-light">
                                            <img src="{{ asset('public/img/turkry2016.jpg')}}" alt=""
                                                 class="person img-circle"/>
                                            <a title="">تركيا</a>
                                            <span>2018</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 hidden-xs">
                                        <div class="block-text rel zmin">
                                            <a title="">معرض الاسكندرية الدولي للزراعة والثروة الحيوانية ومستلزماتها –
                                                أجرو اليكس - الاسكندرية - مصر 2018</a>

                                            <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                        </div>
                                        <div class="person-text rel text-light">
                                            <img src="{{ asset('public/img/egypt2016.jpg')}}" alt=""
                                                 class="person img-circle"/>
                                            <a title="">مصر</a>
                                            <span>2018</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 hidden-xs">
                                        <div class="block-text rel zmin">
                                            <a title="">معرض أجري دلتا الزراعي-المنصورة - مصر 2019</a>

                                            <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                        </div>
                                        <div class="person-text rel text-light">
                                            <img src="{{ asset('public/img/egypt2016.jpg')}}" alt=""
                                                 class="person img-circle"/>
                                            <a title="">مصر</a>
                                            <span>2019</span>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section: testimonial -->
        <section id="partner" class="home-section paddingbot-60">
            <div class="container marginbot-50">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                            <div class="section-heading text-center">
                                <h2 class="h-bold" style="color:green;">Our partner</h2>
                                <p>Take charge of your health today with our specially designed health packages</p>
                            </div>
                        </div>
                        <div class="divider-short"></div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="partner">
                            <a href="#"><img src="{{ asset('public/img/dummy/partner-1.jpg')}}" alt=""/></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="partner">
                            <a href="#"><img src="{{ asset('public/img/dummy/partner-2.jpg')}}" alt=""/></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="partner">
                            <a href="#"><img src="{{ asset('public/img/dummy/partner-3.jpg')}}" alt=""/></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="partner">
                            <a href="#"><img src="{{ asset('public/img/dummy/partner-4.jpg')}}" alt=""/></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section: activities -->
    {{--        <section id="activities" class="home-section nopadding paddingtop-60">--}}

    {{--            <div class="container">--}}
    {{--                <div class="row">--}}
    {{--                    <div class="col-md-12">--}}
    {{--                        <div class="callaction bg">--}}
    {{--                            <div class="row">--}}
    {{--                                <div class="col-md-12">--}}
    {{--                                    <div class="wow fadeInUp" data-wow-delay="0.2s" style="text-align: center;">--}}
    {{--                                        <h3 style="color:green;">نشاط الشركة</h3>--}}
    {{--                                        <p>--}}
    {{--                                            جرين جولد للتوكيلات التجارية والزراعية تعمل لأكثر من خمسة عشرة عاماً من--}}
    {{--                                            الأبحاث والتطوير تميزت الشركة فى المركبات السمادية السائلة والمخصبات كذلك--}}
    {{--                                            الأسمدة البودرة والمدعم بالعناصر الصغرى والهيوميك والفالفيك أسيد والأسمدة--}}
    {{--                                            العضوية ومنظمات النمو النباتية. منذ عام 2005، يتم تطوير هذه المستحضرات--}}
    {{--                                            باستخدام أحدث التقنيات لاستخلاص البروتينات النباتية، والإنزيمات الطبيعية--}}
    {{--                                            والأحماض العضوية المعقدة والكربوهيدرات والفيتامينات والهرمونات والعناصر--}}
    {{--                                            الغذائية والطحالب البحرية والاحماض الأمينية ومنظمات النمو الطبيعية--}}
    {{--                                            والأكسينات والسيتوكينينات والاندولات. يتم استخدام صور مختلفة من هذه المكونات--}}
    {{--                                            في صياغة أكثر من 50 منتج مختلف، وخاصة المنتجات العضوية الجديدة المصممة--}}
    {{--                                            لحماية المحاصيل من الأمراض وزيادة الإنتاج. جرين جولد تعمل في كل من مصر--}}
    {{--                                            والخارج بفريق من المهندسين الزراعيين المتخصصين الذين يعملون جنبا إلى جنب مع--}}
    {{--                                            التجار والموزعين لتنفيذ المبادئ التوجيهية التقنية، تلك التي تعتمد على ظروف--}}
    {{--                                            التربة والطقس في المنطقة. كذلك توفر شركة جرين جولد التدريب والتحديث في مختلف--}}
    {{--                                            جوانب التغذية والحماية للمحاصيل وعلى الاستخدام الصحيح للمنتجات. كما تنظم--}}
    {{--                                            اجتماعات محددة ودورات تنشيطية للفنيين والموزعين والمزارعين. ويستند التعاون--}}
    {{--                                            والحوار مع العملاء على الثقة المتبادلة ويمثل ذلك تحديا للابتكار لدينا.--}}
    {{--                                            فلسفتنا هي المساعدة وتقديم المشورة، ولكن أيضا مع الاستماع وتبادل الآراء--}}
    {{--                                            للوصول إلى زراعة محاصيل صحية باستخدام القليل من الأسمدة والمبيدات وتوفير--}}
    {{--                                            المال للمزارعين--}}
    {{--                                        </p>--}}
    {{--                                    </div>--}}

    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </section>--}}
    <!-- /Section: activities -->

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="widget">
                                <h5>المستشارون الدوليون</h5>
                                <p>
                                    جرين جولد على روابط قوية بكبرى بيوت الخبرة العالمية في مجال تقييم المركبات والحلول
                                    المتكاملة والمبتكرة المتوافقة مع المعايير الأوروبية والأمريكية
                                </p>
                            </div>
                        </div>
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="widget">
                                <h5>رسالتنا
                                </h5>
                                <ul>
                                    تقديم الحلول المبتكرة ذات الجودة العالية والمعرفة اللازمة لزيادة الإنتاجية والوقاية
                                    من الأمراض باستخدام أفضل التكنولوجيات الراقية والعالمية المتوافقة مع أنظمة الزراعات
                                    العضوية
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="widget">
                                <h5>رؤيتنا</h5>
                                <p>
                                    أن نكون الرقم الأول في العالم في توفير حلول مبتكرة في مجال تغذية النباتات والحماية
                                    من الأمراض
                                </p>
                                <h5>المكتب العلمي
                                </h5>
                                <ul>
                                    <li>
                <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
            </span> مدينة السادات – مول دار مصر
                                    </li>
                                    <li>
                <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
            </span> 01002258499 – 01002275528
                                    </li>
                                    <li>
                <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
            </span> info@greengold-egy.com
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="widget">
                                <h5>الإدارة والمبيعات</h5>
                                <ul>
                                    <li>
                    <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
                                </span>مدينة العاشر من رمضان - المجاورة 38 - فيلا 52
                                    </li>
                                    <li>
                    <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                                </span> 01002256673 – 0554385492
                                    </li>
                                    <li>
                    <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-fax -o fa-stack-1x fa-inverse"></i>
                                </span> 0554385494
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <h5>
                                الأيام الحقلية
                            </h5>
                            <p>
                                يوجد للشركة برامج حقلية وارشادية طوال العام في كافة ربوع الجمهورية للتوعية بأهمية
                                تطبيقات الزراعة الحديثة والنظيفة للوصول إلى منتج نهائي خالي من متبقيات الكيماويات وصالح
                                للاستهلاك المحلى والتصدير


                            </p>
                        </div>
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="widget">
                                <h5>Follow us</h5>
                                <ul class="company-social">
                                    <li class="social-facebook"><a href="https://www.facebook.com/GreenGoldOfficial/"
                                                                   target="_blank"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="social-twitter"><a href="https://twitter.com/GreenGo27632283"
                                                                  target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-instagram"><a
                                            href="https://www.instagram.com/greengoldcompany616/" target="_blank"><img
                                                src="{{asset('public/img/instagram.png')}}" alt="" width="40"
                                                height="40"/></a></li>
                                    <li class="social-linkedin"><a
                                            href="https://www.linkedin.com/in/green-gold-company-495429199/"
                                            target="_blank"> <img src="{{asset('public/img/linkedin.png')}}" alt=""
                                                                  width="40" height="40"/></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="wow fadeInLeft" data-wow-delay="0.1s">
                                <div class="text-left">
                                    <p>&copy;Copyright -Titan & 4M All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="wow fadeInRight" data-wow-delay="0.1s">
                                <div class="text-right">
                                    <div class="credits">
                                        Designed & Developed by <a>Titan & 4M</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
