# 

 
 # 题目描述 
<p>
Every year the cows hold an event featuring a peculiar version of

 
 # 输入格式 
<p>
* Line 1: Three space-separated integers: L, N, and M

 
 # 输出格式 
<p>
* Line 1: A single integer that is the maximum of the shortest
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
<tr><td>25 5 2
2
14
11
21
17

5 rocks at distances 2, 11, 14, 17, and 21. Starting rock at position
0, finishing rock at position 25.
</td><td>4

OUTPUT DETAILS:

Before removing any rocks, the shortest jump was a jump of 2 from
0 (the start) to 2. After removing the rocks at 2 and 14, the
shortest required jump is a jump of 4 (from 17 to 21 or from 21 to
25).