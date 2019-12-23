
# 题目描述

fls 目睹 yky 为了造一套好题呕心沥血，日夜操劳。为了缓解 yky 的压力，fls 决定送给他一只大毒瘤。

随着新生的到来，毒瘤发现，九龙湖校园里的交通工具越来越多，停车是个大问题。

更可怕的是，毒瘤惊讶地发现，在月黑风高的夜晚，车与车之间还会相互攻击。

毒瘤带着你来到了一块停车场，一共有 $N^2$ 个车位，排成 $N \times N$ 的矩阵形状。你可以理解为，每个车位是这个 $N \times N$ 网格图中的一个小方格。

现在，我们需要在停车场中停入恰好 $N$ 辆车，但这些车之间不能互相攻击。即不能有两个车出现在矩阵的同一行或者同一列，否则它们就会同归于尽。

同时，由于毒瘤在某些格子放置了障碍，并不是每一个格子都可以停车。我们会给出一个输入矩阵来表示停车场，对于每一个格子会有一个对应的数字 $0$ 或 $1$。我们用 $0$ 来表示可以停车的格子，用 $1$ 来表示不能停车的格子。

多亏了辛勤的校园管理，我们发现，每一行、每一列有障碍的车位数量都恰好是 $1$。

现在，对于一个给定的停车场，毒瘤需要你求出有多少种不同停车方案使得所有的车不会互相攻击。两个方案不同当且仅当存在某个格子在一个方案中被停车而另一个方案中未被停车。在统计方案时，我们认为所有的车都是相同的。

# 输入格式

第一行有一个正整数 $N(N \leq 17)$。

第二行开始是一个 $N\times N$ 的 $01$ 矩阵。

你可以参考样例输入来进一步了解输入格式。

# 输出格式

输出一个整数，表示所求的方案数。

# 样例

### 样例输入

``` plain
2
0 1
1 0
```

### 样例输出

``` plain
1
```

# 数据范围与提示


