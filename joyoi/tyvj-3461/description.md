# 

 
 # 题目描述 
<p>
小H的聚会（party.pas/c/cpp）

 
 # 输入格式 
<p>
　　输入文件party.in的第1行都是两个整数N和M。N表示小H的好友总数，M表示小Y和小Z列出来的可以直接联系的好友对数。输入文件的第2行包含N个在[1, N-1]范围内的整数，依次描述k1, k2, …, kN。相邻的两个数字之间用一个空格隔开。以下M行，每行描述一对可以互相联系的好友，格式为ui vi ci。表示ui和vi可以直接联系，他们的联系愉快程度为ci。

 
 # 输出格式 
<p>
　　输出文件Party.out的第1行为一个整数，表示你找到的最大的愉快程度。
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
<tr><td>5 6 
1 1 4 2 2 
1 2 5 
1 3 3 
2 3 6 
2 5 3 
3 4 10 
4 5 5 
0.00001 
</td><td>
24 
2 
3 
5 
6 </td></tr></table>