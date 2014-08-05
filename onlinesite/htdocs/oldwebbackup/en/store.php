<!DOCTYPE html>
<html lang="en">
<?php
	$PageTitle="Dazzle -- index";
	/*Nav select*/
?>
<head>
    <?php include 'inc/head.php'; ?>

	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=TchFfRQ3K7FhNDETEPNSezHW"></script>
    <script type="text/javascript" src="/js/store.js"></script>
</head>

<body id="service">
    <div class="database">
    	<div id="dzzitdataprovince"> 
            <a href="javascript:void(0)" class="item">北京</a>
            <a href="javascript:void(0)" class="item">上海</a>
            <a href="javascript:void(0)" class="item">天津</a>
            <a href="javascript:void(0)" class="item">重庆</a>
            <a href="javascript:void(0)" class="item">内蒙古</a>
            <a href="javascript:void(0)" class="item">辽宁</a>
            <a href="javascript:void(0)" class="item">陕西</a>
            <a href="javascript:void(0)" class="item">新疆</a>
            <a href="javascript:void(0)" class="item">贵州</a>
            <a href="javascript:void(0)" class="item">云南</a>
            <a href="javascript:void(0)" class="item">湖南</a>
            <a href="javascript:void(0)" class="item">海南</a>
            <a href="javascript:void(0)" class="item">河南</a>
            <a href="javascript:void(0)" class="item">江西</a>
            <a href="javascript:void(0)" class="item">江苏</a>
            <a href="javascript:void(0)" class="item">四川</a>
            <a href="javascript:void(0)" class="item">福建</a>
            <a href="javascript:void(0)" class="item">广西</a>
            <a href="javascript:void(0)" class="item">广东</a>
            <a href="javascript:void(0)" class="item">辽宁</a>
            <a href="javascript:void(0)" class="item">江苏</a>
            <a href="javascript:void(0)" class="item">浙江</a>
            <a href="javascript:void(0)" class="item">江苏</a>
            <a href="javascript:void(0)" class="item">湖北</a>
            <a href="javascript:void(0)" class="item">浙江</a>
            <a href="javascript:void(0)" class="item">广东</a>
            <a href="javascript:void(0)" class="item">山东</a>
            <a href="javascript:void(0)" class="item">福建</a>
        </div>
        <div id="dzzitdatacity">
            <a href="javascript:void(0)" data-index="内蒙古" class="item">呼和浩特</a>
            <a href="javascript:void(0)" data-index="内蒙古" class="item">包头</a>
            <a href="javascript:void(0)" data-index="辽宁" class="item">沈阳</a>
            <a href="javascript:void(0)" data-index="陕西" class="item">西安	</a>
            <a href="javascript:void(0)" data-index="新疆" class="item">乌鲁木齐</a>
            <a href="javascript:void(0)" data-index="贵州" class="item">贵阳</a>
            <a href="javascript:void(0)" data-index="云南" class="item">昆明</a>
            <a href="javascript:void(0)" data-index="湖南" class="item">长沙</a>
            <a href="javascript:void(0)" data-index="湖南" class="item">湘潭</a>
            <a href="javascript:void(0)" data-index="湖南" class="item">株洲</a>
            <a href="javascript:void(0)" data-index="海南" class="item">海口</a>
            <a href="javascript:void(0)" data-index="河南" class="item">郑州	</a>
            <a href="javascript:void(0)" data-index="江西" class="item">南昌</a>
            <a href="javascript:void(0)" data-index="江苏" class="item">江阴</a>
            <a href="javascript:void(0)" data-index="四川" class="item">成都</a>
            <a href="javascript:void(0)" data-index="福建" class="item">厦门</a>
            <a href="javascript:void(0)" data-index="福建" class="item">莆田</a>
            <a href="javascript:void(0)" data-index="广西" class="item">南宁</a>
            <a href="javascript:void(0)" data-index="广东" class="item">珠海</a>
            <a href="javascript:void(0)" data-index="辽宁" class="item">大连</a>
            <a href="javascript:void(0)" data-index="天津" class="item">天津</a>
            <a href="javascript:void(0)" data-index="上海" class="item">上海</a>
            <a href="javascript:void(0)" data-index="江苏" class="item">无锡</a>
            <a href="javascript:void(0)" data-index="浙江" class="item">杭州</a>
            <a href="javascript:void(0)" data-index="江苏" class="item">苏州</a>
            <a href="javascript:void(0)" data-index="江苏" class="item">常州</a>	
            <a href="javascript:void(0)" data-index="北京" class="item">北京</a>
            <a href="javascript:void(0)" data-index="湖北" class="item">武汉</a>
            <a href="javascript:void(0)" data-index="湖北" class="item">宜昌</a>
            <a href="javascript:void(0)" data-index="浙江" class="item">温州</a>
            <a href="javascript:void(0)" data-index="浙江" class="item">金华</a>
            <a href="javascript:void(0)" data-index="浙江" class="item">宁波</a>
            <a href="javascript:void(0)" data-index="广东" class="item">深圳</a>
            <a href="javascript:void(0)" data-index="广东" class="item">广州</a>
            <a href="javascript:void(0)" data-index="山东" class="item">青岛</a>
            <a href="javascript:void(0)" data-index="重庆" class="item">重庆</a>
            <a href="javascript:void(0)" data-index="福建" class="item">福州</a>
        </div>
        <div id="dzzitdatastore">
            <a href="javascript:void(0)" data-index="呼和浩特" data-title="内蒙古呼和浩特市回民区中心西路王府井二楼" data-mapx="111.672888" data-mapy="40.818833" data-markx="111.673562" data-marky="40.819338" class="item">呼和浩特王府井</a>
            <a href="javascript:void(0)" data-index="呼和浩特" data-title="内蒙古呼和浩特市回民区中心西路维多利时代城二楼" data-mapx="111.674966" data-mapy="40.821058" data-markx="111.675137" data-marky="40.821249" class="item">呼和浩特维多利时代城</a>
            <a href="javascript:void(0)" data-index="呼和浩特" data-title="内蒙古呼和浩特市回民区中心西路维多利购物中心四楼" data-mapx="111.676421" data-mapy="40.822573" data-markx="111.676443" data-marky="40.822539" class="item">呼和浩特维多利购物中心</a>
            <a href="javascript:void(0)" data-index="呼和浩特" data-title="内蒙古呼和浩特市万达广场一层" data-mapx="111.74106" data-mapy="40.84264" data-markx="111.739829" data-marky="40.842463" class="item">呼和浩特万达</a>
            <a href="javascript:void(0)" data-index="呼和浩特" data-title="内蒙古呼和浩特市赛罕区凯德MALL一楼" data-mapx="111.687271" data-mapy="40.803093" data-markx="111.687141" data-marky="40.803455" class="item">呼和浩特凯德</a>
            <a href="javascript:void(0)" data-index="包头" data-title="内蒙古包头市昆区钢铁大街包头百货大楼三层" data-mapx="109.822511" data-mapy="40.664632" data-markx="109.822089" data-marky="40.664632" class="item">包头包百</a>
            <a href="javascript:void(0)" data-index="包头" data-title="内蒙古包头市包百时代蓝天百货一层" data-mapx="109.823135" data-mapy="40.663852" data-markx="109.8231" data-marky="40.663859" class="item">包头包百时代</a>
            <a href="javascript:void(0)" data-index="沈阳" data-title="沈阳市沈河区中街路68号久光2F" data-mapx="123.45928" data-mapy="41.807785" data-markx="123.459159" data-marky="41.807839" class="item">沈阳久光</a>
            <a href="javascript:void(0)" data-index="西安" data-title="陕西省西安市碑林区东大街骡马市民生百货二楼" data-mapx="108.956811" data-mapy="34.26559" data-markx="108.956789" data-marky="34.265665" class="item">西安兴正元</a>
            <a href="javascript:void(0)" data-index="西安" data-title="解放路民乐园万达广场3楼" data-mapx="108.971846" data-mapy="34.271609" data-markx="108.971765" data-marky="34.271907" class="item">西安民乐园万达</a>
            <a href="javascript:void(0)" data-index="乌鲁木齐" data-title="乌鲁木齐中山路230号亚欣生活广场负一楼" data-mapx="87.623111" data-mapy="43.800193" data-markx="87.623115" data-marky="43.800271" class="item">乌鲁木齐亚欣生活广场</a>
            <a href="javascript:void(0)" data-index="贵阳" data-title="阳市云岩区中华中路龙港百盛2F" data-mapx="106.719305" data-mapy="26.584773" data-markx="106.71935" data-marky="26.584935" class="item">贵阳龙港百盛</a>
            <a href="javascript:void(0)" data-index="昆明" data-title="云南省昆明市正义路昆明百大新天地二楼209-210" data-mapx="102.71597" data-mapy="25.0428" data-markx="102.716037" data-marky="25.042849" class="item">昆明百大新天地</a>
            <a href="javascript:void(0)" data-index="长沙" data-title="长沙市场开福区五一西路万达广场室内步行街3层3051" data-mapx="112.981459" data-mapy="28.196831" data-markx="112.981221" data-marky="28.197253" class="item">长沙开福万达</a>
            <a href="javascript:void(0)" data-index="长沙" data-title="长沙市天心区黄兴南路王府井百货4F" data-mapx="119.312744" data-mapy="26.097242" data-markx="119.312461" data-marky="26.097769" class="item">长沙王府井百货</a>
            <a href="javascript:void(0)" data-index="湘潭" data-title="湖南省湘潭市岳塘区建设路口步步高广场3F" data-mapx="112.924551" data-mapy="27.840614" data-markx="112.92447" data-marky="27.840726" class="item">湘潭步步高</a>
            <a href="javascript:void(0)" data-index="株洲" data-title="湖南省株洲市芦淞区新华西路999号王府井商场3F" data-mapx="113.160652" data-mapy="27.844559" data-markx="113.160176" data-marky="27.845086" class="item">株洲王府井</a>
            <a href="javascript:void(0)" data-index="海口" data-title="海口市大同路2号友谊商业广场2楼女装部" data-mapx="110.344248" data-mapy="20.043336" data-markx="113.160176" data-marky="27.845086" class="item">海口友谊商场</a>
            <a href="javascript:void(0)" data-index="郑州" data-title="郑州市金水区花园路与农业路交汇处大商国贸总店" data-mapx="113.688132" data-mapy="34.792092" data-markx="110.344495" data-marky="20.043684" class="item">郑州大商国贸</a>
            <a href="javascript:void(0)" data-index="郑州" data-title="郑州市花园路与农业路交叉口丹尼斯百货3楼" data-mapx="113.68863" data-mapy="34.792611" data-markx="113.688621" data-marky="34.792804" class="item">郑州花园路丹尼斯</a>
            <a href="javascript:void(0)" data-index="南昌" data-title="江西省南昌市东湖区中山路177号百盛购物广场二楼" data-mapx="115.89824" data-mapy="28.681755" data-markx="115.898235" data-marky="28.681739" class="item">南昌中山路百盛</a>
            <a href="javascript:void(0)" data-index="南昌" data-title="南昌市上海路与北京西路交汇口梦时代广场3楼3S-A4" data-mapx="115.945347" data-mapy="28.680202" data-markx="115.94532" data-marky="28.680186" class="item">南昌梦时代</a>
            <a href="javascript:void(0)" data-index="江阴" data-title="江阴市人民西路281号万达广场室内步行街1楼1011号" data-mapx="120.251765" data-mapy="31.905318" data-markx="120.250319" data-marky="31.905502" class="item">江阴万达</a>
            <a href="javascript:void(0)" data-index="成都" data-title="成都市人民南路四段3号来福士广场2层2018号" data-mapx="104.07352" data-mapy="30.637437" data-markx="104.073614" data-marky="30.637981" class="item">成都来福士广场</a>
            <a href="javascript:void(0)" data-index="成都" data-title="成都市金牛区一环路北三段1号2030号店铺" data-mapx="104.080232" data-mapy="30.692008" data-markx="104.080079" data-marky="30.692101" class="item">成都金牛万达</a>
            <a href="javascript:void(0)" data-index="成都" data-title="成都市锦江区大科甲巷8号伊势丹百货3楼" data-mapx="104.08654" data-mapy="30.660739" data-markx="104.085961" data-marky="30.660537" class="item">成都伊势丹</a>
            <a href="javascript:void(0)" data-index="成都" data-title="成都市锦江区春熙路南段8号群光广场4楼" data-mapx="104.083521" data-mapy="30.659612" data-markx="104.083148" data-marky="30.660257" class="item">成都群光</a>
            <a href="javascript:void(0)" data-index="成都" data-title="成都市成华区双林路339号欢乐颂3楼 " data-mapx="104.100679" data-mapy="30.667247" data-markx="104.100684" data-marky="30.667208" class="item">成都欢乐颂</a>
            <a href="javascript:void(0)" data-index="成都" data-title="成都市锦江区总府路15号4楼" data-mapx="104.086246" data-mapy="30.663845" data-markx="104.085658" data-marky="30.664062" class="item">成都王府井</a>
            <a href="javascript:void(0)" data-index="厦门" data-title="厦门市湖里区仙岳路4666号万达广场一楼138号" data-mapx="118.182626" data-mapy="24.511333" data-markx="118.182599" data-marky="24.511399" class="item">厦门湖里万达</a>
            <a href="javascript:void(0)" data-index="厦门" data-title="厦门市厦禾路899号罗宾森广场一楼1S-17B" data-mapx="118.120937" data-mapy="24.475054" data-markx="118.120681" data-marky="24.475178" class="item">厦门罗宾森商业广场</a>
            <a href="javascript:void(0)" data-index="厦门" data-title="厦门市集美万达广场室内步行街1楼1015号" data-mapx="118.099747" data-mapy="24.579857" data-markx="118.100205" data-marky="24.580366" class="item">厦门集美万达</a>
            <a href="javascript:void(0)" data-index="莆田" data-title="福建省莆田市城厢区霞林街道荔华东大道8号" data-mapx="119.004029" data-mapy="25.425347" data-markx="119.00323" data-marky="25.424792" class="item">莆田万达</a>
            <a href="javascript:void(0)" data-index="南宁" data-title="广西南宁市青秀区民族大道136号万象城百货4F" data-mapx="108.398348" data-mapy="22.81765" data-markx="108.398303" data-marky="22.817966" class="item">南宁万象城</a>
            <a href="javascript:void(0)" data-index="南宁" data-title="广西南宁市朝阳路青云街18号百盛商场3楼" data-mapx="108.329108" data-mapy="22.82004" data-markx="108.32851" data-marky="22.820656" class="item">南宁百盛</a>
            <a href="javascript:void(0)" data-index="珠海" data-title="广东省珠海市吉大区免税商场1F" data-mapx="113.586696" data-mapy="22.262011" data-markx="113.58568" data-marky="22.261426" class="item">珠海免税店</a>
            <a href="javascript:void(0)" data-index="大连" data-title="大连市开发区金玛路198号2楼" data-mapx="121.785445" data-mapy="39.054686" data-markx="121.78535" data-marky="39.054791" class="item">大连麦凯乐3店</a>
            <a href="javascript:void(0)" data-index="大连" data-title="大连市沙河口区高尔基路701号3层1号" data-mapx="121.594779" data-mapy="38.902512" data-markx="121.595269" data-marky="38.903003" class="item">大连和平广场</a>
            <a href="javascript:void(0)" data-index="大连" data-title="大连市中山区青泥街57号麦凯乐总店新馆4楼" data-mapx="121.641881" data-mapy="38.921953" data-markx="121.64207" data-marky="38.9221" class="item">大连麦凯乐总店</a>
            <a href="javascript:void(0)" data-index="天津" data-title="天津市和平区南京路189号津乐汇购物中心2F-12" data-mapx="117.2041" data-mapy="39.123485" data-markx="117.20449" data-marky="39.123618" class="item">天津津乐汇</a>
            <a href="javascript:void(0)" data-index="天津" data-title="天津市和平区南京路108号现代城2楼" data-mapx="117.204422" data-mapy="39.125129" data-markx="117.204026" data-marky="39.124772" class="item">天津伊势丹</a>
            <a href="javascript:void(0)" data-index="天津" data-title="天津市塘沽区解放路668号金元宝商厦2楼" data-mapx="117.673515" data-mapy="39.022935" data-markx="117.673483" data-marky="39.023216" class="item">天津金元宝</a>
            <a href="javascript:void(0)" data-index="上海" data-title="上海市虹口区西江湾路388号凯德龙之梦A座3楼" data-mapx="121.485625" data-mapy="31.276724" data-markx="121.485185" data-marky="31.276631" class="item">上海虹口龙之梦</a>
            <a href="javascript:void(0)" data-index="上海" data-title="上海市杨浦区国宾路36号万达广场地下一层C-21" data-mapx="121.5208" data-mapy="31.306301" data-markx="121.520068" data-marky="31.305869" class="item">上海五角场万达</a>
            <a href="javascript:void(0)" data-index="上海" data-title="上海市杨浦区国宾路36号万达广场地下一层C-21" data-mapx="121.417832" data-mapy="31.237064" data-markx="121.417692" data-marky="31.237542" class="item">上海月星环球</a>
            <a href="javascript:void(0)" data-index="上海" data-title="上海市黄浦区淮海中路300号K11购物艺术中心-B210" data-mapx="121.48065" data-mapy="31.229175" data-markx="121.480268" data-marky="31.229167" class="item">上海K11</a>
            <a href="javascript:void(0)" data-index="上海" data-title="上海南京西路2-68号3楼一部" data-mapx="121.479238" data-mapy="31.240676" data-markx="121.479305" data-marky="31.240707" class="item">上海新世界</a>
            <a href="javascript:void(0)" data-index="上海" data-title="上海市南京西路1618号4楼YES馆Y416" data-mapx="121.452703" data-mapy="31.229839" data-markx="121.452591" data-marky="31.229986" class="item">上海久光 </a>
            <a href="javascript:void(0)" data-index="上海" data-title="上海市浦东新区世纪大道8号国金地下2层 LG2-49&50" data-mapx="121.50966" data-mapy="31.241595" data-markx="121.509656" data-marky="31.241672" class="item">上海国金</a>
            <a href="javascript:void(0)" data-index="上海" data-title="上海市淮海中路999号地下2层 LG2-215" data-mapx="121.464664" data-mapy="31.222188" data-markx="121.464543" data-marky="31.221941" class="item">上海环茂iapm </a>
            <a href="javascript:void(0)" data-index="无锡" data-title="无锡市崇安区人民中路无锡恒隆广场商场451-1铺位" data-mapx="120.303193" data-mapy="31.58076" data-markx="120.303503" data-marky="31.58066" class="item">无锡恒隆</a>
            <a href="javascript:void(0)" data-index="杭州" data-title="杭州市延安南路98号 3楼" data-mapx="120.172169" data-mapy="30.249324" data-markx="120.171401" data-marky="30.249807" class="item">杭州西湖银泰</a>
            <a href="javascript:void(0)" data-index="杭州" data-title="杭州市拱墅区丰谭路380号银泰百货D座地下一楼" data-mapx="120.113912" data-mapy="30.306951" data-markx="120.114536" data-marky="30.306756" class="item">杭州城西银泰</a>
            <a href="javascript:void(0)" data-index="苏州" data-title="江苏苏州人民路372号东楼3层" data-mapx="120.631024" data-mapy="31.296212" data-markx="120.630975" data-marky="31.296274" class="item">苏州泰华</a>
            <a href="javascript:void(0)" data-index="苏州" data-title="苏州市工业园区现代大道1699号印象城购物中心2F2008B" data-mapx="120.663806" data-mapy="31.322644" data-markx="120.663779" data-marky="31.322767" class="item">苏州印象城</a>
            <a href="javascript:void(0)" data-index="常州" data-title="常州市延陵西路1-7号  3楼" data-mapx="119.96981" data-mapy="31.781019" data-markx="119.969805" data-marky="31.781042" class="item">常州购物中心</a>
            <a href="javascript:void(0)" data-index="常州" data-title="常州市南大街1号常州百货大楼3F" data-mapx="119.960502" data-mapy="31.78207" data-markx="119.960462" data-marky="31.782139" class="item">常州百货大楼</a>
            <a href="javascript:void(0)" data-index="北京" data-title="北京市西城区西单北大街176号汉光百货5层" data-mapx="116.381304" data-mapy="39.915444" data-markx="116.380814" data-marky="39.915486" class="item">北京汉光百货</a>
            <a href="javascript:void(0)" data-index="北京" data-title="北京市东城区东直门南大街1号来福士购物中心三层05号 " data-mapx="116.438717" data-mapy="39.946193" data-markx="116.438551" data-marky="39.946525" class="item">来福士</a>
            <a href="javascript:void(0)" data-index="北京" data-title="北京市东城区王府井大街138号新东安广场三层L350" data-mapx="116.418119" data-mapy="39.921469" data-markx="116.418124" data-marky="39.921524" class="item">新东安</a>
            <a href="javascript:void(0)" data-index="北京" data-title="北京市崇文区崇外大街18 号北京国瑞购物中心二层F2-14" data-mapx="116.425551" data-mapy="39.904922" data-markx="116.425556" data-marky="39.904673" class="item">国瑞城</a>
            <a href="javascript:void(0)" data-index="北京" data-title="北京市海淀区清河中街68号华润置地五彩城L255号商铺" data-mapx="116.340427" data-mapy="40.036525" data-markx="116.339865" data-marky="40.036511" class="item">五彩城</a>
            <a href="javascript:void(0)" data-index="北京" data-title="北京市朝阳区光华路9号世贸商业中心1号楼三层L319号" data-mapx="116.457331" data-mapy="39.922078" data-markx="116.457353" data-marky="39.922189" class="item">世贸天阶</a>
            <a href="javascript:void(0)" data-index="北京" data-title="北京市昌平区南环路金隅成科广场一层022号" data-mapx="116.241194" data-mapy="40.218005" data-markx="116.24264" data-marky="40.218349" class="item">北京金隅万科</a>
            <a href="javascript:void(0)" data-index="北京" data-title="北京市复兴门内大街101号百盛购物中心6层" data-mapx="116.365192" data-mapy="39.913701" data-markx="116.364451" data-marky="39.914746" class="item">北京百盛</a>
            <a href="javascript:void(0)" data-index="武汉" data-title="武汉市解放大道688号武汉广场4楼" data-mapx="114.27642" data-mapy="30.586659" data-markx="114.27589" data-marky="30.586814" class="item">武汉广场</a>
            <a href="javascript:void(0)" data-index="武汉" data-title="武汉市武昌区水果湖汉街万达J3-2-4号" data-mapx="114.34904" data-mapy="30.56142" data-markx="114.349161" data-marky="30.56163" class="item">武汉万达汉街</a>
            <a href="javascript:void(0)" data-index="武汉" data-title="湖北省武汉市硚口区中山大道242号2层" data-mapx="114.274401" data-mapy="30.574984" data-markx="114.274172" data-marky="30.575116" class="item">武汉凯德</a>
            <a href="javascript:void(0)" data-index="武汉" data-title="武汉市中山大道756号中山大洋百货3楼" data-mapx="114.296731" data-mapy="30.583869" data-markx="114.296223" data-marky="30.583418" class="item">武汉中山大洋</a>
            <a href="javascript:void(0)" data-index="武汉" data-title="武汉市东湖新技术开发区光谷世界城光谷街3号-1区-101号光谷大洋百货2F" data-mapx="114.408558" data-mapy="30.512141" data-markx="114.407902" data-marky="30.511955" class="item">武汉光谷大洋</a>
            <a href="javascript:void(0)" data-index="宜昌" data-title="湖北省宜昌市西陵区夷林大道56号宜昌大洋百货3楼" data-mapx="111.298803" data-mapy="30.713658" data-markx="111.298017" data-marky="30.713511" class="item">宜昌大洋店</a>
            <a href="javascript:void(0)" data-index="温州" data-title="温州市解放南路银泰百货四楼" data-mapx="120.671304" data-mapy="28.01219" data-markx="120.671308" data-marky="28.012158" class="item">温州银泰</a>
            <a href="javascript:void(0)" data-index="温州" data-title="温州市人民路开太百货老馆二楼" data-mapx="120.669757" data-mapy="28.016727" data-markx="120.669699" data-marky="28.01644" class="item">温州开太</a>
            <a href="javascript:void(0)" data-index="温州" data-title="温州市车站大道时代广场三楼" data-mapx="120.69078" data-mapy="28.004178" data-markx="120.690829" data-marky="28.004266" class="item">温州时代</a>
            <a href="javascript:void(0)" data-index="温州" data-title="温州市龙湾区永中街道永定路1188号万达广场一层1010AB-B-1010B商铺" data-mapx="120.818038" data-mapy="27.925786" data-markx="120.818442" data-marky="27.925467" class="item">温州龙湾万达</a>
            <a href="javascript:void(0)" data-index="金华" data-title="浙江省金华市婺城区解放东路168号天地银泰百货A馆四楼 " data-mapx="119.660843" data-mapy="29.109723" data-markx="119.660838" data-marky="29.109786" class="item">金华银泰天地</a>
            <a href="javascript:void(0)" data-index="宁波" data-title="宁波市海曙区中山东路188号银泰百货2楼" data-mapx="121.561715" data-mapy="29.876973" data-markx="121.561261" data-marky="29.877396" class="item">宁波银泰自营店</a>
            <a href="javascript:void(0)" data-index="宁波" data-title="宁波市江北区大庆南路99号L2层L234号" data-mapx="121.56401" data-mapy="29.887839" data-markx="121.56352" data-marky="29.888019" class="item">宁波来福士</a>
            <a href="javascript:void(0)" data-index="宁波" data-title="宁波市右营巷43号" data-mapx="121.559107" data-mapy="29.874789" data-markx="121.559013" data-marky="29.87533" class="item">宁波酷购</a>
            <a href="javascript:void(0)" data-index="深圳" data-title="深圳市南山区桃园路86号天虹商场三楼" data-mapx="113.928905" data-mapy="22.538699" data-markx="113.928451" data-marky="22.538574" class="item">深圳南山天虹</a>
            <a href="javascript:void(0)" data-index="深圳" data-title="深圳市福田区华强北路茂业百货四楼" data-mapx="114.092995" data-mapy="22.551216" data-markx="114.092837" data-marky="22.551449" class="item">深圳华强茂业</a>
            <a href="javascript:void(0)" data-index="深圳" data-title="深圳市罗湖区解放路2001号利联太阳广场二楼" data-mapx="114.124519" data-mapy="22.551883" data-markx="114.124524" data-marky="22.551933" class="item">深圳太阳广场</a>
            <a href="javascript:void(0)" data-index="深圳" data-title="深圳市罗湖区东门中路茂业百货四楼" data-mapx="114.12786" data-mapy="22.553569" data-markx="114.127658" data-marky="22.553427" class="item">深圳东门茂业</a>
            <a href="javascript:void(0)" data-index="深圳" data-title="深圳市福田区华强北振兴路55号紫荆城一层" data-mapx="114.096279" data-mapy="22.552409" data-markx="114.095331" data-marky="22.552393" class="item">深圳紫荆城华强店</a>
            <a href="javascript:void(0)" data-index="深圳" data-title="深圳市宝安南路1881号华润中心万象城2楼NOVO" data-mapx="114.117659" data-mapy="22.545959" data-markx="114.117763" data-marky="22.546151" class="item">深圳NOVO</a>
            <a href="javascript:void(0)" data-index="深圳" data-title="深圳区南山区商业文化中心文心二路茂业时代广场商场4楼" data-mapx="113.936868" data-mapy="22.524987" data-markx="113.936837" data-marky="22.524929" class="item">深圳南山茂业</a>
            <a href="javascript:void(0)" data-index="深圳" data-title="深圳市罗湖区建设路3018号1234space三层L319号" data-mapx="114.122996" data-mapy="22.550982" data-markx="114.122551" data-marky="22.550757" class="item">深圳华润1234SPACE</a>
            <a href="javascript:void(0)" data-index="深圳" data-title="深圳福田区福华三路118号皇庭国商购物广场G层18号" data-mapx="114.066883" data-mapy="22.538624" data-markx="114.066429" data-marky="22.538566" class="item">深圳皇庭广场</a>
            <a href="javascript:void(0)" data-index="广州" data-title="广州市天河区天河路230号万菱汇L1一10铺" data-mapx="113.336057" data-mapy="23.138734" data-markx="113.335563" data-marky="23.138535" class="item">广州万菱汇</a>
            <a href="javascript:void(0)" data-index="广州" data-title="广州市海珠区工业大道北106-108号B1层S55、S56、S57号商铺" data-mapx="113.266648" data-mapy="23.095202" data-markx="113.265978" data-marky="23.095426" class="item">广州乐峰</a>
            <a href="javascript:void(0)" data-index="广州" data-title="广州市天河路228号正佳广场北门A104、A105号商铺" data-mapx="113.333813" data-mapy="23.138485" data-markx="113.332978" data-marky="23.138635" class="item">广州正佳广场NOVO </a>
            <a href="javascript:void(0)" data-index="青岛" data-title="青岛市香港中路69号麦凯乐3楼" data-mapx="120.409562" data-mapy="36.0714" data-markx="120.409584" data-marky="36.071422" class="item">青岛麦凯乐</a>
            <a href="javascript:void(0)" data-index="重庆" data-title="重庆市江北区龙湖北城天街新馆CQBCTJSY-X-3F-011" data-mapx="106.540077" data-mapy="29.582934" data-markx="106.539443" data-marky="29.583099" class="item">重庆北城天街</a>
            <a href="javascript:void(0)" data-index="重庆" data-title="重庆市南岸区江南大道28号LG2层022-023铺位" data-mapx="106.584193" data-mapy="29.5637" data-markx="106.583524" data-marky="29.563849" class="item">重庆协信时代广场</a>
            <a href="javascript:void(0)" data-index="重庆" data-title="重庆市沙坪坝区双巷子9号凯瑞百货2楼" data-mapx="106.470547" data-mapy="29.563322" data-markx="106.46977" data-marky="29.563173" class="item">重庆凯瑞</a>
            <a href="javascript:void(0)" data-index="重庆" data-title="重庆市渝中区长江2路174号龙湖时代天街A区2层08、09号" data-mapx="106.5178" data-mapy="29.544636" data-markx="106.517813" data-marky="29.54466" class="item">重庆时代天街</a>
            <a href="javascript:void(0)" data-index="福州" data-title="福建省福州市鼓楼区八一七北路133号大洋百货东街店4楼" data-mapx="119.306763" data-mapy="26.091408" data-markx="119.305573" data-marky="26.091335" class="item">福州大洋一店</a>
            <a href="javascript:void(0)" data-index="福州" data-title="福州市仓山区浦上大道276号仓山万达广场（一区）3号楼购物中心室内步行街一层38号店面" data-mapx="119.280799" data-mapy="26.041469" data-markx="119.281469" data-marky="26.042394" class="item">福州万达仓山</a>
            <a href="javascript:void(0)" data-index="福州" data-title="福建省福州市鼓楼区八一七北路84号福州东百百货2楼A214" data-mapx="119.305881" data-mapy="26.091352" data-markx="119.305517" data-marky="26.09132" class="item">福州东百</a>
            <a href="javascript:void(0)" data-index="福州" data-title="福建省福州市鼓楼区鼓楼五四路128号（闽江饭店旁）王府井百货4楼 " data-mapx="119.312376" data-mapy="26.098077" data-markx="119.31247" data-marky="26.097744" class="item">福州王府井</a>
            <a href="javascript:void(0)" data-index="福州" data-title="福建省福州市晋安区新店镇坂中路6号3期6号楼泰禾城市广场2层L204" data-mapx="119.332378" data-mapy="26.14483" data-markx="119.332337" data-marky="26.144887" class="item">福州泰禾</a>
        </div> 
    	<div id="diamonddataprovince"> 
            <a href="javascript:void(0)" class="item">北京</a>
            <a href="javascript:void(0)" class="item">上海</a>
            <a href="javascript:void(0)" class="item">重庆</a>
            <a href="javascript:void(0)" class="item">天津</a>
            <a href="javascript:void(0)" class="item">陕西</a>
            <a href="javascript:void(0)" class="item">贵州</a>
            <a href="javascript:void(0)" class="item">江西</a>
            <a href="javascript:void(0)" class="item">四川</a>
            <a href="javascript:void(0)" class="item">山东</a>
            <a href="javascript:void(0)" class="item">海南</a>
            <a href="javascript:void(0)" class="item">辽宁</a>
            <a href="javascript:void(0)" class="item">云南</a>
            <a href="javascript:void(0)" class="item">浙江</a>
            <a href="javascript:void(0)" class="item">江苏</a>
            <a href="javascript:void(0)" class="item">浙江</a>
            <a href="javascript:void(0)" class="item">广东</a>
            <a href="javascript:void(0)" class="item">福建</a>
        </div>
        <div id="diamonddatacity">
            <a href="javascript:void(0)" data-index="陕西" class="item">西安</a>
            <a href="javascript:void(0)" data-index="贵州" class="item">贵阳</a>
            <a href="javascript:void(0)" data-index="江西" class="item">南昌</a>
            <a href="javascript:void(0)" data-index="四川" class="item">成都</a>
            <a href="javascript:void(0)" data-index="山东" class="item">青岛</a>
            <a href="javascript:void(0)" data-index="海南" class="item">海口</a>
            <a href="javascript:void(0)" data-index="辽宁" class="item">大连</a>
            <a href="javascript:void(0)" data-index="辽宁" class="item">沈阳</a>
            <a href="javascript:void(0)" data-index="天津" class="item">天津</a>
            <a href="javascript:void(0)" data-index="上海" class="item">上海</a>
            <a href="javascript:void(0)" data-index="云南" class="item">昆明</a>
            <a href="javascript:void(0)" data-index="浙江" class="item">杭州</a>
            <a href="javascript:void(0)" data-index="浙江" class="item">常州</a>
            <a href="javascript:void(0)" data-index="江苏" class="item">江阴</a>
            <a href="javascript:void(0)" data-index="北京" class="item">北京</a>
            <a href="javascript:void(0)" data-index="浙江" class="item">温州</a>
            <a href="javascript:void(0)" data-index="浙江" class="item">金华</a>
            <a href="javascript:void(0)" data-index="广东" class="item">深圳</a>
            <a href="javascript:void(0)" data-index="广东" class="item">广州</a>
            <a href="javascript:void(0)" data-index="重庆" class="item">重庆</a>
            <a href="javascript:void(0)" data-index="福建" class="item">福州</a>
        </div>
        <div id="diamonddatastore">
            <a href="javascript:void(0)" data-index="西安" data-title="西安市高新区科技路37号玫瑰大楼2层" data-mapx="108.907817" data-mapy="34.238317" data-markx="108.908383" data-marky="34.238832" class="item">西安高新金鹰</a>
            <a href="javascript:void(0)" data-index="贵阳" data-title="贵阳市喷水池国贸广场三楼" data-mapx="106.718262" data-mapy="26.58984" data-markx="106.718487" data-marky="26.590415" class="item">贵阳国贸百货</a>
            <a href="javascript:void(0)" data-index="南昌" data-title="江西省南昌市八一大道357号财富广场2楼" data-mapx="115.910485" data-mapy="28.683854" data-markx="115.910611" data-marky="28.683822" class="item">南昌财富广场</a>
            <a href="javascript:void(0)" data-index="成都" data-title="成都市青羊区二环路西二段19号3楼" data-mapx="104.026371" data-mapy="30.668864" data-markx="104.025931" data-marky="30.66892" class="item">成都仁和春天</a>
            <a href="javascript:void(0)" data-index="成都" data-title="成都市武侯区科华中路5号王府井购物中心2楼" data-mapx="104.082635" data-mapy="30.624502" data-markx="104.082923" data-marky="30.625566" class="item">成都王府井2号店</a>
            <a href="javascript:void(0)" data-index="青岛" data-title="青岛市香港中路38号阳光百货2楼" data-mapx="120.3971" data-mapy="36.0709" data-markx="120.396907" data-marky="36.071014" class="item">青岛阳光百货</a>
            <a href="javascript:void(0)" data-index="海口" data-title="海南省海口市海秀大道望海国际商城民生百货 2F" data-mapx="110.352278" data-mapy="20.034558" data-markx="110.351002" data-marky="20.037088" class="item">海口民生</a>
            <a href="javascript:void(0)" data-index="大连" data-title="大连市中山区青泥街57号2楼" data-mapx="121.643198" data-mapy="38.921392" data-markx="121.642088" data-marky="38.922051" class="item">大连麦凯乐</a>
            <a href="javascript:void(0)" data-index="沈阳" data-title="沈阳市沈河区中街路128号皇城恒隆广场1楼127号" data-mapx="123.440846" data-mapy="41.806286" data-markx="123.439813" data-marky="41.807119" class="item">沈阳恒隆</a>
            <a href="javascript:void(0)" data-index="天津" data-title="天津市河西区乐园道9号银河国际购物中心L2-022、L2-021-2" data-mapx="117.219893" data-mapy="39.096847" data-markx="117.219875" data-marky="39.096875" class="item">天津银河国际</a>
            <a href="javascript:void(0)" data-index="上海" data-title="上海市南京西路1038号4楼" data-mapx="121.463345" data-mapy="31.235018" data-markx="121.463825" data-marky="31.235203" class="item">梅陇镇</a>
            <a href="javascript:void(0)" data-index="上海" data-title="上海市中山北路3300号一层 L1119~L1120" data-mapx="121.417976" data-mapy="31.236612" data-markx="121.417684" data-marky="31.237504" class="item">上海月星环球</a>
            <a href="javascript:void(0)" data-index="昆明" data-title="昆明市白塔路131号金格百货汇都店二楼" data-mapx="102.732183" data-mapy="25.0419" data-markx="102.732174" data-marky="25.042194" class="item">昆明汇都</a>
            <a href="javascript:void(0)" data-index="杭州" data-title="杭州市延安路530号 2楼" data-mapx="120.17021" data-mapy="30.273841" data-markx="120.170192" data-marky="30.273958" class="item">杭州武林银泰</a>
            <a href="javascript:void(0)" data-index="常州" data-title="常州市钟楼区延陵西路95号~97号" data-mapx="119.856269" data-mapy="31.792651" data-markx="119.856233" data-marky="31.792697" class="item">常州泰富</a>
            <a href="javascript:void(0)" data-index="江阴" data-title="江阴市人民中路85号2楼" data-mapx="120.278469" data-mapy="31.911197" data-markx="120.278505" data-marky="31.91184" class="item">江阴华联</a>
            <a href="javascript:void(0)" data-index="北京" data-title="北京市朝阳区建国路87号新光天地三层D3025" data-mapx="116.484893" data-mapy="39.915465" data-markx="116.484866" data-marky="39.91541" class="item">新光天地</a>
            <a href="javascript:void(0)" data-index="温州" data-title="温州市解放南路温州银泰百货3楼" data-mapx="120.632693" data-mapy="27.785044" data-markx="120.632037" data-marky="27.785472" class="item">温州银泰</a>
            <a href="javascript:void(0)" data-index="温州" data-title="温州市车站大道时代广场二楼" data-mapx="120.690787" data-mapy="28.005367" data-markx="120.690823" data-marky="28.004178" class="item">温州时代</a>
            <a href="javascript:void(0)" data-index="金华" data-title="浙江省金华市婺城区解放东路168号二楼" data-mapx="119.661687" data-mapy="29.109699" data-markx="119.660825" data-marky="29.109723" class="item">金华银泰</a>
            <a href="javascript:void(0)" data-index="深圳" data-title="深圳福田区福华三路COCO PARK一层099-100号" data-mapx="114.062596" data-mapy="22.538724" data-markx="114.061392" data-marky="22.538507" class="item">深圳COCOPark</a>
            <a href="javascript:void(0)" data-index="广州" data-title="广州市天河区天河路208号天河城购物中心第一层189-191号" data-mapx="113.33" data-mapy="23.139225" data-markx="113.329165" data-marky="23.139108" class="item">广州天河城</a>
            <a href="javascript:void(0)" data-index="广州" data-title="广州市天河路383号太古汇商场MU 38号商铺" data-mapx="113.338836" data-mapy="23.139322" data-markx="113.337812" data-marky="23.139636" class="item">广州太古汇</a>
            <a href="javascript:void(0)" data-index="重庆" data-title="重庆市江北区建新北路68号L212商铺" data-mapx="106.537925" data-mapy="29.584077" data-markx="106.537026" data-marky="29.584603" class="item">重庆星光68广场</a>
            <a href="javascript:void(0)" data-index="福州" data-title="福州市鼓楼区八一七北路268号福州大洋晶典百货2F 236号" data-mapx="119.305639" data-mapy="26.081718" data-markx="119.306349" data-marky="26.081974" class="item">福州大洋二店</a>
        </div> 
    	<div id="dazzledataprovince"> 
            <a href="javascript:void(0)" class="item">北京</a>
            <a href="javascript:void(0)" class="item">上海</a>
            <a href="javascript:void(0)" class="item">天津</a>
            <a href="javascript:void(0)" class="item">重庆</a>
            <a href="javascript:void(0)" class="item">吉林</a>
            <a href="javascript:void(0)" class="item">山西</a>
            <a href="javascript:void(0)" class="item">黑龙江</a>
            <a href="javascript:void(0)" class="item">内蒙古</a>
            <a href="javascript:void(0)" class="item">辽宁</a>
            <a href="javascript:void(0)" class="item">河北</a>
            <a href="javascript:void(0)" class="item">陕西</a>
            <a href="javascript:void(0)" class="item">新疆</a>
            <a href="javascript:void(0)" class="item">甘肃</a>
            <a href="javascript:void(0)" class="item">山东</a>
            <a href="javascript:void(0)" class="item">福建</a>
            <a href="javascript:void(0)" class="item">广东</a>
            <a href="javascript:void(0)" class="item">福建</a>
            <a href="javascript:void(0)" class="item">广西</a>
            <a href="javascript:void(0)" class="item">贵州</a>
            <a href="javascript:void(0)" class="item">云南</a>
            <a href="javascript:void(0)" class="item">湖南</a>
            <a href="javascript:void(0)" class="item">四川</a>
            <a href="javascript:void(0)" class="item">湖南</a>
            <a href="javascript:void(0)" class="item">江西</a>
            <a href="javascript:void(0)" class="item">河南</a>
            <a href="javascript:void(0)" class="item">江苏</a>
            <a href="javascript:void(0)" class="item">山东</a>
            <a href="javascript:void(0)" class="item">广西</a>
            <a href="javascript:void(0)" class="item">辽宁</a>
            <a href="javascript:void(0)" class="item">河北</a>
            <a href="javascript:void(0)" class="item">江苏</a>
            <a href="javascript:void(0)" class="item">浙江</a>
            <a href="javascript:void(0)" class="item">江苏</a>
            <a href="javascript:void(0)" class="item">湖北</a>
            <a href="javascript:void(0)" class="item">浙江 </a>
            <a href="javascript:void(0)" class="item">广东</a>
            <a href="javascript:void(0)" class="item">山东</a>
        </div>
        <div id="dazzledatacity">
        	<a href="javascript:void(0)" data-index="吉林" class="item">长春</a>
            <a href="javascript:void(0)" data-index="山西" class="item">太原</a>
            <a href="javascript:void(0)" data-index="黑龙江" class="item">哈尔滨</a>
            <a href="javascript:void(0)" data-index="内蒙古" class="item">呼和浩特</a>
            <a href="javascript:void(0)" data-index="辽宁" class="item">沈阳</a>
            <a href="javascript:void(0)" data-index="河北" class="item">唐山</a>
            <a href="javascript:void(0)" data-index="陕西" class="item">西安</a>
            <a href="javascript:void(0)" data-index="新疆" class="item">乌鲁木齐</a>
            <a href="javascript:void(0)" data-index="甘肃" class="item">兰州</a>
            <a href="javascript:void(0)" data-index="山东" class="item">烟台</a>
            <a href="javascript:void(0)" data-index="福建" class="item">厦门</a>
            <a href="javascript:void(0)" data-index="广东" class="item">佛山</a>
            <a href="javascript:void(0)" data-index="福建" class="item">福州</a>
            <a href="javascript:void(0)" data-index="广西" class="item">桂林</a>
            <a href="javascript:void(0)" data-index="贵州" class="item">贵阳</a>
            <a href="javascript:void(0)" data-index="云南" class="item">昆明</a>
            <a href="javascript:void(0)" data-index="湖南" class="item">长沙</a>
            <a href="javascript:void(0)" data-index="四川" class="item">成都</a>
            <a href="javascript:void(0)" data-index="湖南" class="item">株洲</a>
            <a href="javascript:void(0)" data-index="江西" class="item">南昌</a>
            <a href="javascript:void(0)" data-index="河南" class="item">郑州</a>
            <a href="javascript:void(0)" data-index="江苏" class="item">江阴</a>
            <a href="javascript:void(0)" data-index="山东" class="item">青岛</a>
            <a href="javascript:void(0)" data-index="广西" class="item">南宁</a>
            <a href="javascript:void(0)" data-index="辽宁" class="item">大连</a>
            <a href="javascript:void(0)" data-index="河北" class="item">石家庄</a>
            <a href="javascript:void(0)" data-index="天津" class="item">天津</a>
            <a href="javascript:void(0)" data-index="上海" class="item">上海</a>
            <a href="javascript:void(0)" data-index="江苏" class="item">无锡</a>
            <a href="javascript:void(0)" data-index="浙江" class="item">杭州</a>
            <a href="javascript:void(0)" data-index="江苏" class="item">南京</a>
            <a href="javascript:void(0)" data-index="江苏" class="item">苏州</a>
            <a href="javascript:void(0)" data-index="江苏" class="item">常州</a>
            <a href="javascript:void(0)" data-index="北京" class="item">北京</a>
            <a href="javascript:void(0)" data-index="湖北" class="item">武汉</a>
            <a href="javascript:void(0)" data-index="浙江 " class="item">温州</a>
            <a href="javascript:void(0)" data-index="浙江 " class="item">金华</a>
            <a href="javascript:void(0)" data-index="浙江 " class="item">宁波</a>
            <a href="javascript:void(0)" data-index="广东" class="item">深圳</a>
            <a href="javascript:void(0)" data-index="广东" class="item">广州</a>
            <a href="javascript:void(0)" data-index="山东" class="item">济南</a>
            <a href="javascript:void(0)" data-index="重庆" class="item">重庆</a>
        </div>
        <div id="dazzledatastore">
            <a href="javascript:void(0)" data-index="长春" data-title="长春市工农大路1128号欧亚商都三楼" data-mapx="125.306284" data-mapy="43.876499" data-markx="125.306985" data-marky="43.876208" class="item">长春欧亚</a>
            <a href="javascript:void(0)" data-index="太原" data-title="太原市小店区亲贤街99号3楼" data-mapx="112.566085" data-mapy="37.829601" data-markx="112.566139" data-marky="37.829993" class="item">太原王府井</a>
            <a href="javascript:void(0)" data-index="太原" data-title="山西省太原市小店区长风街116号北美新天地3层" data-mapx="112.568703" data-mapy="37.823387" data-markx="112.568667" data-marky="37.823344" class="item">太原北美新天地</a>
            <a href="javascript:void(0)" data-index="哈尔滨" data-title="哈尔滨市果戈里大街378号远大购物中心三楼" data-mapx="126.65115" data-mapy="45.766373" data-markx="126.651617" data-marky="45.76576" class="item">哈尔滨远大</a>
            <a href="javascript:void(0)" data-index="呼和浩特" data-title="内蒙古呼和浩特新华东街维多利国际广场二层" data-mapx="111.704101" data-mapy="40.833996" data-markx="111.704074" data-marky="40.833955" class="item">维多利国际广场</a>
            <a href="javascript:void(0)" data-index="呼和浩特" data-title="内蒙古呼和浩特市万达广场一楼" data-mapx="111.742458" data-mapy="40.842858" data-markx="111.739835" data-marky="40.842469" class="item">呼和浩特万达</a>
            <a href="javascript:void(0)" data-index="呼和浩特" data-title="内蒙古呼和浩特中山西路维多利购物中心四层" data-mapx="111.676451" data-mapy="40.822532" data-markx="111.675122" data-marky="40.821252" class="item">维多利购物中心</a>
            <a href="javascript:void(0)" data-index="沈阳" data-title="沈阳市大东区小东路1号大商集团新玛特休闲购物广场2楼" data-mapx="123.471124" data-mapy="41.807798" data-markx="123.472885" data-marky="41.808675" class="item">沈阳中街新玛特</a>
            <a href="javascript:void(0)" data-index="沈阳" data-title="沈阳市和平区中华路88号沈阳新世界百货3层" data-mapx="123.409022" data-mapy="41.797789" data-markx="123.409327" data-marky="41.797537" class="item">沈阳新世界3店</a>
            <a href="javascript:void(0)" data-index="沈阳" data-title="辽宁省沈阳和平区太原北街86号中兴—沈阳商业大厦3F" data-mapx="123.407635" data-mapy="41.799208" data-markx="123.407644" data-marky="41.798349" class="item">沈阳中兴</a>
            <a href="javascript:void(0)" data-index="唐山" data-title="河北省唐山市北新西道22号凤凰购物广场4F" data-mapx="118.167389" data-mapy="39.639165" data-markx="118.167353" data-marky="39.639294" class="item">唐山凤凰购物广场（新）</a>
            <a href="javascript:void(0)" data-index="唐山" data-title="唐山新华东道100号万达购物广场1楼" data-mapx="118.191401" data-mapy="39.631303" data-markx="118.191149" data-marky="39.631445" class="item">唐山万达</a>
            <a href="javascript:void(0)" data-index="西安" data-title="西安市莲湖区西大街（时代盛典）时代百盛购物中心三楼" data-mapx="108.945825" data-mapy="34.268491" data-markx="108.944981" data-marky="34.266109" class="item">西安西大街百盛</a>
            <a href="javascript:void(0)" data-index="西安" data-title="西安市东大街民生兴正元一楼" data-mapx="108.956805" data-mapy="34.265582" data-markx="108.956733" data-marky="34.264079" class="item">西安兴正元</a>
            <a href="javascript:void(0)" data-index="西安" data-title="陕西省西安市高新区高新路金鹰购物中心4F" data-mapx="108.909279" data-mapy="34.238556" data-markx="108.908362" data-marky="34.238841" class="item">西安金鹰国际购物中心</a>
            <a href="javascript:void(0)" data-index="西安" data-title="西安市碑林区解放市场6号开元商场负一层" data-mapx="108.954672" data-mapy="34.265038" data-markx="108.954807" data-marky="34.264974" class="item">西安开元钟楼店</a>
            <a href="javascript:void(0)" data-index="乌鲁木齐" data-title="乌鲁木齐市红山友好百盛2F" data-mapx="87.60673" data-mapy="43.810856" data-markx="87.606752" data-marky="43.81088" class="item">乌鲁木齐友好百盛</a>
            <a href="javascript:void(0)" data-index="兰州" data-title="兰州市城关区东方红广场国芳百盛5楼5020" data-mapx="103.847137" data-mapy="36.058811" data-markx="103.845955" data-marky="36.059555" class="item">兰州国芳百货</a>
            <a href="javascript:void(0)" data-index="烟台" data-title="山东省烟台市芝罘区西大街8号振华商厦东区二楼" data-mapx="121.391001" data-mapy="37.54733" data-markx="121.391603" data-marky="37.547181" class="item">烟台振华商厦</a>
            <a href="javascript:void(0)" data-index="厦门" data-title="厦门嘉禾路SM二期新生活广场红宝石2楼 C228" data-mapx="118.132144" data-mapy="24.504552" data-markx="118.132014" data-marky="24.505256" class="item">厦门SM二期</a>
            <a href="javascript:void(0)" data-index="厦门" data-title="厦门市湖里区湖边万达广场1-150" data-mapx="118.182626" data-mapy="24.511333" data-markx="118.182563" data-marky="24.511376" class="item">厦门湖里万达店</a>
            <a href="javascript:void(0)" data-index="佛山" data-title="广东省佛山市禅城区祖庙路42号之一二楼2A40铺" data-mapx="113.117814" data-mapy="23.03205" data-markx="113.11772" data-marky="23.033081" class="item">佛山兴华</a>
            <a href="javascript:void(0)" data-index="福州" data-title="福州市鼓楼区八一七北路133号大洋百货4F-A17 " data-mapx="119.306607" data-mapy="26.090144" data-markx="119.306566" data-marky="26.090322" class="item">福州大洋一店</a>
            <a href="javascript:void(0)" data-index="福州" data-title="福州市台江区鳌峰路万达广场室内步行街B1-27号" data-mapx="119.350089" data-mapy="26.059262" data-markx="119.350184" data-marky="26.059481" class="item">福州万达店</a>
            <a href="javascript:void(0)" data-index="福州" data-title="福州市仓山区浦上大道万达广场一区3号楼室内步行街一层1-58号店专柜" data-mapx="119.280558" data-mapy="26.041631" data-markx="119.281465" data-marky="26.042437" class="item">福州仓山万达店</a>
            <a href="javascript:void(0)" data-index="桂林" data-title="广西省桂林市秀峰区中山中路37号微笑堂商厦2楼" data-mapx="110.300684" data-mapy="25.28415" data-markx="110.301749" data-marky="25.284613" class="item">桂林微笑堂</a>
            <a href="javascript:void(0)" data-index="贵阳" data-title="贵阳市大西门国晨百货二楼" data-mapx="106.714092" data-mapy="26.582885" data-markx="106.714267" data-marky="26.583202" class="item">贵阳国晨百货</a>
            <a href="javascript:void(0)" data-index="贵阳" data-title="贵阳市喷水池南国花锦三楼" data-mapx="106.719249" data-mapy="26.588108" data-markx="106.719204" data-marky="26.588076" class="item">贵阳南国花景</a>
            <a href="javascript:void(0)" data-index="昆明" data-title="昆明市三市街6号柏联广场百盛二楼" data-mapx="102.717321" data-mapy="25.04185" data-markx="102.716634" data-marky="25.0423" class="item">昆明百盛</a>
            <a href="javascript:void(0)" data-index="昆明" data-title="昆明市东风西路顺城购物中心E区二楼" data-mapx="102.71445" data-mapy="25.042382" data-markx="102.714603" data-marky="25.042513" class="item">昆明顺城</a>
            <a href="javascript:void(0)" data-index="长沙" data-title="长沙市天心区五一路平和堂2F" data-mapx="112.983999" data-mapy="28.199804" data-markx="112.983285" data-marky="28.200023" class="item">长沙平和堂百货</a>
            <a href="javascript:void(0)" data-index="长沙" data-title="长沙市天心区黄兴南路王府井百货4F" data-mapx="112.983008" data-mapy="28.197742" data-markx="112.982761" data-marky="28.198511" class="item">长沙王府井百货</a>
            <a href="javascript:void(0)" data-index="长沙" data-title="长沙市芙蓉五一大道368号友谊商店B座5F" data-mapx="113.004298" data-mapy="28.2006" data-markx="113.004159" data-marky="28.201595" class="item">长沙友谊</a>
            <a href="javascript:void(0)" data-index="成都" data-title="成都市大科甲巷8号D座2楼" data-mapx="104.085958" data-mapy="30.660219" data-markx="104.085926" data-marky="30.660506" class="item">成都伊势丹</a>
            <a href="javascript:void(0)" data-index="成都" data-title="成都市逸都路6号2楼" data-mapx="104.027076" data-mapy="30.652133" data-markx="104.02665" data-marky="30.651186" class="item">成都双楠伊腾</a>
            <a href="javascript:void(0)" data-index="成都" data-title="成都市总府路15号4楼" data-mapx="104.086691" data-mapy="30.6648" data-markx="104.086614" data-marky="30.664932" class="item">成都王府井</a>
            <a href="javascript:void(0)" data-index="成都" data-title="成都市二环路东5段成仁路口万达广场伊藤 2楼" data-mapx="104.102906" data-mapy="30.626709" data-markx="104.103023" data-marky="30.627548" class="item">成都锦华伊藤</a>
            <a href="javascript:void(0)" data-index="成都" data-title="成都市武侯区科华中路5号王府井购物中心2楼" data-mapx="104.083106" data-mapy="30.625582" data-markx="104.08294" data-marky="30.625536" class="item">成都王府井2号店</a>
            <a href="javascript:void(0)" data-index="成都" data-title="成都市金牛区一环路北三段1号一楼1068号店铺" data-mapx="104.081654" data-mapy="30.692245" data-markx="104.080149" data-marky="30.692734" class="item">成都金牛万达广场</a>
            <a href="javascript:void(0)" data-index="成都" data-title="成都市成华区双林路339号欢乐颂1楼" data-mapx="104.100093" data-mapy="30.666265" data-markx="104.100789" data-marky="30.666459" class="item">成都欢乐颂da</a>
            <a href="javascript:void(0)" data-index="株洲" data-title="湖南省株洲市芦淞区车站路61号平和1F" data-mapx="113.158619" data-mapy="27.839823" data-markx="113.160334" data-marky="27.840366" class="item">株洲平和堂三店</a>
            <a href="javascript:void(0)" data-index="株洲" data-title="湖南省株洲市芦淞区新华西路999号王府井商场3F" data-mapx="113.159976" data-mapy="27.844638" data-markx="113.160147" data-marky="27.844963" class="item">株洲王府井</a>
            <a href="javascript:void(0)" data-index="株洲" data-title="湖南省株洲市芦淞区建设路中兴广场百货大楼5F" data-mapx="113.149634" data-mapy="27.853915" data-markx="113.147869" data-marky="27.85362" class="item">株洲百货大楼</a>
            <a href="javascript:void(0)" data-index="南昌" data-title="江西省南昌市中山路177号百盛购物中心2楼" data-mapx="115.898932" data-mapy="28.681137" data-markx="115.898227" data-marky="28.681794" class="item">南昌百盛</a>
            <a href="javascript:void(0)" data-index="南昌" data-title="江西省南昌市会展路999号" data-mapx="115.855733" data-mapy="28.697242" data-markx="115.856959" data-marky="28.699269" class="item">南昌红谷万达</a>
            <a href="javascript:void(0)" data-index="南昌" data-title="江西南昌中山路1号百货大楼2楼" data-mapx="115.909501" data-mapy="28.681889" data-markx="115.909618" data-marky="28.681905" class="item">南昌百货大楼</a>
            <a href="javascript:void(0)" data-index="郑州" data-title="郑州市花园路大商新玛特郑州总店二层  " data-mapx="113.688005" data-mapy="34.791217" data-markx="113.68805" data-marky="34.790728" class="item">郑州大商国贸店</a>
            <a href="javascript:void(0)" data-index="郑州" data-title="郑州市二七路大商新玛特金博大店二层 " data-mapx="113.672114" data-mapy="34.760373" data-markx="113.672586" data-marky="34.761886" class="item">郑州金博大</a>
            <a href="javascript:void(0)" data-index="郑州" data-title="郑州市金水区花园路丹尼斯三楼" data-mapx="113.687646" data-mapy="34.7922" data-markx="113.688621" data-marky="34.792611" class="item">郑州丹尼斯花园店</a>
            <a href="javascript:void(0)" data-index="郑州" data-title="郑州市人民路2号丹尼斯百货B1楼" data-mapx="113.681499" data-mapy="34.762783" data-markx="113.681522" data-marky="34.763339" class="item">郑州丹尼斯人民路店</a>
            <a href="javascript:void(0)" data-index="江阴" data-title="江阴市人民中路85号3楼" data-mapx="120.278494" data-mapy="31.911802" data-markx="120.278503" data-marky="31.911879" class="item">江阴华联</a>
            <a href="javascript:void(0)" data-index="江阴" data-title="江阴市人民西路281号万达广场室内步行街1楼1011号" data-mapx="120.249465" data-mapy="31.905633" data-markx="120.251271" data-marky="31.905554" class="item">江阴万达</a>
            <a href="javascript:void(0)" data-index="青岛" data-title="青岛市香港中路38号阳光百货3楼" data-mapx="120.3971" data-mapy="36.0709" data-markx="120.396907" data-marky="36.071014" class="item">青岛阳光百货</a>
            <a href="javascript:void(0)" data-index="青岛" data-title="青岛市香港中路69号2楼" data-mapx="120.409562" data-mapy="36.0714" data-markx="120.409571" data-marky="36.071429" class="item">青岛麦凯乐</a>
            <a href="javascript:void(0)" data-index="青岛" data-title="青岛市澳门路88号百丽广场东区F1--58/59" data-mapx="120.401646" data-mapy="36.065791" data-markx="120.401637" data-marky="36.065811" class="item">青岛百丽</a>
            <a href="javascript:void(0)" data-index="青岛" data-title="青岛香港中路72号佳世客一楼" data-mapx="120.402978" data-mapy="36.070506" data-markx="120.402606" data-marky="36.070714" class="item">青岛东部佳世客</a>
            <a href="javascript:void(0)" data-index="青岛" data-title="青岛市北区延吉116号CBD万达步行街一楼" data-mapx="120.362441" data-mapy="36.087625" data-markx="120.360918" data-marky="36.088449" class="item">青岛CBD万达</a>
            <a href="javascript:void(0)" data-index="南宁" data-title="广西南宁民族大道梦之岛百货2F" data-mapx="108.342422" data-mapy="22.819549" data-markx="108.342431" data-marky="22.819566" class="item">南宁梦之岛</a>
            <a href="javascript:void(0)" data-index="南宁" data-title="广西南宁市朝阳路青云街18号百盛商场3F " data-mapx="108.329091" data-mapy="22.821131" data-markx="108.328826" data-marky="22.821322" class="item">南宁百盛</a>
            <a href="javascript:void(0)" data-index="南宁" data-title="广西南宁市青秀区民族大道136号万象城百货4F" data-mapx="108.398699" data-mapy="22.818399" data-markx="108.398313" data-marky="22.817766" class="item">南宁万象城</a>
            <a href="javascript:void(0)" data-index="大连" data-title="大连市中山区青泥街57号3楼" data-mapx="121.643198" data-mapy="38.921392" data-markx="121.642088" data-marky="38.922051" class="item">大连麦凯乐</a>
            <a href="javascript:void(0)" data-index="大连" data-title="大连市青山街1号2楼" data-mapx="121.641028" data-mapy="38.92095" data-markx="121.640233" data-marky="38.921013" class="item">大连新玛特</a>
            <a href="javascript:void(0)" data-index="大连" data-title="大连市沙河口区西安路123号2楼" data-mapx="121.593061" data-mapy="38.919728" data-markx="121.593519" data-marky="38.917089" class="item">大连麦凯乐二店</a>
            <a href="javascript:void(0)" data-index="大连" data-title="大连市高新区黄浦路500号一层1016" data-mapx="121.53941" data-mapy="38.867334" data-markx="121.539042" data-marky="38.86864" class="item">大连高新万达广场</a>
            <a href="javascript:void(0)" data-index="石家庄" data-title="石家庄市中山东路188号北国百货 2楼" data-mapx="114.516865" data-mapy="38.048852" data-markx="114.517898" data-marky="38.048809" class="item">石家庄北国</a>
            <a href="javascript:void(0)" data-index="石家庄" data-title="石家庄市长安区中山路与育才街交叉口先天下广场4楼" data-mapx="114.53405" data-mapy="38.048226" data-markx="114.53343" data-marky="38.047583" class="item">石家庄先天下</a>
            <a href="javascript:void(0)" data-index="天津" data-title="天津市和平区南京路108号现代城2楼" data-mapx="117.204242" data-mapy="39.124849" data-markx="117.20404" data-marky="39.124737" class="item">天津伊势丹</a>
            <a href="javascript:void(0)" data-index="天津" data-title="天津市塘沽区解放路668号金元宝商厦2楼" data-mapx="117.673901" data-mapy="39.02269" data-markx="117.673479" data-marky="39.023209" class="item">天津塘沽</a>
            <a href="javascript:void(0)" data-index="天津" data-title="天津市河西区乐园道9号银河国际购物中心L3-036" data-mapx="117.219893" data-mapy="39.096849" data-markx="117.219866" data-marky="39.096842" class="item">天津银河国际</a>
            <a href="javascript:void(0)" data-index="上海" data-title="上海市肇嘉浜路1000号2楼" data-mapx="121.445773" data-mapy="31.201287" data-markx="121.446739" data-marky="31.201426" class="item">上海汇金百货</a>
            <a href="javascript:void(0)" data-index="上海" data-title="上海市西藏中路268号3楼" data-mapx="121.483977" data-mapy="31.237588" data-markx="121.483245" data-marky="31.238044" class="item">上海来福士</a>
            <a href="javascript:void(0)" data-index="上海" data-title="南京西路1618号4楼D405" data-mapx="121.452703" data-mapy="31.229839" data-markx="121.452622" data-marky="31.229853" class="item">上海久光百货</a>
            <a href="javascript:void(0)" data-index="上海" data-title="上海市万航渡路889号1楼L21/22" data-mapx="121.434677" data-mapy="31.23569" data-markx="121.434686" data-marky="31.23567" class="item">上海悦达889</a>
            <a href="javascript:void(0)" data-index="上海" data-title="上海市浦东新区张杨路501号3楼 332" data-mapx="121.524241" data-mapy="31.233587" data-markx="121.524039" data-marky="31.233708" class="item">上海八佰伴</a>
            <a href="javascript:void(0)" data-index="上海" data-title="上海市中山北路3300号三层 L3093-3095" data-mapx="121.417976" data-mapy="31.236612" data-markx="121.417684" data-marky="31.237504" class="item">上海月星环球</a>
            <a href="javascript:void(0)" data-index="上海" data-title="上海市浦东新区陆家嘴路168号03FL46A" data-mapx="121.506718" data-mapy="31.242652" data-markx="121.506749" data-marky="31.243046" class="item">上海正大广场</a>
            <a href="javascript:void(0)" data-index="上海" data-title="上海市虹桥路1号 4楼422铺位号" data-mapx="121.443759" data-mapy="31.20212" data-markx="121.444213" data-marky="31.201263" class="item">上海港汇恒隆广场</a>
            <a href="javascript:void(0)" data-index="无锡" data-title="无锡市中山路343号3楼" data-mapx="120.307178" data-mapy="31.582175" data-markx="120.306176" data-marky="31.581967" class="item">无锡商业大厦</a>
            <a href="javascript:void(0)" data-index="无锡" data-title="无锡市中山路168号4楼" data-mapx="120.309433" data-mapy="31.577506" data-markx="120.309312" data-marky="31.578129" class="item">无锡八佰伴</a>
            <a href="javascript:void(0)" data-index="无锡" data-title="无锡市崇安区人民中路无锡恒隆广场商场409铺位" data-mapx="120.313447" data-mapy="31.577914" data-markx="120.314197" data-marky="31.577984" class="item">无锡恒隆</a>
            <a href="javascript:void(0)" data-index="杭州" data-title="杭州市延安路530号 4楼" data-mapx="120.17021" data-mapy="30.273841" data-markx="120.170201" data-marky="30.273903" class="item">杭州武林银泰</a>
            <a href="javascript:void(0)" data-index="杭州" data-title="浙江杭州西湖区萍水街丰潭路口杭州银泰城城西银泰百货地下一楼" data-mapx="120.113898" data-mapy="30.306111" data-markx="120.114559" data-marky="30.306628" class="item">杭州城西银泰</a>
            <a href="javascript:void(0)" data-index="南京" data-title="江苏省南京市中山路18号德基广场5楼L509" data-mapx="118.790926" data-mapy="32.048894" data-markx="118.790935" data-marky="32.048894" class="item">南京德基</a>
            <a href="javascript:void(0)" data-index="南京" data-title="南京市中山南路122号三楼" data-mapx="118.790475" data-mapy="32.044172" data-markx="118.790264" data-marky="32.0447" class="item">南京大洋</a>
            <a href="javascript:void(0)" data-index="苏州" data-title="苏州市人民路372号东楼 3楼" data-mapx="120.630912" data-mapy="31.29649" data-markx="120.631033" data-marky="31.296204" class="item">苏州泰华</a>
            <a href="javascript:void(0)" data-index="苏州" data-title="苏州市平江区观前街245号3楼" data-mapx="120.62812" data-mapy="31.316741" data-markx="120.628295" data-marky="31.316654" class="item">苏州美罗1店</a>
            <a href="javascript:void(0)" data-index="常州" data-title="常州市钟楼区延陵西路95号~97号" data-mapx="119.963278" data-mapy="31.784741" data-markx="119.96185" data-marky="31.784595" class="item">常州泰富</a>
            <a href="javascript:void(0)" data-index="常州" data-title="常州市延陵西路1-7号3楼" data-mapx="119.969487" data-mapy="31.78088" data-markx="119.96981" data-marky="31.780988" class="item">常州购物中心</a>
            <a href="javascript:void(0)" data-index="北京" data-title="北京市西城区西单北大街133号君太百货四层" data-mapx="116.37948" data-mapy="39.915763" data-markx="116.37948" data-marky="39.915805" class="item">君太百货</a>
            <a href="javascript:void(0)" data-index="北京" data-title="北京市东城区东直门南大街1号来福士购物中心三层11b/12" data-mapx="116.438717" data-mapy="39.946193" data-markx="116.438573" data-marky="39.946511" class="item">来福士</a>
            <a href="javascript:void(0)" data-index="北京" data-title="北京市东城区东长安街1号东方新天地首层AA50A" data-mapx="116.41844" data-mapy="39.916046" data-markx="116.418422" data-marky="39.916087" class="item">东方新天地</a>
            <a href="javascript:void(0)" data-index="北京" data-title="北京市海淀区复兴路33号翠微大厦四层西区" data-mapx="116.309832" data-mapy="39.914144" data-markx="116.311916" data-marky="39.914061" class="item">翠微百货</a>
            <a href="javascript:void(0)" data-index="北京" data-title="北京市海淀区丹棱街甲1号欧美汇商厦地上一层101-08单元" data-mapx="116.32153" data-mapy="39.985207" data-markx="116.321602" data-marky="39.985145" class="item">EC mall欧美汇</a>
            <a href="javascript:void(0)" data-index="北京" data-title="北京市海淀区远大路1号金源新燕莎Mall二层2098-2099" data-mapx="116.296851" data-mapy="39.964417" data-markx="116.295953" data-marky="39.964632" class="item">金源燕莎</a>
            <a href="javascript:void(0)" data-index="北京" data-title="北京市朝阳区朝阳北路101号朝悦大厦朝阳大悦城3F-29" data-mapx="116.526091" data-mapy="39.930508" data-markx="116.525731" data-marky="39.929989" class="item">朝阳大悦城</a>
            <a href="javascript:void(0)" data-index="北京" data-title="北京市朝阳区光华路9号世贸天阶A座二层L221" data-mapx="116.459614" data-mapy="39.922555" data-markx="116.457368" data-marky="39.92214" class="item">世贸天阶</a>
            <a href="javascript:void(0)" data-index="北京" data-title="北京市朝阳区东三环中路65号二层205号商铺" data-mapx="116.467515" data-mapy="39.899546" data-markx="116.467587" data-marky="39.90093" class="item">富力城</a>
            <a href="javascript:void(0)" data-index="北京" data-title="北京市东城区王府井大街138号新东安广场三层L315" data-mapx="116.418829" data-mapy="39.920211" data-markx="116.418025" data-marky="39.919865" class="item">新东安</a>
            <a href="javascript:void(0)" data-index="北京" data-title="北京市海淀区清河中街68号华润置地五彩城L152号商铺" data-mapx="116.339113" data-mapy="40.036553" data-markx="116.339841" data-marky="40.036456" class="item">五彩城</a>
            <a href="javascript:void(0)" data-index="北京" data-title="北京市东城区东直门外大街48号银座商场一层11、12号商铺" data-mapx="116.442037" data-mapy="39.945453" data-markx="116.441705" data-marky="39.946151" class="item">北京东方银座</a>
            <a href="javascript:void(0)" data-index="北京" data-title="北京市复兴门内大街101号百盛购物中心5层" data-mapx="116.3645" data-mapy="39.914441" data-markx="116.364496" data-marky="39.914676" class="item">北京百盛</a>
            <a href="javascript:void(0)" data-index="武汉" data-title="武汉市解放大道688号3楼" data-mapx="114.276123" data-mapy="30.586924" data-markx="114.275871" data-marky="30.586768" class="item">武汉广场</a>
            <a href="javascript:void(0)" data-index="武汉" data-title="武汉市洪山区珞瑜路6号2F" data-mapx="114.361734" data-mapy="30.531943" data-markx="114.361716" data-marky="30.531958" class="item">武汉群光</a>
            <a href="javascript:void(0)" data-index="武汉" data-title="武汉市武昌区水果湖汉街万达J3-2-4号" data-mapx="114.344743" data-mapy="30.562586" data-markx="114.343773" data-marky="30.561972" class="item">武汉万达汉街</a>
            <a href="javascript:void(0)" data-index="温州" data-title="温州市解放南路温州银泰百货4楼" data-mapx="120.632693" data-mapy="27.785044" data-markx="120.632037" data-marky="27.785472" class="item">温州银泰新店</a>
            <a href="javascript:void(0)" data-index="温州" data-title="温州市大南路鸿锳大厦103号" data-mapx="120.670038" data-mapy="28.014446" data-markx="120.670524" data-marky="28.014478" class="item">温州大南门专卖店</a>
            <a href="javascript:void(0)" data-index="温州" data-title="温州市车站大道时代广场三楼" data-mapx="120.690787" data-mapy="28.005367" data-markx="120.690823" data-marky="28.004178" class="item">温州时代</a>
            <a href="javascript:void(0)" data-index="金华" data-title="浙江省金华市婺城区解放东路168号天地银泰百货A馆四楼" data-mapx="119.661687" data-mapy="29.109699" data-markx="119.660825" data-marky="29.109723" class="item">金华银泰</a>
            <a href="javascript:void(0)" data-index="金华" data-title="金华市西市街159号4楼" data-mapx="119.66068" data-mapy="29.107964" data-markx="119.660473" data-marky="29.108414" class="item">金华一百</a>
            <a href="javascript:void(0)" data-index="宁波" data-title="宁波市中山东路188号2楼" data-mapx="121.55288" data-mapy="29.832339" data-markx="121.554147" data-marky="29.832903" class="item">宁波银泰自营店</a>
            <a href="javascript:void(0)" data-index="宁波" data-title="宁波市鄞州区四明中路999号万达广场1B-20" data-mapx="121.55132" data-mapy="29.832855" data-markx="121.55132" data-marky="29.832855" class="item">宁波鄞州万达</a>
            <a href="javascript:void(0)" data-index="宁波" data-title="宁波市江北区大庆南路99号L2层L231号" data-mapx="121.56384" data-mapy="29.888732" data-markx="121.563543" data-marky="29.887989" class="item">宁波来福士</a>
            <a href="javascript:void(0)" data-index="深圳" data-title="深圳区南山区商业文化中心文心二路茂业时代广场商场4楼" data-mapx="113.936868" data-mapy="22.524987" data-markx="113.93685" data-marky="22.524862" class="item">深圳南山茂业</a>
            <a href="javascript:void(0)" data-index="深圳" data-title="深圳市福田区街道福华一路3号怡景中心城G层RG035-036号" data-mapx="114.066115" data-mapy="22.540385" data-markx="114.066295" data-marky="22.540635" class="item">深圳中心城</a>
            <a href="javascript:void(0)" data-index="深圳" data-title="深圳市南山区文心五路33号海岸城购物广场三层311店铺" data-mapx="113.943197" data-mapy="22.522026" data-markx="113.942488" data-marky="22.522494" class="item">深圳海岸城</a>
            <a href="javascript:void(0)" data-index="深圳" data-title="深圳市罗湖区太宁路百仕达吉之岛旁边喜荟城1楼117号" data-mapx="114.147757" data-mapy="22.573602" data-markx="114.145547" data-marky="22.575206" class="item">深圳喜荟城</a>
            <a href="javascript:void(0)" data-index="深圳" data-title="深圳市福田区华强北振兴路55号紫荆城一层" data-mapx="114.094783" data-mapy="22.55225" data-markx="114.095286" data-marky="22.552367" class="item">深圳华强紫荆城</a>
            <a href="javascript:void(0)" data-index="深圳" data-title="深圳市宝安南路1881号华润中心万象城2楼NOVO" data-mapx="114.117812" data-mapy="22.546084" data-markx="114.117022" data-marky="22.546002" class="item">深圳万象城NOVO</a>
            <a href="javascript:void(0)" data-index="深圳" data-title="深圳市福田区华强北华强路茂业百货4楼" data-mapx="114.09316" data-mapy="22.551132" data-markx="114.092836" data-marky="22.551424" class="item">深圳华强北茂业</a>
            <a href="javascript:void(0)" data-index="深圳" data-title="深圳市罗湖区人民南路2028号金光华广场地下一楼" data-mapx="114.12605" data-mapy="22.545817" data-markx="114.126032" data-marky="22.545875" class="item">深圳金光华</a>
            <a href="javascript:void(0)" data-index="深圳" data-title="深圳市罗湖区深南东路5016号蔡屋围京基金融中心百纳KK MALL-NOVO3楼" data-mapx="114.113626" data-mapy="22.55084" data-markx="114.113087" data-marky="22.551241" class="item">深圳KK MALL</a>
            <a href="javascript:void(0)" data-index="深圳" data-title="深圳市罗湖区东门中路茂业百货三楼" data-mapx="114.127312" data-mapy="22.55321" data-markx="114.127752" data-marky="22.553411" class="item">深圳东门茂业</a>
            <a href="javascript:void(0)" data-index="深圳" data-title="深圳市福田区福华三路星河国际花园君尚百货二楼" data-mapx="114.126827" data-mapy="22.55377" data-markx="114.124913" data-marky="22.554345" class="item">深圳CBD天虹</a>
            <a href="javascript:void(0)" data-index="深圳" data-title="深圳市罗湖区建设路3018号1234space二楼L205号" data-mapx="113.900653" data-mapy="22.7864" data-markx="113.89962" data-marky="22.786966" class="item">深圳华润1234SPACE</a>
            <a href="javascript:void(0)" data-index="深圳" data-title="深圳福田区福华三路118号皇庭国商购物广场G层15、16号" data-mapx="114.06612" data-mapy="22.538699" data-markx="114.066398" data-marky="22.538557" class="item">深圳皇庭广场</a>
            <a href="javascript:void(0)" data-index="广州" data-title="广州市越秀区环市东路369号3楼" data-mapx="113.294224" data-mapy="23.142946" data-markx="113.293478" data-marky="23.143935" class="item">广州友谊</a>
            <a href="javascript:void(0)" data-index="广州" data-title="广州市农林下路40号 广州王府井百货4楼" data-mapx="113.3045" data-mapy="23.135719" data-markx="113.3045" data-marky="23.135743" class="item">广州王府井</a>
            <a href="javascript:void(0)" data-index="广州" data-title="广州市天河区天河路230号万菱汇L1层008-009铺" data-mapx="113.336057" data-mapy="23.138734" data-markx="113.335572" data-marky="23.138435" class="item">广州万菱汇</a>
            <a href="javascript:void(0)" data-index="广州" data-title="广州市白云区云城东路509号白云万达广场一层155-156号" data-mapx="113.273348" data-mapy="23.178698" data-markx="113.272953" data-marky="23.177934" class="item">广州万达</a>
            <a href="javascript:void(0)" data-index="广州" data-title="广州市天河路228号正佳广场北门A108铺" data-mapx="113.333813" data-mapy="23.138485" data-markx="113.332933" data-marky="23.138601" class="item">广州正佳广场NOVO </a>
            <a href="javascript:void(0)" data-index="广州" data-title="广州市海珠区工业大道北106-108号B1层S55、S56、S57号商铺" data-mapx="113.265947" data-mapy="23.095368" data-markx="113.265911" data-marky="23.095385" class="item">广州乐峰</a>
            <a href="javascript:void(0)" data-index="广州" data-title="广州市越秀区中山三路33号中华广场负一层A8号商铺" data-mapx="113.28863" data-mapy="23.131747" data-markx="113.28863" data-marky="23.13178" class="item">广州中华广场负一层</a>
            <a href="javascript:void(0)" data-index="济南" data-title="济南市泺源大街66号 银座商城4楼" data-mapx="117.03597" data-mapy="36.665695" data-markx="117.035988" data-marky="36.665709" class="item">济南银座商城</a>
            <a href="javascript:void(0)" data-index="济南" data-title="山东省济南市历下区泉城路188号恒隆广场373A铺位" data-mapx="117.030382" data-mapy="36.670595" data-markx="117.029969" data-marky="36.670783" class="item">济南恒隆广场</a>
            <a href="javascript:void(0)" data-index="济南" data-title="山东省济南市市中区经四路万达广场商业步行街157/158号铺 " data-mapx="117.008428" data-mapy="36.668387" data-markx="117.00841" data-marky="36.668358" class="item">济南万达</a>
            <a href="javascript:void(0)" data-index="重庆" data-title="重庆市江北区北城天街6、8号龙湖北城天街购物广场新馆2F14" data-mapx="106.540381" data-mapy="29.581997" data-markx="106.539411" data-marky="29.583065" class="item">重庆龙湖北城天街</a>
            <a href="javascript:void(0)" data-index="重庆" data-title="重庆市沙坪坝区双巷子9号凯瑞百货2楼" data-mapx="106.469071" data-mapy="29.564542" data-markx="106.467796" data-marky="29.56372" class="item">重庆新世纪百货凯瑞商都</a>
            <a href="javascript:void(0)" data-index="重庆" data-title="重庆市渝中区邹容路68号重庆大都会广场太平洋百货二楼" data-mapx="106.58555" data-mapy="29.563389" data-markx="106.584777" data-marky="29.56329" class="item">重庆太平洋百货</a>
            <a href="javascript:void(0)" data-index="重庆" data-title="重庆市江北区北城天街10号远东百货2楼" data-mapx="106.539917" data-mapy="29.584455" data-markx="106.540321" data-marky="29.584628" class="item">重庆远东太平洋</a>
            <a href="javascript:void(0)" data-index="重庆" data-title="重庆市南岸区江南大道28号G层033号铺位" data-mapx="106.577853" data-mapy="29.529717" data-markx="106.577027" data-marky="29.529796" class="item">重庆星光时代广场</a>
            <a href="javascript:void(0)" data-index="重庆" data-title="重庆市江北区观音桥建新北路1号新世纪百货世纪新都4F" data-mapx="106.539129" data-mapy="29.579374" data-markx="106.539071" data-marky="29.579429" class="item">重庆世纪新都DA</a>
            <a href="javascript:void(0)" data-index="重庆" data-title="重庆市沙坪坝区小新街49号王府井百货2F" data-mapx="106.470549" data-mapy="29.563464" data-markx="106.470872" data-marky="29.563409" class="item">重庆沙坪坝王府井</a>
            <a href="javascript:void(0)" data-index="重庆" data-title="重庆市九龙坡区杨家坪正街26号斌鑫世纪城新世纪百货瑞成商都2F " data-mapx="106.521768" data-mapy="29.517327" data-markx="106.52025" data-marky="29.516691" class="item">重庆瑞成商都</a>
            <a href="javascript:void(0)" data-index="重庆" data-title="重庆市渝中区长江2路174号龙湖时代天街A区2层08、09号" data-mapx="106.5178" data-mapy="29.544636" data-markx="106.517189" data-marky="29.543756" class="item">重庆时代天街</a>
        </div> 
    </div>
    <div class="wrap">
        <div class="vessel">
        	<div class="mapcontrol">
            	<div class="bg"><img src="/images/servicestorebg.png" /></div>
                <div class="menu"><img src="/images/servicestore.png" /></div>
                <div class="select">
                    <div id="selectdazzle" class="selectarea">
                        <div class="selecttitle"><img src="/images/storedazzle.png" /></div>
                        <div class="selectbox">                        
                            <div class="selectobj selectprovince">
                                <a href="javascript:void(0)" data-brand="dazzle" class="Selected">SELECT A PROVINCE</a>
                                <div class="selectlist">                       	
                                </div>
                            </div>
                            <div class="selectobj selectcity">
                            	<a href="javascript:void(0)" data-brand="dazzle" class="Selected">SELECT A CITY</a>
                                <div class="selectlist">                       	
                                </div>
                            </div>
                            <div class="selectobj selectstore">
                            	<a href="javascript:void(0)" data-brand="dazzle" class="Selected">SELECT A STORE</a>
                                <div class="selectlist">                       	
                                </div>
                            </div>    
                        </div>                        
                        <a href="javascript:void(0)" class="confirm"><img src="/images/confirm.png"/></a>
                    </div>
                    <div id="selectdiamond" class="selectarea">
                        <div class="selecttitle"><img src="/images/storediamond.png" /></div>
						<div class="selectbox">                        
                            <div class="selectobj selectprovince">
                                <a href="javascript:void(0)" data-brand="diamond" class="Selected">SELECT A PROVINCE</a>
                                <div class="selectlist">                       	
                                </div>
                            </div>
                            <div class="selectobj selectcity">
                            	<a href="javascript:void(0)"  data-brand="diamond" class="Selected">SELECT A CITY</a>
                                <div class="selectlist">                       	
                                </div>
                            </div>
                            <div class="selectobj selectstore">
                            	<a href="javascript:void(0)" data-brand="diamond" class="Selected">SELECT A STORE</a>
                                <div class="selectlist">                       	
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="confirm"><img src="/images/confirm.png"/></a>
                    </div>
                    <div id="selectdzzit" class="selectarea">
                        <div class="selecttitle"><img src="/images/storedzzit.png" /></div>
						<div class="selectbox">                        
                            <div class="selectobj selectprovince">
                                <div class="selectlist">                       	
                                </div>
                                <a href="javascript:void(0)" data-brand="dzzit" class="Selected">SELECT A PROVINCE</a>
                            </div>
                            <div class="selectobj selectcity">
                                <div class="selectlist">                       	
                                </div>
                            	<a href="javascript:void(0)" data-brand="dzzit" class="Selected">SELECT A CITY</a>
                            </div>
                            <div class="selectobj selectstore">
                                <div class="selectlist">                       	
                                </div>
                            	<a href="javascript:void(0)" data-brand="dzzit" class="Selected">SELECT A STORE</a>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="confirm"><img src="/images/confirm.png"/></a>
                    </div>
                </div>
            </div>
            <div class="map">
            	<div id="mapContent" class="MapContent"></div>
            </div>              
            <a href="javascript:history.go(-1);" class="servicecloseblack" ><img src="/images/closeblack.png" /></a>        
        </div>
    </div>
</body>
</html>