# 

 
 # 题目描述 
孤单&nbsp;是一个人的狂欢<BR>狂欢&nbsp;是一群人的孤单<BR>Oier中有许许多多寂寞的人，ta们唱着寂寞的歌，走过一个个寂寞的日子，只为了心头那一盏不灭的灯，相信寂寞的尽头是属于ta们的远方。。。<BR>为了给Oier们提供一个放松的机会，也为了与日夜思念的。。。相见，迷惘岛上的潇湘夜苑举办了一次特别的舞会。。。smileJJ得知了这个消息后，迫不及待地赶往迷惘岛，希望。。。但是穿越了残月海，紫冰山。。。之后站在迷惘岛上的smileJJ感到十分迷惘。。。因为眼前的景象。。。有n个巨大的（矩形）广场将小岛分成了若干区域，广场周边的大理石墙壁使它们互不相通。。。smileJJ看到一扇门，上面写着：只要你说出正确的密语，舞会的大门就会为你敞开。。。而密语便是这些广场将小岛划分成的区域个数（温馨提示：小岛很大，广场不会将它完全铺满。。。），smileJJ站在山头上数了好久。。。请你帮助ta尽快找到密语，那么你也将会收到岛主的热情邀请。。。<BR>当smileJJ找到密语打开大门后，被眼前的繁华景象吓了一跳。。。好大好美的琉璃宫哦。。。<BR>这时，空中突然传来一个飘渺的声音：有些人是注定孤单的，即使ta拿到了幸福密码。。。<BR>原来，smileJJ手中的密码（就是区域个数）分两种，一种叫“孤单”（奇数）一种叫“狂欢”（偶数），抽到“孤单”密码的人必须在规定时间内跳出世界上最动人的舞蹈，否则就会被驱逐出岛。。。<BR>而最动人的舞步是这样规定的，就是在踩到所有广场的左下角与右上角（一次且仅一次）的前提下使走过的总距离最小，而你只需输出这个最小距离（不需输出区域数）<BR>（温馨提示：任意两点之间的距离表示为曼哈顿距离dist=abs(x1-x2)+abs(y1-y2);<BR> 

 
 # 输入格式 
第一行一个整数n，表示矩形广场个数（1&lt;=n&lt;=100)<BR>下面n行分别给出每一个矩形广场的左下角与右上角坐标(x1,y1)&nbsp;&nbsp;&nbsp;(x2,y2)<BR>（0&lt;=x,y&lt;=10^4)<BR> 

 
 # 输出格式 
如果密码为“狂欢”，则只需输出区域数<BR>如果密码为“孤单”，则只需输出最小距离<BR> 

 
 # 提示 
40%孤单<BR>60%狂欢<BR> 
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
<tr><td>3
10 20 50 30
40 10 50 25
40 25 80 30
</td><td>6</td></tr></table>