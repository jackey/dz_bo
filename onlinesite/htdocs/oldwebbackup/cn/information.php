<!DOCTYPE html>
<html lang="en">
<?php
	$PageTitle="Dazzle -- index";
	/*Nav select*/
?>
<head>
    <?php include 'inc/head.php'; ?>
    <script>
			var vesselinfo="corporate";
			<?php
				if(isset($_GET["type"])){
					echo "vesselinfo='" .$_GET["type"] ."';";
				}
			?>		
    </script>
    <script type="text/javascript" src="/js/infomation.js"></script>

</head>

<body id="information">
	<div class="top">
        <ul class="menucontrol">
            <li><a href="javascript:void(0)" data-vessel="0"><img src="/images/rightmenu0.png" /></a></li>
            <li><a href="javascript:void(0)" data-vessel="1"><img src="/images/rightmenu1.png" /></a></li>
            <li><a href="javascript:void(0)" data-vessel="2"><img src="/images/rightmenu2.png" /></a></li>
            <li><a href="javascript:void(0)" data-vessel="3"><img src="/images/rightmenu3.png" /></a></li>            
        </ul>
    </div>
    <div class="wrap">
        <div class="vessel info1">
			<div class="pic">
            <img src="/images/info1.png" />
            </div>
			<div class="text">
            	<div class="title"><img src="/images/infotitle1.png" /></div>
                <div class="cont">
                    Dazzle Fashion Co.,Ltd. is a Shanghai group founded in 2002. Currently owns three brands: DAZZLE, DIAMOND DAZZLE and d'zzit.<br/><br/>
                    
                    The three brands were introduced to promote unique lifestyles. High street fashion brand DAZZLE is independent and expressive; semi couture brand DIAMOND DAZZLE gives women a refreshing and luxurious touch; and d'zzit is designed for trendy teenage girls and the ones on their early 20s.<br/><br/>
                    
                    Currently, Dazzle Fashion has clear positioning in the market for our 3 brands. Our design team is the cutting-edge of the fashion industry, and they are supported by our modern supply chain management, and advanced marketing & sales system to promote the development and expansion of all our brands. By the end of 2013, Dazzle Fashion has developed a fully established corporate network which covers 800 stores in 30 provincial areas nationwide. We have also developed the partnership with many chained and independent department stores.    <br/><br/>
                    
                    In the future, Dazzle Fashion will commit more energy and resources on building brand core values. It is our hope, that the unique creativity, artistic design and the tailor-made shopping experience we offered for the consumers will create a fashion paradise for them. <br/><br/>
                    
                    It is our belief that dedication and creativity will infuse the fresh energy to our life. Love creates anything. This is our corporate spirit, and it will guide us to a bright future!  
                </div>
            </div>
            <img class="infoarrow" src="/images/infoarrow.png" />
        </div>
		<div class="vessel info2">
			<div class="pic">
            	<img src="/images/info2.png" />
                <a href="/cn/brandpage.php?brand=Dazzle" id="branddazzle"></a>
                <a href="/cn/brandpage.php?brand=Diamond" id="branddiamond"></a>
                <a href="/cn/brandpage.php?brand=dzzit" id="branddzzit"></a>
            </div>
			<div class="text">
            	<div class="title"><img src="/images/infotitle2.png" /></div>
                <div class="cont">
                    DAZZLE is a leading high street fashion brand. Influenced by Italian design from the brand's inception, DAZZLE is designed for independent and expressive young ladies who are both chic and refined. DAZZLE is unique in the way that it is unrestrictive and personal. For each new season, the focus is on the expression of female body curves; the design retains the essence of the style, and it makes the DAZZLE lady stand out from the crowd.   <br/><br/>
                    Inspired by Italian fashion design, DIAMOND DAZZLE blends in elements of modernity and luxury, and it is committed to create the new image for women in the 21st century. Exact handcrafting details, complex sewing technique, and the touch of haute couture have all been widely applied in DIAMOND DAZZLE new arrivals of each season.<br/><br/>
                    D'zzit is for young girls who adore European fashion style, appreciate cosmopolitan beauty standards, and are keen on the latest fashion trends globally.   <br/><br/>
                </div>
            </div>
            <img class="infoarrow" src="/images/infoarrow.png" />
        </div>
        <div class="vessel infomedia">
			<div class="menu">
            	<div class="title"><img src="/images/infotitlemedia.png" /></div>
                <div class="cont">
                	<ul>
                    	<li>Summer 2014</li>
                    	<li>Spring 2014</li>
                    	<li>Fall 2014</li>
                    	<li>Winter 2014</li>
                    	<li>Summer 2013</li>
                    	<li>Spring 2013</li>
                    </ul>                
                </div>
            </div>
            <video id="beginVideo"
                 controls
                 loop="loop"> 
                  <source src="/video/dazzle_final.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
				  <source src="/video/dazzle_final.webm" type='video/webm; codecs="vp8, vorbis"' />
                 <div id="mediaplayer">JW Player goes here</div>
                 
				<script type="text/javascript">
                    jwplayer("mediaplayer").setup({
                        flashplayer: "/flash/player.swf",
                        file: "/video/dazzle_final.mp4"
                    });
                </script>  
            </video>
            <img class="infoarrow" src="/images/infoarrow.png" />
        </div>
        <div class="vessel info3">
			<div class="pic">
            <img src="/images/info3.png" />
            </div>
			<div class="text">
            	<div class="title"><img src="/images/infotitle3.png" /></div>
                <div class="cont">
                    Follow us for other career opportunities on:<br/><br/>

                51JOB：	<a href="51JOB.COM" target="_blank">51JOB.COM</a><br/>
                智联招聘：	<a href="ZHAOPIN.COM" target="_blank">ZHAOPIN.COM</a><br/>
                    猎聘网：	<a href="LIEPIN.COM" target="_blank">LIEPIN.COM</a><br/>
                </div>
            </div>
            <img class="infoarrow" src="/images/infoarrow.png" />
        </div>
        <div class="vessel info4">        
			<div class="pic">
            <img src="/images/infotitle4.png" />
            </div>
        	<div class="ViewArea">
                <div class="EmployeeView">
                    <div class="Employee">
                        <div class="EmployeeMask">
                            <div class="EmployeeName">服装设计助理</div>
                            <div class="EmployeeCont">岗位职责 <br/><br/>
                                1. 协助主设计师进行设计工作；<br/> 
                                2. 悟性强，学习吸收能力强，具有培养潜力；<br/>
                                3. 本岗位欢迎有获得大奖经历的优秀毕业生前来应聘,我们将重点培养。<br/><br/>
                                
                                任职资格<br/><br/>
                                
                                1. 正规全日制本科以上毕业；<br/>
                                2. 追求时尚的有志青年。<br/>
                            </div>
                        </div> 
                    </div>
                    <div class="Employee">
                        <div class="EmployeeMask">
                            <div class="EmployeeName">图案设计助理</div>
                            <div class="EmployeeCont">岗位职责<br/><br/>
                                
                                1. 配合图案设计师完成每一季的面料及服装印花图案开发工作；<br/>
                                2. 根据图案设计师要求修改作品；<br/>
                                3. 收集时尚元素。<br/><br/>
                                
                                任职资格<br/><br/>
                                
                                1. 平面设计或织染艺术设计类、纺织品设计专业毕业优先；<br/>
                                2. 熟练使用 Photoshop，Coreldraw，AI 等相关绘图软件；<br/>
                                3. 具备良好的美术手绘功底，有一定的时尚敏感度；<br/>
                                4. 性格外向开朗，具有良好的沟通能力和团队协作。<br/>
							</div>
                        </div> 
                    </div>
                    <div class="Employee">
                        <div class="EmployeeMask">
                            <div class="EmployeeName">业务审计经理</div>
                            <div class="EmployeeCont">岗位职责<br/><br/>
                            
                                1. 代理商、托管商、零售终端业务管理的制度流程规范及实际执行情况的审计；<br/>
                                2. 品牌宣传的规范性的内控审计；<br/>
                                3. 百货商场等的工程装修的内控审计；<br/>
                                4. 代理商的销售回款的制度规范要求及实际执行情况的审计；<br/>
                                5. 固定资产的采购与付款的内控审计；<br/>
                                6. 面辅料采购与付款的内控审计；<br/>
                                7. 关联交易的制度及执行情况；<br/>
                                8. 对外投资的过程管理及撤出管理内控审计；<br/>
                                9. 其他领导交予的任务；<br/><br/>
                                
                                任职资格<br/><br/>
                                
                                1. 大专以上学历，营销管理、审计管理等相关专业；<br/>
                                2. 8年以上工作经验；<br/>
                                3. 能够敏锐地抓住业务的核心关键点；<br/>
                                4. 具有有责任感、使命感，忠诚勤勉；遵纪守法、保密；<br/>
                                5. 懂得与财务部密切配合，与各部门密切配合，落实公司制度政策、落实审计整改；<br/>
                                6. 能够适应经常出差。<br/>
                            </div>
                        </div> 
                    </div>
                    <div class="Employee">
                        <div class="EmployeeMask">
                            <div class="EmployeeName">数据分析师</div>
                            <div class="EmployeeCont">岗位职责<br/><br/>
    
                                1. 对服装行业市场环境进行分析研究；<br/>
                                2. 对公司指定的小课题运用统计学方法进行调研分析；<br/> 
                                3. 对公司经营管理数据进行分析； <br/>
                                4. 对公司管理层进行知识培训。<br/><br/>
                                
                                任职资格<br/><br/>
                                
                                
                                1. 重点大学研究生毕业（优秀应届毕业生亦可）； <br/>
                                2. 具有跨学科专业背景，本科专业为数学或应用数学、或物理学、或统计学、或计算机科学，研究生为统计学、或计量经济学、或市场营销、或MBA（市场研究方向）； <br/>
                                3. 精通数据建模，熟练操作SPSS、或R、或SAS、或EVIEWS等统计软件； <br/>
                                4. 良好的沟通表达能力、严谨的工作作风和踏实的工作态度； <br/>
                                5. 严密的逻辑分析能力、极强的学习能力、领悟能力、归纳能力和总结能力。<br/>
                            </div>
                        </div> 
                    </div>
                    <div class="Employee">
                        <div class="EmployeeMask">
                            <div class="EmployeeName">测试数据1</div>
                            <div class="EmployeeCont">岗位职责 <br/><br/>
                                1. 协助主设计师进行设计工作；<br/> 
                                2. 悟性强，学习吸收能力强，具有培养潜力；<br/>
                                3. 本岗位欢迎有获得大奖经历的优秀毕业生前来应聘,我们将重点培养。<br/><br/>
                                
                                任职资格<br/><br/>
                                
                                1. 正规全日制本科以上毕业；<br/>
                                2. 追求时尚的有志青年。<br/>
                            </div>
                        </div> 
                    </div>
                    <div class="Employee">
                        <div class="EmployeeMask">
                            <div class="EmployeeName">测试数据2</div>
                            <div class="EmployeeCont">岗位职责<br/><br/>
                                
                                1. 配合图案设计师完成每一季的面料及服装印花图案开发工作；<br/>
                                2. 根据图案设计师要求修改作品；<br/>
                                3. 收集时尚元素。<br/><br/>
                                
                                任职资格<br/><br/>
                                
                                1. 平面设计或织染艺术设计类、纺织品设计专业毕业优先；<br/>
                                2. 熟练使用 Photoshop，Coreldraw，AI 等相关绘图软件；<br/>
                                3. 具备良好的美术手绘功底，有一定的时尚敏感度；<br/>
                                4. 性格外向开朗，具有良好的沟通能力和团队协作。<br/>
							</div>
                        </div> 
                    </div>
                    <div class="Employee">
                        <div class="EmployeeMask">
                            <div class="EmployeeName">测试数据3</div>
                            <div class="EmployeeCont">岗位职责<br/><br/>
                            
                                1. 代理商、托管商、零售终端业务管理的制度流程规范及实际执行情况的审计；<br/>
                                2. 品牌宣传的规范性的内控审计；<br/>
                                3. 百货商场等的工程装修的内控审计；<br/>
                                4. 代理商的销售回款的制度规范要求及实际执行情况的审计；<br/>
                                5. 固定资产的采购与付款的内控审计；<br/>
                                6. 面辅料采购与付款的内控审计；<br/>
                                7. 关联交易的制度及执行情况；<br/>
                                8. 对外投资的过程管理及撤出管理内控审计；<br/>
                                9. 其他领导交予的任务；<br/><br/>
                                
                                任职资格<br/><br/>
                                
                                1. 大专以上学历，营销管理、审计管理等相关专业；<br/>
                                2. 8年以上工作经验；<br/>
                                3. 能够敏锐地抓住业务的核心关键点；<br/>
                                4. 具有有责任感、使命感，忠诚勤勉；遵纪守法、保密；<br/>
                                5. 懂得与财务部密切配合，与各部门密切配合，落实公司制度政策、落实审计整改；<br/>
                                6. 能够适应经常出差。<br/>
                            </div>
                        </div> 
                    </div>
                    <div class="Employee">
                        <div class="EmployeeMask">
                            <div class="EmployeeName">测试数据4</div>
                            <div class="EmployeeCont">岗位职责<br/><br/>
    
                                1. 对服装行业市场环境进行分析研究；<br/>
                                2. 对公司指定的小课题运用统计学方法进行调研分析；<br/> 
                                3. 对公司经营管理数据进行分析； <br/>
                                4. 对公司管理层进行知识培训。<br/><br/>
                                
                                任职资格<br/><br/>
                                
                                
                                1. 重点大学研究生毕业（优秀应届毕业生亦可）； <br/>
                                2. 具有跨学科专业背景，本科专业为数学或应用数学、或物理学、或统计学、或计算机科学，研究生为统计学、或计量经济学、或市场营销、或MBA（市场研究方向）； <br/>
                                3. 精通数据建模，熟练操作SPSS、或R、或SAS、或EVIEWS等统计软件； <br/>
                                4. 良好的沟通表达能力、严谨的工作作风和踏实的工作态度； <br/>
                                5. 严密的逻辑分析能力、极强的学习能力、领悟能力、归纳能力和总结能力。<br/>
                            </div>
                        </div> 
                    </div>
					<div class="Employee">
                        <div class="EmployeeMask">
                            <div class="EmployeeName">测试数据5</div>
                            <div class="EmployeeCont">岗位职责 <br/><br/>
                                1. 协助主设计师进行设计工作；<br/> 
                                2. 悟性强，学习吸收能力强，具有培养潜力；<br/>
                                3. 本岗位欢迎有获得大奖经历的优秀毕业生前来应聘,我们将重点培养。<br/><br/>
                                
                                任职资格<br/><br/>
                                
                                1. 正规全日制本科以上毕业；<br/>
                                2. 追求时尚的有志青年。<br/>
                            </div>
                        </div> 
                    </div>
                    <div class="Employee">
                        <div class="EmployeeMask">
                            <div class="EmployeeName">测试数据6</div>
                            <div class="EmployeeCont">岗位职责<br/><br/>
                                
                                1. 配合图案设计师完成每一季的面料及服装印花图案开发工作；<br/>
                                2. 根据图案设计师要求修改作品；<br/>
                                3. 收集时尚元素。<br/><br/>
                                
                                任职资格<br/><br/>
                                
                                1. 平面设计或织染艺术设计类、纺织品设计专业毕业优先；<br/>
                                2. 熟练使用 Photoshop，Coreldraw，AI 等相关绘图软件；<br/>
                                3. 具备良好的美术手绘功底，有一定的时尚敏感度；<br/>
                                4. 性格外向开朗，具有良好的沟通能力和团队协作。<br/>
							</div>
                        </div> 
                    </div>
                    <div class="Employee">
                        <div class="EmployeeMask">
                            <div class="EmployeeName">测试数据7</div>
                            <div class="EmployeeCont">岗位职责<br/><br/>
                            
                                1. 代理商、托管商、零售终端业务管理的制度流程规范及实际执行情况的审计；<br/>
                                2. 品牌宣传的规范性的内控审计；<br/>
                                3. 百货商场等的工程装修的内控审计；<br/>
                                4. 代理商的销售回款的制度规范要求及实际执行情况的审计；<br/>
                                5. 固定资产的采购与付款的内控审计；<br/>
                                6. 面辅料采购与付款的内控审计；<br/>
                                7. 关联交易的制度及执行情况；<br/>
                                8. 对外投资的过程管理及撤出管理内控审计；<br/>
                                9. 其他领导交予的任务；<br/><br/>
                                
                                任职资格<br/><br/>
                                
                                1. 大专以上学历，营销管理、审计管理等相关专业；<br/>
                                2. 8年以上工作经验；<br/>
                                3. 能够敏锐地抓住业务的核心关键点；<br/>
                                4. 具有有责任感、使命感，忠诚勤勉；遵纪守法、保密；<br/>
                                5. 懂得与财务部密切配合，与各部门密切配合，落实公司制度政策、落实审计整改；<br/>
                                6. 能够适应经常出差。<br/>
                            </div>
                        </div> 
                    </div>
                    <div class="Employee">
                        <div class="EmployeeMask">
                            <div class="EmployeeName">测试数据8</div>
                            <div class="EmployeeCont">岗位职责<br/><br/>
    
                                1. 对服装行业市场环境进行分析研究；<br/>
                                2. 对公司指定的小课题运用统计学方法进行调研分析；<br/> 
                                3. 对公司经营管理数据进行分析； <br/>
                                4. 对公司管理层进行知识培训。<br/><br/>
                                
                                任职资格<br/><br/>
                                
                                
                                1. 重点大学研究生毕业（优秀应届毕业生亦可）； <br/>
                                2. 具有跨学科专业背景，本科专业为数学或应用数学、或物理学、或统计学、或计算机科学，研究生为统计学、或计量经济学、或市场营销、或MBA（市场研究方向）； <br/>
                                3. 精通数据建模，熟练操作SPSS、或R、或SAS、或EVIEWS等统计软件； <br/>
                                4. 良好的沟通表达能力、严谨的工作作风和踏实的工作态度； <br/>
                                5. 严密的逻辑分析能力、极强的学习能力、领悟能力、归纳能力和总结能力。<br/>
                            </div>
                        </div> 
                    </div>
                  </div>
              </div>
              <div class="ViewControl">
                  <a class="ControlLeftBtn" href="javascript:void(0);"><img src="/images/controlleft.png"></a>
                  <a class="ControlRightBtn" href="javascript:void(0);"><img src="/images/controlright.png"></a>
              </div>
              <a class="infomenu" href="javascript:void(0);"><img src="/images/infomenu.png"></a>
        </div>
    </div>
</body>
</html>