# 

 
 # 题目描述 
<p>
从前有2只狗，大的叫大狗，小的叫小狗，它们2个合起来就是狗儿们，使用英语的人把它们写作Girlman，传来传去，到最后大家决定叫它们格尔曼。它们的叫声很特别，但是它们十分吝啬它们的叫声，你为了听到它们的叫声，决定买狗饼干送给它们吃，不同种类的饼干能让它们叫的次数不一样，同一块饼干对于大小格尔曼的效果也不一样。它们很贪婪，如果你只给其中一只格尔曼吃狗饼干或者给两只格尔曼吃的不一样，有一只就会不高兴，因此你买狗饼干的时候总要两块两块地买，而且现在每类饼干也只有2块（想要多的也没得）。现在不是流行节约型社会吗？因此你也不能浪费，你要求的是在满足你要听格尔曼叫声次数要求的情况（两只格尔曼实际叫的次数都不小于你的要求即可）下的最小花费是多少。</p> 

 
 # 输入格式 
<p>
输入文件的第一行为3个整数n、s、b，分别表示狗饼干的类数、你想听到的小格尔曼的叫声次数和大格尔曼的叫声次数，接下来有n行，第i+1行有3个整数si、bi、ci，分别表示第i类狗饼干能让小格尔曼叫的次数、能让大格尔曼叫的次数和该类饼干的单价。</p> 

 
 # 输出格式 
<p>
输出文件只有一个整数，为满足你的要求情况下的最小花费。</p> 

 
 # 提示 
<p>
【数据范围】
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
<tr><td>5 5 10
1 2 5
2 4 10
3 7 8
1 11 36
6 0 18
</td><td>36</td></tr></table>