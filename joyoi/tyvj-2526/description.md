# 

 
 # 题目描述 
<p>
Farmer John's cows, pampered since birth, have reached new heights of

 
 # 输入格式 
<p>
* Line 1: Three space-separated integers: N, M, and E.

 
 # 输出格式 
<p>
* Line 1: a single integer that is either the minimum total salary to
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
<tr><td>3 0 4  //三头牛,要打扫从0到4号stall
0 2 3  //一号牛,从0号stall打扫到2号,工资为3
3 4 2
0 0 1

INPUT DETAILS:

FJ has three cows, and the barn needs to be cleaned from second 0 to second
4. The first cow is willing to work during seconds 0, 1, and 2 for a total
salary of 3, etc.
</td><td>5

OUTPUT DETAILS:

Farmer John can hire the first two cows.(问你最少花多少钱....)