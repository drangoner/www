<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META content="南昌大学网络中心-数据中心助研组-数据挖掘与应用" name="description" />
<META name=keywords content="南昌大学网络中心">
<meta name="author" content="南昌大学网络中心助研小组" />
<META name=copyright content="Nanchang University. 南昌大学版权所有"/ >
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>南昌大学网络中心</title>
<link href="/css/style.css" rel="stylesheet" type="text/css" />
<link href="/css/pc.css" rel="stylesheet" type="text/css" />
<link href="/css/bobao.css" rel="stylesheet" type="text/css" />
<script src="/js/jquery-1.9.1.min.js" type="text/javascript"></script>
</head>
<body>
<div class = "wrapper center">
	<div class ="row">
		<div class ="col8 r30">
			<div class = "logo">
				<a href="http://www.ncu.edu.cn" title="南昌大学"><img alt="" src="/img/ncu.png"></a>
			</div>
		</div>
		<div class="col8">
			<div class="row">
				<div class="toptool right">
					<a target="_blank" class="email" href="http://mail.ncu.edu.cn/">邮箱</a><span>|</span><a class="oa" target="_blank" href="http://oa.ncu.edu.cn/">OA系统</a><span>|</span><a target="_blank" href="/language/english.html">language</a>
				</div>
			</div>
			<div class="row">
				<div class="fdh right">
					<ul>
						<li class="app03"><a href="/ks/">考生</a></li>
						<li class="app04"><a href="/zxs/">在校生</a></li>
						<li class="app05"><a href="/jzg/">教职工</a></li>
						<li class="app06"><a href="/xy/">校友</a></li>
						<li class="app07"><a href="/fk/">访客</a></li>
					</ul>
				</div>
			</div>
		</div>	
	</div>
</div>

<div class="b warp">
<div class="wrapper center">
<div class="row">
<div class="common f14 ">
<script type="text/javascript">
var timeout         = 500;
var closetimer		= 0;
var ddmenuitem      = 0;

function jsddm_open()
{	jsddm_canceltimer();
	jsddm_close();
	ddmenuitem = $(this).find('ul').eq(0).css('visibility', 'visible');}

function jsddm_close()
{	if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');}

function jsddm_timer()
{	closetimer = window.setTimeout(jsddm_close, timeout);}

function jsddm_canceltimer()
{	if(closetimer)
	{	window.clearTimeout(closetimer);
		closetimer = null;}}

$(document).ready(function()
{	$('#jsddm > li').bind('mouseover', jsddm_open);
	$('#jsddm > li').bind('mouseout',  jsddm_timer);});

document.onclick = jsddm_close;
  </script>
<ul id="jsddm">
	<li><a class="wo" href="/index.php">首页</a></li>
	<li><a href="/xxgk/xxjj.html">漏洞平台</a>
		<ul style="visibility: hidden;">
            <li>
                <a href="/xxgk/xxjj.html">播报平台</a>
            </li>
            <li>
                <a href="/xxgk/lsyg.html">补天漏洞</a>
            </li>
            <li>
                <a href="/xxgk/zljg.html">webscan</a>
            </li>
		</ul>
	</li>
	<li><a href="/xyyxk/yxsz.html">科研展示</a>
		<ul style="visibility: hidden;">
            <li>
                <a href="/xyyxk/yxsz.html">大数据</a>
            </li>
            <li>
                <a href="/xyyxk/xkjs.html">虚拟化</a>
            </li>
            <li>
                <a href="/xyyxk/zysz.html">云服务</a>
            </li>
		</ul>
	</li>
	<li><a href="/znbm/dqbm.html">成员介绍</a>
	</li>
	<li><a href="/jyjx/szdw.html">最新漏洞</a>
	</li>
	<li><a href="/kxyj/kycg/">科学研究</a>
		<ul style="visibility: hidden;">
            <li>
                <a href="/kxyj/kycg/">科研成果</a>
            </li>
            <li>
                <a href="/kxyj/sqzl/">授权专利</a>
            </li>
            <li>
                <a href="/kxyj/kypt.html">科研平台</a>
            </li>
            <li>
                <a href="/kxyj/bshldz.html">博士后流动站</a>
            </li>
		</ul>
	</li>
	<li><a target="_blank" href="http://zjc.ncu.edu.cn/zs/">招生就业</a>
		<ul style="visibility: hidden;">
            <li>
                <a target="_blank" href="http://zjc.ncu.edu.cn/zs/">本专科生招生</a>
            </li>
            <li>
                <a target="_blank" href="http://yjsy.ncu.edu.cn/yjs_recinfo.asp">研究生招生</a>
            </li>
            <li>
                <a target="_blank" href="http://iec.ncu.edu.cn">国际教育招生</a>
            </li>
            <li>
                <a target="_blank" href="http://sce.ncu.edu.cn">继续教育招生</a>
            </li>
            <li>
                <a target="_blank" href="http://zjc.ncu.edu.cn">就业服务</a>
            </li>
		</ul>
	</li>
	<li><a href="/glyfw/xzjdr.html">管理与服务</a>
		<ul style="visibility: hidden;">
            <li>
                <a href="/glyfw/xzjdr.html">校领导接待日</a>
            </li>
<li>
                <a href="mailto:sjxx@ncu.edu.cn">书记信箱</a>
            </li>
            <li>
                <a href="mailto:xzxx@ncu.edu.cn">校长信箱</a>
            </li>
            <li>
                <a href="/glyfw/fwxmzn.html">服务项目指南</a>
            </li>
            <li>
                <a target="_blank" href="http://lb.ncu.edu.cn/sstd/">师生通道</a>
            </li>
            <li>
                <a href="/glyfw/ggzy.html">公共资源</a>
            </li>
		</ul>
	</li>

</ul>
</div>
</div>
</div>
</div>

<div>
<!-- bobao -->
	<div class="col8 mt10 g" style="margin-left:10px;">
		<div class ="b pt10 pb15">
			<h2 style ="color:#ffffff;text-align:center;"> Bobao最新漏洞</h2>
		</div>
		<div class = "mt10 pl10" id="bobao">
			<?php include "bobao.php" ?>
		</div>
	</div>
<!-- end bobao -->
<!-- butian -->
	<div class="col8 mt10 g" style="float:right;margin-right:10px;">
		<div class ="b pt10 pb15">
				<h2 style ="color:#ffffff;text-align:center;"> 补天最新漏洞</h2>
		</div>
		<div class = "mt10 pl10" id="bobao">
			<?php include "bobao.php" ?>
		</div>
	</div>
<!-- end butian -->
<!-- wooyun -->
	<div class="col8 mt10 g" style="margin-left:10px;">
		<div class ="b pt10 pb15">
				<h2 style ="color:#ffffff;text-align:center;"> 乌云最新漏洞</h2>
		</div>
		<div class = "mt10 pl10" id="bobao">
			<?php include "bobao.php" ?>
		</div>
	</div>
<!-- end wooyun -->
<!-- box -->
	<div class="col8 mt10 g" style="float:right;margin-right:10px;">
		<div class ="b pt10 pb15">
				<h2 style ="color:#ffffff;text-align:center;"> 漏洞盒子最新漏洞</h2>
		</div>
		<div class = "mt10 pl10" id="bobao">
			<?php include "bobao.php" ?>
		</div>
	</div>
<!-- end box -->
<!-- footer -->
	<div id="foot" class="warp b" style="height:100px;text-align:center;float:left;font-size:12px;color:#ffffff;">
		<p style="padding-top:45px;">南昌大学 &copy;版权所有</p>
	</div>
<!-- end footer -->
</div>
</body>

</html>