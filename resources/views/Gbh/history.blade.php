@extends('Gbh.site')

@section('resources')
@stop



@section('content')

    <title>团队经历</title>
    <div >
        <div class="site-header">
            <div class="site-menu-nav">
                <div>
                    <a href="/"><span>首页</span></a>
                    <a href="/newArticles">
                        <span>最新文章</span>
                    </a>
                    <a href="/booking"><span>酒店预定</span></a>
                    <a href="/aboutUs"><span>关于我们</span></a>

                </div>
            </div>
            <div class="mobile-menu-nav">
                <i class="sidebar icon large"></i>
            </div>
        </div>



        <div class="ui container">

            <div class="about-menu-nav">


                <a href="/aboutUs" class="dark-anchor"><span>关于我们</span></a>
                <a href="/team" class="dark-anchor"><span>团队介绍</span></a>
                <a href="/history"  class="dark-anchor"><span>团队经历</span></a>
                <a href="/joinUs"  class="dark-anchor"><span>加入我们</span></a>
                <a href="/contactUs"  class="dark-anchor"><span>联系我们</span></a>

            </div>

            <div class="padding-80"></div>




            <div class="history-box">


                <div class="first-show">
                    <div class="auto-margin history-people">
                        <img src = 'Gbh/img/ming.png' >
                    </div>
                    <div class="vertical-line auto-margin">
                    </div>
                    <div class=" history-detail ">
                        <div class="year auto-margin">
                            2015/06
                        </div>
                        <div class="desc-right">
                            2015年6月的一天，小明同学突然想做一件对酒店业很有意义的一件事，那就是成立一个精品酒店联盟
                        </div>
                    </div>
                </div>


                <div class="vertical-line auto-margin">
                </div>
                <div class=" history-detail ">
                    <div class="auto-margin logo-img">
                        <img src = 'Gbh/img/logo.png' >
                    </div>
                    <div class="desc-right">
                        于是在2015年 7月的一天, 《中国精品酒店联盟》诞生了
                    </div>
                </div>

                <div class="vertical-line auto-margin">
                </div>
                <div class="auto-margin history-people">
                    <img src = 'Gbh/img/头像2.jpg' >
                </div>

                <div class="vertical-line auto-margin">
                </div>
                <div class=" history-detail ">
                    <div class="year auto-margin">
                        2015/09
                    </div>
                    <div class="desc-left">
                        来自厦大的青红加入联盟，担任品牌运营官
                    </div>
                </div>

                <div class="vertical-line auto-margin">
                </div>
                <div class="auto-margin history-people">
                    <img src = 'Gbh/img/jie.png' >
                </div>

                <div class="vertical-line auto-margin">
                </div>
                <div class=" history-detail ">
                    <div class="year auto-margin">
                        2015/09
                    </div>
                    <div class="desc-left">
                        来自悉尼大学的杰文加入联盟，担任技术负责人(这个网站是哥写的)
                    </div>
                </div>

                <div class="vertical-line auto-margin">
                </div>
                <div class=" history-detail ">
                    <div class="year auto-margin">
                        2015/09
                    </div>
                    <div class="desc-right">
                        联盟正式开始运作，官方微信号上线
                    </div>
                </div>

                <div class="vertical-line auto-margin">
                </div>
                <div class=" history-detail ">
                    <a href="/joinUs"><div class="join-btn auto-margin">
                        <span class="up">今天</span>
                        <span>加入我们</span>
                    </div></a>
                    </div>
                </div>
            </div>


            <div class="padding-80"></div>



        </div>






    </div>
@stop


@section('script')

    <script type="text/javascript">



        $(document).ready(function(){

            $('.first-show').find('.history-people,.year ').transition({
                animation : 'scale',
                duration  : 800
            });
            $('.first-show').find('.vertical-line, .desc-right ').transition({
                animation : 'scale',
                duration  : 800

            });

            var timeout;
            $(window).scroll(function() {

                clearTimeout(timeout);
                timeout = setTimeout(function() {



                    $('.history-people').each(function(){
                        //alert($(window).scrollTop());
                        if( $(window).scrollTop() > $(this).offset().top -500 ) {

                            if($(this).css('visibility') === 'hidden')
                                $(this).transition({
                                    animation : 'scale',
                                    duration  : 800
                                });
                        }
                    })


                    $('.vertical-line').each(function(){
                        //alert($(window).scrollTop());
                        if( $(window).scrollTop() > $(this).offset().top -500 ) {
                            if($(this).css('visibility') === 'hidden')
                            $(this).transition({
                                animation : 'scale',
                                duration  : 800
                            });
                        }
                    })



                    $('.history-detail').find('.year').each(function(){
                        //alert($(window).scrollTop());
                        if( $(window).scrollTop() > $(this).offset().top -500 ) {

                            if($(this).css('visibility') === 'hidden')
                                $(this).transition({
                                    animation : 'scale',
                                    duration  : 800
                                });
                        }
                    })

                    $('.history-detail').find('.desc-left').each(function(){
                        //alert($(window).scrollTop());
                        if( $(window).scrollTop() > $(this).offset().top -500 ) {

                            if($(this).css('visibility') === 'hidden')
                                $(this).transition({
                                    animation : 'scale',
                                    duration  : 800
                                });
                        }
                    })

                    $('.history-detail').find('.desc-right').each(function(){
                        //alert($(window).scrollTop());
                        if( $(window).scrollTop() > $(this).offset().top -500 ) {

                            if($(this).css('visibility') === 'hidden')
                                $(this).transition({
                                    animation : 'scale',
                                    duration  : 800
                                });
                        }
                    })

                    $('.history-detail').find('.logo-img').each(function(){
                        //alert($(window).scrollTop());
                        if( $(window).scrollTop() > $(this).offset().top -500 ) {

                            if($(this).css('visibility') === 'hidden')
                                $(this).transition({
                                    animation : 'scale',
                                    duration  : 800
                                });
                        }
                    })
                    $('.history-detail').find('.join-btn').each(function(){
                        //alert($(window).scrollTop());
                        if( $(window).scrollTop() > $(this).offset().top -600 ) {

                            if($(this).css('visibility') === 'hidden')
                                $(this).transition({
                                    animation : 'scale',
                                    duration  : 800
                                });
                        }
                    })


                }, 50);

            });

        })
    </script>

@stop