# 

 
 # 题目描述 
<p>
在一个1行N列（N是奇数）的棋盘上，有K个格子是红色的。这种情况下，你有一个跳棋在最左端的格子上。你的目标是将它移动到最右边的格子，在开始移动之间，你可以在棋盘的任意空位上放棋子。在游戏开始后

 
 # 输入格式 
<p>
第一行一个正奇数N

 
 # 输出格式 
<p>
两个数字用空格分开，分别代表第一问和第二问的结果.

 
 # 提示 
<p>
在游戏开始前，可以在第二个格子上放上一个棋子，游戏开始后可用最左边的棋子吃掉它，从而移动到第三格。然后由于第四格是个红色的格子，在游戏中可以在那放一个棋子，然后用已经移动第三格的棋子把它吃掉，从而达到终点。
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
<tr><td>5
0 0 0 1 0
</td><td>1 1</td></tr></table>