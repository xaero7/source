# 

 
 # 题目描述 
<p>
捉迷藏

 
 # 输入格式 
<p>
第一行包含一个整数N，表示房间的个数，房间将被编号为1,2,3…N的整数。接下来N-1行每行两个整数a, b，表示房间a与房间b之间有一条走廊相连。接下来一行包含一个整数Q，表示操作次数。接着Q行，每行一个操作，如上文所示。

 
 # 输出格式 
<p>
对于每一个操作Game，输出一个非负整数到hide.out，表示最远的两个关灯房间的距离。若只有一个房间是关着灯的，输出0；若所有房间的灯都开着，输出-1。

 
 # 提示 
<p>
对于20%的数据，	N ≤50, M ≤100；
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
<tr><td>8
1 2
2 3
3 4
3 5
3 6
6 7
6 8
7
G
C 1
G
C 2
G
C 1
G
</td><td>4
3
3
4