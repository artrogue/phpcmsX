
![](https://rep.ue4.net/img/PHPCMSX-git-1.png)

## **PhpcmsX (Phpcms V9 Fans维护版)**
## ~~**PhpcmsV9.6.3 utf8 有意思(UE4.net)优化升级版~~**
    <?php
        defined('IN_PHPCMS') or exit('No permission resources.');
        if($this->error):
            showmessage(L('PHPCMS X使用问题反馈交流QQ群：601033253), HTTP_REFERER);
        else:
            showmessage(L('本PHPCMS X仓库将保持持续维护和更新,请保持关注!'), HTTP_REFERER);
        endif;
    ?>
   
   


[PHPCMS X 使用问题反馈交流QQ群 601033253](https://shang.qq.com/wpa/qunwpa?idkey=9a6c9fa44295ad063c9e0f73deb39b25d878ba3dfb07d2039b3fbd75dc482eba "QQ交流反馈群")
   
      
[PHPCMS X 资料站 www.PHPCMSX.com 即将上线](https://www.phpcmsx.com "PHPCMS X")
   
   
   
![](https://rep.ue4.net/img/PHPCMSX-git-2.png)
   


**程序介绍**
---
基于官方原版程序 phpcms v9.6.3 UTF8 完善和优化   
保留所有官方原版程序功能,保持官方原本程序前台界面,方便二次开发;   
主要完善和优化项如下:

> 支持HTTPS环境   
> 支持php7.3+   (最高支持到 php7.3.8 )   
> 支持MySQL8+  (最高支持到 MySQL 10.4.13-MariaDB)   
> 支持后台更新提示和一键更新(须使用本优化升级版程序 v2.6或以上)    
> 支持网站文件在线MD5校验   
> 去除了已被废弃的视频模块和视频模型    
> 修复安装时DNS解析错误提示   
> 修复PHPSSO中一处BUG   
> 修复已知安全漏洞   
> 修复已知BUG
> 增加安装时自定义后台管理登录地址   
> 后台附件上传修改为H5上传
> 会员头像上传修改为H5上传

---


> **使用中有任何疑问或发现BUG,期待您的反馈:**     
> **QQ:95606117  TEL:18912661468**   
> **建议使用环境**   
> - **CentOS 7+**
> - **Php 7+**  
> - **Mysql 5.7+**  
> - **Nginx 1.17+**   

**源码运行界面**
---
后台登录
![](https://rep.ue4.net/img/PHPCMSX-git-3.png)


后台首页
![](https://rep.ue4.net/img/PHPCMSX-git-4.png)


新增的分词接口功能设置
![](https://rep.ue4.net/img/PHPCMSX-git-5.png)


修复的在线升级和文件MD5校验功能
![](https://rep.ue4.net/img/PHPCMSX-git-6.png)

![](https://rep.ue4.net/img/PHPCMSX-git-7.png)


后台附件H5上传
![](https://rep.ue4.net/img/PHPCMSX-git-9.png)


升级为CK4.8编辑器
![](https://rep.ue4.net/img/PHPCMSX-git-8.png)

![](https://rep.ue4.net/img/PHPCMSX-git-10.png)

![](https://rep.ue4.net/img/PHPCMSX-git-11.png)

![](https://rep.ue4.net/img/PHPCMSX-git-12.png)

![](https://rep.ue4.net/img/PHPCMSX-git-13.png)

![](https://rep.ue4.net/img/PHPCMSX-git-14.png)






---

**更新日志:**
---

#### **2020年7月20 更新** 
- 更换后台模版(蒙奇时光MunSkin v1.2b)
- 后台附件上传更换为H5上传
- 前台会员中心头像上传更换为H5上传
- 后台一键更新功能优化
   - 使用Phpcms有意思优化升级版v2.6版版本的用户可使用一键更新
   - 原版phpcms或其他修改版phpcms使用可能会造成程序异常
   - 自己做过二次开发的建议更新前备份,或手动下载更新包手动对比更新

#### **2020年7月18 更新** 
- 有意思(UE4.net)优化升级版 v2.6发布
   - 自本版开始，本程序支持在线更新(后台一键更新)
   - **提示：v2.5版及以前的版本无法在线更新，强烈建议下载使用本版**
- 增加UE4.net的store AK获取功能，为后期内置模块商店做准备
   - 正在开发的模块商店预想功能如下：
       - 提供模块一键安装
       - 开发者中心：模块制作者可一键发布及上传自己制作的模块
       - 大部分模块采用免费共享形式
       - 部分开发者上传的模块可设置少许使用费用
       - 本模块商店免费运作，不收取任何中间费用


#### **2020年7月14 更新** 
- 高版本环境测试运行正常     
   - CentOS 8.2.2004  
   - BTplane 7.4.0  
   - Nginx1.19  
   - Php7.4.8  
   - MySQL 10.4.13-MariaDB
- 修改关键词提取接口为讯飞开放平台接口
   - 原官方关键词接口已失效

