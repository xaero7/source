# 

 
 # 题目描述 
<p>
给一棵m个结点的无根树，你可以选择一个度数大于1的结点作为根，然后给一些结点（根、内部结点和叶子均可）着以黑色或白色。你的着色方案应该保证根结点到每个叶子的简单路径上都至少包含一个有色结点（哪怕是这个叶子本身）。

 
 # 输入格式 
<p>
    第一行包含两个正整数m, n，其中n是叶子的个数，m是结点总数。结点编号为1，2，…，m，其中编号1，2，… ，n是叶子。以下n行每行一个0或1的整数（0表示黑色，1表示白色），依次为c[1]，c[2]，…，c[n]。以下m-1行每行两个整数a，b（1<=a < b <= m），表示结点a和b 有边相连。

 
 # 输出格式 
<p>
    仅一个数，即着色结点数的最小值。

 
 # 提示 
<p>
M<=10000
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
0
1
0
1 4
2 5
4 5
3 5
</td><td>
2</td></tr></table>