# 

 
 # 题目描述 
<p>


 
 # 输入格式 
<p>
输入文件的第一行包含5个数N, M, x, y和K。N和M描述舞厅的大小，x和y为钢琴的初始位置（x行y列）；我们对船体倾斜情况是按时间的区间来描述的，且从1开始计量时间，比如“在[1, 3]时间里向东倾斜，[4, 5]时间里向北倾斜”，因此这里的K表示区间的数目。

 
 # 输出格式 
<p>
输出文件仅有1行，包含一个整数，表示钢琴滑行的最长距离(即格子数)。
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
<tr><td>4 5 4 1 3
..xx.
.....
...x.
.....
1 3 4
4 5 1
6 7 3
</td><td>6</td></tr></table>