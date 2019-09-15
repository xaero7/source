
# 题目描述

众所周知，《野蛮5》是一款非常野蛮的游戏。许多最初怀有和平发展之心的玩家，最终都活成了自己讨厌的样子，走向了穷兵黩武、四处征伐的道路。

小 Q 攻占了邻国的 $n$ 座城市。由于 AI 糟糕的规划，这些城市由 $n-1$ 条长度为 $1$ 的双向道路联通，换句话说这些城市构成了一棵树。由于刚刚签订了和约，小 Q 决定将主力部队撤回本土，只挑选一些城市(至少两座)留下驻军。

小 Q 希望各城市驻军之间能互相支援，以利于防御。防御难度取决于最远的两座有驻军的城市之间的距离。假设挑选出的城市为集合 $S$，防御难度为 $H$，有以下公式。

$$
H = max\{ dist(x,y) | x,y \in S,\ x =\not y\},\ dist(x,y)\ 表示城市\ x,y\ 之间的距离
$$

小 Q 希望知道，对于每一个 $1 \leq i < n$，求有多少种留下驻军的方式，使得防御难度为 $i$，由于答案可能很大，请将答案对 $10^9+7$ 取模。

# 输入格式

第一行一个整数 $n(2 \leq n \leq 2\times 10^3)$，含义如上所述。

接下来 $n-1$ 行，每行两个整数 $x,\ y(1 \leq x,\ y \leq n)$，表示树中有一条连接点 $x$ 和点 $y$ 的边。

数据保证给出的是一棵合法的树

# 输出格式

请输出 $n-1$ 行。

其中第 $i$ 行输出一个整数，表示防御难度为 $i$ 时的答案对 $10^9+7$ 取模的结果。

# 样例

#### 样例输入

```plain
5
1 2
2 3
2 4
3 5
```

#### 样例输出

```plain
4
10
12
0
```

# 数据范围与提示


