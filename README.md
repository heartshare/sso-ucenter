# sso-ucenter

简介： 利用ucenter 实现各个应用单点登录，应用可以不必是康盛的产品。


目录介绍：
       ucenter 官方代码   (本地绑定host  www.ucenter.com) 
       ucenter-client-app1  我的应用deom (本地绑定host www.app1.com)
       ucenter-client-app2 我的第二个应用demo   (本地绑定host  www.app2.com)


安装说明：
      下载安装ucenter,进入ucenter管理界面，应用管理 添加应用 ，主要配置项有：应用的主 URL，通信密钥，是否开启同步登录（选是）




实现原理：
       app1.com                                           
       -------------                                                                 
         1.登录界面 提交                                                              
         2.登录逻辑
         3.1 curl调用ucenter api（uc_user_synlogin），传递加密参数uid,uname 

     ucenter.com
     -------------
     3.2 解密参数uid,uname,查询需要同步登录的站点，生成html,通知各个应用设置自己的cookie
          <script src='wwww.app2.com/uc_client/uc.php?param=authcode'></script>
    app2.com
    --------------          
    3.3  登录逻辑 设置cookie
                  







            


