# 

 
 # 题目描述 
<p>
给出n个结点以及每个点初始时对应的权值wi。起始时点与点之间没有连边。有3类操作：

 
 # 输入格式 
<p>
第一行包含一个整数n(1<=n<=30000)，表示节点的数目。

 
 # 输出格式 
<p>
输出所有bridge操作和excursion操作对应的输出，每个一行。</p> 
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
4 2 4 5 6
10
excursion 1 1
excursion 1 2
bridge 1 2
excursion 1 2
bridge 3 4
bridge 3 5
excursion 4 5
bridge 1 3
excursion 2 4
excursion 2 5</td><td>
4
impossible
yes
6
yes
yes
15
yes
15
16</td></tr></table>