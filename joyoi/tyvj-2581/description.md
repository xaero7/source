# 

 
 # 题目描述 
<p>
Bessie and the rest of Farmer John's cows are taking a trip this

 
 # 输入格式 
<p>
* Line 1: Three space-separated integers: V, R, and C, which

 
 # 输出格式 
<p>
A single number value, printed to two exactly decimal places: the
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
<tr><td>1 3 3  //奶牛开始在左上角，速度为1,它可以移动到别的格子上，速度会发生变化
1 5 3 //这个3*3的数矩阵代表每个格子的参数，当从一个格子A到B时，速度变成V*2^(A-B)
6 3 5
2 4 3
</td><td>29.00

OUTPUT DETAILS:

Bessie's best route is:
	Start at 1,1 time  0 speed 1
	East  to 1,2 time  1 speed 1/16
	South to 2,2 time 17 speed 1/4
	South to 3,2 time 21 speed 1/8
	East  to 3,3 time 29 speed 1/4