# 

 
 # 题目背景 
(*总背景*)<BR>&nbsp;&nbsp;&nbsp;&nbsp;公元3000年一月一日……<BR>&nbsp;&nbsp;&nbsp;&nbsp;Summer联盟的司令HF（兼主席）：“30世纪世界和平，科技飞跃，真是美好的一世纪呀。加上这个跨世纪新年过的红红火火，相信31世纪是美好的一个世纪。”<BR>&nbsp;&nbsp;&nbsp;&nbsp;“司令，受到来自Winter的视频！”<BR>&nbsp;&nbsp;&nbsp;&nbsp;“来看看，是新年贺电吗？”<BR>&nbsp;&nbsp;&nbsp;&nbsp;视频中：&nbsp;<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Winter联盟的司令PL（兼主席）：“快点备战，他们发动总攻了，微子！是微子！”<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HF:“谁？什么是微子？”<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;视频震荡，出现雪花…“受到不知名干扰，这是什么，天哪。”操作员满脸疑惑。<BR>&nbsp;&nbsp;&nbsp;&nbsp;屏幕再次正常：<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“司令，Guiolk的微子攻击将全面展开，直接投降是你们最佳的选择，相信我。”一个人坐在电子移动器上狰狞地笑着，后来，我们知道，这个人就是Guiolk联盟的司令TT（兼主席）。<BR>&nbsp;&nbsp;&nbsp;&nbsp;宇宙中，战舰、机器人蜂拥而出，而他们后面，有一个星球般巨大的机器——微子能源的核心。<BR>&nbsp;&nbsp;&nbsp;&nbsp;HF：“糟糕，这一年一定不平常！”<BR>&nbsp;&nbsp;&nbsp;&nbsp;PL眉头紧锁，有预见性的眼睛出神的望着太空……<BR><BR>微子危机<BR><BR>【历史】<BR>公元2899年，Winter联盟成立。<BR>公元2901年，Guiolk联盟秘密成立。<BR>公元2909年，Summer联盟成立。<BR>公元2911年，Guiolk联盟开始秘密活动。<BR>公元2925年，Guiolk联盟秘密用微子能进行实验。<BR>公元2939年，Winter和Summer成为公认宇宙最大联盟。<BR>公元2957年，Summer联盟研发出全宇宙最先进的核能技术。<BR>公元2964年，HF就任Summer联盟主席。<BR>公元2979年，Summer联盟研制出全宇宙最强大的核弹。<BR>公元2991年1月，PL就任Winter联盟主席。<BR>公元2993年，Guiolk联盟秘密研制出微子能武器。<BR>公元2994年，Guiolk联盟拥有了与两大宇宙联盟抗衡的实力。<BR>公元2998年8月，TT就任Guiolk联盟主席。<BR>公元2999年9月，Guiolk联盟向各星球宣布它的存在，并向各星球挑衅。<BR>公元3000年1月1日，Guiolk联盟发动攻击。<BR>公元3000年1月，Summer、Winter联盟意识到Guiolk的邪恶计划。<BR>公元3000年12月，Winter联盟着手研制防微子能武器。<BR>公元3001年1月，Summer联盟研制出核能压缩技术。<BR>公元3001年3月，Summer、Winter联盟与Guiolk联盟彻底决裂。<BR>公元3001年5月15日，Summer、Winter联盟联合，战争全面爆发。<BR>【时代背景】<BR>&nbsp;&nbsp;&nbsp;&nbsp;公元3000年，Guiolk联盟企图利用微子能——一种新能源征服宇宙，宇宙联盟Summer、Winter为了阻止Guiolk联盟领袖TT，与其展开了一场前所未有的战争，宇宙的命运就决定于你的抉择。<BR><BR><BR>№.1<BR>邪恶的Guiolk联盟领袖TT准备开采微子能用以征服宇宙。微子能要在二维空间里开采。 

 
 # 题目描述 
微子能开采场就是一个正方形，我们用边长n表示它的大小。<BR>我们要开采的微子能有两种：正微子能和负微子能。通常微子能存在于微子矿中，但是开采的时候，微子能会发生化学反应：正微子能与负微子能会互相排斥，并随之消逝，即是说每1单位正微子能都会与1单位负微子能一起消失。<BR>(*注：比如说要采集-10和20（这个不是正方形），10单位的正微子能会与10单位的负微子能一起消失，就只能采集到10单位的正微子能。*)<BR>Guiolk联盟的微子能采集机器是一个可以自由变换边长的正方形机器，一次可以在开采场中采集一个正方形。<BR>TT十分贪心，他想采集最多的正微子能或负微子能。现在他给你一个微子能矿的探测图，并威胁你帮他计算最多一次能采集的正微子能和一次能采集的负微子能的数量。<BR> 

 
 # 输入格式 
第一行有一个非负整数n，表示微子能开采场的大小。（0≤n≤100）<BR>接下来有n行，每行n个数（用空格隔开），第c行里的第d个数表示微子能开采场的位置为(c,d)的矿石包含的微子能能量，如果包含的是正微子能就用正数表示，如果包含的是负微子能就用负数表示。（每个矿石包含的能量都是整数，而且能量不会超过10000）。<BR> 

 
 # 输出格式 
两个数，每行一个。第一行为最多一次能采集的正微子能的能量（如果无法采到正微子能输出0）。第二行为最多一次能采集的负微子能的能量（如果无法采到负微子能输出0）。<BR> 

 
 # 提示 
对于70%的数据，0≤n≤20；对于100%的数据，0≤n≤100。<BR><BR>负微子能只是用负数表示而已，它的能量值还是正数。<BR>采集的微子能范围是正方形，边长相等。<BR>样例中最多采集的正微子能是采集从(1,2)到(1,2)的能量（边长1），最多采集负微子能是采集从(2,1)到(2,1)的能量（边长1）。<BR>2010年广州市第二中学初二第二次测试第一题。 
# 样例数据
<style>
        table,table tr th, table tr td { border:1px solid #0094ff; }
        table { width: 200px; min-height: 25px; line-height: 25px; text-align: center; border-collapse: collapse;}   
    </style>
<table>
	<tr>
		<td>输入样例</td>
		<td>输出样例</td>
	</tr>
<tr><td>2
1 2
-1 -1
</td><td>2
1
</td></tr></table>