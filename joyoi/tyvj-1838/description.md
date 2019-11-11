# 

 
 # 题目背景 
JSOI2009第三轮二试 

 
 # 题目描述 
&nbsp;&nbsp;&nbsp;&nbsp;在火星游玩多日,jyy偶然地发现了一张藏宝图。根据藏宝图上说法，宝藏被埋藏在一个巨大的湖里的N个岛上(2&lt;=N&lt;=200,000)。为了方便描述，地图把整个湖划分成M行M列(1&lt;=M&lt;=1000),共M*M个小块，并把所有岛按照1...N编了号。第i个岛位于第Xi行Yi列（设其坐标为(Xi,Yi))的格子(Xi,Yi均为整数，并且满足1&lt;=Xi,Yi&lt;=M),岛上藏有价值财富Vi(1&lt;=Vi&lt;=10,000)。湖的左上角(1,1)和右下角(M,M)都有岛，有桥将它们与陆地相连。<BR>&nbsp;&nbsp;&nbsp;&nbsp;jyy没费多大劲，就找到了那个湖，同时哭笑不得地发现，所谓的财富，是各个岛上出产的珍稀水果。jyy&nbsp;在左上角的岛的岸边找到了一条小木船，他可以划船到其他岛上去。划船是要消耗体力的，具体地说，等于两岛&nbsp;Euclidean&nbsp;距离的平方(即，从(X1,Y1)划船到(X2,Y2)所耗费的体力为(X1-X2)^2+(Y1-Y2)^2个单位)。jyy可以吃水果来恢复体力，吃掉1单位价值的水果能恢复1单位体力。&nbsp;<BR>&nbsp;&nbsp;&nbsp;&nbsp;现在jyy打算从(1,1)旅行到(M,M)，沿途收集珍稀水果。按藏宝图上的提示，jyy&nbsp;离开一个岛后，就只能去该岛右下方的区域（正下和正右方向也是允许的），否则会遭遇水怪。jyy可以在旅行途中饿一段时间，即体力为负。但抵达终点后，只要身边有足够多的水果，他就会通过吃水果将体力恢复到旅行前的水平。&nbsp;<BR>&nbsp;&nbsp;&nbsp;&nbsp;jyy想知道，经过一次旅行，他最多能得到多少收益，即jyy收集到的水果总价值-jyy在旅途中花的总体力。(如果吃完所有水果他还饿着，收益就是负数，具体的例子见样例)&nbsp; 

 
 # 输入格式 
&nbsp;&nbsp;第1行：两个整数N,M。第2..N+1行：每行3个整数，第i+1行的3个整数分别为Xi，Yi，Vi。每个岛的坐标不同。保证存在坐标(1,1)和(M,M)的岛。&nbsp; 

 
 # 输出格式 
&nbsp;&nbsp;第1行：输出一个整数，表示最大收益。&nbsp; 

 
 # 提示 
20+60+10-((3-1)^2+(5-1)^2)-((10-3)^2+(10-5)^2)=-4<BR><BR>对20%的数据M&lt;=200，且N&lt;=2,000<BR>对50%的数据M&lt;=200，且N&lt;=20,000<BR>对100%的数据M&lt;=1000，且N&lt;=200,000<BR> 
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
<tr><td>4  10 
1  1  20 
10 10 10 
3  5  60 
5  3  30</td><td>-4</td></tr></table>