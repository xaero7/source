# 

 
 # 题目描述 
<p>
我们可以用三个正整数x y z来描述一个等差数列：x，x+z，x+2z，…，x+kz(x+kz≤y，x+(k+1)z>y)。

 
 # 输入格式 
<p>
Input file consists from multiple data sets separated by one or more empty lines.

 
 # 输出格式 
<p>
For each input data set you should print to standard output new line of text with either “no corruption” (low case) or two integers separated by single space (first one is reference that occurs odd number of times and second one is count of that reference).</p> 
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
<tr><td>1 10 1
2 10 1

1 10 1
1 10 1

1 10 1
4 4 1
1 5 1
6 10 1</td><td>
1 1
no corruption
4 3</td></tr></table>