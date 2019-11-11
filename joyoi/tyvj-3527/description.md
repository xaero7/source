# 

 
 # 题目描述 
<p>
L公司有N个工厂，由高到底分布在一座山上。如图所示，工厂1在山顶，工厂N在山脚。

 
 # 输入格式 
<p>
第一行包含一个整数N，表示工厂的个数。接下来N行每行包含两个整数Xi, Pi, Ci, 意义如题中所述。

 
 # 输出格式 
<p>
仅包含一个整数，为可以找到最优方案的费用。

 
 # 提示 
<p>
在工厂1和工厂3建立仓库，建立费用为10+10=20，运输费用为(9-5)*3 = 12，总费用32。
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
<tr><td>3
0 5 10
5 3 100
9 6 10
</td><td>32