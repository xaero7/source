# 

 
 # 题目描述 
<p>
给出一个带权无向图,边的权值是关于权值成线性关系的.第i条边t时刻的权值为Ai*t+Bi.求出在时间段[t1,t2]内使最小生成树权和最大的时刻和此时的权和

 
 # 输入格式 
<p>
第一行四个正整数n,m,t1,t2

 
 # 输出格式 
<p>
使最小生成树权和最大的时刻的此时的权和,保留三位小数.

 
 # 提示 
<p>
N<=200,M<=1200</p> 
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
<tr><td>5 6 0 5
1 0-6 -4
2 0 3 -3
3 0 1 5
3 1 -2 -3
4 1-3 -2
4 3 -2 -3
</td><td>0.000 -13.000
