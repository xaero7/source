<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="referrer" content="origin" />
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, user-scalable=no" />
    <title>首页 - JoyOI Online Judge</title>
    <link href="/styles/joyoi.base.min.css" rel="stylesheet" />
    <link href="/styles/joyoi.extend.css" rel="stylesheet" />
    <script src="/scripts/checkbrowser.js"></script>
    <script src="/scripts/jquery-3.2.1.min.js"></script>
    <script src="/scripts/signalr-client.min.js"></script>
    <script src="/scripts/xss.js"></script>
    <script src="/scripts/marked.js"></script>
    <script src="/scripts/vue.js"></script>
    <script src="/scripts/vue-router.js"></script>
    <script src="/scripts/vue-lazy-routing.js"></script>
    <script src="/scripts/joyoi.routing.js"></script>
    <script src="/scripts/joyoi.base.min.js"></script>
    <script src="/scripts/ace/ace.js"></script>
    <script src="/scripts/ace/theme-twilight.js"></script>
    <script src="/scripts/ace/ext-language_tools.js"></script>
    <script src="/scripts/ace/mode-c_cpp.js"></script>
    <script src="/scripts/ace/mode-pascal.js"></script>
    <script src="/scripts/ace/mode-python.js"></script>
    <script src="/scripts/ace/mode-ruby.js"></script>
    <script src="/scripts/ace/mode-csharp.js"></script>
    <script src="/scripts/joyoi.queryview.js"></script>
    <script src="/scripts/joyoi.extend.js"></script>
</head>
<body class="home-template fixed-navbar">
    <div id="app">
        <!-- start header -->
        <header class="main-header">
            <nav class="navbar navbar-default navbar-fixed-top" v-bind:class="{ 'page-scrolled': fullScreen }">
                <div class="container" v-bind:class="{ 'full-screen': fullScreen }">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-list mobile-menu"></i>
                        </button>
                        <!-- start logo -->
                        <a href="javascript:;" class="navbar-logo"><img v-bind:src="isGroup && group && group.logoUrl ? group.logoUrl : '/images/logo-bk.png'" /></a>
                        <!-- end logo -->
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="home"><router-link to="/" id="redirect-to-home">首页</router-link></li>
                            <li class="home"><router-link to="/problem">题目</router-link></li>
                            <li class="home"><router-link to="/contest">比赛</router-link></li>
                            <li class="home" v-if="!isGroup"><router-link to="/group">团队</router-link></li>
                            <li class="home"><router-link to="/judge">评测</router-link></li>
                            <li class="home"><router-link to="/hack">Hack</router-link></li>
                            <li class="home" v-if="!isGroup"><a v-bind:href="hosts.forum" target="_blank">论坛</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li v-if="user.isSignedIn">
                                <router-link :to="{ name: '/user/:username', path: '/user/' + user.profile.username, params: { 'username': user.profile.username } }">
                                    {{ $root.user.profile.username }}
                                </router-link>
                            <li v-if="isGroup && groupSession.isMaster">
                                <router-link :to="{ name: '/group/manage', path: '/group/manage' }">
                                    管理团队
                                </router-link>
                            </li>
                            <li v-if="user.isSignedIn"><a v-on:click="logout()">注销</a></li>
                            <li><a v-if="!user.isSignedIn" v-on:click="toggleLoginBox()" class="login">登录</a></li>
                            <li v-if="!user.isSignedIn"><a v-bind:href="hosts.uc + '/Register?from=' + loginUrl" target="_blank">注册</a></li>
                        </ul>
                    </div>

                </div>
            </nav>
        </header>
        <!-- end header -->

        <div id="cover" class="cover cover-single mobile-cover" v-bind:class="{ 'cover-url': showUrlCover, 'cover-without-url': !showUrlCover, 'cover': !isGroup, 'cover-group': isGroup }">
            <div class="cont-wrap">
                <div class="col-md-12 mobile-cover-center" style="text-align:left">
                    <img v-bind:src="isGroup && group && group.logoUrl ? group.logoUrl : '/images/logo.png'" class="mobile-cover-img" style="height:140px;margin-top:-60px;" />
                </div>
            </div>
            <div class="cover-url-inner" v-show="showUrlCover">
                <div class="cont-wrap">
                    <div class="col-md-12" style="text-align:left">
                        <div class="columns">
                            <div class="location-path">
                                / <router-link to="/">{{ !isGroup ? 'Joy OI' : group.name }}</router-link> /
                                <template v-for="link in links">
                                    <a class="vue-resolved" v-bind:href="resolveUrl(link.to)" v-on:click="redirect(typeof link.to === 'string' ? link.to : link.to.name, typeof link.to === 'string' ? link.to : link.to.path, typeof link.to === 'string' ? undefined : link.to.params), typeof link.to === 'string' ? undefined : link.to.query">{{ link.text }}</a> /
                                </template>
                            </div>
                            <h1 class="location-current" data-emoji-enabled="">{{ title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content-area">
            <router-view></router-view>
        </div>
        <!-- start footer -->
        <footer class="main-footer">
            <div class="footer-widget-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <!-- start widget -->
                            <div class="widget">
                                <h4 class="title">支持与帮助</h4>
                                <div class="content recent-post">
                                    <p><a href="http://help.joyoi.cn" target="_blank">帮助中心</a></p>
                                    <p><a href="http://docs.joyoi.cn" target="_blank">API文档</a></p>
                                    <p><a href="https://github.com/joyoi" target="_blank">开放源代码</a></p>
                                </div>
                            </div>
                            <!-- end widget -->
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="widget">
                                <h4 class="title">关注我们</h4>
                                <div class="content clearfix">
                                    <ul class="social">
                                        <!-- start social links -->
                                        <!-- replace the # with your own profile link address -->
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#" class="skype"><i class="fa fa-skype"></i></a></li>
                                        <li><a href="#" class="pinterest"><i class="fa  fa-pinterest"></i></a></li>
                                        <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                                        <li><a href="#" class="vimeo"><i class="fa fa-vimeo-square"></i></a></li>
                                        <li><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#" class="flickr"><i class="fa fa-flickr"></i></a></li>
                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="http://avant-ghost.gbjsolution.com/rss/" class="rss"><i class="fa fa-rss"></i></a></li>
                                        <!-- end social links -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <!-- start widget -->
                            <div class="widget">
                                <h4 class="title">最新公告</h4>
                                <div class="content">
                                </div>
                            </div>
                            <!-- end widget -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                &copy; 2017 <a href="https://github.com/JoyOI">Beijing Tsba Education &amp; Technologies Co., Ltd.</a> All right Reserved
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->

        <a v-on:click="toggleChatBox" v-if="user.isSignedIn" id="back-to-top"><i class="fa fa-comment-o"></i></a>

        <!-- start login -->
        <div class="login-box-bg" v-bind:class="{ 'active': layout.loginBoxOpened }">
            <div class="login-box-outer" v-bind:class="{ 'active': layout.loginBoxOpened }">
                <div class="login-box-set">
                    <h1>还没有账号？</h1>
                    <p v-if="!isGroup">注册一个 Joy OI 通行证，您就可以畅游我们的在线评测、论坛、个人空间、在线课程等多项服务。</p>
                    <p v-if="isGroup">注册一个账号，您就可以畅游{{ group.name }}的在线评测等多项服务。</p>
                    <a class="login-register" v-bind:href="hosts.uc + '/Register?from=' + loginUrl" target="_blank">现在注册</a>
                </div>
                <div class="login-box-main">
                    <h1>登录</h1>
                    <p v-if="!isGroup" class="login-box-note">使用Joy OI通行证登录</p>
                    <p v-if="isGroup" class="login-box-note">登录到{{ group.name }}</p>
                    <label class="login-column">
                        用户名
                        <input id="username"
                               type="text"
                               v-on:focusin="loginFocusIn('#username')"
                               v-on:focusout="loginFocusOut('#username')"
                               class="login-textbox" />
                    </label>
                    <label class="login-column">
                        密码
                        <input id="password"
                               type="password"
                               v-on:focusin="loginFocusIn('#password')"
                               v-on:focusout="loginFocusOut('#password')"
                               class="login-textbox" />
                    </label>
                    <label class="login-column">
                        <input type="checkbox" id="rememberme" />
                        <span>记住我 &nbsp;&nbsp; <a v-bind:href="$root.hosts.uc + '/account/forgot'" target="_blank">忘记密码?</a></span>
                    </label>
                    <div class="clear"></div>
                    <a class="login-btn" v-on:click="login()" v-bind:class="{ 'api-disabled': $root.control.apiLock }" v-bind:disabled="$root.control.apiLock">登录</a>
                </div>
            </div>
        </div>
        <!-- end login -->

        <!-- start notifications -->
        <div class="notification" v-bind:class="{ 'active': control.currentNotification !== null, 'pending': control.currentNotification && control.currentNotification.level === 'pending', 'succeeded': control.currentNotification && control.currentNotification.level === 'succeeded', 'warning': control.currentNotification && control.currentNotification.level === 'warning', 'error': control.currentNotification && control.currentNotification.level === 'error', 'important': control.currentNotification && control.currentNotification.level === 'important' }">
            <div class="notification-title">{{ control.currentNotification ? control.currentNotification.title : null }}</div>
            <div class="notification-detail" v-if="control.currentNotification && control.currentNotification.detail">{{ control.currentNotification ? control.currentNotification.detail : null }}</div>
            <div class="notification-button-outer" v-if="control.currentNotification && control.currentNotification.button">
                <a class="notification-button" v-on:click="clickNotification">{{ control.currentNotification.button }}</a>
            </div>
        </div>
        <!-- end notifications -->

        <!-- start chat -->
        <iframe v-bind:src="control.chatIframeUrl" class="chat-iframe"></iframe>
        <!-- end chat -->
    </div>
</body>
</html>
