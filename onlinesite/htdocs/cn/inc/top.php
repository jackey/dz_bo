<div class="top vessel">
	<div class="Logo"><img src="/Images/logo.png" /></div>
    <div class="Tools">
    	<div class="Edition">
        	<a href="javascript:void(0)" id="VerEn">EN</a>
            <a href="javascript:void(0)" id="VerCn" class="Activate">中文</a>
        </div>                
		<div class="clear"></div>
	    <form action="" id="Search" method="GET" >
        <div class="Search">
			<input type="text" value="搜索..." id="SearchText"/>
            <input value="" type="submit" id="SearchSubmit" />
        </div>
        </form>
    </div>
    <div class="Nav">
    	<ul>
        <?php
		if ($MenuVar==5)
		{
		?>

        	<li><a href="/CN/Job.php" <?php if ($NavVar==1) echo "class=\"Activate\""; ?>>加入天华</a></li>
        	<li><a href="javascript:void(0)" <?php if ($NavVar==2) echo "class=\"Activate\""; ?> >校园招聘</a></li>
        	<li><a href="javascript:void(0)" <?php if ($NavVar==3) echo "class=\"Activate\""; ?> >社会招聘</a></li>
        	<li><a href="javascript:void(0)" <?php if ($NavVar==4) echo "class=\"Activate\""; ?> >常见问题</a></li>
        <?php
		}
		?>

        </ul>
        <div class="clear"></div>
    </div>
</div>
<a href="javascript:void(0)" class="MenuBox"><img src="/Images/menu.png"></a>
<div class="clear"></div>