# 

 
 # 题目背景 
广东汕头聿怀初中&nbsp;Train#3&nbsp;Problem&nbsp;4<BR> 

 
 # 题目描述 
众所周知，麻将是我们国家的国粹。这段时间，小D也迷上了麻将这个老少皆宜的游戏。<BR>小D觉得这些不同规则的麻将太麻烦了，所以他集合了很多种麻将规则创造出了一套D麻将。下面是D麻将的几个特点：<BR>D麻将中有三种花色，万（w）索（s）筒（t），每个花色下有9张牌，每张牌有4个。<BR>D麻将中没有杠牌，只有顺子和刻子。顺子的含义是相同花色的三张连在一起的牌型（比如说2w3w4w）；刻子的含义是三张花色和数字都相同的牌型（比如说2s2s2s）。<BR>D麻将的胡牌的时候手上往往有14张牌，14张牌凑成了四个顺子或刻子和两张一样的牌做雀头就可以胡牌了。<BR>D麻将胡牌的时候有很多种不同的牌型，不同的牌型会有不一样的番数。你的一种牌型可能满足了多个加番牌型，满足多个的情况下就把所有满足的牌型的番数全部加起来计算。<BR>D麻将中有如下牌型可以加番：<BR>平和（一番）：4个顺子组成；<BR>断幺九（一番）：胡牌的时候手上只有2-8的数字组成的牌型；<BR>一杯口（一番）：同花色同数值的顺子两组；<BR>混全带幺九（一番）：全部的顺子，刻子中都含有数字1或9；<BR>三色同顺（一番）：三种花色同数值的顺子各一组；<BR>一气贯通（一番）：由同花色一至九组成顺子；<BR>一色三顺（两番）：同花色同数值顺子三组；<BR>对对和（两番）：四组刻子；<BR>两杯口（三番）：由两组不同的一杯口组成；<BR>三色同刻（三番）：三种花色同数值的刻子各一组；<BR>清一色（六番）：全部由同一种花色的顺子，刻子及雀头组成；<BR>清老头（六番）：全部由1或9的刻子和雀头组成；<BR>比如说一个牌型为1s2s3s4s5s6s7s8s9s1s2s3s9s9s的牌，它满足了平和、一杯口、一气贯通、清一色四个牌型，所以它的番数是9番。<BR>小D希望为D麻将做一个程序来帮忙判断这个牌型的番数是多少。<BR><BR> 

 
 # 输入格式 
输入第一行一个测试组数T。<BR>接下来T行每行一个字符串s，表示需要判断番数的牌型。length(s)=28<BR><BR><BR> 

 
 # 输出格式 
输出有T行每行一个整数，表示判断牌型的番数为多少。<BR> 

 
 # 提示 
T&lt;=10Vivian&nbsp;Snow<BR> 
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
<tr><td>1
1s2s3s4s5s6s7s8s9s1s2s3s9s9s


</td><td>9
</td></tr></table>