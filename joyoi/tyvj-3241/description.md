# 

 
 # 题目描述 
<p>
山海经(hill.pas/c/cpp)

 
 # 输入格式 
<p>
输入第一行是两个数n，m，2≤n≤100000，1≤m≤100000，n表示一共有n座山，m表示老师想查询的数目。

 
 # 输出格式 
<p>
一共有m行，每行有三个数i，j，s，表示从第i座山到第j座山总的喜恶度为s。显然，对于每个查询，有a≤i≤j≤b，如果有多组解，则输出i最少的，如果i也相等，则输出j最少的解。</p> 
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
<tr><td>5 3
5 -6 3 -1 4
1 3
1 5
5 5</td><td>1 1 5
3 5 6
5 5 4</td></tr></table>