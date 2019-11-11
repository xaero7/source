# 

 
 # 题目描述 
<p>
近期降雨量很少，因此精灵王想建造一个灌溉系统，浇灌王国中的N (1 <= N <= 2000)块田地。

 
 # 输入格式 
<p>
第1行：整数N和C。

 
 # 输出格式 
<p>
第1行：搭建连接所有田地的灌溉系统的最少费用。如果不能搭建灌溉系统，输出-1。</p> 

 
 # 提示 
<p>
共有3块田地，坐标分别为(0,2)，(5,0)，(4,3)。矮人族只愿意搭建最小花费为11的水管。精灵王不能在 (4,3) 和 (5,0) 之间搭建水管，因为它们的距离是10。精灵王只能在 (0, 2) 和 (5, 0) 之间搭建水管，费用为29；在 (0, 2) 和 (4, 3) 之间搭建水管，费用为17。</p> 
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
<tr><td>3 11
0 2
5 0
4 3
</td><td>46</td></tr></table>